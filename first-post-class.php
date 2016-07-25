<?php
add_filter( 'post_class', 'be_first_post_class' );
/**
 * First Post Class
 * Adds a class of 'first' to the first post
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/code/first-post-class
 *
 * @param array $classes
 * @return array
 */
function be_first_post_class( $classes ) {
	global $wp_query;
	if( 0 == $wp_query->current_post )
		$classes[] = 'first';
	return $classes;
}
