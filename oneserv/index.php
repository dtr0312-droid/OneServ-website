<?php
/**
 * Main blog/archive fallback template.
 */
get_header();
?>

<section class="inner-hero">
	<div class="wrap">
		<h1><?php is_home() && ! is_front_page() ? single_post_title() : bloginfo( 'name' ); ?></h1>
	</div>
</section>

<section>
	<div class="wrap">
		<div class="card-list">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'card' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
					<?php endif; ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p style="font-size:12px;color:var(--steel);margin-bottom:6px;"><?php echo esc_html( get_the_date() ); ?></p>
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
