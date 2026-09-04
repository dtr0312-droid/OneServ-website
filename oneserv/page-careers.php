<?php
/**
 * Careers page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Join The Team',
	'title'   => "Are You the Yorkshire Heating Expert We're Looking For?",
	'lead'    => "We're always keen to hear from experienced, Gas Safe registered engineers looking to join a growing local team.",
	'ctas'    => false,
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

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<p>With years of experience offering heating services across Yorkshire, OneServ Ltd are proud to be a professional and reliable company in Yorkshire.</p>
		<p>We understand the most commonly occurring problems when it comes to heating &mdash; our engineers are trained to the highest standards to fix heating issues in the best way possible, to the highest standards.</p>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;">
			<span class="eyebrow">Current vacancies</span>
			<h2>Open roles</h2>
		</div>
		<div class="card-list grid--2">
			<?php foreach ( $vacancies as $v ) : ?>
				<div class="card">
					<h4><?php echo esc_html( $v['title'] ); ?></h4>
					<p style="font-size:12px;color:var(--steel);margin-bottom:8px;"><?php echo esc_html( $v['location'] ); ?> &middot; <?php echo esc_html( $v['type'] ); ?></p>
					<p><?php echo esc_html( $v['desc'] ); ?></p>
					<a class="btn btn-outline" style="margin-top:10px;" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apply now</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section>
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;">
			<span class="eyebrow">Why work here</span>
			<h2>What we offer</h2>
		</div>
		<div class="card-list grid--4">
			<div class="card"><h4>Competitive pay</h4><p>Above-market rates plus overtime and bonus schemes.</p></div>
			<div class="card"><h4>Company van &amp; tools</h4><p>Fully equipped van, uniform and tools provided for engineer roles.</p></div>
			<div class="card"><h4>Training &amp; development</h4><p>Ongoing manufacturer training and support toward further qualifications.</p></div>
			<div class="card"><h4>Local work</h4><p>Jobs close to home across our Yorkshire service area &mdash; no long-distance travel.</p></div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/cta-banner', null, array(
	'title'    => "Don't see the right role?",
	'btn_text' => 'Send your CV',
	'btn_url'  => home_url( '/contact/' ),
) ); ?>

<?php get_footer(); ?>
