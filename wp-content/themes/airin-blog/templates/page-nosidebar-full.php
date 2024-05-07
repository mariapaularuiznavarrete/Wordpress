<?php
/* ------------------------------------------------------------------------------
* Template Name: Airin Blog No sidebar (full width)
* Template Post Type: page, product
* Author: web-zone.org
* @package Airin Blog
* Description: Template for creating pages in the maximum width
* ------------------------------------------------------------------------------ */

// Translation for comment - Template Name
esc_html__('Airin Blog No sidebar (full width)', 'airin-blog');

get_header(); ?>
<div class="airinblog-css-no-sidebar-full airinblog-css-template">

	<div id="primary" class="airinblog-css-content-area">
		<main id="main" class="airinblog-css-site-main">
			<?php

			while (have_posts()) : the_post();
				get_template_part('template-parts/content', 'page');
				if (get_theme_mod('airinblog_cus_post_comments_pages', 0) != 1) {
					if (comments_open() || get_comments_number()) {
						comments_template();
					}
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

</div>
<?php
get_footer();
