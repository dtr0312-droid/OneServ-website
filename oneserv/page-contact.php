<?php
/**
 * Contact page. The form posts via a simple mailto-style fallback; wire it
 * up to your mail handler / form plugin of choice (e.g. WPForms, Contact
 * Form 7, or a custom admin-post.php action) once the theme is live.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Get In Touch',
	'title'   => 'Need Assistance?',
	'lead'    => 'Contact us today or drop us a message!',
	'ctas'    => false,
) );
?>

<section>
	<div class="wrap contact-grid">
		<form class="contact-form" method="post" action="">
			<input type="text" name="name" placeholder="Full name" aria-label="Full name" required>
			<input type="tel" name="phone" placeholder="Phone number" aria-label="Phone number" required>
			<input type="email" name="email" placeholder="Email address" aria-label="Email address" required>
			<select name="service" aria-label="What do you need help with?">
				<option>New boiler installation</option>
				<option>Boiler repair</option>
				<option>Boiler servicing</option>
				<option>Power flushing</option>
				<option>Care plan enquiry</option>
				<option>Commercial heating</option>
				<option>Something else</option>
			</select>
			<textarea rows="4" name="message" placeholder="What do you need help with?" aria-label="Message"></textarea>
			<button class="btn btn-orange" style="width:100%;" type="submit">Send message</button>
		</form>

		<div class="contact-info-card">
			<div class="contact-row"><div><div class="lbl">Address</div><div class="val"><?php echo esc_html( oneserv_contact( 'address' ) ); ?></div></div></div>
			<div class="contact-row"><div><div class="lbl">Phone</div><div class="val"><a href="<?php echo esc_attr( oneserv_contact( 'phone_href' ) ); ?>"><?php echo esc_html( oneserv_contact( 'phone' ) ); ?></a></div></div></div>
			<div class="contact-row"><div><div class="lbl">Email</div><div class="val"><a href="mailto:<?php echo esc_attr( oneserv_contact( 'email' ) ); ?>"><?php echo esc_html( oneserv_contact( 'email' ) ); ?></a></div></div></div>
			<div class="map-embed">
				<iframe src="<?php echo esc_url( oneserv_map_embed_url() ); ?>" title="OneServ location map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;"><h4>Areas We Cover</h4></div>
		<?php get_template_part( 'template-parts/area-list' ); ?>
	</div>
</section>

<?php get_footer(); ?>
