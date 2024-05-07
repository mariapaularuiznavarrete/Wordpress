<?php
/* ------------------------------------------------------------------------------
* Template Name: Airin Blog Site Map
* Author: web-zone.org
* @package Airin Blog
* Description: Site map template
* ------------------------------------------------------------------------------ */

// Translation for comment - Template Name
esc_html__('Airin Blog Site Map', 'airin-blog');

get_header(); ?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">

		<?php if (!is_home() && !is_front_page()) { ?>
			<header>
				<h1 class="airinblog-css-page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php }

		if (get_theme_mod('airinblog_cus_sitemap_cat', 1) == 1) { ?>

			<div class="airinblog-css-sitemap-cat clear">

				<?php
				$h_cat = get_theme_mod('airinblog_cus_sitemap_cat_h', esc_html__('Categories', 'airin-blog'));
				if (!empty($h_cat)) { ?>
					<div class="airinblog-css-sitemap-title">
						<h2><?php echo esc_html($h_cat); ?></h2>
					</div>
					<?php
				} ?>

				<ul>
					<?php
					$num_cat = get_theme_mod('airinblog_cus_sitemap_cat_num', 50); 
					wp_list_categories(
						array (
							'title_li'	=>	'',
							'number'	=>	$num_cat
						)
					);
					?>
				</ul>

			</div>
			<?php
		}

		if (get_theme_mod('airinblog_cus_sitemap_post', 1) == 1) { ?>

			<div class="airinblog-css-sitemap-post">

				<?php
				$h_post = get_theme_mod('airinblog_cus_sitemap_post_h', esc_html__('Posts', 'airin-blog'));
				if (!empty($h_post)) { ?>
					<div class="airinblog-css-sitemap-title">
					<h2><?php echo esc_html($h_post); ?></h2>
					</div>
					<?php
				} ?>

				<ul>
					<?php
					$num_post = get_theme_mod('airinblog_cus_sitemap_post_num', 50);
					$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
					$the_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $num_post,
						'category_name'  => '',
						'paged'          => $paged,
					));

					while ($the_query->have_posts()) {
						$the_query->the_post();
						?>
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> <?php the_title(); ?> </a>
						</li>
						<?php
					}
					wp_reset_postdata();
					?>
				</ul>

				<div class="airinblog-css-sitemap-pagi">
					<?php
					$big = 999999977;
					echo paginate_links(array(
						'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'show_all'     => true,
						'prev_next'    => false,
						'current' => max(1, get_query_var('paged')),
						'total'   => $the_query->max_num_pages
					));
					?>
				</div>

			</div>

			<?php
		}

		if (get_theme_mod('airinblog_cus_sitemap_page', 1) == 1) { ?>

			<div class="airinblog-css-sitemap-page clear">

				<?php
				$h_page = get_theme_mod('airinblog_cus_sitemap_page_h', esc_html__('Pages', 'airin-blog'));
				if (!empty($h_page)) { ?>
					<div class="airinblog-css-sitemap-title">	
						<h2><?php echo esc_html($h_page); ?></h2>
					</div>
					<?php
				} ?>

				<ul>
					<?php
					$num_page = get_theme_mod('airinblog_cus_sitemap_page_num', 50);
					wp_list_pages(
						array(
							'number' => $num_page,
							'title_li' => ''
						)
					);
					?>
				</ul>

			</div>

			<?php
		} ?>
		
	</main>
</div>
<?php
airinblog_fun_sidebar_select();
get_footer();
