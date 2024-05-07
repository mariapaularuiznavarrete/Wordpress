<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Functions for Elementor
* ------------------------------------------------------------------------------ */


//? ========== ========== ========== Adding sidebar location for Elementor

function airinblog_fun_register_location_elementor($elementor_theme_manager) {
	$elementor_theme_manager->register_all_core_location();
	$elementor_theme_manager->register_location(
		'airinblog_elementor_sidebar',
		[
			'label' => 'Theme-sidebar',
			'multiple' => true,
			'edit_in_content' => false
		]
	);
}
add_action('elementor/theme/register_locations', 'airinblog_fun_register_location_elementor');
