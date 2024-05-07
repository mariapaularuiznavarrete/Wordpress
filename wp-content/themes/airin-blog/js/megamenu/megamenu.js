/* 
- Name: megamenu.js
- Version: 1.0
- Latest update: 29.01.2016.
- Author: Mario Loncarek
- Author web site: http://marioloncarek.com
- Author github: https://github.com/marioloncarek/megamenu-js
- Licensed under: SEE LICENSE IN https://github.com/marioloncarek/megamenu-js/blob/master/licence.md
- Modification by DMCWebZone, https://web-zone.org
*/


/*global $ */
jQuery(document).ready(function ($) {

    "use strict";

    // Checks if li has sub (ul) and adds class for toggle icon - just an UI
    $('.airinblog-css-mega-menu > ul > li:has( > ul)').addClass('airinblog-css-mega-menu-dropdown-icon');
    
    // Checks if drodown airinblog-css-mega-menu's li elements have anothere level (ul), 
    // if not the dropdown is shown as regular dropdown, not a mega airinblog-css-mega-menu (thanks Luka Kladaric)
    $('.airinblog-css-mega-menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');

    // Checks if drodown airinblog-css-mega-menu's for icon
    $('.airinblog-css-mega-menu > ul > li > a:not(:has(ul))').addClass('normal-sub-for-icon');
    
    var titleMobile = airinblog_localize_megamenu.title_mobile;
    $(".airinblog-css-mega-menu > ul").before('<a href=\"#\" class=\"airinblog-css-mega-menu-mobile\">' + titleMobile, '</a>');

    // Adds airinblog-css-mega-menu-mobile class (for mobile toggle airinblog-css-mega-menu) before the normal airinblog-css-mega-menu
    // Mobile airinblog-css-mega-menu is hidden if width is more then 959px, but normal airinblog-css-mega-menu is displayed
    // Normal airinblog-css-mega-menu is hidden if width is below 959px, and jquery adds mobile airinblog-css-mega-menu
    // Done this way so it can be used with WordPress without any trouble
    var MenuShowTimer;
    $(".airinblog-css-mega-menu > ul > li").hover(
        function (e) {
            if ($(window).width() > 843) {
                MenuShowTimer = setTimeout(
                    (function (Obj){
                        return function () {
                            $(Obj).children("ul").css("display", "flex").hide().fadeIn(100);
                            e.preventDefault();
                        };
                    })(this), 200
                );
            }
        }, function (e) {
            if ($(window).width() > 843) {
                clearTimeout(MenuShowTimer);
                $(this).children("ul").fadeOut(200, "swing");
                e.preventDefault();
            }
        }
    );
    // If width is more than 943px dropdowns are displayed on hover

    // the following hides the airinblog-css-mega-menu when a click is registered outside
    $(document).on('click', function(e){
        if($(e.target).parents('.airinblog-css-mega-menu').length === 0)
            $(".airinblog-css-mega-menu > ul").removeClass('show-on-mobile');
    });

    // Mobile drop icon
    $(".airinblog-css-mega-menu-dropdown-icon").on('click', function() {
        $(".airinblog-css-mega-menu-dropdown-icon").removeClass("active");
    });

    // If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)
    $(".airinblog-css-mega-menu > ul > li").click(function() {
        // no more overlapping airinblog-css-mega-menus
        // hides other children airinblog-css-mega-menus when a list item with children airinblog-css-mega-menus is clicked
        var thismegamenu = $(this).children("ul");
        var prevState = thismegamenu.css('display');
        $(".airinblog-css-mega-menu > ul > li > ul").fadeOut();
        if ($(window).width() < 843) {
            if (prevState !== 'block') {
                thismegamenu.fadeIn(150);
                // Mobile drop icon
                $(this).addClass("active");
            }
        }
    });
    
    // when clicked on mobile-airinblog-css-mega-menu, normal airinblog-css-mega-menu is shown as a list, 
    // classic rwd airinblog-css-mega-menu story (thanks mwl from stackoverflow)
    $(".airinblog-css-mega-menu-mobile").click(function (e) {
        $(".airinblog-css-mega-menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
    });

    // Support focus
    $(".airinblog-css-mega-menu > ul > li > a").on("focus", function() {
        $(".airinblog-css-mega-menu li").removeClass("focused");
        $(this).parents("li").addClass("focused");
    });
    $(".airinblog-css-mega-menu > ul > li:last-child > ul:not(:has(ul)) > li:last-child > a, \
        .airinblog-css-mega-menu > ul > li:last-child > ul > li:last-child > ul:not(:has(ul)) > li:last-child > a, \
        .airinblog-css-mega-menu > ul > li:last-child > ul > li:last-child > ul > li:last-child > ul:not(:has(ul)) > li:last-child > a").on("blur", function() {
        $(".airinblog-css-mega-menu li").removeClass("focused");
    });

});
