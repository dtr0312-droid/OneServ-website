<?php
/**
 * Pill grid of service-area towns, matching the real site's .area-grid /
 * .area-chip markup.
 * Expects $args: exclude (slug to leave out, optional).
 */
$exclude = $args['exclude'] ?? '';
$current = get_post() ? get_post()->post_name : '';
?>
<div class="area-grid">
	<?php foreach ( oneserv_towns() as $slug => $t ) :
		if ( $slug === $exclude ) continue;
		$active = ( $slug === $current ) ? ' active' : '';
		?>
		<a class="area-chip<?php echo esc_attr( $active ); ?>" href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $t['name'] ); ?></a>
	<?php endforeach; ?>
</div>
