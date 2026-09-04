<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "new-boilers".
 */
get_header();
$services = oneserv_services();
$s = $services['new-boilers'];
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Service',
	'title'   => $s['title'],
	'lead'    => $s['short'],
) );
?>

<section>
	<div class="wrap">
		<div class="center" style="max-width:640px;margin:0 auto 24px;">
			<span class="eyebrow">Instant Quote</span>
			<h2>Get your instant boiler quote</h2>
			<p style="color:var(--steel);">Answer a few quick questions and get a fixed, no-obligation price in minutes &mdash; no waiting for a callback.</p>
		</div>
		<?php $quote_url = oneserv_quote_tool_url(); ?>
		<?php if ( $quote_url ) : ?>
			<div class="quote-embed">
				<iframe src="<?php echo esc_url( $quote_url ); ?>" title="Instant boiler quote tool" loading="lazy"></iframe>
			</div>
		<?php else : ?>
			<div class="card center" style="max-width:600px;margin:0 auto;">
				<h3>Instant quote tool coming soon</h3>
				<p>Our online instant-quote tool is being finalised. In the meantime, call us or request a callback and we'll give you a fast, fixed-price quote.</p>
				<div class="hero-ctas" style="justify-content:center;margin-top:16px;">
					<a class="btn btn-orange" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
					<a class="btn btn-outline" href="tel:<?php echo esc_attr( str_replace( ' ', '', oneserv_contact( 'phone' ) ) ); ?>">Call <?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;"><h2>Brands We Install</h2></div>
		<div class="card-list">
			<div class="card center">
				<h4>Baxi</h4>
				<p>Baxi approved installer &mdash; extended warranties on selected models.</p>
			</div>
			<div class="card center">
				<h4>Vok&egrave;ra</h4>
				<p>Reliable, efficient A-rated combi and system boilers.</p>
			</div>
			<div class="card center">
				<h4>Main &amp; Atag</h4>
				<p>Premium efficiency ranges with up to 18-year warranties.</p>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'new-boilers' ) );
get_footer();