<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Themeideas
 * @author Neoideas <contacto@neoideas.mx>
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function themeideas_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'themeideas_jetpack_setup' );
