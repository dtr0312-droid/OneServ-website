<?php
/**
 * About Us page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'About Us',
	'title'   => 'Local engineers, straightforward service',
	'lead'    => "We're a Yorkshire-based boiler and heating company built on fair pricing, tidy workmanship and turning up when we say we will.",
) );
?>

<section class="section">
	<div class="container">
		<div class="grid grid--2" style="align-items:center;">
			<div>
				<span class="eyebrow">Our story</span>
				<h2>Why OneServ started</h2>
				<p>OneServ was founded by local heating engineers who were tired of seeing customers overcharged and let down by national call-centre operators. We set out to build a company that does the opposite: local engineers who know the area, fixed prices agreed up front, and a real person to speak to if anything needs sorting.</p>
				<p>Today our team covers Castleford, Doncaster, Knottingley, Pontefract, Selby and the surrounding villages, carrying out everything from routine servicing to full commercial heating installations.</p>
			</div>
			<div class="card">
				<div class="stat-row" style="flex-direction:column;gap:20px;">
					<div class="stat"><strong>10+</strong><span>Years trading across Yorkshire</span></div>
					<div class="stat"><strong>15,000+</strong><span>Boiler jobs completed</span></div>
					<div class="stat"><strong>4.9 / 5</strong><span>Average customer rating</span></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">What we stand for</span>
			<h2>Our values</h2>
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
