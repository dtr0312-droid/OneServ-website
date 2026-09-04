<?php
/**
 * Reviews page. Pulls from `testimonial` posts if any exist (see
 * inc/custom-post-types.php), otherwise shows the sample set.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Reviews',
	'title'   => 'What our customers say',
	'lead'    => "We're proud of our reputation. Here's some recent feedback from real jobs.",
) );

$testimonials = oneserv_get_testimonials();
$avg = 0;
if ( $testimonials ) {
	$sum = 0;
	foreach ( $testimonials as $t ) $sum += (int) $t['rating'];
	$avg = round( $sum / count( $testimonials ), 1 );
}
?>

<section class="section">
	<div class="container">
		<div class="stat-row text-center" style="justify-content:center;margin-bottom:48px;">
			<div class="stat"><strong><?php echo esc_html( $avg ?: '4.9' ); ?> / 5</strong><span>Average rating</span></div>
			<div class="stat"><strong><?php echo esc_html( count( $testimonials ) ?: '4' ); ?>+</strong><span>Reviews shown here</span></div>
			<div class="stat"><strong>15,000+</strong><span>Jobs completed</span></div>
		</div>
		<div class="grid grid--3">
			<?php foreach ( $testimonials as $t ) : ?>
				<div class="testimonial">
					<div class="stars" aria-hidden="true"><?php echo str_repeat( '★', (int) $t['rating'] ) . str_repeat( '☆', 5 - (int) $t['rating'] ); ?></div>
					<p>&ldquo;<?php echo esc_html( $t['text'] ); ?>&rdquo;</p>
					<cite><?php echo esc_html( $t['name'] ); ?><span><?php echo esc_html( $t['area'] ); ?></span></cite>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Join our happy customers',
			'text'  => 'See why local homeowners choose OneServ for their boiler and heating needs.',
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
