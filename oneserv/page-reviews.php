<?php
/**
 * Reviews page. Shows a live Trustpilot widget once a Business Unit ID is
 * set via oneserv_trustpilot_business_id() in functions.php; otherwise
 * falls back to `testimonial` posts if any exist (see
 * inc/custom-post-types.php), or the static sample set.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Reviews',
	'title'   => 'What our customers say',
	'lead'    => "We're proud of our reputation. Here's some recent feedback from real jobs.",
	'ctas'    => false,
) );

$trustpilot_id = oneserv_trustpilot_business_id();
$testimonials  = oneserv_get_testimonials();
$avg = 0;
if ( $testimonials ) {
	$sum = 0;
	foreach ( $testimonials as $t ) $sum += (int) $t['rating'];
	$avg = round( $sum / count( $testimonials ), 1 );
}
?>

<?php if ( $trustpilot_id ) : ?>
<section>
	<div class="wrap">
		<!-- TrustBox widget - Review Collector -->
		<div class="trustpilot-widget" data-locale="en-GB" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="<?php echo esc_attr( $trustpilot_id ); ?>" data-style-height="500px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5">
			<a href="https://uk.trustpilot.com/review/oneserv.co.uk" target="_blank" rel="noopener noreferrer">Trustpilot</a>
		</div>
		<!-- End TrustBox widget -->
	</div>
</section>
<?php else : ?>
<section>
	<div class="wrap">
		<div class="center" style="margin-bottom:30px;">
			<div class="trust-badge">&#9733; 4.0 TrustScore on Trustpilot</div>
			<div class="stat-row center">
				<div class="stat"><strong><?php echo esc_html( $avg ?: '5' ); ?> / 5</strong><span>Average of reviews shown here</span></div>
				<div class="stat"><strong>15,000+</strong><span>Jobs completed</span></div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/testimonials', null, array( 'limit' => -1 ) ); ?>
	</div>
</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/cta-banner', null, array(
	'title' => 'Join our happy customers',
) ); ?>

<?php get_footer(); ?>
