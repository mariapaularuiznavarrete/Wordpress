<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Functions for customizer
* ------------------------------------------------------------------------------ */
//?-----------------------------------------------------------------------------------------------------------
//?---------- Connecting the customizer settings
//?-----------------------------------------------------------------------------------------------------------
function airinblog_fun_set_css() {
    //? ========== ========== ========== Variables
    //---------- General colors
    // Primary theme color
    $primary_color = esc_attr( get_theme_mod( 'airinblog_cus_colors_primary', '#dd9922' ) );
    // Related elements for the main theme color
    $color_lite = esc_attr( get_theme_mod( 'airinblog_cus_colors_primary_lite', '#fffffc' ) );
    // Background color main menu, footer and widget titles
    $menu_color = esc_attr( get_theme_mod( 'airinblog_cus_main_menu_back_color', '#505050' ) );
    // Site background color
    $background_site = esc_attr( get_theme_mod( 'background_color' ) );
    //---------- Common colors
    // Heading text general color
    $h_color = '#404046';
    // General text color
    $t_color = '#404040';
    // General link color
    $color_link = '#1e73bb';
    // General link color on hover
    $link_hover = '#dd9925';
    // Site content background color
    $content_color = '#fffffa';
    // Header background color
    $header_color = '';
    //---------- Ticker
    // Ticker color
    $ticker_color = '';
    //---------- Breadcrumbs
    // Breadcrumbs header text color
    $bread_h_color = '';
    // Breadcrumb link text color
    $bread_a_color = '';
    // Breadcrumb link text color on hover
    $bread_a_hover_color = '';
    // Breadcrumbs background color
    $bread_back_color = '';
    //---------- Footer
    // Footer background color
    $footer_back_color = '';
    // Widgets headers text color in footer
    $widget_footer_h_color = '';
    // Footer text color
    $footer_text_color = '';
    // Footer link color
    $footer_a_color = '';
    // Footer links color (on hover)
    $footer_a_hover = '';
    // Footer elements color
    $footer_primary_color = '';
    //---------- Main menu
    // Main menu color (on hover)
    $menu_hover_color = '';
    // Main menu and footer text color
    $menutext_color = '#fffffb';
    // Main menu background color (submenu)
    $submenu_back_color = '';
    // Main menu links color (submenu)
    $submenu_link_color = '';
    //---------- Top menu
    // Top menu text color
    $top_menu_text_color = '';
    // Top menu text color (on hover)
    $top_menu_text_hover = '';
    // Top drop-down menu background color
    $top_menu_back_color = '';
    // Top drop-down menu links color
    $top_menu_sub_link = '';
    // Top drop-down menu links background color (on hover)
    $top_menu_back_hover = '';
    //---------- Widgets
    // Background for widgets in columns
    $widget_back_color = '';
    // Background color for widget headers in columns
    $widget_h_back_color = '';
    // Widgets headers text color in columns
    $widget_h_text_color = '';
    // Text color of menu items of basic classic widgets
    $widget_menu_text_color = '';
    // Text color of menu items of basic classic widgets (on hover)
    $widget_menu_hover_color = '';
    // Background color of menu items of basic classic widgets
    $widget_menu_back_color = '';
    //---------- Template orientation
    // Site-wide template orientation
    $airinblog_lay = esc_attr( get_theme_mod( 'airinblog_cus_lay_all', 'right' ) );
    // Orientation of the template on the main page
    $airinblog_lay_home = esc_attr( get_theme_mod( 'airinblog_cus_lay_home', 'right' ) );
    //---------- Categories
    // Number (size) of columns in categories
    $cat_win = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_win', 'w3' ) );
    // Background color for posts blocks in categories
    $back_cat_color = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_back_color' ) );
    // Remove "Read more" button in categories
    $more_cat = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_more', 0 ) );
    // Remove description in categories
    $des_cat_none = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_entry_none', 0 ) );
    // Remove category headings
    $h_cat_none = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_title_none', 0 ) );
    // Animation of blocks in categories
    $anime_cat = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_anime', 'a1' ) );
    // Background color of sticky posts
    $sticky_color = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_back_sticky' ) );
    // Meta tags in categories
    $meta_cat_activ = esc_attr( get_theme_mod( 'airinblog_cus_cat_meta', 1 ) );
    // Variation of pagination in categories
    $pagi_cat = esc_attr( get_theme_mod( 'airinblog_cus_pagination_variant', 'v1' ) );
    // Design for numeric pagination
    $pagi_design_cat = esc_attr( get_theme_mod( 'airinblog_cus_pagination_design', 'v1' ) );
    // Location of the numeric pagination
    $pagi_layout_cat = esc_attr( get_theme_mod( 'airinblog_cus_pagination_layout', 'v2' ) );
    // Size of the numeric pagination
    $pagi_size_cat = esc_attr( get_theme_mod( 'airinblog_cus_pagination_size', 'v2' ) );
    //---------- Posts
    // Quote block display variation
    $quote_block = esc_attr( get_theme_mod( 'airinblog_cus_post_quote', 'v1' ) );
    // Quote block background color
    $quote_back_color = esc_attr( get_theme_mod( 'airinblog_cus_post_quote_back_color' ) );
    // Quote block text color
    $quote_text_color = esc_attr( get_theme_mod( 'airinblog_cus_post_quote_text_color' ) );
    // Background color of icons and lines in block quotes
    $quote_icon_back = esc_attr( get_theme_mod( 'airinblog_cus_post_quote_element_color' ) );
    // Quote block icon size
    $quote_icon_size = esc_attr( get_theme_mod( 'airinblog_cus_post_quote_icon_size', 24 ) );
    // Quote block icons color
    $quote_icon_color = esc_attr( get_theme_mod( 'airinblog_cus_post_quote_icon_color' ) );
    // Bulleted list display variation
    $mark_list = esc_attr( get_theme_mod( 'airinblog_cus_post_li_mark', 'v1' ) );
    // Numbered list display variation
    $num_list = esc_attr( get_theme_mod( 'airinblog_cus_post_li_num', 'v5' ) );
    // Bulleted list markers color
    $l_mark_color = esc_attr( get_theme_mod( 'airinblog_cus_post_li_mark_color' ) );
    // Numbered list bullet background color
    $l_num_color = esc_attr( get_theme_mod( 'airinblog_cus_post_li_num_back_color' ) );
    // Numbered list bullet text color
    $l_num_text_color = esc_attr( get_theme_mod( 'airinblog_cus_post_li_num_text_color' ) );
    // H2 heading variation selection (posts and pages)
    $h2_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h2', 'off' ) );
    // H2 heading icons text color (posts and pages)
    $h2_text_icon_color = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_icon_text_color' ) );
    // H2 header icons background color (posts and pages)
    $h2_icon_back = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_element_color' ) );
    // Variation selection H3 - H6 headings (posts and pages)
    $h36_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36', 'off' ) );
    // Icon text color H3 - H6 headings (posts and pages)
    $h36_text_icon_color = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_icon_text_color' ) );
    // Icon background color H3 - H6 headings (posts and pages)
    $h36_icon_back = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_element_color' ) );
    // Author block separator variations
    $bio_post_border = esc_attr( get_theme_mod( 'airinblog_cus_post_bio_design', 'v3' ) );
    // Change the style of author block separators
    $bio_post_line = esc_attr( get_theme_mod( 'airinblog_cus_post_bio_design_line', 'solid' ) );
    // Changing the thickness of author block dividers
    $bio_post_size = esc_attr( get_theme_mod( 'airinblog_cus_post_bio_design_size', 1 ) );
    //---------- Main Page
    // Color of section headings on the main page
    $home_h_size = esc_attr( get_theme_mod( 'airinblog_cus_home_set_h_size', '20' ) );
    $home_h_color = esc_attr( get_theme_mod( 'airinblog_cus_home_set_h_color' ) );
    //---------- Typography
    $serif = array(
        'bitter',
        'charis-sil',
        'cormorant-infant',
        'lora',
        'merriweather',
        'spectral-sc',
        'roboto-slab'
    );
    $cursive = array(
        'bellota',
        'comfortaa',
        'amatic-sc',
        'pacifico',
        'neucha',
        'marck-script',
        'lobster',
        'caveat',
        'bad-script',
        'underdog',
        'pangolin',
        'viaoda-libre'
    );
    //---------- Clear
    $css = '';
    //? ========== ========== ========== General theme colors
    //?---------- Site background color
    if ( !empty( $background_site ) ) {
        $css .= '
      body.custom-background {
        background: #' . $background_site . ';
      }
    ';
    }
    //?---------- Primary theme color
    if ( $primary_color != '#dd9922' ) {
        $css .= '
      button,input[type="button"],
      input[type="reset"],
      input[type="submit"],
      .airinblog-css-mega-menu > ul > li:hover,
      .airinblog-css-mega-menu > ul > li > ul > li > ul > li > ul > li:before,
      a.airinblog-css-more-link,
      #comments .reply a,
      .airinblog-css-sitemap-pagi a {
        background: ' . $primary_color . ';
      }
      .airinblog-css-mega-menu-container,
      .airinblog-css-mega-menu > ul > li > ul {
        border-bottom: 2px solid ' . $primary_color . ';
      }
      .airinblog-css-site-description,
      .airinblog-css-mega-menu > ul > li > ul {
        border-top: 2px solid ' . $primary_color . ';
      }
      .search-wrap input[type="text"],
      input[type="text"],
      input[type="email"],
      input[type="url"],
      input[type="password"],
      input[type="search"],
      input[type="number"],
      input[type="tel"],
      input[type="range"],
      input[type="date"],
      input[type="month"],
      input[type="week"],
      input[type="time"],
      input[type="datetime"],
      input[type="datetime-local"],
      input[type="color"],
      .site input[type="search"],
      .widget select,
      textarea,
      select,
      a:focus img,
      .airinblog-css-mod-pp-content .wp-block-post-comments-form input:not([type=submit]):not([type=checkbox]),
      .airinblog-css-mod-pp-content .wp-block-post-comments-form textarea,
      .airinblog-css-sitemap-pagi span.current {
        border: 1px solid ' . $primary_color . ';
      }
      .airinblog-css-top-bar,
      .airinblog-css-nav-top-mobile-title,
      .airinblog-css-mega-menu > ul > li > ul > li a {
        border-bottom: 1px solid ' . $primary_color . ';
      }
      [id="airinblog-id-nav-top-mobile-toggle"]:checked ~ .airinblog-css-nav-top-mobile > .airinblog-css-nav-top-mobile-title > .airinblog-css-nav-top-mobile-toggle:after,
      .widget_categories li:before,
      .widget_archive li:before,
      .widget_recent_entries li:before,
      .airinblog-css-sitemap-cat li:before,
      .airinblog-css-search-top-bar .airinblog-css-top-search-button {
        color: ' . $primary_color . ';
      }
      .widget_block .wp-block-quote {
        border-left: 0.25em solid ' . $primary_color . ';
      }
      .chosen-container div.chosen-drop,
      .chosen-container-single a.chosen-single,
      .chosen-container-active.chosen-with-drop a.chosen-single {
        border-color: ' . $primary_color . ';
      }
      a:focus {
        outline: 2px solid ' . $primary_color . ';
      }
      @supports selector(:focus-visible) {
        a:focus {
          outline: none;
        }
        a:focus-visible {
          outline: 2px solid ' . $primary_color . ';
        }
        a:focus img {
          border: none;
        }
        a:focus-visible img {
          border: 1px solid ' . $primary_color . ';
        }
      }

    ';
    }
    //?---------- Related elements for the main theme color
    if ( $color_lite != '#fffffc' ) {
        $css .= '
      a.airinblog-css-more-link,
      a:hover.airinblog-css-more-link,
      #comments .reply a,
      #comments .reply a:hover,
      button,
      input[type="button"],
      input[type="reset"],
      input[type="submit"],
      .airinblog-css-sitemap-pagi a,
      .airinblog-css-sitemap-pagi a:hover {
        color: ' . $color_lite . ';
      }
    ';
    }
    //?---------- General link color
    if ( $color_link != '#1e73bb' ) {
        $css .= '
      a,
      .airinblog-css-post-meta-data-tax span,
      .airinblog-css-cat-meta-data-tax span,
      .airinblog-css-nav-top-mobile-burger:after,
      .airinblog-css-mega-menu > ul > li > ul > li a,
      .airinblog-css-mega-menu > ul > li > ul.normal-sub > li a,
      .site .wp-block-file__button {
        color: ' . $color_link . ';
      }
      .airinblog-css-nav-top-mobile-burger:after {
        border: 1px solid ' . $color_link . ';
      }
      button.airinblog-css-toggle-btn .airinblog-css-toggle-bar {
        background: ' . $color_link . ';
      }
    ';
    }
    //?---------- General link color on hover
    if ( $link_hover != '#dd9925' ) {
        $css .= "\n      a:hover,\n      .airinblog-css-entry-title a:hover,\n      .airinblog-css-related-post-title a:hover,\n      .airinblog-css-related-post-box:hover .airinblog-css-related-post-title,\n      .airinblog-css-home-vertical-grid-column h2:hover,\n      .site .wp-block-file__button:hover {\n        color: {$link_hover};\n      }\n    ";
    }
    //?---------- Background color main menu and footer
    if ( $menu_color != '#505050' ) {
        $css .= '
      .airinblog-css-site-footer,
      .airinblog-css-mega-menu-container,
      .airinblog-css-mega-menu > ul > li,
      .airinblog-css-home-five-grid-box,
      .airinblog-css-home-narrow-grid-column:hover {
        background: ' . $menu_color . ';
      }
    ';
    }
    //?---------- Text color main menu and footer
    if ( $menutext_color != '#fffffb' ) {
        $css .= '
      .airinblog-css-site-footer,
      .airinblog-css-site-footer a,
      .airinblog-css-site-footer li,
      .airinblog-css-mega-menu a,
      .airinblog-css-mega-menu > a:hover,
      .airinblog-css-mega-menu > ul > li > a:hover,
      .airinblog-css-site-footer h2,
      .airinblog-css-mega-menu-dropdown-icon:before,
      .airinblog-css-home-narrow-grid-column:hover .airinblog-css-home-narrow-grid-column-h h2 {
        color: ' . $menutext_color . ';
      }
    ';
    }
    //?---------- Main menu color (on hover)
    if ( !empty( $menu_hover_color ) ) {
        $css .= '
      .airinblog-css-mega-menu > ul > li:hover {
        background: ' . $menu_hover_color . ';
      }
    ';
    }
    //?---------- Main menu background color (submenu)
    if ( !empty( $submenu_back_color ) ) {
        $css .= '
      .airinblog-css-mega-menu > ul > li > ul {
        background: ' . $submenu_back_color . ';
      }
    ';
    }
    //?---------- Main menu link color (submenu)
    if ( !empty( $submenu_link_color ) ) {
        $css .= '
      .airinblog-css-mega-menu > ul > li > ul > li a,
      .airinblog-css-mega-menu > ul > li > ul.normal-sub > li a,
      .airinblog-css-mega-menu > ul > li > ul > li a:hover,
      .airinblog-css-mega-menu > ul > li > ul.normal-sub > li a:hover {
        color: ' . $submenu_link_color . ';
      }
    ';
    }
    //?---------- Site header background color
    if ( !empty( $header_color ) ) {
        $css .= '
      .airinblog-css-site-header {
        background: ' . $header_color . ';
      }
    ';
    }
    //?---------- Top menu text color
    if ( !empty( $top_menu_text_color ) ) {
        $css .= "\n      .airinblog-css-top-jsmenu-pc > div > ul > li > a,\n\t    .airinblog-css-top-menu-pc > div > ul > li > a,\n      .airinblog-css-nav-top-mobile-burger:after {\n        color: {$top_menu_text_color};\n      }\n      .airinblog-css-nav-top-mobile-burger:after {\n        border: 1px solid {$top_menu_text_color};\n      }\n      button.airinblog-css-toggle-btn .airinblog-css-toggle-bar {\n        background: {$top_menu_text_color};\n      }\n    ";
    }
    //?---------- Top drop-down menu links color
    if ( !empty( $top_menu_sub_link ) ) {
        $css .= "\n      .airinblog-css-top-jsmenu-pc .sub-menu li a,\n      .airinblog-css-top-jsmenu-mobile a,\n      .airinblog-css-top-jsmenu-mobile button,\n      .airinblog-css-top-menu-pc ul ul a,\n      .airinblog-css-nav-top-mobile a {\n        color: {$top_menu_sub_link};\n      }\n      .airinblog-css-top-jsmenu-box .airinblog-css-top-jsmenu-mobile .airinblog-css-close-top-jsmenu-nav-toggle:before,\n      .airinblog-css-top-jsmenu-box .airinblog-css-top-jsmenu-mobile .airinblog-css-close-top-jsmenu-nav-toggle:after {\n        background: {$top_menu_sub_link};\n      }\n    ";
    }
    //?---------- Top drop-down menu links color (on hover)
    if ( !empty( $top_menu_text_hover ) ) {
        $css .= '
      .airinblog-css-top-jsmenu-box li > a:hover,
      .airinblog-css-top-jsmenu-box li > a:focus,
      .airinblog-css-top-jsmenu-pc .sub-menu li a:hover,
      .airinblog-css-top-jsmenu-pc .sub-menu li a:focus,
      .airinblog-css-top-jsmenu-mobile li.menu-item-has-children a:hover + button,
      .airinblog-css-top-jsmenu-mobile li.menu-item-has-children a:focus + button,
      .airinblog-css-top-menu-pc li:hover > a,
      .airinblog-css-nav-top-mobile a:hover {
        color: ' . $top_menu_text_hover . ';
      }
    ';
    }
    //?---------- Top drop-down menu background color
    if ( !empty( $top_menu_back_color ) ) {
        $css .= "\n      .airinblog-css-top-jsmenu-mobile,\n      .airinblog-css-top-jsmenu-pc ul .sub-menu,\n      .airinblog-css-nav-top-mobile,\n      .airinblog-css-top-menu-pc ul ul {\n        background: {$top_menu_back_color};\n      }\n    ";
    }
    //?---------- Top drop-down menu links background color (on hover)
    if ( !empty( $top_menu_back_hover ) ) {
        $css .= '
      .airinblog-css-top-jsmenu-box li > a:hover,
      .airinblog-css-top-jsmenu-box li > a:focus,
      .airinblog-css-top-jsmenu-pc .sub-menu li a:hover,
      .airinblog-css-top-jsmenu-pc .sub-menu li a:focus,
      .airinblog-css-top-menu-pc li:hover > a,
      .airinblog-css-nav-top-mobile a:hover {
        background: ' . $top_menu_back_hover . ';
      }
    ';
    }
    //?---------- Site body background color
    if ( $content_color != '#fffffa' ) {
        $css .= '
      #content,
      #respond,
      #comments,
      #comments .comment-meta,
      .widget_search input[type="text"],
      input[type="text"],
      input[type="email"],
      input[type="url"],
      input[type="password"],
      input[type="search"],
      input[type="number"],
      input[type="tel"],
      input[type="range"],
      input[type="date"],
      input[type="month"],
      input[type="week"],
      input[type="time"],
      input[type="datetime"],
      input[type="datetime-local"],
      input[type="color"],
      textarea,
      .airinblog-css-nav-top-mobile-title,
      .airinblog-css-owl-width-slider-container,
      select,
      .widget_block .wp-block-code,
      .widget_block .wp-block-verse,
      pre,
      .chosen-container div.chosen-drop,
      .chosen-container-single a.chosen-single,
      .airinblog-css-top-search-modal-inner {
        background: ' . $content_color . ';
      }
    ';
    }
    //?---------- General text color
    if ( $t_color != '#404040' ) {
        $css .= '
      body,
      input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus,
      input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus,
      input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus,
      input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus,
      input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus,
      input[type="text"], input[type="email"], input[type="url"], input[type="password"],
      input[type="search"], input[type="number"], input[type="tel"], input[type="range"],
      input[type="date"], input[type="month"], input[type="week"], input[type="time"],
      input[type="datetime"], input[type="datetime-local"], input[type="color"], 
      textarea, textarea:focus,
      .site figcaption.wp-element-caption,
      .site .wp-block-calendar table caption,
      .site .wp-block-calendar table tbody,
      .site [class^="wp-block-"] figcaption,
      .site .blocks-gallery-caption,
      .chosen-container-single .chosen-single span,
      .airinblog-css-search-top-bar .airinblog-css-top-search-button:hover {
        color: ' . $t_color . ';
      }
    ';
    }
    //?---------- Heading text general color
    if ( $h_color != '#404046' ) {
        $css .= '
      h1, h2, h3, h4, h5, h6,
      .airinblog-css-site-title,
      .airinblog-css-site-title a,
      .airinblog-css-nav-top-mobile-h {
        color: ' . $h_color . ';
      }
    ';
    }
    //? ========== ========== ========== Typography
    //? ---------- General text font
    $font_1 = esc_attr( get_theme_mod( 'airinblog_cus_typography_font', 'off' ) );
    $famaly = '';
    if ( in_array( $font_1, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $font_1, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $font_1 !== 'off' ) {
        $css .= '
      body {
        font-family: "' . $font_1 . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- Overall text size
    $text_size_1 = esc_attr( get_theme_mod( 'airinblog_cus_typography_text_size', 16 ) );
    if ( $text_size_1 != 16 ) {
        $css .= '
      body {
        font-size: ' . $text_size_1 . 'px;
      }
    ';
    }
    //? ---------- Total line height of text
    $text_hight_1 = esc_attr( get_theme_mod( 'airinblog_cus_typography_text_hight', '1.5' ) );
    if ( $text_hight_1 !== '1.5' ) {
        $css .= "\n      body {\n        line-height: {$text_hight_1};\n      }\n    ";
    }
    //? ---------- General heading font
    $font_h = esc_attr( get_theme_mod( 'airinblog_cus_typography_h_font', 'off' ) );
    $famaly = '';
    if ( in_array( $font_h, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $font_h, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $font_h !== 'off' ) {
        $css .= '
      h1, h2, h3, h4, h5, h6 {
        font-family: "' . $font_h . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- The total size of h1 headings
    $size_h1 = esc_attr( get_theme_mod( 'airinblog_cus_typography_h1_size', 32 ) );
    if ( $size_h1 != 32 ) {
        $css .= '
      h1 {
        font-size: ' . $size_h1 . 'px;
      }
    ';
    }
    //? ---------- The total size of h2 headings
    $size_h2 = esc_attr( get_theme_mod( 'airinblog_cus_typography_h2_size', 26 ) );
    if ( $size_h2 != 26 ) {
        $css .= '
      h2 {
        font-size: ' . $size_h2 . 'px;
      }
    ';
    }
    //? ---------- The total size of h3 headings
    $size_h3 = esc_attr( get_theme_mod( 'airinblog_cus_typography_h3_size', 24 ) );
    if ( $size_h3 != 24 ) {
        $css .= '
      h3 {
        font-size: ' . $size_h3 . 'px;
      }
    ';
    }
    //? ---------- The total size of h4 headings
    $size_h4 = esc_attr( get_theme_mod( 'airinblog_cus_typography_h4_size', 22 ) );
    if ( $size_h4 != 22 ) {
        $css .= '
      h4 {
        font-size: ' . $size_h4 . 'px;
      }
    ';
    }
    //? ---------- The total size of h5 headings
    $size_h5 = esc_attr( get_theme_mod( 'airinblog_cus_typography_h5_size', 20 ) );
    if ( $size_h5 != 20 ) {
        $css .= '
      h5 {
        font-size: ' . $size_h5 . 'px;
      }
    ';
    }
    //? ---------- The total size of h6 headings
    $size_h6 = esc_attr( get_theme_mod( 'airinblog_cus_typography_h6_size', 18 ) );
    if ( $size_h6 != 18 ) {
        $css .= '
      h6 {
        font-size: ' . $size_h6 . 'px;
      }
    ';
    }
    //? ---------- Overall header row height
    $h_hight = esc_attr( get_theme_mod( 'airinblog_cus_typography_h_hight', '1.5' ) );
    if ( $h_hight !== '1.5' ) {
        $css .= "\n      h1, h2, h3, h4, h5, h6 {\n        line-height: {$h_hight};\n      }\n    ";
    }
    //? ========== ========== ========== Margin site
    //? ---------- Add margin at the top and bottom of the site
    $margin_site_top = esc_attr( get_theme_mod( 'airinblog_cus_lay_margin_top', 0 ) );
    if ( $margin_site_top != 0 ) {
        $css .= '
      @media screen and (min-width: 1225px) {
        #page {
          margin-top: ' . $margin_site_top . 'px;
        }
      }
    ';
    }
    $margin_site_bottom = esc_attr( get_theme_mod( 'airinblog_cus_lay_margin_bottom', 0 ) );
    if ( $margin_site_bottom != 0 ) {
        $css .= '
      @media screen and (min-width: 1225px) {
        #page {
          margin-bottom: ' . $margin_site_bottom . 'px;
        }
      }
    ';
    }
    //? ========== ========== ========== Title and logo
    // Visually hide the title and description
    if ( !display_header_text() ) {
        $css .= "\n    \t.airinblog-css-site-title,\n    \t.airinblog-css-site-description {\n    \t\tposition: absolute;\n    \t\tclip: rect(1px, 1px, 1px, 1px);\n    \t}\n    ";
    }
    //? ---------- Orientation of the logo and site name
    $logo_var = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_logo_var', 'fix' ) );
    $logo_true = '';
    if ( get_theme_mod( 'custom_logo' ) && $logo_var == 'fix' || get_theme_mod( 'airinblog_cus_supple_logo' ) && $logo_var == 'free' ) {
        $logo_true = 1;
    }
    if ( $logo_true == 1 ) {
        $logo_layout = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_logo_layout', 'horizont' ) );
        if ( $logo_layout == 'vertical' ) {
            $css .= "\n        .airinblog-css-site-brand-bottom-1 {\n          flex-direction: column;\n        }\n        @media (max-width: 600px) {\n          .airinblog-css-site-brand-bottom-1 {\n            align-items: center;\n          }\n        }\n      ";
        } else {
            $css .= "\n        .airinblog-css-site-brand-bottom-1 {\n          align-items: center;\n        }\n        .airinblog-css-site-title-box {\n          margin-left: 25px;\n        }\n      ";
        }
    } else {
        if ( !display_header_text() ) {
            $css .= "\n      .airinblog-css-site-branding {\n        display: flex;\n        justify-content: center;\n        flex-direction: column;\n      }\n      .airinblog-css-site-brand-bottom-1 {\n        width: 0%;\n      }\n      .airinblog-css-soc-top-box {\n        justify-content: center;\n        margin: 0;\n        float: none;\n      }\n      .airinblog-css-site-brand-bottom-2 {\n        display: flex;\n        justify-content: center;\n        width: 100%;\n      }\n      .airinblog-css-soc-top-box-child {\n        padding: 8px;\n      }\n    ";
        }
    }
    //? ---------- Header area width with logo
    if ( $logo_true == 1 || display_header_text() ) {
        $header_width = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_width', 50 ) );
        if ( $header_width != 50 ) {
            switch ( $header_width ) {
                case 20:
                    $width_1 = 20;
                    $width_2 = 80;
                    break;
                case 30:
                    $width_1 = 30;
                    $width_2 = 70;
                    break;
                case 40:
                    $width_1 = 40;
                    $width_2 = 60;
                    break;
                case 60:
                    $width_1 = 60;
                    $width_2 = 40;
                    break;
                case 70:
                    $width_1 = 70;
                    $width_2 = 30;
                    break;
                case 80:
                    $width_1 = 80;
                    $width_2 = 20;
                    break;
                default:
                    $width_1 = 100;
                    $width_2 = 100;
                    $css .= "\n            .airinblog-css-site-brand-bottom {\n              flex-direction: column;\n              text-align: center;\n            }\n            .airinblog-css-site-brand-bottom-1,\n            .airinblog-css-site-brand-bottom-2 {\n              justify-content: center;\n            }\n            .airinblog-css-soc-top-box-child {\n              padding: 8px;\n            }\n            .airinblog-css-soc-top-box {\n              justify-content: center;\n              margin: 0;\n              float: none;\n            }\n          ";
                    break;
            }
            $css .= "\n        .airinblog-css-site-brand-bottom-1 {\n          width: " . $width_1 . "%;\n        }\n        .airinblog-css-site-brand-bottom-2 {\n          width: " . $width_2 . "%;\n        }\n      ";
        }
    }
    //? ---------- Title text color
    $site_h_color = esc_attr( get_theme_mod( 'header_textcolor' ) );
    if ( !empty( $site_h_color ) && $site_h_color !== 'blank' ) {
        $css .= '
      .airinblog-css-site-title,
      .airinblog-css-site-title a,
      .airinblog-css-site-description {
        color: #' . $site_h_color . ';
      }
    ';
    }
    //? ---------- Remove the dividing line
    $site_h_line = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_line', 0 ) );
    if ( $site_h_line == 1 ) {
        $css .= '
      .airinblog-css-site-description {
        border-top: 0;
      }
    ';
    }
    //? ---------- Site title font
    $site_h_font = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_h_font', 'off' ) );
    $famaly = '';
    if ( in_array( $site_h_font, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $site_h_font, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $site_h_font !== 'off' ) {
        $css .= '
      .airinblog-css-site-title {
        font-family: "' . $site_h_font . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- Site title size
    $site_h_size = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_h_size', 32 ) );
    if ( $site_h_size != 32 ) {
        $css .= '
      .airinblog-css-site-title {
        font-size: ' . $site_h_size . 'px;
      }
    ';
    }
    //? ---------- Site title bar height
    $site_h_hight = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_h_hight', '1.5' ) );
    if ( $site_h_hight !== '1.5' ) {
        $css .= "\n      .airinblog-css-site-title {\n        line-height: {$site_h_hight};\n      }\n    ";
    }
    //? ---------- Site description font
    $site_des_font = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_des_font', 'off' ) );
    $famaly = '';
    if ( in_array( $site_des_font, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $site_des_font, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $site_des_font !== 'off' ) {
        $css .= '
      .airinblog-css-site-description {
        font-family: "' . $site_des_font . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- Site description size
    $site_des_size = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_des_size', 16 ) );
    if ( $site_des_size != 16 ) {
        $css .= '
      .airinblog-css-site-description {
        font-size: ' . $site_des_size . 'px;
      }
    ';
    }
    //? ---------- Site description line height
    $site_des_hight = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_des_hight', '1' ) );
    if ( $site_des_hight !== '1' ) {
        $css .= "\n      .airinblog-css-site-description {\n        line-height: {$site_des_hight};\n      }\n    ";
    }
    //? ========== ========== ========== Category style
    //? ---------- ---------- Checking the completeness of the card
    $card_comple = 1;
    if ( $des_cat_none == 1 && $more_cat == 0 && $meta_cat_activ != 1 ) {
        $card_comple = 0;
    }
    //? ---------- ---------- Number (size) of columns in categories
    switch ( $cat_win ) {
        // Classic blog
        case 'w1':
            $css .= "\n        .airinblog-css-entry-title {\n          font-size: 24px;\n        }\n        .airinblog-css-entry-content {\n          font-size: 18px;\n        }\n        @media (max-width: 400px) {\n          .airinblog-css-entry-title {\n            font-size: 18px;\n          }\n          .airinblog-css-entry-content {\n            font-size: 14px;\n          }\n        }\n      ";
            if ( $airinblog_lay !== 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home !== 'no_sidebar_full' && is_front_page() ) {
                $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 850px));
            grid-column-gap: 24px;
          }
        ';
            } else {
                if ( $airinblog_lay == 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_full' && is_front_page() ) {
                    $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 1175px));
            grid-column-gap: 25px;
          }
        ';
                }
            }
            break;
        // Two columns
        case 'w2':
            $css .= '
        .airinblog-css-entry-title {
          font-size: 20px;
        }
        .airinblog-css-entry-content {
          font-size: 16px;
        }
      ';
            if ( $airinblog_lay !== 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home !== 'no_sidebar_full' && is_front_page() ) {
                $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 415px));
            grid-column-gap: 20.45px;
          }
          @media (max-width: 1245px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 300px));
            }
            .airinblog-css-entry-title {
              font-size: 18px;
            }
          }
          @media (max-width: 690px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 415px));
            }
            .airinblog-css-entry-title {
              font-size: 20px;
            }
          }
        ';
            } else {
                if ( $airinblog_lay == 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_full' && is_front_page() ) {
                    $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 578px));
            grid-column-gap: 19px;
          }
          @media (max-width: 1245px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 400px));
            }
          }
          @media (max-width: 888px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 578px));
            }
          }
        ';
                }
            }
            $css .= '
      @media (max-width: 380px) {
        .airinblog-css-entry-title {
          font-size: 18px;
        }
        .airinblog-css-entry-content {
          font-size: 14px;
        }
      }
    ';
            break;
        // Three columns
        case 'w3':
            if ( $airinblog_lay !== 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home !== 'no_sidebar_full' && is_front_page() ) {
                $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 270px));
            grid-column-gap: 20.22px;
          }
          @media (max-width: 630px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 200px));
            }
            .airinblog-css-entry-title {
              font-size: 16px;
            }
          }
          @media (max-width: 490px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 270px));
            }
            .airinblog-css-entry-title {
              font-size: 18px;
            }
          }
        ';
            } else {
                if ( $airinblog_lay == 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_full' && is_front_page() ) {
                    $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 378px));
            grid-column-gap: 20.5px;
          }
          @media (max-width: 845px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 270px));
            }
          }
          @media (max-width: 630px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 378px));
            }
          }
        ';
                }
            }
            break;
        // Four columns
        case 'w4':
            $css .= '
        .airinblog-css-entry-title {
          font-size: 16px;
        }
        .airinblog-css-entry-content {
          font-size: 14px;
        }
      ';
            if ( $airinblog_lay !== 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home !== 'no_sidebar_full' && is_front_page() ) {
                $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 195px));
            grid-column-gap: 23.48px;
          }
          @media (max-width: 482px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 140px));
            }
            .airinblog-css-entry-title,
            .airinblog-css-entry-more {
              font-size: 14px;
            }
          }
          @media (max-width: 372px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 195px));
            }
            .airinblog-css-entry-title {
              font-size: 16px;
            }
          }
        ';
            } else {
                if ( $airinblog_lay == 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_full' && is_front_page() ) {
                    $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 270px));
            grid-column-gap: 31.66px;
          }
          @media (max-width: 640px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 200px));
            }
          }
          @media (max-width: 500px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 270px));
            }
          }
        ';
                }
            }
            break;
        // Five columns
        case 'w5':
            $css .= '
        .airinblog-css-entry-header {
          padding-left: 10px;
          padding-right: 10px;
        }
        .airinblog-css-entry-title,
        .airinblog-css-entry-more {
          font-size: 14px;
        }
        .airinblog-css-entry-content {
          font-size: 12px;
        }
        .airinblog-css-entry-meta, .airinblog-css-entry-content, .airinblog-css-entry-more {
          padding: 0 10px 10px;
        }
      ';
            if ( $airinblog_lay !== 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home !== 'no_sidebar_full' && is_front_page() ) {
                $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 155px));
            grid-column-gap: 18.85px;
          }
          @media (max-width: 395px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 110px));
            }
            .airinblog-css-entry-title,
            .airinblog-css-entry-meta,
            .airinblog-css-entry-more {
              font-size: 12px;
            }
          }
          @media (max-width: 305px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 155px));
            }
            .airinblog-css-entry-title {
              font-size: 14px;
            }
          }
        ';
            } else {
                if ( $airinblog_lay == 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_full' && is_front_page() ) {
                    $css .= '
          .airinblog-css-cat-box {
            grid-template-columns: repeat(auto-fill, minmax(0, 215px));
            grid-column-gap: 25px;
          }
          @media (max-width: 525px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 150px));
            }
            .airinblog-css-entry-more {
              font-size: 12px;
            }
          }
          @media (max-width: 395px) {
            .airinblog-css-cat-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 215px));
            }
          }
        ';
                }
            }
            break;
    }
    //? ---------- ---------- Post card title size
    $cat_title_size = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_h_size' ) );
    if ( !empty( $cat_title_size ) ) {
        $css .= '
      .airinblog-css-entry-title {
        font-size: ' . $cat_title_size . 'px;
      }
    ';
    }
    //? ---------- ---------- Post card description size
    $cat_text_size = esc_attr( get_theme_mod( 'airinblog_cus_cat_style_text_size' ) );
    if ( !empty( $cat_text_size ) ) {
        $css .= '
      .airinblog-css-entry-content {
        font-size: ' . $cat_text_size . 'px;
      }
    ';
    }
    //? ---------- ---------- Background color - Posts blocks in categories
    if ( !empty( $back_cat_color ) ) {
        $css .= "\n      article.airinblog-css-cat-grid {\n        background: {$back_cat_color};\n      }\n    ";
    }
    //? ---------- ---------- Design - Posts blocks in categories
    switch ( esc_attr( get_theme_mod( 'airinblog_cus_cat_style_design', 'v1' ) ) ) {
        // Default
        case 'v1':
            $css .= '
        article.airinblog-css-cat-grid {
          box-shadow: 0 0 0.1em rgba(0,0,0,0.15);
        }
      ';
            break;
        // Underlined
        case 'v2':
            $css .= "\n        article.airinblog-css-cat-grid {\n          border-bottom: 2px solid {$primary_color};\n        }\n      ";
            break;
        // In frame
        case 'v3':
            $css .= "\n        article.airinblog-css-cat-grid {\n          outline: 1px solid {$primary_color};\n        }\n      ";
            break;
        // Header background
        case 'v4':
            $css .= "\n        article.airinblog-css-cat-grid {\n          outline: 1px solid {$menu_color};\n        }\n        .airinblog-css-entry-header {\n          background: {$menu_color};\n          margin-bottom: 15px;\n          padding-top: 10px;\n          padding-bottom: 10px;\n        }\n        h2.airinblog-css-entry-title {\n          color: {$menutext_color};\n        }\n      ";
            if ( $card_comple == 0 ) {
                $css .= "\n          .airinblog-css-entry-header {\n            margin: 0;\n          }\n        ";
            }
            break;
        // Deepening
        case 'v5':
            $css .= '
        article.airinblog-css-cat-grid {
          box-shadow: inset 0 0.1em 0.3em rgba(0,0,0,0.2);
        }
      ';
            break;
        // Light shadow
        case 'v6':
            $css .= '
        article.airinblog-css-cat-grid {
          box-shadow: 0 0.1em 0.7em rgba(0,0,0,0.1);
        }
      ';
            break;
        // Soaring
        case 'v7':
            $css .= '
        article.airinblog-css-cat-grid {
          box-shadow: 0 10px 30px rgb(0 0 0 / 25%);
        }
      ';
            break;
    }
    // Changes for the "Read more" button
    if ( $more_cat == 1 ) {
        // Full width "Read more" button
        if ( get_theme_mod( 'airinblog_cus_cat_style_more_width', 1 ) == 1 ) {
            $css .= "\n        .airinblog-css-more-link {\n          width: 100%;\n        }\n      ";
        }
        // Centered "Read more" button
        if ( get_theme_mod( 'airinblog_cus_cat_style_more_center', 1 ) == 1 ) {
            $css .= "\n        .airinblog-css-entry-more {\n          text-align: center;\n        }\n      ";
        }
    }
    //? ---------- ---------- Remove sections in categories
    if ( $h_cat_none == 1 ) {
        // If the header is removed
        $css .= '
      .airinblog-css-cat-thumbnail {
        margin-bottom: 10px;
      }
    ';
        // If all sections are removed
        if ( $card_comple == 0 ) {
            $css .= '
        .airinblog-css-cat-thumbnail {
          margin: 0;
        }
      ';
        }
        // If only the title display
    } else {
        if ( $card_comple == 0 ) {
            $css .= '
      .airinblog-css-entry-header {
        padding-top: 10px;
        padding-bottom: 10px;
      }
    ';
        }
    }
    //? ---------- ---------- Animation for posts blocks in categories
    switch ( $anime_cat ) {
        // Enlargement picture
        case 'a1':
            $css .= "\n        .airinblog-css-cat-thumbnail {\n          overflow: hidden;\n        }\n        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thumbnail img {\n          transform: scale(1.07);\n        }\n      ";
            break;
        // Reducing picture
        case 'a2':
            $css .= "\n        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thumbnail img {\n          transform: scale(0.95);\n        }\n      ";
            break;
        // Darkened image
        case 'a3':
            $css .= '
        .airinblog-css-cat-thum-anime {
          position: relative;
          }
        .airinblog-css-cat-thum-anime:before {
          content: "";
          position: absolute;
          top: 100%;
          right: 100%;
          bottom: 100%;
          left: 100%;
          background: rgba(0,0,0, 0.2);
        }
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thum-anime:before {
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          opacity: .5;
        }
      ';
            break;
        // Curtain on picture
        case 'a4':
            $css .= '
        .airinblog-css-cat-thum-anime {
          position: relative;
          }
        .airinblog-css-cat-thum-anime:before {
          content: "";
          position: absolute;
          top: 100%;
          right: 0;
          bottom: 0;
          left: 0;
          background: rgba(0,0,0, 0.5);
          }
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thum-anime:before {
          top: 0;
          opacity: .25;
          }
      ';
            break;
        // Picture frame
        case 'a5':
            $css .= '
        .airinblog-css-cat-thum-anime {
          position: relative;
          }
        .airinblog-css-cat-thum-anime:before {
          content: "";
          position: absolute;
          top: 100%;
          right: 100%;
          bottom: 100%;
          left: 100%;
        }
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thum-anime:before {
          top: 10%;
          right: 10%;
          bottom: 10%;
          left: 10%;
          opacity: .7;
          border: 1px solid ' . $primary_color . ';
        }
      ';
            break;
        // Frame around
        case 'a6':
            $css .= '
        .airinblog-css-cat-thum-anime {
          position: relative;
          }
        .airinblog-css-cat-thum-anime:before {
          content: "";
          position: absolute;
          top: 100%;
          right: 100%;
          bottom: 100%;
          left: 100%;
        }
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thum-anime:before {
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          opacity: .5;
          border: 5px solid ' . $primary_color . ';
        }
      ';
            break;
        // Backlight picture
        case 'a7':
            $css .= '
        .airinblog-css-cat-thumbnail {
          transition: 0.3s;
        }
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thumbnail {
          opacity: 0.85;
        }
      ';
            break;
        // Picture contrast
        case 'a8':
            $css .= '
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thumbnail {
          -webkit-filter: contrast(150%);
        }
      ';
            break;
        // Tint picture
        case 'a9':
            $css .= '
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thumbnail {
          -webkit-filter: hue-rotate(100deg);
        }
      ';
            break;
        // Color inversion picture
        case 'a10':
            $css .= '
        article.airinblog-css-cat-grid:hover .airinblog-css-cat-thumbnail {
          -webkit-filter: invert(100%);
        }
      ';
            break;
        // Remove color in neighboring blocks
        case 'a11':
            $css .= "\n        .airinblog-css-cat-box:hover article.airinblog-css-cat-grid:not(:hover) {\n          filter: grayscale(100%);\n        }\n        .airinblog-css-cat-box:hover article.airinblog-css-cat-grid:not(:hover):after {\n          width: 100%;\n          height: 100%;\n          background: rgba(0,0,0, 0.3);\n        }\n        article.airinblog-css-cat-grid {\n          position: relative;\n        }\n      ";
            break;
        // Toning neighboring blocks
        case 'a12':
            $css .= '
        .airinblog-css-cat-box:hover article.airinblog-css-cat-grid:not(:hover) {
          filter: grayscale(100%);
        }
        .airinblog-css-cat-box:hover article.airinblog-css-cat-grid:not(:hover):after {
          width: 100%;
          height: 100%;
          background: rgba(0,0,0, 0.3);
          transition: 1s;
          opacity: 0.8;
        }
        article.airinblog-css-cat-grid {
          position: relative;
        }
        article.airinblog-css-cat-grid:not(:hover):after {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          transition: 1s;
        }
      ';
            break;
        // Block slope
        case 'a13':
            $css .= '
        article.airinblog-css-cat-grid {
          backface-visibility: hidden;
        }
        article.airinblog-css-cat-grid:hover {
          transform: rotateZ(1.5deg);
        }
      ';
            break;
    }
    //? ---------- ---------- Meta tags in categories
    if ( $meta_cat_activ == 1 ) {
        // Icon color
        $css .= "\n      .icon-autor-cat-meta::before, .icon-calendar-cat-meta::before, .icon-spinner-cat-meta::before,\n      .icon-bubble-cat-meta::before, .icon-clock-cat-meta::before, .icon-eye-cat-meta::before, .icon-cat-cat-meta::before, .icon-tag-cat-meta::before {\n        color: {$primary_color};\n      }\n    ";
        // Meta tag size
        $size_icon_big_margin = '';
        if ( esc_attr( get_theme_mod( 'airinblog_cus_cat_meta_size', 'small' ) ) == 'small' ) {
            $css .= "\n        .icon-autor-cat-meta::before, .icon-eye-cat-meta::before {\n          font-size: 1em;\n        }\n        .icon-calendar-cat-meta::before, .icon-spinner-cat-meta::before, .icon-bubble-cat-meta::before, .icon-clock-cat-meta::before {\n          font-size: 0.875em;\n        }\n        .icon-cat-cat-meta::before, .icon-tag-cat-meta::before {\n          font-size: 0.875em;\n          line-height: 1.3;\n        }\n        .airinblog-css-cat-meta-data-tax, .airinblog-css-cat-meta-data-tax a {\n          font-size: 14px;\n        }\n        .airinblog-css-cat-meta-label {\n          font-size: 0.625em;\n        }\n        .airinblog-css-cat-meta-data, .airinblog-css-cat-meta-data a {\n          font-size: 12px;\n        }\n        .airinblog-css-cat-meta-box {\n          padding: 3px 7px 3px 0;\n        }\n      ";
        } else {
            $css .= "\n        .icon-autor-cat-meta::before {\n          font-size: 2.25em;\n        }\n        .icon-calendar-cat-meta::before, .icon-spinner-cat-meta::before, .icon-bubble-cat-meta::before, .icon-clock-cat-meta::before {\n          font-size: 1.875em;\n        }\n        .icon-eye-cat-meta::before {\n          font-size: 2em;\n        }\n        .icon-cat-cat-meta::before, .icon-tag-cat-meta::before {\n          font-size: 1.125em;\n        }\n        .airinblog-css-cat-meta-box-taxonomy {\n          margin-top: 10px;\n        }\n      ";
            $size_icon_big_margin = "\n        .airinblog-css-cat-meta-box {\n          margin: 0 5px;\n        }\n      ";
        }
        // Align meta blocks to the center
        if ( esc_attr( get_theme_mod( 'airinblog_cus_cat_meta_center', 0 ) ) == 1 ) {
            $css .= '
        .airinblog-css-cat-meta-boxs {justify-content: center;}
      ';
        }
        // Remove meta tag icons
        $remov_data_margin = '';
        if ( esc_attr( get_theme_mod( 'airinblog_cus_cat_meta_icon_none', 0 ) ) == 1 ) {
            $css .= "\n        .icon-autor-cat-meta::before, .icon-calendar-cat-meta::before, .icon-spinner-cat-meta::before,\n        .icon-bubble-cat-meta::before, .icon-eye-cat-meta::before, .icon-cat-cat-meta::before, .icon-tag-cat-meta::before {\n          display: none;\n        }\n      ";
            $remov_data_margin = "\n        .airinblog-css-cat-meta-label-data {\n          margin-left: 0;\n        }\n      ";
        }
        // Removing indentation
        $remov_icon_margin = "\n      .icon-autor-cat-meta::before,\n      .icon-calendar-cat-meta::before,\n      .icon-spinner-cat-meta::before,\n      .icon-bubble-cat-meta::before,\n      .icon-eye-cat-meta::before {\n        margin-left: 0;\n      }\n    ";
        // Meta tag design
        switch ( esc_attr( get_theme_mod( 'airinblog_cus_cat_meta_design', 'v0' ) ) ) {
            // Simple
            case 'v0':
                $css .= $remov_icon_margin;
                $css .= $size_icon_big_margin;
                $css .= $remov_data_margin;
                break;
            // Frame
            case 'v1':
                $css .= "\n          .airinblog-css-cat-meta-box {\n            border: 1px solid {$primary_color};\n          }\n        ";
                break;
            // Underlined
            case 'v2':
                $css .= "\n          .airinblog-css-cat-meta-box {\n            border-bottom: 1px solid {$primary_color};\n          }\n        ";
                $css .= $remov_icon_margin;
                $css .= $remov_data_margin;
                break;
            // Soaring
            case 'v3':
                $css .= '
          .airinblog-css-cat-meta-box {
            box-shadow: 0 0.1em 0.5em rgba(0,0,0,0.1);
          }
        ';
                break;
            // Deepening
            case 'v4':
                $css .= '
          .airinblog-css-cat-meta-box {
            box-shadow: inset 0 0.1em 0.3em rgba(0,0,0,0.2);
          }
        ';
                break;
            // Background
            case 'v5':
                $css .= "\n          .airinblog-css-cat-meta-box {\n            background: {$menu_color};\n          }\n          .airinblog-css-cat-meta-box, .airinblog-css-cat-meta-box a, .icon-autor-cat-meta::before, .icon-calendar-cat-meta::before, .icon-spinner-cat-meta::before,\n          .icon-bubble-cat-meta::before, .icon-eye-cat-meta::before {\n            color: {$menutext_color};\n          }\n        ";
                break;
        }
        // Add tooltips to meta blocks in categories
        if ( esc_attr( get_theme_mod( 'airinblog_cus_cat_meta_prompt', 0 ) ) == 1 ) {
            $css .= '
        .airinblog-css-cat-meta-box {
          position: relative;
        }
        .airinblog-css-cat-meta-box::after {
          content: attr(data-info);
          display: inline;
          position: absolute;
          top: 100px; left: 10px;
          opacity: 0;
          width: 200px;
          font-size: 14px;
          padding: 0.375em 0.75em;
          background: rgba(0,0,0,0.7);
          color: #fff;
          pointer-events: none;
          transition: opacity 250ms, top 250ms;
        }
        .airinblog-css-cat-meta-box::before {
          content: "";
          display: block;
          position: absolute;
          top: 0; left: 17px;
          opacity: 0;
          width: 0; height: 0;
          border: solid transparent 5px;
          border-bottom-color: rgba(0,0,0,0.7);
          transition: opacity 250ms, top 250ms;
        }
        .airinblog-css-cat-meta-box:hover {
          z-index: 2;
        }
        .airinblog-css-cat-meta-box:hover::after {
          top: 35px; left: -50px;
          opacity: 1;
        }
        .airinblog-css-cat-meta-box:hover::before {
          top: 25px;
          opacity: 1;
        }
      ';
        }
    }
    //? ---------- ---------- Background color of sticky posts
    if ( !empty( $sticky_color ) ) {
        $css .= '
      article.sticky {background: ' . $sticky_color . ';}
    ';
    }
    //? ---------- ---------- Pagination in categories
    //? ---------- Numeric pagination
    if ( $pagi_cat == 'v1' ) {
        // Block design - Numeric pagination
        switch ( $pagi_design_cat ) {
            // Buttons
            case 'v1':
                $css .= "\n          .nav-links a {\n            background: {$primary_color};\n            color: {$color_lite};\n          }\n          .nav-links a:hover {\n            opacity: 0.9;\n            color: {$color_lite};\n          }\n          .nav-links span.current {\n            border: 1px solid {$primary_color};\n          }\n        ";
                break;
            // Frames
            case 'v2':
                $css .= "\n          .nav-links a {\n            border: 1px solid {$primary_color};\n            color: {$color_link};\n          }\n          .nav-links span.current {\n            background: {$primary_color};\n            color: {$color_lite};\n          }\n          .nav-links a:hover {\n            color: {$link_hover};\n          }\n        ";
                break;
        }
        // Location of the pagination block
        switch ( $pagi_layout_cat ) {
            // Right
            case 'v1':
                $css .= "\n          .nav-links {\n            justify-content: flex-end;\n          }\n        ";
                break;
            // Center
            case 'v2':
                $css .= "\n          .nav-links {\n            justify-content: center;\n          }\n        ";
                break;
            // Full width
            case 'v3':
                $css .= "\n          .nav-links {\n            justify-content: space-evenly;\n          }\n          .nav-links a.prev {\n            margin-right: 25px;\n            padding: 0.4em 3em;\n          }\n          .nav-links a.next {\n            margin-left: 25px;\n            padding: 0.4em 3em;\n          }\n        ";
                break;
        }
        // Pagination block size - Numeric pagination
        switch ( $pagi_size_cat ) {
            // Small
            case 'v1':
                $css .= "\n          .nav-links span, .nav-links a {\n            font-size: 14px;\n            padding: 0.2em 0.6em;\n          }\n        ";
                break;
            // Average
            case 'v2':
                $css .= "\n          .nav-links span, .nav-links a {\n            padding: 0.2em 0.6em;\n          }\n        ";
                break;
            // Big
            default:
                if ( $pagi_design_cat == 'v0' ) {
                    $css .= '
            .nav-links span, .nav-links a {
              font-size: 18px;
            }
          ';
                }
                break;
        }
    }
    //? ---------- Button (Show more)
    if ( $pagi_cat == 'v2' ) {
        // Button design (Show more)
        switch ( $pagi_design_cat ) {
            // Turn off styles
            case 'v0':
                $css .= "\n          .airinblog-css-loadmore-button {\n            background: inherit;\n            color: {$color_link};\n          }\n          .airinblog-css-loadmore-button:hover {\n            color: {$link_hover};\n          }\n        ";
                break;
            // Frames
            case 'v2':
                $css .= "\n          .airinblog-css-loadmore-button {\n            background: inherit;\n            border: 1px solid {$primary_color};\n            color: {$color_link};\n          }\n          .airinblog-css-loadmore-button:hover {\n            color: {$link_hover};\n          }\n        ";
                break;
        }
        // Button location (Show more)
        switch ( $pagi_layout_cat ) {
            // Right
            case 'v1':
                $css .= "\n          .airinblog-css-loadmore {\n            justify-content: flex-end;\n          }\n        ";
                break;
            // Center
            case 'v2':
                $css .= "\n          .airinblog-css-loadmore {\n            justify-content: center;\n          }\n        ";
                break;
            // Full width
            case 'v3':
                $css .= "\n          .airinblog-css-loadmore-button {\n            width: 100%;\n          }\n        ";
                break;
        }
        // Button size (Show more)
        switch ( $pagi_size_cat ) {
            // Small
            case 'v1':
                if ( $pagi_design_cat !== 'v0' ) {
                    $css .= "\n            .airinblog-css-loadmore-button {\n              padding: 0.2em 0.6em;\n            }\n          ";
                } else {
                    $css .= "\n            .airinblog-css-loadmore-button {\n              font-size: 14px;\n            }\n          ";
                }
                break;
            // Big
            case 'v3':
                $css .= "\n          .airinblog-css-loadmore-button {\n            font-size: 18px;\n            padding: 0.4em 1.5em;\n          }\n        ";
                break;
        }
    }
    //? ---------- Buttons (Back and forward)
    if ( $pagi_cat == 'v0' ) {
        // Button design (Back and forward)
        switch ( $pagi_design_cat ) {
            // Buttons
            case 'v1':
                $css .= "\n          .nav-links a {\n            background: {$primary_color};\n            color: {$color_lite};\n          }\n          .nav-links a:hover {\n            opacity: 0.9;\n            color: {$color_lite};\n          }\n        ";
                break;
            // Frames
            case 'v2':
                $css .= "\n          .nav-links a {\n            border: 1px solid {$primary_color};\n            color: {$color_link};\n          }\n          .nav-links a:hover {\n            color: {$link_hover};\n          }\n        ";
                break;
        }
        // Block location - Numeric pagination
        switch ( $pagi_layout_cat ) {
            // Right
            case 'v1':
                $css .= "\n          .nav-links {\n            justify-content: flex-end;\n            grid-column-gap: 10px;\n          }\n        ";
                break;
            // Center
            case 'v2':
                $css .= "\n          .nav-links {\n            justify-content: center;\n            grid-column-gap: 10px;\n          }\n        ";
                break;
            // Full width
            case 'v3':
                $css .= "\n          .nav-links {\n            justify-content: space-between;\n          }\n        ";
                break;
            // Left
            default:
                $css .= "\n          .nav-links {\n            grid-column-gap: 10px;\n          }\n        ";
                break;
        }
        // Block size - Numeric pagination
        switch ( $pagi_size_cat ) {
            // Small
            case 'v1':
                $css .= "\n          .nav-links a {\n            font-size: 14px;\n            padding: 0.2em 0.6em;\n          }\n        ";
                break;
            // Average
            case 'v2':
                $css .= "\n          .nav-links a {\n            padding: 0.2em 0.6em;\n          }\n        ";
                break;
            // Big
            default:
                if ( $pagi_design_cat == 'v0' ) {
                    $css .= '
            .nav-links a {
              font-size: 18px;
            }
          ';
                }
                break;
        }
    }
    //? ========== ========== ========== Setting up posts
    //? ---------- ---------- Meta tags in posts
    //? ---------- Meta tag design
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta', 1 ) ) == 1 ) {
        // Icon color
        $css .= "\n      .icon-autor-post-meta::before, .icon-calendar-post-meta::before, .icon-spinner-post-meta::before,\n      .icon-bubble-post-meta::before, .icon-clock-post-meta::before, .icon-eye-post-meta::before, .icon-cat-post-meta::before, .icon-tag-post-meta::before {\n        color: {$primary_color};\n      }\n    ";
        // Meta tag size
        if ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta_size', 'big' ) ) == 'small' ) {
            $css .= "\n        .icon-autor-post-meta::before, .icon-eye-post-meta::before {\n          font-size: 1em;\n        }\n        .icon-calendar-post-meta::before, .icon-spinner-post-meta::before, .icon-bubble-post-meta::before, .icon-clock-post-meta::before {\n          font-size: 0.875em;\n        }\n        .icon-cat-post-meta::before, .icon-tag-post-meta::before {\n          font-size: 0.875em;\n          line-height: 1.4;\n        }\n        .airinblog-css-post-meta-data-tax, .airinblog-css-post-meta-data-tax a, .airinblog-css-post-footer .airinblog-css-post-meta-data-tax a {\n          font-size: 14px;\n        }\n        .airinblog-css-post-meta-data, .airinblog-css-post-meta-data a {\n          font-size: 12px;\n        }\n        .airinblog-css-post-meta-label {\n          font-size: 0.625em;\n        }\n      ";
        } else {
            $css .= "\n        .icon-autor-post-meta::before {\n          font-size: 2.25em;\n        }\n        .icon-calendar-post-meta::before, .icon-spinner-post-meta::before, .icon-bubble-post-meta::before, .icon-clock-post-meta::before {\n          font-size: 1.875em;\n        }\n        .icon-eye-post-meta::before {\n          font-size: 2em;\n        }\n        .icon-cat-post-meta::before, .icon-tag-post-meta::before {\n          font-size: 1.125em;\n        }\n      ";
        }
        // Align meta blocks to the center
        if ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta_center', 1 ) ) == 1 ) {
            $css .= '
        .airinblog-css-post-meta-boxs {justify-content: center;}
      ';
        }
        // Meta tag design
        switch ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta_design', 'v0' ) ) ) {
            // Frames
            case 'v1':
                $css .= "\n          .airinblog-css-post-meta-box {\n            border: 1px solid {$primary_color};\n          }\n        ";
                break;
            // Underlined
            case 'v2':
                $css .= "\n          .airinblog-css-post-meta-box {\n            border-bottom: 1px solid {$primary_color};\n          }\n        ";
                break;
            // Soaring
            case 'v3':
                $css .= '
          .airinblog-css-post-meta-box {
            box-shadow: 0 0.1em 0.5em rgba(0,0,0,0.1);
          }
        ';
                break;
            // Deepening
            case 'v4':
                $css .= '
          .airinblog-css-post-meta-box {
            box-shadow: inset 0 0.1em 0.3em rgba(0,0,0,0.2);
          }
        ';
                break;
            // Background
            case 'v5':
                $css .= "\n          .airinblog-css-post-meta-box {\n            background: {$menu_color};\n          }\n          .airinblog-css-post-meta-box, .airinblog-css-post-meta-box a, .icon-autor-post-meta::before, .icon-calendar-post-meta::before, .icon-spinner-post-meta::before,\n          .icon-bubble-post-meta::before, .icon-clock-post-meta::before, .icon-eye-post-meta::before {\n            color: {$menutext_color};\n          }\n        ";
                break;
        }
        // Remove meta tag icons
        if ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta_icon', 0 ) ) == 1 ) {
            $css .= '
        .icon-autor-post-meta::before, .icon-calendar-post-meta::before, .icon-spinner-post-meta::before,
        .icon-bubble-post-meta::before, .icon-clock-post-meta::before, .icon-eye-post-meta::before, .icon-cat-post-meta::before, .icon-tag-post-meta::before {
          display: none;
        }
      ';
        }
        // Add tooltips to meta blocks in posts
        if ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta_prompt', 1 ) ) == 1 ) {
            $css .= '
        .airinblog-css-post-meta-box {
          position: relative;
        }
        .airinblog-css-post-meta-box::after {
          content: attr(data-info);
          display: inline;
          position: absolute;
          top: 100px;
          left: -25px;
          opacity: 0;
          width: 180px;
          font-size: 14px;
          padding: 0.375em 0.75em;
          background: rgba(0,0,0,0.7);
          color: #fff;
          pointer-events: none;
          transition: opacity 250ms, top 250ms;
        }
        .airinblog-css-post-meta-box::before {
          content: "";
          display: block;
          position: absolute;
          top: 100px;
          left: 15px;
          opacity: 0;
          width: 0; height: 0;
          border: solid transparent 5px;
          border-bottom-color: rgba(0,0,0,0.7);
          transition: opacity 250ms, top 250ms;
        }
        .airinblog-css-post-meta-box:hover {
          z-index: 2;
        }
        .airinblog-css-post-meta-box:hover::after {
          top: 37px;
          left: -25px;
          opacity: 1;
        }
        .airinblog-css-post-meta-box:hover::before {
          top: 27px;
          left: 15px;
          opacity: 1;
        }
        @media (max-width: 960px) {
          .airinblog-css-post-meta-box::after {
            width: 115px;
            font-size: 12px;
          }
        }
      ';
        }
    }
    //? ---------- ---------- Bulleted and numeric lists variation
    //? ---------- Bulleted lists variation
    if ( $mark_list != 'v0' ) {
        // Marker color
        if ( empty( $l_mark_color ) ) {
            $l_mark_color = $primary_color;
        }
        $css .= '
      .airinblog-css-mod-pp-content ul > li::marker {
        color: ' . $l_mark_color . ';
      }
    ';
        // Common bulleted list styles
        $css .= '
      .airinblog-css-mod-pp-content ul li {
        padding-left: 3px;
      }
    ';
        switch ( $mark_list ) {
            // Small square
            case 'v1':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: square;
          }
        ';
                break;
            // Small circle
            case 'v2':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: circle;
          }
        ';
                break;
            // Square frame
            case 'v3':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\25AB  ";
            padding-left: 5px;
            margin-left: -6px;
          }
        ';
                break;
            // Small dash
            case 'v4':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "−  ";
          }
          .airinblog-css-mod-pp-content ul > li::marker {
            font-weight: 600;
          }
        ';
                break;
            // Big dot
            case 'v5':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\2B24  ";
            padding-left: 5px;
          }
        ';
                break;
            // Big square
            case 'v6':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\25A0  ";
            padding-left: 5px;
          }
        ';
                break;
            // Big circle
            case 'v7':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\2B58  ";
            padding-left: 5px;
          }
        ';
                break;
            // Rounded square frame
            case 'v8':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\25A2  ";
            padding-left: 5px;
          }
        ';
                break;
            // Big dash
            case 'v9':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\25AC  ";
            padding-left: 7px;
            margin-left: 4px;
          }
        ';
                break;
            // Check mark
            case 'v10':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\2713  ";
            padding-left: 5px;
          }
        ';
                break;
            // Rhombus
            case 'v11':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\2B26  ";
          }
        ';
                break;
            // Triangle
            case 'v12':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: disclosure-closed;
          }
        ';
                break;
            // Star
            case 'v13':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\2736  ";
          }
        ';
                break;
            // Snowflake
            case 'v14':
                $css .= '
          .airinblog-css-mod-pp-content ul > li {
            list-style-type: "\\2731  ";
          }
        ';
                break;
        }
    }
    //? ---------- Numeric lists variation
    if ( $num_list != 'v0' ) {
        // Marker background color
        if ( empty( $l_num_color ) ) {
            $l_num_color = $primary_color;
        }
        // Bullet text color
        if ( empty( $l_num_text_color ) ) {
            $l_num_text_color = $color_lite;
        }
        // General numbered list styles
        $css .= '
      .airinblog-css-mod-pp-content ol {
        padding-left: 25px;
      }
      .airinblog-css-mod-pp-content ol > li > ul {
        padding-left: 62px;
      }
      .airinblog-css-mod-pp-content ol > li > ol {
        padding-left: 45px;
      }
    ';
        // General styles and scripts for numbereds lists
        if ( $num_list == 'v1' || $num_list == 'v2' || $num_list == 'v3' || $num_list == 'v4' ) {
            wp_enqueue_script(
                'airinblog-script-ol-design',
                get_template_directory_uri() . '/js/ol-design.js',
                array('jquery'),
                AIRINBLOG_VERSION,
                true
            );
            $css .= "\n        .airinblog-css-mod-pp-content ol > li {\n          list-style: none;\n        }\n        .airinblog-css-mod-pp-content ol {\n          counter-reset: Count-N;\n        }\n        .airinblog-css-mod-pp-content ol > li:before {\n          counter-increment: Count-N;\n          content: counter(Count-N);\n          height: auto;\n          width: auto;\n          margin-right: 10px;\n        }\n      ";
        } else {
            $css .= '
        .airinblog-css-mod-pp-content ol > li:before {
          content: "";
          margin-right: 5px;
        }
        .airinblog-css-mod-pp-content ol > li::marker {
          color: ' . $l_num_color . ';
        }
      ';
        }
        // Numeric lists variation
        switch ( $num_list ) {
            // Colored square
            case 'v1':
                $css .= '
          .airinblog-css-mod-pp-content ol > li:before {
            color: ' . $l_num_text_color . ';
            background: ' . $l_num_color . ';
            padding: 2px 8px;
            border-radius: 2px;
          }
        ';
                break;
            // Square frame
            case 'v2':
                $css .= '
          .airinblog-css-mod-pp-content ol > li:before {
            color: ' . $l_num_color . ';
            border: 1px solid ' . $l_num_color . ';
            padding: 3px 8px 2px;
            border-radius: 2px;
          }
        ';
                break;
            // Colored circle
            case 'v3':
                $css .= '
          .airinblog-css-mod-pp-content ol > li:before {
            color: ' . $l_num_text_color . ';
            background:  ' . $l_num_color . ';
            padding: 3px 8px 3px 8px;
            border-radius: 50px;
          }
        ';
                break;
            // Round frame
            case 'v4':
                $css .= '
          .airinblog-css-mod-pp-content ol > li:before {
            color: ' . $l_num_color . ';
            border: 1px solid ' . $l_num_color . ';
            padding: 3px 8px 2px;
            border-radius: 50px;
          }
        ';
                break;
            // Colored numbers
            case 'v5':
                $css .= '
          .airinblog-css-mod-pp-content ol > li {
            list-style: decimal inside;
          }
      ';
                break;
            // Colored numbers (bold)
            case 'v6':
                $css .= '
          .airinblog-css-mod-pp-content ol > li {
            list-style: decimal inside;
          }
          .airinblog-css-mod-pp-content ol > li::marker {
            color: ' . $l_num_color . ';
            font-weight: 600;
          }
        ';
                break;
            // Latin numerals
            case 'v7':
                $css .= '
          .airinblog-css-mod-pp-content ol > li {
            list-style: upper-roman inside;
          }
        ';
                break;
            // Colored letters (EN)
            case 'v8':
                $css .= '
          .airinblog-css-mod-pp-content ol > li {
            list-style: upper-latin inside;
          }
        ';
                break;
        }
    }
    //? ---------- ---------- Quote blocks
    if ( $quote_block !== 'v0' ) {
        //? ---------- Editing a block editor - remove the border on the left
        $css .= '
      .airinblog-css-mod-pp-content .wp-block-quote {
        border-left: none;
      }
    ';
        //? ---------- Quote block background color
        $q_back_color = $content_color;
        if ( !empty( $quote_back_color ) ) {
            $q_back_color = $quote_back_color;
            $css .= '
      .airinblog-css-mod-pp-content > blockquote {
        background: ' . $q_back_color . ';
      }';
        }
        //? ---------- Quote block text color
        if ( !empty( $quote_text_color ) ) {
            $css .= '
      .airinblog-css-mod-pp-content > blockquote p,
      .airinblog-css-mod-pp-content > blockquote cite {
        color: ' . $quote_text_color . ';
      }';
        }
        //? ---------- Background color of icons and lines for quote block
        if ( empty( $quote_icon_back ) ) {
            $quote_icon_back = $primary_color;
        }
        //? ---------- Quote block design
        switch ( $quote_block ) {
            // Gradient 1
            case 'v2':
                $css .= "\n          .airinblog-css-mod-pp-content > blockquote {\n            background: repeating-linear-gradient(135deg, rgba(0,0,0,0.3) 0px, rgba(0,0,0,0.4) 0px, {$q_back_color} 0.5px, {$q_back_color} 45px);\n          }\n        ";
                break;
            // Gradient 2
            case 'v3':
                $css .= "\n          .airinblog-css-mod-pp-content > blockquote {\n            background: repeating-linear-gradient(45deg, rgba(0,0,0,0.3) 0px, rgba(0,0,0,0.4) 0px, {$q_back_color} 0.5px, {$q_back_color} 15px);\n          }\n        ";
                break;
            // Grid
            case 'v4':
                // Convert background color to rgba
                $rgba = sscanf( $q_back_color, "#%02x%02x%02x" );
                $rgb = "rgba({$rgba[0]}, {$rgba[1]}, {$rgba[2]}, 0.2)";
                $css .= "\n          .airinblog-css-mod-pp-content > blockquote {\n            background:\n            repeating-linear-gradient(-90deg, transparent, transparent 4px,\n            {$rgb} 4px, {$rgb} 110px),\n            repeating-linear-gradient(-90deg, transparent, transparent 2px,\n            {$rgb} 2px, {$rgb} 90px),\n            repeating-linear-gradient(0deg, transparent, transparent 2px,\n            {$rgb} 2px, {$rgb} 40px),\n            repeating-linear-gradient(0deg, transparent, transparent 1px,\n            {$rgb} 1px, {$rgb} 50px);\n          }\n        ";
                break;
            // Folded corner
            case 'v5':
                $css .= '
          .airinblog-css-mod-pp-content > blockquote {
            background:
            linear-gradient(to left bottom, transparent 50%, rgba(0, 0, 0, 0.268) 0) no-repeat 100% 0 / 30px 30px,
            linear-gradient(-135deg, transparent 20px, ' . $q_back_color . ' 0);
            filter: drop-shadow(10px 15px rgba(0,0,0,0.1));
          }
          .airinblog-css-mod-pp-content > blockquote,
          .airinblog-css-mod-pp-content > .wp-block-quote {
            margin-bottom: 2em;
          }
        ';
                break;
            // Solid frame
            case 'v6':
                $css .= '
          .airinblog-css-mod-pp-content > blockquote {
            border: 1px solid ' . $quote_icon_back . ';
          }
          .airinblog-css-mod-pp-content > .wp-block-quote {
            border-left: 1px solid ' . $quote_icon_back . ';
          }
        ';
                break;
            // Dotted frame
            case 'v7':
                $css .= '
          .airinblog-css-mod-pp-content > blockquote {
            border: 2px dashed ' . $quote_icon_back . ';
          }
          .airinblog-css-mod-pp-content > .wp-block-quote {
            border-left: 2px dashed ' . $quote_icon_back . ';
          }
        ';
                break;
            // Border left
            case 'v8':
                $css .= '
          .airinblog-css-mod-pp-content > blockquote {
            box-shadow: -7px 0 0 ' . $quote_icon_back . ';
          }
        ';
                break;
            // Double border
            case 'v9':
                $css .= '
          .airinblog-css-mod-pp-content > blockquote {
            box-shadow: -7px 0 0 ' . $quote_icon_back . ', 7px 0 0 ' . $quote_icon_back . ';
          }
        ';
                break;
        }
        //? ---------- Add icon to quote block
        if ( get_theme_mod( 'airinblog_cus_post_quote_icon', 1 ) == 1 ) {
            // Define icon color if it is not specified
            $q_icon_color = 'inherit';
            if ( !empty( $quote_icon_color ) ) {
                $q_icon_color = $quote_icon_color;
            }
            // Add background for icon
            if ( get_theme_mod( 'airinblog_cus_post_quote_icon_back_activ', 0 ) == 1 ) {
                $css .= '
          .airinblog-css-mod-pp-content > blockquote::before{
            background: ' . $quote_icon_back . ';
            border-radius: 2px;
          }
        ';
                // Define icon color if none is specified and icon background is enabled
                if ( empty( $quote_icon_color ) ) {
                    $q_icon_color = $color_lite;
                }
            }
            // Selecting an icon for the quote block
            switch ( esc_attr( get_theme_mod( 'airinblog_cus_post_quote_icon_select', 'v1' ) ) ) {
                // Square quotes
                case 'v1':
                    $q_icon = '\\e90f';
                    break;
                // Straight quotes
                case 'v2':
                    $q_icon = '\\e922';
                    break;
                // Sharp quotes
                case 'v3':
                    $q_icon = '\\e911';
                    break;
                // Round quotes
                case 'v4':
                    $q_icon = '\\e977';
                    break;
                // Paper clip
                case 'v5':
                    $q_icon = '\\e9cd';
                    break;
                // Paper clip (vertical)
                case 'v6':
                    $q_icon = '\\e947';
                    break;
                // Drawing pin
                case 'v7':
                    $q_icon = '\\e93b';
                    break;
                // Drawing pin (vertical)
                case 'v8':
                    $q_icon = '\\e909';
                    break;
                // Bulb
                case 'v9':
                    $q_icon = '\\e904';
                    break;
                // Bell
                case 'v10':
                    $q_icon = '\\e940';
                    break;
                // Attention triangle
                case 'v11':
                    $q_icon = '\\e03d';
                    break;
                // Exclamation sheet
                case 'v12':
                    $q_icon = '\\e94c';
                    break;
                // Exclamation mark
                case 'v13':
                    $q_icon = '\\e952';
                    break;
                // Cloud conversation
                case 'v14':
                    $q_icon = '\\e906';
                    break;
                // Speaker
                case 'v15':
                    $q_icon = '\\e91d';
                    break;
                // Open book
                case 'v16':
                    $q_icon = '\\e913';
                    break;
                // Embossed tick
                case 'v17':
                    $q_icon = '\\ea11';
                    break;
                // Solid tick
                case 'v18':
                    $q_icon = '\\ea10';
                    break;
                // default
                default:
                    $q_icon = '\\e948';
                    break;
            }
            // General styles for icons
            $css .= '
        .airinblog-css-mod-pp-content > blockquote {
          display: flex;
          flex-wrap: wrap;
          align-items: center;
        }
        .airinblog-css-mod-pp-content > blockquote::before {
          font-family: "icomoon";
          text-rendering: auto;
          padding: 0 .5em;
          content: "' . $q_icon . '";
          color: ' . $q_icon_color . ';
          font-size: ' . $quote_icon_size . 'px;
          line-height: 1.5;
        }
      ';
            // Choosing the location of the quotes icon
            if ( get_theme_mod( 'airinblog_cus_post_quote_icon_layout', 2 ) == 1 ) {
                // Left
                $css .= '
          .airinblog-css-mod-pp-content > blockquote::before {
            margin: .5em 1.25em;
          }
          .airinblog-css-mod-pp-content > blockquote p {
            width: 75%;
          }
          @media (max-width: 700px) {
            .airinblog-css-mod-pp-content > blockquote p {
              width: 100%;
            }
          }
        ';
            } else {
                // Center
                $css .= '
          .airinblog-css-mod-pp-content > blockquote {
            flex-direction: column;
            text-align: center;
          }
        ';
            }
        }
        //? ---------- Automatic background color for block quotes
        if ( esc_attr( get_theme_mod( 'airinblog_cus_post_quote_auto_color', 0 ) ) == 1 ) {
            // Options strripos: 1 - search string, 2 - search value, 3 - direction and position of the start of the search)
            if ( strripos( $content_color, 'd', -5 ) === false ) {
                $c_r = 'dd';
            } else {
                $c_r = 'aa';
            }
            // after the first character #, change two color characters
            $col = substr_replace(
                $content_color,
                $c_r,
                1,
                2
            );
            switch ( $quote_block ) {
                // Gradient 1
                case 'v2':
                    $css .= "\n            .airinblog-css-mod-pp-content > blockquote {\n              background: repeating-linear-gradient(135deg, #d8d8d8 0px, #d8d8d8 0px, {$col} 0.5px, {$col} 45px);\n            }\n          ";
                    break;
                // Gradient 2
                case 'v3':
                    $css .= "\n            .airinblog-css-mod-pp-content > blockquote {\n              background: repeating-linear-gradient(45deg, #d8d8d8 0px, #d8d8d8 0px, {$col} 0.5px, {$col} 15px);\n            }\n          ";
                    break;
                // Grid
                case 'v4':
                    // Convert background color to rgba
                    $rgb_a = sscanf( $col, "#%02x%02x%02x" );
                    $rgb_b = "rgba({$rgb_a[0]}, {$rgb_a[1]}, {$rgb_a[2]}, 0.5)";
                    $css .= "\n            .airinblog-css-mod-pp-content > blockquote {\n              background:\n              repeating-linear-gradient(-90deg, transparent, transparent 4px,\n              {$rgb_b} 4px, {$rgb_b} 110px),\n              repeating-linear-gradient(-90deg, transparent, transparent 2px,\n              {$rgb_b} 2px, {$rgb_b} 90px),\n              repeating-linear-gradient(0deg, transparent, transparent 2px,\n              {$rgb_b} 2px, {$rgb_b} 40px),\n              repeating-linear-gradient(0deg, transparent, transparent 1px,\n              rgba(0, 0, 0, 0.2) 1px, rgba(0, 0, 0, 0.2) 50px);\n            }\n          ";
                    break;
                // Folded corner
                case 'v5':
                    $css .= '
            .airinblog-css-mod-pp-content > blockquote {
              background:
              linear-gradient(to left bottom, transparent 50%, rgba(0, 0, 0, 0.2) 0) no-repeat 100% 0 / 30px 30px,
              linear-gradient(-135deg, transparent 20px, ' . $col . ' 0);
            }
          ';
                    break;
                default:
                    $css .= "\n            .airinblog-css-mod-pp-content > blockquote, .airinblog-css-mod-pp-content > blockquote {\n              background: {$col};\n            }\n          ";
                    break;
            }
        }
    }
    //? ---------- ---------- H1 headings (posts and pages)
    //? ---------- Text color of H1 headings (posts and pages)
    $h1_t_color_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h1_color' ) );
    if ( !empty( $h1_t_color_post ) ) {
        $css .= '
      .airinblog-css-mod-pp-header h1,
      .airinblog-css-mod-pp-content h1 {
        color: ' . $h1_t_color_post . ';
      }
    ';
    }
    //? ---------- Header H1 Font (posts and pages)
    $h1_post_font = esc_attr( get_theme_mod( 'airinblog_cus_post_h1_font', 'off' ) );
    $famaly = '';
    if ( in_array( $h1_post_font, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $h1_post_font, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $h1_post_font !== 'off' ) {
        $css .= '
      .airinblog-css-mod-pp-header h1,
      .airinblog-css-mod-pp-content h1 {
        font-family: "' . $h1_post_font . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- Header H1 text size (posts and pages)
    $h1_t_size_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h1_size', 32 ) );
    if ( $h1_t_size_post != 32 ) {
        $css .= '
      .airinblog-css-mod-pp-header h1,
      .airinblog-css-mod-pp-content h1 {
        font-size: ' . $h1_t_size_post . 'px;
      }
    ';
    }
    //? ---------- Header H1 row height (posts and pages)
    $h1_post_hight = esc_attr( get_theme_mod( 'airinblog_cus_post_h1_hight', '1.5' ) );
    if ( $h1_post_hight !== '1.5' ) {
        $css .= "\n      .airinblog-css-mod-pp-header h1,\n      .airinblog-css-mod-pp-content h1 {\n        line-height: {$h1_post_hight};\n      }\n    ";
    }
    //? ---------- ---------- Headings H2 (posts and pages)
    if ( $h2_post !== 'off' ) {
        //? ---------- Background color of H2 headings (posts and pages)
        $h2_b_color_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_back_color' ) );
        if ( !empty( $h2_b_color_post ) ) {
            $css .= '
        .airinblog-css-mod-pp-content > h2 {
          background: ' . $h2_b_color_post . ';
          padding: 5px 15px;
        }
      ';
        }
        //? ---------- Text color of H2 headings (posts and pages)
        $h2_t_color_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_text_color' ) );
        if ( !empty( $h2_t_color_post ) ) {
            $css .= '
        .airinblog-css-mod-pp-content > h2 {
          color: ' . $h2_t_color_post . ';
        }
      ';
        }
        //? ---------- Font for H2 headings (posts and pages)
        $h2_post_font = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_font', 'off' ) );
        $famaly = '';
        if ( in_array( $h2_post_font, $serif ) ) {
            $famaly = 'serif';
        } elseif ( in_array( $h2_post_font, $cursive ) ) {
            $famaly = 'cursive';
        } else {
            $famaly = 'sans-serif';
        }
        if ( $h2_post_font !== 'off' ) {
            $css .= '
        .airinblog-css-mod-pp-content > h2 {
          font-family: "' . $h2_post_font . '", ' . $famaly . ';
        }
      ';
        }
        //? ---------- Text size of H2 headings (posts and pages)
        $h2_t_size_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_size', 26 ) );
        if ( $h2_t_size_post != 26 ) {
            $css .= '
        .airinblog-css-mod-pp-content > h2 {
          font-size: ' . $h2_t_size_post . 'px;
        }
      ';
        }
        //? ---------- Row height of H2 headings (posts and pages)
        $h2_post_hight = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_hight', '1.5' ) );
        if ( $h2_post_hight !== '1.5' ) {
            $css .= "\n        .airinblog-css-mod-pp-content > h2 {\n          line-height: {$h2_post_hight};\n        }\n      ";
        }
        if ( $h2_post !== 'v0' ) {
            //? ---------- H2 heading icons text color (posts and pages)
            if ( empty( $h2_text_icon_color ) ) {
                $h2_text_icon_color = $color_lite;
            }
            //? ---------- H2 heading icons background color (posts and pages)
            if ( empty( $h2_icon_back ) ) {
                $h2_icon_back = $primary_color;
            }
        }
        //? ---------- H2 headings variation (posts and pages)
        switch ( $h2_post ) {
            // Light underlining
            case 'v1':
                $css .= "\n          .airinblog-css-mod-pp-content > h2::after {\n            content: '';\n            display: block;\n            height: 2px;\n            width: 22%;\n            margin-top: 3px;\n            margin-bottom: 10px;\n            background: {$h2_icon_back};\n          }\n        ";
                break;
            // Side border
            case 'v2':
                $css .= "\n          .airinblog-css-mod-pp-content > h2 {\n            box-shadow: -10px 0 0 {$h2_icon_back};\n            padding-left: 15px;\n            margin-left: 15px;\n          }\n        ";
                break;
            // With numbering
            case 'v3':
                $h2_count = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_count_text', 'Par.' ) );
                $css .= "\n          .airinblog-css-mod-pp-content {\n            counter-reset: ch2;\n          }\n          .airinblog-css-mod-pp-content > h2 {\n            display: flex;\n            align-items: center;\n            border-radius: 2px;\n            padding: 0 15px 0 0;\n          }\n          .airinblog-css-mod-pp-content > h2:before{\n            counter-increment: ch2;\n            content: '{$h2_count}' counter(ch2);\n            color: {$h2_text_icon_color};\n            background: {$h2_icon_back};\n            padding: 20px 15px;\n            border-radius: 2px;\n            margin-right: 15px;\n            text-align: center;\n          }\n        ";
                break;
            // With icon selection
            case 'v4':
                // H2 heading icon selection (posts and pages)
                switch ( esc_attr( get_theme_mod( 'airinblog_cus_post_h2_icon_select', 'v1' ) ) ) {
                    // Right arrow
                    case 'v1':
                        $h2_icon = '\\2771';
                        break;
                    // Arrow to down
                    case 'v2':
                        $h2_icon = '\\23F7';
                        break;
                    // Arrow right and down
                    case 'v3':
                        $h2_icon = '\\25FF';
                        break;
                    // Volumetric arrow
                    case 'v4':
                        $h2_icon = '\\27AF';
                        break;
                    // Pencil
                    case 'v5':
                        $h2_icon = '\\270E';
                        break;
                    // Check mark
                    case 'v6':
                        $h2_icon = '\\2714';
                        break;
                    // Small flag
                    case 'v7':
                        $h2_icon = '\\2690';
                        break;
                    // Blocks
                    case 'v8':
                        $h2_icon = '\\268F';
                        break;
                    // Block hierarchy
                    case 'v9':
                        $h2_icon = '\\2636';
                        break;
                    // Default
                    default:
                        $h2_icon = '';
                        break;
                }
                $css .= '
          .airinblog-css-mod-pp-content > h2 {
            display: flex;
            align-items: center;
            border-radius: 2px;
            padding: 0 15px 0 0;
          }
          .airinblog-css-mod-pp-content > h2:before {
            content: "' . $h2_icon . '";
            color: ' . $h2_text_icon_color . ';
            background: ' . $h2_icon_back . ';
            padding: 20px 15px;
            border-radius: 2px;
            margin-right: 15px;
          }
        ';
                break;
            // With arbitrary value
            case 'v5':
                $h2_tag = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_tag', '#' ) );
                $css .= "\n          .airinblog-css-mod-pp-content > h2 {\n            display: flex;\n            align-items: center;\n            border-radius: 2px;\n            padding: 0 15px 0 0;\n          }\n          .airinblog-css-mod-pp-content > h2:before{\n            content: '{$h2_tag}';\n            color: {$h2_text_icon_color};\n            background: {$h2_icon_back};\n            padding: 20px 15px;\n            border-radius: 2px;\n            margin-right: 15px;\n            text-align: center;\n          }\n        ";
                break;
        }
    }
    //? ---------- ---------- Headings H3 - H6 (posts and pages)
    if ( $h36_post !== 'off' ) {
        //? ---------- Background color of H3 - H6 headings (posts and pages)
        $h36_b_color_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_back_color' ) );
        if ( !empty( $h36_b_color_post ) ) {
            $css .= "\n        .airinblog-css-mod-pp-content > h3,\n        .airinblog-css-mod-pp-content > h4,\n        .airinblog-css-mod-pp-content > h5,\n        .airinblog-css-mod-pp-content > h6 {\n          background: {$h36_b_color_post};\n          padding: 5px 15px;\n        }\n      ";
        }
        //? ---------- Text color of H3 - H6 headings (posts and pages)
        $h36_t_color_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_text_color' ) );
        if ( !empty( $h36_t_color_post ) ) {
            $css .= "\n        .airinblog-css-mod-pp-content > h3,\n        .airinblog-css-mod-pp-content > h4,\n        .airinblog-css-mod-pp-content > h5,\n        .airinblog-css-mod-pp-content > h6 {\n          color: {$h36_t_color_post};\n        }\n      ";
        }
        //? ---------- Font for H3 - H6 headings (posts and pages)
        $h36_post_font = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_font', 'off' ) );
        $famaly = '';
        if ( in_array( $h36_post_font, $serif ) ) {
            $famaly = 'serif';
        } elseif ( in_array( $h36_post_font, $cursive ) ) {
            $famaly = 'cursive';
        } else {
            $famaly = 'sans-serif';
        }
        if ( $h36_post_font !== 'off' ) {
            $css .= '
        .airinblog-css-mod-pp-content > h3,
        .airinblog-css-mod-pp-content > h4,
        .airinblog-css-mod-pp-content > h5,
        .airinblog-css-mod-pp-content > h6 {
          font-family: "' . $h36_post_font . '", ' . $famaly . ';
        }
      ';
        }
        //? ---------- Text size of H3 headings (posts and pages)
        $h3_t_size_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_h3_size', 24 ) );
        if ( $h3_t_size_post != 24 ) {
            $css .= '
        .airinblog-css-mod-pp-content > h3 {
          font-size: ' . $h3_t_size_post . 'px;
        }
      ';
        }
        //? ---------- Text size of H4 headings (posts and pages)
        $h4_t_size_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_h4_size', 22 ) );
        if ( $h4_t_size_post != 22 ) {
            $css .= '
        .airinblog-css-mod-pp-content > h4 {
          font-size: ' . $h4_t_size_post . 'px;
        }
      ';
        }
        //? ---------- Text size of H5 headings (posts and pages)
        $h5_t_size_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_h5_size', 20 ) );
        if ( $h5_t_size_post != 20 ) {
            $css .= '
        .airinblog-css-mod-pp-content > h5 {
          font-size: ' . $h5_t_size_post . 'px;
        }
      ';
        }
        //? ---------- Text size of H6 headings (posts and pages)
        $h6_t_size_post = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_h6_size', 18 ) );
        if ( $h6_t_size_post != 18 ) {
            $css .= '
        .airinblog-css-mod-pp-content > h6 {
          font-size: ' . $h6_t_size_post . 'px;
        }
      ';
        }
        //? ---------- Row height of H3 - H6 headings (posts and pages)
        $h36_post_hight = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_hight', '1.5' ) );
        if ( $h36_post_hight !== '1.5' ) {
            $css .= "\n        .airinblog-css-mod-pp-content > h3,\n        .airinblog-css-mod-pp-content > h4,\n        .airinblog-css-mod-pp-content > h5,\n        .airinblog-css-mod-pp-content > h6 {\n          line-height: {$h36_post_hight};\n        }\n      ";
        }
        if ( $h36_post !== 'v0' ) {
            //? ---------- H3 - H6 heading icons text color (posts and pages)
            if ( empty( $h36_text_icon_color ) ) {
                $h36_text_icon_color = $color_lite;
            }
            //? ---------- H3 - H6 heading icons background color (posts and pages)
            if ( empty( $h36_icon_back ) ) {
                $h36_icon_back = $primary_color;
            }
        }
        //? ---------- H3 - H6 headings variation (posts and pages)
        switch ( $h36_post ) {
            // Light underlining
            case 'v1':
                $css .= "\n          .airinblog-css-mod-pp-content > h3::after,\n          .airinblog-css-mod-pp-content > h4::after,\n          .airinblog-css-mod-pp-content > h5::after,\n          .airinblog-css-mod-pp-content > h6::after {\n            content: '';\n            display: block;\n            height: 1px;\n            margin-top: 3px;\n            margin-bottom: 10px;\n            background: {$h36_icon_back};\n          }\n          .airinblog-css-mod-pp-content > h3::after {\n            width: 20%;\n          }\n          .airinblog-css-mod-pp-content > h4::after {\n            width: 18%;\n          }\n          .airinblog-css-mod-pp-content > h5::after {\n            width: 16%;\n          }\n          .airinblog-css-mod-pp-content > h6::after {\n            width: 14%;\n          }\n        ";
                break;
            // Side border
            case 'v2':
                $css .= "\n          .airinblog-css-mod-pp-content > h3,\n          .airinblog-css-mod-pp-content > h4,\n          .airinblog-css-mod-pp-content > h5,\n          .airinblog-css-mod-pp-content > h6 {\n            box-shadow: -10px 0 0 {$h36_icon_back};\n            padding-left: 15px;\n            margin-left: 15px;\n          }\n        ";
                break;
            // With numbering
            case 'v3':
                $h36_count = get_theme_mod( 'airinblog_cus_post_h36_count_text', 'Par.' );
                if ( $h2_post == 'v3' ) {
                    $counter_h2 = "counter(ch2) '.' ";
                } else {
                    $counter_h2 = '';
                }
                $css .= "\n          .airinblog-css-mod-pp-content {\n            counter-reset: ch2 ch3 ch4 ch5 ch6;\n          }\n          .airinblog-css-mod-pp-content > h3 {\n            counter-reset: ch4;\n          }\n          .airinblog-css-mod-pp-content > h4 {\n            counter-reset: ch5;\n          }\n          .airinblog-css-mod-pp-content > h5 {\n            counter-reset: ch6;\n          }\n          .airinblog-css-mod-pp-content > h3,\n          .airinblog-css-mod-pp-content > h4,\n          .airinblog-css-mod-pp-content > h5,\n          .airinblog-css-mod-pp-content > h6 {\n            display: flex;\n            align-items: center;\n            border-radius: 2px;\n            padding: 0 15px 0 0;\n          }\n          .airinblog-css-mod-pp-content > h3:before,\n          .airinblog-css-mod-pp-content > h4:before,\n          .airinblog-css-mod-pp-content > h5:before,\n          .airinblog-css-mod-pp-content > h6:before {\n            color: {$h36_text_icon_color};\n            background: {$h36_icon_back};\n            padding: 18px 12px;\n            border-radius: 2px;\n            margin-right: 15px;\n            text-align: center;\n          }\n          .airinblog-css-mod-pp-content > h3:before {\n            counter-increment: ch3;\n            content: '{$h36_count}' {$counter_h2} counter(ch3) ;\n          }\n          .airinblog-css-mod-pp-content > h4:before {\n            counter-increment: ch4;\n            content: '{$h36_count}' {$counter_h2} counter(ch3) '.' counter(ch4) ;\n          }\n          .airinblog-css-mod-pp-content > h5:before {\n            counter-increment: ch5;\n            content: '{$h36_count}' {$counter_h2} counter(ch3) '.' counter(ch4) '.' counter(ch5) ;\n          }\n          .airinblog-css-mod-pp-content > h6:before {\n            counter-increment: ch6;\n            content: '{$h36_count}' {$counter_h2} counter(ch3) '.' counter(ch4) '.' counter(ch5) '.' counter(ch6) ;\n          }\n        ";
                break;
            // With icon selection
            case 'v4':
                // H3 - H6 heading icon selection (posts and pages)
                switch ( get_theme_mod( 'airinblog_cus_post_h36_icon_select', 'v1' ) ) {
                    // Right arrow
                    case 'v1':
                        $h36_icon = '\\2771';
                        break;
                    // Arrow to down
                    case 'v2':
                        $h36_icon = '\\23F7';
                        break;
                    // Arrow right and down
                    case 'v3':
                        $h36_icon = '\\25FF';
                        break;
                    // Volumetric arrow
                    case 'v4':
                        $h36_icon = '\\27AF';
                        break;
                    // Pencil
                    case 'v5':
                        $h36_icon = '\\270E';
                        break;
                    // Check mark
                    case 'v6':
                        $h36_icon = '\\2714';
                        break;
                    // Small flag
                    case 'v7':
                        $h36_icon = '\\2690';
                        break;
                    // Blocks
                    case 'v8':
                        $h36_icon = '\\268F';
                        break;
                    // Block hierarchy
                    case 'v9':
                        $h36_icon = '\\2636';
                        break;
                    // Default
                    default:
                        $h36_icon = '';
                        break;
                }
                $css .= '
          .airinblog-css-mod-pp-content > h3,
          .airinblog-css-mod-pp-content > h4,
          .airinblog-css-mod-pp-content > h5,
          .airinblog-css-mod-pp-content > h6 {
            display: flex;
            align-items: center;
            border-radius: 2px;
            padding: 0 15px 0 0;
          }
          .airinblog-css-mod-pp-content > h3:before,
          .airinblog-css-mod-pp-content > h4:before,
          .airinblog-css-mod-pp-content > h5:before,
          .airinblog-css-mod-pp-content > h6:before {
            content: "' . $h36_icon . '";
            color: ' . $h36_text_icon_color . ';
            background: ' . $h36_icon_back . ';
            padding: 18px 12px;
            border-radius: 2px;
            margin-right: 15px;
          }
        ';
                break;
            // With arbitrary value
            case 'v5':
                $h36_tag = get_theme_mod( 'airinblog_cus_post_h36_tag', '#' );
                $css .= "\n          .airinblog-css-mod-pp-content > h3,\n          .airinblog-css-mod-pp-content > h4,\n          .airinblog-css-mod-pp-content > h5,\n          .airinblog-css-mod-pp-content > h6 {\n            display: flex;\n            align-items: center;\n            border-radius: 2px;\n            padding: 0 15px 0 0;\n          }\n          .airinblog-css-mod-pp-content > h3:before,\n          .airinblog-css-mod-pp-content > h4:before,\n          .airinblog-css-mod-pp-content > h5:before,\n          .airinblog-css-mod-pp-content > h6:before {\n            content: '{$h36_tag}';\n            color: {$h36_text_icon_color};\n            background: {$h36_icon_back};\n            padding: 18px 12px;\n            border-radius: 2px;\n            margin-right: 15px;\n            text-align: center;\n          }\n        ";
                break;
        }
    }
    //? ---------- Remove link underline
    $link_underline = get_theme_mod( 'airinblog_cus_post_link_underline', 0 );
    if ( $link_underline == 1 ) {
        $css .= '
      .airinblog-css-post-content a,
      .airinblog-css-page-content a,
      .airinblog-css-mod-pp-content a,
      .comment-content a {
        text-decoration: none;
      }
    ';
    }
    //? ---------- ---------- Author block
    if ( $bio_post_border !== 'v0' ) {
        //? ----------  Author block separator variation
        switch ( $bio_post_border ) {
            // Soaring
            case 'v1':
                $css .= '
          .airinblog-css-bio-post-box {
            padding: 20px;
            margin-bottom: 35px;
            box-shadow: 0.1em 0.1em 0.3em rgba(0,0,0,0.15);
          }
          @media (max-width: 500px) {
            .airinblog-css-bio-post-box {
              padding-left: 5px;
              padding-right: 5px;
            }
          }
        ';
                break;
            // Deepening
            case 'v2':
                $css .= '
          .airinblog-css-bio-post-box {
            padding: 20px;
            box-shadow: inset 0 0 0.7em rgba(0,0,0,0.2);
          }
          @media (max-width: 500px) {
            .airinblog-css-bio-post-box {
              padding-left: 5px;
              padding-right: 5px;
            }
          }
        ';
                break;
            // Dividers in width
            case 'v3':
                $css .= '
          .airinblog-css-bio-post-box {
            border-width: ' . $bio_post_size . 'px 0;
            border-style: ' . $bio_post_line . ';
            border-color: ' . $primary_color . ';
          }
        ';
                break;
            // Dividers in center
            case 'v4':
                $css .= '
          .airinblog-css-border-center-top, .airinblog-css-border-center-bottom {
            border-top: ' . $bio_post_size . 'px ' . $bio_post_line . ' ' . $primary_color . ';
            width: 35%;
            margin: auto;
          }
          .airinblog-css-border-center-top {
            margin-top: 25px;
            margin-bottom: -25px;
          }
          .airinblog-css-border-center-bottom {
            margin-top: -25px;
            margin-bottom: 25px;
          }
        ';
                break;
            // In frame
            case 'v5':
                $css .= '
          .airinblog-css-bio-post-box {
            border: ' . $bio_post_size . 'px ' . $bio_post_line . ' ' . $primary_color . ';
            border-radius: 2px;
          }
        ';
                break;
        }
    }
    //? ---------- ---------- Related posts
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_related', 1 ) ) == 1 ) {
        //? ---------- Number of columns for related posts
        switch ( esc_attr( get_theme_mod( 'airinblog_cus_post_related_grid', 'r4' ) ) ) {
            // Three columns
            case 'r3':
                $css .= '
          h2.airinblog-css-related-post-title, .airinblog-css-related-post-title a {
            font-size: 18px;
          }
        ';
                if ( $airinblog_lay !== 'no_sidebar_full' ) {
                    $css .= '
            .airinblog-css-related-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 270px));
              grid-column-gap: 20.22px;
            }
          ';
                } else {
                    $css .= '
            .airinblog-css-related-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 378px));
              grid-column-gap: 20.5px;
            }
          ';
                }
                break;
            // Four columns
            case 'r4':
                $css .= '
          h2.airinblog-css-related-post-title, .airinblog-css-related-post-title a {
            font-size: 16px;
          }
        ';
                if ( $airinblog_lay !== 'no_sidebar_full' ) {
                    $css .= '
            .airinblog-css-related-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 195px));
              grid-column-gap: 23.48px;
            }
          ';
                } else {
                    $css .= '
            .airinblog-css-related-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 270px));
              grid-column-gap: 31.66px;
            }
          ';
                }
                break;
            // Five columns
            case 'r5':
                $css .= '
          h2.airinblog-css-related-post-title, .airinblog-css-related-post-title a {
            font-size: 14px;
          }
        ';
                if ( $airinblog_lay !== 'no_sidebar_full' ) {
                    $css .= '
            .airinblog-css-related-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 155px));
              grid-column-gap: 18.85px;
            }
          ';
                } else {
                    $css .= '
            .airinblog-css-related-box {
              grid-template-columns: repeat(auto-fill, minmax(0, 215px));
              grid-column-gap: 25px;
            }
          ';
                }
                break;
        }
        //? ---------- Design for related posts
        switch ( esc_attr( get_theme_mod( 'airinblog_cus_post_related_design', 'v0' ) ) ) {
            // Frames
            case 'v1':
                $css .= "\n          .airinblog-css-related-post-box {\n            outline: 1px solid {$primary_color};\n          }\n        ";
                break;
            // Contrast blocks
            case 'v2':
                $css .= "\n          .airinblog-css-related-post-header {\n            background: {$menu_color};\n          }\n          .airinblog-css-related-post-title a{\n            color: {$menutext_color};\n          }\n        ";
                break;
            // Soaring blocks
            case 'v3':
                $css .= '
          .airinblog-css-related-post-box {
            box-shadow: 0.1em 0.1em 0.5em rgba(0,0,0,0.3);
          }
        ';
                break;
            // Polaroid
            case 'v4':
                $css .= '
          .airinblog-css-related-post-box {
            padding: 15px 15px 0;
            box-shadow: 0.4em 0.4em 1em rgba(0,0,0,0.3);
            text-align: center;
          }
        ';
                break;
        }
    }
    //? ========== ========== ========== Ticker settings
    $ticker_true = get_theme_mod( 'airinblog_cus_ticker', 1 );
    //? ---------- Expansion of neighboring blocks when the ticker is turned off
    if ( $ticker_true == 0 ) {
        $css .= '
      .airinblog-css-top-menu {
        width: 100%;
      }
    ';
    }
    //?---------- Ticker color
    if ( !empty( $ticker_color ) ) {
        $css .= '
	    .airinblog-css-ticker a,
      .airinblog-css-top-date {
        color: ' . $ticker_color . ';
      }
    ';
    }
    //? ---------- Ticker text size
    $ticker_size = esc_attr( get_theme_mod( 'airinblog_cus_ticker_size', 14 ) );
    if ( $ticker_size != 14 ) {
        $css .= '
      .airinblog-css-ticker a,
      .airinblog-css-top-date {
        font-size: ' . $ticker_size . 'px;
      }
    ';
    }
    //? ---------- Uppercase text
    $ticker_up = esc_attr( get_theme_mod( 'airinblog_cus_ticker_up', 0 ) );
    if ( $ticker_up == 1 ) {
        $css .= '
      .airinblog-css-ticker a,
      .airinblog-css-top-date {
        text-transform: uppercase;
      }
    ';
    }
    //? ========== ========== ========== Top search
    //? ---------- Fixing a bug with the admin bar (When opening a search)
    $search_top = get_theme_mod( 'airinblog_cus_search', 'top-bar' );
    if ( $search_top != 'off' ) {
        $css .= '
      @media screen and (max-width: 600px) {
        #wpadminbar {
          position: fixed;
        }
      }
    ';
    }
    //? ========== ========== ========== Top menu settings
    //? ---------- Checking cart display
    $top_cart = 0;
    if ( class_exists( 'woocommerce' ) ) {
        if ( get_theme_mod( 'airinblog_cus_woo_top_cart', 1 ) == 1 ) {
            $cart_total = ( is_object( WC()->cart ) ? WC()->cart->get_cart_contents_total() : 0 );
            if ( $cart_total > 0 ) {
                $top_cart = 1;
            }
        }
    }
    //? ---------- Checking Top menu item display
    $top_menu_item = 0;
    if ( get_theme_mod( 'airinblog_cus_top_menu', 0 ) != 1 ) {
        $top_menu_item = 1;
        $menu_loc = 'airinblog-loc-menu-top';
        $nav_loc = get_nav_menu_locations();
        $item_loc = ( array_key_exists( $menu_loc, $nav_loc ) ? $nav_loc[$menu_loc] : null );
        if ( !wp_get_nav_menu_items( $item_loc ) && has_nav_menu( $menu_loc ) ) {
            $top_menu_item = 0;
        }
    }
    //? ---------- Expansion of neighboring blocks when the top menu is turned off
    if ( $top_menu_item == 0 && $top_cart == 0 && $search_top != 'top-bar' ) {
        $css .= '
      .airinblog-css-top-left {
        width: 100%;
      }
    ';
    }
    //? ---------- Proportion of width occupied by top menu
    $top_width = esc_attr( get_theme_mod( 'airinblog_cus_ticker_width', 50 ) );
    if ( $ticker_true != 0 && ($top_menu_item == 1 || $top_cart == 1 || $search_top == 'top-bar') ) {
        if ( $top_width != 50 ) {
            switch ( $top_width ) {
                case 30:
                    $top_w_1 = 70;
                    $top_w_2 = 30;
                    break;
                case 70:
                    $top_w_1 = 30;
                    $top_w_2 = 70;
                    break;
                default:
                    $top_w_1 = 100;
                    $top_w_2 = 100;
                    $css .= "\n            .airinblog-css-top-bar {\n              flex-direction: column;\n            }\n            @media (max-width: 700px) {\n              .airinblog-css-top-menu {\n                margin-bottom: 10px;\n              }\n            }\n            @media (max-width: 400px) {\n              .airinblog-css-top-menu {\n                margin-top: 10px;\n              }\n            }\n            .airinblog-css-top-left {\n              margin-top: 10px;\n            }\n          ";
                    break;
            }
            $css .= "\n        .airinblog-css-top-left {\n          width: " . $top_w_1 . "%;\n        }\n        .airinblog-css-top-menu {\n          width: " . $top_w_2 . "%;\n        }\n      ";
        }
        // ---------- Adaptation of date on small screen
        $css .= '
      @media (max-width: 700px) {
        .airinblog-css-top-bar {
          flex-direction: row;
        }
        .airinblog-css-top-left,
        .airinblog-css-top-menu {
          width: 50%;
          margin: 0;
        }
      }
      @media (max-width: 400px) {
        .airinblog-css-top-menu {
          width: 100%;
        }
      }
    ';
        // ---------- Adaptation of cart on small screen
        if ( $top_cart == 1 ) {
            $css .= '
        @media (max-width: 700px) {
          .airinblog-css-top-left {
            padding-right: 40px;
          }
        }
      ';
        }
    }
    //? ---------- Top menu text size
    $topmenu_size = esc_attr( get_theme_mod( 'airinblog_cus_top_menu_size', 14 ) );
    if ( $topmenu_size != 14 ) {
        $css .= '
      .airinblog-css-top-jsmenu-pc a,
      .airinblog-css-top-menu-pc a {
        font-size: ' . $topmenu_size . 'px;
      }
    ';
    }
    //? ---------- Top menu text size (mobile)
    $topmenu_m_size = esc_attr( get_theme_mod( 'airinblog_cus_top_menu_mobile_a_size', 16 ) );
    if ( $topmenu_m_size != 16 ) {
        $css .= '
      .airinblog-css-top-jsmenu-mobile a,
      .airinblog-css-nav-top-mobile a {
        font-size: ' . $topmenu_m_size . 'px;
      }
    ';
    }
    //? ========== ========== ========== Main menu
    //? ---------- ---------- Main menu item orientation
    $main_menu_lay = get_theme_mod( 'airinblog_cus_main_menu_layout', 'v1' );
    // Common styles
    if ( $main_menu_lay !== 'v1' ) {
        $css .= "\n      .airinblog-css-mega-menu > ul {\n        display: flex;\n        flex-wrap: wrap;\n      }\n      @media (max-width: 859px) {\n        .airinblog-css-mega-menu > ul {\n          display: none;\n        }\n      }\n    ";
    }
    switch ( $main_menu_lay ) {
        // Right
        case 'v2':
            $css .= "\n        .airinblog-css-mega-menu > ul {\n          justify-content: flex-end;\n        }\n      ";
            break;
        // Center
        case 'v3':
            $css .= '
        .airinblog-css-mega-menu > ul {
          justify-content: center;
        }
      ';
            break;
        // Distributed
        case 'v4':
            $css .= '
        .airinblog-css-mega-menu > ul {
          justify-content: space-around;
        }
      ';
            break;
    }
    //? ---------- Height of main menu items
    $menu_height = esc_attr( get_theme_mod( 'airinblog_cus_main_menu_height', 1 ) );
    if ( $menu_height != 1 ) {
        switch ( $menu_height ) {
            case 2:
                $css .= '
          .airinblog-css-mega-menu > ul > li a {
            padding: 12px;
          }
        ';
                break;
            case 3:
                $css .= '
          .airinblog-css-mega-menu > ul > li a {
            padding: 20px;
          }
        ';
                break;
        }
    }
    //? ---------- Main menu item font
    $font_menu = esc_attr( get_theme_mod( 'airinblog_cus_main_menu_font', 'off' ) );
    $famaly = '';
    if ( in_array( $font_menu, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $font_menu, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $font_menu !== 'off' ) {
        $css .= '
      .airinblog-css-mega-menu > ul > li > a {
        font-family: "' . $font_menu . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- Main menu items text size
    $menu_size = esc_attr( get_theme_mod( 'airinblog_cus_main_menu_size', 15 ) );
    if ( $menu_size != 15 ) {
        $css .= '
      .airinblog-css-mega-menu > ul > li > a {
        font-size: ' . $menu_size . 'px;
      }
    ';
    }
    //? ---------- Main menu items titles in uppercase
    $menu_text_up = esc_attr( get_theme_mod( 'airinblog_cus_main_menu_text_up', 1 ) );
    if ( $menu_text_up != 1 ) {
        $css .= "\n      .airinblog-css-mega-menu > ul > li > a {\n        text-transform: none;\n      }\n    ";
    }
    //? ---------- Main menu background in full screen width
    if ( esc_attr( get_theme_mod( 'airinblog_cus_main_menu_full_width', 0 ) ) == 1 ) {
        $css .= "\n      .airinblog-css-mega-menu-box {\n        width: calc(100vw - 20px);\n        margin-left: calc(-50vw + 50% + 10px);\n      }\n      .airinblog-css-mega-menu-container {\n        width: 100%;\n        max-width: 100%;\n      }\n      .airinblog-css-mega-menu-container,\n      .airinblog-css-top-bar {\n        border-bottom: none;\n      }\n      .airinblog-css-site-brand-top {\n        margin-top: 0;\n      }\n      #page {\n        box-shadow: none;\n      }\n    ";
    }
    //? ---------- ---------- Number of columns in mega menu
    $mega_column = get_theme_mod( 'airinblog_cus_main_menu_mega_column', 4 );
    // Common styles
    if ( $mega_column != 4 ) {
        $mega_w = 25;
        switch ( $mega_column ) {
            // One
            case '1':
                $mega_w = 100;
                break;
            // Two
            case '2':
                $mega_w = 50;
                break;
            // Three
            case '3':
                $mega_w = 33.33;
                break;
            // Five
            case '5':
                $mega_w = 20;
                break;
            // Six
            case '6':
                $mega_w = 16.66;
                break;
        }
        $css .= '
      .airinblog-css-mega-menu > ul > li > ul > li {
        width: ' . $mega_w . '%;
      }
    ';
    }
    //? ========== ========== ========== Breadcrumbs
    if ( get_theme_mod( 'airinblog_cus_bread_activ_post', 1 ) == 1 || get_theme_mod( 'airinblog_cus_bread_activ_cat', 1 ) == 1 ) {
        //? ---------- Breadcrumbs background color
        if ( !empty( $bread_back_color ) ) {
            $css .= '
        .airinblog-css-breadcrumbs {
          background: ' . $bread_back_color . ';
        }
      ';
        }
        //? ---------- Breadcrumb links text color
        if ( !empty( $bread_a_color ) ) {
            $css .= '
        .airinblog-css-breadcrumbs a {
          color: ' . $bread_a_color . ';
        }
      ';
        }
        //? ---------- Breadcrumb links text color (on hover)
        if ( !empty( $bread_a_hover_color ) ) {
            $css .= '
        .airinblog-css-breadcrumbs a:hover {
          color: ' . $bread_a_hover_color . ';
        }
      ';
        }
        //? ---------- Breadcrumbs header text color
        if ( !empty( $bread_h_color ) ) {
            $css .= '
        .airinblog-css-breadcrumbs {
          color: ' . $bread_h_color . ';
        }
      ';
        }
        //? ---------- Breadcrumbs text size
        // Breadcrumbs text size
        $bread_size_text = esc_attr( get_theme_mod( 'airinblog_cus_bread_size_text', 15 ) );
        if ( $bread_size_text != 15 ) {
            $css .= '
        .airinblog-css-breadcrumbs, .airinblog-css-breadcrumbs a {
          font-size: ' . $bread_size_text . 'px;
        }
      ';
        }
    }
    //? ========== ========== ========== Calm blocks (fluently movement of blocks)
    if ( get_theme_mod( 'airinblog_cus_flow_block', 1 ) == 1 ) {
        $flow_range_set = get_theme_mod( 'airinblog_cus_flow_block_range', 'mid' );
        $way_set = get_theme_mod( 'airinblog_cus_flow_block_way', 'bottom' );
        $flow_range = 125;
        if ( $flow_range_set == 'small' ) {
            $flow_range = 50;
        } else {
            if ( $flow_range_set == 'big' ) {
                $flow_range = 300;
            }
        }
        $way_range = '';
        if ( $way_set == 'top' || $way_set == 'left' ) {
            $way_range = '-';
        }
        $way_xy = 'Y';
        if ( $way_set == 'left' || $way_set == 'right' ) {
            $way_xy = 'X';
        }
        $css .= '
      .airinblog-css-cat-grid,
      .airinblog-css-home-narrow-grid-column,
      .airinblog-css-home-vertical-grid-post-first,
      .airinblog-css-home-vertical-grid-post-small,
      [class^="airinblog-css-home-three-grid-main-"],
      [class^="airinblog-css-home-five-grid-main-"],
      [class^="airinblog-css-home-slide-big-main-"],
      [class^="airinblog-css-home-slide-mid-partial-main-"],
      [class^="airinblog-css-home-slide-mid-two-main-"],
      [class^="airinblog-css-home-slide-mid-three-main-"] {
        transition: all 1s;
        opacity: 0;
        transform: translate' . $way_xy . '(' . $way_range . $flow_range . 'px);
      }
      .airinblog-css-cat-grid.airinblog-css-show-block,
      .airinblog-css-home-narrow-grid-column.airinblog-css-show-block,
      .airinblog-css-home-vertical-grid-post-first.airinblog-css-show-block,
      .airinblog-css-home-vertical-grid-post-small.airinblog-css-show-block,
      [class^="airinblog-css-home-three-grid-main-"].airinblog-css-show-block,
      [class^="airinblog-css-home-five-grid-main-"].airinblog-css-show-block,
      [class^="airinblog-css-home-slide-big-main-"].airinblog-css-show-block,
      [class^="airinblog-css-home-slide-mid-partial-main-"].airinblog-css-show-block,
      [class^="airinblog-css-home-slide-mid-two-main-"].airinblog-css-show-block,
      [class^="airinblog-css-home-slide-mid-three-main-"].airinblog-css-show-block,
      .infinite-scroll .airinblog-css-cat-grid {
        opacity: 1;
        transform: translate' . $way_xy . '(0);
      }
      .airinblog-css-owl-width-slider {
        transition: all 2s;
        opacity: 0;
      }
      .airinblog-css-owl-width-slider.airinblog-css-show-block {
        opacity: 1;
      }
    ';
    }
    //? ========== ========== ========== Up button
    if ( get_theme_mod( 'airinblog_cus_top_scroll', 0 ) == 0 ) {
        // Connecting a script
        wp_enqueue_script(
            'airinblog-script-scroll',
            get_template_directory_uri() . '/js/scroll.js',
            array('jquery'),
            AIRINBLOG_VERSION,
            true
        );
        // Up button size
        if ( get_theme_mod( 'airinblog_cus_top_scroll_size', 'big' ) == 'small' ) {
            $css .= '
        .airinblog-css-scrollup {
          width: 50px;
          height: 50px;
        }
      ';
        }
        // Up button location
        if ( get_theme_mod( 'airinblog_cus_top_scroll_layout', 'right' ) == 'left' ) {
            $css .= '
        .airinblog-css-scrollup {
          left: 20px;
        }
      ';
        }
        // Up button shape and design
        $form = get_theme_mod( 'airinblog_cus_top_scroll_form', 'circle' );
        $design = get_theme_mod( 'airinblog_cus_top_scroll_design', 'brace' );
        if ( $form != 'circle' || $design != 'brace' ) {
            $css .= '
        .airinblog-css-scrollup {  
          background-image: url(' . get_template_directory_uri() . '/img/scroll/' . $form . '/' . $design . '.png);
        }
      ';
        }
    }
    //? ========== ========== ========== Social Links
    $soc_anime = esc_attr( get_theme_mod( 'airinblog_cus_soc_anime', 'a5' ) );
    $soc_active = esc_attr( get_theme_mod( 'airinblog_cus_soc', 1 ) );
    //? ---------- Activate Social Links
    if ( $soc_active == 1 ) {
        // Social link design
        $soc_form = esc_attr( get_theme_mod( 'airinblog_cus_soc_form', 'square' ) );
        // Social links fill color
        $soc_back_color = esc_attr( get_theme_mod( 'airinblog_cus_soc_back_color' ) );
        // Social link size
        $soc_size = esc_attr( get_theme_mod( 'airinblog_cus_soc_size', 44 ) );
        //? ---------- Social links fill color
        if ( !empty( $soc_back_color ) ) {
            $soc_b_color = $soc_back_color;
        } else {
            $soc_b_color = $primary_color;
        }
        if ( $soc_form == 'without-background' ) {
            $soc_color_b = $soc_b_color;
        } else {
            $soc_color_b = 'rgba(0,0,0, 0)';
        }
        $max_soc_size = $soc_size + 10;
        $rotate = '';
        $soc_r1 = $soc_r2 = $soc_r3 = $soc_r4 = 0;
        switch ( $soc_form ) {
            case 'circle':
            case 'sharp-circle':
            case 'floret':
            case 'rhombus':
                $soc_r1 = $soc_r2 = $soc_r3 = $soc_r4 = 50;
                break;
            case 'rounded-square':
                $soc_r1 = $soc_r2 = $soc_r3 = $soc_r4 = 20;
                break;
            case 'leaf':
                $soc_r1 = $soc_r3 = 48;
                $soc_r2 = $soc_r4 = 12;
                break;
            case 'sticker':
                $soc_r1 = $soc_r2 = $soc_r3 = 48;
                $soc_r4 = 5;
                break;
            case 'triangle':
                $soc_r1 = $soc_r3 = 70;
                $soc_r2 = 110;
                $soc_r4 = 40;
                break;
        }
        $soc_scale = 1.2;
        if ( $soc_size == 34 ) {
            $soc_scale = 1.3;
        }
        // Common social link animation styles
        $css .= "\n      .airinblog-css-soc-top-box-anime img{\n        width: " . $soc_size . "px;\n        height: " . $soc_size . "px;\n      }\n    ";
        //? ---------- Animation of social links
        switch ( $soc_anime ) {
            case 'a1':
                // Link increase
                $css .= "\n          .airinblog-css-soc-top-box-anime img {\n            background: {$soc_color_b};\n          }\n          .airinblog-css-soc-top-box-anime img:hover {\n            transform: scale(1.2);\n          }\n        ";
                break;
            // Zoom background
            case 'a2':
                $css .= "\n          .airinblog-css-soc-top-box-anime {\n            width: " . $max_soc_size . "px;\n            height: " . $max_soc_size . "px;\n            background: {$soc_b_color};\n            border-radius: " . $soc_r1 . "% " . $soc_r2 . "% " . $soc_r3 . "% " . $soc_r4 . "%;\n            overflow: hidden;\n          }\n          .airinblog-css-soc-top-box-anime img:hover {\n            transform: scale({$soc_scale});\n          }\n          .airinblog-css-soc-top-box-anime:hover {\n            background: {$soc_color_b};\n          }\n        ";
                break;
            // Link reduction
            case 'a3':
                $css .= "\n          .airinblog-css-soc-top-box-anime img {\n            background: {$soc_color_b};\n          }\n          .airinblog-css-soc-top-box-anime img:hover {\n            transform: scale(0.85);\n          }\n        ";
                break;
            // Zoom out background
            case 'a4':
                $css .= "\n          .airinblog-css-soc-top-box-anime {\n            border-radius: " . $soc_r1 . "% " . $soc_r2 . "% " . $soc_r3 . "% " . $soc_r4 . "%;\n            overflow: hidden;\n            background: {$soc_color_b};\n          }\n          .airinblog-css-soc-top-box-anime:hover {\n            background: {$soc_b_color};\n          }\n          .airinblog-css-soc-top-box-anime img:hover {\n            transform: scale(0.8);\n          }\n        ";
                break;
            // Frame around the link
            case 'a5':
                $css .= "\n          .airinblog-css-soc-top-box-anime img {\n            background: {$soc_color_b};\n          }\n          .airinblog-css-soc-top-box-child {\n            border: 1px solid rgba(0,0,0, 0);\n            padding: 8px;\n          }\n          .airinblog-css-soc-top-box-child:hover {\n            border: 1px solid {$primary_color};\n            border-radius: " . $soc_r1 . "% " . $soc_r2 . "% " . $soc_r3 . "% " . $soc_r4 . "%;\n          }\n        ";
                break;
            // Increasing contrast
            case 'a6':
                $css .= '
          .airinblog-css-soc-top-box-child {
            transition: 0.3s;
          }
          .airinblog-css-soc-top-box-child:hover {
            -webkit-filter: contrast(150%);
          }
          .airinblog-css-soc-top-box-anime img {
            background: ' . $soc_color_b . ';
          }
        ';
                break;
            // Hue change
            case 'a7':
                $css .= '
          .airinblog-css-soc-top-box-child:hover {
            -webkit-filter: hue-rotate(100deg);
          }
          .airinblog-css-soc-top-box-anime img {
            background: ' . $soc_color_b . ';
          }
        ';
                break;
            // Color inversion
            case 'a8':
                $css .= '
          .airinblog-css-soc-top-box-child:hover {
            -webkit-filter: invert(100%);
          }
          .airinblog-css-soc-top-box-anime img {
            background: ' . $soc_color_b . ';
          }
        ';
                break;
            // Dimming adjacent links
            case 'a9':
                $css .= "\n          .airinblog-css-soc-top-box:hover .airinblog-css-soc-top-box-anime:not(:hover) {\n            filter: grayscale(100%);\n          }\n          .airinblog-css-soc-top-box-anime img {\n            background: {$soc_color_b};\n          }\n        ";
                break;
            // Link slope
            case 'a10':
                $css .= '
          .airinblog-css-soc-top-box-anime img {
            background: ' . $soc_color_b . ';
          }
          .airinblog-css-soc-top-box-child img:hover {
            transform: rotateZ(-4deg);
          }
        ';
                break;
        }
    }
    //? ---------- Move social links in the header over the image
    if ( get_theme_mod( 'airinblog_cus_header_image_soc', 0 ) == 1 and get_header_image() ) {
        $css .= "\n      .airinblog-css-site-brand-top-1 {\n        display: flex;\n        justify-content: center;\n        align-items: center;\n      }\n      .airinblog-css-site-brand-top-2 {\n        position: absolute;\n        /* Deactivation - display none */\n        display: inline;\n      }\n      .airinblog-css-soc-top-box {\n        justify-content: center;\n        margin: 0 30px;\n        float: none;\n      }\n      .airinblog-css-soc-top-box-child {\n        padding: 8px;\n      }\n      @media (max-width: 750px) {\n        .airinblog-css-soc-top-box-anime img {\n          width: 34px;\n          height: 34px;\n        }\n      }\n      @media (max-width: 580px) {\n        .airinblog-css-soc-top-box-anime img {\n          width: 24px;\n          height: 24px;\n        }\n      }\n      @media (max-width: 450px) {\n        .airinblog-css-site-brand-top-2 {\n          position: relative;\n        }\n        .airinblog-css-site-brand-top-1 {\n          flex-direction: column;\n        }\n        .airinblog-css-soc-top-box {\n          margin: 5px 0;\n        }\n      }\n    ";
        // Responsive styles for social links (over the image) with animation - increase the image with the background
        if ( $soc_anime == 'a2' ) {
            $css .= "\n        @media (max-width: 750px) {\n          .airinblog-css-soc-top-box-anime {\n            width: 42px;\n            height: 42px;\n          }\n        }\n        @media (max-width: 580px) {\n          .airinblog-css-soc-top-box-anime {\n            width: 30px;\n            height: 30px;\n          }\n        }\n      ";
        }
    }
    //? ---------- Enable effect (live picture) header image
    $header_img_live = esc_attr( get_theme_mod( 'airinblog_cus_header_image_live', 0 ) );
    if ( $header_img_live == 1 ) {
        $css .= "\n      .airinblog-css-site-brand-top-img-anime {\n        overflow: hidden;\n      }\n      .airinblog-css-site-brand-top-img-anime img {\n        width: 100%;\n        transform-origin: bottom right;\n        animation: grow 199999ms ease;\n      }\n      @keyframes grow {\n        0% {\n          transform: scale(1);\n        }\n        100% {\n          transform: scale(2);\n        }\n      }\n    ";
    }
    //? ========== ========== ========== Widgets
    // Widget design selection in columns
    $widget_design = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_design', 'v0' ) );
    //? ---------- Background for widgets in columns
    $w_b_color = $content_color;
    if ( !empty( $widget_back_color ) ) {
        $css .= "\n      .airinblog-css-widget-area .widget {\n        background: {$widget_back_color};\n      }\n    ";
        $w_b_color = $widget_back_color;
    }
    //? ---------- General styles when background is enabled in widgets (columns)
    if ( !empty( $widget_back_color ) || $widget_design == 'v1' || $widget_design == 'v2' || $widget_design == 'v3' || $widget_design == 'v4' ) {
        $css .= "\n      .airinblog-css-widget-area .widget {\n        padding: 15px;\n        margin-bottom: 25px;\n      }\n      .widget .dmcwzaf-css-widget-bulk-post-1 {\n        grid-template-columns: repeat(auto-fill, minmax(0, 82px));\n      }\n      .widget .dmcwzaf-css-widget-bulk-post-2 {\n        grid-template-columns: repeat(auto-fill, minmax(0, 129px));\n      }\n    ";
    }
    //? ---------- Widget design selection in columns
    switch ( $widget_design ) {
        // Frame
        case 'v1':
            $css .= "\n        .airinblog-css-widget-area .widget {\n          border: 1px solid {$primary_color};\n          padding: 14px;\n        }\n      ";
            break;
        // Soaring
        case 'v2':
            $css .= '
        .airinblog-css-widget-area .widget {
          box-shadow: 0 0.1em 0.7em rgba(0,0,0,0.1);
        }
      ';
            break;
        // Deepening
        case 'v3':
            $css .= '
        .airinblog-css-widget-area .widget {
          box-shadow: inset 0 0.1em 0.3em rgba(0,0,0,0.2);
        }
      ';
            break;
        // Side shadow
        case 'v4':
            $css .= "\n        .airinblog-css-widget-area .widget {\n          border-left: 1px solid rgba(0,0,0,0.05);\n          box-shadow: 0.7em 0.1em 0.7em rgba(0,0,0,0.1);\n          padding: 14px;\n        }\n        .airinblog-css-left-sidebar .airinblog-css-widget-area .widget {\n          border-left: 0;\n          border-right: 1px solid rgba(0,0,0,0.05);\n          box-shadow: -0.7em 0.1em 0.6em rgba(0,0,0,0.1);\n        }\n      ";
            break;
        // Gradient
        case 'v5':
            $css .= "\n        .airinblog-css-widget-area .widget {\n          background: repeating-linear-gradient(135deg, rgba(0,0,0,0.1) 0px, rgba(0,0,0,0.1) 0px, {$w_b_color} 0.5px, {$w_b_color} 45px);\n        }\n      ";
            break;
    }
    //? ---------- Background for widget headers in columns
    // Background size for widget headers in columns
    $widget_h_back_size = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_back_size', 7 ) );
    if ( $widget_h_back_size !== '0' ) {
        $color_widget_h_back = $menu_color;
        if ( !empty( $widget_h_back_color ) ) {
            $color_widget_h_back = $widget_h_back_color;
        }
        $css .= '
      .airinblog-css-widget-area .widget-title,
      .airinblog-css-widget-woo .widget-title {
        background: ' . $color_widget_h_back . ';
        padding: ' . $widget_h_back_size . 'px;
        padding-top: calc(' . $widget_h_back_size . 'px + 1px);
      }
    ';
        // Most fonts have uneven vertical spacing, so we use "calc"
    }
    //? ---------- Widgets headers text color in columns
    $color_widget_h_text = $menutext_color;
    if ( !empty( $widget_h_text_color ) ) {
        $color_widget_h_text = $widget_h_text_color;
    }
    $css .= "\n    .airinblog-css-widget-area .widget-title,\n    .airinblog-css-widget-woo .widget-title {\n      color: {$color_widget_h_text};\n    }\n  ";
    //? ---------- Titles font of (all) widgets
    $font_h_widget = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_font', 'off' ) );
    $famaly = '';
    if ( in_array( $font_h_widget, $serif ) ) {
        $famaly = 'serif';
    } elseif ( in_array( $font_h_widget, $cursive ) ) {
        $famaly = 'cursive';
    } else {
        $famaly = 'sans-serif';
    }
    if ( $font_h_widget !== 'off' ) {
        $css .= '
      .widget .widget-title {
        font-family: "' . $font_h_widget . '", ' . $famaly . ';
      }
    ';
    }
    //? ---------- Titles text size of (all) widgets
    // Titles text size of (all) widgets
    $widget_h_text_size = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_size', 18 ) );
    if ( $widget_h_text_size != 18 ) {
        $css .= '
      .widget .widget-title {
        font-size: ' . $widget_h_text_size . 'px;
      }
    ';
    }
    //? ---------- Titles of (all) widgets in uppercase
    $widget_h_up = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_up', 1 ) );
    if ( $widget_h_up != 1 ) {
        $css .= "\n      .widget .widget-title {\n        text-transform: none;\n      }\n    ";
    }
    //? ---------- Align the titles of (all) widgets to the center
    // Align the titles of (all) widgets to the center
    $widget_h_center = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_center', 0 ) );
    if ( $widget_h_center == 1 ) {
        $css .= "\n      .widget-title {\n        text-align: center;\n      }\n    ";
    }
    //? ---------- Underline titles of (all) widgets
    // Underline titles of (all) widgets
    $widget_h_size_border = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_border_size', 2 ) );
    switch ( get_theme_mod( 'airinblog_cus_widget_sidebar_h_border', 'v4' ) ) {
        // Left and down
        case 'v1':
            $css .= '
        .widget-title::after {
          content: "";
          display: block;
          height: ' . $widget_h_size_border . 'px;
          width: 22%;
          margin-top: 5px;
          background: ' . $primary_color . ';
        }
      ';
            break;
        // Center and bottom
        case 'v2':
            $css .= '
        .widget-title::after {
          content: "";
          display: block;
          height: ' . $widget_h_size_border . 'px;
          width: 30%;
          margin: 0 auto;
          margin-top: 5px;
          background: ' . $primary_color . ';
          text-align: center;
        }
      ';
            break;
        // Full width
        case 'v3':
            $css .= '
        .widget-title {
          border-bottom: ' . $widget_h_size_border . 'px solid ' . $primary_color . ';
        }
      ';
            break;
        // Border left
        case 'v4':
            $css .= '
        .widget .widget-title {
          border-left: ' . $widget_h_size_border . 'px solid ' . $primary_color . ';
        }
      ';
            break;
    }
    //? ---------- Design for lists of posts and pages in basic widgets
    switch ( get_theme_mod( 'airinblog_cus_widget_sidebar_design_post', 'v1' ) ) {
        // File
        case 'v1':
            $css .= '
        .widget:not(.widget_block).widget_recent_entries li:before,
        .widget:not(.widget_block).widget_pages li:before {
          font-family: "icomoon";
          content: "\\e926";
          text-rendering: auto;
          color: ' . $primary_color . ';
        }
        .widget_recent_entries li:before {
          margin-right: 5px;
        }
        .widget_pages li:before {
          margin-right: 10px;
        }
      ';
            break;
        // Round dots
        case 'v2':
            $css .= '
        .widget:not(.widget_block).widget_recent_entries ul, .widget:not(.widget_block).widget_pages ul {
          padding-left: 20px;
        }
        .widget:not(.widget_block).widget_recent_entries li, .widget:not(.widget_block).widget_pages li {
          list-style-type: disc;
        }
        .widget:not(.widget_block).widget_recent_entries li::marker, .widget:not(.widget_block).widget_pages li::marker {
          color: ' . $primary_color . ';
        }
      ';
            break;
        // Square dots
        case 'v3':
            $css .= '
        .widget:not(.widget_block).widget_recent_entries ul, .widget:not(.widget_block).widget_pages ul {
          padding-left: 20px;
        }
        .widget:not(.widget_block).widget_recent_entries li, .widget:not(.widget_block).widget_pages li {
          list-style-type: square;
        }
        .widget:not(.widget_block).widget_recent_entries li::marker, .widget:not(.widget_block).widget_pages li::marker {
          color: ' . $primary_color . ';
        }
      ';
            break;
        // Thin border
        case 'v4':
            $css .= '
        .widget:not(.widget_block).widget_recent_entries a, .widget:not(.widget_block).widget_pages a {
          border-left: 2px solid ' . $primary_color . ';
          padding-left: 8px;
        }
      ';
            break;
    }
    //? ---------- Design for category lists and archives in basic widgets
    switch ( get_theme_mod( 'airinblog_cus_widget_sidebar_design_cat', 'v1' ) ) {
        // Folder
        case 'v1':
            $css .= '
        .widget_categories li:before, .widget_archive li:before {
          font-family: "icomoon";
          text-rendering: auto;
          margin-right: 8px;
          color: ' . $primary_color . ';
        }
        .widget_categories li:before {
          content: "\\e930";
        }
        .widget_archive li:before {
          content: "\\e920";
        }
      ';
            break;
        // Box
        case 'v2':
            $css .= '
        .widget_categories li:before, .widget_archive li:before {
          content: "\\e905 ";
          font-family: "icomoon";
          text-rendering: auto;
          margin-right: 8px;
          color: ' . $primary_color . ';
        }
      ';
            break;
        // Thick border
        case 'v3':
            $css .= '
        .widget_categories a, .widget_archive a {
          border-left: 4px solid ' . $primary_color . ';
          padding-left: 8px;
        }
      ';
            break;
    }
    //? ---------- Text color of menu items of basic classic widgets
    if ( !empty( $widget_menu_text_color ) ) {
        $css .= "\n      .widget_nav_menu a {\n        color: {$widget_menu_text_color};\n      }\n    ";
    }
    //? ---------- Text color of menu items of basic classic widgets (on hover)
    if ( !empty( $widget_menu_hover_color ) ) {
        $css .= "\n      .widget_nav_menu a:hover {\n        color: {$widget_menu_hover_color};\n      }\n    ";
    }
    //? ---------- Background color of menu items of basic classic widgets
    if ( !empty( $widget_menu_back_color ) ) {
        $css .= "\n      .widget_nav_menu a {\n        background: {$widget_menu_back_color};\n        margin: 10px 0;\n        padding: 5px 10px;\n      }\n\n    ";
    }
    //? ---------- Design for menu lists in basic classic widgets
    switch ( get_theme_mod( 'airinblog_cus_widget_sidebar_design_menu', 'v1' ) ) {
        // Arrow
        case 'v1':
            $css .= '
        .widget_nav_menu a {
          display: flex;
          align-items: center;
        }
        .widget_nav_menu a:before {
          content: "\\e929";
          font-family: "icomoon";
          text-rendering: auto;
          margin-right: 8px;
          color: ' . $primary_color . ';
          display: flex;
        }
      ';
            break;
        // Square
        case 'v2':
            $css .= '
        .widget_nav_menu ul {
          padding-left: 20px;
        }
        .widget_nav_menu li {
          list-style-type: square;
        }
        .widget_nav_menu li::marker {
          color: ' . $primary_color . ';
        }
        .widget_nav_menu a {
          display: flex;
          align-items: center;
        }
      ';
            break;
        // Icon (sign)
        case 'v3':
            $css .= '
        .widget_nav_menu a {
          display: flex;
          align-items: center;
          padding: 0;
        }
        .widget_nav_menu a:before {
          font-family: "icomoon";
          content: "\\e928";
          text-rendering: auto;
          background: ' . $primary_color . ';
          color: ' . $color_lite . ';
          padding: 10px;
          margin-right: 10px;
          display: flex;
        }
      ';
            break;
        default:
            $css .= '
      .widget_nav_menu a {
        display: flex;
        align-items: center;
      }
    ';
            break;
    }
    //? ========== ========== ========== Footer
    //? ---------- Footer background color
    $footer_color_back = $menu_color;
    if ( !empty( $footer_back_color ) ) {
        $footer_color_back = $footer_back_color;
    }
    $css .= "\n    .airinblog-css-site-footer {\n      background: {$footer_color_back};\n    }\n  ";
    //? ---------- Widgets headers text color in footer
    $color_widget_footer_h_text = $menutext_color;
    if ( !empty( $widget_footer_h_color ) ) {
        $color_widget_footer_h_text = $widget_footer_h_color;
    }
    $css .= "\n    .airinblog-css-footer-widgets .widget-title {\n      color: {$color_widget_footer_h_text};\n    }\n  ";
    //? ---------- Footer text color
    $footer_color_text = $menutext_color;
    if ( !empty( $footer_text_color ) ) {
        $footer_color_text = $footer_text_color;
    }
    $css .= "\n    .airinblog-css-site-footer {\n      color: {$footer_color_text};\n    }\n  ";
    //? ---------- Footer link color
    if ( !empty( $footer_a_color ) ) {
        $css .= "\n      .airinblog-css-site-footer a {\n        color: {$footer_a_color};\n      }\n    ";
    } else {
        if ( $menutext_color !== '#fffffb' ) {
            $css .= "\n      .airinblog-css-site-footer a {\n        color: {$menutext_color};\n      }\n    ";
        }
    }
    //?---------- Footer link color (on hover)
    if ( !empty( $footer_a_hover ) ) {
        $css .= "\n      .airinblog-css-site-footer a:hover {\n        color: {$footer_a_hover};\n      }\n    ";
    }
    //?---------- Footer elements color
    $footer_color_primary = $primary_color;
    if ( !empty( $footer_primary_color ) ) {
        $footer_color_primary = $footer_primary_color;
    }
    $css .= '
    .airinblog-css-site-footer button,
    .airinblog-css-site-footer input[type="button"],
    .airinblog-css-site-footer input[type="reset"],
    .airinblog-css-site-footer input[type="submit"],
    .airinblog-css-site-footer .widget-title::after {
      background: ' . $footer_color_primary . ';
    }
    .airinblog-css-site-footer .widget_categories li:before,
    .airinblog-css-site-footer .widget_archive li:before,
    .airinblog-css-site-footer .widget_recent_entries li:before,
    .airinblog-css-site-footer .widget:not(.widget_block).widget_recent_entries li:before,
    .airinblog-css-site-footer .widget:not(.widget_block).widget_pages li:before,
    .airinblog-css-site-footer .widget:not(.widget_block).widget_recent_entries li::marker,
    .airinblog-css-site-footer .widget:not(.widget_block).widget_pages li::marker,
    .airinblog-css-site-footer .widget_categories li:before,
    .airinblog-css-site-footer .widget_archive li:before,
    .airinblog-css-site-footer .widget_nav_menu a:before,
    .airinblog-css-site-footer .widget_nav_menu li::marker {
      color: ' . $footer_color_primary . ';
    }
    .airinblog-css-site-footer .widget_search input[type="text"],
    .airinblog-css-site-footer input[type="text"],
    .airinblog-css-site-footer input[type="email"],
    .airinblog-css-site-footer input[type="url"],
    .airinblog-css-site-footer input[type="password"],
    .airinblog-css-site-footer input[type="search"],
    .airinblog-css-site-footer input[type="number"],
    .airinblog-css-site-footer input[type="tel"],
    .airinblog-css-site-footer input[type="range"],
    .airinblog-css-site-footer input[type="date"],
    .airinblog-css-site-footer input[type="month"],
    .airinblog-css-site-footer input[type="week"],
    .airinblog-css-site-footer input[type="time"],
    .airinblog-css-site-footer input[type="datetime"],
    .airinblog-css-site-footer input[type="datetime-local"],
    .airinblog-css-site-footer input[type="color"],
    .airinblog-css-site-footer select,
    .airinblog-css-site-footer textarea,
    .airinblog-css-site-footer .widget-title,
    .airinblog-css-site-footer .widget_block .wp-block-quote,
    .airinblog-css-site-footer .widget:not(.widget_block).widget_recent_entries a,
    .airinblog-css-site-footer .widget:not(.widget_block).widget_pages a,
    .airinblog-css-site-footer .widget_categories a, .widget_archive a {
      border-color: ' . $footer_color_primary . ';
    }
  ';
    //? ---------- Bottom menu text size
    $footer_menu_size = esc_attr( get_theme_mod( 'airinblog_cus_footer_menu_size', 14 ) );
    if ( $footer_menu_size != 14 ) {
        $css .= '
    .airinblog-css-footer-menu {
        font-size: ' . $footer_menu_size . 'px;
      }
    ';
    }
    //? ========== ========== ========== Connecting the styles file and loading new css
    if ( !empty( $css ) ) {
        wp_add_inline_style( 'airinblog-style-custom', $css );
    }
}

add_action( 'wp_enqueue_scripts', 'airinblog_fun_set_css', 1 );
// ========== ========== ==================== ========== ==================== ========== ==================== ========== ==================== ========== ==========
// ========== ========== ==================== ========== ==================== ========== ==================== ========== ==================== ========== ==========
// ========== ========== ==================== ========== ==================== ========== ==================== ========== ==================== ========== ==========
//? ========== ========== ========== Filters in body_class
function airinblog_fun_body_classes(  $classes  ) {
    // Adds a group blog class to blogs with more than 1 published author
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
    // Add hfeed class to pages is_singular
    if ( !is_singular() ) {
        $classes[] = 'hfeed';
    }
    // Class with theme version (for flexible compatibility with older versions)
    $child = '';
    if ( is_child_theme() ) {
        $child = 'ch-';
    }
    $classes[] = 'abf-' . $child . AIRINBLOG_VERSION;
    return $classes;
}

add_filter( 'body_class', 'airinblog_fun_body_classes' );
//? ========== ========== ========== Template orientation
//?---------- Including sidebar css class in body tag
add_filter( 'body_class', 'airinblog_fun_body_class' );
function airinblog_fun_body_class(  $classes  ) {
    $airinblog_lay = get_theme_mod( 'airinblog_cus_lay_all', 'right' );
    $airinblog_lay_home = get_theme_mod( 'airinblog_cus_lay_home', 'right' );
    if ( $airinblog_lay == 'right' && !is_front_page() || $airinblog_lay_home == 'right' && is_front_page() ) {
        $classes[] = '';
    } elseif ( $airinblog_lay == 'left' && !is_front_page() || $airinblog_lay_home == 'left' && is_front_page() ) {
        $classes[] = 'airinblog-css-left-sidebar';
    } elseif ( $airinblog_lay == 'no_sidebar_full' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_full' && is_front_page() ) {
        $classes[] = 'airinblog-css-no-sidebar-full';
    } elseif ( $airinblog_lay == 'no_sidebar_center' && !is_front_page() || $airinblog_lay_home == 'no_sidebar_center' && is_front_page() ) {
        $classes[] = 'airinblog-css-no-sidebar-center';
    }
    return $classes;
}

//?---------- Change site width (full width site)
add_filter( 'body_class', 'airinblog_fun_body_class_max_width' );
function airinblog_fun_body_class_max_width(  $classes  ) {
    $max_width = esc_attr( get_theme_mod( 'airinblog_cus_lay_max_width', 0 ) );
    if ( $max_width == 1 ) {
        $classes[] = 'airinblog-css-full-max-width';
    }
    return $classes;
}

//?-----------------------------------------------------------------------------------------------------------
//?---------- Other features and filters
//?-----------------------------------------------------------------------------------------------------------
//? ========== ========== ========== Turning the sidebar on and off
if ( !function_exists( 'airinblog_fun_sidebar_select' ) ) {
    function airinblog_fun_sidebar_select() {
        $airinblog_lay = get_theme_mod( 'airinblog_cus_lay_all', 'right' );
        $airinblog_lay_home = get_theme_mod( 'airinblog_cus_lay_home', 'right' );
        if ( $airinblog_lay == 'right' && !is_front_page() || $airinblog_lay_home == 'right' && is_front_page() || $airinblog_lay == 'left' && !is_front_page() || $airinblog_lay_home == 'left' && is_front_page() ) {
            if ( !function_exists( 'elementor_theme_do_location' ) || !elementor_theme_do_location( 'airinblog_elementor_sidebar' ) ) {
                get_sidebar();
            }
        }
    }

}
//? ========== ========== ========== Fallback data for the menu (if the menu is empty)
function airinblog_fun_top_menu_list_categories() {
    $args = array(
        'echo'       => 0,
        'title_li'   => '',
        'hide_empty' => 0,
        'number'     => 4,
        'depth'      => 1,
        'orderby'    => 'count',
        'order'      => 'DESC',
    );
    $out = '<ul class="menu">' . wp_list_categories( $args ) . '</ul>';
    echo wp_kses_post( $out );
}

function airinblog_fun_main_menu_list_categories() {
    $args = array(
        'echo'       => 0,
        'title_li'   => '',
        'hide_empty' => 0,
        'number'     => 8,
        'depth'      => 3,
    );
    $out = '<ul class="menu">' . wp_list_categories( $args ) . '</ul>';
    echo wp_kses_post( $out );
}

//? ========== ========== ========== Changing the length of description text in post blocks for search pages
add_filter( 'excerpt_length', 'airinblog_fun_excerpt_length' );
function airinblog_fun_excerpt_length(  $length  ) {
    // Number of words
    return 15;
}

add_filter( 'excerpt_more', 'airinblog_fun_excerpt_more' );
function airinblog_fun_excerpt_more(  $more  ) {
    return '..';
}

//? ========== ========== ========== Changing the length of description text in post blocks for categories pages (compatible with "show more" pagination)
function airinblog_fun_excerpt() {
    global $post;
    // Number of characters
    $letters = 150;
    $new_let = get_theme_mod( 'airinblog_cus_cat_style_letters', 150 );
    if ( $new_let != 150 ) {
        $letters = $new_let;
    }
    // Link name after tag <!--more-->
    $tag_more_link = '';
    // Else
    $tag_more_text = '...';
    // Link at the end of the words (If there is no tag <!--more-->)
    $more_link = '';
    // Else
    $more_text = '...';
    // Clear content
    $text = ( $post->post_excerpt ?: $post->post_content );
    $text = preg_replace( '~\\[([a-z0-9_-]+)[^\\]]*\\](?!\\().*?\\[/\\1\\]~is', '', $text );
    $text = preg_replace( '~\\[/?[^\\]]*\\](?!\\()~', '', $text );
    $text = preg_replace( '~(?<=\\s)https?://.+\\s~', '', $text );
    $text = str_replace( '&nbsp;', '', $text );
    $text = trim( $text );
    // Yes tag <!--more-->
    if ( strpos( $text, '<!--more-->' ) ) {
        $mm = '';
        preg_match( '/(.*)<!--more-->/s', $text, $mm );
        $text = trim( $mm[1] );
        $text = strip_tags( $text );
        if ( $tag_more_link ) {
            $text_append = sprintf(
                ' <a href="%s#more-%d">%s</a>',
                get_permalink( $post ),
                $post->ID,
                $tag_more_link
            );
        } else {
            $text_append = $tag_more_text;
        }
    } else {
        $text = strip_tags( $text );
        $has_tags = false !== strpos( $text, '<' );
        // Collect html tags
        if ( $has_tags ) {
            $tags_collection = [];
            $nn = 0;
            $text = preg_replace_callback( '/<[^>]+>/', static function ( $match ) use(&$tags_collection, &$nn) {
                $nn++;
                $holder = "~{$nn}";
                $tags_collection[$holder] = $match[0];
                return $holder;
            }, $text );
        }
        // Cut text
        $cuted_text = mb_substr( $text, 0, $letters );
        if ( $text !== $cuted_text ) {
            if ( $more_link ) {
                $append = sprintf(
                    ' <a href="%s#more-%d">%s</a>',
                    get_permalink( $post ),
                    $post->ID,
                    $more_link
                );
            } else {
                $append = $more_text;
            }
            // Del last word
            $text = preg_replace( '/(.*)\\s\\S*$/s', '\\1' . $append, trim( $cuted_text ) );
        }
        // Bring html tags back
        if ( $has_tags ) {
            $text = strtr( $text, $tags_collection );
            $text = force_balance_tags( wp_filter_post_kses( $text ) );
        }
    }
    // Re-cleaning required
    $text = trim( $text );
    if ( !empty( $text ) ) {
        // Add spaces and wrap in container <p></p>
        $text = preg_replace( ["/\r/", "/\n{2,}/", "/\n/"], ['', ' ', ' '], "<p>{$text}</p>" );
        // Add a "more" tag
        if ( isset( $text_append ) ) {
            $text .= $text_append;
        }
    }
    return $text;
}

//? ========== ========== ========== Remove prefix "Category" in category headings
if ( get_theme_mod( 'airinblog_cus_cat_style_h_prefix', 0 ) == 1 ) {
    add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
    function artabr_remove_name_cat(  $title  ) {
        if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        }
        return $title;
    }

}
//? ========== ========== ========== Changing the length of headers (clipping headers)
function airinblog_fun_title_small_long(  $count, $after  ) {
    $title = get_the_title();
    if ( mb_strlen( $title ) > $count ) {
        $title = mb_substr( $title, 0, $count );
    } else {
        $after = '';
    }
    echo esc_attr( $title ) . esc_attr( $after );
}

//? ========== ========== ========== Remove URL box in comments
if ( esc_attr( get_theme_mod( 'airinblog_cus_post_comments_url', 0 ) ) == 1 ) {
    add_filter( 'comment_form_default_fields', 'airinblog_fun_unset_comment_url' );
    function airinblog_fun_unset_comment_url(  $fields  ) {
        if ( isset( $fields['url'] ) ) {
            unset($fields['url']);
        }
        return $fields;
    }

}
//? ========== ========== ========== Number of post and page views
if ( !function_exists( 'dmcwzmulti_fun_view_singular' ) ) {
    if ( get_theme_mod( 'airinblog_cus_post_meta_view', 1 ) == 1 || get_theme_mod( 'airinblog_cus_cat_meta_activ_view', 1 ) == 1 ) {
        function dmcwzmulti_fun_view_singular() {
            //? ---------- Counter function
            function dmcwzmulti_fun_count_views(  $postID  ) {
                $count_key = 'views_count';
                $count = get_post_meta( $postID, $count_key, true );
                if ( $count == '' ) {
                    $count = 0;
                    delete_post_meta( $postID, $count_key );
                    add_post_meta( $postID, $count_key, '0' );
                } else {
                    $count++;
                    update_post_meta( $postID, $count_key, $count );
                }
            }

            //? ---------- Counter display function
            function dmcwzmulti_fun_get_views(  $postID  ) {
                $count_key = 'views_count';
                $count = get_post_meta( $postID, $count_key, true );
                if ( $count == '' ) {
                    delete_post_meta( $postID, $count_key );
                    add_post_meta( $postID, $count_key, '0' );
                    return "0";
                }
                return $count;
            }

            //? ---------- Counter hook
            function dmcwzmulti_fun_views_hook() {
                if ( is_singular() ) {
                    dmcwzmulti_fun_count_views( get_the_ID() );
                }
            }

            add_action( 'wp_footer', 'dmcwzmulti_fun_views_hook' );
        }

        dmcwzmulti_fun_view_singular();
    }
}
//? ========== ========== ========== Image compression quality setting (WP is set to 90 by default)
function airinblog_fun_ima_full_quality(  $quality  ) {
    return 100;
}

add_filter( 'jpeg_quality', 'airinblog_fun_ima_full_quality' );
add_filter( 'wp_editor_set_quality', 'airinblog_fun_ima_full_quality' );
//? ========== ========== ========== Demo static widgets
if ( get_theme_mod( 'airinblog_cus_widget_sidebar_demo', 0 ) == 0 ) {
    // Add static widgets
    $url_theme = get_template_directory_uri();
    $wite_theme = strstr( $url_theme, 'wp-themes' );
    if ( $wite_theme ) {
        function airinblog_fun_sidebar_1_demo() {
            ?>
        <section id="pages" class="widget widget_pages">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget example (Pages)', 'airin-blog' );
            ?></div>
          <nav>
            <ul>
              <?php 
            wp_list_pages( array(
                'title_li' => '',
                'number'   => 5,
            ) );
            ?>
            </ul>
          </nav>
        </section>
        <section id="categories" class="widget widget_categories">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget example (Categories)', 'airin-blog' );
            ?></div>
          <nav>
            <ul>
              <?php 
            wp_list_categories( array(
                'title_li' => '',
                'number'   => 5,
            ) );
            ?>
            </ul>
          </nav>
        </section>
        <section id="archives" class="widget widget_archive">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget example (Archives)', 'airin-blog' );
            ?></div>
          <nav>
            <ul>
              <?php 
            wp_get_archives( array(
                'limit' => 5,
            ) );
            ?>
            </ul>
          </nav>
        </section>
        <section id="tag_cloud" class="widget widget_tag_cloud">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget example (Tag cloud)', 'airin-blog' );
            ?></div>
          <nav>
            <div class="tagcloud">
              <?php 
            wp_tag_cloud( array(
                'number' => 15,
            ) );
            ?>
            </div>
          </nav>
        </section>
        <?php 
        }

        function airinblog_fun_footer_sidebar_one_demo() {
            ?>
        <section id="categories" class="widget widget_categories">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget (Categories)', 'airin-blog' );
            ?></div>
          <nav>
            <ul>
              <?php 
            wp_list_categories( array(
                'title_li' => '',
                'number'   => 5,
            ) );
            ?>
            </ul>
          </nav>
        </section>
        <?php 
        }

        function airinblog_fun_footer_sidebar_two_demo() {
            ?>
        <section id="archives" class="widget widget_archive">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget example (Archives)', 'airin-blog' );
            ?></div>
          <nav>
            <ul>
              <?php 
            wp_get_archives( array(
                'limit' => 4,
            ) );
            ?>
            </ul>
          </nav>
        </section>
        <?php 
        }

        function airinblog_fun_footer_sidebar_three_demo() {
            ?>
        <section id="categories" class="widget widget_categories">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget example (Categories)', 'airin-blog' );
            ?></div>
          <nav>
            <ul>
              <?php 
            wp_list_categories( array(
                'title_li' => '',
                'number'   => 2,
                'orderby'  => 'count',
                'order'    => 'DESC',
            ) );
            ?>
            </ul>
          </nav>
        </section>
        <?php 
        }

        function airinblog_fun_footer_sidebar_four_demo() {
            ?>
        <section id="calendar" class="widget widget_calendar">
          <div class="widget-title"><?php 
            esc_html_e( 'Widget (Calendar)', 'airin-blog' );
            ?></div>
            <div id="calendar_wrap" class="calendar_wrap">
              <?php 
            get_calendar();
            ?>
            </div>
        </section>
        <?php 
        }

    }
}
//? ========== ========== ========== Bottom sidebars
function airinblog_fun_sidebar_footer_css() {
    $one = 0;
    $two = 0;
    $three = 0;
    $four = 0;
    if ( is_active_sidebar( 'sidebar-footer-one' ) ) {
        $one = 1;
        function airinblog_fun_footer_sidebar_one() {
            echo '<div class="airinblog-css-footer-widget-one">';
            dynamic_sidebar( 'sidebar-footer-one' );
            if ( function_exists( 'airinblog_fun_footer_sidebar_one_demo' ) ) {
                airinblog_fun_footer_sidebar_one_demo();
            }
            echo '</div>';
        }

        add_action( 'airinblog_hook_footer_sidebar', 'airinblog_fun_footer_sidebar_one' );
    }
    if ( is_active_sidebar( 'sidebar-footer-two' ) ) {
        $two = 1;
        function airinblog_fun_footer_sidebar_two() {
            echo '<div class="airinblog-css-footer-widget-two">';
            dynamic_sidebar( 'sidebar-footer-two' );
            if ( function_exists( 'airinblog_fun_footer_sidebar_two_demo' ) ) {
                airinblog_fun_footer_sidebar_two_demo();
            }
            echo '</div>';
        }

        add_action( 'airinblog_hook_footer_sidebar', 'airinblog_fun_footer_sidebar_two' );
    }
    if ( is_active_sidebar( 'sidebar-footer-three' ) ) {
        $three = 1;
        function airinblog_fun_footer_sidebar_three() {
            echo '<div class="airinblog-css-footer-widget-three">';
            dynamic_sidebar( 'sidebar-footer-three' );
            if ( function_exists( 'airinblog_fun_footer_sidebar_three_demo' ) ) {
                airinblog_fun_footer_sidebar_three_demo();
            }
            echo '</div>';
        }

        add_action( 'airinblog_hook_footer_sidebar', 'airinblog_fun_footer_sidebar_three' );
    }
    if ( is_active_sidebar( 'sidebar-footer-four' ) ) {
        $four = 1;
        function airinblog_fun_footer_sidebar_four() {
            echo '<div class="airinblog-css-footer-widget-four">';
            dynamic_sidebar( 'sidebar-footer-four' );
            if ( function_exists( 'airinblog_fun_footer_sidebar_four_demo' ) ) {
                airinblog_fun_footer_sidebar_four_demo();
            }
            echo '</div>';
        }

        add_action( 'airinblog_hook_footer_sidebar', 'airinblog_fun_footer_sidebar_four' );
    }
    $sidebars = $one + $two + $three + $four;
    if ( $sidebars == 2 ) {
        $sidebar_css = '
      [class^="airinblog-css-footer-widget-"] {
        width: 47%;
      }
      @media (max-width: 1150px) {
        .airinblog-css-footer-widgets .widget {
          margin: 0 20px 25px 20px;
        }
      }
      @media (max-width: 600px) {
        .airinblog-css-footer-widgets {
          flex-direction: column;
          align-items: center;
        }
        [class^="airinblog-css-footer-widget-"] {
          width: 100%;
        }
      }
    ';
    } else {
        if ( $sidebars == 3 ) {
            $sidebar_css = '
      [class^="airinblog-css-footer-widget-"] {
        width: 30%;
      }
      @media (max-width: 1150px) {
        .airinblog-css-footer-widgets {
          flex-wrap: nowrap;
        }
        .airinblog-css-footer-widgets .widget {
          margin: 0 20px 25px 20px;
        }
      }
      @media (max-width: 800px) {
        .airinblog-css-footer-widgets {
          flex-direction: column;
          align-items: center;
        }
        [class^="airinblog-css-footer-widget-"] {
          width: 100%;
        }
      }
      @media (max-width: 400px) {
        .airinblog-css-footer-widgets .widget {
          margin: 0 0 25px 0;
        }
      }
    ';
        } else {
            if ( $sidebars == 1 ) {
                $sidebar_css = '
      [class^="airinblog-css-footer-widget-"] {
        width: 100%;
        max-width: 100%;
      }
    ';
            } else {
                $sidebar_css = '
      [class^="airinblog-css-footer-widget-"] {
        width: 23%;
      }
      @media (max-width: 1150px) {
        .airinblog-css-footer-widgets .widget {
          margin: 0 20px 25px 20px;
        }
      }
      @media (max-width: 960px) {
        [class^="airinblog-css-footer-widget-"] {
          width: 48%;
        }
      }
      @media (max-width: 600px) {
        .airinblog-css-footer-widgets {
          flex-direction: column;
          align-items: center;
        }
        [class^="airinblog-css-footer-widget-"] {
          width: 100%;
        }
      }
      @media (max-width: 400px) {
        .airinblog-css-footer-widgets .widget {
          margin: 0 0 25px 0;
        }
      }
    ';
            }
        }
    }
    wp_add_inline_style( 'airinblog-style-custom', $sidebar_css );
}

add_action( 'wp_enqueue_scripts', 'airinblog_fun_sidebar_footer_css', 1 );
//? ========== ========== ========== Loading posts in categories (Load more)
if ( get_theme_mod( 'airinblog_cus_pagination_variant', 'v1' ) == 'v2' ) {
    if ( get_theme_mod( 'airinblog_cus_pagination_cat_activ', 1 ) == 1 || get_theme_mod( 'airinblog_cus_pagination_home_activ', 1 ) == 1 ) {
        function airinblog_fun_loadmore_script() {
            wp_enqueue_script(
                'airinblog-script-loadmore',
                get_template_directory_uri() . '/js/loadmore.js',
                array('jquery'),
                AIRINBLOG_VERSION,
                true
            );
            wp_localize_script( 'airinblog-script-loadmore', 'airinblog_localize_loadmore', array(
                'delay' => esc_html__( "Loading...", 'airin-blog' ),
                'more'  => esc_html__( "Show more", 'airin-blog' ),
            ) );
        }

        add_action( 'wp_enqueue_scripts', 'airinblog_fun_loadmore_script' );
        function airinblog_fun_loadmore_post_cat() {
            $args = unserialize( stripslashes( $_POST['query'] ) );
            $args['paged'] = $_POST['page'] + 1;
            $args['post_status'] = 'publish';
            $q = new WP_Query($args);
            if ( $q->have_posts() ) {
                while ( $q->have_posts() ) {
                    $q->the_post();
                    get_template_part( 'template-parts/content-archive' );
                }
            }
            wp_reset_postdata();
            die;
        }

        add_action( 'wp_ajax_airinblog-action-loadmore', 'airinblog_fun_loadmore_post_cat' );
        add_action( 'wp_ajax_nopriv_airinblog-action-loadmore', 'airinblog_fun_loadmore_post_cat' );
    }
}
//? ========== ========== ========== Function to display thumbnails in categories
function airinblog_fun_post_thumb_cat() {
    $win = get_theme_mod( 'airinblog_cus_cat_style_win', 'w3' );
    if ( !in_array( "airinblog-css-no-sidebar-full", get_body_class() ) ) {
        switch ( $win ) {
            case 'w2':
                $size = '415x233';
                break;
            case 'w3':
                $size = '270x152';
                break;
            case 'w4':
                $size = '195x110';
                break;
            case 'w5':
                $size = '155x87';
                break;
            case 'w1':
                $size = '850x478';
                break;
        }
    } else {
        switch ( $win ) {
            case 'w2':
                $size = '578x325';
                break;
            case 'w3':
                $size = '378x213';
                break;
            case 'w4':
                $size = '270x152';
                break;
            case 'w5':
                $size = '215x121';
                break;
            case 'w1':
                $size = '1175x661';
                break;
        }
    }
    $alt = get_theme_mod( 'airinblog_cus_seo_alt_nofoto', 'No photo' );
    $nofoto = get_theme_mod( 'airinblog_cus_cat_style_nofoto_none', 0 );
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'airinblog-img-' . $size );
    } elseif ( $nofoto == 0 ) {
        ?>
    <img src="<?php 
        echo esc_url( get_template_directory_uri() . '/img/no-photo/no-foto-' . $size . '.png' );
        ?>" 
      alt="<?php 
        echo esc_attr( $alt );
        ?>">
    <?php 
    }
}

//? ========== ========== ========== The function of displaying the main photo of a post or page
function airinblog_fun_thumb_post_page() {
    $img_w = 0;
    $img_h = 0;
    if ( $img_w >= 1 && $img_h >= 1 ) {
        the_post_thumbnail( array($img_w, $img_h) );
    } else {
        if ( get_theme_mod( 'airinblog_cus_lay_max_width', 0 ) == 1 ) {
            $size = '1920x1080';
        } else {
            if ( is_page_template() ) {
                if ( !is_page_template( ['templates/post-nosidebar-full.php', 'templates/page-nosidebar-full.php'] ) ) {
                    $size = '850x478';
                } else {
                    $size = '1175x661';
                }
            } else {
                if ( !in_array( "airinblog-css-no-sidebar-full", get_body_class() ) ) {
                    $size = '850x478';
                } else {
                    $size = '1175x661';
                }
            }
        }
        the_post_thumbnail( 'airinblog-img-' . $size );
    }
}

//? ========== ========== ========== Removes H2 from pagination
if ( get_theme_mod( 'airinblog_cus_pagination_tag_h2', 0 ) == 1 ) {
    add_filter(
        'navigation_markup_template',
        'airinblog_fun_pagi_nav_h2',
        10,
        2
    );
    function airinblog_fun_pagi_nav_h2(  $template, $class  ) {
        return '
		<nav class="navigation %1$s" role="navigation">
			<div class="screen-reader-text">%2$s</div>
			<div class="nav-links">%3$s</div>
		</nav>
		';
    }

}
//? ========== ========== ========== Header image link
function airinblog_fun_header_image_site() {
    ?>
  <div class="airinblog-css-site-brand-top-img-anime">
    <img src="<?php 
    header_image();
    ?>" width="<?php 
    echo absint( get_custom_header()->width );
    ?>" height="<?php 
    echo absint( get_custom_header()->height );
    ?>">
  </div>
  <?php 
}

function airinblog_fun_head_image_link() {
    $image_link = get_theme_mod( 'airinblog_cus_header_image_link' );
    if ( $image_link ) {
        echo '<a href="' . esc_url( $image_link ) . '">';
        airinblog_fun_header_image_site();
        echo '</a>';
    } else {
        airinblog_fun_header_image_site();
    }
}

//? ========== ========== ========== Date display
function airinblog_fun_top_date() {
    $date_var = esc_attr( get_theme_mod( 'airinblog_cus_date', 1 ) );
    if ( $date_var == 2 ) {
        $date_display = get_option( 'date_format' );
    } else {
        // Display weeks
        $week = esc_attr( get_theme_mod( 'airinblog_cus_date_week', 'before' ) );
        $week_before = '';
        $week_after = '';
        if ( $week == 'before' ) {
            $week_before = 'l, ';
        } else {
            if ( $week == 'after' ) {
                $week_after = ', l';
            }
        }
        // Separator between numbers
        $sup_set = esc_attr( get_theme_mod( 'airinblog_cus_date_sup', 1 ) );
        switch ( $sup_set ) {
            case 1:
                $sup = ' ';
                break;
            case 2:
                $sup = '-';
                break;
            case 3:
                $sup = '.';
                break;
            case 4:
                $sup = '/';
                break;
            default:
                $sup = ' | ';
                break;
        }
        $sup_year = $sup;
        // Display year
        $date_y = esc_attr( get_theme_mod( 'airinblog_cus_date_year', 1 ) );
        $date_year = 'Y';
        if ( $date_y != 1 ) {
            $date_year = '';
            $sup_year = '';
        }
        // Month in letters
        $date_month = esc_attr( get_theme_mod( 'airinblog_cus_date_month', 1 ) );
        $date_format = esc_attr( get_theme_mod( 'airinblog_cus_date_format', 1 ) );
        if ( $date_month != 1 ) {
            if ( $date_format == 1 ) {
                $date_display = ' j' . $sup . 'm' . $sup_year . $date_year;
            } else {
                if ( $date_format == 2 ) {
                    $date_display = 'm' . $sup . 'j' . $sup_year . $date_year;
                } else {
                    $date_display = $date_year . $sup_year . 'm' . $sup . 'j';
                }
            }
        } else {
            if ( $date_format == 1 ) {
                $date_display = 'j F ' . $date_year;
            } else {
                if ( $date_format == 2 ) {
                    $date_display = 'F  j' . $sup_year . $date_year;
                } else {
                    $date_display = $date_year . ' F  j';
                }
            }
        }
        $date_display = $week_before . $date_display . $week_after;
    }
    ?>
  <div class="airinblog-css-top-left">
    <div class="airinblog-css-top-date">
      <?php 
    echo wp_date( $date_display );
    ?>
    </div>
  </div>
  <?php 
}

//? ========== ========== ========== Top search function
function airinblog_fun_top_soc_search() {
    $search_top = get_theme_mod( 'airinblog_cus_search', 'top-bar' );
    $search_soc = get_theme_mod( 'airinblog_cus_search_soc', 1 );
    $soc_active = get_theme_mod( 'airinblog_cus_soc', 1 );
    if ( $search_top == 'top-bar' ) {
        $css_search_box = 'airinblog-css-search-top-bar';
    } else {
        $css_search_box = 'airinblog-css-soc-top-box-child';
    }
    // Checking work - Use social icon styles
    $css_soc_box = false;
    $search_size = '';
    if ( $search_soc == 1 && $soc_active == 1 && $search_top != 'top-bar' ) {
        $css_soc_box = true;
        $css_search_box .= ' airinblog-css-search-soc-styles';
    } else {
        $search_size = get_theme_mod( 'airinblog_cus_search_size', 'search-small' ) . ' ';
    }
    ?>

  <div class="<?php 
    echo esc_attr( $css_search_box );
    ?> airinblog-css-soc-search">
    <button class="<?php 
    echo esc_attr( $search_size );
    ?>airinblog-css-top-search-button search-icon" 
      data-toggle-target=".airinblog-css-top-search-modal" 
      data-set-focus=".airinblog-css-top-airinblog-css-top-search-modal" 
      aria-expanded="false">
      <?php 
    if ( $css_soc_box ) {
        $search_alt = esc_html__( 'Search', 'airin-blog' );
        $form = get_theme_mod( 'airinblog_cus_soc_form', 'square' );
        $design = get_theme_mod( 'airinblog_cus_soc_design_back', 'flat' );
        if ( $form == 'without-background' ) {
            $design = get_theme_mod( 'airinblog_cus_soc_design_no_back', 'only-black-line' );
        }
        $dir = get_template_directory_uri() . '/';
        $dir = apply_filters( 'dmcwzmulti_filter_soc_dir', $dir );
        $soc_url = $dir . 'img/soc/' . $form . '/' . $design . '/search';
        ?>
        <div class="airinblog-css-soc-top-box-anime">
          <img src="<?php 
        echo esc_url( $soc_url ) . '.png';
        ?>" alt="<?php 
        echo esc_attr( $search_alt );
        ?>">
        </div>
        <?php 
    }
    ?>
    </button>
  </div>

  <div class="airinblog-css-top-search-modal airinblog-css-cover-search" data-modal-target-string=".airinblog-css-top-search-modal" 
    role="dialog" aria-modal="true" aria-label="<?php 
    esc_attr_e( 'Search', 'airin-blog' );
    ?>">
    <div class="airinblog-css-top-search-modal-inner">
      <?php 
    get_search_form();
    ?>
      <button class="airinblog-css-top-close-search-toggle search-close-icon" data-toggle-target=".airinblog-css-top-search-modal" 
        data-set-focus=".airinblog-css-top-search-modal">
        <span class="screen-reader-text">
          <?php 
    /* translators: Hidden accessibility text. */
    esc_html_e( 'Close search', 'airin-blog' );
    ?>
        </span>
      </button>
    </div>
  </div>
  <?php 
}

// Wrapper for compatibility with social icons
function airinblog_fun_top_soc_search_box() {
    echo '<div class="airinblog-css-soc-top-box">';
    airinblog_fun_top_soc_search();
    echo '</div>';
}

//? ========== ========== ========== Header
function airinblog_fun_header() {
    if ( !function_exists( 'elementor_theme_do_location' ) || !elementor_theme_do_location( 'header' ) ) {
        ?>
    <header id="site-header" class="airinblog-css-site-header">
      <?php 
        do_action( 'airinblog_hook_before_topmenu' );
        $ticker = get_theme_mod( 'airinblog_cus_ticker', 1 );
        $top_menu = get_theme_mod( 'airinblog_cus_top_menu', 0 );
        $header_image_soc = false;
        if ( get_theme_mod( 'airinblog_cus_header_image_soc', 0 ) == 1 and get_header_image() ) {
            $header_image_soc = true;
        }
        $search = get_theme_mod( 'airinblog_cus_search', 'top-bar' );
        $soc = get_theme_mod( 'airinblog_cus_soc', 1 );
        if ( $search == 'soc-after' || $search == 'soc-before' ) {
            if ( $soc == 1 ) {
                if ( $search == 'soc-after' ) {
                    add_action( 'airinblog_hook_top_soc_after', 'airinblog_fun_top_soc_search' );
                } else {
                    add_action( 'airinblog_hook_top_soc_before', 'airinblog_fun_top_soc_search' );
                }
            } else {
                add_action( 'airinblog_hook_brand_top_inner', 'airinblog_fun_top_soc_search_box' );
                add_action( 'airinblog_hook_brand_bottom_right', 'airinblog_fun_top_soc_search_box' );
            }
        }
        if ( $top_menu != 1 || $ticker != 0 || $search == 'top-bar' ) {
            ?>
        <div class="airinblog-css-top-bar clear">
          <?php 
            if ( $ticker == 1 ) {
                get_template_part( 'inc/module/ticker' );
            } else {
                if ( $ticker == 2 ) {
                    airinblog_fun_top_date();
                }
            }
            ?>
          <!-- Top menu -->
          <!-- Don't add spaces to the block (airinblog-css-top-menu) - css selector is used "empty" -->
          <div class="airinblog-css-top-menu"><?php 
            if ( $search == 'top-bar' ) {
                airinblog_fun_top_soc_search();
            }
            if ( $top_menu != 1 ) {
                get_template_part( 'inc/module/top-menu' );
            }
            ?></div>
        </div>
        <?php 
        }
        do_action( 'airinblog_hook_after_topmenu' );
        ?>
      <div class="airinblog-css-site-branding">
        <?php 
        if ( get_header_image() ) {
            ?>
          <div class="airinblog-css-site-brand-top">
            <div class="airinblog-css-site-brand-top-1">
              <?php 
            if ( function_exists( 'airinblog_fun_head_image_link' ) ) {
                airinblog_fun_head_image_link();
            }
            if ( $header_image_soc ) {
                ?>
                <div class="airinblog-css-site-brand-top-2">
                  <?php 
                if ( $soc == 1 ) {
                    airinblog_fun_soc_set();
                }
                do_action( 'airinblog_hook_brand_top_inner' );
                ?>
                </div>
                <?php 
            }
            ?>
            </div>
          </div>
          <?php 
        }
        ?>
        <div class="airinblog-css-site-brand-bottom">
          <div class="airinblog-css-site-brand-bottom-1">
            <?php 
        if ( get_theme_mod( 'airinblog_cus_title_tagline_logo_var', 'fix' ) == 'fix' ) {
            if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) {
                ?>
                <div class="airinblog-css-site-logo-box">
                  <?php 
                the_custom_logo();
                ?>
                </div>
                <?php 
            }
        } else {
            $supple_logo = get_theme_mod( 'airinblog_cus_supple_logo' );
            if ( $supple_logo ) {
                ?>
                <div class="airinblog-css-site-logo-box">
                  <?php 
                if ( is_front_page() ) {
                    ?>
                    <img src="<?php 
                    echo esc_url( $supple_logo );
                    ?>" alt="<?php 
                    bloginfo( 'name' );
                    ?>">
                    <?php 
                } else {
                    ?>
                    <a href="<?php 
                    echo esc_url( home_url( '/' ) );
                    ?>" rel="home">
                      <img src="<?php 
                    echo esc_url( $supple_logo );
                    ?>" alt="<?php 
                    bloginfo( 'name' );
                    ?>">
                    </a>
                    <?php 
                }
                ?>
                </div>
                <?php 
            }
        }
        $description = get_bloginfo( 'description', 'display' );
        if ( display_header_text() && (get_bloginfo( 'name' ) || $description) ) {
            $title_box_css = 'airinblog-css-site-title-box';
        } else {
            $title_box_css = 'clear-title-box';
        }
        ?>
            <div class="<?php 
        echo esc_attr( $title_box_css );
        ?>" >
              <?php 
        if ( is_front_page() ) {
            ?>
                <h1 class="airinblog-css-site-title"><?php 
            bloginfo( 'name' );
            ?></h1>					
                <?php 
        } else {
            ?>
                <p class="airinblog-css-site-title"><a href="<?php 
            echo esc_url( home_url( '/' ) );
            ?>" rel="home"><?php 
            bloginfo( 'name' );
            ?></a></p>
                <?php 
        }
        if ( $description || is_customize_preview() ) {
            ?>
                <p class="airinblog-css-site-description"><?php 
            echo esc_html( $description );
            ?></p>
                <?php 
        }
        ?>
            </div>
          </div>
          <?php 
        if ( !$header_image_soc ) {
            if ( $search == 'soc-after' || $search == 'soc-before' || $soc == 1 ) {
                ?>
              <div class="airinblog-css-site-brand-bottom-2">
                <?php 
                if ( $soc == 1 ) {
                    airinblog_fun_soc_set();
                }
                do_action( 'airinblog_hook_brand_bottom_right' );
                ?>
              </div>
              <?php 
            }
        }
        ?>
        </div>
      </div>
      <?php 
        do_action( 'airinblog_hook_before_mainmenu' );
        if ( get_theme_mod( 'airinblog_cus_main_menu', 0 ) != 1 ) {
            get_template_part( 'inc/module/main-menu' );
        }
        do_action( 'airinblog_hook_after_mainmenu' );
        ?>
    </header>
    <?php 
    }
}
