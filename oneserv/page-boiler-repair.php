<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "boiler-repair".
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Boiler Repairs across Yorkshire',
	'title'   => 'Boiler Repairs For Pontefract & Beyond',
	'lead'    => "Book your repair online or speak to one of our experts — we'll promptly respond to your enquiry.",
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<h3>Steps to Take to Avoid Boiler Breakdowns</h3>
		<p><strong>Regular Boiler Maintenance:</strong> Boiler servicing should be conducted annually. During these visits, an engineer will thoroughly examine your boiler, clean internal components, check for leaks, and identify any potential issues before they escalate into major problems.</p>
	</div>
	<div class="wrap" style="max-width:760px;">
		<h2>Boiler Repair Fees</h2>
		<table class="price-table">
			<thead>
				<tr><th>Boiler Issue</th><th>Fixed Price Inc. VAT</th></tr>
			</thead>
			<tbody>
				<tr><td>Fan replacement</td><td>£225</td></tr>
				<tr><td>Pump</td><td>£395</td></tr>
				<tr><td>Plate Heat Exchanger</td><td>£180</td></tr>
				<tr><td>Gas Valve</td><td>£200</td></tr>
				<tr><td>Add a boiler service whilst on site</td><td>£50</td></tr>
			</tbody>
		</table>
		<p style="color:var(--steel);font-size:13px;">Prices shown are as published on the current live site at time of writing &mdash; confirm current rates before publishing.</p>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'boiler-repair' ) );
get_footer();