<?php
/**
 * The header for the OneServ theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content">Skip to content</a>

<div class="site-topbar">
	<div class="container">
		<div class="site-topbar__contact">
			<span><?php echo oneserv_icon( 'phone' ); ?> <a href="<?php echo esc_attr( oneserv_contact( 'phone_href' ) ); ?>"><?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a></span>
			<span><?php echo oneserv_icon( 'mail' ); ?> <a href="mailto:<?php echo esc_attr( oneserv_contact( 'email' ) ); ?>"><?php echo esc_html( oneserv_contact( 'email' ) ); ?></a></span>
			<span><?php echo oneserv_icon( 'clock' ); ?> <?php echo esc_html( oneserv_contact( 'hours' ) ); ?></span>
		</div>
		<div class="site-topbar__social">
			<a href="<?php echo esc_url( home_url( '/price-promise/' ) ); ?>">Our Price Promise</a>
		</div>
	</div>
</div>

<header class="site-header" id="masthead">
	<div class="container">
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php echo file_get_contents( ONESERV_DIR . '/assets/images/logo-mark.svg' ); ?>
			<span class="site-logo__text">One<span>Serv</span></span>
		</a>

		<nav class="main-nav" id="main-nav" aria-label="Primary">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'fallback_cb'    => 'oneserv_fallback_menu',
				'menu_class'     => '',
			) );
			?>
		</nav>

		<div class="header-cta">
			<div class="header-cta__phone">
				<small>Call us now</small>
				<a href="<?php echo esc_attr( oneserv_contact( 'phone_href' ) ); ?>"><?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
			</div>
			<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Quote</a>
		</div>

		<button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Toggle menu">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>

<main id="main-content">
