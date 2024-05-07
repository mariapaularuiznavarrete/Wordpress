<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Customizer
* ------------------------------------------------------------------------------ */
function airinblog_fun_customize_register(  $wp_customize  ) {
    // -----------------  Font array
    $airinblog_font = array(
        'off'        => esc_html__( 'Default', 'airin-blog' ),
        'bad-script' => 'Bad Script (italic)',
        'bitter'     => 'Bitter',
        'charis-sil' => 'Charis SIL',
        'cuprum'     => 'Cuprum',
        'exo-2'      => 'Exo 2',
        'jost'       => 'Jost',
        'open-sans'  => 'Open Sans',
        'oswald'     => 'Oswald',
        'play'       => 'Play (defoult)',
        'roboto'     => 'Roboto',
        'ubuntu'     => 'Ubuntu',
    );
    // Dividing lines
    if ( !function_exists( 'airinblog_fun_panel_line' ) ) {
        function airinblog_fun_panel_line() {
            echo '<hr>';
        }

    }
    /*---------------------------------------------------------------------------------------------------------------------------
    	Template orientation
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - Template orientation
    $wp_customize->add_section( 'airinblog_cus_section_lay', array(
        'priority' => 2,
        'title'    => esc_html__( 'Template orientation', 'airin-blog' ),
    ) );
    // -----------------  Sidebar orientation on the entire site
    $wp_customize->add_setting( 'airinblog_cus_lay_all', array(
        'default'           => 'right',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_lay_all', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Sidebar orientation on the entire site', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_all',
        'choices'  => array(
            'right'             => esc_html__( 'Right sidebar', 'airin-blog' ),
            'left'              => esc_html__( 'Left sidebar', 'airin-blog' ),
            'no_sidebar_full'   => esc_html__( 'No sidebar (full width)', 'airin-blog' ),
            'no_sidebar_center' => esc_html__( 'No sidebar (center)', 'airin-blog' ),
        ),
    ) );
    // -----------------  Sidebar orientation on main page
    $wp_customize->add_setting( 'airinblog_cus_lay_home', array(
        'default'           => 'right',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_lay_home', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Sidebar orientation on main page', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_home',
        'choices'  => array(
            'right'             => esc_html__( 'Right sidebar', 'airin-blog' ),
            'left'              => esc_html__( 'Left sidebar', 'airin-blog' ),
            'no_sidebar_full'   => esc_html__( 'No sidebar (full width)', 'airin-blog' ),
            'no_sidebar_center' => esc_html__( 'No sidebar (center)', 'airin-blog' ),
        ),
    ) );
    // -----------------  Dividing line - Template orientation
    class airinblog_cus_lay_panel_border extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_lay_panel_border', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_lay_panel_border($wp_customize, 'airinblog_cus_lay_set_panel_border', array(
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_panel_border',
    )) );
    // -----------------  Full width website
    $wp_customize->add_setting( 'airinblog_cus_lay_max_width', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_lay_max_width', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Full width website', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_max_width',
    ) );
    // -----------------  Add margin at the top and bottom of the site
    class airinblog_cus_lay_panel_h_1 extends WP_Customize_Control {
        function render_content() {
            ?><div class="airinblog-c-panel-text">
		<?php 
            echo esc_html__( 'Add margin at the top and bottom of the site (PC version only)', 'airin-blog' );
            ?></div><?php 
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_lay_panel_h_1', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_lay_panel_h_1($wp_customize, 'airinblog_cus_lay_set_panel_h_1', array(
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_panel_h_1',
    )) );
    // -----------------  Add margin at the top of the site
    $wp_customize->add_setting( 'airinblog_cus_lay_margin_top', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_lay_margin_top', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Top margin', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_margin_top',
        'choices'  => array(
            '0'   => esc_html__( 'Off', 'airin-blog' ),
            '25'  => '25 px',
            '50'  => '50 px',
            '75'  => '75 px',
            '100' => '100 px',
            '125' => '125 px',
            '150' => '150 px',
            '200' => '200 px',
        ),
    ) );
    // -----------------  Add margin at the bottom of the site
    $wp_customize->add_setting( 'airinblog_cus_lay_margin_bottom', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_lay_margin_bottom', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Bottom margin', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_lay',
        'settings' => 'airinblog_cus_lay_margin_bottom',
        'choices'  => array(
            '0'   => esc_html__( 'Off', 'airin-blog' ),
            '25'  => '25 px',
            '50'  => '50 px',
            '75'  => '75 px',
            '100' => '100 px',
            '125' => '125 px',
            '150' => '150 px',
            '200' => '200 px',
        ),
    ) );
    // -----------------  Primary theme color
    $wp_customize->add_setting( 'airinblog_cus_colors_primary', array(
        'default'              => '#dd9922',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_colors_primary', array(
        'label'       => esc_html__( 'Primary theme color', 'airin-blog' ),
        'description' => esc_html__( '(Buttons, icons, lines and other design elements)', 'airin-blog' ),
        'section'     => 'colors',
        'settings'    => 'airinblog_cus_colors_primary',
    )) );
    // -----------------  Related elements for the main theme color
    $wp_customize->add_setting( 'airinblog_cus_colors_primary_lite', array(
        'default'              => '#fffffc',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_colors_primary_lite', array(
        'label'       => esc_html__( 'Related elements for the main theme color', 'airin-blog' ),
        'description' => esc_html__( '(Buttons, icons, lines and other design elements)', 'airin-blog' ),
        'section'     => 'colors',
        'settings'    => 'airinblog_cus_colors_primary_lite',
    )) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	General typography
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - General typography
    $wp_customize->add_section( 'airinblog_cus_section_typography', array(
        'priority' => 5,
        'title'    => esc_html__( 'General typography', 'airin-blog' ),
    ) );
    // -----------------  General text font
    $wp_customize->add_setting( 'airinblog_cus_typography_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'General text font', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Overall text size
    $wp_customize->add_setting( 'airinblog_cus_typography_text_size', array(
        'default'           => 16,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_text_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Overall text size', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 16 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_typography',
        'settings'    => 'airinblog_cus_typography_text_size',
    ) );
    // -----------------  Total line height of text
    $wp_customize->add_setting( 'airinblog_cus_typography_text_hight', array(
        'default'           => '1.5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_text_hight', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Total line height of text', 'airin-blog' ),
        'description' => esc_html__( '0.8 - 5 (default 1.5)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_typography',
        'settings'    => 'airinblog_cus_typography_text_hight',
    ) );
    // -----------------  Dividing line - Template orientation
    class airinblog_cus_typography_panel_border extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_typography_panel_border', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_typography_panel_border($wp_customize, 'airinblog_cus_typography_set_panel_border', array(
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_panel_border',
    )) );
    // -----------------  General heading font
    $wp_customize->add_setting( 'airinblog_cus_typography_h_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'General heading font', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Total heading size h1
    $wp_customize->add_setting( 'airinblog_cus_typography_h1_size', array(
        'default'           => 32,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h1_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Total heading size h1 (5 - 100 px, default 32 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h1_size',
    ) );
    // -----------------  Total heading size h2
    $wp_customize->add_setting( 'airinblog_cus_typography_h2_size', array(
        'default'           => 26,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h2_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Total heading size H2 (5 - 100 px, default 26 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h2_size',
    ) );
    // -----------------  Total heading size h3
    $wp_customize->add_setting( 'airinblog_cus_typography_h3_size', array(
        'default'           => 24,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h3_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Total heading size H3 (5 - 100 px, default 24 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h3_size',
    ) );
    // -----------------  Total heading size h4
    $wp_customize->add_setting( 'airinblog_cus_typography_h4_size', array(
        'default'           => 22,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h4_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Total heading size H4 (5 - 100 px, default 22 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h4_size',
    ) );
    // -----------------  Total heading size h5
    $wp_customize->add_setting( 'airinblog_cus_typography_h5_size', array(
        'default'           => 20,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h5_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Total heading size H5 (5 - 100 px, default 20 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h5_size',
    ) );
    // -----------------  Total heading size h6
    $wp_customize->add_setting( 'airinblog_cus_typography_h6_size', array(
        'default'           => 18,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h6_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Total heading size H6 (5 - 100 px, default 18 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h6_size',
    ) );
    // -----------------  Overall header row height
    $wp_customize->add_setting( 'airinblog_cus_typography_h_hight', array(
        'default'           => '1.5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_typography_h_hight', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Overall header row height (0.8 - 5, default 1.5)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_typography',
        'settings' => 'airinblog_cus_typography_h_hight',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part
    	---------------------------------------------------------------------------------------------------------------------------*/
    $wp_customize->add_panel( 'airinblog_cus_panel_top', array(
        'capabitity' => 'edit_theme_options',
        'priority'   => 6,
        'title'      => esc_html__( 'Top part', 'airin-blog' ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Top bar
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Top bar
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_ticker', array(
        'selector' => '.airinblog-css-top-left',
    ) );
    // -----------------  Section - Top bar
    $wp_customize->add_section( 'airinblog_cus_section_top_bar', array(
        'title'    => esc_html__( 'Top bar', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_top',
        'priority' => 10,
    ) );
    // -----------------  Display option - Ticker or date
    $wp_customize->add_setting( 'airinblog_cus_ticker', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_ticker', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Display option (Ticker or Date)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_ticker',
        'choices'  => array(
            '0' => esc_html__( 'Off', 'airin-blog' ),
            '1' => esc_html__( 'Ticker', 'airin-blog' ),
            '2' => esc_html__( 'Date', 'airin-blog' ),
        ),
    ) );
    // -----------------  Proportion of width occupied by top menu
    $wp_customize->add_setting( 'airinblog_cus_ticker_width', array(
        'default'           => 50,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_ticker_width', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Proportion of width occupied by top menu', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_ticker_width',
        'choices'  => array(
            '30'  => '30%',
            '50'  => '50%',
            '70'  => '70%',
            '100' => '100%',
        ),
    ) );
    // -----------------  Ticker category
    $categories = get_categories();
    $cats = array(
        'default' => '',
    );
    foreach ( $categories as $category ) {
        $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting( 'airinblog_cus_ticker_cat', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_home_slider_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_ticker_cat', array(
        'label'       => esc_html__( 'Category where the ticker comes from', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_top_bar',
        'type'        => 'select',
        'description' => esc_html__( 'Ticker is taken from the title of the last entry in the selected category', 'airin-blog' ),
        'choices'     => $cats,
    ) );
    // -----------------  Text size
    $wp_customize->add_setting( 'airinblog_cus_ticker_size', array(
        'default'           => 14,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_ticker_size', array(
        'label'       => esc_html__( 'Text size', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 14 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_top_bar',
        'type'        => 'number',
    ) );
    // -----------------  Uppercase text
    $wp_customize->add_setting( 'airinblog_cus_ticker_up', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_ticker_up', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Uppercase text', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_ticker_up',
    ) );
    // -----------------  Where to get the date
    $wp_customize->add_setting( 'airinblog_cus_date', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_date', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Where to get the date', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_date',
        'choices'  => array(
            '1' => esc_html__( 'Set settings here', 'airin-blog' ),
            '2' => esc_html__( 'From WordPress settings', 'airin-blog' ),
        ),
    ) );
    // -----------------  Date format
    $wp_customize->add_setting( 'airinblog_cus_date_format', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_date_format', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Date format', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_date_format',
        'choices'  => array(
            '1' => esc_html__( 'Date + Month + Year', 'airin-blog' ),
            '2' => esc_html__( 'Month + Date + Year', 'airin-blog' ),
            '3' => esc_html__( 'Year + Month + Date', 'airin-blog' ),
        ),
    ) );
    // -----------------  Separator between numbers
    $wp_customize->add_setting( 'airinblog_cus_date_sup', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_date_sup', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Separator between numbers', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_date_sup',
        'choices'  => array(
            '1' => esc_html__( 'Spaces', 'airin-blog' ),
            '2' => esc_html__( 'Dash ( - )', 'airin-blog' ),
            '3' => esc_html__( 'Dot ( . )', 'airin-blog' ),
            '4' => esc_html__( 'Slash ( / )', 'airin-blog' ),
            '5' => esc_html__( 'Vertical line ( | )', 'airin-blog' ),
        ),
    ) );
    // -----------------  Display weeks
    $wp_customize->add_setting( 'airinblog_cus_date_week', array(
        'default'           => 'before',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_date_week', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Display weeks', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_date_week',
        'choices'  => array(
            'off'    => esc_html__( 'Off', 'airin-blog' ),
            'before' => esc_html__( 'Before', 'airin-blog' ),
            'after'  => esc_html__( 'After', 'airin-blog' ),
        ),
    ) );
    // -----------------  Month in letters
    $wp_customize->add_setting( 'airinblog_cus_date_month', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_date_month', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Month in letters', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_date_month',
    ) );
    // -----------------  Display year
    $wp_customize->add_setting( 'airinblog_cus_date_year', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_date_year', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Display year', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_bar',
        'settings' => 'airinblog_cus_date_year',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Top menu
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Top menu
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_top_menu', array(
        'type'                => 'airinblog_redact',
        'selector'            => '.airinblog-css-top-menu',
        'container_inclusive' => true,
        'render_callback'     => '',
        'transport'           => 'postMessage',
    ) );
    // -----------------  Section - Top menu
    $wp_customize->add_section( 'airinblog_cus_section_top_menu', array(
        'title'    => esc_html__( 'Top menu', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_top',
        'priority' => 11,
    ) );
    // -----------------  Remove top menu
    $wp_customize->add_setting( 'airinblog_cus_top_menu', array(
        'default'           => 0,
        'transport'         => 'postMessage',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_menu', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove top menu', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_menu',
        'settings' => 'airinblog_cus_top_menu',
    ) );
    // -----------------  Top menu text size
    $wp_customize->add_setting( 'airinblog_cus_top_menu_size', array(
        'default'           => 14,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_menu_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Top menu text size', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 14 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_top_menu',
        'settings'    => 'airinblog_cus_top_menu_size',
    ) );
    // -----------------  Top menu text size (mobile)
    $wp_customize->add_setting( 'airinblog_cus_top_menu_mobile_a_size', array(
        'default'           => 16,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_menu_mobile_a_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Top menu text size (mobile)', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 16 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_top_menu',
        'settings'    => 'airinblog_cus_top_menu_mobile_a_size',
    ) );
    // -----------------  Header area width with logo
    $wp_customize->add_setting( 'airinblog_cus_top_menu_version', array(
        'default'           => 'js',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_menu_version', array(
        'type'        => 'radio',
        'label'       => esc_html__( 'Relieve the menu (replace with lightweight)', 'airin-blog' ),
        'description' => esc_html__( '
			This will disable the heavy menu and enable the pure CSS menu.
			Pros: Disables JS scripts, which can be important for speed since the menu is at the top of the site.
			Cons: Support for keyboard control will be disabled. The arrows (icons) of the menu control are disabled.', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_top_menu',
        'settings'    => 'airinblog_cus_top_menu_version',
        'choices'     => array(
            'js'    => esc_html__( 'JS Menu', 'airin-blog' ),
            'light' => esc_html__( 'Lightweight menu', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Header image (Header media file)
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Header image
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_header_image_soc', array(
        'selector' => '.airinblog-css-site-brand-top',
    ) );
    // -----------------  Move social links in the header over the image
    $wp_customize->add_setting( 'airinblog_cus_header_image_soc', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_header_image_soc', array(
        'priority'    => 1,
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Move social links in the header over the image', 'airin-blog' ),
        'description' => esc_html__( '(For this to work, you need to activate social links in the "Social Links" section)', 'airin-blog' ),
        'section'     => 'header_image',
        'settings'    => 'airinblog_cus_header_image_soc',
    ) );
    // -----------------  Enable effect (live picture)
    $wp_customize->add_setting( 'airinblog_cus_header_image_live', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_header_image_live', array(
        'priority' => 2,
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Enable effect (live picture)', 'airin-blog' ),
        'section'  => 'header_image',
        'settings' => 'airinblog_cus_header_image_live',
    ) );
    // -----------------  Header image link
    $wp_customize->add_setting( 'airinblog_cus_header_image_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_header_image_link', array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header image link', 'airin-blog' ),
        'description' => esc_html__( 'This works when you click on the image', 'airin-blog' ),
        'section'     => 'header_image',
        'settings'    => 'airinblog_cus_header_image_link',
        'priority'    => 5,
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Title and logo (Base Section - Site properties)
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Title and logo
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_title_tagline_h_font', array(
        'selector' => '.airinblog-css-site-brand-bottom-1',
    ) );
    // -----------------  Changing a parameter transport
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    // Page reload via js
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    // -----------------  Changing the title of a setting (site header text color)
    $wp_customize->get_control( 'custom_logo' )->label = esc_html__( 'Fixed size logo', 'airin-blog' );
    $wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site title and description text color', 'airin-blog' );
    // -----------------  Adding a Setting Description (Display title and description)
    $wp_customize->get_control( 'custom_logo' )->description = esc_html__( 'The selected image will be compressed to the optimal size 150 x 100 px', 'airin-blog' );
    $wp_customize->get_control( 'display_header_text' )->description = esc_html__( '(If disabled, the title is hidden only visually. The entered text will continue to be present for the main page in h1 tags)', 'airin-blog' );
    // -----------------  Changing a parameter priority
    $wp_customize->get_control( 'display_header_text' )->priority = 2;
    $wp_customize->get_control( 'custom_logo' )->priority = 50;
    // -----------------  Header area width with logo
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_width', array(
        'default'           => 50,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_width', array(
        'type'        => 'select',
        'label'       => esc_html__( 'Header area width with logo', 'airin-blog' ),
        'description' => esc_html__( 'Specify 100% for center the title', 'airin-blog' ),
        'section'     => 'title_tagline',
        'settings'    => 'airinblog_cus_title_tagline_width',
        'choices'     => array(
            '20'  => '20%',
            '30'  => '30%',
            '40'  => '40%',
            '50'  => '50%',
            '60'  => '60%',
            '70'  => '70%',
            '80'  => '80%',
            '100' => '100%',
        ),
    ) );
    // -----------------  Remove the dividing line
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_line', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_line', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove the dividing line', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_line',
    ) );
    // -----------------  Dividing line
    class airinblog_cus_title_tagline_panel_border_1 extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_title_tagline_panel_border_1', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_title_tagline_panel_border_1($wp_customize, 'airinblog_cus_title_tagline_set_panel_border_1', array(
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_panel_border_1',
    )) );
    // -----------------  Site title font
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_h_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_h_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Site title font', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_h_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Site title size
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_h_size', array(
        'default'           => 32,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_h_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Site title size (5 - 100 px, default 32 px)', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_h_size',
    ) );
    // -----------------  Site title row height
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_h_hight', array(
        'default'           => '1.5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_h_hight', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Site title row height (0.8 - 5, default 1.5)', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_h_hight',
    ) );
    // -----------------  Dividing line
    class airinblog_cus_title_tagline_panel_border_2 extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_title_tagline_panel_border_2', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_title_tagline_panel_border_2($wp_customize, 'airinblog_cus_title_tagline_set_panel_border_2', array(
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_panel_border_2',
    )) );
    // -----------------  Site description font
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_des_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_des_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Site description font', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_des_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Site description size
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_des_size', array(
        'default'           => 16,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_des_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Site description size (5 - 50 px, default 16 px)', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_des_size',
    ) );
    // -----------------  Site description row height
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_des_hight', array(
        'default'           => '1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_des_hight', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Site description row height (0.8 - 5, default 1)', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_des_hight',
    ) );
    // -----------------  Dividing line
    class airinblog_cus_title_tagline_panel_border_3 extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_title_tagline_panel_border_3', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_title_tagline_panel_border_3($wp_customize, 'airinblog_cus_title_tagline_set_panel_border_3', array(
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_panel_border_3',
    )) );
    // -----------------  Orientation of the logo and site name
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_logo_layout', array(
        'default'           => 'horizont',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_logo_layout', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Orientation of the logo and site name', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_logo_layout',
        'choices'  => array(
            'horizont' => esc_html__( 'Horizontally', 'airin-blog' ),
            'vertical' => esc_html__( 'Vertical', 'airin-blog' ),
        ),
    ) );
    // -----------------  Logo variation
    $wp_customize->add_setting( 'airinblog_cus_title_tagline_logo_var', array(
        'default'           => 'fix',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_title_tagline_logo_var', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Logo variation', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_title_tagline_logo_var',
        'choices'  => array(
            'fix'  => esc_html__( 'Size fixed', 'airin-blog' ),
            'free' => esc_html__( 'No limits', 'airin-blog' ),
        ),
    ) );
    // -----------------  Logo without limits
    $wp_customize->add_setting( 'airinblog_cus_supple_logo', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_img_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'airinblog_cus_supple_logo', array(
        'label'    => esc_html__( 'Logo without limits', 'airin-blog' ),
        'section'  => 'title_tagline',
        'settings' => 'airinblog_cus_supple_logo',
        'priority' => 50,
    )) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Social links
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Social links
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_soc', array(
        'selector' => '.airinblog-css-soc-top-box',
    ) );
    // -----------------  Section - Social links
    $wp_customize->add_section( 'airinblog_cus_section_soc', array(
        'title'    => esc_html__( 'Social links', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_top',
        'priority' => 40,
    ) );
    // -----------------  Activate social links
    $wp_customize->add_setting( 'airinblog_cus_soc', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_soc', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate social links', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_soc',
        'settings' => 'airinblog_cus_soc',
    ) );
    // -----------------  Social link size
    $wp_customize->add_setting( 'airinblog_cus_soc_size', array(
        'default'           => 44,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_soc_size', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Social link size', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_soc',
        'settings' => 'airinblog_cus_soc_size',
        'choices'  => array(
            '34' => esc_html__( 'Small', 'airin-blog' ),
            '44' => esc_html__( 'Average', 'airin-blog' ),
            '54' => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // -----------------  Soc form array
    $soc_form = array(
        'square'             => esc_html__( 'Square', 'airin-blog' ),
        'circle'             => esc_html__( 'Circle', 'airin-blog' ),
        'without-background' => esc_html__( 'Without background', 'airin-blog' ),
    );
    $soc_form = apply_filters( 'dmcwzmulti_filter_soc_form', $soc_form );
    // -----------------  Social link form
    $wp_customize->add_setting( 'airinblog_cus_soc_form', array(
        'default'           => 'square',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_soc_form', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Social link form', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_soc',
        'settings' => 'airinblog_cus_soc_form',
        'choices'  => $soc_form,
    ) );
    // -----------------  Social link design (for icons with background) array
    $soc_design_back = array(
        'flat'       => esc_html__( 'Flat', 'airin-blog' ),
        'volumetric' => esc_html__( 'Volumetric', 'airin-blog' ),
    );
    $soc_design_back = apply_filters( 'dmcwzmulti_filter_soc_design_back', $soc_design_back );
    // -----------------  Social link design (for icons with background)
    $wp_customize->add_setting( 'airinblog_cus_soc_design_back', array(
        'default'           => 'flat',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_soc_design_back', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Social link design (for icons with background)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_soc',
        'settings' => 'airinblog_cus_soc_design_back',
        'choices'  => $soc_design_back,
    ) );
    // -----------------  Social link design (for icons no background) array
    $soc_design_no_back = array(
        'only-black-line' => esc_html__( 'Black', 'airin-blog' ),
        'only-white-line' => esc_html__( 'White', 'airin-blog' ),
    );
    $soc_design_no_back = apply_filters( 'dmcwzmulti_filter_soc_design_no_back', $soc_design_no_back );
    // -----------------  Social link design (for icons no background)
    $wp_customize->add_setting( 'airinblog_cus_soc_design_no_back', array(
        'default'           => 'only-black-line',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_soc_design_no_back', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Social link design (for icons no background)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_soc',
        'settings' => 'airinblog_cus_soc_design_no_back',
        'choices'  => $soc_design_no_back,
    ) );
    // -----------------  Animation of social links
    $wp_customize->add_setting( 'airinblog_cus_soc_anime', array(
        'default'           => 'a5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_soc_anime', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Animation of social links', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_soc',
        'settings' => 'airinblog_cus_soc_anime',
        'choices'  => array(
            'a0'  => esc_html__( 'Without animation', 'airin-blog' ),
            'a1'  => esc_html__( 'Increase', 'airin-blog' ),
            'a2'  => esc_html__( 'Zoom (with background)', 'airin-blog' ),
            'a3'  => esc_html__( 'Reduction', 'airin-blog' ),
            'a4'  => esc_html__( 'Zoom out (with background)', 'airin-blog' ),
            'a5'  => esc_html__( 'Frame around the link', 'airin-blog' ),
            'a6'  => esc_html__( 'Increasing contrast', 'airin-blog' ),
            'a7'  => esc_html__( 'Hue change', 'airin-blog' ),
            'a8'  => esc_html__( 'Color inversion', 'airin-blog' ),
            'a9'  => esc_html__( 'Dimming adjacent links', 'airin-blog' ),
            'a10' => esc_html__( 'Slight slope', 'airin-blog' ),
        ),
    ) );
    // -----------------  Social links fill color
    $wp_customize->add_setting( 'airinblog_cus_soc_back_color', array(
        'default'              => '',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_soc_back_color', array(
        'label'       => esc_html__( 'Social links fill color', 'airin-blog' ),
        'description' => esc_html__( 'Default - main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_soc',
        'settings'    => 'airinblog_cus_soc_back_color',
    )) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Top search
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Top search
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_search', array(
        'selector' => '.airinblog-css-soc-search',
    ) );
    // -----------------  Section - Top search
    $wp_customize->add_section( 'airinblog_cus_section_search', array(
        'title'    => esc_html__( 'Top search', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_top',
        'priority' => 40,
    ) );
    // -----------------  Activate top Search
    $wp_customize->add_setting( 'airinblog_cus_search', array(
        'default'           => 'top-bar',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_search', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Activate top Search', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_search',
        'settings' => 'airinblog_cus_search',
        'choices'  => array(
            'off'        => esc_html__( 'Off', 'airin-blog' ),
            'top-bar'    => esc_html__( 'In a top bar', 'airin-blog' ),
            'soc-before' => esc_html__( 'In area of soc links (before)', 'airin-blog' ),
            'soc-after'  => esc_html__( 'In area of soc links (after)', 'airin-blog' ),
        ),
    ) );
    // -----------------  Use social icon styles
    $wp_customize->add_setting( 'airinblog_cus_search_soc', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_search_soc', array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Use social icon styles', 'airin-blog' ),
        'description' => esc_html__( '(For this to work, you need to activate social links in the "Social Links" section)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_search',
        'settings'    => 'airinblog_cus_search_soc',
    ) );
    // -----------------  Search button size
    $wp_customize->add_setting( 'airinblog_cus_search_size', array(
        'default'           => 'search-small',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_search_size', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Search button size', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_search',
        'settings' => 'airinblog_cus_search_size',
        'choices'  => array(
            'search-very-small' => esc_html__( 'Very small', 'airin-blog' ),
            'search-small'      => esc_html__( 'Small', 'airin-blog' ),
            'search-mid'        => esc_html__( 'Average', 'airin-blog' ),
            'search-big'        => esc_html__( 'Big', 'airin-blog' ),
            'search-very-big'   => esc_html__( 'Very big', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Top part - Main menu
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Top part - Main menu
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_main_menu', array(
        'type'                => 'airinblog_redact',
        'selector'            => '.airinblog-css-mega-menu',
        'container_inclusive' => true,
        'render_callback'     => '',
        'transport'           => 'postMessage',
    ) );
    // -----------------  Section - Main menu
    $wp_customize->add_section( 'airinblog_cus_section_main_menu', array(
        'title'    => esc_html__( 'Main menu', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_top',
        'priority' => 50,
    ) );
    // -----------------  Remove main menu
    $wp_customize->add_setting( 'airinblog_cus_main_menu', array(
        'default'           => 0,
        'transport'         => 'postMessage',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove main menu', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu',
    ) );
    // -----------------  Main menu item orientation
    $wp_customize->add_setting( 'airinblog_cus_main_menu_layout', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_layout', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Orientation for main menu items', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_layout',
        'choices'  => array(
            'v1' => esc_html__( 'Left', 'airin-blog' ),
            'v2' => esc_html__( 'Right', 'airin-blog' ),
            'v3' => esc_html__( 'Center', 'airin-blog' ),
            'v4' => esc_html__( 'Distributed', 'airin-blog' ),
        ),
    ) );
    // -----------------  Height of main menu items
    $wp_customize->add_setting( 'airinblog_cus_main_menu_height', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_height', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Height of main menu items', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_height',
        'choices'  => array(
            '1' => esc_html__( 'Small', 'airin-blog' ),
            '2' => esc_html__( 'Medium', 'airin-blog' ),
            '3' => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // -----------------  Background color main menu, footer and widget titles
    $wp_customize->add_setting( 'airinblog_cus_main_menu_back_color', array(
        'default'              => '#505050',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_main_menu_back_color', array(
        'label'    => esc_html__( 'Background color main menu, footer and widget titles', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_back_color',
    )) );
    // -----------------  Main menu item font
    $wp_customize->add_setting( 'airinblog_cus_main_menu_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Main menu item font', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Main menu items text size
    $wp_customize->add_setting( 'airinblog_cus_main_menu_size', array(
        'default'           => 15,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_size', array(
        'label'       => esc_html__( 'Main menu items text size', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 15 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_main_menu',
        'type'        => 'number',
    ) );
    // -----------------  Main menu items titles in uppercase
    $wp_customize->add_setting( 'airinblog_cus_main_menu_text_up', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_text_up', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Main menu items titles in uppercase', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_text_up',
    ) );
    // -----------------  Main menu background in full screen width
    $wp_customize->add_setting( 'airinblog_cus_main_menu_full_width', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_full_width', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Main menu background in full screen width', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_full_width',
    ) );
    // -----------------  Make main menu sticky when scrolling
    $wp_customize->add_setting( 'airinblog_cus_main_menu_fix', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_fix', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Make main menu sticky when scrolling (only for desktop versions of pc)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_fix',
    ) );
    // -----------------  Number of columns in mega menu
    $wp_customize->add_setting( 'airinblog_cus_main_menu_mega_column', array(
        'default'           => 4,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_main_menu_mega_column', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Number of columns in mega menu', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_main_menu',
        'settings' => 'airinblog_cus_main_menu_mega_column',
        'choices'  => array(
            '1' => esc_html__( 'One', 'airin-blog' ),
            '2' => esc_html__( 'Two', 'airin-blog' ),
            '3' => esc_html__( 'Three', 'airin-blog' ),
            '4' => esc_html__( 'Four', 'airin-blog' ),
            '5' => esc_html__( 'Five', 'airin-blog' ),
            '6' => esc_html__( 'Six', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Categories
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Panel - Categories
    $wp_customize->add_panel( 'airinblog_cus_panel_cat', array(
        'capabitity'  => 'edit_theme_options',
        'description' => esc_html__( 'Categories settings', 'airin-blog' ),
        'priority'    => 10,
        'title'       => esc_html__( 'Categories', 'airin-blog' ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Categories - Category style
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Categories - Category style
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_cat_style_win', array(
        'selector' => '.airinblog-css-cat-box',
    ) );
    // -----------------  Section - Category style
    $wp_customize->add_section( 'airinblog_cus_section_cat_style', array(
        'priority' => 10,
        'title'    => esc_html__( 'Category style', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_cat',
    ) );
    // -----------------  Number (size) of columns in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_win', array(
        'default'           => 'w3',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_win', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Number (size) of columns in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_win',
        'choices'  => array(
            'w1' => esc_html__( 'Classic blog', 'airin-blog' ),
            'w2' => esc_html__( 'Two columns', 'airin-blog' ),
            'w3' => esc_html__( 'Three columns', 'airin-blog' ),
            'w4' => esc_html__( 'Four columns', 'airin-blog' ),
            'w5' => esc_html__( 'Five columns', 'airin-blog' ),
        ),
    ) );
    // ----------------- Design - Posts blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_design', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_design', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Design for posts blocks in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_design',
        'choices'  => array(
            'v0' => esc_html__( 'Simple', 'airin-blog' ),
            'v1' => esc_html__( 'Default', 'airin-blog' ),
            'v2' => esc_html__( 'Underlined', 'airin-blog' ),
            'v3' => esc_html__( 'In frame', 'airin-blog' ),
            'v4' => esc_html__( 'Header background', 'airin-blog' ),
            'v5' => esc_html__( 'Deepening', 'airin-blog' ),
            'v6' => esc_html__( 'Light shadow', 'airin-blog' ),
            'v7' => esc_html__( 'Soaring', 'airin-blog' ),
        ),
    ) );
    // -----------------  Animation for posts blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_anime', array(
        'default'           => 'a1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_anime', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Animation for posts blocks in categories (on hover)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_anime',
        'choices'  => array(
            'a0'  => esc_html__( 'Without animation', 'airin-blog' ),
            'a1'  => esc_html__( 'Enlargement picture', 'airin-blog' ),
            'a2'  => esc_html__( 'Reducing picture', 'airin-blog' ),
            'a3'  => esc_html__( 'Darkened image', 'airin-blog' ),
            'a4'  => esc_html__( 'Curtain on picture', 'airin-blog' ),
            'a5'  => esc_html__( 'Picture frame', 'airin-blog' ),
            'a6'  => esc_html__( 'Frame around', 'airin-blog' ),
            'a7'  => esc_html__( 'Backlight picture', 'airin-blog' ),
            'a8'  => esc_html__( 'Picture contrast', 'airin-blog' ),
            'a9'  => esc_html__( 'Tint picture', 'airin-blog' ),
            'a10' => esc_html__( 'Color inversion picture', 'airin-blog' ),
            'a11' => esc_html__( 'Remove color in neighboring blocks', 'airin-blog' ),
            'a12' => esc_html__( 'Toning neighboring blocks', 'airin-blog' ),
            'a13' => esc_html__( 'Block slope', 'airin-blog' ),
        ),
    ) );
    // -----------------  Background color for posts blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_back_color', array(
        'default'              => '',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_cat_style_back_color', array(
        'label'    => esc_html__( 'Background color for posts blocks in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_back_color',
    )) );
    // -----------------  Background color of sticky posts
    $wp_customize->add_setting( 'airinblog_cus_cat_style_back_sticky', array(
        'default'              => '',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_cat_style_back_sticky', array(
        'label'    => esc_html__( 'Background color of sticky posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_back_sticky',
    )) );
    // -----------------  Post card title size
    $wp_customize->add_setting( 'airinblog_cus_cat_style_h_size', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_h_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Post card title size (5 - 50 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_h_size',
    ) );
    // -----------------  Post card description size
    $wp_customize->add_setting( 'airinblog_cus_cat_style_text_size', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_30',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_text_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Post card description size (5 - 30 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_text_size',
    ) );
    // -----------------  Number of symbols in description
    $wp_customize->add_setting( 'airinblog_cus_cat_style_letters', array(
        'default'           => 150,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_50_1000',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_letters', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Number of symbols in description', 'airin-blog' ),
        'description' => esc_html__( '50 - 1000 (default 150 symbols)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_cat_style',
        'settings'    => 'airinblog_cus_cat_style_letters',
    ) );
    // -----------------  Dividing line - Category style
    class airinblog_cus_cat_style_panel_border_1 extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_cat_style_panel_border_1', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_cat_style_panel_border_1($wp_customize, 'airinblog_cus_cat_style_set_panel_border_1', array(
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_panel_border_1',
    )) );
    // -----------------  Add a "Read more" button
    $wp_customize->add_setting( 'airinblog_cus_cat_style_more', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_more', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add a "Read more" button', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_more',
    ) );
    // -----------------  Full width "Read more" button
    $wp_customize->add_setting( 'airinblog_cus_cat_style_more_width', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_more_width', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Full width "Read more" button', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_more_width',
    ) );
    // -----------------  Centered "Read more" button
    $wp_customize->add_setting( 'airinblog_cus_cat_style_more_center', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_more_center', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show "Read more" button in the center', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_more_center',
    ) );
    // -----------------  Dividing line 2 - Category style
    class airinblog_cus_cat_style_panel_border_2 extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_cat_style_panel_border_2', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_cat_style_panel_border_2($wp_customize, 'airinblog_cus_cat_style_set_panel_border_2', array(
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_panel_border_2',
    )) );
    // -----------------  Remove the prefix "Category" on category pages
    $wp_customize->add_setting( 'airinblog_cus_cat_style_h_prefix', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_h_prefix', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove the prefix "Category" on category pages', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_h_prefix',
    ) );
    // -----------------  Remove description from posts blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_entry_none', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_entry_none', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove description from posts blocks in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_entry_none',
    ) );
    // -----------------  Remove title from posts blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_title_none', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_title_none', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove title from posts blocks in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_title_none',
    ) );
    // -----------------  Remove the stub "No photo" from posts blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_style_nofoto_none', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_style_nofoto_none', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove the stub "No photo" from posts blocks in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_cat_style',
        'settings' => 'airinblog_cus_cat_style_nofoto_none',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Categories - Meta tags in categories
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Categories - Meta tags in categories
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_cat_meta', array(
        'selector' => '.airinblog-css-cat-meta-boxs',
    ) );
    // -----------------  Section - Meta tags in categories
    $wp_customize->add_section( 'airinblog_cus_section_meta_cat', array(
        'priority' => 10,
        'title'    => esc_html__( 'Meta tags in categories', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_cat',
    ) );
    // -----------------  Activate - Meta tags in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_meta', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate - Meta tags in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta',
    ) );
    // -----------------  Title 1 - What meta tags to display
    class airinblog_cus_cat_meta_panel_text_1 extends WP_Customize_Control {
        function render_content() {
            ?><div class="airinblog-c-panel-text"><?php 
            echo esc_html__( 'What meta tags to display', 'airin-blog' );
            ?></div><?php 
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_cat_meta_panel_text_1', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_cat_meta_panel_text_1($wp_customize, 'airinblog_cus_cat_meta_set_panel_text_1', array(
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_panel_text_1',
    )) );
    // -----------------  Post author
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_autor', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_autor', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post author', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_autor',
    ) );
    // -----------------  Post creation date
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_data', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_data', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post creation date', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_data',
    ) );
    // -----------------  Post update date
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_update', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_update', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post update date', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_update',
    ) );
    // -----------------  Number of comments
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_comment', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_comment', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Number of comments', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_comment',
    ) );
    // -----------------  Number of post views
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_view', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_view', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Number of post views', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_view',
    ) );
    // -----------------  Title 2 - Which taxonomy to display
    class airinblog_cus_cat_meta_panel_text_2 extends WP_Customize_Control {
        function render_content() {
            ?><div class="airinblog-c-panel-text"><?php 
            echo esc_html__( 'Which taxonomy to display', 'airin-blog' );
            ?></div><?php 
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_cat_meta_panel_text_2', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_cat_meta_panel_text_2($wp_customize, 'airinblog_cus_cat_meta_set_panel_text_2', array(
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_panel_text_2',
    )) );
    // -----------------  Post categories
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_cat', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_cat', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_cat',
    ) );
    // -----------------  Post tags
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_activ_tag', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_activ_tag', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post tags', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_activ_tag',
    ) );
    // -----------------  Meta tag design
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_design', array(
        'default'           => 'v0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_design', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Meta tag design', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_design',
        'choices'  => array(
            'v0' => esc_html__( 'Simple', 'airin-blog' ),
            'v1' => esc_html__( 'Frame', 'airin-blog' ),
            'v2' => esc_html__( 'Underlined', 'airin-blog' ),
            'v3' => esc_html__( 'Soaring', 'airin-blog' ),
            'v4' => esc_html__( 'Deepening', 'airin-blog' ),
            'v5' => esc_html__( 'Background', 'airin-blog' ),
        ),
    ) );
    // -----------------  Meta tag size
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_size', array(
        'default'           => 'small',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_size', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Meta tag size', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_size',
        'choices'  => array(
            'small' => esc_html__( 'Small', 'airin-blog' ),
            'big'   => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // -----------------  Align meta blocks to the center
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_center', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_center', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Align meta blocks to the center', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_center',
    ) );
    // -----------------  Add tooltips to meta blocks in categories
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_prompt', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_prompt', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add tooltips to meta blocks in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_prompt',
    ) );
    // -----------------  Add decryption of meta tags to meta blocks
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_label_block', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_label_block', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add decryption of meta tags to meta blocks', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_label_block',
    ) );
    // -----------------  Add decryption of meta tags in taxonomy
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_label_tax', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_label_tax', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add decryption of meta tags in taxonomy', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_label_tax',
    ) );
    // -----------------  Remove meta tag icons
    $wp_customize->add_setting( 'airinblog_cus_cat_meta_icon_none', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_cat_meta_icon_none', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove meta tag icons', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_meta_cat',
        'settings' => 'airinblog_cus_cat_meta_icon_none',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Categories - Pagination
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Categories - Pagination
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_pagination_variant', array(
        'selector' => '.nav-links, .airinblog-css-loadmore',
    ) );
    // -----------------  Section - Pagination
    $wp_customize->add_section( 'airinblog_cus_section_pagination', array(
        'priority' => 20,
        'title'    => esc_html__( 'Pagination', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_cat',
    ) );
    // ----------------- Activate pagination in categories
    $wp_customize->add_setting( 'airinblog_cus_pagination_cat_activ', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_cat_activ', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate pagination in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_cat_activ',
    ) );
    // ----------------- Activate pagination on the homepage
    $wp_customize->add_setting( 'airinblog_cus_pagination_home_activ', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_home_activ', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate pagination on the homepage', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_home_activ',
    ) );
    // -----------------  Pagination variation
    $wp_customize->add_setting( 'airinblog_cus_pagination_variant', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_variant', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Pagination variation', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_variant',
        'choices'  => array(
            'v0' => esc_html__( 'Defoult (Back and forward)', 'airin-blog' ),
            'v1' => esc_html__( 'Numeric pagination', 'airin-blog' ),
            'v2' => esc_html__( 'Button (Show more)', 'airin-blog' ),
        ),
    ) );
    // -----------------  Pagination block design
    $wp_customize->add_setting( 'airinblog_cus_pagination_design', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_design', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Pagination block design', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_design',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1' => esc_html__( 'Buttons', 'airin-blog' ),
            'v2' => esc_html__( 'Frames', 'airin-blog' ),
        ),
    ) );
    // -----------------  Location of the pagination block
    $wp_customize->add_setting( 'airinblog_cus_pagination_layout', array(
        'default'           => 'v2',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_layout', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Location of the pagination block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_layout',
        'choices'  => array(
            'v0' => esc_html__( 'Left', 'airin-blog' ),
            'v1' => esc_html__( 'Right', 'airin-blog' ),
            'v2' => esc_html__( 'Center', 'airin-blog' ),
            'v3' => esc_html__( 'Full width', 'airin-blog' ),
        ),
    ) );
    // -----------------  Pagination block size
    $wp_customize->add_setting( 'airinblog_cus_pagination_size', array(
        'default'           => 'v2',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_size', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Pagination block size', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_size',
        'choices'  => array(
            'v1' => esc_html__( 'Small', 'airin-blog' ),
            'v2' => esc_html__( 'Average', 'airin-blog' ),
            'v3' => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // ----------------- Remove buttons (back and next) from numeric pagination
    $wp_customize->add_setting( 'airinblog_cus_pagination_next', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_next', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove buttons (back and next) from numeric pagination', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_next',
    ) );
    // ----------------- Show all pagination items (for numeric)
    $wp_customize->add_setting( 'airinblog_cus_pagination_num_all', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_num_all', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show all pagination items (for numeric)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_pagination',
        'settings' => 'airinblog_cus_pagination_num_all',
    ) );
    // ----------------- Remove hidden H2 tag from pagination
    $wp_customize->add_setting( 'airinblog_cus_pagination_tag_h2', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_pagination_tag_h2', array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Remove hidden H2 tag from pagination', 'airin-blog' ),
        'description' => esc_html__( 'Removing H2 tag from pagination is good for SEO, but worse for special programs (for the visually impaired)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_pagination',
        'settings'    => 'airinblog_cus_pagination_tag_h2',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Panel - Posts and pages
    $wp_customize->add_panel( 'airinblog_cus_panel_post', array(
        'title'    => esc_html__( 'Posts and pages', 'airin-blog' ),
        'priority' => 40,
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Basic settings
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Basic settings
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_general', array(
        'selector' => '.airinblog-css-mod-pp-content, .airinblog-css-post-content, .airinblog-css-page-content',
    ) );
    // -----------------  Section - Basic settings
    $wp_customize->add_section( 'airinblog_cus_section_post_general', array(
        'title' => esc_html__( 'Basic settings', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Where to display typography
    $wp_customize->add_setting( 'airinblog_cus_post_general', array(
        'default'           => 'post',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_general', array(
        'type'        => 'radio',
        'label'       => esc_html__( 'Where to display typography', 'airin-blog' ),
        'description' => esc_html__( 'Lists, block quotes, headings', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_general',
        'settings'    => 'airinblog_cus_post_general',
        'choices'     => array(
            'post' => esc_html__( 'Only posts', 'airin-blog' ),
            'page' => esc_html__( 'Only pages', 'airin-blog' ),
            'pp'   => esc_html__( 'Posts and pages', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Top image
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Top image
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_img_top_post', array(
        'selector' => '.airinblog-css-post-thumbnail',
    ) );
    // -----------------  Section - Top image
    $wp_customize->add_section( 'airinblog_cus_section_post_img', array(
        'title' => esc_html__( 'Top image', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // ----------------- Remove the main (top) image in posts
    $wp_customize->add_setting( 'airinblog_cus_post_img_top_post', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_img_top_post', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove the main (top) image in posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_img',
        'settings' => 'airinblog_cus_post_img_top_post',
    ) );
    // ----------------- Remove the main (top) image in pages
    $wp_customize->add_setting( 'airinblog_cus_post_img_top_page', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_img_top_page', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove the main (top) image in pages', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_img',
        'settings' => 'airinblog_cus_post_img_top_page',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Meta tags in posts
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Meta tags in posts
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_meta', array(
        'selector' => '.airinblog-css-post-meta-boxs',
    ) );
    // -----------------  Section - Meta tags in posts
    $wp_customize->add_section( 'airinblog_cus_section_post_meta', array(
        'title' => esc_html__( 'Meta tags in posts', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Activate meta tags in posts
    $wp_customize->add_setting( 'airinblog_cus_post_meta', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate meta tags in posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta',
    ) );
    // -----------------  Title 1 - What meta tags to display
    class airinblog_cus_post_meta_panel_text_1 extends WP_Customize_Control {
        function render_content() {
            ?><div class="airinblog-c-panel-text"><?php 
            echo esc_html__( 'What meta tags to display', 'airin-blog' );
            ?></div><?php 
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_post_meta_panel_text_1', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_post_meta_panel_text_1($wp_customize, 'airinblog_cus_post_meta_set_panel_text_1', array(
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_panel_text_1',
    )) );
    // -----------------  Post author
    $wp_customize->add_setting( 'airinblog_cus_post_meta_autor', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_autor', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post author', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_autor',
    ) );
    // -----------------  Post creation date
    $wp_customize->add_setting( 'airinblog_cus_post_meta_data', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_data', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post creation date', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_data',
    ) );
    // -----------------  Post update date
    $wp_customize->add_setting( 'airinblog_cus_post_meta_update', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_update', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post update date', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_update',
    ) );
    // -----------------  Number of comments
    $wp_customize->add_setting( 'airinblog_cus_post_meta_comment', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_comment', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Number of comments', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_comment',
    ) );
    // -----------------  Post reading time
    $wp_customize->add_setting( 'airinblog_cus_post_meta_time', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_time', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post reading time', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_time',
    ) );
    // -----------------  Number of post views
    $wp_customize->add_setting( 'airinblog_cus_post_meta_view', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_view', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Number of post views', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_view',
    ) );
    // -----------------  Title 2 - Which taxonomy to display
    class airinblog_cus_post_meta_panel_text_2 extends WP_Customize_Control {
        function render_content() {
            ?><div class="airinblog-c-panel-text"><?php 
            echo esc_html__( 'Which taxonomy to display', 'airin-blog' );
            ?></div><?php 
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_post_meta_panel_text_2', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_post_meta_panel_text_2($wp_customize, 'airinblog_cus_post_meta_set_panel_text_2', array(
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_panel_text_2',
    )) );
    // -----------------  Post categories
    $wp_customize->add_setting( 'airinblog_cus_post_meta_cat', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_cat', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_cat',
    ) );
    // -----------------  Post tags
    $wp_customize->add_setting( 'airinblog_cus_post_meta_tag', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_tag', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Post tags', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_tag',
    ) );
    // -----------------  Meta tag design
    $wp_customize->add_setting( 'airinblog_cus_post_meta_design', array(
        'default'           => 'v0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_design', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Meta tag design', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_design',
        'choices'  => array(
            'v0' => esc_html__( 'Simple', 'airin-blog' ),
            'v1' => esc_html__( 'Frames', 'airin-blog' ),
            'v2' => esc_html__( 'Underlined', 'airin-blog' ),
            'v3' => esc_html__( 'Soaring', 'airin-blog' ),
            'v4' => esc_html__( 'Deepening', 'airin-blog' ),
            'v5' => esc_html__( 'Background', 'airin-blog' ),
        ),
    ) );
    // -----------------  Meta tag size
    $wp_customize->add_setting( 'airinblog_cus_post_meta_size', array(
        'default'           => 'big',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_size', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Meta tag size', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_size',
        'choices'  => array(
            'small' => esc_html__( 'Small', 'airin-blog' ),
            'big'   => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // -----------------  Align meta blocks to the center
    $wp_customize->add_setting( 'airinblog_cus_post_meta_center', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_center', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Align meta blocks to the center', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_center',
    ) );
    // -----------------  Add tooltips to meta blocks in posts
    $wp_customize->add_setting( 'airinblog_cus_post_meta_prompt', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_prompt', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add tooltips to meta blocks in posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_prompt',
    ) );
    // -----------------  Remove decryption in meta blocks
    $wp_customize->add_setting( 'airinblog_cus_post_meta_label_block', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_label_block', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove decryption in meta blocks', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_label_block',
    ) );
    // -----------------  Remove decryption in taxonomies
    $wp_customize->add_setting( 'airinblog_cus_post_meta_label_tax', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_label_tax', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove decryption in taxonomies', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_label_tax',
    ) );
    // -----------------  Remove meta tag icons
    $wp_customize->add_setting( 'airinblog_cus_post_meta_icon', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_icon', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove meta tag icons', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_icon',
    ) );
    // -----------------  Where to display meta tags for categories
    $wp_customize->add_setting( 'airinblog_cus_post_meta_layout_cat', array(
        'default'           => 'top',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_layout_cat', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Where to display meta tags for categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_layout_cat',
        'choices'  => array(
            'top'    => esc_html__( 'Top', 'airin-blog' ),
            'bottom' => esc_html__( 'Bottom', 'airin-blog' ),
        ),
    ) );
    // -----------------  Where to display meta tags for tags
    $wp_customize->add_setting( 'airinblog_cus_post_meta_layout_tag', array(
        'default'           => 'bottom',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_meta_layout_tag', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Where to display meta tags for tags', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_meta',
        'settings' => 'airinblog_cus_post_meta_layout_tag',
        'choices'  => array(
            'top'    => esc_html__( 'Top', 'airin-blog' ),
            'bottom' => esc_html__( 'Bottom', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Lists
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Lists (bulleted lists)
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_li_mark', array(
        'selector' => '.airinblog-css-mod-pp-content > ul, .airinblog-css-post-content > ul, .airinblog-css-page-content > ul',
    ) );
    // -----------------  Marker - Posts and pages - Lists (numeric lists)
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_li_num', array(
        'selector' => '.airinblog-css-mod-pp-content > ol, .airinblog-css-post-content > ol, .airinblog-css-page-content > ol',
    ) );
    // -----------------  Section - Lists
    $wp_customize->add_section( 'airinblog_cus_section_post_li', array(
        'title' => esc_html__( 'Lists', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Bulleted lists variation
    $wp_customize->add_setting( 'airinblog_cus_post_li_mark', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_li_mark', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Bulleted lists variation', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_li',
        'settings' => 'airinblog_cus_post_li_mark',
        'choices'  => array(
            'v0'  => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1'  => esc_html__( 'Small square', 'airin-blog' ),
            'v2'  => esc_html__( 'Small circle', 'airin-blog' ),
            'v3'  => esc_html__( 'Square frame', 'airin-blog' ),
            'v4'  => esc_html__( 'Small dash', 'airin-blog' ),
            'v5'  => esc_html__( 'Big dot', 'airin-blog' ),
            'v6'  => esc_html__( 'Big square', 'airin-blog' ),
            'v7'  => esc_html__( 'Big circle', 'airin-blog' ),
            'v8'  => esc_html__( 'Rounded square frame', 'airin-blog' ),
            'v9'  => esc_html__( 'Big dash', 'airin-blog' ),
            'v10' => esc_html__( 'Check mark', 'airin-blog' ),
            'v11' => esc_html__( 'Rhombus', 'airin-blog' ),
            'v12' => esc_html__( 'Triangle', 'airin-blog' ),
            'v13' => esc_html__( 'Star', 'airin-blog' ),
            'v14' => esc_html__( 'Snowflake', 'airin-blog' ),
        ),
    ) );
    // -----------------  Numeric lists variation
    $wp_customize->add_setting( 'airinblog_cus_post_li_num', array(
        'default'           => 'v5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_li_num', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Numeric lists variation', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_li',
        'settings' => 'airinblog_cus_post_li_num',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1' => esc_html__( 'Colored square', 'airin-blog' ),
            'v2' => esc_html__( 'Square frame', 'airin-blog' ),
            'v3' => esc_html__( 'Colored circle', 'airin-blog' ),
            'v4' => esc_html__( 'Round frame', 'airin-blog' ),
            'v5' => esc_html__( 'Colored numbers', 'airin-blog' ),
            'v6' => esc_html__( 'Colored numbers (bold)', 'airin-blog' ),
            'v7' => esc_html__( 'Latin numerals', 'airin-blog' ),
            'v8' => esc_html__( 'Colored letters (EN)', 'airin-blog' ),
        ),
    ) );
    // -----------------  Dividing line - Numbered lists
    class airinblog_cus_post_li_panel_border extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_post_li_panel_border', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_post_li_panel_border($wp_customize, 'airinblog_cus_post_li_set_panel_border', array(
        'section'  => 'airinblog_cus_section_post_li',
        'settings' => 'airinblog_cus_post_li_panel_border',
    )) );
    // -----------------  Marker color - bulleted lists
    $wp_customize->add_setting( 'airinblog_cus_post_li_mark_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_li_mark_color', array(
        'label'       => esc_html__( 'Marker color - bulleted lists', 'airin-blog' ),
        'description' => esc_html__( 'Default - main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_li',
        'settings'    => 'airinblog_cus_post_li_mark_color',
    )) );
    // -----------------  Marker color - numbered lists
    $wp_customize->add_setting( 'airinblog_cus_post_li_num_back_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_li_num_back_color', array(
        'label'       => esc_html__( 'Marker color - numbered lists', 'airin-blog' ),
        'description' => esc_html__( 'Default - main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_li',
        'settings'    => 'airinblog_cus_post_li_num_back_color',
    )) );
    // -----------------  Inner color for marker - numbered lists
    $wp_customize->add_setting( 'airinblog_cus_post_li_num_text_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_li_num_text_color', array(
        'label'       => esc_html__( 'Inner color for marker - numbered lists', 'airin-blog' ),
        'description' => esc_html__( 'Default - related elements for main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_li',
        'settings'    => 'airinblog_cus_post_li_num_text_color',
    )) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Quote blocks
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Quote blocks
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_quote_icon', array(
        'selector' => '.airinblog-css-mod-pp-content > blockquote, .airinblog-css-post-content > blockquote, .airinblog-css-page-content > blockquote',
    ) );
    // -----------------  Section - Quote blocks
    $wp_customize->add_section( 'airinblog_cus_section_post_quote', array(
        'title' => esc_html__( 'Quote blocks', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Quote block design
    $wp_customize->add_setting( 'airinblog_cus_post_quote', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Design for quote block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_quote',
        'settings' => 'airinblog_cus_post_quote',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1' => esc_html__( 'Just a block', 'airin-blog' ),
            'v2' => esc_html__( 'Gradient 1 (fill)', 'airin-blog' ),
            'v3' => esc_html__( 'Gradient 2 (fill)', 'airin-blog' ),
            'v4' => esc_html__( 'Grid (fill)', 'airin-blog' ),
            'v5' => esc_html__( 'Folded corner', 'airin-blog' ),
            'v6' => esc_html__( 'Solid frame', 'airin-blog' ),
            'v7' => esc_html__( 'Dotted frame', 'airin-blog' ),
            'v8' => esc_html__( 'Border left', 'airin-blog' ),
            'v9' => esc_html__( 'Double border', 'airin-blog' ),
        ),
    ) );
    // -----------------  Quote block background color
    $wp_customize->add_setting( 'airinblog_cus_post_quote_back_color', array(
        'default'              => '',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_quote_back_color', array(
        'label'       => esc_html__( 'Background color for quote block', 'airin-blog' ),
        'description' => esc_html__( 'Some styles work well with the background', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_back_color',
    )) );
    // -----------------  Automatic background color for block quotes
    $wp_customize->add_setting( 'airinblog_cus_post_quote_auto_color', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote_auto_color', array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Activate - Automatic background color for block quotes', 'airin-blog' ),
        'description' => esc_html__( '(The color is selected based on the background of the content part)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_auto_color',
    ) );
    // -----------------  Quote block text color
    $wp_customize->add_setting( 'airinblog_cus_post_quote_text_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_quote_text_color', array(
        'label'       => esc_html__( 'Text color for quote block', 'airin-blog' ),
        'description' => esc_html__( 'Default - general text color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_text_color',
    )) );
    // -----------------  Dividing line - Quote block
    class airinblog_cus_post_quote_panel_border extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_post_quote_panel_border', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_post_quote_panel_border($wp_customize, 'airinblog_cus_post_quote_set_panel_border', array(
        'section'  => 'airinblog_cus_section_post_quote',
        'settings' => 'airinblog_cus_post_quote_panel_border',
    )) );
    // -----------------  Add icon to quote block
    $wp_customize->add_setting( 'airinblog_cus_post_quote_icon', array(
        'default'           => 1,
        'transport'         => 'postMessage',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote_icon', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add icon to quote block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_quote',
        'settings' => 'airinblog_cus_post_quote_icon',
    ) );
    // -----------------  Choosing the location of the icon in the quote block
    $wp_customize->add_setting( 'airinblog_cus_post_quote_icon_layout', array(
        'default'           => 2,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote_icon_layout', array(
        'type'        => 'select',
        'label'       => esc_html__( 'Choosing the location of the icon in the quote block', 'airin-blog' ),
        'description' => esc_html__( 'Together with the icon, the text is also aligned', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_icon_layout',
        'choices'     => array(
            '1' => esc_html__( 'Left', 'airin-blog' ),
            '2' => esc_html__( 'Centered', 'airin-blog' ),
        ),
    ) );
    // -----------------  Selecting an icon for the quote block
    $wp_customize->add_setting( 'airinblog_cus_post_quote_icon_select', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote_icon_select', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Selecting an icon for the quote block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_quote',
        'settings' => 'airinblog_cus_post_quote_icon_select',
        'choices'  => array(
            'v1'  => esc_html__( 'Square quotes', 'airin-blog' ),
            'v2'  => esc_html__( 'Rectangular quotes', 'airin-blog' ),
            'v3'  => esc_html__( 'Sharp quotes', 'airin-blog' ),
            'v4'  => esc_html__( 'Round quotes', 'airin-blog' ),
            'v5'  => esc_html__( 'Paper clip', 'airin-blog' ),
            'v6'  => esc_html__( 'Paper clip (vertical)', 'airin-blog' ),
            'v7'  => esc_html__( 'Drawing pin', 'airin-blog' ),
            'v8'  => esc_html__( 'Drawing pin (vertical)', 'airin-blog' ),
            'v9'  => esc_html__( 'Bulb', 'airin-blog' ),
            'v10' => esc_html__( 'Bell', 'airin-blog' ),
            'v11' => esc_html__( 'Attention triangle', 'airin-blog' ),
            'v12' => esc_html__( 'Exclamation sheet', 'airin-blog' ),
            'v13' => esc_html__( 'Exclamation mark', 'airin-blog' ),
            'v14' => esc_html__( 'Cloud conversation', 'airin-blog' ),
            'v15' => esc_html__( 'Speaker', 'airin-blog' ),
            'v16' => esc_html__( 'Open book', 'airin-blog' ),
            'v17' => esc_html__( 'Embossed tick', 'airin-blog' ),
            'v18' => esc_html__( 'Solid tick', 'airin-blog' ),
        ),
    ) );
    // -----------------  Quote block icons color
    $wp_customize->add_setting( 'airinblog_cus_post_quote_icon_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_quote_icon_color', array(
        'label'       => esc_html__( 'Icons color for quote block', 'airin-blog' ),
        'description' => esc_html__( 'Default - related elements for main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_icon_color',
    )) );
    // -----------------  Quote block icon size
    $wp_customize->add_setting( 'airinblog_cus_post_quote_icon_size', array(
        'default'           => 24,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote_icon_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Icon size for quote block', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 24 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_icon_size',
    ) );
    // -----------------  Add background for icon
    $wp_customize->add_setting( 'airinblog_cus_post_quote_icon_back_activ', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_quote_icon_back_activ', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add background for icon', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_quote',
        'settings' => 'airinblog_cus_post_quote_icon_back_activ',
    ) );
    // -----------------  Background color of icons and lines for block quotes
    $wp_customize->add_setting( 'airinblog_cus_post_quote_element_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_quote_element_color', array(
        'label'       => esc_html__( 'Background color of icons and lines for block quotes', 'airin-blog' ),
        'description' => esc_html__( 'Default - main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_quote',
        'settings'    => 'airinblog_cus_post_quote_element_color',
    )) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - H1 headings
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - H1 headings
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_h1_color', array(
        'selector' => '.airinblog-css-mod-pp-content > h1, .airinblog-css-post-content > h1, .airinblog-css-page-content > h1, .airinblog-css-mod-pp-header h1, .airinblog-css-post-header h1, .airinblog-css-page-header h1',
    ) );
    // -----------------  Section - H1 headings
    $wp_customize->add_section( 'airinblog_cus_section_post_h1', array(
        'title' => esc_html__( 'H1 headings', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Text color of H1 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h1_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h1_color', array(
        'label'       => esc_html__( 'Text color of H1 headings', 'airin-blog' ),
        'description' => esc_html__( 'Default - titles text general color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h1',
        'settings'    => 'airinblog_cus_post_h1_color',
    )) );
    // -----------------  Header H1 Font
    $wp_customize->add_setting( 'airinblog_cus_post_h1_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h1_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Header H1 Font', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h1',
        'settings' => 'airinblog_cus_post_h1_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Header H1 text size
    $wp_customize->add_setting( 'airinblog_cus_post_h1_size', array(
        'default'           => 32,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h1_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Header H1 text size', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 32 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h1',
        'settings'    => 'airinblog_cus_post_h1_size',
    ) );
    // -----------------  Header H1 row height
    $wp_customize->add_setting( 'airinblog_cus_post_h1_hight', array(
        'default'           => '1.5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h1_hight', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Header H1 row height (0.8 - 5, default 1.5)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h1',
        'settings' => 'airinblog_cus_post_h1_hight',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Headings H2
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Headings H2
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_h2', array(
        'selector' => '.airinblog-css-mod-pp-content > h2, .airinblog-css-post-content > h2, .airinblog-css-page-content > h2',
    ) );
    // -----------------  Section - Headings H2
    $wp_customize->add_section( 'airinblog_cus_section_post_h2', array(
        'title' => esc_html__( 'Headings H2', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  H2 headings variation
    $wp_customize->add_setting( 'airinblog_cus_post_h2', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2', array(
        'type'     => 'select',
        'label'    => esc_html__( 'H2 headings variation', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2',
        'choices'  => array(
            'off' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v0'  => esc_html__( 'Simple headers', 'airin-blog' ),
            'v1'  => esc_html__( 'Light underlining', 'airin-blog' ),
            'v2'  => esc_html__( 'Side border', 'airin-blog' ),
            'v3'  => esc_html__( 'With numbering', 'airin-blog' ),
            'v4'  => esc_html__( 'With icon selection', 'airin-blog' ),
            'v5'  => esc_html__( 'With arbitrary value', 'airin-blog' ),
        ),
    ) );
    // -----------------  H2 heading icon selection
    $wp_customize->add_setting( 'airinblog_cus_post_h2_icon_select', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2_icon_select', array(
        'type'     => 'select',
        'label'    => esc_html__( 'H2 heading icon selection', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2_icon_select',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off icons', 'airin-blog' ),
            'v1' => esc_html__( 'Right arrow', 'airin-blog' ),
            'v2' => esc_html__( 'Arrow to down', 'airin-blog' ),
            'v3' => esc_html__( 'Arrow right and down', 'airin-blog' ),
            'v4' => esc_html__( 'Volumetric arrow', 'airin-blog' ),
            'v5' => esc_html__( 'Pencil', 'airin-blog' ),
            'v6' => esc_html__( 'Check mark', 'airin-blog' ),
            'v7' => esc_html__( 'Small flag', 'airin-blog' ),
            'v8' => esc_html__( 'Blocks', 'airin-blog' ),
            'v9' => esc_html__( 'Block hierarchy', 'airin-blog' ),
        ),
    ) );
    // -----------------  Add label to header H2 counter
    $wp_customize->add_setting( 'airinblog_cus_post_h2_count_text', array(
        'default'           => esc_html__( 'Par.', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2_count_text', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Add label to header H2 counter', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2_count_text',
    ) );
    // -----------------  Add custom value for H2 header
    $wp_customize->add_setting( 'airinblog_cus_post_h2_tag', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2_tag', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Add custom value for H2 header', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2_tag',
    ) );
    // -----------------  H2 heading icons text color
    $wp_customize->add_setting( 'airinblog_cus_post_h2_icon_text_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h2_icon_text_color', array(
        'label'       => esc_html__( 'H2 heading icons text color', 'airin-blog' ),
        'description' => esc_html__( 'Default - related elements for main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h2',
        'settings'    => 'airinblog_cus_post_h2_icon_text_color',
    )) );
    // -----------------  Background color of icons and lines of H2 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h2_element_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h2_element_color', array(
        'label'       => esc_html__( 'Background color of icons and lines of H2 headings', 'airin-blog' ),
        'description' => esc_html__( 'Default - main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h2',
        'settings'    => 'airinblog_cus_post_h2_element_color',
    )) );
    // -----------------  Dividing line - H2 post headings
    class airinblog_cus_post_h2_panel_border extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_post_h2_panel_border', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_post_h2_panel_border($wp_customize, 'airinblog_cus_post_h2_set_panel_border', array(
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2_panel_border',
    )) );
    // -----------------  Background color of H2 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h2_back_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h2_back_color', array(
        'label'       => esc_html__( 'Background color of H2 headings', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h2',
        'description' => esc_html__( 'Default - site body background color', 'airin-blog' ),
        'settings'    => 'airinblog_cus_post_h2_back_color',
    )) );
    // -----------------  Text color of H2 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h2_text_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h2_text_color', array(
        'label'       => esc_html__( 'Text color of H2 headings', 'airin-blog' ),
        'description' => esc_html__( 'Default - titles text general color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h2',
        'settings'    => 'airinblog_cus_post_h2_text_color',
    )) );
    // -----------------  Font for H2 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h2_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Font for H2 headings', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Text size of H2 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h2_size', array(
        'default'           => 26,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Text size of H2 headings', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 26 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h2',
        'settings'    => 'airinblog_cus_post_h2_size',
    ) );
    // -----------------  Row height of H2 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h2_hight', array(
        'default'           => '1.5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h2_hight', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Row height of H2 headings (0.8 - 5, default 1.5)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h2',
        'settings' => 'airinblog_cus_post_h2_hight',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Headings H3 - H6
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Headings H3 - H6
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_h36', array(
        'selector' => '.airinblog-css-mod-pp-content > h3, .airinblog-css-post-content > h3, .airinblog-css-page-content > h3',
    ) );
    // -----------------  Section - Headings H3 - H6
    $wp_customize->add_section( 'airinblog_cus_section_post_h36', array(
        'title' => esc_html__( 'Headings H3 - H6', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  H3 - H6 headings variation
    $wp_customize->add_setting( 'airinblog_cus_post_h36', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36', array(
        'type'     => 'select',
        'label'    => esc_html__( 'H3 - H6 headings variation', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36',
        'choices'  => array(
            'off' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v0'  => esc_html__( 'Simple headers', 'airin-blog' ),
            'v1'  => esc_html__( 'Light underlining', 'airin-blog' ),
            'v2'  => esc_html__( 'Side border', 'airin-blog' ),
            'v3'  => esc_html__( 'With numbering', 'airin-blog' ),
            'v4'  => esc_html__( 'With icon selection', 'airin-blog' ),
            'v5'  => esc_html__( 'With arbitrary value', 'airin-blog' ),
        ),
    ) );
    // -----------------  H3 - H6 heading icon selection
    $wp_customize->add_setting( 'airinblog_cus_post_h36_icon_select', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_icon_select', array(
        'type'     => 'select',
        'label'    => esc_html__( 'H3 - H6 heading icon selection', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36_icon_select',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off icons', 'airin-blog' ),
            'v1' => esc_html__( 'Right arrow', 'airin-blog' ),
            'v2' => esc_html__( 'Arrow to down', 'airin-blog' ),
            'v3' => esc_html__( 'Arrow right and down', 'airin-blog' ),
            'v4' => esc_html__( 'Volumetric arrow', 'airin-blog' ),
            'v5' => esc_html__( 'Pencil', 'airin-blog' ),
            'v6' => esc_html__( 'Check mark', 'airin-blog' ),
            'v7' => esc_html__( 'Small flag', 'airin-blog' ),
            'v8' => esc_html__( 'Blocks', 'airin-blog' ),
            'v9' => esc_html__( 'Block hierarchy', 'airin-blog' ),
        ),
    ) );
    // -----------------  Add label to header H3 - H6 counter
    $wp_customize->add_setting( 'airinblog_cus_post_h36_count_text', array(
        'default'           => esc_html__( 'Par.', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_count_text', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Add label to header H3 - H6 counter', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36_count_text',
    ) );
    // -----------------  Add custom value for H3 - H6 header
    $wp_customize->add_setting( 'airinblog_cus_post_h36_tag', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_tag', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Add custom value for H3 - H6 header', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36_tag',
    ) );
    // -----------------  H3 - H6 heading icons text color
    $wp_customize->add_setting( 'airinblog_cus_post_h36_icon_text_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h36_icon_text_color', array(
        'label'       => esc_html__( 'H3 - H6 heading icons text color', 'airin-blog' ),
        'description' => esc_html__( 'Default - related elements for main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_icon_text_color',
    )) );
    // -----------------  Background color of icons and lines of H3 - H6 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_element_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h36_element_color', array(
        'label'       => esc_html__( 'Background color of icons and lines for H3 - H6 headings', 'airin-blog' ),
        'description' => esc_html__( 'Default - main theme color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_element_color',
    )) );
    // -----------------  Dividing line - H3 - H6 post headings
    class airinblog_cus_post_h36_panel_border extends WP_Customize_Control {
        function render_content() {
            airinblog_fun_panel_line();
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_post_h36_panel_border', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_post_h36_panel_border($wp_customize, 'airinblog_cus_post_h36_set_panel_border', array(
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36_panel_border',
    )) );
    // -----------------  Background color of H3 - H6 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_back_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h36_back_color', array(
        'label'       => esc_html__( 'Background color of H3 - H6 headings', 'airin-blog' ),
        'description' => esc_html__( 'Default - site body background color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_back_color',
    )) );
    // -----------------  Text color of H3 - H6 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_text_color', array(
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'airinblog_fun_color_hex_sanitize',
        'sanitize_js_callback' => 'airinblog_fun_color_sanitize',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'airinblog_cus_post_h36_text_color', array(
        'label'       => esc_html__( 'Text color of H3 - H6 headings', 'airin-blog' ),
        'description' => esc_html__( 'Default - titles text general color', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_text_color',
    )) );
    // -----------------  Font for H3 - H6 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Font for H3 - H6 headings', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Text size of H3 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_h3_size', array(
        'default'           => 24,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_h3_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Text size of H3 headings', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 24 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_h3_size',
    ) );
    // -----------------  Text size of H4 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_h4_size', array(
        'default'           => 22,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_h4_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Text size of H4 headings', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 22 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_h4_size',
    ) );
    // -----------------  Text size of H5 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_h5_size', array(
        'default'           => 20,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_h5_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Text size of H5 headings', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 20 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_h5_size',
    ) );
    // -----------------  Text size of H6 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_h6_size', array(
        'default'           => 18,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_100',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_h6_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Text size of H6 headings', 'airin-blog' ),
        'description' => esc_html__( '5 - 100 px (default 18 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_h36',
        'settings'    => 'airinblog_cus_post_h36_h6_size',
    ) );
    // -----------------  Row height of H3 - H6 headings
    $wp_customize->add_setting( 'airinblog_cus_post_h36_hight', array(
        'default'           => '1.5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_08_5',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_h36_hight', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Row height of H3 - H6 headings (0.8 - 5, default 1.5)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_h36',
        'settings' => 'airinblog_cus_post_h36_hight',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Links in content
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - Links in content
    $wp_customize->add_section( 'airinblog_cus_section_post_link', array(
        'title' => esc_html__( 'Links in content', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Remove link underline
    $wp_customize->add_setting( 'airinblog_cus_post_link_underline', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_link_underline', array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Remove link underline', 'airin-blog' ),
        'description' => esc_html__( 'This removes the underlining of links in the content text', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_link',
        'settings'    => 'airinblog_cus_post_link_underline',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Author block
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Author block
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_bio', array(
        'selector' => '.airinblog-css-bio-post-box',
    ) );
    // -----------------  Section - Author block
    $wp_customize->add_section( 'airinblog_cus_section_post_bio', array(
        'title' => esc_html__( 'Author block', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Activate author block
    $wp_customize->add_setting( 'airinblog_cus_post_bio', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate author section', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio',
    ) );
    // -----------------  Author block separator variation
    $wp_customize->add_setting( 'airinblog_cus_post_bio_design', array(
        'default'           => 'v3',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_design', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Separator variation for author block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_design',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off separators', 'airin-blog' ),
            'v1' => esc_html__( 'Soaring', 'airin-blog' ),
            'v2' => esc_html__( 'Deepening', 'airin-blog' ),
            'v3' => esc_html__( 'Dividers in width', 'airin-blog' ),
            'v4' => esc_html__( 'Dividers in center', 'airin-blog' ),
            'v5' => esc_html__( 'In frame', 'airin-blog' ),
        ),
    ) );
    // -----------------  Change the style of author block separators
    $wp_customize->add_setting( 'airinblog_cus_post_bio_design_line', array(
        'default'           => 'solid',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_design_line', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Change the style of author block separators', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_design_line',
        'choices'  => array(
            'solid'  => esc_html__( 'Solid line', 'airin-blog' ),
            'dashed' => esc_html__( 'Dashed line', 'airin-blog' ),
            'dotted' => esc_html__( 'Dotted line', 'airin-blog' ),
            'double' => esc_html__( 'Double line', 'airin-blog' ),
        ),
    ) );
    // -----------------  Changing the thickness of author block dividers
    $wp_customize->add_setting( 'airinblog_cus_post_bio_design_size', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_0_30',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_design_size', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Changing the thickness of separators in the author block', 'airin-blog' ),
        'description' => esc_html__( '0 - 30 px (default 1 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_post_bio',
        'settings'    => 'airinblog_cus_post_bio_design_size',
    ) );
    // -----------------  Add post date to author block
    $wp_customize->add_setting( 'airinblog_cus_post_bio_data', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_data', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Add post date to author block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_data',
    ) );
    // -----------------  Remove link from author name
    $wp_customize->add_setting( 'airinblog_cus_post_bio_autor_link', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_autor_link', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove link from author name', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_autor_link',
    ) );
    // -----------------  Hide avatar in author block
    $wp_customize->add_setting( 'airinblog_cus_post_bio_avatar', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_avatar', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Hide avatar in author block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_avatar',
    ) );
    // -----------------  Hide description in author block
    $wp_customize->add_setting( 'airinblog_cus_post_bio_description', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_description', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Hide description in author block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_description',
    ) );
    // -----------------  Add author latest posts to author block
    $wp_customize->add_setting( 'airinblog_cus_post_bio_related', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_related', array(
        'type'     => 'checkbox',
        'priority' => 40,
        'label'    => esc_html__( 'Add author latest posts to author block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_related',
    ) );
    // -----------------  Author posts title
    $wp_customize->add_setting( 'airinblog_cus_post_bio_related_h', array(
        'default'           => esc_html__( 'Latest entries of author', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_related_h', array(
        'type'     => 'text',
        'priority' => 40,
        'label'    => esc_html__( 'Author posts title', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_related_h',
    ) );
    // -----------------  Number of author posts in the author block
    $wp_customize->add_setting( 'airinblog_cus_post_bio_related_amount', array(
        'default'           => 5,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_1_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_bio_related_amount', array(
        'type'     => 'number',
        'priority' => 40,
        'label'    => esc_html__( 'Number of author posts in the author block (max 50)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_bio',
        'settings' => 'airinblog_cus_post_bio_related_amount',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Block (next entry)
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Block (next entry)
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_next', array(
        'selector' => '.airinblog-css-np-box',
    ) );
    // -----------------  Section - Block (next entry)
    $wp_customize->add_section( 'airinblog_cus_section_post_next', array(
        'title' => esc_html__( 'Section (next entry)', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Remove block (next entry)
    $wp_customize->add_setting( 'airinblog_cus_post_next', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_next', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove section (next entry)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_next',
        'settings' => 'airinblog_cus_post_next',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Related posts
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Related posts
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_related', array(
        'selector' => '.airinblog-css-related-section',
    ) );
    // -----------------  Section - Related posts
    $wp_customize->add_section( 'airinblog_cus_section_post_related', array(
        'title' => esc_html__( 'Related posts', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Activate related posts
    $wp_customize->add_setting( 'airinblog_cus_post_related', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate related posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related',
    ) );
    // -----------------  Title for block (Related posts)
    $wp_customize->add_setting( 'airinblog_cus_post_related_h', array(
        'default'           => esc_html__( 'Related posts', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related_h', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Title for block (Related posts)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related_h',
    ) );
    // -----------------  Number of columns for related posts
    $wp_customize->add_setting( 'airinblog_cus_post_related_grid', array(
        'default'           => 'r4',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related_grid', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Number of columns for related posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related_grid',
        'choices'  => array(
            'r3' => esc_html__( 'Three columns', 'airin-blog' ),
            'r4' => esc_html__( 'Four columns', 'airin-blog' ),
            'r5' => esc_html__( 'Five columns', 'airin-blog' ),
        ),
    ) );
    // -----------------  Number of related posts
    $wp_customize->add_setting( 'airinblog_cus_post_related_amount', array(
        'default'           => 8,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_1_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related_amount', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Number of related posts (max 50)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related_amount',
    ) );
    // -----------------  Taxonomy for related posts
    $wp_customize->add_setting( 'airinblog_cus_post_related_taxonomy', array(
        'default'           => 'cat',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related_taxonomy', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Taxonomy for related posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related_taxonomy',
        'choices'  => array(
            'cat' => esc_html__( 'Categories', 'airin-blog' ),
            'tag' => esc_html__( 'Tags', 'airin-blog' ),
        ),
    ) );
    // -----------------  Design for related posts
    $wp_customize->add_setting( 'airinblog_cus_post_related_design', array(
        'default'           => 'v0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related_design', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Design for related posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related_design',
        'choices'  => array(
            'v0' => esc_html__( 'Simple design', 'airin-blog' ),
            'v1' => esc_html__( 'Frames', 'airin-blog' ),
            'v2' => esc_html__( 'Contrast blocks', 'airin-blog' ),
            'v3' => esc_html__( 'Soaring blocks', 'airin-blog' ),
            'v4' => esc_html__( 'Polaroid', 'airin-blog' ),
        ),
    ) );
    // -----------------  Remove stub (No photo) in related posts
    $wp_customize->add_setting( 'airinblog_cus_post_related_nofoto', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_related_nofoto', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove stub (No photo) in related posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_related',
        'settings' => 'airinblog_cus_post_related_nofoto',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Posts and pages - Comment block
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Posts and pages - Comment block
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_post_comments_url', array(
        'selector' => '.comment-respond',
    ) );
    // -----------------  Section - Comment block
    $wp_customize->add_section( 'airinblog_cus_section_post_comments', array(
        'title' => esc_html__( 'Comment block', 'airin-blog' ),
        'panel' => 'airinblog_cus_panel_post',
    ) );
    // -----------------  Remove comment block (for posts)
    $wp_customize->add_setting( 'airinblog_cus_post_comments_posts', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_comments_posts', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove comment block (for posts)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_comments',
        'settings' => 'airinblog_cus_post_comments_posts',
    ) );
    // -----------------  Remove comment block (for pages)
    $wp_customize->add_setting( 'airinblog_cus_post_comments_pages', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_comments_pages', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove comment block (for pages)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_comments',
        'settings' => 'airinblog_cus_post_comments_pages',
    ) );
    // -----------------  Remove URL field in comments (for posts and pages)
    $wp_customize->add_setting( 'airinblog_cus_post_comments_url', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_post_comments_url', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove URL field in comments (for posts and pages)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_post_comments',
        'settings' => 'airinblog_cus_post_comments_url',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Main page
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - Main page
    $wp_customize->add_section( 'airinblog_cus_section_home', array(
        'title'    => esc_html__( 'Main page', 'airin-blog' ),
        'priority' => 50,
    ) );
    // -----------------  Enable the block with the latest posts on the main page
    $wp_customize->add_setting( 'airinblog_cus_home_article_block', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_home_article_block', array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Enable the block with the latest posts on the main page', 'airin-blog' ),
        'description' => esc_html__( '(Post blocks, as well as pagination, are configured in the "Categories" section)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_home',
        'settings'    => 'airinblog_cus_home_article_block',
    ) );
    // -----------------  Title for the latest posts block
    $wp_customize->add_setting( 'airinblog_cus_home_article_block_h', array(
        'default'           => esc_html__( 'Latest posts', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_home_article_block_h', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Title for the latest posts block', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_home',
        'settings' => 'airinblog_cus_home_article_block_h',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Different settings
    	---------------------------------------------------------------------------------------------------------------------------*/
    $wp_customize->add_panel( 'airinblog_cus_panel_mod', array(
        'capabitity' => 'edit_theme_options',
        'priority'   => 70,
        'title'      => esc_html__( 'Different settings', 'airin-blog' ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Different settings - Breadcrumbs
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Different settings - Breadcrumbs
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_bread_activ_post', array(
        'selector' => '.airinblog-css-breadcrumbs',
    ) );
    // -----------------  Section - Breadcrumbs
    $wp_customize->add_section( 'airinblog_cus_section_bread', array(
        'title'    => esc_html__( 'Breadcrumbs', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_mod',
        'priority' => 90,
    ) );
    // -----------------  Enable breadcrumbs in posts
    $wp_customize->add_setting( 'airinblog_cus_bread_activ_post', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_activ_post', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Enable breadcrumbs in posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_activ_post',
    ) );
    // -----------------  Enable breadcrumbs in categories
    $wp_customize->add_setting( 'airinblog_cus_bread_activ_cat', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_activ_cat', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Enable breadcrumbs in categories', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_activ_cat',
    ) );
    // -----------------  Show link to home page
    $wp_customize->add_setting( 'airinblog_cus_bread_main', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_main', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show link to home page', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_main',
    ) );
    // -----------------  Specify your text for the link (Default - Home)
    $wp_customize->add_setting( 'airinblog_cus_bread_main_text', array(
        'default'           => esc_html__( 'Home', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_main_text', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Specify your text for the link (Default - Home)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_main_text',
    ) );
    // -----------------  Show title in breadcrumb for posts
    $wp_customize->add_setting( 'airinblog_cus_bread_h_post', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_h_post', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show title in breadcrumb for posts', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_h_post',
    ) );
    // -----------------  Show title for categories, archives and tags
    $wp_customize->add_setting( 'airinblog_cus_bread_h_cat', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_h_cat', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show title for categories, archives and tags', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_h_cat',
    ) );
    // -----------------  Breadcrumbs text size
    $wp_customize->add_setting( 'airinblog_cus_bread_size_text', array(
        'default'           => 15,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_size_text', array(
        'type'        => 'number',
        'label'       => esc_html__( 'Breadcrumbs text size', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 15 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_bread',
        'settings'    => 'airinblog_cus_bread_size_text',
    ) );
    // -----------------  Separator between breadcrumbs
    $wp_customize->add_setting( 'airinblog_cus_bread_separator', array(
        'default'           => 'v3',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_bread_separator', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Separator between breadcrumbs', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_bread',
        'settings' => 'airinblog_cus_bread_separator',
        'choices'  => array(
            'v1' => esc_html__( 'Triangle', 'airin-blog' ),
            'v2' => esc_html__( 'Arrowhead', 'airin-blog' ),
            'v3' => esc_html__( 'Brace', 'airin-blog' ),
            'v4' => esc_html__( 'Volumetric arrow', 'airin-blog' ),
            'v5' => esc_html__( 'Linear arrow', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Different settings - Calm blocks
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - Calm blocks
    $wp_customize->add_section( 'airinblog_cus_section_flow_block', array(
        'title'    => esc_html__( 'Calm blocks', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_mod',
        'priority' => 250,
    ) );
    // -----------------  Activate fluently movement of blocks
    $wp_customize->add_setting( 'airinblog_cus_flow_block', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_flow_block', array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Activate fluently movement of blocks', 'airin-blog' ),
        'description' => esc_html__( 'Works for blocks on the main page and category pages', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_flow_block',
        'settings'    => 'airinblog_cus_flow_block',
    ) );
    // -----------------  Range fluently movement of blocks
    $wp_customize->add_setting( 'airinblog_cus_flow_block_range', array(
        'default'           => 'mid',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_flow_block_range', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Range for fluently movement of blocks', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_flow_block',
        'settings' => 'airinblog_cus_flow_block_range',
        'choices'  => array(
            'small' => esc_html__( 'Small', 'airin-blog' ),
            'mid'   => esc_html__( 'Average', 'airin-blog' ),
            'big'   => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // -----------------  Direction fluently movement of blocks
    $wp_customize->add_setting( 'airinblog_cus_flow_block_way', array(
        'default'           => 'bottom',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_flow_block_way', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Direction fluently movement of blocks', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_flow_block',
        'settings' => 'airinblog_cus_flow_block_way',
        'choices'  => array(
            'top'    => esc_html__( 'Top', 'airin-blog' ),
            'bottom' => esc_html__( 'Bottom', 'airin-blog' ),
            'left'   => esc_html__( 'Left', 'airin-blog' ),
            'right'  => esc_html__( 'Right', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Different settings - Site map
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - Site map
    $wp_customize->add_section( 'airinblog_cus_section_sitemap', array(
        'title'    => esc_html__( 'Site map', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_mod',
        'priority' => 250,
    ) );
    // -----------------  Instruction - Site map
    class airinblog_cus_sitemap_panel_text extends WP_Customize_Control {
        function render_content() {
            ?><div><?php 
            esc_html_e( 'To display the sitemap, create a new page through the standard WordPress menu,
			go to page edit mode and select the "Site Map" template on the right side, save the page.', 'airin-blog' );
            ?></div><?php 
        }

    }

    $wp_customize->add_setting( 'airinblog_cus_sitemap_panel_text', array(
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( new airinblog_cus_sitemap_panel_text($wp_customize, 'airinblog_cus_sitemap_set_panel_text', array(
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_panel_text',
    )) );
    // -----------------  Display categories on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_cat', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_cat', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Display categories on the sitemap', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_cat',
    ) );
    // -----------------  Category section header on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_cat_h', array(
        'default'           => esc_html__( 'Category', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_cat_h', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Category section header on the sitemap', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_cat_h',
    ) );
    // -----------------  The maximum number of categories on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_cat_num', array(
        'default'           => 50,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_cat_num', array(
        'label'   => esc_html__( 'The maximum number of categories on the sitemap', 'airin-blog' ),
        'section' => 'airinblog_cus_section_sitemap',
        'type'    => 'number',
    ) );
    // -----------------  Show posts on sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_post', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_post', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show posts on sitemap', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_post',
    ) );
    // -----------------  Posts section header on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_post_h', array(
        'default'           => esc_html__( 'Posts', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_post_h', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Posts section header on the sitemap', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_post_h',
    ) );
    // -----------------  The maximum number of posts on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_post_num', array(
        'default'           => 50,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_post_num', array(
        'label'   => esc_html__( 'The maximum number of posts on the sitemap', 'airin-blog' ),
        'section' => 'airinblog_cus_section_sitemap',
        'type'    => 'number',
    ) );
    // -----------------  Show pages on sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_page', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_page', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Show pages on sitemap', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_page',
    ) );
    // -----------------  Pages section header on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_page_h', array(
        'default'           => esc_html__( 'Pages', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_page_h', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Pages section header on the sitemap', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_sitemap',
        'settings' => 'airinblog_cus_sitemap_page_h',
    ) );
    // -----------------  The maximum number of pages on the sitemap
    $wp_customize->add_setting( 'airinblog_cus_sitemap_page_num', array(
        'default'           => 50,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_sitemap_page_num', array(
        'label'   => esc_html__( 'The maximum number of pages on the sitemap', 'airin-blog' ),
        'section' => 'airinblog_cus_section_sitemap',
        'type'    => 'number',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Different settings - Up button
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - Up button
    $wp_customize->add_section( 'airinblog_cus_section_top_scroll', array(
        'title'    => esc_html__( 'Up button', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_mod',
        'priority' => 250,
    ) );
    // -----------------  Remove Up button
    $wp_customize->add_setting( 'airinblog_cus_top_scroll', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_scroll', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Remove "Up button"', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_scroll',
        'settings' => 'airinblog_cus_top_scroll',
    ) );
    // -----------------  Button location
    $wp_customize->add_setting( 'airinblog_cus_top_scroll_layout', array(
        'default'           => 'right',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_scroll_layout', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Button location', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_scroll',
        'settings' => 'airinblog_cus_top_scroll_layout',
        'choices'  => array(
            'right' => esc_html__( 'Right', 'airin-blog' ),
            'left'  => esc_html__( 'Left', 'airin-blog' ),
        ),
    ) );
    // -----------------  Button size
    $wp_customize->add_setting( 'airinblog_cus_top_scroll_size', array(
        'default'           => 'big',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_scroll_size', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Button size', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_scroll',
        'settings' => 'airinblog_cus_top_scroll_size',
        'choices'  => array(
            'big'   => esc_html__( 'Big', 'airin-blog' ),
            'small' => esc_html__( 'Small', 'airin-blog' ),
        ),
    ) );
    // -----------------  Button shape
    $wp_customize->add_setting( 'airinblog_cus_top_scroll_form', array(
        'default'           => 'circle',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_scroll_form', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Button shape', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_scroll',
        'settings' => 'airinblog_cus_top_scroll_form',
        'choices'  => array(
            'circle' => esc_html__( 'Circle', 'airin-blog' ),
            'square' => esc_html__( 'Square', 'airin-blog' ),
        ),
    ) );
    // -----------------  Button variation
    $wp_customize->add_setting( 'airinblog_cus_top_scroll_design', array(
        'default'           => 'brace',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_top_scroll_design', array(
        'type'     => 'radio',
        'label'    => esc_html__( 'Button variation', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_top_scroll',
        'settings' => 'airinblog_cus_top_scroll_design',
        'choices'  => array(
            'arrow'    => esc_html__( 'Arrow', 'airin-blog' ),
            'brace'    => esc_html__( 'Brace', 'airin-blog' ),
            'triangle' => esc_html__( 'Triangle', 'airin-blog' ),
        ),
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Different settings - SEO settings
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Section - SEO settings
    $wp_customize->add_section( 'airinblog_cus_section_seo', array(
        'title'    => esc_html__( 'SEO settings', 'airin-blog' ),
        'panel'    => 'airinblog_cus_panel_mod',
        'priority' => 250,
    ) );
    // -----------------  Set ALT value for stub No photo
    $wp_customize->add_setting( 'airinblog_cus_seo_alt_nofoto', array(
        'default'           => esc_html__( 'No photo', 'airin-blog' ),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_text_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_seo_alt_nofoto', array(
        'type'     => 'text',
        'label'    => esc_html__( 'Set ALT value for stub No photo', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_seo',
        'settings' => 'airinblog_cus_seo_alt_nofoto',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Widget settings
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Widget settings
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_widget_sidebar_design', array(
        'selector' => '.airinblog-css-widget-area',
    ) );
    // -----------------  Section - Widget settings
    $wp_customize->add_section( 'airinblog_cus_section_widget', array(
        'title'    => esc_html__( 'Widget settings', 'airin-blog' ),
        'priority' => 110,
    ) );
    // -----------------  Selecting the design of widget sections (side column)
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_design', array(
        'default'           => 'v0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_design', array(
        'type'        => 'select',
        'label'       => esc_html__( 'Selecting the design of widget sections', 'airin-blog' ),
        'description' => esc_html__( 'Side column, except WooCommerce', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_widget',
        'settings'    => 'airinblog_cus_widget_sidebar_design',
        'choices'     => array(
            'v0' => esc_html__( 'Switch off', 'airin-blog' ),
            'v1' => esc_html__( 'Frame', 'airin-blog' ),
            'v2' => esc_html__( 'Soaring', 'airin-blog' ),
            'v3' => esc_html__( 'Deepening', 'airin-blog' ),
            'v4' => esc_html__( 'Side shadow', 'airin-blog' ),
            'v5' => esc_html__( 'Gradient', 'airin-blog' ),
        ),
    ) );
    // -----------------  Classic widget titles background size (For all side columns)
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_back_size', array(
        'default'           => 7,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_back_size', array(
        'type'        => 'select',
        'label'       => esc_html__( 'Classic widget titles background size', 'airin-blog' ),
        'description' => esc_html__( 'For all side columns', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_widget',
        'settings'    => 'airinblog_cus_widget_sidebar_h_back_size',
        'choices'     => array(
            '0'  => esc_html__( 'Off', 'airin-blog' ),
            '7'  => esc_html__( 'Small', 'airin-blog' ),
            '12' => esc_html__( 'Average', 'airin-blog' ),
            '18' => esc_html__( 'Big', 'airin-blog' ),
        ),
    ) );
    // -----------------  Headers font for all widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_font', array(
        'default'           => 'off',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_font', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Headers font for all widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_h_font',
        'choices'  => $airinblog_font,
    ) );
    // -----------------  Titles text size of all classic widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_size', array(
        'default'           => 16,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_size', array(
        'label'       => esc_html__( 'Titles text size of all classic widgets', 'airin-blog' ),
        'description' => esc_html__( '5 - 50 px (default 16 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_widget',
        'type'        => 'number',
    ) );
    // -----------------  Titles of all classic widgets in uppercase
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_up', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_up', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Titles of all classic widgets in uppercase', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_h_up',
    ) );
    // -----------------  Center align titles of all classic widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_center', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_center', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Center align titles of all classic widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_h_center',
    ) );
    // -----------------  Underline titles of all classic widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_border', array(
        'default'           => 'v4',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_border', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Underline titles of all classic widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_h_border',
        'choices'  => array(
            'v0' => esc_html__( 'Switch off', 'airin-blog' ),
            'v1' => esc_html__( 'Left and down', 'airin-blog' ),
            'v2' => esc_html__( 'Center and bottom', 'airin-blog' ),
            'v3' => esc_html__( 'Full width', 'airin-blog' ),
            'v4' => esc_html__( 'Border left', 'airin-blog' ),
        ),
    ) );
    // -----------------  Line thickness
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_h_border_size', array(
        'default'           => 2,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_0_30',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_h_border_size', array(
        'label'       => esc_html__( 'Line thickness', 'airin-blog' ),
        'description' => esc_html__( '0 - 30 px (default 2 px)', 'airin-blog' ),
        'section'     => 'airinblog_cus_section_widget',
        'type'        => 'text',
    ) );
    // -----------------  Design for lists of posts and pages in basic classic widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_design_post', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_design_post', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Design for lists of posts and pages in basic classic widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_design_post',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1' => esc_html__( 'File', 'airin-blog' ),
            'v2' => esc_html__( 'Round dots', 'airin-blog' ),
            'v3' => esc_html__( 'Square dots', 'airin-blog' ),
            'v4' => esc_html__( 'Thin border', 'airin-blog' ),
        ),
    ) );
    // -----------------  Design for category lists and archives in basic classic widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_design_cat', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_design_cat', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Design for category lists and archives in basic classic widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_design_cat',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1' => esc_html__( 'Folder', 'airin-blog' ),
            'v2' => esc_html__( 'Box', 'airin-blog' ),
            'v3' => esc_html__( 'Thick border', 'airin-blog' ),
        ),
    ) );
    // -----------------  Design for menu lists in basic classic widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_design_menu', array(
        'default'           => 'v1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_radio_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_design_menu', array(
        'type'     => 'select',
        'label'    => esc_html__( 'Design for menu lists in basic classic widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_design_menu',
        'choices'  => array(
            'v0' => esc_html__( 'Turn off styles', 'airin-blog' ),
            'v1' => esc_html__( 'Arrow', 'airin-blog' ),
            'v2' => esc_html__( 'Square', 'airin-blog' ),
            'v3' => esc_html__( 'Icon (sign)', 'airin-blog' ),
        ),
    ) );
    // -----------------  Disable demo widgets
    $wp_customize->add_setting( 'airinblog_cus_widget_sidebar_demo', array(
        'default'           => 0,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_widget_sidebar_demo', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Disable demo widgets', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_widget',
        'settings' => 'airinblog_cus_widget_sidebar_demo',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	Bottom part
    	---------------------------------------------------------------------------------------------------------------------------*/
    // -----------------  Marker - Bottom part
    $wp_customize->selective_refresh->add_partial( 'airinblog_cus_footer', array(
        'selector' => '.airinblog-css-site-footer',
    ) );
    // -----------------  Section - Bottom part
    $wp_customize->add_section( 'airinblog_cus_section_footer', array(
        'title'    => esc_html__( 'Bottom part', 'airin-blog' ),
        'priority' => 111,
    ) );
    // -----------------  Activate footer
    $wp_customize->add_setting( 'airinblog_cus_footer', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_footer', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate footer', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_footer',
        'settings' => 'airinblog_cus_footer',
    ) );
    // -----------------  Activate bottom menu
    $wp_customize->add_setting( 'airinblog_cus_footer_menu', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_footer_menu', array(
        'type'     => 'checkbox',
        'label'    => esc_html__( 'Activate bottom menu', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_footer',
        'settings' => 'airinblog_cus_footer_menu',
    ) );
    // -----------------  Bottom menu text size
    $wp_customize->add_setting( 'airinblog_cus_footer_menu_size', array(
        'default'           => 14,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'airinblog_fun_num_sanitize_5_50',
    ) );
    $wp_customize->add_control( 'airinblog_cus_footer_menu_size', array(
        'type'     => 'number',
        'label'    => esc_html__( 'Bottom menu text size (5 - 50 px, default 14 px)', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_footer',
        'settings' => 'airinblog_cus_footer_menu_size',
    ) );
    // -----------------  Text at the bottom of the footer
    $wp_customize->add_setting( 'airinblog_cus_footer_brand', array(
        'default'           => 'Created with the <a href="//wordpress.org/themes/airin-blog/" target="_blank" rel="nofollow">WordPress theme Airin Blog</a>',
        'sanitize_callback' => 'airinblog_fun_html_sanitize',
    ) );
    $wp_customize->add_control( 'airinblog_cus_footer_brand', array(
        'type'     => 'textarea',
        'label'    => esc_html__( 'Text at the bottom of the footer', 'airin-blog' ),
        'section'  => 'airinblog_cus_section_footer',
        'settings' => 'airinblog_cus_footer_brand',
    ) );
    /*---------------------------------------------------------------------------------------------------------------------------
    	The Events Calendar
    	---------------------------------------------------------------------------------------------------------------------------*/
    if ( class_exists( 'Tribe__Events__Main' ) || class_exists( 'Tribe__Events__Pro__Main' ) ) {
        // -----------------  Section - Advanced settings (for The Events Calendar)
        $wp_customize->add_section( 'airinblog_cus_section_events_calendar', array(
            'title'    => esc_html__( 'Advanced settings (Airin Blog)', 'airin-blog' ),
            'panel'    => 'tribe_customizer',
            'priority' => 199,
        ) );
        // -----------------  Enable styling support for The Events Calendar
        $wp_customize->add_setting( 'airinblog_cus_events_calendar_css', array(
            'default'           => 1,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
        ) );
        $wp_customize->add_control( 'airinblog_cus_events_calendar_css', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Enable styling support for The Events Calendar', 'airin-blog' ),
            'description' => esc_html__( 'Customizes the Skeleton Styles stylesheet according to the template design. Turning it off can be useful if you want to control the stylesheet yourself (Skeleton Styles)', 'airin-blog' ),
            'section'     => 'airinblog_cus_section_events_calendar',
            'settings'    => 'airinblog_cus_events_calendar_css',
        ) );
    }
    /*---------------------------------------------------------------------------------------------------------------------------
    	bbPress
    	---------------------------------------------------------------------------------------------------------------------------*/
    if ( function_exists( 'bbpress' ) ) {
        // -----------------  Section - bbPress
        $wp_customize->add_section( 'airinblog_cus_section_bbpress', array(
            'title'    => 'bbPress',
            'priority' => 199,
        ) );
        // -----------------  Disable sidebar on bbPress pages
        $wp_customize->add_setting( 'airinblog_cus_bbpress_sidebar', array(
            'default'           => 0,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
        ) );
        $wp_customize->add_control( 'airinblog_cus_bbpress_sidebar', array(
            'type'     => 'checkbox',
            'label'    => esc_html__( 'Disable sidebar on bbPress pages', 'airin-blog' ),
            'section'  => 'airinblog_cus_section_bbpress',
            'settings' => 'airinblog_cus_bbpress_sidebar',
        ) );
        // -----------------  Disable style support for bbPress
        $wp_customize->add_setting( 'airinblog_cus_bbpress_css_off', array(
            'default'           => 0,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
        ) );
        $wp_customize->add_control( 'airinblog_cus_bbpress_css_off', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Disable style support for bbPress', 'airin-blog' ),
            'description' => esc_html__( 'Can be useful if you want to control the styles of the bbPress plugin yourself', 'airin-blog' ),
            'section'     => 'airinblog_cus_section_bbpress',
            'settings'    => 'airinblog_cus_bbpress_css_off',
        ) );
    }
    /*---------------------------------------------------------------------------------------------------------------------------
    	BuddyPress
    	---------------------------------------------------------------------------------------------------------------------------*/
    if ( class_exists( 'BuddyPress' ) ) {
        // -----------------  Section - BuddyPress
        $wp_customize->add_section( 'airinblog_cus_section_buddypress', array(
            'title'    => 'Advanced settings (Airin Blog)',
            'panel'    => 'bp_nouveau_panel',
            'priority' => 199,
        ) );
        // -----------------  Disable sidebar on BuddyPress pages
        $wp_customize->add_setting( 'airinblog_cus_buddypress_sidebar', array(
            'default'           => 0,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
        ) );
        $wp_customize->add_control( 'airinblog_cus_buddypress_sidebar', array(
            'type'     => 'checkbox',
            'label'    => esc_html__( 'Disable sidebar on BuddyPress pages', 'airin-blog' ),
            'section'  => 'airinblog_cus_section_buddypress',
            'settings' => 'airinblog_cus_buddypress_sidebar',
        ) );
        // -----------------  Disable style support for BuddyPress
        $wp_customize->add_setting( 'airinblog_cus_buddypress_css_off', array(
            'default'           => 0,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
        ) );
        $wp_customize->add_control( 'airinblog_cus_buddypress_css_off', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Disable style support for BuddyPress', 'airin-blog' ),
            'description' => esc_html__( 'Can be useful if you want to control the styles of the BuddyPress plugin yourself', 'airin-blog' ),
            'section'     => 'airinblog_cus_section_buddypress',
            'settings'    => 'airinblog_cus_buddypress_css_off',
        ) );
    }
    /*---------------------------------------------------------------------------------------------------------------------------
    	WooCommerce
    	---------------------------------------------------------------------------------------------------------------------------*/
    if ( function_exists( 'is_woocommerce' ) ) {
        // -----------------  Section - WooCommerce - Advanced settings
        $wp_customize->add_section( 'airinblog_cus_section_woo', array(
            'title'    => esc_html__( 'Advanced settings (Airin Blog)', 'airin-blog' ),
            'panel'    => 'woocommerce',
            'priority' => 999,
        ) );
        // -----------------  Marker - WooCommerce - Breadcrumbs
        $wp_customize->selective_refresh->add_partial( 'airinblog_cus_woo_bread_cat', array(
            'selector' => '.woocommerce-breadcrumb',
        ) );
        // -----------------  Disable sticker - Sale
        $wp_customize->add_setting( 'airinblog_cus_woo_sale', array(
            'default'           => 0,
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'airinblog_fun_checkbox_sanitize',
        ) );
        $wp_customize->add_control( 'airinblog_cus_woo_sale', array(
            'type'     => 'checkbox',
            'label'    => esc_html__( 'Disable sticker - Sale', 'airin-blog' ),
            'section'  => 'airinblog_cus_section_woo',
            'settings' => 'airinblog_cus_woo_sale',
        ) );
    }
    /*---------------------------------------------------------------------------------------------------------------------------
    	GENERAL FUNCTIONS
    	---------------------------------------------------------------------------------------------------------------------------*/
    // Check radio or select
    function airinblog_fun_radio_sanitize(  $input, $setting  ) {
        $input = sanitize_key( $input );
        $choices = $setting->manager->get_control( $setting->id )->choices;
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }

    // Check checkbox (options are only 1 or 0)
    function airinblog_fun_checkbox_sanitize(  $input  ) {
        if ( $input == 1 ) {
            return 1;
        } else {
            return 0;
        }
    }

    // Checks and adding "#" to the color code (sanitize_callback)
    function airinblog_fun_color_hex_sanitize(  $color  ) {
        if ( $unhashed = sanitize_hex_color_no_hash( $color ) ) {
            return '#' . $unhashed;
        }
        return $color;
    }

    // Cleaning for color selection (sanitize_js_callback)
    function airinblog_fun_color_sanitize(  $input, $setting  ) {
        $input = sanitize_hex_color( $input );
        return ( !is_null( $input ) ? $input : $setting->default );
        return $input;
    }

    function airinblog_fun_img_sanitize(  $image, $setting  ) {
        // Array of valid image file types.
        // The array includes image mime types that are included in wp_get_mime_types()
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon',
        );
        // Return an array with file extension and mime_type
        $file = wp_check_filetype( $image, $mimes );
        // If $image has a valid mime_type, return it; otherwise, return the default
        return ( $file['ext'] ? $image : $setting->default );
    }

    // Full text cleanup
    function airinblog_fun_text_sanitize(  $text  ) {
        return sanitize_text_field( $text );
    }

    // Cleaning textarea
    function airinblog_fun_textarea_sanitize(  $textarea  ) {
        return sanitize_textarea_field( $textarea );
    }

    // Cleanup for use with html tags
    function airinblog_fun_html_sanitize(  $html_sanitize  ) {
        return wp_filter_post_kses( $html_sanitize );
    }

    // All numbers (absolute integer)
    function airinblog_fun_num_sanitize(  $number, $setting  ) {
        // Ensure $number is an absolute integer (whole number, zero or greater).
        $number = absint( $number );
        // If the input is an absolute integer, return it; otherwise, return the default
        return ( $number ? $number : $setting->default );
    }

    // Numbers 1 - 6 (check for - absolute integer, more 0 and less 7)
    function airinblog_fun_num_sanitize_6(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 0 && $number < 7 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 1 - 12 (check for - absolute integer, more 0 and less 13)
    function airinblog_fun_num_sanitize_12(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 0 && $number < 13 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 5 - 100 (check for - absolute integer, more 4 and less 101)
    function airinblog_fun_num_sanitize_5_100(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 4 && $number < 101 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 5 - 50 (check for - absolute integer, more 4 and less 51)
    function airinblog_fun_num_sanitize_5_50(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 4 && $number < 51 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 1 - 50 (check for - absolute integer, more 0 and less 51)
    function airinblog_fun_num_sanitize_1_50(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 0 && $number < 51 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 5 - 30 (check for - absolute integer, more 4 and less 31)
    function airinblog_fun_num_sanitize_5_30(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 4 && $number < 31 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 0 - 30 (check for - absolute integer, more or equals 0 and less 31)
    function airinblog_fun_num_sanitize_0_30(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number >= 0 && $number < 31 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 1 - 50 000 (check for - absolute integer, more 0 and less 50001)
    function airinblog_fun_num_sanitize_1_50k(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 0 && $number < 50001 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 0.8 - 5 (check for - numbers, more 0.7 and less 5.1)
    function airinblog_fun_num_sanitize_08_5(  $number, $setting  ) {
        if ( is_numeric( $number ) && $number > 0.7 && $number < 5.1 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Numbers 50 - 1000 (check for - absolute integer, more 49 and less 1001)
    function airinblog_fun_num_sanitize_50_1000(  $number, $setting  ) {
        $number = absint( $number );
        if ( $number > 49 && $number < 1001 ) {
            return $number;
        } else {
            return $setting->default;
        }
    }

    // Check - Category selection
    function airinblog_fun_home_slider_sanitize(  $input, $setting  ) {
        $valid_keys = array(
            'default' => '',
        );
        $categories = get_categories();
        foreach ( $categories as $category ) {
            $valid_keys[$category->slug] = $category->name;
        }
        if ( array_key_exists( $input, $valid_keys ) ) {
            return $input;
        } else {
            return $setting->default;
        }
    }

}

add_action( 'customize_register', 'airinblog_fun_customize_register' );