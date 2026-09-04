<?php
/**
 * Grid of testimonials, matching the real site's .review-grid / .review-card
 * markup (as seen in the homepage's Trustpilot section).
 * Expects $args: limit (default 3).
 */
$limit = $args['limit'] ?? 3;
$items = oneserv_get_testimonials( $limit );
?>
<div class="review-grid">
	<?php foreach ( $items as $t ) : ?>
		<div class="review-card">
			<div class="stars"><?php echo str_repeat( '★', (int) $t['rating'] ) . str_repeat( '☆', 5 - (int) $t['rating'] ); ?></div>
			<p>&ldquo;<?php echo esc_html( $t['text'] ); ?>&rdquo;</p>
			<div class="review-name">&mdash; <?php echo esc_html( $t['name'] ); ?><?php echo $t['area'] ? ', ' . esc_html( $t['area'] ) : ''; ?></div>
		</div>
	<?php endforeach; ?>
</div>
