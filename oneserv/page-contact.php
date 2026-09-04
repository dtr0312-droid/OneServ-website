<?php
/**
 * Contact page. The form posts via a simple mailto-style fallback; wire it
 * up to your mail handler / form plugin of choice (e.g. WPForms, Contact
 * Form 7, or a custom admin-post.php action) once the theme is live.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Contact',
	'title'   => 'Get in touch',
	'lead'    => "Call, email or send us a message and we'll get back to you the same working day.",
) );
?>

<section class="section">
	<div class="container">
		<div class="grid grid--2" style="align-items:flex-start;">
			<div class="contact-panel">
				<h2>Request a callback</h2>
				<p>Fill in the form and a member of the team will be in touch shortly.</p>
				<form class="contact-form" method="post" action="">
					<div class="grid grid--2">
						<div class="form-field">
							<label for="name">Full name</label>
							<input type="text" id="name" name="name" required>
						</div>
						<div class="form-field">
							<label for="phone">Phone number</label>
							<input type="tel" id="phone" name="phone" required>
						</div>
					</div>
					<div class="form-field">
						<label for="email">Email address</label>
						<input type="email" id="email" name="email" required>
					</div>
					<div class="form-field">
						<label for="service">What do you need help with?</label>
						<select id="service" name="service">
							<option>New boiler installation</option>
							<option>Boiler repair</option>
							<option>Boiler servicing</option>
							<option>Power flushing</option>
							<option>Care plan enquiry</option>
							<option>Commercial heating</option>
							<option>Something else</option>
						</select>
					</div>
					<div class="form-field">
						<label for="message">Message</label>
						<textarea id="message" name="message" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn--accent btn--block">Send message</button>
				</form>
			</div>

			<div class="contact-info-card">
				<h3>Contact details</h3>
				<ul class="icon-list">
					<li><?php echo oneserv_icon( 'phone' ); ?><span><a href="<?php echo esc_attr( oneserv_contact( 'phone_href' ) ); ?>"><?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a></span></li>
					<li><?php echo oneserv_icon( 'mail' ); ?><span><a href="mailto:<?php echo esc_attr( oneserv_contact( 'email' ) ); ?>"><?php echo esc_html( oneserv_contact( 'email' ) ); ?></a></span></li>
					<li><?php echo oneserv_icon( 'pin' ); ?><span><?php echo esc_html( oneserv_contact( 'address' ) ); ?></span></li>
					<li><?php echo oneserv_icon( 'clock' ); ?><span><?php echo esc_html( oneserv_contact( 'hours' ) ); ?></span></li>
				</ul>
				<h3 style="margin-top:32px;">Areas we cover</h3>
				<?php get_template_part( 'template-parts/area-list' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
