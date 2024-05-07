<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Functions for bbPress
* ------------------------------------------------------------------------------ */
/*--------------------------------------------------------------
Content:
----------------------------------------------------------------
# Support for bbPress Styles
# Disable bbPress breadcrumbs
# Changing user role names
--------------------------------------------------------------*/
//? ========== Support for bbPress Styles
function airinblog_fun_set_css_bbpress() {
    //---------- Clear
    $css = '';
    //?---------- Disable sidebar on bbPress pages
    if ( get_theme_mod( 'airinblog_cus_bbpress_sidebar', 0 ) == 1 && is_bbpress() ) {
        $css .= "\n      .bbpress #primary,\n      .bbpress.airinblog-css-left-sidebar #primary {\n        width: 100%;\n        float: none;\n      }\n      .bbpress.airinblog-css-no-sidebar-center #primary {\n        width: 72.38%;\n        float: none;\n        margin: auto;\n      }\n      @media (max-width: 960px) {\n        .bbpress.airinblog-css-no-sidebar-center #primary {\n          width: 100%;\n        }\n      }\n    ";
    }
    //?---------- Styles bbPress
    if ( get_theme_mod( 'airinblog_cus_bbpress_css_off', 0 ) == 0 ) {
        //?---------- Styles on pages bbPress
        if ( is_bbpress() ) {
            //---------- General colors
            // Primary theme color
            $primary_color = esc_attr( get_theme_mod( 'airinblog_cus_colors_primary', '#dd9922' ) );
            //---------- Common colors
            // Site content background color
            $content_color = '#fffffa';
            // General text color
            $t_color = '#404040';
            // General link color
            $color_link = '#1e73bb';
            // General link color on hover
            $link_hover = '#dd9925';
            //---------- Only used to reassign another "important" in 3rd party plugins
            $i = '!important';
            // Field and form backgrounds
            $css .= "\n        .bbpress #bbpress-forums div.odd,\n        .bbpress #bbpress-forums ul.odd,\n        .bbpress #bbpress-forums div.even,\n        .bbpress #bbpress-forums ul.even,\n        .bbpress #bbpress-forums #bbp-your-profile fieldset input,\n        .bbpress #bbpress-forums #bbp-your-profile fieldset textarea,\n        .bbpress #bbpress-forums #bbp-your-profile fieldset p.description,\n        .bbpress #bbpress-forums #bbp-your-profile fieldset select {\n          background: {$content_color};\n        }\n        .bbpress .bbp-forum-content ul.sticky,\n        .bbpress .bbp-topics ul.sticky,\n        .bbpress .bbp-topics ul.super-sticky,\n        .bbpress .bbp-topics-front ul.super-sticky {\n          background: {$content_color} {$i};\n          border-left: 5px solid {$primary_color};\n        }\n        .bbpress #bbpress-forums div.bbp-forum-header,\n        .bbpress #bbpress-forums div.bbp-reply-header,\n        .bbpress #bbpress-forums div.bbp-topic-header {\n          background: rgba(0,0,0,0.05);\n        }\n        .bbpress #bbpress-forums li.bbp-footer,\n        .bbpress #bbpress-forums li.bbp-header,\n        .bbpress #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a {\n          background: rgba(0,0,0,0.1);\n          opacity: 1;\n        }\n      ";
            // Text and links
            $css .= "\n        .bbpress span.bbp-author-ip,\n        .bbpress #bbpress-forums ul.status-closed,\n        .bbpress #bbpress-forums ul.status-closed a,\n        .bbpress #bbpress-forums .bbp-reply-content ul.bbp-reply-revision-log {\n          color: {$t_color};\n        }\n        .bbpress .bbp-forum-header a.bbp-forum-permalink,\n        .bbpress .bbp-reply-header a.bbp-reply-permalink,\n        .bbpress .bbp-topic-header a.bbp-topic-permalink,\n        .bbpress span.bbp-admin-links a,\n        .bbpress #bbpress-forums ul.status-closed a {\n          color: {$color_link};\n        }\n        .bbpress .bbp-forum-header a.bbp-forum-permalink:hover,\n        .bbpress .bbp-reply-header a.bbp-reply-permalink:hover,\n        .bbpress .bbp-topic-header a.bbp-topic-permalink:hover,\n        .bbpress span.bbp-admin-links a:hover,\n        .bbpress #bbpress-forums ul.status-closed a:hover         {\n          color: {$link_hover};\n        }\n        .bbpress select.bbp_dropdown option:disabled {\n          color: {$primary_color};\n        }\n      ";
            // Forms
            $css .= '
        .bbpress .wp-editor-container {
          border: 1px solid ' . $primary_color . ';
        }
        .bbpress #bbpress-forums fieldset.bbp-form input[type="checkbox"] {
          margin-right: 7px;
        }
        .bbpress #bbpress-forums fieldset.bbp-form label {
          margin-bottom: 8px;
        }
      ';
            // Button (search)
            $css .= '
        .bbpress input[type="submit"] {
          font-size: 16px;
        }
        .bbpress #bbpress-forums #bbp-user-wrapper h2.entry-title {
          padding-top: 10px;
        }
        @media (max-width: 480px) {
          .bbpress div.bbp-search-form input.button {
            font-size: 12px;
            padding: .3em 1em;
          }
        }
        @media (max-width: 700px) {
          .bbpress .bbp-search-form,
          .bbpress .entry-title {
            width: 100%;
          }
        }
      ';
            // Pagination
            $css .= "\n        .bbpress #bbpress-forums .bbp-pagination-links span.current,\n        .bbpress #bbpress-forums .bbp-pagination-links a:hover {\n          color: #404040;\n        }\n      ";
        }
        // end is_bbpress
        //?---------- Styles outside of pages bbPress (for widgets)
        $css .= '
      .bbp-remember-me {
        display: flex;
        align-items: center;
      }
      .bbp-search-form input {
        margin-bottom: 15px;
        width: auto;
      }
      .bbp-author-name {
        margin-left: 5px;
      }
      .widget .bbp-search-form input[type="text"] {
        width: 100%;
      }
    ';
    }
    if ( !empty( $css ) ) {
        wp_add_inline_style( 'airinblog-style-bbpress', $css );
    }
}

add_action( 'wp_enqueue_scripts', 'airinblog_fun_set_css_bbpress', 1 );