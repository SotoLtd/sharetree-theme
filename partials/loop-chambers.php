<?php

$query_args = array(
	'post_type' => 'chamber',
	'posts_per_page' => -1
);

$result = new WP_Query( $query_args );

if ( $result->have_posts() ) :

	while ( $result->have_posts() ) : $result->the_post(); ?>
	
		<h1><?php the_title(); ?></h1>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

	<?php endwhile;

	wp_reset_query();
endif; 

