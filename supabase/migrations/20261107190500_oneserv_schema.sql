-- OneServ Ops: the whole database, in one file.
--
-- Run it once in Supabase: SQL Editor > New query > paste this > Run.
-- It's safe to run again later (it only adds what's missing), so when a new version of this
-- file arrives you can just run it again.
--
-- Who can touch what:
--   * The CRM (staff, signed in) reads and writes the CRM tables. Row level security checks
--     that the signed-in person is on the `staff` list. Anyone else, including anyone holding
--     the public "anon" key, gets nothing.
--   * The backend uses the secret service key, which bypasses row level security. It alone
--     touches the portal's private tables (sign-in codes, push devices, reminder log).
--
-- Every id is text (a random UUID by default) so the CRM can make ids itself and the
-- backend can let the database make them.

-- ============================================================================
-- Helpers
-- ============================================================================

create or replace function touch_updated_at() returns trigger language plpgsql as $$
begin
  new.updated_at = now();
  return new;
end;
$$;

-- ============================================================================
-- Staff: who may sign in to the CRM
-- ============================================================================
-- A row here + a login under Authentication > Users = a person who can use the CRM.
-- Remove the row (or set active = false) to lock them out at once.

create table if not exists staff (
  user_id    uuid primary key references auth.users (id) on delete cascade,
  name       text not null default '',
  role       text not null default 'User' check (role in ('Admin', 'User')),
  active     boolean not null default true,
  created_at timestamptz not null default now()
);

create or replace function is_staff() returns boolean
language sql stable security definer set search_path = public as $$
  select exists (select 1 from staff where user_id = auth.uid() and active);
$$;
revoke all on function is_staff() from public;
grant execute on function is_staff() to authenticated;

-- ============================================================================
-- Customers
-- ============================================================================

create table if not exists companies (
  id              text primary key default gen_random_uuid()::text,
  name            text not null default '',
  address         text,
  billing_address jsonb,
  tags            text[] not null default '{}',
  source          text,
  servicem8_uuid  text,            -- links this customer to their ServiceM8 client (the portal needs it)
  extra           jsonb not null default '{}',   -- anything the CRM stores that has no column of its own
  created_at      timestamptz not null default now(),
  updated_at      timestamptz not null default now()
);
create index if not exists companies_servicem8_uuid_idx on companies (servicem8_uuid);

-- Multi-property accounts (letting agents): one row per property.
create table if not exists sites (
  id         text primary key default gen_random_uuid()::text,
  company_id text not null references companies (id) on delete cascade,
  label      text,
  address    text not null default ''
);
create index if not exists sites_company_idx on sites (company_id);

create table if not exists contacts (
  id               text primary key default gen_random_uuid()::text,
  company_id       text references companies (id) on delete cascade,
  title            text not null default '',
  first_name       text not null default '',
  last_name        text not null default '',
  email            text not null default '',
  phone            text not null default '',
  mobile           text not null default '',
  role             text not null default 'Job & Billing Contact',
  channel          text not null default 'sms',
  marketing_consent boolean not null default false,
  social_platform  text,           -- 'messenger' / 'instagram' for people who found us by DM
  social_id        text,
  site_id          text references sites (id) on delete set null,   -- a tenant belongs to one property
  extra            jsonb not null default '{}',
  created_at       timestamptz not null default now(),
  updated_at       timestamptz not null default now()
);
create index if not exists contacts_company_idx on contacts (company_id);
create index if not exists contacts_email_idx on contacts (lower(email));
create unique index if not exists contacts_social_idx on contacts (social_platform, social_id) where social_id is not null;

-- ============================================================================
-- Pipelines, conversations, calls
-- ============================================================================

create table if not exists deals (
  id                text primary key default gen_random_uuid()::text,
  contact_id        text references contacts (id) on delete cascade,
  pipeline          text not null,
  stage             text not null,
  value             numeric not null default 0,
  note              text,
  raw_payload       jsonb,          -- the original form / chatbot submission, kept for support
  appointment_date  text,           -- 'YYYY-MM-DD'
  appointment_time  text,           -- 'HH:MM'
  assigned_staff_id text,
  extra             jsonb not null default '{}',
  created_at        timestamptz not null default now(),
  updated_at        timestamptz not null default now()
);
create index if not exists deals_contact_idx on deals (contact_id);
create index if not exists deals_pipeline_stage_idx on deals (pipeline, stage);

create table if not exists messages (
  id         text primary key default gen_random_uuid()::text,
  contact_id text not null references contacts (id) on delete cascade,
  channel    text not null,
  sender     text not null check (sender in ('us', 'them')),
  subject    text,
  text       text not null default '',
  created_at timestamptz not null default now()
);
create index if not exists messages_contact_idx on messages (contact_id, created_at);

create table if not exists calls (
  id         text primary key default gen_random_uuid()::text,
  contact_id text references contacts (id) on delete cascade,
  direction  text not null default 'outbound',
  duration   integer not null default 0,
  outcome    text,
  notes      text,
  extra      jsonb not null default '{}',
  created_at timestamptz not null default now()
);
create index if not exists calls_contact_idx on calls (contact_id);

-- ============================================================================
-- What the customer portal shows from our side (jobs and invoices come from ServiceM8)
-- ============================================================================

create table if not exists care_plans (
  contact_id text primary key references contacts (id) on delete cascade,
  name       text not null,
  status     text not null,
  renews_on  text
);

create table if not exists equipment (
  id             text primary key default gen_random_uuid()::text,
  contact_id     text not null references contacts (id) on delete cascade,
  name           text not null,
  type           text,
  installed      text,
  warranty_until text,
  serial         text,
  created_at     timestamptz not null default now()
);
create index if not exists equipment_contact_idx on equipment (contact_id);

create table if not exists portal_documents (
  id         text primary key default gen_random_uuid()::text,
  contact_id text not null references contacts (id) on delete cascade,
  kind       text not null default 'certificate',
  title      text not null,
  issued     text,
  expires    text
);
create index if not exists portal_documents_contact_idx on portal_documents (contact_id);

-- ============================================================================
-- CRM settings: pipelines, automations, templates, workflows, team and so on.
-- One row per kind of setting, stored as JSON.
-- ============================================================================

create table if not exists app_settings (
  key        text primary key,
  value      jsonb not null,
  updated_at timestamptz not null default now(),
  updated_by uuid
);

-- ============================================================================
-- Portal internals (backend only: no staff or public access at all)
-- ============================================================================

-- One-time sign-in codes. Only a hash is stored, never the code itself.
create table if not exists portal_login_codes (
  email      text primary key,
  code_hash  text not null,
  expires_at timestamptz not null,
  attempts   integer not null default 0
);

-- Counts a wrong guess atomically, so two simultaneous guesses can't both count as one.
create or replace function portal_bump_attempts(p_email text) returns integer
language sql as $$
  update portal_login_codes set attempts = attempts + 1 where email = p_email returning attempts;
$$;
revoke all on function portal_bump_attempts(text) from public, anon, authenticated;

-- One row per phone a customer switched reminders on for.
create table if not exists push_subscriptions (
  endpoint   text primary key,
  contact_id text not null references contacts (id) on delete cascade,
  p256dh     text not null,
  auth       text not null,
  created_at timestamptz not null default now()
);
create index if not exists push_subscriptions_contact_idx on push_subscriptions (contact_id);

-- Which reminders have already gone out, so nobody is told twice about the same due date.
create table if not exists reminder_log (
  key        text primary key,
  contact_id text not null references contacts (id) on delete cascade,
  sent_at    timestamptz not null
);

-- ============================================================================
-- Automatic "last changed" times
-- ============================================================================

drop trigger if exists companies_touch on companies;
create trigger companies_touch before update on companies for each row execute function touch_updated_at();
drop trigger if exists contacts_touch on contacts;
create trigger contacts_touch before update on contacts for each row execute function touch_updated_at();
drop trigger if exists deals_touch on deals;
create trigger deals_touch before update on deals for each row execute function touch_updated_at();
drop trigger if exists app_settings_touch on app_settings;
create trigger app_settings_touch before update on app_settings for each row execute function touch_updated_at();

-- ============================================================================
-- Security: row level security on EVERY table
-- ============================================================================

alter table staff enable row level security;
alter table companies enable row level security;
alter table sites enable row level security;
alter table contacts enable row level security;
alter table deals enable row level security;
alter table messages enable row level security;
alter table calls enable row level security;
alter table care_plans enable row level security;
alter table equipment enable row level security;
alter table portal_documents enable row level security;
alter table app_settings enable row level security;
alter table portal_login_codes enable row level security;
alter table push_subscriptions enable row level security;
alter table reminder_log enable row level security;

-- Staff can see their own staff row (so the CRM can show their name and role) and nothing else here.
drop policy if exists staff_read_self on staff;
create policy staff_read_self on staff for select to authenticated using (user_id = auth.uid() and active);

-- Staff get full access to the CRM tables. Nobody else gets any.
do $$
declare t text;
begin
  foreach t in array array['companies', 'sites', 'contacts', 'deals', 'messages', 'calls', 'care_plans', 'equipment', 'portal_documents', 'app_settings']
  loop
    execute format('drop policy if exists staff_all on %I', t);
    execute format('create policy staff_all on %I for all to authenticated using (is_staff()) with check (is_staff())', t);
  end loop;
end $$;

-- portal_login_codes, push_subscriptions and reminder_log deliberately have NO policy:
-- only the backend (service key) can use them.
