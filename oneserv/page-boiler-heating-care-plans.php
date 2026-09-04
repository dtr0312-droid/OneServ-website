<?php
/**
 * Boiler & Heating Care Plans page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'HomeGuard Cover Plans',
	'title'   => 'Local Boiler & Emergency Cover You Can Trust',
	'lead'    => 'No excess to pay, parts & labour included, plus a free annual service — choose the plan that suits your home.',
	'ctas'    => false,
) );
?>

<section>
	<div class="wrap">
		<div class="body-copy" style="max-width:820px;margin:0 auto 20px;">
			<p><strong>Placeholder plan structure below</strong> &mdash; the current site's actual care plan tiers, prices and inclusions weren't accessible during this build; swap in your real HomeGuard plan details before this goes live.</p>
		</div>
		<div class="plan-grid">
			<?php foreach ( oneserv_care_plans() as $plan ) : ?>
				<div class="plan-card <?php echo $plan['featured'] ? 'highlight' : ''; ?>">
					<h4><?php echo esc_html( $plan['name'] ); ?></h4>
					<div class="price"><?php echo esc_html( $plan['price'] ); ?></div>
					<ul>
						<?php foreach ( $plan['features'] as $f ) : ?>
							<li><?php echo esc_html( $f ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="btn <?php echo $plan['featured'] ? 'btn-orange' : 'btn-outline'; ?>" style="width:100%;" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Ask about this plan</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;">
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

<?php get_template_part( 'template-parts/cta-banner', null, array(
	'title' => 'Not sure which plan is right for you?',
) ); ?>

<?php get_footer(); ?>
