<?php

$query_args = array(
	'post_type' => 'chamber',
	'posts_per_page' => -1
);

$count = 0;

$result = new WP_Query( $query_args );

if ( $result->have_posts() ) :

	while ( $result->have_posts() ) : $result->the_post(); 
	
		include( locate_template( 'partials/loop-content/content-chambers-list.php' ) ); 
		$count++;

	endwhile;

	wp_reset_query();
endif; 

