<?php

// check if the repeater field has rows of data
if( have_rows('chambers') ): ?>

	<h2>Chambers for hire</h2>
	<?php get_template_part ( 'partials/loop-content/content-chambers-list-headings'); ?>

	<?php // loop through the rows of data
    while ( have_rows('chambers') ) : the_row();

		$post_object = get_sub_field ( 'chamber' );

		if( $post_object ): 

			// override $post
			$post = $post_object;
			setup_postdata( $post ); 
	
			include( locate_template( 'partials/loop-content/content-chambers-list.php' ) ); 
			$count++;

			wp_reset_postdata();

		endif; 

    endwhile;

endif; 

