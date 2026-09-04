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

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Instant Quote</span>
			<h2>Get your instant boiler quote</h2>
			<p>Answer a few quick questions and get a fixed, no-obligation price in minutes — no waiting for a callback.</p>
		</div>
		<?php $quote_url = oneserv_quote_tool_url(); ?>
		<?php if ( $quote_url ) : ?>
			<div class="quote-embed">
				<iframe src="<?php echo esc_url( $quote_url ); ?>" title="Instant boiler quote tool" loading="lazy"></iframe>
			</div>
		<?php else : ?>
			<div class="card quote-embed-placeholder text-center">
				<div class="card__icon" style="margin-left:auto;margin-right:auto;"><?php echo oneserv_icon( 'boiler' ); ?></div>
				<h3>Instant quote tool coming soon</h3>
				<p>Our online instant-quote tool is being finalised. In the meantime, call us or request a callback and we'll give you a fast, fixed-price quote.</p>
				<div class="btn-row" style="justify-content:center;">
					<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
					<a class="btn btn--outline" href="tel:<?php echo esc_attr( str_replace( ' ', '', oneserv_contact( 'phone' ) ) ); ?>">Call <?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'new-boilers' ) );
get_footer();
