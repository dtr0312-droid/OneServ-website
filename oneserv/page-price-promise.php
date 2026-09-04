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

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Our promise</span>
			<h2>We Match All Like-For-Like Quotes</h2>
			<p style="max-width:720px;margin:0 auto;">When you need a new boiler we understand that the hardest thing to do is find a good installer at a fair price. That's why we created our best price promise. We're so confident we can give you the best-fixed price installation that if we can't beat a like-for-like quote we'll give you a £50 Amazon voucher.</p>
		</div>
		<div class="grid grid--3">
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'check' ); ?></div>
				<h3>Fixed price, agreed upfront</h3>
				<p>We'll always confirm the price with you before any work begins &mdash; no vague "from" prices that change on the day.</p>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'shield' ); ?></div>
				<h3>No hidden extras</h3>
				<p>Parts, labour and VAT are all included in the price we quote. What we agree is what you pay.</p>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo oneserv_icon( 'wrench' ); ?></div>
				<h3>Guaranteed workmanship</h3>
				<p>Every repair and installation is backed by our 12-month guarantee, at no extra cost.</p>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">How we compare</span>
			<h2>Beat any like-for-like quote</h2>
			<p>If you have a written, like-for-like quote from another Gas Safe registered company, show us and we'll do our best to match or beat it &mdash; or you'll get a £50 Amazon voucher.</p>
		</div>
		<table class="plan-table">
			<thead>
				<tr><th>What's included</th><th>OneServ</th><th>Typical national provider</th></tr>
			</thead>
			<tbody>
				<tr><td>Fixed price before work starts</td><td><?php echo oneserv_icon( 'check' ); ?></td><td>Estimate only</td></tr>
				<tr><td>Local, known engineer</td><td><?php echo oneserv_icon( 'check' ); ?></td><td>Varies each visit</td></tr>
				<tr><td>12-month workmanship guarantee</td><td><?php echo oneserv_icon( 'check' ); ?></td><td>Often extra cost</td></tr>
				<tr><td>Same-day emergency callouts</td><td><?php echo oneserv_icon( 'check' ); ?></td><td>Limited availability</td></tr>
				<tr><td>No call-out charge on booked jobs</td><td><?php echo oneserv_icon( 'check' ); ?></td><td>Often charged</td></tr>
			</tbody>
		</table>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Get a fixed price today',
			'text'  => 'No obligation. No pressure. Just an honest quote.',
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
