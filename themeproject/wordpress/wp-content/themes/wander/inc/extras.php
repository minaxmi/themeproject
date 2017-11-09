<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package wander
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wander_body_classes( $classes ) {	
	if( is_page(12) || is_page(43) ){
		$classes[] = "body-bg-slider";
	}
	return $classes;
}
add_filter( 'body_class', 'wander_body_classes' );
