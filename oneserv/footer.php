<?php
/**
 * The footer for the OneServ theme.
 */
?>
</main><!-- #main-content -->

<footer class="site-footer" id="colophon">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo file_get_contents( ONESERV_DIR . '/assets/images/logo-mark.svg' ); ?>
					<span class="site-logo__text">One<span>Serv</span></span>
				</a>
				<p>Local, Gas Safe registered boiler and heating engineers covering Castleford, Doncaster, Knottingley, Pontefract, Selby and the surrounding areas.</p>
				<div class="footer-social">
					<a href="https://www.facebook.com/OneServ1/" aria-label="Facebook" target="_blank" rel="noopener"><?php echo oneserv_icon( 'facebook' ); ?></a>
					<a href="https://twitter.com/OneServ1" aria-label="Twitter / X" target="_blank" rel="noopener"><?php echo oneserv_icon( 'twitter' ); ?></a>
					<a href="https://www.instagram.com/one.serv/" aria-label="Instagram" target="_blank" rel="noopener"><?php echo oneserv_icon( 'instagram' ); ?></a>
				</div>
			</div>

			<div class="footer-services">
				<h4>Services</h4>
				<ul>
					<?php foreach ( oneserv_services() as $slug => $s ) : ?>
						<li><a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $s['title'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="footer-areas">
				<h4>Service Areas</h4>
				<ul>
					<?php foreach ( oneserv_towns() as $slug => $t ) : ?>
						<li><a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $t['name'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="footer-company">
				<h4>Company</h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
					<li><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a></li>
					<li><a href="<?php echo esc_url( home_url( '/price-promise/' ) ); ?>">Price Promise</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
					<li><a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a></li>
				</ul>
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php endif; ?>
			</div>
		</div>

		<p class="footer-legal">
			OneServ Ltd is an Introducer Appointed Representative (Financial Services Register No. 1010796) of Phoenix Financial Consultants Limited (Phoenix). Phoenix is a credit broker, not a lender. Phoenix is authorised and regulated by the Financial Conduct Authority (FRN: 539195), and offers finance from its panel of lenders. All finance subject to status and credit checks.
			<br><br>The content on this website is owned by us and our licensors. Do not copy any content (including images) without our consent.
		</p>

		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> OneServ Ltd. All rights reserved.</p>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
				<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
				<li><a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a></li>
			</ul>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
