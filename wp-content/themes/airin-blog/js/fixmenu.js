/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* @package Airin Blog
* Description: Pin main menu
* ------------------------------------------------------------------------------ */


jQuery(function($) {

	'use strict';
	
	$(window).scroll(function() {
		let widthSite = document.documentElement.clientWidth;
		if (widthSite > 860) {
			let topScroll = $(document).scrollTop();
			let adminMenu = $('#wpadminbar').length;
			let adminHeight = $('#wpadminbar').height();
			let menuHeight = $('#mega-menu-box').height();
			let headerHeight = $('#site-header').height();
			let topMenu = headerHeight + 100;
			if (topScroll < topMenu) {
				$("#site-navigation").css({position: 'relative', top: '0', "z-index": '999', "transition-duration": '0.5s'});
			} else {
				$("#mega-menu-box").css({height: menuHeight});
				$("#site-navigation").css({top: '0px', position: 'fixed', "z-index": '999'});
				if (adminMenu == true) {
					$("#site-navigation").css({top: adminHeight});
				}
			}
			

		}
	});
});