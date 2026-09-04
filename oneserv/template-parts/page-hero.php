<?php
/**
 * Reusable inner-page hero banner, matching the real .inner-hero markup.
 * Expects $args: eyebrow, title, lead (optional), ctas (optional, default true).
 */
$eyebrow = $args['eyebrow'] ?? '';
$title   = $args['title'] ?? get_the_title();
$lead    = $args['lead'] ?? '';
$ctas    = $args['ctas'] ?? true;
?>
<section class="inner-hero">
	<div class="wrap">
		<?php if ( $eyebrow ) : ?><span class="eyebrow"><?php echo esc_html( $eyebrow ); ?></span><?php endif; ?>
		<h1><?php echo esc_html( $title ); ?></h1>
		<?php if ( $lead ) : ?><p><?php echo esc_html( $lead ); ?></p><?php endif; ?>
		<?php if ( $ctas ) : ?>
			<div class="hero-ctas">
				<a href="<?php echo esc_url( home_url( '/new-boilers/' ) ); ?>" class="btn btn-orange">Get a Free Boiler Quote</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Speak to Our Experts</a>
			</div>
		<?php endif; ?>
	</div>
</section>
