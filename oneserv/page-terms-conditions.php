<?php
/**
 * Terms & Conditions page. Placeholder legal copy — replace with text
 * reviewed by a solicitor before going live.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Legal',
	'title'   => 'Terms & Conditions',
	'ctas'    => false,
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
			<p><em>Last updated: <?php echo esc_html( date( 'F Y' ) ); ?>. This is placeholder text — please replace with terms reviewed by a solicitor before publishing.</em></p>

			<h2>1. About us</h2>
			<p>OneServ ("we", "us", "our") provides boiler and heating installation, servicing, repair and related services across our advertised service area. These terms apply to all quotes, bookings and work carried out by OneServ.</p>

			<h2>2. Quotes and pricing</h2>
			<p>Quotes are provided in good faith based on the information available at the time. Any additional work identified once a job is underway will be discussed and agreed with you before proceeding, in line with our Price Promise.</p>

			<h2>3. Appointments</h2>
			<p>We aim to attend within the agreed time slot. Where an engineer is delayed, we will contact you as soon as reasonably possible. Cancellations should be made at least 24 hours in advance where possible.</p>

			<h2>4. Guarantees</h2>
			<p>All repair work is covered by a 12-month workmanship guarantee. Manufacturer warranties apply separately to new boiler installations and are honoured in line with the manufacturer's terms.</p>

			<h2>5. Care plans</h2>
			<p>Boiler &amp; Heating Care Plans run on a monthly subscription basis, with an initial minimum term as set out at the point of sale. Full plan terms are provided at sign-up.</p>

			<h2>6. Payment</h2>
			<p>Payment is due on completion of work unless otherwise agreed in writing. We accept card and bank transfer payments.</p>

			<h2>7. Liability</h2>
			<p>We carry full public liability insurance. Nothing in these terms limits our liability for death or personal injury caused by our negligence.</p>

			<h2>8. Contact</h2>
			<p>Questions about these terms can be sent to <a href="mailto:<?php echo esc_attr( oneserv_contact( 'email' ) ); ?>"><?php echo esc_html( oneserv_contact( 'email' ) ); ?></a>.</p>
	</div>
</section>

<?php get_footer(); ?>
