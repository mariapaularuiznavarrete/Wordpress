<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Sidebar
* ------------------------------------------------------------------------------ */
function airinblog_fun_sidebar_1() {
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        echo '<aside id="secondary" class="airinblog-css-widget-area">';
        dynamic_sidebar( 'sidebar-1' );
        if ( function_exists( 'airinblog_fun_sidebar_1_demo' ) ) {
            airinblog_fun_sidebar_1_demo();
        }
        echo '</aside>';
    }
}

airinblog_fun_sidebar_1();
?>

