<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Page
* ------------------------------------------------------------------------------ */


get_header(); ?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php

		while (have_posts()) : the_post();
			get_template_part('template-parts/content', 'page');
			if (get_theme_mod('airinblog_cus_post_comments_pages', 0) != 1) {
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			}
		endwhile;

		if (class_exists('woocommerce')) {
			if (!is_cart() xor !is_checkout() xor !is_account_page()) {
				do_action('airinblog_hook_after_page');
			}
		} else {
			do_action('airinblog_hook_after_page');
		}

		?>
	</main>
</div>
<?php
airinblog_fun_sidebar_select();
get_footer();
