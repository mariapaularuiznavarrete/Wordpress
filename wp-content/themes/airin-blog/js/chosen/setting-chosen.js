/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Copyright © Airin Blog by DMCWebZone. All Rights Reserved.
* @package Airin Blog
* Description: Customizable SELECT
* ------------------------------------------------------------------------------ */


jQuery(function($) {

	'use strict';
	
	// For archive widgets
	$(".widget.widget_archive select").chosen({
    	width: "100%",
		disable_search_threshold: 10,
		no_results_text: airinblog_localize_chosen.nonce_defoult,
  	});

	// Woo

	// Sorting in the product catalog
	$(".woocommerce-ordering select.orderby").chosen({
		width: "100%",
		disable_search_threshold: 15,
		no_results_text: airinblog_localize_chosen.nonce_woo_sort,
  	});

});