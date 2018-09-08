<?php

$query_args = array(
	'post_type' => 'chamber',
	'posts_per_page' => -1
);

$result = new WP_Query( $query_args );

if ( $result->have_posts() ) :

	while ( $result->have_posts() ) : $result->the_post(); 
	
		get_template_part ( 'partials/loop-content/content-chambers-list' );

	endwhile;

	wp_reset_query();
endif; 

