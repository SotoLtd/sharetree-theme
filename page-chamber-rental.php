<?php
/**
 * @package WordPress
 * @subpackage Industrial
 * @since Industrial 1.0
 * 
 * Template Name: With Banner
 */
get_header();


$cmsms_heading = get_post_meta(get_the_ID(), 'cmsms_heading', true);

$cmsms_layout = get_post_meta(get_the_ID(), 'cmsms_layout', true);

if (!$cmsms_layout) {
    $cmsms_layout = 'r_sidebar';
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n";

if ($cmsms_layout == 'r_sidebar') {
	echo '<section id="content" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<section id="content" class="fr" role="main">' . "\n\t";
} else {
	echo '<section id="middle_content" role="main">' . "\n\t";
}


echo '<div class="entry">' . "\n\t";

if (have_posts()) : the_post();

	if (has_post_thumbnail() && $cmsms_heading != 'parallax') {
        echo '<div class="stpt-featured-image">'. get_the_post_thumbnail(get_the_ID(), 'full') .'</div>';
	}

	get_template_part ( 'partials/loops/loop-chambers' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>	

<?php endif;

echo '</div>' . "\n";
	
comments_template();

echo '</section>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";



get_footer();

