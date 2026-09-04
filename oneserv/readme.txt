=== OneServ ===

A custom WordPress theme built for a boiler & heating engineering company,
covering: Home, About Us, Services (hub), Careers, New Boilers, Boiler &
Heating Care Plans, Boiler Servicing, Boiler Repair, Power Flushing,
Commercial Heating, five service-area town pages (Castleford, Doncaster,
Knottingley, Pontefract, Selby), Contact, Reviews, Price Promise, Terms &
Conditions, Privacy Policy and Sitemap. The design (colours, fonts, header/
footer layout and every component) matches the real oneserv.co.uk site.

== Installation ==

1. In WordPress admin, go to Appearance > Themes > Add New > Upload Theme.
2. Choose oneserv.zip and click Install Now, then Activate.
3. Activating the theme automatically creates all 20 pages listed above
   (only if a page with that slug doesn't already exist), sets the Home
   page as your static front page, and builds a Primary Menu matching the
   real site's flat 8-item nav (Home, About Us, New Boilers, Boiler Cover,
   Services, Commercial Heating, Reviews, Contact — no dropdowns, same as
   live). Careers and the service-area town pages are reached from the
   utility bar / footer, same as the real site.
4. Go to Appearance > Menus to confirm "Primary Menu" is assigned to the
   "Primary Menu" location (it's done automatically on first activation,
   but check if you're re-activating on a site with existing content).
5. Edit each page's content in the WordPress editor as normal — headline
   copy, service descriptions and legal text are all placeholder content
   and should be reviewed/replaced before going live (the Terms &
   Conditions and Privacy Policy pages especially should be checked by a
   solicitor).

== Editing key details ==

* Phone number, email, address & opening hours: edit the array in
  `oneserv_contact()` inside functions.php.
* Services, service-area towns, care plan pricing & sample reviews: edit
  the arrays in inc/site-data.php.
* Real customer reviews: add them as "Reviews" > "Add New Testimonial" in
  wp-admin (set the star rating and area in the side panel) — once you add
  real testimonials they automatically replace the placeholder set.
* Logo: replace assets/images/logo.png (the real OneServ logo, pulled from
  the site owner's own site) with an updated file of the same name.
* Colours: edit the CSS custom properties at the top of style.css
  (--blue, --orange, etc. — these match the real site's palette).
* Instant boiler quote tool: the New Boilers page embeds it via iframe.
  Set its live URL in `oneserv_quote_tool_url()` in functions.php (or hook
  the 'oneserv_quote_tool_url' filter). Until set, that page shows a
  "coming soon" card with the usual call/quote buttons instead.
* Live Trustpilot reviews: set your Trustpilot Business Unit ID in
  `oneserv_trustpilot_business_id()` in functions.php (or hook the
  'oneserv_trustpilot_business_id' filter) to swap the Reviews page over
  to the live Trustpilot widget. Until set, it shows the Reviews custom
  post type entries / sample testimonials instead.

== Notes ==

* No third-party plugins are required. The contact form on the Contact
  page is HTML markup only — connect it to a mail handler or a form
  plugin (e.g. Contact Form 7, WPForms) before relying on it to receive
  enquiries.
* Built from scratch to match the requested page structure of
  www.oneserv.co.uk. Contact details (phone 01977 343461, address 22
  Tabard Road, Goole, DN14 0UP, email hello@oneserv.co.uk), the footer's
  Phoenix Financial Consultants credit-broker disclosure, the real
  boiler repair fee table, the Price Promise £50-voucher offer, the
  Power Flushing process copy, the Google Maps embed on Contact, and the
  real sample Trustpilot quotes were carried over verbatim from the
  site owner's own static HTML clone of the live site (supplied
  directly), not scraped independently.
* The HomeGuard Boiler & Heating Care Plan prices are still an honest
  "Price TBC" placeholder — the real plan tiers/prices weren't available
  at build time. Don't invent numbers here; get the real HomeGuard
  pricing from the site owner before launch (see `oneserv_care_plans()`
  in inc/site-data.php).
