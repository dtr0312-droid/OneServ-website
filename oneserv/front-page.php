<?php
/**
 * The homepage template.
 */
get_header();
?>

<section class="hero">
	<div class="container">
		<div class="hero__content">
			<span class="eyebrow hero__eyebrow">Gas Safe Registered &middot; Yorkshire</span>
			<h1>Boiler &amp; heating engineers you can actually rely on</h1>
			<p class="lead">Fast repairs, honest servicing and new boiler installations across Castleford, Doncaster, Knottingley, Pontefract and Selby &mdash; backed by our Price Promise.</p>
			<div class="btn-row">
				<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
				<a class="btn btn--ghost-light" href="<?php echo esc_url( home_url( '/boiler-repair/' ) ); ?>">Book a Repair</a>
			</div>
			<div class="hero__trust">
				<div><strong>4.0</strong><span>TrustScore on Trustpilot</span></div>
				<div><strong>15,000+</strong><span>Jobs completed</span></div>
				<div><strong>24/7</strong><span>Emergency care plan cover</span></div>
			</div>
		</div>
		<div class="hero__art" aria-hidden="true">
			<svg viewBox="0 0 320 320" width="320" height="320" fill="none">
				<circle cx="160" cy="160" r="150" fill="rgba(255,255,255,0.06)"/>
				<circle cx="160" cy="160" r="110" fill="rgba(255,255,255,0.08)"/>
				<g transform="translate(90,60)" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
					<rect x="10" y="10" width="120" height="180" rx="14"/>
					<path d="M35 60h70M35 90h70M50 130h40"/>
					<circle cx="70" cy="165" r="8" fill="#f2711c" stroke="none"/>
				</g>
			</svg>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">What we do</span>
			<h2>Boiler &amp; heating services</h2>
			<p>From a five-minute fix to a full new installation, our Gas Safe registered engineers handle it all.</p>
		</div>
		<?php get_template_part( 'template-parts/service-grid' ); ?>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="grid grid--2" style="align-items:center;">
			<div>
				<span class="eyebrow">Why choose OneServ</span>
				<h2>Local engineers, fair prices, no call-out surprises</h2>
				<p>We're a Yorkshire-based team, not a national call centre. That means an engineer who actually knows your area, fixed prices agreed before we start, and someone to call directly if you ever need us again.</p>
				<ul class="icon-list">
					<li><?php echo oneserv_icon( 'check' ); ?><span>Gas Safe registered &amp; fully insured engineers</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>Fixed, upfront pricing &mdash; no hidden extras</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>Same-day and next-day appointments available</span></li>
					<li><?php echo oneserv_icon( 'check' ); ?><span>12-month guarantee on all repair work</span></li>
				</ul>
				<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/price-promise/' ) ); ?>">See our Price Promise</a>
			</div>
			<div class="stat-row" style="flex-direction:column;gap:24px;">
				<div class="card">
					<div class="stat"><strong>20+</strong><span>Years serving Yorkshire homes</span></div>
				</div>
				<div class="card">
					<div class="stat"><strong>98%</strong><span>Jobs completed on first visit</span></div>
				</div>
				<div class="card">
					<div class="stat"><strong>5,000+</strong><span>Boilers installed &amp; serviced</span></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">How it works</span>
			<h2>Booking an engineer is simple</h2>
		</div>
		<div class="steps">
			<div class="step">
				<h3>Get in touch</h3>
				<p>Call, message or fill in our quick online form to tell us what's wrong.</p>
			</div>
			<div class="step">
				<h3>Get a fixed price</h3>
				<p>We'll agree a fair, fixed price with you before any work begins.</p>
			</div>
			<div class="step">
				<h3>We visit &amp; fix it</h3>
				<p>A local Gas Safe engineer attends at the agreed time and sorts the job.</p>
			</div>
			<div class="step">
				<h3>Guaranteed work</h3>
				<p>Every repair is covered by our 12-month workmanship guarantee.</p>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Trusted locally</span>
			<h2>What our customers say</h2>
		</div>
		<?php get_template_part( 'template-parts/testimonials', null, array( 'limit' => 3 ) ); ?>
		<p class="text-center" style="margin-top:32px;"><a class="btn btn--outline" href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Read all reviews</a></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow">Where we work</span>
			<h2>Covering Castleford, Doncaster &amp; the surrounding areas</h2>
			<p>Based centrally in Yorkshire, our engineers are on the road across the region every day.</p>
		</div>
		<?php get_template_part( 'template-parts/area-list' ); ?>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Boiler trouble? We can help today.',
			'text'  => 'Call now for a fast, fixed-price quote from a local engineer.',
		) ); ?>
	</div>
</section>

<?php get_footer(); ?>
