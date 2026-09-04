<?php
/**
 * OneServ theme functions and definitions.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'ONESERV_VERSION', '1.0.0' );
define( 'ONESERV_DIR', get_template_directory() );
define( 'ONESERV_URI', get_template_directory_uri() );

require ONESERV_DIR . '/inc/icons.php';
require ONESERV_DIR . '/inc/site-data.php';
require ONESERV_DIR . '/inc/custom-post-types.php';
require ONESERV_DIR . '/inc/activation.php';

/**
 * Theme setup.
 */
function oneserv_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );

	set_post_thumbnail_size( 1200, 700, true );

	register_nav_menus( array(
		'primary' => 'Primary Menu',
		'footer'  => 'Footer Menu',
	) );
}
add_action( 'after_setup_theme', 'oneserv_setup' );

/**
 * Enqueue styles and scripts.
 */
function oneserv_assets() {
	wp_enqueue_style( 'oneserv-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap', array(), null );
	wp_enqueue_style( 'oneserv-style', get_stylesheet_uri(), array(), ONESERV_VERSION );
	wp_enqueue_script( 'oneserv-main', ONESERV_URI . '/assets/js/main.js', array(), ONESERV_VERSION, true );

	if ( is_page( 'reviews' ) && oneserv_trustpilot_business_id() ) {
		wp_enqueue_script( 'trustpilot-widget', 'https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js', array(), null, true );
	}
}
add_action( 'wp_enqueue_scripts', 'oneserv_assets' );

/**
 * Register footer widget area (used only if the site owner adds widgets;
 * the default footer content is otherwise hard-coded in footer.php).
 */
function oneserv_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Column',
		'id'            => 'footer-1',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'oneserv_widgets_init' );

/**
 * Site phone number / contact details as a single filterable source of truth.
 * Edit here (or via a future Customizer setting) to update it everywhere.
 */
function oneserv_contact( $key = '' ) {
	$contact = array(
		'phone'        => '01977 123 456',
		'phone_href'   => 'tel:01977123456',
		'email'        => 'info@oneserv.co.uk',
		'address'      => 'Unit 4, Aire Business Park, Castleford, WF10 1AB',
		'hours'        => 'Mon–Fri 8am–6pm, Sat 9am–1pm. 24/7 emergency line for care plan members.',
	);
	$contact = apply_filters( 'oneserv_contact_details', $contact );
	if ( $key ) {
		return isset( $contact[ $key ] ) ? $contact[ $key ] : '';
	}
	return $contact;
}

/**
 * Instant boiler quote tool URL.
 *
 * The instant quote tool is a separate app, built and hosted on its own —
 * this theme only embeds it via iframe (see page-new-boilers.php) rather
 * than rebuilding it inside WordPress. Set its live URL here, or override
 * with the 'oneserv_quote_tool_url' filter / a future Customizer setting.
 * Left empty, the new-boilers page falls back to a "coming soon" card.
 */
function oneserv_quote_tool_url() {
	$url = ''; // e.g. 'https://quote.oneserv.co.uk' once the tool is live.
	return apply_filters( 'oneserv_quote_tool_url', $url );
}

/**
 * Trustpilot Business Unit ID, for the live reviews widget on the Reviews
 * page. Find it in Trustpilot Business > Integrations > Widgets (it's the
 * 24-character "Business Unit ID" for a Widget, not your public profile
 * URL). Left empty, the Reviews page falls back to the static sample
 * testimonials / the "Reviews" custom post type instead.
 */
function oneserv_trustpilot_business_id() {
	$id = ''; // e.g. '5f1a2b3c4d5e6f7a8b9c0d1e' once you have a real ID.
	return apply_filters( 'oneserv_trustpilot_business_id', $id );
}

/**
 * Breadcrumb used on inner page heroes.
 */
function oneserv_breadcrumb() {
	if ( is_front_page() ) return;
	echo '<nav class="breadcrumb" aria-label="Breadcrumb"><a href="' . esc_url( home_url( '/' ) ) . '">Home</a> / ' . esc_html( get_the_title() ) . '</nav>';
}

/**
 * Excerpt-style teaser used on service/town cards when relying on WP content.
 */
function oneserv_teaser( $limit = 20 ) {
	echo wp_trim_words( get_the_content(), $limit );
}

/**
 * Fallback menu when no "primary" menu is assigned yet (e.g. before the
 * after_switch_theme hook has run, or on multisite where activation hooks
 * can behave differently).
 */
function oneserv_fallback_menu() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">About Us</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/boiler-servicing/' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/reviews/' ) ) . '">Reviews</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
	echo '</ul>';
}

/**
 * Limit excerpt length site-wide (blog fallback / index.php).
 */
function oneserv_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'oneserv_excerpt_length' );

/**
 * Add a body class per page slug so page-specific styling can target
 * `.page-castleford` etc. without extra template files.
 */
function oneserv_body_classes( $classes ) {
	if ( is_page() ) {
		$classes[] = 'page-' . get_post_field( 'post_name' );
	}
	return $classes;
}
add_filter( 'body_class', 'oneserv_body_classes' );
