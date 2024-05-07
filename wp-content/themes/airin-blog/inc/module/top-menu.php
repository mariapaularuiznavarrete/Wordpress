<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Top menu
* ------------------------------------------------------------------------------ */


$top_menu_item = true;
$menu_loc = 'airinblog-loc-menu-top';
$nav_loc = get_nav_menu_locations();
$item_loc = array_key_exists($menu_loc, $nav_loc) ? $nav_loc[$menu_loc] : null;
if (!wp_get_nav_menu_items($item_loc) && has_nav_menu($menu_loc)) {
      $top_menu_item = false;
}
if ($top_menu_item) {
      if (get_theme_mod('airinblog_cus_top_menu_version', 'js') == 'js') {
            ?>
            <div class="airinblog-css-top-jsmenu-box">
                  <nav class="airinblog-css-top-jsmenu-pc">
                        <button class="airinblog-css-toggle-btn" data-toggle-target=".airinblog-css-top-jsmenu-modal" data-toggle-body-class="airinblog-css-showing-top-jsmenu-modal" 
                        aria-expanded="false" data-set-focus=".airinblog-css-close-top-jsmenu-nav-toggle">
                              <span class="airinblog-css-toggle-bar"></span>
                              <span class="airinblog-css-toggle-bar"></span>
                              <span class="airinblog-css-toggle-bar"></span>
                        </button>
                        <div class="airinblog-css-top-jsmenu-container-box">
                              <?php
                              wp_nav_menu(array(
                                    'theme_location' => $menu_loc,
                                    'menu_class'     => 'airinblog-css-nav-top-jsmenu',
                                    // fallback_cb - fills an empty menu - to disable use - '__return_empty_string'
                                    'fallback_cb' => 'airinblog_fun_top_menu_list_categories',
                                    'depth' => 4
                              ));
                              ?>
                        </div>
                  </nav>
                  <nav class="airinblog-css-top-jsmenu-mobile">
                        <div class="airinblog-css-top-jsmenu-modal airinblog-css-cover-modal" data-modal-target-string=".airinblog-css-top-jsmenu-modal">
                              <button class="airinblog-css-btn-close-menu airinblog-css-close-top-jsmenu-nav-toggle" data-toggle-target=".airinblog-css-top-jsmenu-modal" 
                              data-toggle-body-class="airinblog-css-showing-top-jsmenu-modal" aria-expanded="false" data-set-focus=".airinblog-css-top-jsmenu-modal"><span></span></button>
                              <div class="airinblog-css-mobile-top-jsmenu" aria-label="<?php esc_attr_e('Mobile', 'airin-blog'); ?>">
                                    <?php
                                    wp_nav_menu(array(
                                          'theme_location' => $menu_loc,
                                          'menu_class'     => 'airinblog-css-nav-top-jsmenu airinblog-css-top-jsmenu-modal',
                                          // fallback_cb - fills an empty menu - to disable use - '__return_empty_string'
                                          'fallback_cb' => 'airinblog_fun_top_menu_list_categories',
                                          'depth' => 4
                                    ));
                                    ?>
                              </div>
                        </div>
                  </nav>
            </div>
            <?php
      } else {
            ?>
            <nav class="airinblog-css-top-menu-pc">
                  <?php
                  wp_nav_menu(array(
                        'theme_location' => $menu_loc,
                        // fallback_cb - fills an empty menu - to disable use - '__return_empty_string'
                        'fallback_cb' => 'airinblog_fun_top_menu_list_categories',
                        'depth' => 4
                  ));
                  ?>
            </nav>
            <div class="airinblog-css-top-menu-mobile">
                  <input type="checkbox" id="airinblog-id-nav-top-mobile-toggle" hidden>
                  <label for="airinblog-id-nav-top-mobile-toggle" class="airinblog-css-nav-top-mobile-burger" onclick></label>
                  <div class="airinblog-css-nav-top-mobile">
                        <div class="airinblog-css-nav-top-mobile-title">
                              <div class="airinblog-css-nav-top-mobile-h"><?php esc_html_e('Top menu', 'airin-blog'); ?></div>
                              <label for="airinblog-id-nav-top-mobile-toggle" class="airinblog-css-nav-top-mobile-toggle" onclick></label>
                        </div>
                        <nav class="airinblog-css-nav-top-mobile-ul">
                              <?php
                              wp_nav_menu(array(
                                    'theme_location' => $menu_loc,
                                    // fallback_cb - fills an empty menu - to disable use - '__return_empty_string'
                                    'fallback_cb' => 'airinblog_fun_top_menu_list_categories',
                                    'depth' => 4
                              ));
                              ?>
                        </nav>
                  </div>
                  <label for="airinblog-id-nav-top-mobile-toggle" class="airinblog-css-mask-content" onclick=""></label>
            </div>
            <?php
      }
}
?>
