<?php
/**
 * Grid of service cards, styled like the real site's heating.html card-list.
 * Expects $args: exclude (slug to leave out, optional).
 */
$exclude = $args['exclude'] ?? '';
?>
<div class="card-list">
	<?php foreach ( oneserv_services() as $slug => $s ) :
		if ( $slug === $exclude ) continue;
		?>
		<div class="card">
			<h4><?php echo esc_html( $s['title'] ); ?></h4>
			<p><?php echo esc_html( $s['short'] ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>" class="btn btn-outline" style="margin-top:10px;">Learn more</a>
		</div>
	<?php endforeach; ?>
</div>
