<?php
/**
 * About Us page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'About OneServ',
	'title'   => 'Throughout Yorkshire, OneServ guarantees the best price for quality service.',
	'lead'    => 'OneServ Ltd is a Yorkshire-based heating and gas company with over two decades of engineering experience.',
) );
?>

<section class="section">
	<div class="container">
		<div class="grid grid--2" style="align-items:center;">
			<div>
				<span class="eyebrow">Who we are</span>
				<h2>Your trusted partner for heating &amp; gas</h2>
				<p>With over two decades of experience in the industry, our team of engineers brings unparalleled expertise and dedication to every project we undertake.</p>
				<p>OneServ is a leading heating and gas company situated in Yorkshire. Our Gas Safe engineers provide dependable services across Yorkshire, including Pontefract, Castleford, Wakefield, Leeds and Doncaster, serving a 20-mile radius.</p>
			</div>
			<div class="card">
				<div class="stat-row" style="flex-direction:column;gap:20px;">
					<div class="stat"><strong>20+</strong><span>Years of engineering experience</span></div>
					<div class="stat"><strong>15,000+</strong><span>Boiler jobs completed</span></div>
					<div class="stat"><strong>4.0</strong><span>TrustScore on Trustpilot</span></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Our services</span>
			<h2>A comprehensive range, tailored to you</h2>
			<p>From prompt and clean servicing or replacement of existing systems to round-the-clock emergency assistance, our skilled engineers are here to help.</p>
		</div>
		<div class="grid grid--2">
			<ul class="icon-list">
				<li><?php echo oneserv_icon( 'check' ); ?><span>Residential and commercial boiler installation, servicing &amp; repair</span></li>
				<li><?php echo oneserv_icon( 'check' ); ?><span>HomeGuard cover plans</span></li>
				<li><?php echo oneserv_icon( 'check' ); ?><span>Commercial heating systems installation and maintenance</span></li>
				<li><?php echo oneserv_icon( 'check' ); ?><span>Commercial laundry equipment installation</span></li>
			</ul>
			<ul class="icon-list">
				<li><?php echo oneserv_icon( 'check' ); ?><span>Commercial testing and purging</span></li>
				<li><?php echo oneserv_icon( 'check' ); ?><span>LPG services</span></li>
				<li><?php echo oneserv_icon( 'check' ); ?><span>Power flushing for boiler and radiator maintenance</span></li>
			</ul>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">What we stand for</span>
			<h2>Our commitment to excellence</h2>
			<p style="max-width:720px;margin:0 auto;">We prioritise safety and quality in every aspect of our work. Our engineers undergo regular training at manufacturer in-house facilities to stay updated on the latest technical advancements and maintain Gas Safe certification. As Baxi approved installers, we offer extended warranties on selected boilers.</p>
		</div>
		<div class="grid grid--3">
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'shield' ); ?></div>
				<h3>Honesty first</h3>
				<p>No pushy upselling. If a repair makes more sense than a new boiler, that's what we'll recommend.</p>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'wrench' ); ?></div>
				<h3>Proper workmanship</h3>
				<p>Every engineer is Gas Safe registered and every job is backed by a 12-month guarantee.</p>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'clock' ); ?></div>
				<h3>We turn up on time</h3>
				<p>We give realistic time slots and text you when the engineer is on the way.</p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Careers</span>
			<h2>Join the team</h2>
			<p>We're always keen to hear from experienced Gas Safe engineers looking for a local, well-run company to work with.</p>
		</div>
		<p class="text-center"><a class="btn btn--primary" href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">View current vacancies</a></p>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => "Ready to work with a local team you can trust?",
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
