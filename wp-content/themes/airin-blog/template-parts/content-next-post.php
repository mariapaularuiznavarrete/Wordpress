<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Section Next post
* ------------------------------------------------------------------------------ */


?>
<nav class="airinblog-css-np-box">

    <div class="airinblog-css-np-post">
        <?php
        $previous_post = get_previous_post();
        if (!empty($previous_post)) { ?>
            <div class="airinblog-css-previous-post-link">
                <a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"> &#10094; <?php esc_html_e('Previous post', 'airin-blog'); ?></a>
            </div>
            <div class="airinblog-css-previous-post-box">
                <?php
                if (!empty(get_the_post_thumbnail($previous_post->ID , 'airinblog-img-155x87'))) {
                    echo '<div class="airinblog-css-np-post-img">';
                        echo wp_kses_post(get_the_post_thumbnail($previous_post->ID , 'airinblog-img-155x87'));
                    echo '</div>';
                }
                ?>
                <div class="airinblog-css-np-post-title">
                    <a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo esc_html($previous_post->post_title); ?></a>
                </div>
            </div>
            <?php 
        } ?>
    </div>

    <div class="airinblog-css-np-post">
        <?php
        $next_post = get_next_post();
        if (!empty($next_post)) { ?>
            <div class="airinblog-css-next-post-link">
                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php esc_html_e('Next post', 'airin-blog'); ?> &#10095; </a>
            </div>
            <div class="airinblog-css-next-post-box">
                <?php
                if (!empty(get_the_post_thumbnail($next_post->ID , 'airinblog-img-155x87'))) {
                    echo '<div class="airinblog-css-np-post-img">';
                        echo wp_kses_post(get_the_post_thumbnail($next_post->ID , 'airinblog-img-155x87'));
                    echo '</div>';
                }
                ?>
                <div class="airinblog-css-np-post-title">
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html($next_post->post_title); ?></a>
                </div>
            </div>
            <?php 
        } ?>
    </div>
    
</nav>
