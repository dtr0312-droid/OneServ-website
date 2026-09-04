<?php
/**
 * Boiler & Heating Care Plans page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Care Plans',
	'title'   => 'Boiler & Heating Care Plans',
	'lead'    => 'One fixed monthly price for peace of mind: annual servicing, priority callouts and cover when things go wrong.',
) );
?>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Choose your cover</span>
			<h2>Plans to suit every home</h2>
			<p>No hidden fees, no long tie-ins after the first year. Cancel or switch plans any time.</p>
		</div>
		<div class="plan-grid">
			<?php foreach ( oneserv_care_plans() as $plan ) : ?>
				<div class="plan <?php echo $plan['featured'] ? 'plan--featured' : ''; ?>">
					<h3><?php echo esc_html( $plan['name'] ); ?></h3>
					<div class="price"><?php echo esc_html( $plan['price'] ); ?> <span>/ month</span></div>
					<ul>
						<?php foreach ( $plan['features'] as $f ) : ?>
							<li><?php echo oneserv_icon( 'check' ); ?><span><?php echo esc_html( $f ); ?></span></li>
						<?php endforeach; ?>
					</ul>
					<a class="btn btn--primary btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Choose <?php echo esc_html( $plan['name'] ); ?></a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Common questions</span>
			<h2>Care plan FAQs</h2>
		</div>
		<div style="max-width:760px;margin:0 auto;">
			<details class="accordion-item" open>
				<summary>What's the difference between a care plan and a one-off service?</summary>
				<p>A care plan bundles your annual service with priority callout cover for a fixed monthly fee, so you're not paying a surprise bill if the boiler breaks down between services.</p>
			</details>
			<details class="accordion-item">
				<summary>Is there a minimum contract length?</summary>
				<p>Plans run on a rolling monthly basis after an initial 12-month term, so you're free to review your cover every year.</p>
			</details>
			<details class="accordion-item">
				<summary>What isn't covered?</summary>
				<p>Pre-existing faults, damage from lack of maintenance, and non-heating related plumbing issues aren't included. Full terms are provided when you sign up.</p>
			</details>
			<details class="accordion-item">
				<summary>Can I upgrade my plan later?</summary>
				<p>Yes &mdash; you can move up to a higher tier of cover at any time, and the price changes from your next billing date.</p>
			</details>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Not sure which plan is right for you?',
			'text'  => "Give us a call and we'll help you pick the right level of cover.",
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
