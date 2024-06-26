/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* @package Airin Blog
* Description: Pin top menu
* ------------------------------------------------------------------------------ */


jQuery(document).ready(function ($) {

    "use strict";
    
    $(".airinblog-css-top-jsmenu-mobile .menu-item-has-children").find("> a").after('<button class="submenu-toggle"></button>');
    $(".airinblog-css-toggle-btn").on("click", function() {
        $(".airinblog-css-top-jsmenu-mobile").animate({
            width: "toggle"
        });
    });
    $(".airinblog-css-top-jsmenu-mobile .airinblog-css-btn-close-menu").on("click", function() {
        $(".airinblog-css-top-jsmenu-mobile").animate({
            width: "toggle"
        });
    });
    $(".airinblog-css-top-jsmenu-mobile .submenu-toggle").on("click", function() {
        $(this).toggleClass("active");
        $(this).siblings(".sub-menu").stop(!0, !1, !0).slideToggle();
    });
    $(".airinblog-css-top-jsmenu-box ul li a").on("focus", function() {
        $(this).parents("li").addClass("focused");
    }).on("blur", function() {
        $(this).parents("li").removeClass("focused");
    });

});


