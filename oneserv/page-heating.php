<?php
/**
 * Services hub page, auto-applied by WordPress to the page with slug
 * "heating" (matches heating.html on the live site — the "Services" nav
 * item points here).
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Full Range of Heating Services',
	'title'   => 'OneServ Ltd Heating Services',
	'lead'    => 'Every heating job we complete is done correctly and efficiently, across Castleford, Wakefield, Pontefract and Yorkshire.',
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<h2>Heating Solutions For East Yorkshire</h2>
		<p>When it comes to installing, repairing or servicing your boiler in Pontefract or the surrounding area, the OneServ team offers numerous benefits. We are highly skilled and experienced professionals with in-depth knowledge of various boiler models and heating systems.</p>
		<p>At OneServ, we provide the full range of heating and boiler services for Castleford, Wakefield, Pontefract and right across Yorkshire and the surrounding areas. Trust us to install, repair and service your central heating and hot water system.</p>
	</div>
	<div class="wrap card-list">
		<div class="card">
			<h4>New Boilers</h4>
			<p>We fit the latest makes and models of A-rated boilers &mdash; combi, traditional or system.</p>
			<a href="<?php echo esc_url( home_url( '/new-boilers/' ) ); ?>" class="btn btn-outline" style="margin-top:10px;">Learn more</a>
		</div>
		<div class="card">
			<h4>Boiler Servicing</h4>
			<p>Maintain your system with regular boiler servicing to keep it safe and efficient.</p>
			<a href="<?php echo esc_url( home_url( '/boiler-servicing/' ) ); ?>" class="btn btn-outline" style="margin-top:10px;">Learn more</a>
		</div>
		<div class="card">
			<h4>Boiler Repair</h4>
			<p>We repair boilers across the Yorkshire area, using quality parts so repairs last.</p>
			<a href="<?php echo esc_url( home_url( '/boiler-repair/' ) ); ?>" class="btn btn-outline" style="margin-top:10px;">Learn more</a>
		</div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Need a heating engineer today?',
			'text'  => 'Call now or request a callback and we\'ll get back to you the same day.',
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
