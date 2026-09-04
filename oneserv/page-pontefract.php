<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "pontefract".
 */
get_header();
$towns = oneserv_towns();
$t = $towns['pontefract'];
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Service Area',
	'title'   => $t['name'] . ' Boiler & Heating Engineers',
	'lead'    => $t['blurb'],
) );
get_template_part( 'template-parts/town-content', null, array( 'slug' => 'pontefract' ) );
get_footer();
