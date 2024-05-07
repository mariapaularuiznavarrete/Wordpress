<?php
/* ------------------------------------------------------------------------------
* Template Name: Airin Blog Left sidebar
* Template Post Type: page, product
* Author: web-zone.org
* @package Airin Blog
* Description: Template for creating pages with a left sidebar
* ------------------------------------------------------------------------------ */

// Translation for comment - Template Name
esc_html__('Airin Blog Left sidebar', 'airin-blog');

get_header(); ?>

<div class="airinblog-css-left-sidebar airinblog-css-template">

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

	<?php
	if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('airinblog_elementor_sidebar')) {
		get_sidebar();
	}
	?>

</div>

<?php
get_footer();