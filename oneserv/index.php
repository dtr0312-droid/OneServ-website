<?php
/**
 * Main blog/archive fallback template.
 */
get_header();
?>

<section class="hero hero--page">
	<div class="container">
		<h1><?php is_home() && ! is_front_page() ? single_post_title() : bloginfo( 'name' ); ?></h1>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="grid grid--3">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'card' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
					<?php endif; ?>
					<h3><a class="card-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="card__meta"><?php echo esc_html( get_the_date() ); ?></p>
					<p><?php the_excerpt(); ?></p>
				</article>
			<?php endwhile; else : ?>
				<p>Nothing found.</p>
			<?php endif; ?>
		</div>
		<?php the_posts_pagination(); ?>
	</div>
</section>

<?php get_footer(); ?>
