<?php
/**
 * Grid of testimonials.
 * Expects $args: limit (default 3).
 */
$limit = $args['limit'] ?? 3;
$items = oneserv_get_testimonials( $limit );
?>
<div class="grid grid--3">
	<?php foreach ( $items as $t ) : ?>
		<div class="testimonial">
			<div class="stars" aria-hidden="true"><?php echo str_repeat( '★', (int) $t['rating'] ) . str_repeat( '☆', 5 - (int) $t['rating'] ); ?></div>
			<p>&ldquo;<?php echo esc_html( $t['text'] ); ?>&rdquo;</p>
			<cite><?php echo esc_html( $t['name'] ); ?><span><?php echo esc_html( $t['area'] ); ?></span></cite>
		</div>
	<?php endforeach; ?>
</div>
