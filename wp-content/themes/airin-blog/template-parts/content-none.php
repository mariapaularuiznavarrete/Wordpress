<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Content none
* ------------------------------------------------------------------------------ */


?>
<header class="airinblog-css-page-header">
	<?php
	if (is_front_page()) {
		echo '<h2 class="airinblog-css-page-title">'. esc_html__('Site not ready', 'airin-blog') . '</h2>';
	} else {
		echo '<h1 class="airinblog-css-page-title">' . esc_html__('Nothing found', 'airin-blog') . '</h1>';
	}
	?>
</header>
<div class="none-content">
	<?php
	if (is_home() && current_user_can('publish_posts')) {
		printf(
			'<p>' . wp_kses(
				__('Ready to publish your first post? <a href="%1$s">Start here</a>.', 'airin-blog'),
				array(
					'a' => array(
						'href' => array(),
					),
				)
			) . '</p>',
			esc_url(admin_url('post-new.php'))
		);
	} else if (is_search()) { ?>
		<p>
			<?php
			esc_html_e('Nothing matched your search terms. Try other keywords.', 'airin-blog');
			?>
		</p>

		<div class="search_404">
			<?php get_search_form(); ?>
		</div>

		<div class="widget_404_box">

			<div class="widget_404_chield">
				<?php the_widget('WP_Widget_Recent_Posts'); ?>
			</div>
			
			<div class="widget_404_chield">
				<?php
				if (airinblog_fun_categorized_blog()) { ?>
					<div class="widget widget_categories">
						<h2><?php esc_html_e('Most popular categories', 'airin-blog'); ?></h2>
						<ul>
							<?php
							wp_list_categories(array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							));
							?>
						</ul>
					</div>
					<?php
				} ?>
			</div>
			
			<div class="widget_404_chield">
				<?php
				$archive = '<p>' . 
				sprintf(
					esc_html__('Try searching the monthly archives. %1$s', 'airin-blog'),
					convert_smilies(':)')
				)
				. '</p>';
				the_widget('WP_Widget_Archives', 'dropdown=0', "after_title=</h2>$archive");
				?>
			</div>

			<div class="widget_404_chield">
				<?php the_widget('WP_Widget_Tag_Cloud'); ?>
			</div>

		</div>

		<?php
	} else { ?>
		<p>
			<?php
			esc_html_e('We cannot find what you are looking for. Try using search.', 'airin-blog');
			?>
		</p>
		<div class="search_404">
			<?php get_search_form(); ?>
		</div>
		<?php
	} ?>
</div>
