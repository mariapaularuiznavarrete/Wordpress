<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Search
* ------------------------------------------------------------------------------ */


get_header();
?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php
		if (have_posts()) { ?>
			<header class="airinblog-css-page-header-default">
				<h1 class="airinblog-css-page-title">
					<?php
					printf(
						esc_html__('Search results for: %s', 'airin-blog'),
						'<span>' . get_search_query() . '</span>'
					);
					?>
				</h1>
			</header>
			<div id="airinblog-id-cat-box" class="airinblog-css-cat-box">
				<?php
				while (have_posts()) : the_post();
					get_template_part('template-parts/content-archive');
				endwhile;
				?>
			</div>
			<?php
			the_posts_navigation();
		} else {
			get_template_part('template-parts/content', 'none');
		}
		?>
	</main>
</div>
<?php
airinblog_fun_sidebar_select();
get_footer();
