<?php
/**
 * Page template, auto-applied by WordPress to the page with slug "power-flushing".
 */
get_header();
get_template_part( 'template-parts/page-hero', null, array(
	'eyebrow' => 'Boost Heating Efficiency',
	'title'   => 'Expert Power Flushing Services',
	'lead'    => 'Remove sludge, debris, and rust to lower energy costs and prolong the lifespan of your central heating system.',
) );
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<h2>What is Power Flushing?</h2>
		<p>Power flushing is a highly effective method used to clean central heating systems, removing any buildup of sludge, debris, and rust. Using a specially designed machine, water is pumped at high velocity through your heating system, dislodging and flushing out any accumulated contaminants.</p>
		<p>Over time, debris, sludge, and rust can build up within your system, leading to reduced efficiency, cold spots, noisy operation, and even breakdowns.</p>
		<h3 style="margin-top:32px;">Our Process</h3>
		<ul class="icon-list">
			<li><?php echo oneserv_icon( 'check' ); ?><span><strong>Preparation:</strong> We isolate and protect sensitive components, such as the boiler and pump, to prevent damage.</span></li>
			<li><?php echo oneserv_icon( 'check' ); ?><span><strong>Power Flushing:</strong> Using state-of-the-art equipment, we pump high-pressure water and cleaning agents through your system.</span></li>
			<li><?php echo oneserv_icon( 'check' ); ?><span><strong>Flush and Refill:</strong> We flush the system with clean water, then refill with inhibitor to prevent future buildup.</span></li>
			<li><?php echo oneserv_icon( 'check' ); ?><span><strong>Final Checks:</strong> We conduct thorough checks to ensure your system is functioning optimally.</span></li>
		</ul>
	</div>
</section>

<?php
get_template_part( 'template-parts/service-content', null, array( 'slug' => 'power-flushing' ) );
get_footer();