<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Functions for Customizer Panel
* ------------------------------------------------------------------------------ */
//? ---------- Hiding minor settings when deactivating the main setting
function airinblog_fun_panel_hide_set() {
    $css = '';
    // Ticker in the top bar
    $ticker = esc_attr( get_theme_mod( 'airinblog_cus_ticker', 1 ) );
    if ( $ticker == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_ticker_"],
      [id^="customize-control-airinblog_cus_date"] {
        display: none;
      }
    ';
    } else {
        if ( $ticker == 2 ) {
            $css .= '
      #customize-control-airinblog_cus_ticker_cat {
        display: none;
      }
    ';
            // Where to get the date
            if ( esc_attr( get_theme_mod( 'airinblog_cus_date', 1 ) ) == 2 ) {
                $css .= '
        [id^="customize-control-airinblog_cus_date_"] {
          display: none;
        }
      ';
            }
        } else {
            $css .= '
      [id^="customize-control-airinblog_cus_date"] {
        display: none;
      }
    ';
        }
    }
    // Top menu settings
    if ( esc_attr( get_theme_mod( 'airinblog_cus_top_menu', 0 ) ) == 1 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_top_menu_"] {
        display: none;
      }
    ';
    }
    // Logo option settings
    if ( esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_logo_var', 'fix' ) ) == 'fix' ) {
        $css .= '
      #customize-control-airinblog_cus_supple_logo {
        display: none;
      }
    ';
    } else {
        $css .= '
      #customize-control-custom_logo {
        display: none;
      }
    ';
    }
    // Social Links
    $soc = esc_attr( get_theme_mod( 'airinblog_cus_soc', 1 ) );
    if ( $soc == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_soc_"] {
        display: none;
      }
    ';
    }
    // Social link form
    if ( esc_attr( get_theme_mod( 'airinblog_cus_soc_form', 'square' ) ) == 'without-background' ) {
        $css .= '
      #customize-control-airinblog_cus_soc_design_back {
        display: none;
      }
    ';
    } else {
        $css .= '
      #customize-control-airinblog_cus_soc_design_no_back {
        display: none;
      }
    ';
    }
    // Top search settings
    $search = esc_attr( get_theme_mod( 'airinblog_cus_search', 'top-bar' ) );
    $search_soc = esc_attr( get_theme_mod( 'airinblog_cus_search_soc', 1 ) );
    if ( $search == 'off' ) {
        $css .= '
      [id^="customize-control-airinblog_cus_search_"] {
        display: none;
      }
    ';
    } else {
        if ( $search == 'top-bar' ) {
            $css .= '
      [id^="customize-control-airinblog_cus_search_soc"] {
        display: none;
      }
    ';
        } else {
            if ( $search_soc == 1 && $soc == 1 ) {
                $css .= '
      [id^="customize-control-airinblog_cus_search_size"] {
        display: none;
      }
    ';
            }
        }
    }
    // Main menu settings
    if ( esc_attr( get_theme_mod( 'airinblog_cus_main_menu', 0 ) ) == 1 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_main_menu_"] {
        display: none;
      }
    ';
    }
    // "Read more" button in categories
    if ( esc_attr( get_theme_mod( 'airinblog_cus_cat_style_more', 0 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_cat_style_more_"] {
        display: none;
      }
    ';
    }
    // Meta tags in categories
    if ( esc_attr( get_theme_mod( 'airinblog_cus_cat_meta', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_cat_meta_"] {
        display: none;
      }
    ';
    }
    // Meta tags in posts
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_meta', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_meta_"] {
        display: none;
      }
    ';
    }
    // Bulleted Lists
    $mark = esc_attr( get_theme_mod( 'airinblog_cus_post_li_mark', 'v1' ) );
    if ( $mark == 'v0' ) {
        $css .= '
      #customize-control-airinblog_cus_post_li_mark_color {
        display: none;
      }
    ';
    }
    // Numbered Lists
    $num = esc_attr( get_theme_mod( 'airinblog_cus_post_li_num', 'v5' ) );
    if ( $num == 'v0' ) {
        $css .= '
      #customize-control-airinblog_cus_post_li_num_back_color,
      #customize-control-airinblog_cus_post_li_num_text_color {
        display: none;
      }
    ';
    }
    // Blocks quote
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_quote', 'v1' ) ) == 'v0' ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_quote_"] {
        display: none;
      }
    ';
    }
    // Icon for block quotes
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_quote_icon', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_quote_icon_"] {
        display: none;
      }
    ';
    }
    // Titles H2
    $h2 = esc_attr( get_theme_mod( 'airinblog_cus_post_h2', 'off' ) );
    if ( $h2 == 'off' ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_h2_"] {
        display: none;
      }
    ';
    } else {
        if ( $h2 == 'v1' || $h2 == 'v2' ) {
            $css .= '
      #customize-control-airinblog_cus_post_h2_icon_select,
      #customize-control-airinblog_cus_post_h2_count_text,
      #customize-control-airinblog_cus_post_h2_tag,
      #customize-control-airinblog_cus_post_h2_icon_text_color {
        display: none;
      }
    ';
        } else {
            if ( $h2 == 'v3' ) {
                $css .= '
      #customize-control-airinblog_cus_post_h2_icon_select,
      #customize-control-airinblog_cus_post_h2_tag {
        display: none;
      }
    ';
            } else {
                if ( $h2 == 'v4' ) {
                    $css .= '
      #customize-control-airinblog_cus_post_h2_count_text,
      #customize-control-airinblog_cus_post_h2_tag{
        display: none;
      }
    ';
                } else {
                    if ( $h2 == 'v5' ) {
                        $css .= '
      #customize-control-airinblog_cus_post_h2_icon_select,
      #customize-control-airinblog_cus_post_h2_count_text {
        display: none;
      }
    ';
                    } else {
                        $css .= '
      #customize-control-airinblog_cus_post_h2_icon_select,
      #customize-control-airinblog_cus_post_h2_count_text,
      #customize-control-airinblog_cus_post_h2_tag,
      #customize-control-airinblog_cus_post_h2_icon_text_color,
      #customize-control-airinblog_cus_post_h2_element_color {
        display: none;
      }
    ';
                    }
                }
            }
        }
    }
    // Titles H3 - H6
    $h3 = esc_attr( get_theme_mod( 'airinblog_cus_post_h36', 'off' ) );
    if ( $h3 == 'off' ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_h36_"] {
        display: none;
      }
    ';
    } else {
        if ( $h3 == 'v1' || $h3 == 'v2' ) {
            $css .= '
      #customize-control-airinblog_cus_post_h36_icon_select,
      #customize-control-airinblog_cus_post_h36_count_text,
      #customize-control-airinblog_cus_post_h36_tag,
      #customize-control-airinblog_cus_post_h36_icon_text_color {
        display: none;
      }
    ';
        } else {
            if ( $h3 == 'v3' ) {
                $css .= '
      #customize-control-airinblog_cus_post_h36_icon_select,
      #customize-control-airinblog_cus_post_h36_tag {
        display: none;
      }
    ';
            } else {
                if ( $h3 == 'v4' ) {
                    $css .= '
      #customize-control-airinblog_cus_post_h36_count_text,
      #customize-control-airinblog_cus_post_h36_tag{
        display: none;
      }
    ';
                } else {
                    if ( $h3 == 'v5' ) {
                        $css .= '
      #customize-control-airinblog_cus_post_h36_icon_select,
      #customize-control-airinblog_cus_post_h36_count_text {
        display: none;
      }
    ';
                    } else {
                        $css .= '
      #customize-control-airinblog_cus_post_h36_icon_select,
      #customize-control-airinblog_cus_post_h36_count_text,
      #customize-control-airinblog_cus_post_h36_tag,
      #customize-control-airinblog_cus_post_h36_icon_text_color,
      #customize-control-airinblog_cus_post_h36_element_color {
        display: none;
      }
    ';
                    }
                }
            }
        }
    }
    // Author block
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_bio', 1 ) ) == 0 ) {
        $css .= '
      [id*="_cus_post_bio_"] {
        display: none;
      }
    ';
    }
    // Author block separator option
    $bio = esc_attr( get_theme_mod( 'airinblog_cus_post_bio_design', 'v3' ) );
    if ( $bio == 'v0' || $bio == 'v1' || $bio == 'v2' ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_bio_design_"] {
        display: none;
      }
    ';
    }
    // Author's latest posts in the author's block
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_bio_related', 0 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_bio_related_"] {
        display: none;
      }
    ';
    }
    // Similar posts
    if ( esc_attr( get_theme_mod( 'airinblog_cus_post_related', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_post_related_"] {
        display: none;
      }
    ';
    }
    // Enable Recent Posts Section on Homepage
    if ( esc_attr( get_theme_mod( 'airinblog_cus_home_article_block', 1 ) ) == 0 ) {
        $css .= '
      #customize-control-airinblog_cus_home_article_block_h {
        display: none;
      }
    ';
    }
    // Activate "Home" link in breadcrumbs
    if ( esc_attr( get_theme_mod( 'airinblog_cus_bread_main', 1 ) ) == 0 ) {
        $css .= '
      #customize-control-airinblog_cus_bread_main_text {
        display: none;
      }
    ';
    }
    // Fluently movement of blocks
    if ( esc_attr( get_theme_mod( 'airinblog_cus_flow_block', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_flow_block_"] {
        display: none;
      }
    ';
    }
    // Categories on the site map
    if ( esc_attr( get_theme_mod( 'airinblog_cus_sitemap_cat', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_sitemap_cat_"] {
        display: none;
      }
    ';
    }
    // Posts on the site map
    if ( esc_attr( get_theme_mod( 'airinblog_cus_sitemap_post', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_sitemap_post_"] {
        display: none;
      }
    ';
    }
    // Pages on the site map
    if ( esc_attr( get_theme_mod( 'airinblog_cus_sitemap_page', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_sitemap_page_"] {
        display: none;
      }
    ';
    }
    // Up button
    if ( esc_attr( get_theme_mod( 'airinblog_cus_top_scroll', 0 ) ) == 1 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_top_scroll_"] {
        display: none;
      }
    ';
    }
    // Underline titles of all classic widgets
    if ( esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_border', 'v4' ) ) == 'v0' ) {
        $css .= '
      #customize-control-airinblog_cus_widget_sidebar_h_border_size {
        display: none;
      }
    ';
    }
    // Bottom part
    if ( esc_attr( get_theme_mod( 'airinblog_cus_footer', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_footer_"] {
        display: none;
      }
    ';
    }
    // Lower menu
    if ( esc_attr( get_theme_mod( 'airinblog_cus_footer_menu', 1 ) ) == 0 ) {
        $css .= '
      [id^="customize-control-airinblog_cus_footer_menu_"] {
        display: none;
      }
    ';
    }
    if ( !empty( $css ) ) {
        wp_add_inline_style( 'airinblog-style-admin', $css );
    }
}

add_action( 'admin_enqueue_scripts', 'airinblog_fun_panel_hide_set' );