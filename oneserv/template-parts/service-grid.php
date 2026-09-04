<?php
/**
 * Grid of service cards. Optionally exclude the current page's own slug.
 * Expects $args: exclude (slug to leave out, optional).
 */
$exclude = $args['exclude'] ?? '';
?>
<div class="grid grid--3">
	<?php foreach ( oneserv_services() as $slug => $s ) :
		if ( $slug === $exclude ) continue;
		?>
		<div class="card service-card">
			<div class="card__icon"><?php echo oneserv_icon( $s['icon'] ); ?></div>
			<h3><a class="card-title" href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $s['title'] ); ?></a></h3>
			<p><?php echo esc_html( $s['short'] ); ?></p>
			<a class="more" href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>">Learn more <?php echo oneserv_icon( 'arrow' ); ?></a>
		</div>
	<?php endforeach; ?>
</div>
