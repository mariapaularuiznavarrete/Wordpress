<?php
/* ------------------------------------------------------------------------------
* @package Airin Blog
* Author: web-zone.org
* Description: Social Links
* ------------------------------------------------------------------------------ */


if (!function_exists('airinblog_fun_soc_set')) {
    function airinblog_fun_soc_set() {
        $soc = get_theme_mod('airinblog_cus_soc_block');
        if ($soc) {
            $soc = json_decode($soc);
            echo '<div class="airinblog-css-soc-top-box">';
                do_action('airinblog_hook_top_soc_before');
                foreach ($soc as $socf) {
                    airinblog_fun_get_soc_set(
                        $socf->soc_net,
                        $socf->soc_link,
                        $socf->soc_new_link
                    );
                }
                do_action('airinblog_hook_top_soc_after');
            echo '</div>';
        }
    }
}

if (!function_exists('airinblog_fun_get_soc_set')) {
    function airinblog_fun_get_soc_set($soc_net, $soc_link, $soc_new_link) {

        if ($soc_new_link == 1) {
            $tab = 'target=_blank';
            // Missing quotes are added during esc_html cleanup
        } else {
            $tab = '';
        }

        $form = get_theme_mod('airinblog_cus_soc_form', 'square');
        $design = get_theme_mod('airinblog_cus_soc_design_back', 'flat');
        if ($form == 'without-background') {
            $design = get_theme_mod('airinblog_cus_soc_design_no_back', 'only-black-line');
        }

        $dir = get_template_directory_uri() . '/';
        $dir = apply_filters('dmcwzmulti_filter_soc_dir', $dir);
        $soc_url = $dir . 'img/soc/' . $form . '/' . $design . '/' . $soc_net;

        if ($soc_net != 'off') {
            ?>
            <div class="airinblog-css-soc-top-box-child">
                <a href="<?php echo esc_url($soc_link); ?>" <?php echo esc_html($tab); ?> >
                    <div class="airinblog-css-soc-top-box-anime">
                        <img src="<?php echo esc_url($soc_url) . '.png'; ?>" alt="<?php echo esc_attr($soc_net); ?>">
                    </div>
                </a>
            </div>
            <?php
        }
    }
}

?>