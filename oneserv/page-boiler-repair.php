<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "boiler-repair".
 */
get_header();
$services = oneserv_services();
$s = $services['boiler-repair'];
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Service',
	'title'   => $s['title'],
	'lead'    => $s['short'],
) );
?>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Fixed prices</span>
			<h2>Boiler Repair Fees</h2>
		</div>
		<table class="plan-table" style="max-width:760px;margin:0 auto;">
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
		<p style="max-width:760px;margin:16px auto 0;color:var(--color-muted);font-size:0.85rem;">Prices shown are as published on the current live site at time of writing &mdash; confirm current rates before publishing.</p>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'boiler-repair' ) );
get_footer();
