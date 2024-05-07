<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Theme settings
* ------------------------------------------------------------------------------ */
if ( !function_exists( 'airinblog_fun_general_settings' ) ) {
    function airinblog_fun_general_settings() {
        // Add item menu
        function airinblog_fun_add_theme_settings() {
            add_theme_page(
                // 'main_theme_settings', // Mother page address
                'Pro Airin Blog',
                // Page Title
                'Pro Airin Blog',
                // Menu item name
                'manage_options',
                // Access rights
                'dmcwzmulti_page_settings',
                // Page address
                'airinblog_fun_settings_function',
                // Function name
                20
            );
        }

        add_action( 'admin_menu', 'airinblog_fun_add_theme_settings' );
        // Message about save
        function airinblog_fun_options_notice() {
            if ( isset( $_GET['page'] ) && 'dmcwzmulti_page_settings' == $_GET['page'] && isset( $_GET['settings-updated'] ) && true == $_GET['settings-updated'] ) {
                echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'All settings saved!', 'airin-blog' ) . '</p></div>';
            }
        }

        add_action( 'admin_notices', 'airinblog_fun_options_notice' );
        // Display the options page
        function airinblog_fun_settings_function() {
            ?>
            <div class="wrap">
                
                <?php 
            // Which tab is active
            $tab = 'support-tab';
            if ( isset( $_GET['tab'] ) ) {
                $tab = $_GET['tab'];
            }
            ?>
                <h1><?php 
            echo esc_html__( 'Pro page', 'airin-blog' ) . ' Airin Blog';
            ?></h1>
                
                <!-- Output the tabs -->
                <h2 class="nav-tab-wrapper">
                    <?php 
            // Hook for adding new tabs via plugin
            do_action( 'dmcwzmulti_hook_tab_settings' );
            ?>
                    <a href="<?php 
            echo esc_url( admin_url( 'themes.php?page=dmcwzmulti_page_settings&tab=support-tab' ) );
            ?>" 
                        class="nav-tab <?php 
            echo esc_attr( ( $tab == 'support-tab' ? 'nav-tab-active' : '' ) );
            ?> "><?php 
            esc_html_e( 'Information', 'airin-blog' );
            ?>
                    </a>
                    <?php 
            // Hook for adding new tabs after all tabs
            do_action( 'airinblog_hook_tab_settings_after' );
            ?>
                </h2>

                <!-- Output functions -->
                <form action="options.php" method="post">
                    <?php 
            // Group slug name
            settings_fields( $tab );
            // Page slug name
            do_settings_sections( $tab );
            // Button save
            if ( $tab != 'support-tab' ) {
                submit_button();
            }
            ?>
                </form>
                
            </div>
            <?php 
        }

    }

    airinblog_fun_general_settings();
}
// Registration, adding settings and sections
function airinblog_fun_theme_settings() {
    // Section - Support
    add_settings_section(
        'airinblog_set_section_support',
        esc_html__( 'Useful links', 'airin-blog' ),
        'airinblog_fun_callback_support',
        'support-tab'
    );
}

add_action( 'admin_init', 'airinblog_fun_theme_settings' );
// Support links
function airinblog_fun_callback_support() {
    $help_links = array(
        'demo'   => array(
            'link' => 'https://airinblog.web-zone.org',
            'text' => esc_html__( 'View demo', 'airin-blog' ),
        ),
        'rating' => array(
            'link' => 'https://wordpress.org/support/theme/airin-blog/reviews/',
            'text' => esc_html__( 'Rate this theme', 'airin-blog' ),
        ),
    );
    foreach ( $help_links as $help_link ) {
        echo '<p><a target="_blank" href="' . esc_url( $help_link['link'] ) . '" >' . esc_attr( $help_link['text'] ) . ' </a></p>';
    }
}
