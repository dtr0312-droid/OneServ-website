<?php
/**
 * The footer for the OneServ theme. Markup mirrors the real oneserv.co.uk
 * footer: a 4-column .footer-grid (address, Quick Links, Information,
 * Areas Covered), then the Phoenix Financial Consultants legal notice,
 * then a copyright bar.
 */
?>
</main><!-- #main-content -->

<footer class="site-footer" id="colophon">
	<div class="wrap footer-grid">
		<div>
			<p><?php echo esc_html( oneserv_contact( 'address' ) ); ?></p>
			<p style="margin-top:10px;">Schedule a call: <a href="<?php echo esc_attr( oneserv_contact( 'phone_href' ) ); ?>"><?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a></p>
		</div>

		<div>
			<h4>Quick Links</h4>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/new-boilers/' ) ); ?>">New Boilers</a></li>
				<li><a href="<?php echo esc_url( home_url( '/heating/' ) ); ?>">Heating</a></li>
				<li><a href="<?php echo esc_url( home_url( '/commercial-heating/' ) ); ?>">Commercial Heating</a></li>
				<li><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
			</ul>
		</div>

		<div>
			<h4>Information</h4>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
				<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
				<li><a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a></li>
				<li><a href="<?php echo esc_url( home_url( '/price-promise/' ) ); ?>">Price Promise</a></li>
			</ul>
		</div>

		<div>
			<h4>Areas Covered</h4>
			<ul>
				<?php foreach ( oneserv_towns() as $slug => $t ) : ?>
					<li><a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $t['name'] ); ?></a></li>
				<?php endforeach; ?>
			</ul>
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
		</div>
	</div>

	<p class="wrap footer-legal">
		OneServ Ltd is an Introducer Appointed Representative (Financial Services Register No. 1010796) of Phoenix Financial Consultants Limited (Phoenix). Phoenix is a credit broker, not a lender. Phoenix is authorised and regulated by the Financial Conduct Authority (FRN: 539195), and offers finance from its panel of lenders. All finance subject to status and credit checks.
		<br><br>The content on this website is owned by us and our licensors. Do not copy any content (including images) without our consent.
	</p>

	<div class="wrap footer-bottom">
		<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> OneServ Ltd. All rights reserved.</span>
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
			<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
			<li><a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a></li>
		</ul>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
