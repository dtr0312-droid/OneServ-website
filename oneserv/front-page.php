<?php
/**
 * The homepage template — matches the real oneserv.co.uk homepage layout
 * and copy.
 */
get_header();
?>

<section class="inner-hero">
	<div class="wrap">
		<span class="eyebrow">Your Boiler Costs Stay Affordable with Us!</span>
		<h1>Unbeatable Boiler Prices For Every Home</h1>
		<p>Need a reliable local Plumbing, Heating &amp; Boiler company in Yorkshire? OneServ is a one-stop shop for all your Plumbing, Heating &amp; Boiler needs.</p>
		<div class="hero-ctas">
			<a href="<?php echo esc_url( home_url( '/new-boilers/' ) ); ?>" class="btn btn-orange">Get a Free Boiler Quote</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Speak to Our Experts</a>
		</div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center"><h2>Get The Solution You Need In Just Three Easy Steps</h2></div>
		<div class="card-list" style="margin-top:36px;">
			<div class="card center">
				<h4>1. Let Us Know The Problem</h4>
				<p>Give us a call, book online or speak to one of our friendly advisers through live chat. It's simple, free and takes 60 seconds.</p>
			</div>
			<div class="card center">
				<h4>2. Free Home/Video Survey</h4>
				<p>No salesmen involved, no hidden charges! A friendly surveyor visits your property or arranges a video call for a fixed-price promise.</p>
			</div>
			<div class="card center">
				<h4>3. We Fix The Problem</h4>
				<p>We'll arrive on time and fix the problem first time. All our engineers are fully qualified, carefully vetted, with unbeatable guarantees.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="wrap two-col">
		<div class="body-copy">
			<h2>Online Boiler Quote</h2>
			<p>Boilers and heating are our specialities. We offer a full range of services including new boiler installations, boiler repairs, services, Gas Safety inspections, power flushing, thermostat replacement, and fault finding. We are Gas Safe registered and fully trained and qualified to work on gas heating of all types.</p>
			<p>Need a Gas Safe engineer in an emergency? We are available in a hurry 24/7 for situations connected to a boiler that can't wait.</p>
			<div class="hero-ctas">
				<a href="<?php echo esc_url( home_url( '/new-boilers/' ) ); ?>" class="btn btn-orange">Get a Free Boiler Quote</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Speak to Our Experts</a>
			</div>
		</div>
		<div aria-hidden="true"><svg viewBox="0 0 300 300"><rect x="70" y="30" width="160" height="240" rx="12" fill="#f5f7f9" stroke="#1b75bc" stroke-width="3"/><circle cx="150" cy="150" r="40" fill="#fff" stroke="#f15a29" stroke-width="3"/><path d="M150 132c-5 7-4 12-7 16s-2 12 7 14c-3-5-2-9 0-11c0 4 2 5 0 11c7-2 9-9 4-14c-2 2-3 2-3 0c0-5 0-9 0-16Z" fill="#f15a29"/></svg></div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<div class="center" style="max-width:640px; margin:0 auto 20px;">
			<h2>Why Choose Us</h2>
			<p style="color:var(--steel);">Your satisfaction is our top priority throughout the entire process.</p>
		</div>
		<div class="card-list grid--4">
			<div class="card">
				<h4>Energy Efficiency</h4>
				<p>Benefit from our expertise recommending and installing energy-efficient models, cutting bills and environmental footprint.</p>
			</div>
			<div class="card">
				<h4>Quality Workmanship</h4>
				<p>Top-notch service and the highest standards of workmanship, to safety regulations and manufacturer guidelines.</p>
			</div>
			<div class="card">
				<h4>Expertise and Experience</h4>
				<p>In-depth knowledge of various boiler models and heating systems, done correctly and efficiently.</p>
			</div>
			<div class="card">
				<h4>Personalised Solutions</h4>
				<p>We assess property size, hot water demand and efficiency goals for solutions that maximise comfort.</p>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/cta-banner' ); ?>

<section>
	<div class="wrap">
		<div class="center" style="margin-bottom:30px;">
			<h2>Check Out What Your Neighbours Are Saying About Us!</h2>
			<div class="trust-badge">&#9733; 4.0 TrustScore on Trustpilot</div>
		</div>
		<?php get_template_part( 'template-parts/testimonials', null, array( 'limit' => 3 ) ); ?>
		<div class="center" style="margin-top:20px;"><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>" class="btn btn-outline">Read all reviews</a></div>
	</div>
</section>

<section class="section-tint">
	<div class="wrap two-col">
		<div class="body-copy">
			<h2>We Match All Like-For-Like Quotes</h2>
			<p>When you need a new boiler we understand that the hardest thing to do is find a good installer at a fair price. That's why we created our best price promise.</p>
			<p>We're so confident we can give you the best-fixed price installation that if we can't beat a like-for-like quote we'll give you a &pound;50 Amazon voucher.</p>
			<a href="<?php echo esc_url( home_url( '/price-promise/' ) ); ?>" class="btn btn-orange">Learn More</a>
		</div>
		<div aria-hidden="true"><svg viewBox="0 0 300 300"><circle cx="150" cy="130" r="90" fill="#eaf2f8"/><circle cx="150" cy="130" r="66" fill="#fff" stroke="#1b75bc" stroke-width="4"/><text x="150" y="118" text-anchor="middle" font-family="Poppins,sans-serif" font-weight="700" font-size="20" fill="#1b75bc">BEST</text><text x="150" y="143" text-anchor="middle" font-family="Poppins,sans-serif" font-weight="700" font-size="20" fill="#f15a29">PRICE</text></svg></div>
	</div>
</section>

<section>
	<div class="wrap">
		<div class="center" style="margin-bottom:20px;"><h2>Areas We Cover</h2></div>
		<?php get_template_part( 'template-parts/area-list' ); ?>
	</div>
</section>

<?php get_footer(); ?>
