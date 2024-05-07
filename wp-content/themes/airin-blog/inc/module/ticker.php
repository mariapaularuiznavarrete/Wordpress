<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Ticker
* ------------------------------------------------------------------------------ */

?>
<div class="airinblog-css-top-left">
      <div class="airinblog-css-ticker">
            <span>
                  <?php
                  $tickercat = esc_attr(get_theme_mod('airinblog_cus_ticker_cat'));
                  $ticker_number = 1;
                  if ($tickercat !== 'default') {
                        $ticker_posts = new WP_Query(array( 
                              'category_name' => $tickercat,
                              'ignore_sticky_posts' => true,
                              'posts_per_page' => $ticker_number
                              
                        ));
                  } else {
                        $ticker_posts = new WP_Query(array(
                              'ignore_sticky_posts' => true,
                              'posts_per_page' =>  $ticker_number
                        ));
                  }
                  if ($ticker_posts->have_posts()) {
                        while ($ticker_posts->have_posts()):
                              $ticker_posts->the_post();
                              ?>
                              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
                              <?php 
                        endwhile;
                  }
                  wp_reset_postdata();
                  ?>
            </span>
      </div>
</div>
