=== OneServ ===

A custom WordPress theme built for a boiler & heating engineering company,
covering: Home, About Us, Careers, New Boilers, Boiler & Heating Care Plans,
Boiler Servicing, Boiler Repair, Power Flushing, Commercial Heating, five
service-area town pages (Castleford, Doncaster, Knottingley, Pontefract,
Selby), Contact, Reviews, Price Promise, Terms & Conditions, Privacy Policy
and Sitemap.

== Installation ==

1. In WordPress admin, go to Appearance > Themes > Add New > Upload Theme.
2. Choose oneserv.zip and click Install Now, then Activate.
3. Activating the theme automatically creates all 19 pages listed above
   (only if a page with that slug doesn't already exist), sets the Home
   page as your static front page, and builds a Primary Menu with Services
   and Service Areas dropdowns.
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
* Logo: replace assets/images/logo-mark.svg, or add a custom logo via
  Appearance > Customize if you prefer a raster logo.
* Colours: edit the CSS custom properties at the top of style.css
  (--color-primary, --color-accent, etc.).

== Notes ==

* No third-party plugins are required. The contact form on the Contact
  page is HTML markup only — connect it to a mail handler or a form
  plugin (e.g. Contact Form 7, WPForms) before relying on it to receive
  enquiries.
* Built from scratch to match the requested page structure of
  www.oneserv.co.uk; it does not reuse any code, styling or text scraped
  from that site.
