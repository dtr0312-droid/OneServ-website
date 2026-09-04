<?php
/**
 * Lightweight "Testimonial" custom post type so reviews can be managed from
 * WP admin without needing a plugin. Falls back to oneserv_sample_testimonials()
 * when no testimonial posts have been created yet.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function oneserv_register_testimonial_cpt() {
	register_post_type( 'testimonial', array(
		'labels' => array(
			'name'          => 'Testimonials',
			'singular_name' => 'Testimonial',
			'add_new_item'  => 'Add New Testimonial',
			'edit_item'     => 'Edit Testimonial',
			'menu_name'     => 'Reviews',
		),
		'public'       => true,
		'show_ui'      => true,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-star-filled',
		'supports'     => array( 'title', 'editor' ),
		'has_archive'  => false,
		'rewrite'      => false,
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'oneserv_register_testimonial_cpt' );

function oneserv_testimonial_meta_box() {
	add_meta_box( 'oneserv_testimonial_meta', 'Reviewer Details', 'oneserv_render_testimonial_meta_box', 'testimonial', 'side' );
}
add_action( 'add_meta_boxes', 'oneserv_testimonial_meta_box' );

function oneserv_render_testimonial_meta_box( $post ) {
	$area   = get_post_meta( $post->ID, '_oneserv_area', true );
	$rating = get_post_meta( $post->ID, '_oneserv_rating', true );
	if ( '' === $rating ) $rating = 5;
	wp_nonce_field( 'oneserv_testimonial_save', 'oneserv_testimonial_nonce' );
	?>
	<p>
		<label for="oneserv_area"><strong>Town / area</strong></label><br>
		<input type="text" id="oneserv_area" name="oneserv_area" value="<?php echo esc_attr( $area ); ?>" class="widefat" placeholder="e.g. Pontefract">
	</p>
	<p>
		<label for="oneserv_rating"><strong>Star rating</strong></label><br>
		<select id="oneserv_rating" name="oneserv_rating" class="widefat">
			<?php for ( $i = 5; $i >= 1; $i-- ) : ?>
				<option value="<?php echo esc_attr( $i ); ?>" <?php selected( (int) $rating, $i ); ?>><?php echo esc_html( $i ); ?> stars</option>
			<?php endfor; ?>
		</select>
	</p>
	<?php
}

function oneserv_save_testimonial_meta( $post_id ) {
	if ( ! isset( $_POST['oneserv_testimonial_nonce'] ) || ! wp_verify_nonce( $_POST['oneserv_testimonial_nonce'], 'oneserv_testimonial_save' ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( isset( $_POST['oneserv_area'] ) ) update_post_meta( $post_id, '_oneserv_area', sanitize_text_field( $_POST['oneserv_area'] ) );
	if ( isset( $_POST['oneserv_rating'] ) ) update_post_meta( $post_id, '_oneserv_rating', (int) $_POST['oneserv_rating'] );
}
add_action( 'save_post_testimonial', 'oneserv_save_testimonial_meta' );

/**
 * Returns testimonials as a normalised array of ['name','area','rating','text'],
 * pulling from real `testimonial` posts if any exist, otherwise the sample set.
 */
function oneserv_get_testimonials( $limit = -1 ) {
	$query = new WP_Query( array(
		'post_type'      => 'testimonial',
		'posts_per_page' => $limit,
		'post_status'    => 'publish',
	) );

	if ( ! $query->have_posts() ) {
		$sample = oneserv_sample_testimonials();
		return ( $limit > 0 ) ? array_slice( $sample, 0, $limit ) : $sample;
	}

	$out = array();
	foreach ( $query->posts as $p ) {
		$out[] = array(
			'name'   => $p->post_title,
			'area'   => get_post_meta( $p->ID, '_oneserv_area', true ),
			'rating' => (int) ( get_post_meta( $p->ID, '_oneserv_rating', true ) ?: 5 ),
			'text'   => wp_strip_all_tags( $p->post_content ),
		);
	}
	return $out;
}
