<?php
/**
 * Page template, auto-applied by WordPress to the page with slug
 * "commercial-heating" — matches the real commercial-heating.html copy.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Commercial Heating & Landlord Services',
	'title'   => 'Elevate Your Commercial Heating Systems',
	'lead'    => 'We provide heating and boiler services for businesses across Pontefract, Castleford, Wakefield and all areas of Yorkshire &mdash; plus landlord gas safety services.',
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<h2>At OneServ we cover</h2>
		<ul>
			<li>Commercial heating services</li>
			<li>Commercial boiler installation</li>
			<li>Commercial boiler maintenance and repairs</li>
		</ul>
		<h3>Landlord Gas Safety Checks</h3>
		<p>It is crucial to make sure the gas appliances on your property are safe. We inspect all gas appliances, fittings and flues during our Gas Safety checks, and provide the documentation to prove your compliance, recommending improvements where necessary.</p>
		<h3>Commercial Gas Services</h3>
		<p>Trust our team to install and maintain your commercial gas equipment. We understand the requirements for local businesses, and ensure a professional, safe solution for every project.</p>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'commercial-heating' ) );
get_footer();