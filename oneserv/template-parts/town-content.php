<?php
/**
 * Shared body content for a single service-area town page.
 * Expects $args: slug (key into oneserv_towns()).
 */
$slug  = $args['slug'] ?? '';
$towns = oneserv_towns();
if ( ! isset( $towns[ $slug ] ) ) return;
$t = $towns[ $slug ];
?>

<section class="section">
	<div class="container">
		<div class="grid grid--2" style="align-items:flex-start;">
			<div>
				<span class="eyebrow">Local coverage</span>
				<h2>Boiler &amp; heating engineers in <?php echo esc_html( $t['name'] ); ?></h2>
				<p><?php echo esc_html( $t['blurb'] ); ?> We cover the whole area, <?php echo esc_html( $t['landmark'] ); ?>, with local engineers who know the housing stock and can usually get to you the same or next day.</p>
				<ul class="icon-list">
					<li><?php echo oneserv_icon( 'check' ); ?><span>Same-day and next-day boiler repair appointments</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>A-rated boilers from Main, Vok&egrave;ra and Baxi, with next-day installs available</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>Annual servicing to keep warranties valid</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>HomeGuard Boiler &amp; Heating Care Plans</span></li>
				</ul>
				<div class="btn-row">
					<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
					<a class="btn btn--outline" href="tel:<?php echo esc_attr( str_replace( ' ', '', oneserv_contact( 'phone' ) ) ); ?>">Call <?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
				</div>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'pin' ); ?></div>
				<h3>Serving <?php echo esc_html( $t['name'] ); ?>, <?php echo esc_html( $t['county'] ); ?></h3>
				<p class="card__meta">Gas Safe registered &middot; Fully insured &middot; Local engineers</p>
				<div class="badge"><?php echo oneserv_icon( 'shield' ); ?> Price Promise guaranteed</div>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">What we do in <?php echo esc_html( $t['name'] ); ?></span>
			<h2>Our boiler &amp; heating services</h2>
		</div>
		<?php get_template_part( 'template-parts/service-grid' ); ?>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Also nearby</span>
			<h2>Other areas we cover</h2>
		</div>
		<?php get_template_part( 'template-parts/area-list', null, array( 'exclude' => $slug ) ); ?>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Need an engineer in ' . $t['name'] . '?',
			'text'  => 'Call now or request a callback and we\'ll get back to you the same day.',
		) ); ?>
	</div>
</section>
