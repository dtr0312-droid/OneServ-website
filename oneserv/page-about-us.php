<?php
/**
 * About Us page — matches the real about-us.html copy and layout.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'About OneServ',
	'title'   => 'Throughout Yorkshire, OneServ guarantees the best price for quality service.',
	'lead'    => 'OneServ Ltd is a Yorkshire-based heating and gas company with over two decades of engineering experience.',
	'ctas'    => false,
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<h2>Who We Are</h2>
		<p>OneServ Ltd, your trusted partner for all your heating and gas needs. With over two decades of experience in the industry, our team of engineers brings unparalleled expertise and dedication to every project we undertake.</p>
		<p>OneServ is a leading heating and gas company situated in Yorkshire. Our Gas Safe Engineers provide dependable services across Yorkshire, including Pontefract, Castleford, Wakefield, Leeds and Doncaster, serving a 20-mile radius.</p>
		<h3>Our Services</h3>
		<p>At OneServ Ltd, we offer a comprehensive range of services tailored to meet your heating and gas requirements. From prompt and clean servicing or replacement of existing systems to round-the-clock emergency assistance, our skilled engineers are here to help.</p>
		<ul>
			<li>Residential and Commercial Boiler Installation, Servicing, and Repair</li>
			<li>HomeGuard cover plans</li>
			<li>Commercial Heating Systems Installation and Maintenance</li>
			<li>Commercial Laundry Equipment Installation</li>
			<li>Commercial Testing and Purging</li>
			<li>LPG Services</li>
			<li>Power Flushing for Boiler and Radiator Maintenance</li>
		</ul>
		<h3>Our Commitment to Excellence</h3>
		<p>At OneServ Ltd, we prioritise safety and quality in every aspect of our work. Our engineers undergo regular training at manufacturer in-house facilities to stay updated on the latest technical advancements and maintain Gas Safe certification. As Baxi approved installers, we offer extended warranties on selected boilers.</p>
	</div>
	<div class="wrap">
		<div class="stat-row center" style="margin-top:20px;">
			<div class="stat"><strong>20+</strong><span>Years of engineering experience</span></div>
			<div class="stat"><strong>15,000+</strong><span>Boiler jobs completed</span></div>
			<div class="stat"><strong>4.0</strong><span>TrustScore on Trustpilot</span></div>
		</div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;"><h2>Join The Team</h2></div>
		<p class="center" style="max-width:600px;margin:0 auto 20px;color:var(--steel);">We're always keen to hear from experienced Gas Safe engineers looking for a local, well-run company to work with.</p>
		<p class="center"><a class="btn btn-orange" href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">View current vacancies</a></p>
	</div>
</section>

<?php get_template_part( 'template-parts/cta-banner', null, array(
	'title' => "Ready to work with a local team you can trust?",
) ); ?>

<?php get_footer(); ?>
