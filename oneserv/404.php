<?php
/**
 * 404 error page.
 */
get_header();
?>
<section class="hero hero--page">
	<div class="container">
		<span class="eyebrow hero__eyebrow">404</span>
		<h1>Page not found</h1>
		<p class="lead">Sorry, we couldn't find the page you were looking for. It may have moved, or the link might be out of date.</p>
		<div class="btn-row">
			<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to homepage</a>
			<a class="btn btn--ghost-light" href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">View sitemap</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>
