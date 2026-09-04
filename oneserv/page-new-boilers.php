<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "new-boilers".
 */
get_header();
$services = oneserv_services();
$s = $services['new-boilers'];
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Service',
	'title'   => $s['title'],
	'lead'    => $s['short'],
) );
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'new-boilers' ) );
get_footer();
