<?php
/**
 * Reusable CTA banner.
 * Expects $args: title, text, btn_text, btn_url.
 */
$title    = $args['title'] ?? 'Ready to book your engineer?';
$text     = $args['text'] ?? 'Get a fast, fair, fixed-price quote today.';
$btn_text = $args['btn_text'] ?? 'Get a Free Quote';
$btn_url  = $args['btn_url'] ?? home_url( '/contact/' );
?>
<div class="cta-banner">
	<div>
		<h2><?php echo esc_html( $title ); ?></h2>
		<p><?php echo esc_html( $text ); ?></p>
	</div>
	<div class="btn-row">
		<a class="btn btn--ghost-light" href="<?php echo esc_url( $btn_url ); ?>"><?php echo esc_html( $btn_text ); ?></a>
		<a class="btn" style="background:#fff;color:var(--color-accent-dark);" href="tel:<?php echo esc_attr( str_replace( ' ', '', oneserv_contact( 'phone' ) ) ); ?>"><?php echo oneserv_icon( 'phone' ); ?> <?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
	</div>
</div>
