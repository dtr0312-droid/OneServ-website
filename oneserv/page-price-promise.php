<?php
/**
 * Price Promise page.
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Best Price Promise',
	'title'   => "We're So Confident, We Guarantee It",
	'lead'    => 'Full installation of your new boiler with total peace of mind.',
) );
?>

<section>
	<div class="wrap">
		<div class="center" style="max-width:720px;margin:0 auto 24px;">
			<span class="eyebrow">Our promise</span>
			<h2>We Match All Like-For-Like Quotes</h2>
			<p style="color:var(--steel);">When you need a new boiler we understand that the hardest thing to do is find a good installer at a fair price. That's why we created our best price promise. We're so confident we can give you the best-fixed price installation that if we can't beat a like-for-like quote we'll give you a &pound;50 Amazon voucher.</p>
		</div>
		<div class="card-list">
			<div class="card">
				<h4>Fixed price, agreed upfront</h4>
				<p>We'll always confirm the price with you before any work begins &mdash; no vague "from" prices that change on the day.</p>
			</div>
			<div class="card">
				<h4>No hidden extras</h4>
				<p>Parts, labour and VAT are all included in the price we quote. What we agree is what you pay.</p>
			</div>
			<div class="card">
				<h4>Guaranteed workmanship</h4>
				<p>Every repair and installation is backed by our 12-month guarantee, at no extra cost.</p>
			</div>
		</div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="max-width:720px;margin:0 auto 24px;">
			<span class="eyebrow">How we compare</span>
			<h2>Beat any like-for-like quote</h2>
			<p style="color:var(--steel);">If you have a written, like-for-like quote from another Gas Safe registered company, show us and we'll do our best to match or beat it &mdash; or you'll get a &pound;50 Amazon voucher.</p>
		</div>
		<table class="price-table" style="max-width:760px;margin:0 auto;">
			<thead>
				<tr><th>What's included</th><th>OneServ</th><th>Typical national provider</th></tr>
			</thead>
			<tbody>
				<tr><td>Fixed price before work starts</td><td>&#10003;</td><td>Estimate only</td></tr>
				<tr><td>Local, known engineer</td><td>&#10003;</td><td>Varies each visit</td></tr>
				<tr><td>12-month workmanship guarantee</td><td>&#10003;</td><td>Often extra cost</td></tr>
				<tr><td>Same-day emergency callouts</td><td>&#10003;</td><td>Limited availability</td></tr>
				<tr><td>No call-out charge on booked jobs</td><td>&#10003;</td><td>Often charged</td></tr>
			</tbody>
		</table>
	</div>
</section>

<?php get_template_part( 'template-parts/cta-banner', null, array(
	'title' => 'Get a fixed price today',
) ); ?>

<?php get_footer(); ?>
