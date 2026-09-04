<?php
/**
 * HTML sitemap page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Sitemap',
	'title'   => 'Sitemap',
	'lead'    => 'Every page on the OneServ site, in one place.',
	'ctas'    => false,
) );
?>

<section class="section">
	<div class="container">
		<div class="sitemap-grid">
			<div>
				<h3>Company</h3>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
					<li><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a></li>
					<li><a href="<?php echo esc_url( home_url( '/price-promise/' ) ); ?>">Price Promise</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
				</ul>
			</div>
			<div>
				<h3>Services</h3>
				<ul>
					<?php foreach ( oneserv_services() as $slug => $s ) : ?>
						<li><a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $s['title'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div>
				<h3>Service Areas</h3>
				<ul>
					<?php foreach ( oneserv_towns() as $slug => $t ) : ?>
						<li><a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $t['name'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
				<h3 style="margin-top:32px;">Legal</h3>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
