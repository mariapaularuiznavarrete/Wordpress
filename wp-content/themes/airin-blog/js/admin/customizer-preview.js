/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Copyright © Airin Blog by DMCWebZone. All Rights Reserved.
* @package Airin Blog
* Description: Functions for Preview - Customizer
* ------------------------------------------------------------------------------ */


jQuery(document).ready(function($) {
	
	'use strict';

	// Site name and description
	wp.customize('blogname', function(value) {
		value.bind(function(to) {
			$('.airinblog-css-site-title').text(to);
		});
	});
	wp.customize('blogdescription', function(value) {
		value.bind(function(to) {
			$('.airinblog-css-site-description').text(to);
		});
	});
	
	// Hiding and changing the color of the header and description
	wp.customize('header_textcolor', function(value) {
		value.bind(function(to) {
			if ('blank' === to) {
				$('.airinblog-css-site-title, .airinblog-css-site-description').css({
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				});
			} else {
				$('.airinblog-css-site-title, .airinblog-css-site-description').css({
					'clip': 'auto',
					'position': 'relative'
				});
				$('.clear-title-box').css({
					'margin-top': '20px',
					'margin-left': '10px'
				});
				$('.airinblog-css-site-title, .airinblog-css-site-description').css({
					'color': to
				});
			}
		});
	});

	// Remove top menu area
	wp.customize('airinblog_cus_top_menu', function(value) {
		value.bind(function(to) {
			if (to == 1) {
				$('.airinblog-css-top-menu').css({
					'display': 'none'
				});
			} else {
				$('.airinblog-css-top-menu').css({
					'display': 'flex'
				});
			}
		});
	});

	// Remove main menu area
	wp.customize('airinblog_cus_main_menu', function(control) {
	    control.bind(function(controlValue) {
		  	if (controlValue == 1) {
				$('.airinblog-css-mega-menu-box').css({
					'display': 'none'
				});
			} else {
				$('.airinblog-css-mega-menu-box').css({
					'display': 'block'
				});
			}
	    });
	});

});


// -----------------  Adds an edit button to the preview area
wp.customize.selectiveRefresh.partialConstructor.airinblog_redact = (function(api, $) {
	'use strict';
	return api.selectiveRefresh.Partial.extend({
		refresh: function() {}
	});
})(wp.customize, jQuery);
