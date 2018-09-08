<?php
	$file = get_field('pdf');
?>	

<section class="chambers-list">	

	<h2><?php the_title(); ?></h2>

	<p>
		<?php if( $file ): ?>
			<a href="<?php echo $file['url']; ?>"><?php the_field ('short_description') ?></a>
		<?php else: ?>
			<?php the_field ('short_description') ?>
		<?php endif; ?>	
	</p>

	<div class="data-section">

		<div class="column-1">
			<p class="less-padding two-columns">
				<span>Volume:</span>
				<span><?php the_field ('volume_ltrs') ?> litres</span>
			</p>
			<p class="less-padding two-columns">
				<span>Temperature range:</span> 
				<span><?php the_field ('temperature_range_low') ?>&#8451; - <?php the_field ('temperature_range_high') ?>&#8451;</span>
			</p>
			<p class="less-padding two-columns">
				<span>Humidity range:</span> 
				<span><?php the_field ('humidity_range_low') ?>&#8451; - <?php the_field ('humidity_range_high') ?>&#8451;</span>
			</p>
			<p class="two-columns">
				<span>Ramp rate:</span> 
				<span><?php the_field ('ramp_rate') ?>&#8451;/min</span>
			</p>
		</div>	
		
		<div class="column-2">	
			<p class="less-padding two-columns">
				<span>At your site:</span>  
				<span>£<?php the_field ('price_at_your_site') ?> per month</span> 
			</p>
			<p class="two-columns">
				<span>At our site:</span>  
				<span>
					£<?php the_field ('price_at_our_site_daily') ?> per day<br/>
				 	£<?php the_field ('price_at_our_site_weekly') ?> per week
				</span>
			</p>
		</div>	

	</div>		

	<button class="read-more" id="chamber-<?php echo $count; ?>">
		Reveal details<span class="dashicons dashicons-arrow-right-alt2"></span>
	</button>

	<?php include( locate_template( 'partials/loop-content/content-chambers-card.php' ) ); ?>

</section>



