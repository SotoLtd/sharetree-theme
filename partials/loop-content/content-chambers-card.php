<?php
	$image = get_field('image');
?>	

<section class="chambers-card chambers-card-<?php echo $count ?> hidden">	

	<p>
		<?php if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</p>

	<p><?php the_field( 'detailed_description' ); ?></p>

</section>



