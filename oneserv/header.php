<?php
/**
 * The header for the OneServ theme. Markup mirrors the real oneserv.co.uk
 * layout: a dark utility bar, then a sticky header with logo / nav / call
 * block, so the theme's classes (.utility-bar, .header-row, .mainnav,
 * .call-block, etc.) match style.css one-to-one.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content">Skip to content</a>

<div class="utility-bar">
	<div class="wrap">
		<div class="social">
			<a href="https://www.facebook.com/OneServ1/" target="_blank" rel="noopener">Facebook</a>
			<a href="https://twitter.com/OneServ1" target="_blank" rel="noopener">X</a>
			<a href="https://www.instagram.com/one.serv/" target="_blank" rel="noopener">Instagram</a>
		</div>
		<div class="links">
			<a href="#">Finance</a>
			<a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a>
			<a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Review Us</a>
		</div>
	</div>
</div>

<header class="site-header" id="masthead">
	<div class="header-row">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
			<img src="<?php echo esc_url( ONESERV_URI . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>

		<nav class="mainnav" id="main-nav" aria-label="Primary">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'fallback_cb'    => 'oneserv_fallback_menu',
				'menu_class'     => '',
			) );
			?>
		</nav>

		<div class="header-right">
			<div class="call-block">
				<div class="lbl">Call us today</div>
				<a class="num" href="<?php echo esc_attr( oneserv_contact( 'phone_href' ) ); ?>"><?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
			</div>
			<a href="<?php echo esc_url( home_url( '/new-boilers/' ) ); ?>" class="btn btn-orange">Book Online</a>
			<button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Toggle menu">
				<span></span><span></span><span></span>
			</button>
		</div>
	</div>
</header>

<main id="main-content">
