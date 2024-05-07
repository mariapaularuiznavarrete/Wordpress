<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Section author
* ------------------------------------------------------------------------------ */


$autor_id = get_the_author_meta('ID');
$avatar_none = get_theme_mod('airinblog_cus_post_bio_avatar', 0);
$soc_none = 1;
$soc_none = apply_filters('dmcwzmulti_filter_soc_none', $soc_none);

?>
<div class="airinblog-css-border-center-top"></div>
<div class="airinblog-css-bio-post-box">

    <address class="airinblog-css-bio-post-user">
        <?php 
        if ($avatar_none != 1 || $soc_none == 0) { ?>
            <div class="airinblog-css-bio-post-box-left">
                <?php
                // Avatar
                if ($avatar_none != 1) {
                    $autor_alt = esc_html__('Author photo', 'airin-blog');
                    echo '<div class="airinblog-css-bio-post-box-left-img">';
                        echo wp_kses_post(get_avatar($autor_id, 120, '', $autor_alt));
                    echo '</div>';
                }
                do_action('airinblog_hook_author_soc');
                ?>
            </div>
            <?php
        } ?>

        <div class="airinblog-css-bio-post-box-right">
            <?php
            // Recording date
            if (get_theme_mod('airinblog_cus_post_bio_data', 1) == 1) {
                $time_string = sprintf('<time class="entry-date published" datetime="%s">%s</time>', get_the_date('c'), get_the_time(get_option('date_format')));
                $time_string .= sprintf('<time class="updated" datetime="%s">%s</time>', get_the_modified_date('c'), get_the_modified_date());
                ?>
                <div>
                    <b><?php esc_html_e('Publication date:', 'airin-blog'); ?></b>
                    <?php echo ' '. $time_string; ?>
                </div>
                <?php
            }
            // Post Author
            if (get_theme_mod('airinblog_cus_post_bio_autor_link', 0) != 1) { ?>
                <div>
                    <b><?php esc_html_e('Author:', 'airin-blog'); ?></b>
                    <a href="<?php echo esc_url(get_author_posts_url($autor_id)); ?>">
                        <?php echo ' '; the_author(); ?>
                    </a>
                </div>
                <?php
            } else {
                ?>
                <div>
                    <b><?php esc_html_e('Author:', 'airin-blog'); ?></b>
                    <?php echo ' '; the_author(); ?>
                </div>
                <?php
            } ?>
            <?php
            // Author's description
            if (get_theme_mod('airinblog_cus_post_bio_description', 0) != 1) {
                echo '<i>' . esc_attr(get_the_author_meta('description', $autor_id)) . '</i>';
            }
            ?>
        </div>
    </address>
    
    <?php
    // Author's latest posts
    if (get_theme_mod('airinblog_cus_post_bio_related', 0) == 1) {

        $bio_h = '';
        $bio_h = esc_attr(get_theme_mod('airinblog_cus_post_bio_related_h', esc_html__('Latest posts (Author)', 'airin-blog')));
        if (!empty($bio_h)) { ?>
            <h2><?php echo esc_html($bio_h); ?></h2>
        <?php }

        $amount_autor_post = get_theme_mod('airinblog_cus_post_bio_related_amount', 5);
        $q = new WP_Query("posts_per_page=$amount_autor_post&author=$autor_id");
        if ($q->have_posts()) {
            ?>
            <div class="airinblog-css-bio-post-autor-posts">
                <?php
                $alt = get_theme_mod('airinblog_cus_seo_alt_nofoto', 'No photo');
                while($q->have_posts()): $q->the_post(); ?>
                    <div class="airinblog-css-bio-post-autor-posts-child">
                        <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('airinblog-img-155x87');?></a>
                        <?php } else { ?>
                            <a href="<?php the_permalink() ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/no-photo/no-foto-155x87.png'); ?>"
                                alt="<?php echo esc_attr($alt); ?>"></a>
                        <?php } ?>
                    </div>
                    <?php
                endwhile; ?>
                <div class="clear"></div>
            </div>
            <?php
        }
        wp_reset_postdata();

    }
    ?>
    
</div>
<div class="airinblog-css-border-center-bottom"></div>

