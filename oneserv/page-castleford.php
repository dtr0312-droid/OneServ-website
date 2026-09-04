<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "castleford".
 */
get_header();
$towns = oneserv_towns();
$t = $towns['castleford'];
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Local to ' . $t['name'],
	'title'   => 'Trusted Boiler Services in ' . $t['name'],
	'lead'    => 'Get expert boiler installation, servicing &amp; repairs in ' . $t['name'] . ' with OneServ Ltd. Trust our Gas Safe engineers for efficient and reliable heating solutions.',
) );
get_template_part( 'template-parts/town-content', null, array( 'slug' => 'castleford' ) );
get_footer();
