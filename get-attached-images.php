<?php
// Get all images attached to post that have "Include in Rotator" marked as "Yes"
global $post;
$args = array( 
	'post_parent' => $post->ID,
	'post_type' => 'attachment',
	'post_mime_type' => 'image',
	'post_status' => 'inherit',
	'posts_per_page' => '-1',
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'meta_query' => array(
		array(
			'key' => 'be_rotator_include',
			'value' => '1'
		)
	)
);
$images = new WP_Query( $args );
if( !$images->have_posts() )
	return;
while( $images->have_posts() ): $images->the_post(); global $post;
	// Echo image url
	$image = wp_get_attachment_image_src( $post->ID, 'be_featured' );
	echo $image[0] . '<br />';
	
endwhile; wp_reset_query();
