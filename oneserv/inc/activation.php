<?php
/**
 * Runs once when the theme is activated: creates the site's pages (if they
 * don't already exist), sets the static front page, and builds a primary
 * navigation menu. This means the theme is usable immediately after upload
 * and activation, without the site owner having to hand-create 19 pages
 * with matching slugs before the page-{slug}.php templates can apply.
 *
 * It is intentionally conservative: it never overwrites a page that already
 * exists at a given slug, so re-activating the theme (or running this on a
 * site that already has content) is safe.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Slug => [title, short excerpt used as the initial page content].
 */
function oneserv_default_pages() {
	$services = oneserv_services();
	$towns    = oneserv_towns();

	$pages = array(
		'home'         => array( 'title' => 'Home', 'content' => 'Welcome to OneServ.' ),
		'about-us'     => array( 'title' => 'About Us', 'content' => 'Learn more about OneServ.' ),
		'careers'      => array( 'title' => 'Careers', 'content' => 'Current vacancies at OneServ.' ),
		'contact'      => array( 'title' => 'Contact Us', 'content' => 'Get in touch with OneServ.' ),
		'reviews'      => array( 'title' => 'Reviews', 'content' => 'What our customers say.' ),
		'price-promise'=> array( 'title' => 'Price Promise', 'content' => 'Our price promise to you.' ),
		'terms-conditions' => array( 'title' => 'Terms &amp; Conditions', 'content' => 'Terms and conditions.' ),
		'privacy-policy'   => array( 'title' => 'Privacy Policy', 'content' => 'Our privacy policy.' ),
		'sitemap'          => array( 'title' => 'Sitemap', 'content' => 'Site map.' ),
	);

	foreach ( $services as $slug => $s ) {
		$pages[ $slug ] = array( 'title' => $s['title'], 'content' => $s['short'] );
	}
	foreach ( $towns as $slug => $t ) {
		$pages[ $slug ] = array( 'title' => $t['name'] . ' Boiler & Heating Engineers', 'content' => $t['blurb'] );
	}

	return $pages;
}

function oneserv_create_default_content() {
	$created_ids = array();

	foreach ( oneserv_default_pages() as $slug => $data ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$created_ids[ $slug ] = $existing->ID;
			continue;
		}
		$id = wp_insert_post( array(
			'post_title'   => $data['title'],
			'post_name'    => $slug,
			'post_content' => $data['content'],
			'post_status'  => 'publish',
			'post_type'    => 'page',
		) );
		if ( $id && ! is_wp_error( $id ) ) {
			$created_ids[ $slug ] = $id;
		}
	}

	// Set static front page.
	if ( ! empty( $created_ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $created_ids['home'] );
	}

	oneserv_create_primary_menu( $created_ids );
}
add_action( 'after_switch_theme', 'oneserv_create_default_content' );

/**
 * Builds a "Primary" nav menu with Services and Service Areas dropdowns,
 * only if a menu isn't already assigned to that location (so it won't
 * clobber a menu the site owner has already customised).
 */
function oneserv_create_primary_menu( $ids ) {
	if ( has_nav_menu( 'primary' ) ) {
		return;
	}

	$menu_name = 'Primary Menu';
	$menu_id   = 0;
	$existing  = wp_get_nav_menu_object( $menu_name );
	if ( $existing ) {
		$menu_id = $existing->term_id;
	} else {
		$menu_id = wp_create_nav_menu( $menu_name );
	}
	if ( is_wp_error( $menu_id ) || ! $menu_id ) {
		return;
	}

	$add_item = function( $title, $slug_or_url, $parent = 0, $is_page = true ) use ( $menu_id, $ids ) {
		$args = array(
			'menu-item-title'  => $title,
			'menu-item-status' => 'publish',
			'menu-item-parent-id' => $parent,
		);
		if ( $is_page && isset( $ids[ $slug_or_url ] ) ) {
			$args['menu-item-object-id'] = $ids[ $slug_or_url ];
			$args['menu-item-object']    = 'page';
			$args['menu-item-type']      = 'post_type';
		} else {
			$args['menu-item-url']  = $slug_or_url;
			$args['menu-item-type'] = 'custom';
		}
		return wp_update_nav_menu_item( $menu_id, 0, $args );
	};

	$add_item( 'Home', 'home' );
	$about = $add_item( 'About Us', 'about-us' );

	$services = $add_item( 'Services', home_url( '/boiler-servicing/' ), 0, false );
	foreach ( oneserv_services() as $slug => $s ) {
		$add_item( $s['title'], $slug, $services );
	}

	$areas = $add_item( 'Service Areas', home_url( '/price-promise/' ), 0, false );
	foreach ( oneserv_towns() as $slug => $t ) {
		$add_item( $t['name'], $slug, $areas );
	}

	$add_item( 'Reviews', 'reviews' );
	$add_item( 'Careers', 'careers' );
	$add_item( 'Contact', 'contact' );

	$locations = get_theme_mod( 'nav_menu_locations' );
	$locations['primary'] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}
