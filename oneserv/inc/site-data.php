<?php
/**
 * Central content/data arrays used across templates: services, service-area
 * towns, care plans and sample testimonials. Keeping this in one place makes
 * it easy to edit copy without hunting through every template file, and lets
 * the same data drive both the auto-generated pages (inc/activation.php)
 * and the page templates themselves.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Core boiler & heating services. Keys are page slugs.
 */
function oneserv_services() {
	return array(
		'new-boilers' => array(
			'title'   => 'New Boiler Installation',
			'short'   => 'Supplied and fitted by Gas Safe engineers, with a same-day quote and finance options available.',
			'icon'    => 'boiler',
			'points'  => array(
				'Free, no-obligation home survey and quotation',
				'A-rated boilers from Baxi, Vokèra, Main and Atag',
				'5–18 years parts and labour warranty direct from the manufacturer',
				'Old boiler removed and disposed of responsibly',
				'0% interest-free finance over 12 months, or 10.9% over 3–10 years',
			),
		),
		'boiler-heating-care-plans' => array(
			'title'   => 'Boiler & Heating Care Plans',
			'short'   => 'Monthly cover plans that bundle your annual service with priority breakdown callouts.',
			'icon'    => 'shield',
			'points'  => array(
				'Fixed monthly price, no surprise bills',
				'Priority engineer callout, often same day',
				'Annual boiler service included',
				'Parts and labour cover on eligible plans',
				'Cancel any time after the first 12 months',
			),
		),
		'boiler-servicing' => array(
			'title'   => 'Boiler Servicing',
			'short'   => 'A full annual service keeps your boiler safe, efficient and under warranty.',
			'icon'    => 'wrench',
			'points'  => array(
				'Full safety and efficiency inspection',
				'Flue gas analysis and visual inspection',
				'Keeps your manufacturer warranty valid',
				'Digital service record emailed to you',
				'Friendly reminders when your next service is due',
			),
		),
		'boiler-repair' => array(
			'title'   => 'Boiler Repair',
			'short'   => 'Fast, fixed-price boiler repairs from local Gas Safe registered engineers.',
			'icon'    => 'spanner',
			'points'  => array(
				'Same-day and next-day appointments',
				'Fixed-price diagnostic, no call-out surprises',
				'Fully stocked vans for common parts',
				'All makes and models repaired',
				'12-month guarantee on all repair work',
			),
		),
		'power-flushing' => array(
			'title'   => 'Power Flushing',
			'short'   => 'Clears sludge and debris from your central heating system for even, efficient warmth.',
			'icon'    => 'droplet',
			'points'  => array(
				'Removes limescale, rust and sludge build-up',
				'Improves radiator heat-up time and efficiency',
				'Reduces boiler noise caused by blockages',
				'Recommended before fitting a new boiler',
				'System health check and chemical inhibitor top-up included',
			),
		),
		'commercial-heating' => array(
			'title'   => 'Commercial Heating',
			'short'   => 'Installation, maintenance and compliance for offices, landlords and light-industrial sites.',
			'icon'    => 'building',
			'points'  => array(
				'Commercial boiler installation and plant upgrades',
				'Planned preventative maintenance contracts',
				'Landlord gas safety certificates (CP12)',
				'Out-of-hours emergency breakdown cover',
				'Multi-site account management for portfolios',
			),
		),
	);
}

/**
 * Service-area towns. Keys are page slugs.
 */
function oneserv_towns() {
	return array(
		'castleford' => array(
			'name'    => 'Castleford',
			'county'  => 'West Yorkshire',
			'blurb'   => 'Our Castleford engineers cover WF10 and the surrounding streets for boiler repairs, servicing and new installations.',
			'landmark'=> 'from Xscape and the Trinity Walk shopping centre out to the Aire riverside estates',
		),
		'doncaster' => array(
			'name'    => 'Doncaster',
			'county'  => 'South Yorkshire',
			'blurb'   => 'Doncaster homeowners and landlords rely on us for fast boiler callouts and planned heating installations across DN postcodes.',
			'landmark'=> 'from the town centre and Lakeside out to Bessacarr, Cantley and Balby',
		),
		'knottingley' => array(
			'name'    => 'Knottingley',
			'county'  => 'West Yorkshire',
			'blurb'   => 'A local, reliable heating engineer for Knottingley and the surrounding WF11 villages.',
			'landmark'=> 'along the Aire & Calder Navigation and the surrounding residential streets',
		),
		'pontefract' => array(
			'name'    => 'Pontefract',
			'county'  => 'West Yorkshire',
			'blurb'   => 'From the town centre to the outlying estates, our Pontefract team handles boiler repairs, servicing and installs.',
			'landmark'=> 'around the town centre, Carleton and Tanshelf',
		),
		'selby' => array(
			'name'    => 'Selby',
			'county'  => 'North Yorkshire',
			'blurb'   => 'Selby and the surrounding villages are covered by our team for same-day breakdowns and new boiler quotes.',
			'landmark'=> 'from the abbey quarter out towards Barlby and Brayton',
		),
	);
}

/**
 * Care plan (HomeGuard) pricing tiers shown on the Boiler & Heating Care
 * Plans page.
 *
 * PLACEHOLDER PRICING: the live site's actual HomeGuard plan tiers, prices
 * and inclusions weren't accessible at build time, so prices are shown as
 * "Price TBC" rather than invented figures. Replace with the real numbers
 * before launch.
 */
function oneserv_care_plans() {
	return array(
		array(
			'name'     => 'Basic',
			'price'    => 'Price TBC',
			'featured' => false,
			'features' => array(
				'Annual boiler service',
				'Safety inspection',
				'Excludes parts & labour cover',
			),
		),
		array(
			'name'     => 'Essential',
			'price'    => 'Price TBC',
			'featured' => true,
			'features' => array(
				'Boiler repair — parts & labour',
				'Boiler replacement if unrepairable',
				'Central heating system cover',
			),
		),
		array(
			'name'     => 'Advanced',
			'price'    => 'Price TBC',
			'featured' => false,
			'features' => array(
				'Everything in Essential',
				'Annual service & carbon monoxide test',
				'Energy efficiency check',
			),
		),
	);
}

/**
 * Sample testimonials, used as a fallback if no `testimonial` posts exist
 * yet (see inc/custom-post-types.php). These are the real Trustpilot
 * quotes pulled from oneserv.co.uk's public profile at build time — swap
 * in fresh ones (or add real "Reviews" posts in wp-admin) as they come in.
 */
function oneserv_sample_testimonials() {
	return array(
		array(
			'name'   => 'Trustpilot',
			'area'   => 'Aug 2026',
			'rating' => 5,
			'text'   => 'Instant response, swift delivery and fit of a new boiler, friendly guy, clean and cleared up, what more can I say? Absolutely 5 stars.',
		),
		array(
			'name'   => 'Trustpilot',
			'area'   => 'Jul 2026',
			'rating' => 5,
			'text'   => "Our plumber Ben's customer service was second to none. He single handedly removed two tanks and installed our new combi boiler with ease, and was always on time.",
		),
		array(
			'name'   => 'Trustpilot',
			'area'   => 'Jun 2026',
			'rating' => 5,
			'text'   => 'Ben came and serviced our boiler and installed a new gas fire. Friendly, very knowledgeable and did a superb job. Would recommend.',
		),
	);
}
