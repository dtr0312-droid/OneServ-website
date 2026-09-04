<?php
/**
 * Shared body content for a single service-area town page. Matches the
 * real site's per-town copy, which is identical across towns aside from
 * the town name — templatised here rather than duplicated into 5 files.
 * Expects $args: slug (key into oneserv_towns()).
 */
$slug  = $args['slug'] ?? '';
$towns = oneserv_towns();
if ( ! isset( $towns[ $slug ] ) ) return;
$t = $towns[ $slug ];
$name = $t['name'];
?>

<section>
	<div class="wrap body-copy" style="max-width:820px;">
		<p>At OneServ Ltd, we work in <?php echo esc_html( $name ); ?> and the surrounding areas providing expert heating services. Whether you're in need of a new boiler, commercial heating installation, power flushing service or boiler repair, our Gas Safe engineers are here to ensure your home stays warm and comfortable.</p>
		<h3>New Boilers Installed in <?php echo esc_html( $name ); ?></h3>
		<p>We supply and install A-rated boilers from leading manufacturers such as Main, Vok&egrave;ra and Baxi, with next-day boilers available in <?php echo esc_html( $name ); ?>. Our experienced gas heating engineers can help you choose the right replacement boiler for your home.</p>
		<h3>We Service Boilers in <?php echo esc_html( $name ); ?></h3>
		<p>Regular maintenance is key to ensuring your boiler works safely and efficiently all year round. We perform a full inspection, identifying any potential issues before they become costly repairs.</p>
		<h3>Boilers Fixed Professionally in <?php echo esc_html( $name ); ?></h3>
		<p>If your boiler breaks down, you don't want to be left without heating or hot water for long. We offer fast and reliable boiler repairs throughout <?php echo esc_html( $name ); ?>, aiming to resolve most problems the same day.</p>
	</div>
	<div class="wrap">
		<div class="center" style="margin:20px 0;"><h4>Areas We Cover</h4></div>
		<?php get_template_part( 'template-parts/area-list' ); ?>
	</div>
</section>

<section class="section-tint">
	<div class="wrap">
		<?php get_template_part( 'template-parts/cta-banner', null, array(
			'title' => 'Need an engineer in ' . $name . '?',
		) ); ?>
	</div>
</section>
