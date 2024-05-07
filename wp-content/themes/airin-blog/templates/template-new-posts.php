<?php
/* ------------------------------------------------------------------------------
* Template Name: Airin Blog New Posts
* Author: web-zone.org
* @package Airin Blog
* Description: Recent Posts Page Template
* ------------------------------------------------------------------------------ */

// Translation for comment - Template Name
esc_html__('Airin Blog New Posts', 'airin-blog');

get_header();
?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php
		if (get_query_var('paged')) {
			$paged = get_query_var('paged');
		}
		elseif (get_query_var('page')) {
			$paged = get_query_var('page');
		}
		else {
			$paged = 1;
		}
		$the_query = new WP_Query('post_type=post&paged=' . $paged);
		if ($the_query->have_posts()) {

			if (!is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="airinblog-css-page-title"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			<div id="airinblog-id-cat-box" class="airinblog-css-cat-box">
				<?php
				while ($the_query->have_posts()) : $the_query->the_post();
					get_template_part('template-parts/content-archive');
				endwhile;
				?>
			</div>

			<nav class="navigation posts-navigation" role="navigation">
				<div class="nav-links">
					<div class="nav-previous"><?php next_posts_link(esc_html__('Previous posts', 'airin-blog'), $the_query->max_num_pages); ?></div>
					<div class="nav-next"><?php previous_posts_link(esc_html__('Next posts', 'airin-blog')); ?></div>
				</div>
			</nav>
			
			<?php
			wp_reset_postdata();
		} else {
			get_template_part('template-parts/content', 'none');
		} ?>
	</main>
</div>
<?php
airinblog_fun_sidebar_select();
get_footer();
