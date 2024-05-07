<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Single post
* ------------------------------------------------------------------------------ */


get_header(); ?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php
		while (have_posts()) : the_post();
			get_template_part('template-parts/content', 'single');
			if (is_singular('post')) {
				if (esc_attr(get_theme_mod('airinblog_cus_post_next', 0)) != 1) {
					do_action('airinblog_hook_before_post_next');
					get_template_part('template-parts/content-next-post');
				}
				if (esc_attr(get_theme_mod('airinblog_cus_post_related', 1)) == 1) {
					do_action('airinblog_hook_before_post_related');
					get_template_part('template-parts/content-related');
					airinblog_fun_related_post();
				}
			}
			if (get_theme_mod('airinblog_cus_post_comments_posts', 0) != 1) {
				do_action('airinblog_hook_before_post_comments');
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			}
		endwhile;
		do_action('airinblog_hook_after_post');
		?>
	</main>
</div>
<?php
airinblog_fun_sidebar_select();
get_footer();
