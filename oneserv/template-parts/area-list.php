<?php
/**
 * Pill list of service-area towns, linking to each town page.
 * Expects $args: exclude (slug to leave out, optional).
 */
$exclude = $args['exclude'] ?? '';
?>
<div class="area-list">
	<?php foreach ( oneserv_towns() as $slug => $t ) :
		if ( $slug === $exclude ) continue;
		?>
		<a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo oneserv_icon( 'pin' ); ?> <?php echo esc_html( $t['name'] ); ?></a>
	<?php endforeach; ?>
</div>
