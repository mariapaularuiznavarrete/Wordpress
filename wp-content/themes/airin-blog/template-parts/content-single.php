<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Posts
* ------------------------------------------------------------------------------ */


$bread = get_theme_mod('airinblog_cus_bread_activ_post', 1);

$post_header = 'post-header';
$post_content = 'post-content';
if (get_theme_mod('airinblog_cus_post_general', 'post') != 'page') {
	$post_header = 'mod-pp-header';
	$post_content = 'mod-pp-content';
}

if (is_singular('post')) {
	if ($bread == 1) {

		// hook - conclusion before breadcrumbs
		do_action('airinblog_hook_before_breadcrumbs');

		// breadcrumbs
		echo '<nav class="airinblog-css-breadcrumbs">';
			get_template_part('/inc/module/breadcrumb');
		echo '</nav>';
	}
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if (get_theme_mod('airinblog_cus_post_img_top_post', 0) != 1) {
		if (has_post_thumbnail()) {

			// hook - conclusion before post image
			do_action('airinblog_hook_before_post_thumb');

			// Top post image
			echo '<div class="airinblog-css-post-thumbnail">';
				airinblog_fun_thumb_post_page();
			echo '</div>';
		}
	}

	// hook - conclusion before post title
	do_action('airinblog_hook_before_post_title');
	?>

	<header class="airinblog-css-<?php echo esc_attr($post_header); ?>">
		<?php
		// Post title
		the_title('<h1 class="airinblog-css-post-title">', '</h1>');

		// Meta tags at the top of posts
		do_action('airinblog_hook_before_post_meta');
		if ('post' === get_post_type()) :
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta', 1)) == 1) {
				airinblog_fun_posted_on_single();
			}
		endif;
		?>
	</header>
	
	<?php
	// hook - conclusion before post content
	do_action('airinblog_hook_before_post_content');
	?>

	<div class="airinblog-css-<?php echo esc_attr($post_content); ?>">
		<?php
		// Content block
		the_content();
		// Splitting Posts into Multiple Pages
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Posts:', 'airin-blog'),
			'after'  => '</div>'
		));
		?>
	</div>
	<footer class="airinblog-css-post-footer">

		<?php
		// Meta tags at the bottom of the post
		if (esc_attr(get_theme_mod('airinblog_cus_post_meta', 1)) == 1) {
			airinblog_fun_post_footer();
		}

		// Record editing function
		echo '<p>';
			edit_post_link(
				sprintf(
					esc_html__('Edit %s', 'airin-blog'),
					the_title('<span>"', '"</span>', false)
				),
				'<span class="edit-link"> ',
				'</span>'
			);
		echo '</p>';

		// hook - conclusion before author block
		do_action('airinblog_hook_before_post_bio');

		// Author block
		if (is_single()) {
			if (get_theme_mod('airinblog_cus_post_bio', 1) == 1) {
				get_template_part('template-parts/content-autor');
			}
		}
		?>

	</footer>
</article>
