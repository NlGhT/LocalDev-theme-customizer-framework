<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package LocalDev Theme Customizer Framework
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function localdev_theme_customizer_framework_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'localdev_theme_customizer_framework_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function localdev_theme_customizer_framework_jetpack_setup
add_action( 'after_setup_theme', 'localdev_theme_customizer_framework_jetpack_setup' );

function localdev_theme_customizer_framework_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function localdev_theme_customizer_framework_infinite_scroll_render