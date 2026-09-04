<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "boiler-servicing".
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Annual Servicing',
	'title'   => 'Book a Boiler Service in Yorkshire',
	'lead'    => 'Routine maintenance is essential to keep your boiler running safely and efficiently all year round.',
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<h2>Maintain Your System With Regular Boiler Servicing</h2>
		<p>Make sure your central heating system keeps working safely and efficiently with an annual boiler service. During the visit, our Gas Safe engineer will thoroughly examine your boiler, clean internal components, check for leaks, and identify potential issues before they escalate into major problems.</p>
		<p>Regular servicing also helps extend the lifespan of your boiler and keeps your manufacturer warranty valid.</p>
		<h3>What's included</h3>
		<ul>
			<li>Full visual and mechanical inspection</li>
			<li>Flue and ventilation checks</li>
			<li>Gas pressure and safety device testing</li>
			<li>Carbon monoxide check</li>
			<li>Service record for warranty purposes</li>
		</ul>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'boiler-servicing' ) );
get_footer();