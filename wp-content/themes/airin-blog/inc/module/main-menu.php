<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Main menu
* ------------------------------------------------------------------------------ */

?>
<div id="mega-menu-box" class="airinblog-css-mega-menu-box">
      <div id="site-navigation" class="airinblog-css-mega-menu-container">
            <nav class="airinblog-css-mega-menu">
                  <?php
                  do_action('airinblog_hook_inner_mainmenu');
                  wp_nav_menu(array(
                        'theme_location' => 'airinblog-loc-menu-main',
                        'container' => false,
                        // fallback_cb - fills an empty menu - to disable use - '__return_empty_string'
                        'fallback_cb' => 'airinblog_fun_main_menu_list_categories',
                        'depth' => 4
                  ));
                  ?>
            </nav>
      </div>
</div>
