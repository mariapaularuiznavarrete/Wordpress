<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Related posts
* ------------------------------------------------------------------------------ */


if (!function_exists('airinblog_fun_related_post')) {
    function airinblog_fun_related_post() {
        global $post;
        $related_activ = esc_attr(get_theme_mod('airinblog_cus_post_related', 1));
        $related_tax = esc_attr(get_theme_mod('airinblog_cus_post_related_taxonomy', 'cat'));
        $amount = esc_attr(get_theme_mod('airinblog_cus_post_related_amount', 8));
        $h = esc_attr(get_theme_mod('airinblog_cus_post_related_h', esc_html__('Related posts', 'airin-blog')));
        $alt = get_theme_mod('airinblog_cus_seo_alt_nofoto', 'No photo');
        $nofoto = get_theme_mod('airinblog_cus_post_related_nofoto', 0);

        if ($related_activ == 1) {

            $args = array(
                'post_type'             => 'post',
                'post_status'           => 'publish',
                'posts_per_page'        => $amount,
                'ignore_sticky_posts'   => true,
                'post__not_in'          => array($post->ID),
                'orderby'               => 'rand'
            );

            $grid = get_theme_mod('airinblog_cus_post_related_grid', 'r4');
            if (get_theme_mod('airinblog_cus_lay_all', 'right') !== 'no_sidebar_full') {
              switch ($grid) {
                case 'r4':
                  $img_size = '195x110';
                  break;
                case 'r5':
                  $img_size = '155x87';
                  break;
                case 'r3':
                  $img_size = '270x152';
                  break;
              }
            } else {
              switch ($grid) {
                case 'r4':
                  $img_size = '270x152';
                  break;
                case 'r5':
                  $img_size = '215x121';
                  break;
                case 'r3':
                  $img_size = '378x213';
                  break;
              }
            }

            if ($related_tax == 'cat') {
                $cats = get_the_category($post->ID);
                if ($cats) {
                    $c = array();
                    foreach ($cats as $cat) {
                        $c[] = $cat->term_id;
                    }
                    $args['category__in'] = $c;
                    $q = new WP_Query($args);
                    if ($q->have_posts()) {
                        ?>
                        <section class="airinblog-css-related-section">
                            <h2>
                                <?php echo esc_attr($h); ?>
                            </h2>
                            <div class="airinblog-css-related-box">
                                <?php
                                while ($q->have_posts()) {
                                    $q->the_post();
                                    ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('airinblog-css-related-post-box'); ?>>
                                        <div class="airinblog-css-related-thumbnail">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail('airinblog-img-'.$img_size);
                                                } else if ($nofoto == 0) {
                                                    ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/no-photo/no-foto-'.$img_size.'.png'); ?>" 
                                                        alt="<?php echo esc_attr($alt); ?>">
                                                    <?php
                                                } ?>
                                            </a>
                                        </div>
                                        <header class="airinblog-css-related-post-header">
                                            <?php
                                            the_title('<h2 class="airinblog-css-related-post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                                            ?>
                                        </header>
                                    </article>
                                    <?php
                                }
                                wp_reset_postdata();
                                ?>
                            </div>
                        </section>
                        <?php
                    }
                }
            } elseif ($related_tax == 'tag') {
                $tags = get_the_tags($post->ID);
                if ($tags) {
                    $t = array();
                    foreach ($tags as $tag) {
                        $t[] = $tag->term_id;
                    }
                    $args['tag__in'] = $t;
                    $q = new WP_Query($args);
                    if ($q->have_posts()) {
                        ?>
                        <section class="airinblog-css-related-section">
                            <h2>
                                <?php echo esc_attr($h); ?>
                            </h2>
                            <div class="airinblog-css-related-box">
                                <?php 
                                while ($q->have_posts()) {
                                    $q->the_post();
                                    ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('airinblog-css-related-post-box'); ?>>
                                        <div class="airinblog-css-related-thumbnail">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail('airinblog-img-'.$img_size);
                                                } else if ($nofoto == 0) {
                                                    ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/no-photo/no-foto-'.$img_size.'.png'); ?>" 
                                                        alt="<?php echo esc_attr($alt); ?>">
                                                    <?php
                                                } ?>
                                            </a>
                                        </div>
                                        <header class="airinblog-css-related-post-header">
                                            <?php
                                            the_title('<h2 class="airinblog-css-related-post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                                            ?>
                                        </header>
                                    </article>
                                    <?php
                                }
                                wp_reset_postdata(); 
                                ?>
                            </div>
                        </section>
                        <?php
                    }
                }
            }
        }
    }
}
?>