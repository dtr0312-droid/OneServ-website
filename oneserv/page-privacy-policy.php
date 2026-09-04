<?php
/**
 * Privacy Policy page. Placeholder copy — replace with a policy reviewed
 * against current UK GDPR / Data Protection Act requirements before going live.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Legal',
	'title'   => 'Privacy Policy',
) );
?>

<section class="section">
	<div class="container">
		<div class="content-page">
			<p><em>Last updated: <?php echo esc_html( date( 'F Y' ) ); ?>. This is placeholder text — please replace with a policy reviewed for UK GDPR compliance before publishing.</em></p>

			<h2>1. Who we are</h2>
			<p>OneServ is a boiler and heating engineering company. This policy explains how we collect, use and protect your personal information when you contact us, request a quote, or become a customer.</p>

			<h2>2. Information we collect</h2>
			<ul>
				<li>Contact details you provide via our contact form, phone or email (name, address, phone number, email)</li>
				<li>Details about your boiler, heating system and the work requested</li>
				<li>Payment information, processed securely by our payment provider</li>
				<li>Basic website usage data (pages visited, browser type) via cookies</li>
			</ul>

			<h2>3. How we use it</h2>
			<ul>
				<li>To provide quotes and carry out booked work</li>
				<li>To contact you about appointments, care plans and servicing reminders</li>
				<li>To meet our legal and gas safety record-keeping obligations</li>
				<li>To improve our website and services</li>
			</ul>

			<h2>4. Sharing your information</h2>
			<p>We do not sell your personal data. We may share information with engineers attending your job, our payment processor, and where required by law or regulation (for example, Gas Safe Register record-keeping).</p>

			<h2>5. How long we keep it</h2>
			<p>We retain customer and job records for as long as necessary to meet our legal, warranty and gas safety obligations, typically up to 6 years.</p>

			<h2>6. Your rights</h2>
			<p>You can ask to see, correct or delete the personal data we hold about you at any time by contacting <a href="mailto:<?php echo esc_attr( oneserv_contact( 'email' ) ); ?>"><?php echo esc_html( oneserv_contact( 'email' ) ); ?></a>.</p>

			<h2>7. Cookies</h2>
			<p>Our website uses essential cookies to function and, where enabled, analytics cookies to help us understand how the site is used. You can control cookies through your browser settings.</p>

			<h2>8. Contact us</h2>
			<p>For any privacy questions, contact us at <a href="mailto:<?php echo esc_attr( oneserv_contact( 'email' ) ); ?>"><?php echo esc_html( oneserv_contact( 'email' ) ); ?></a> or <?php echo esc_html( oneserv_contact( 'address' ) ); ?>.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
