<?php
/* ------------------------------------------------------------------------------
* Template Name: Airin Blog Left sidebar
* Template Post Type: post
* Author: web-zone.org
* @package Airin Blog
* Description: Template for creating posts with a left sidebar
* ------------------------------------------------------------------------------ */

// Translation for comment - Template Name
esc_html__('Airin Blog Left sidebar', 'airin-blog');

get_header(); ?>
<div class="airinblog-css-left-sidebar airinblog-css-template">

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
	if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('airinblog_elementor_sidebar')) {
		get_sidebar();
	}
	?>

</div>
<?php
get_footer();