<?php
/**
 * Generic fallback page template, used for any page that doesn't have a
 * dedicated page-{slug}.php template.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array( 'title' => get_the_title() ) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
		?>
	</div>
</section>

<?php get_footer(); ?>
