<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Functions
* ------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------
* Attention!
* Do not edit this file, after updating all changes will be lost
* To add your own functions, use a special free plugin
* The plugin can be downloaded from web-zone.org
* ------------------------------------------------------------------------------ */
// SDK
if ( file_exists( get_template_directory() . '/freemius/start.php' ) ) {
    if ( !function_exists( 'airinblog_fs' ) ) {
        // Create a helper function for easy SDK access.
        function airinblog_fs() {
            global $airinblog_fs;
            if ( !isset( $airinblog_fs ) ) {
                // Include Freemius SDK.
                require_once dirname( __FILE__ ) . '/freemius/start.php';
                $airinblog_fs = fs_dynamic_init( array(
                    'id'              => '13172',
                    'slug'            => 'airin-blog',
                    'type'            => 'theme',
                    'public_key'      => 'pk_3426f8c7139fd4fc2d7cdf303ed51',
                    'is_premium'      => false,
                    'has_addons'      => true,
                    'has_paid_plans'  => true,
                    'has_affiliation' => 'all',
                    'menu'            => array(
                        'slug'    => 'dmcwzmulti_page_settings',
                        'support' => false,
                        'parent'  => array(
                            'slug' => 'themes.php',
                        ),
                    ),
                    'is_live'         => true,
                ) );
            }
            return $airinblog_fs;
        }

        // Init Freemius.
        airinblog_fs();
        // Signal that SDK was initiated.
        do_action( 'airinblog_fs_loaded' );
    }
}
require get_template_directory() . '/inc/general.php';
/* ------------------------------------------------------------------------------
* Attention!
* Do not edit this file, after updating all changes will be lost
* To add your own functions, use a special free plugin
* The plugin can be downloaded from web-zone.org
* ------------------------------------------------------------------------------ */