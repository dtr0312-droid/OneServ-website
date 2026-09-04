<?php
/**
 * Full-width blue CTA band, matching the real homepage's
 * "Need A New Boiler? Get A Quote Now!" section.
 * Expects $args: title, text (optional), btn_text, btn_url.
 */
$title    = $args['title'] ?? 'Need A New Boiler? Get A Quote Now!';
$text     = $args['text'] ?? '';
$btn_text = $args['btn_text'] ?? 'Get a Free Boiler Quote';
$btn_url  = $args['btn_url'] ?? home_url( '/new-boilers/' );
?>
<section class="cta-band">
	<div class="wrap">
		<h2><?php echo esc_html( $title ); ?></h2>
		<?php if ( $text ) : ?><p><?php echo esc_html( $text ); ?></p><?php endif; ?>
		<a href="<?php echo esc_url( $btn_url ); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
	</div>
</section>
