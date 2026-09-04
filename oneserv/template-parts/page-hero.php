<?php
/**
 * Reusable inner-page hero banner.
 * Expects $args: eyebrow, title, lead (optional).
 */
$eyebrow = $args['eyebrow'] ?? '';
$title   = $args['title'] ?? get_the_title();
$lead    = $args['lead'] ?? '';
?>
<section class="hero hero--page">
	<div class="container">
		<?php oneserv_breadcrumb(); ?>
		<?php if ( $eyebrow ) : ?><span class="eyebrow hero__eyebrow"><?php echo esc_html( $eyebrow ); ?></span><?php endif; ?>
		<h1><?php echo esc_html( $title ); ?></h1>
		<?php if ( $lead ) : ?><p class="lead"><?php echo esc_html( $lead ); ?></p><?php endif; ?>
		<div class="btn-row">
			<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
			<a class="btn btn--ghost-light" href="tel:<?php echo esc_attr( str_replace( ' ', '', oneserv_contact( 'phone' ) ) ); ?>">Call <?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
		</div>
	</div>
</section>
