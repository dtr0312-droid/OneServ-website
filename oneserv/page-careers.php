<?php
/**
 * Careers page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Careers',
	'title'   => 'Join the OneServ team',
	'lead'    => "We're growing and looking for experienced, reliable people to join us across our Yorkshire service area.",
) );

$vacancies = array(
	array(
		'title'    => 'Gas Safe Registered Heating Engineer',
		'location' => 'Castleford / Pontefract',
		'type'     => 'Full-time',
		'desc'     => 'Experienced engineer needed for boiler servicing, repairs and installations. Company van, tools and uniform provided.',
	),
	array(
		'title'    => 'Boiler Installer',
		'location' => 'Doncaster',
		'type'     => 'Full-time',
		'desc'     => 'Join our installation team fitting new combi, system and regular boilers for domestic customers.',
	),
	array(
		'title'    => 'Customer Service Advisor',
		'location' => 'Head Office',
		'type'     => 'Full-time / Hybrid',
		'desc'     => 'Friendly, organised advisor to handle booking calls, schedule engineers and support our care plan members.',
	),
	array(
		'title'    => 'Apprentice Heating Engineer',
		'location' => 'Selby / Knottingley',
		'type'     => 'Apprenticeship',
		'desc'     => "Start your career in heating and plumbing with hands-on training alongside our experienced engineers.",
	),
);
?>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Current vacancies</span>
			<h2>Open roles</h2>
		</div>
		<div class="grid grid--2">
			<?php foreach ( $vacancies as $v ) : ?>
				<div class="card">
					<h3><?php echo esc_html( $v['title'] ); ?></h3>
					<p class="card__meta"><?php echo oneserv_icon( 'pin' ); ?> <?php echo esc_html( $v['location'] ); ?> &middot; <?php echo esc_html( $v['type'] ); ?></p>
					<p><?php echo esc_html( $v['desc'] ); ?></p>
					<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apply now</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Why work here</span>
			<h2>What we offer</h2>
		</div>
		<div class="grid grid--4">
			<div class="card"><div class="card__icon"><?php echo oneserv_icon( 'check' ); ?></div><h3>Competitive pay</h3><p>Above-market rates plus overtime and bonus schemes.</p></div>
			<div class="card"><div class="card__icon"><?php echo oneserv_icon( 'check' ); ?></div><h3>Company van &amp; tools</h3><p>Fully equipped van, uniform and tools provided for engineer roles.</p></div>
			<div class="card"><div class="card__icon"><?php echo oneserv_icon( 'check' ); ?></div><h3>Training &amp; development</h3><p>Ongoing manufacturer training and support toward further qualifications.</p></div>
			<div class="card"><div class="card__icon"><?php echo oneserv_icon( 'check' ); ?></div><h3>Local work</h3><p>Jobs close to home across our Yorkshire service area &mdash; no long-distance travel.</p></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title'    => "Don't see the right role?",
			'text'     => "Send us your CV anyway — we're always happy to hear from good engineers.",
			'btn_text' => 'Send your CV',
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
