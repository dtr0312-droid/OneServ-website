<?php
/**
 * Shared "why book with us" + related services block, appended after a
 * service page's own real content. Expects $args: slug (key into
 * oneserv_services()).
 */
$slug = $args['slug'] ?? '';
$all  = oneserv_services();
if ( ! isset( $all[ $slug ] ) ) return;
$s = $all[ $slug ];
?>

<section class="section-tint">
	<div class="wrap body-copy" style="max-width:820px;">
		<h3>Why book with OneServ?</h3>
		<ul class="icon-list">
			<li><?php echo oneserv_icon( 'check' ); ?><span>Fixed price agreed before we start</span></li>
			<li><?php echo oneserv_icon( 'check' ); ?><span>Local engineers, no national call centre</span></li>
			<li><?php echo oneserv_icon( 'check' ); ?><span>Gas Safe registered and fully insured team</span></li>
			<?php foreach ( $s['points'] as $point ) : ?>
				<li><?php echo oneserv_icon( 'check' ); ?><span><?php echo esc_html( $point ); ?></span></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<section>
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;">
			<h2>Other ways we can help</h2>
		</div>
		<?php get_template_part( 'template-parts/service-grid', null, array( 'exclude' => $slug ) ); ?>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Book your ' . strtolower( $s['title'] ) . ' today',
		) ); ?>
	</div>
</section>
