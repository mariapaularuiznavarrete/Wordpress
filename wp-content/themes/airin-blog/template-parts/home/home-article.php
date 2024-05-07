<?php
/* ------------------------------------------------------------------------------
* @package Airin Blog
* Author: web-zone.org
* Description: Latest posts on homepage
* ------------------------------------------------------------------------------ */

?>
<div class="airinblog-css-home-cat-box">
    <?php
    if (have_posts()) {

        $h_label = get_theme_mod('airinblog_cus_home_article_block_h', esc_html__('Latest posts', 'airin-blog'));
        if (!empty($h_label)) {
            echo '<h2 class="airinblog-css-home-section-label">';
                echo esc_attr($h_label);
            echo '</h2>';
        }

        $pagi_home_activ = get_theme_mod('airinblog_cus_pagination_home_activ', 1);
        $loadmore = get_theme_mod('airinblog_cus_pagination_variant', 'v1');
        ?>

        <div id="airinblog-id-cat-box" class="airinblog-css-cat-box">
            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content-archive');
            endwhile;

            // Additional loading of posts (show more)
            if ($pagi_home_activ == 1) {
                if ($loadmore == 'v2') {
                    if ($wp_query->max_num_pages > 1) { ?>
                        <script>
                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                            var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                            var max_pages = '<?php echo esc_attr($wp_query->max_num_pages); ?>';
                        </script>
                        <div id="airinblog-id-loadmore" class="clear-both"></div>
                        <?php
                    }
                }
            }
            ?>
        </div>

        <?php 
        if ($pagi_home_activ == 1) {
            if ($loadmore == 'v1') {

                // Digital pagination
                echo '<div class="clear-both"></div>';
                $prev_next = true;
                if (get_theme_mod('airinblog_cus_pagination_next', 0) == 1) {
                    $prev_next = false;
                }
                $show_all = false;
                if (get_theme_mod('airinblog_cus_pagination_num_all', 0) == 1) {
                    $show_all = true;
                }
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'show_all'  => $show_all,
                    'prev_next' => $prev_next,
                ));

            } else if ($loadmore == 'v2') {

                // Additional loading of posts (show more)
                if ($wp_query->max_num_pages > 1) {
                    ?>
                    <nav class="airinblog-css-loadmore">
                        <button type="button" id="airinblog-id-loadmore-button" class="airinblog-css-loadmore-button"><?php esc_html_e('Show more', 'airin-blog'); ?></button>
                    </nav>
                    <?php
                }

            } else {

                // Standard WP (Back and Forward)
                ?>
                <nav class="navigation posts-navigation" role="navigation">
                    <div class="nav-links">
                        <div class="nav-previous">
                            <?php next_posts_link(esc_html__('Previous posts', 'airin-blog'), $wp_query->max_num_pages); ?>
                        </div>
                        <div class="nav-next">
                            <?php previous_posts_link(esc_html__('Next posts', 'airin-blog')); ?>
                        </div>
                    </div>
                </nav>
                <?php

            }
        }
        wp_reset_postdata();
    } else {
        get_template_part('template-parts/content', 'none');
    }
    ?>
</div>