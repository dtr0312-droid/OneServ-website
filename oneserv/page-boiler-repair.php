<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "boiler-repair".
 */
get_header();
$services = oneserv_services();
$s = $services['boiler-repair'];
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Service',
	'title'   => $s['title'],
	'lead'    => $s['short'],
) );
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'boiler-repair' ) );
get_footer();
