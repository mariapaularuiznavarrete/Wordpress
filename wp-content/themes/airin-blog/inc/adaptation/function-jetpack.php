<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Jetpack Compatibility File
* ------------------------------------------------------------------------------ */


function airinblog_fun_jetpack_setup() {

	// Add theme support for Infinite Scroll
	add_theme_support('infinite-scroll', array(
		'container' => 'airinblog-id-cat-box',
		'render'    => 'airinblog_fun_infinite_scroll',
		'footer'    => 'page',
		'wrapper' => false
	));

	// Add theme support for Responsive Videos
	add_theme_support('jetpack-responsive-videos');

}
add_action('after_setup_theme', 'airinblog_fun_jetpack_setup');

// Custom render function for Infinite Scroll
function airinblog_fun_infinite_scroll() {
	while (have_posts()) {
		the_post();
		get_template_part('template-parts/content-archive');
	}
}

// Support Infinite Scroll
// https://jetpack.com/support/infinite-scroll/
