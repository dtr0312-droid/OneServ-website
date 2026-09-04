<?php
/**
 * Shared body content for a single service page.
 * Expects $args: slug (key into oneserv_services()).
 */
$slug = $args['slug'] ?? '';
$all  = oneserv_services();
if ( ! isset( $all[ $slug ] ) ) return;
$s = $all[ $slug ];
?>

<section class="section">
	<div class="container">
		<div class="grid grid--2" style="align-items:flex-start;">
			<div>
				<span class="eyebrow">What's included</span>
				<h2><?php echo esc_html( $s['title'] ); ?>, done properly</h2>
				<p><?php echo esc_html( $s['short'] ); ?> Every job is carried out by a Gas Safe registered engineer and backed by our workmanship guarantee.</p>
				<ul class="icon-list">
					<?php foreach ( $s['points'] as $point ) : ?>
						<li><?php echo oneserv_icon( 'check' ); ?><span><?php echo esc_html( $point ); ?></span></li>
					<?php endforeach; ?>
				</ul>
				<div class="btn-row">
					<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
					<a class="btn btn--outline" href="tel:<?php echo esc_attr( str_replace( ' ', '', oneserv_contact( 'phone' ) ) ); ?>">Call <?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
				</div>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( $s['icon'] ); ?></div>
				<h3>Why book with OneServ?</h3>
				<ul class="icon-list">
					<li><?php echo oneserv_icon( 'check' ); ?><span>Fixed price agreed before we start</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>Local engineers, no national call centre</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>12-month guarantee on all work</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>Friendly, tidy, fully insured team</span></li>
				</ul>
				<div class="badge"><?php echo oneserv_icon( 'shield' ); ?> Gas Safe Registered</div>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Other ways we can help</span>
			<h2>Related services</h2>
		</div>
		<?php get_template_part( 'template-parts/service-grid', null, array( 'exclude' => $slug ) ); ?>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Book your ' . strtolower( $s['title'] ) . ' today',
			'text'  => 'Fast, local, fixed-price. No obligation quote.',
		) ); ?>
	</div>
</section>
