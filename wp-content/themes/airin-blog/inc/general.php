<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Main function file
* ------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------
* Independent:
* airin-blog - Translations and slug
* AIRINBLOG_VERSION - Versions
*
* Prefixes:
* airinblog_ - General
* airinblog_fun_ - Functions
* airinblog_set_ - Setting ID
* airinblog_cus_ - Customizer ID
* airinblog_hook_ - Hooks
* airinblog-css- - CSS theme classes
* airinblog-style- - Style files id
* airinblog-script- - Script files id
*
* Common Prefixes for DMCWebZone Product Compatibility:
* dmcwzmulti_ - General
* dmcwzmulti_fun_ - Functions
* dmcwzmulti-style- - Style files id
* dmcwzmulti-script- - Script files id
* ------------------------------------------------------------------------------ */
// Theme version
if ( !defined( 'AIRINBLOG_VERSION' ) ) {
    define( 'AIRINBLOG_VERSION', '1.4.6' );
}
// Debugging (switching styles to uncompressed versions)
$debug = 0;
if ( $debug == 0 ) {
    define( 'AIRINBLOG_MIN', 'min.' );
} else {
    define( 'AIRINBLOG_MIN', '' );
}
// Theme description (for translations - style.css)
esc_html__( 'Airin Blog - is a Multipurpose, responsive, fast, minimal magazine theme for blogs and article sites, news and media, with many settings for all occasions. Modern minimalism combined with versatility and adaptability. Lots of customization options that will provide endless options for creating a unique site. Flexible functionality - different sidebar orientation, flexible header with logo, 4 menu locations, main menu (mega menu), three pagination options, breadcrumbs, author block and related posts. Powerful Typography - Change font size and line height, choose fonts, add color typography for posts and pages. Clean code, no frameworks, full support for the WordPress visual customizer. Speed, adaptability and modularity. A minimum of scripts for modules to work. Decide for yourself which modules will work. SEO optimization with correct titles and markup. Adaptation for WooCommerce, Elementor, bbPress, Events Calendar, Jetpack, WPML. Watch full demos here - airinblog.web-zone.org', 'airin-blog' );
// Connecting various features and theme settings
if ( !function_exists( 'airinblog_fun_setup_theme' ) ) {
    function airinblog_fun_setup_theme() {
        // Translation the theme
        load_theme_textdomain( 'airin-blog', get_template_directory() . '/languages' );
        // Include RSS feed of posts and comments in header
        add_theme_support( 'automatic-feed-links' );
        // Enable header driven
        add_theme_support( 'title-tag' );
        // Enable thumbnails for pages and posts
        add_theme_support( 'post-thumbnails' );
        // Enable style output for block editor
        add_theme_support( 'editor-styles' );
        add_editor_style( 'css/editor-style.css' );
        // Enabling Full and Wide Block Alignment Support in the Block Editor
        add_theme_support( 'align-wide' );
        // Responsive block editor content
        add_theme_support( 'responsive-embeds' );
        // Enable block editor styles
        add_theme_support( 'wp-block-styles' );
        // Enable Support Woocommerce
        add_theme_support( 'woocommerce' );
        // Support html5
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        ) );
        // Registering the menu
        register_nav_menus( array(
            'airinblog-loc-menu-main'   => esc_html__( 'Main Menu', 'airin-blog' ),
            'airinblog-loc-menu-top'    => esc_html__( 'Top Menu', 'airin-blog' ),
            'airinblog-loc-menu-footer' => esc_html__( 'Footer Menu', 'airin-blog' ),
            'airinblog-loc-menu-widget' => esc_html__( 'Widget Menu', 'airin-blog' ),
        ) );
        // Connecting the background function
        add_theme_support( 'custom-background', apply_filters( 'airinblog_custom_background_args', array(
            'default-color' => '',
            'default-image' => '',
        ) ) );
        // Connecting the logo function
        add_theme_support( 'custom-logo', array(
            'width'       => 150,
            'height'      => 100,
            'flex-width'  => false,
            'flex-height' => false,
        ) );
        // Connecting the title feature
        $header_width = 1175;
        if ( get_theme_mod( 'airinblog_cus_lay_max_width', 0 ) == 1 ) {
            $header_width = 1920;
        }
        add_theme_support( 'custom-header', apply_filters( 'airinblog_custom_header_args', array(
            'default-text-color' => '',
            'width'              => $header_width,
            'height'             => 250,
            'flex-height'        => true,
            'flex-width'         => true,
        ) ) );
        // Set to 1 to disable width 1920 x 1080
        $width_full_off = 0;
        // Setting the maximum width of images
        global $content_width;
        if ( !isset( $content_width ) ) {
            if ( $width_full_off == 0 ) {
                $content_width = 1920;
            } else {
                $content_width = 1175;
            }
        }
        // Slicing images to different sizes
        $add = 'add_image_size';
        $img = 'airinblog-img-';
        $add(
            $img . '155x87',
            155,
            87,
            true
        );
        $add(
            $img . '195x110',
            195,
            110,
            true
        );
        $add(
            $img . '215x121',
            215,
            121,
            true
        );
        $add(
            $img . '270x152',
            270,
            152,
            true
        );
        $add(
            $img . '300x169',
            300,
            169,
            true
        );
        $add(
            $img . '378x213',
            378,
            213,
            true
        );
        $add(
            $img . '415x233',
            415,
            233,
            true
        );
        $add(
            $img . '578x325',
            578,
            325,
            true
        );
        $add(
            $img . '850x478',
            850,
            478,
            true
        );
        $add(
            $img . '1175x661',
            1175,
            661,
            true
        );
        if ( $width_full_off == 0 ) {
            $add(
                $img . '1920x1080',
                1920,
                1080,
                true
            );
        }
    }

    add_action( 'after_setup_theme', 'airinblog_fun_setup_theme' );
}
// Removing extra image sizes (at the user's request)
if ( get_option( 'airinblog_set_width_2560_del' ) == 1 ) {
    add_filter( 'big_image_size_threshold', '__return_zero' );
}
if ( get_option( 'airinblog_set_width_2048_del' ) == 1 ) {
    add_filter( 'intermediate_image_sizes_advanced', 'airinblog_fun_del_2048_img' );
    function airinblog_fun_del_2048_img(  $sizes  ) {
        unset($sizes['2048x2048']);
        return $sizes;
    }

}
if ( get_option( 'airinblog_set_width_1536_del' ) == 1 ) {
    add_filter( 'intermediate_image_sizes_advanced', 'airinblog_fun_del_1536_img' );
    function airinblog_fun_del_1536_img(  $sizes  ) {
        unset($sizes['1536x1536']);
        return $sizes;
    }

}
if ( get_option( 'airinblog_set_width_768_del' ) == 1 ) {
    add_filter( 'intermediate_image_sizes_advanced', 'airinblog_fun_del_768_img' );
    function airinblog_fun_del_768_img(  $sizes  ) {
        unset($sizes['medium_large']);
        return $sizes;
    }

}
// Adding image sizes to the library
add_filter( 'image_size_names_choose', 'airinblog_fun_new_img_sizes' );
function airinblog_fun_new_img_sizes(  $sizes  ) {
    $addsizes = array(
        'airinblog-img-578x325'  => esc_html__( 'Theme', 'airin-blog' ),
        'airinblog-img-850x478'  => esc_html__( 'Theme', 'airin-blog' ),
        'airinblog-img-1175x661' => esc_html__( 'Theme', 'airin-blog' ),
    );
    return array_merge( $sizes, $addsizes );
}

// Registering widget areas
function airinblog_fun_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Side column', 'airin-blog' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'These widgets are displayed in the right or left column, depending on the site settings', 'airin-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'airin-blog' ),
        'id'            => 'sidebar-footer-one',
        'description'   => esc_html__( 'These widgets are displayed in the first column of the footer', 'airin-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'airin-blog' ),
        'id'            => 'sidebar-footer-two',
        'description'   => esc_html__( 'These widgets are displayed in the second column of the footer', 'airin-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'airin-blog' ),
        'id'            => 'sidebar-footer-three',
        'description'   => esc_html__( 'These widgets are displayed in the third column of the footer', 'airin-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'airin-blog' ),
        'id'            => 'sidebar-footer-four',
        'description'   => esc_html__( 'These widgets are displayed in the fourth column of the footer', 'airin-blog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
}

add_action( 'widgets_init', 'airinblog_fun_widgets_init' );
// Filling sidebars with widgets
function airinblog_fun_add_theme_widgets() {
    $arr_widget = get_option( 'sidebars_widgets' );
    $trim_sw = '';
    foreach ( $arr_widget as $sw_main ) {
        if ( is_array( $sw_main ) ) {
            foreach ( $sw_main as $sw_child ) {
                $trim_sw .= $sw_child;
            }
        }
    }
    // Filling for sidebar-1
    $search = strstr( $trim_sw, 'search' );
    if ( !$search ) {
        wp_assign_widget_to_sidebar( 'search-1', 'sidebar-1' );
        update_option( 'widget_search', array(
            1 => array(
                'title' => esc_html__( 'Search', 'airin-blog' ),
            ),
        ) );
    }
    $page = strstr( $trim_sw, 'pages' );
    if ( !$page ) {
        wp_assign_widget_to_sidebar( 'pages-1', 'sidebar-1' );
        update_option( 'widget_pages', array(
            1 => array(
                'title' => esc_html__( 'Pages', 'airin-blog' ),
            ),
        ) );
    }
    $cat = strstr( $trim_sw, 'categories' );
    if ( !$cat ) {
        wp_assign_widget_to_sidebar( 'categories-1', 'sidebar-1' );
        update_option( 'widget_categories', array(
            1 => array(
                'title' => esc_html__( 'Categories', 'airin-blog' ),
            ),
        ) );
    }
    $tag = strstr( $trim_sw, 'tag_cloud' );
    if ( !$tag ) {
        wp_assign_widget_to_sidebar( 'tag_cloud-1', 'sidebar-1' );
        update_option( 'widget_tag_cloud', array(
            1 => array(
                'title' => esc_html__( 'Tag cloud', 'airin-blog' ),
            ),
        ) );
    }
    $meta = strstr( $trim_sw, 'meta' );
    if ( !$meta ) {
        wp_assign_widget_to_sidebar( 'meta-1', 'sidebar-1' );
        update_option( 'widget_meta', array(
            1 => array(
                'title' => esc_html__( 'Meta', 'airin-blog' ),
            ),
        ) );
    }
    // Filling for sidebar-footer-one
    $archiv = strstr( $trim_sw, 'archives' );
    if ( !$archiv ) {
        wp_assign_widget_to_sidebar( 'archives-1', 'sidebar-footer-one' );
        update_option( 'widget_archives', array(
            1 => array(
                'title' => esc_html__( 'Archives', 'airin-blog' ),
            ),
        ) );
    }
    // Filling for sidebar-footer-two
    $custom_html = strstr( $trim_sw, 'custom_html' );
    if ( !$custom_html ) {
        wp_assign_widget_to_sidebar( 'custom_html-1', 'sidebar-footer-two' );
        update_option( 'widget_custom_html', array(
            1 => array(
                'title'   => esc_html__( 'Title for text', 'airin-blog' ),
                'content' => esc_html__( 'Test text', 'airin-blog' ),
            ),
        ) );
    }
    // Filling for sidebar-footer-three
    $text = strstr( $trim_sw, 'text' );
    if ( !$text ) {
        wp_assign_widget_to_sidebar( 'text-1', 'sidebar-footer-three' );
        update_option( 'widget_text', array(
            1 => array(
                'title' => esc_html__( 'Title for text', 'airin-blog' ),
                'text'  => esc_html__( 'Test text', 'airin-blog' ),
            ),
        ) );
    }
    // Filling for sidebar-footer-four
    $calendar = strstr( $trim_sw, 'calendar' );
    if ( !$calendar ) {
        wp_assign_widget_to_sidebar( 'calendar-1', 'sidebar-footer-four' );
        update_option( 'widget_calendar', array(
            1 => array(
                'title' => esc_html__( 'Calendar', 'airin-blog' ),
            ),
        ) );
    }
}

// Filling in social links
function airinblog_fun_add_theme_soc() {
    set_theme_mod( 'airinblog_cus_soc_block', '[
		{"soc_net":"facebook","soc_link":"/","soc_new_link":"0"},
		{"soc_net":"instagram","soc_link":"/","soc_new_link":"0"},
		{"soc_net":"linkedin","soc_link":"/","soc_new_link":"0"},
		{"soc_net":"youtube","soc_link":"/","soc_new_link":"0"}
	]' );
}

// Checking theme old version
$old_theme = get_option( 'airinblog_set_update_theme_setup' );
if ( $old_theme != 99 ) {
    $pr = get_option( 'airinblog_set_update_theme_set_pr' );
    $fr = get_option( 'airinblog_set_update_theme_set_fr' );
    if ( $fr != 2 ) {
        // Adding settings when the theme is activated
        function airinblog_fun_update_theme_settings_fr() {
            airinblog_fun_add_theme_soc();
            airinblog_fun_add_theme_widgets();
            update_option( 'airinblog_set_update_theme_set_fr', 2 );
        }

        add_action( 'after_switch_theme', 'airinblog_fun_update_theme_settings_fr' );
    }
}
// Connecting scripts and styles
function airinblog_fun_scripts() {
    // Basic style file
    wp_enqueue_style(
        'airinblog-style-general',
        get_stylesheet_uri(),
        array(),
        AIRINBLOG_VERSION
    );
    // Customizer styles
    wp_enqueue_style(
        'airinblog-style-custom',
        get_template_directory_uri() . '/css/custom-style.css',
        array(),
        AIRINBLOG_VERSION
    );
    // Styles for WooCommerce
    if ( class_exists( 'woocommerce' ) ) {
        wp_enqueue_style(
            'airinblog-style-woo',
            get_template_directory_uri() . '/css/adaptation/woo-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Styles for WPML
    if ( class_exists( 'SitePress' ) ) {
        wp_enqueue_style(
            'airinblog-style-wpml',
            get_template_directory_uri() . '/css/adaptation/wpml-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Styles for Jetpack
    if ( class_exists( 'Jetpack' ) ) {
        wp_enqueue_style(
            'airinblog-style-jetpack',
            get_template_directory_uri() . '/css/adaptation/jetpack-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Styles for bbPress
    if ( class_exists( 'bbpress' ) ) {
        wp_enqueue_style(
            'airinblog-style-bbpress',
            get_template_directory_uri() . '/css/adaptation/bbpress-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Styles for BuddyPress
    if ( class_exists( 'BuddyPress' ) ) {
        wp_enqueue_style(
            'airinblog-style-buddypress',
            get_template_directory_uri() . '/css/adaptation/buddypress-style.css',
            array(),
            AIRINBLOG_VERSION
        );
        if ( get_theme_mod( 'airinblog_cus_buddypress_css_off', 0 ) == 0 ) {
            wp_enqueue_style(
                'airinblog-style-buddypress-fix',
                get_template_directory_uri() . '/css/adaptation/buddypress-fix-style.css',
                array(),
                AIRINBLOG_VERSION
            );
        }
    }
    // Styles for Events Calendar
    if ( class_exists( 'Tribe__Events__Main' ) || class_exists( 'Tribe__Events__Pro__Main' ) ) {
        wp_enqueue_style(
            'airinblog-style-events-calendar',
            get_template_directory_uri() . '/css/adaptation/events-calendar-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Styles for Contact Form 7
    if ( class_exists( 'wpcf7' ) ) {
        wp_enqueue_style(
            'airinblog-style-contact-form-7',
            get_template_directory_uri() . '/css/adaptation/contact-form-7-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Customizable SELECT
    wp_enqueue_style(
        'airinblog-style-chosen-mod',
        get_template_directory_uri() . '/css/chosen/chosen-mod.css',
        array(),
        AIRINBLOG_VERSION
    );
    wp_enqueue_script(
        'chosen-js',
        get_template_directory_uri() . '/js/chosen/chosen.jquery.' . AIRINBLOG_MIN . 'js',
        array('jquery'),
        '1.8.7',
        true
    );
    wp_enqueue_script(
        'airinblog-script-setting-chosen',
        get_template_directory_uri() . '/js/chosen/setting-chosen.js',
        array('jquery'),
        AIRINBLOG_VERSION,
        true
    );
    wp_localize_script( 'airinblog-script-setting-chosen', 'airinblog_localize_chosen', array(
        'nonce_defoult'  => esc_html__( "Nothing found:", 'airin-blog' ),
        'nonce_woo_sort' => esc_html__( "No sorting", 'airin-blog' ),
    ) );
    // Calm blocks (Fluently movement of blocks)
    if ( get_theme_mod( 'airinblog_cus_flow_block', 1 ) == 1 ) {
        wp_enqueue_script(
            'airinblog-script-flow-block',
            get_template_directory_uri() . '/js/flow-block.js',
            array(),
            AIRINBLOG_VERSION,
            true
        );
    }
    // Search
    if ( get_theme_mod( 'airinblog_cus_search', 'top-bar' ) != 'off' ) {
        wp_enqueue_script(
            'airinblog-script-top-search',
            get_template_directory_uri() . '/js/search/search.' . AIRINBLOG_MIN . 'js',
            array(),
            AIRINBLOG_VERSION
        );
    }
    // Top menu
    if ( get_theme_mod( 'airinblog_cus_top_menu', 0 ) != 1 ) {
        if ( get_theme_mod( 'airinblog_cus_top_menu_version', 'js' ) == 'js' ) {
            wp_enqueue_script(
                'airinblog-script-topmenu',
                get_template_directory_uri() . '/js/topmenu/topmenu.' . AIRINBLOG_MIN . 'js',
                array('jquery'),
                AIRINBLOG_VERSION,
                true
            );
            wp_enqueue_script(
                'airinblog-script-modal',
                get_template_directory_uri() . '/js/topmenu/modal.' . AIRINBLOG_MIN . 'js',
                array(),
                AIRINBLOG_VERSION,
                true
            );
        }
    }
    // Mega menu
    if ( get_theme_mod( 'airinblog_cus_main_menu', 0 ) != 1 ) {
        wp_enqueue_script(
            'airinblog-script-megamenu',
            get_template_directory_uri() . '/js/megamenu/megamenu.' . AIRINBLOG_MIN . 'js',
            array('jquery'),
            AIRINBLOG_VERSION,
            true
        );
        wp_localize_script( 'airinblog-script-megamenu', 'airinblog_localize_megamenu', array(
            'title_mobile' => esc_html__( "MENU", 'airin-blog' ),
        ) );
    }
    // Fixed menu
    if ( get_theme_mod( 'airinblog_cus_main_menu_fix', 0 ) == 1 ) {
        wp_enqueue_script(
            'airinblog-script-fixmenu',
            get_template_directory_uri() . '/js/fixmenu.js',
            array('jquery'),
            AIRINBLOG_VERSION,
            true
        );
    }
    // Connects comment-reply.js (moves the form for adding a comment under the comment, in which we clicked on the link - answer)
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    // Fonts
    $font_1 = esc_attr( get_theme_mod( 'airinblog_cus_typography_font', 'off' ) );
    if ( $font_1 !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-general', get_template_directory_uri() . '/fonts/' . $font_1 . '/font.css' );
    }
    $font_h = esc_attr( get_theme_mod( 'airinblog_cus_typography_h_font', 'off' ) );
    if ( $font_h !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-h', get_template_directory_uri() . '/fonts/' . $font_h . '/font.css' );
    }
    $site_h_font = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_h_font', 'off' ) );
    if ( $site_h_font !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-site-h', get_template_directory_uri() . '/fonts/' . $site_h_font . '/font.css' );
    }
    $site_des_font = esc_attr( get_theme_mod( 'airinblog_cus_title_tagline_des_font', 'off' ) );
    if ( $site_des_font !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-site-des', get_template_directory_uri() . '/fonts/' . $site_des_font . '/font.css' );
    }
    $h1_post_font = esc_attr( get_theme_mod( 'airinblog_cus_post_h1_font', 'off' ) );
    if ( $h1_post_font !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-h1-post', get_template_directory_uri() . '/fonts/' . $h1_post_font . '/font.css' );
    }
    $h2_post_font = esc_attr( get_theme_mod( 'airinblog_cus_post_h2_font', 'off' ) );
    if ( $h2_post_font !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-h2-post', get_template_directory_uri() . '/fonts/' . $h2_post_font . '/font.css' );
    }
    $h36_post_font = esc_attr( get_theme_mod( 'airinblog_cus_post_h36_font', 'off' ) );
    if ( $h36_post_font !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-h36-post', get_template_directory_uri() . '/fonts/' . $h36_post_font . '/font.css' );
    }
    $font_menu = esc_attr( get_theme_mod( 'airinblog_cus_main_menu_font', 'off' ) );
    if ( $font_menu !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-menu', get_template_directory_uri() . '/fonts/' . $font_menu . '/font.css' );
    }
    $font_h_widget = esc_attr( get_theme_mod( 'airinblog_cus_widget_sidebar_h_font', 'off' ) );
    if ( $font_h_widget !== 'off' ) {
        wp_enqueue_style( 'airinblog-style-font-h-widget', get_template_directory_uri() . '/fonts/' . $font_h_widget . '/font.css' );
    }
}

add_action( 'wp_enqueue_scripts', 'airinblog_fun_scripts', 1 );
// Admin panel
if ( is_admin() ) {
    // Connecting styles for the admin panel
    function airinblog_fun_admin_scripts() {
        // Connection JQuery
        wp_enqueue_script( 'jquery' );
        // Style file for admin panel
        wp_enqueue_style(
            'airinblog-style-admin',
            get_template_directory_uri() . '/css/admin/admin-style.css',
            array(),
            AIRINBLOG_VERSION
        );
    }

    add_action( 'admin_enqueue_scripts', 'airinblog_fun_admin_scripts' );
    // Connecting theme settings pages
    require get_template_directory() . '/inc/option/set.php';
    // Connecting TGM plugin
    if ( file_exists( get_template_directory() . '/inc/tgm/tgm.php' ) ) {
        require get_template_directory() . '/inc/tgm/tgm.php';
    }
}
// Customizer
if ( is_customize_preview() ) {
    // Customizer panel scripts
    function airinblog_fun_customize_scripts() {
        wp_enqueue_script(
            'airinblog-script-customizer-panel',
            get_template_directory_uri() . '/js/admin/customizer-panel.js',
            array('jquery'),
            AIRINBLOG_VERSION,
            true
        );
        wp_enqueue_style(
            'airinblog-style-customizer-panel',
            get_template_directory_uri() . '/css/admin/customizer-panel.css',
            array(),
            AIRINBLOG_VERSION
        );
    }

    add_action( 'customize_controls_enqueue_scripts', 'airinblog_fun_customize_scripts' );
    // Customizer preview scripts
    function airinblog_fun_customize_preview_js() {
        wp_enqueue_script(
            'airinblog-script-customizer-preview',
            get_template_directory_uri() . '/js/admin/customizer-preview.js',
            array('customize-preview', 'customize-selective-refresh'),
            AIRINBLOG_VERSION,
            true
        );
        wp_enqueue_style(
            'airinblog-style-customizer-preview',
            get_template_directory_uri() . '/css/admin/customizer-preview.css',
            array(),
            AIRINBLOG_VERSION
        );
    }

    add_action( 'customize_preview_init', 'airinblog_fun_customize_preview_js' );
    // Functions for customizer panel (general)
    require get_template_directory() . '/inc/admin/function-panel.php';
    // Functions for the customizer panel (social network)
    require get_template_directory() . '/inc/admin/function-panel-soc.php';
    // Customizer settings
    require get_template_directory() . '/inc/admin/customizer.php';
}
// Theme front customizer functions
require get_template_directory() . '/inc/function-customizer.php';
// Social links
require get_template_directory() . '/inc/module/soc-top.php';
// Posts meta tags
require get_template_directory() . '/inc/module/meta-tags.php';
// Connecting a file with functions for WooCommerce
if ( class_exists( 'woocommerce' ) ) {
    require get_template_directory() . '/inc/adaptation/function-woo.php';
}
// Connecting a file with functions for bbPress
if ( class_exists( 'bbpress' ) ) {
    require get_template_directory() . '/inc/adaptation/function-bbpress.php';
}
// Connecting a file with functions for BuddyPress
if ( class_exists( 'BuddyPress' ) ) {
    require get_template_directory() . '/inc/adaptation/function-buddypress.php';
}
// Connecting a file with functions for Elementor
if ( class_exists( 'Elementor\\Plugin' ) ) {
    require get_template_directory() . '/inc/adaptation/function-elementor.php';
}
// Connecting a file with functions for The Events Calendar
if ( class_exists( 'Tribe__Events__Main' ) || class_exists( 'Tribe__Events__Pro__Main' ) ) {
    require get_template_directory() . '/inc/adaptation/function-events-calendar.php';
}
// Connecting a file with functions for Contact Form 7
if ( class_exists( 'wpcf7' ) ) {
    require get_template_directory() . '/inc/adaptation/function-contact-form-7.php';
}
// Downloading the Jetpack Compatibility File
if ( class_exists( 'Jetpack' ) ) {
    require get_template_directory() . '/inc/adaptation/function-jetpack.php';
}
// Backward compatibility for older versions of WordPress
if ( !function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }

}