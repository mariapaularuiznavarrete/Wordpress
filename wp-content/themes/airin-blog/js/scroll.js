/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Copyright © Airin Blog by DMCWebZone. All Rights Reserved.
* @package Airin Blog
* Description: Up button
* ------------------------------------------------------------------------------ */


jQuery(document).ready(function($) {

    'use strict';
 
    $(window).scroll(function() {
        if ($(this).scrollTop() > 800) {
        $('.airinblog-css-scrollup').fadeIn();
        } else {
        $('.airinblog-css-scrollup').fadeOut();
        }
    });
    
    $('.airinblog-css-scrollup').click(function() {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

});

