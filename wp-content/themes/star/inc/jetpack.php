<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package star
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function star_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'star_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function star_jetpack_setup
add_action( 'after_setup_theme', 'star_jetpack_setup' );

function star_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function star_infinite_scroll_render