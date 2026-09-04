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
				'A-rated energy-efficient combi, system and regular boilers',
				'Up to 12 years manufacturer warranty on selected models',
				'Old boiler removed and disposed of responsibly',
				'Flexible finance plans, 0% options available',
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
 * Care plan pricing tiers shown on the Boiler & Heating Care Plans page.
 */
function oneserv_care_plans() {
	return array(
		array(
			'name'     => 'Essential Cover',
			'price'    => '£9.99',
			'featured' => false,
			'features' => array(
				'Annual boiler service',
				'24/7 breakdown reporting',
				'Priority booking (48hr response)',
				'Gas Safe engineer network',
			),
		),
		array(
			'name'     => 'Complete Care',
			'price'    => '£16.99',
			'featured' => true,
			'features' => array(
				'Everything in Essential Cover',
				'Parts and labour on covered repairs',
				'Same-day priority callout',
				'Annual central heating check',
				'No excess on claims',
			),
		),
		array(
			'name'     => 'Landlord Plan',
			'price'    => '£19.99',
			'featured' => false,
			'features' => array(
				'Everything in Complete Care',
				'Annual gas safety certificate (CP12)',
				'Tenant-facing emergency line',
				'Multi-property discounts available',
			),
		),
	);
}

/**
 * Sample testimonials, used as a fallback if no `testimonial` posts exist
 * yet (see inc/custom-post-types.php).
 */
function oneserv_sample_testimonials() {
	return array(
		array(
			'name'   => 'Sarah H.',
			'area'   => 'Pontefract',
			'rating' => 5,
			'text'   => 'Brilliant service from start to finish. The engineer explained everything, left the place spotless and the new boiler is so much quieter than the old one.',
		),
		array(
			'name'   => 'Mark T.',
			'area'   => 'Doncaster',
			'rating' => 5,
			'text'   => 'Boiler broke down on a Sunday in winter and they had someone out first thing Monday. Fixed within the hour and a fair, fixed price.',
		),
		array(
			'name'   => 'Julie R.',
			'area'   => 'Castleford',
			'rating' => 5,
			'text'   => "We've been on the Complete Care plan for two years now. Easy to book the annual service and it's saved us money on two call-outs already.",
		),
		array(
			'name'   => 'Dave P.',
			'area'   => 'Selby',
			'rating' => 4,
			'text'   => 'Good honest advice on power flushing our old system rather than just pushing a new boiler on us. Radiators are heating evenly now.',
		),
	);
}
