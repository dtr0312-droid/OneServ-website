<?php
/**
 * 404 error page.
 */
get_header();
?>
<section class="inner-hero">
	<div class="wrap">
		<span class="eyebrow">404</span>
		<h1>Page not found</h1>
		<p>Sorry, we couldn't find the page you were looking for. It may have moved, or the link might be out of date.</p>
		<div class="hero-ctas">
			<a class="btn btn-orange" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to homepage</a>
			<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">View sitemap</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>
