<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Meta tags for categories and posts
* ------------------------------------------------------------------------------ */


// Meta tags for category cards
if (!function_exists('airinblog_fun_posted_on_cat')) {
	function airinblog_fun_posted_on_cat() {

		$label_on = esc_attr(get_theme_mod('airinblog_cus_cat_meta_label_block', 0));
		?>

		<div class="airinblog-css-cat-meta-boxs">

			<?php
			// Post Author
			if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_autor', 1)) == 1) {
				?>
				<div class="airinblog-css-cat-meta-box" data-info="<?php esc_attr_e('Post author', 'airin-blog'); ?>">
					<div class="icon-autor-cat-meta"></div>
					<div class="airinblog-css-cat-meta-label-data">
						<?php if ($label_on == 1) { ?>
							<div class="airinblog-css-cat-meta-label">
								<?php esc_html_e('Author', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-cat-meta-data">
							<?php
							echo sprintf(
								esc_html_x('%s', 'post author', 'airin-blog'),
								'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
							);
							?>
						</div>
					</div>
				</div>
				<?php
			} ?>

			<?php
			// Number of comments on a post
			if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_comment', 1)) == 1) {
				if (! post_password_required() && (comments_open() || get_comments_number())) {
					?>
					<div class="airinblog-css-cat-meta-box" data-info="<?php esc_attr_e('Number of comments on a post', 'airin-blog'); ?>">
						<div class="icon-bubble-cat-meta"></div>
						<div class="airinblog-css-cat-meta-label-data">
							<?php if ($label_on == 1) { ?>
								<div class="airinblog-css-cat-meta-label">
									<?php esc_html_e('Comments', 'airin-blog'); ?>
								</div>
							<?php } ?>
							<div class="airinblog-css-cat-meta-data">
								<?php
								comments_popup_link('0', '1', '%');
								?>
							</div>
						</div>
					</div>
					<?php
				}
			} ?>

			<?php
			// Number of post views
			if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_view', 1)) == 1) {
				?>
				<div class="airinblog-css-cat-meta-box" data-info="<?php esc_attr_e('Number of post views', 'airin-blog'); ?>">
					<div class="icon-eye-cat-meta"></div>
					<div class="airinblog-css-cat-meta-label-data">
						<?php if ($label_on == 1) { ?>
							<div class="airinblog-css-cat-meta-label">
								<?php esc_html_e('Views', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-cat-meta-data">
							<?php
							echo dmcwzmulti_fun_get_views(get_the_ID());
							?>
						</div>
					</div>
				</div>
				<?php 
			} ?>

			<?php
			// Post creation date
			if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_data', 1)) == 1) {
				?>
				<div class="airinblog-css-cat-meta-box" data-info="<?php esc_attr_e('Post creation date', 'airin-blog'); ?>">
					<div class="icon-calendar-cat-meta"></div>
					<div class="airinblog-css-cat-meta-label-data">
						<?php if ($label_on == 1) { ?>
							<div class="airinblog-css-cat-meta-label">
								<?php esc_html_e('Created', 'airin-blog'); ?>
							</div>
						<?php } ?>	
						<div class="airinblog-css-cat-meta-data">
							<?php
							// Functional - Post creation date
							$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
							if (get_the_time('U') !== get_the_modified_time('U')) {
								$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
							}
							$time_string = sprintf($time_string,
								esc_attr(get_the_date('c')),
								esc_html(get_the_date()),
								esc_attr(get_the_modified_date('c')),
								esc_html(get_the_modified_date())
							);
							// Display - Post creation date
							echo sprintf(
								esc_html_x('%s', 'post date', 'airin-blog'),
								$time_string
							);
							?>
						</div>
					</div>
				</div>
				<?php 
			} ?>

			<?php
			// Record update date
			if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_update', 0)) == 1) {
				?>
				<div class="airinblog-css-cat-meta-box" data-info="<?php esc_attr_e('Post update date', 'airin-blog'); ?>">
					<div class="icon-spinner-cat-meta"></div>
					<div class="airinblog-css-cat-meta-label-data">
						<?php if ($label_on == 1) { ?>
							<div class="airinblog-css-cat-meta-label">
								<?php esc_html_e('Updated', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-cat-meta-data">
							<?php
							// Functional - Record update date
							$time_cat_up = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
							if (get_the_modified_time('U') !== get_the_time('U')) {
								$time_cat_up = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
							}
							$time_cat_up = sprintf($time_cat_up,
								esc_attr(get_the_modified_date('c')),
								esc_html(get_the_modified_date()),
								esc_attr(get_the_date('c')),
								esc_html(get_the_date())
							);
							// Display - Record update date
							echo sprintf(
								esc_html_x('%s', 'post date', 'airin-blog'),
								$time_cat_up
							);
							?>
						</div>
					</div>
				</div>
				<?php
			} ?>

		</div>

		<?php
		$label_tax_none = esc_attr(get_theme_mod('airinblog_cus_cat_meta_label_tax', 0));

		if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_cat', 1)) == 1) { ?>
			<div class="airinblog-css-cat-meta-box-taxonomy">
				<?php
				$label_cat = '';
				if ($label_tax_none == 1) {
					$label_cat = esc_html__('Categories:', 'airin-blog');
				}
				$categories_list = get_the_category_list('<span>,</span> ');
				if ($categories_list && airinblog_fun_categorized_blog()) {
					printf('<div class="icon-cat-cat-meta"></div><div class="airinblog-css-cat-meta-data-tax">'. $label_cat . ' ' . '%1$s', $categories_list  . '</div>');
				}
				?>
			</div>
			<?php
		}

		if (!empty(get_the_tag_list())) {
			if (esc_attr(get_theme_mod('airinblog_cus_cat_meta_activ_tag', 1)) == 1) {
				?>
				<div class="airinblog-css-cat-meta-box-taxonomy">
					<?php
					$label_tag = '';
					if ($label_tax_none == 1) {
						$label_tag = esc_html__('Tags:', 'airin-blog');
					}
					$tags_list = get_the_tag_list('', '<span>,</span> ');
					if ($tags_list) {
						printf('<div class="icon-tag-cat-meta"></div><div class="airinblog-css-cat-meta-data-tax"> '. $label_tag . ' ' . '%1$s', $tags_list  . '</div>');
					}
					?>
				</div>
				<?php
			}
		}

	}
}



// Meta tags for posts
if (!function_exists('airinblog_fun_posted_on_single')) {
	function airinblog_fun_posted_on_single() {

		$label_none = esc_attr(get_theme_mod('airinblog_cus_post_meta_label_block', 0));

		// Functional - post reading time
		if (!function_exists('airinblog_fun_post_time_words')) {
			function airinblog_fun_post_time_words() {
				$words_per_minutes = 300;
				$content_text = is_single() ? get_the_content() : get_post(get_the_ID())->post_content;
				$minutes = round(count(preg_split('/\s/', $content_text)) /  $words_per_minutes);
				if ($minutes == 0) {
					return esc_html_e('Less 1 min', 'airin-blog');
				} else {
					return $minutes . ' ' . esc_html__('min', 'airin-blog');
				}
			}
		}
		?>

		<div class="airinblog-css-post-meta-boxs">

			<?php
			// Post Author
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta_autor', 1)) == 1) {
				?>
				<div class="airinblog-css-post-meta-box" data-info="<?php esc_attr_e('Post author', 'airin-blog'); ?>">
					<div class="icon-autor-post-meta"></div>
					<div class="airinblog-css-post-meta-label-data">
						<?php if ($label_none != 1) { ?>
							<div class="airinblog-css-post-meta-label">
								<?php esc_html_e('Author', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-post-meta-data">
							<?php
							echo sprintf(
								esc_html_x('%s', 'post author', 'airin-blog'),
								'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
							);
							?>
						</div>
					</div>
				</div>
				<?php 
			} ?>

			<?php
			// Record creation date
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta_data', 1)) == 1) {
				?>
				<div class="airinblog-css-post-meta-box" data-info="<?php esc_attr_e('Post creation date', 'airin-blog'); ?>">
					<div class="icon-calendar-post-meta"></div>
					<div class="airinblog-css-post-meta-label-data">
						<?php if ($label_none != 1) { ?>
							<div class="airinblog-css-post-meta-label">
								<?php esc_html_e('Created', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-post-meta-data">
							<?php
							// Functional - Record creation date
							$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
							if (get_the_time('U') !== get_the_modified_time('U')) {
								$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
							}
							$time_string = sprintf($time_string,
								esc_attr(get_the_date('c')),
								esc_html(get_the_date()),
								esc_attr(get_the_modified_date('c')),
								esc_html(get_the_modified_date())
							);
							// Display - Creation date
							echo sprintf(
								esc_html_x('%s', 'post date', 'airin-blog'),
								$time_string
							);
							?>
						</div>
					</div>
				</div>
				<?php
			} ?>

			<?php
			// Record update date
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta_update', 1)) == 1) {
				?>
				<div class="airinblog-css-post-meta-box" data-info="<?php esc_attr_e('Post update date', 'airin-blog'); ?>">
					<div class="icon-spinner-post-meta"></div>
					<div class="airinblog-css-post-meta-label-data">
						<?php if ($label_none != 1) { ?>
							<div class="airinblog-css-post-meta-label">
								<?php esc_html_e('Updated', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-post-meta-data">
							<?php
							// Functional - Record update date
							$time_post_up = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
							if (get_the_modified_time('U') !== get_the_time('U')) {
								$time_post_up = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
							}
							$time_post_up = sprintf($time_post_up,
								esc_attr(get_the_modified_date('c')),
								esc_html(get_the_modified_date()),
								esc_attr(get_the_date('c')),
								esc_html(get_the_date())
							);
							// Display - Record update date
							echo sprintf(
								esc_html_x('%s', 'post date', 'airin-blog'),
								$time_post_up
							);
							?>
						</div>
					</div>
				</div>
				<?php
			} ?>

			<?php
			// Number of comments on a post
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta_comment', 1)) == 1) {
				if (! post_password_required() && (comments_open() || get_comments_number())) {
					?>
					<div class="airinblog-css-post-meta-box" data-info="<?php esc_attr_e('Number of comments on a post', 'airin-blog'); ?>">
						<div class="icon-bubble-post-meta"></div>
						<div class="airinblog-css-post-meta-label-data">
							<?php if ($label_none != 1) { ?>
								<div class="airinblog-css-post-meta-label">
									<?php esc_html_e('Comments', 'airin-blog'); ?>
								</div>
							<?php } ?>
							<div class="airinblog-css-post-meta-data">
								<?php
								comments_popup_link('0', '1', '%');
								?>
							</div>
						</div>
					</div>
					<?php 
				}
			} ?>

			<?php
			// Record reading time
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta_time', 1)) == 1) {
				?>
				<div class="airinblog-css-post-meta-box" data-info="<?php esc_attr_e('Post reading time', 'airin-blog'); ?>">
					<div class="icon-clock-post-meta"></div>
					<div class="airinblog-css-post-meta-label-data">
						<?php if ($label_none != 1) { ?>
							<div class="airinblog-css-post-meta-label">
								<?php esc_html_e('Reading time', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-post-meta-data">
							<?php
							echo airinblog_fun_post_time_words();
							?>
						</div>
					</div>
				</div>
				<?php 
			} ?>

			<?php
			// Number of post views
			if (esc_attr(get_theme_mod('airinblog_cus_post_meta_view', 1)) == 1) {
				?>
				<div class="airinblog-css-post-meta-box" data-info="<?php esc_attr_e('Number of post views', 'airin-blog'); ?>">
					<div class="icon-eye-post-meta"></div>
					<div class="airinblog-css-post-meta-label-data">
						<?php if ($label_none != 1) { ?>
							<div class="airinblog-css-post-meta-label">
								<?php esc_html_e('Views', 'airin-blog'); ?>
							</div>
						<?php } ?>
						<div class="airinblog-css-post-meta-data">
							<?php
							echo dmcwzmulti_fun_get_views(get_the_ID());
							?>
						</div>
					</div>
				</div>
				<?php
			} ?>

		</div>

		<?php
		// Post categories at the top of posts
		$label_tax_none = esc_attr(get_theme_mod('airinblog_cus_post_meta_label_tax', 0));
		$layout_cat = esc_attr(get_theme_mod('airinblog_cus_post_meta_layout_cat', 'top'));
		$activ_cat = esc_attr(get_theme_mod('airinblog_cus_post_meta_cat', 1));
		if ($layout_cat == 'top' && $activ_cat == 1) {
			?>
			<div class="airinblog-css-post-meta-box-taxonomy">
				<?php
				$label_cat = '';
				if ($label_tax_none != 1) {
					$label_cat = esc_html__('Categories:', 'airin-blog');
				}
				$categories_list = get_the_category_list('<span>,</span> ');
				if ($categories_list && airinblog_fun_categorized_blog()) {
					printf('<div class="icon-cat-post-meta"></div><div class="airinblog-css-post-meta-data-tax">'. $label_cat . ' ' . '%1$s', $categories_list  . '</div>');
				}
				?>
			</div>
			<?php
		}

		// Meta tags at the top of posts
		if (!empty(get_the_tag_list())) {
			$activ_tag = esc_attr(get_theme_mod('airinblog_cus_post_meta_tag', 1));
			if ($activ_tag == 1) {
				$layout_tag = esc_attr(get_theme_mod('airinblog_cus_post_meta_layout_tag', 'bottom'));
				if ($layout_tag == 'top') {
					?>
					<div class="airinblog-css-post-meta-box-taxonomy">
						<?php
						$label_tag = '';
						if ($label_tax_none != 1) {
							$label_tag = esc_html__('Tags:', 'airin-blog');
						}
						$tags_list = get_the_tag_list('', '<span>,</span> ');
						if ($tags_list) {
							printf('<div class="icon-tag-post-meta"></div><div class="airinblog-css-post-meta-data-tax"> '. $label_tag . ' ' . '%1$s', $tags_list  . '</div>');
						}
						?>
					</div>
					<?php
				}
			}
		}

	}
}


// Meta Tags and Categories at the bottom of posts
if (! function_exists('airinblog_fun_post_footer')) {
	function airinblog_fun_post_footer() {

		// Categories
		$label_tax_none = esc_attr(get_theme_mod('airinblog_cus_post_meta_label_tax', 0));
		$layout_cat = esc_attr(get_theme_mod('airinblog_cus_post_meta_layout_cat', 'top'));
		$activ_cat = esc_attr(get_theme_mod('airinblog_cus_post_meta_cat', 1));
		if ($layout_cat == 'bottom' && $activ_cat == 1) {
			echo '<div class="airinblog-css-post-meta-box-taxonomy">';
			$label_cat = '';
			if ($label_tax_none != 1) {
				$label_cat = esc_html__('Categories:', 'airin-blog');
			}
			$categories_list = get_the_category_list('<span>,</span> ');
			if ($categories_list && airinblog_fun_categorized_blog()) {
				printf('<div class="icon-cat-post-meta"></div><div class="airinblog-css-post-meta-data-tax">'. $label_cat . ' ' . '%1$s', $categories_list . '</div>');
			}
			echo '</div>';
		}

		// Meta Tags
		if (!empty(get_the_tag_list())) {
			$activ_tag = esc_attr(get_theme_mod('airinblog_cus_post_meta_tag', 1));
			if ($activ_tag == 1) {
				$layout_tag = esc_attr(get_theme_mod('airinblog_cus_post_meta_layout_tag', 'bottom'));
				if ($layout_tag == 'bottom') {
					echo '<div class="airinblog-css-post-meta-box-taxonomy">';
					$label_tag = '';
					if ($label_tax_none != 1) {
						$label_tag = esc_html__('Tags:', 'airin-blog');
					}
					$tags_list = get_the_tag_list('', '<span>,</span> ');
					if ($tags_list) {
						printf('<div class="icon-tag-post-meta"></div><div class="airinblog-css-post-meta-data-tax">'. $label_tag . ' ' . '%1$s', $tags_list . '</div>');
					}
					echo '</div>';
				}
			}
		}

	}
}

// Data processing
function airinblog_fun_categorized_blog() {
	if (false === ($trans_cat = get_transient('airinblog_transient_categories'))) {
		$trans_cat = get_categories(array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		));
		$trans_cat = count($trans_cat);
		set_transient('airinblog_transient_categories', $trans_cat);
	}
	if ($trans_cat > 1) {
		return true;
	} else {
		return false;
	}
}

function airinblog_fun_tag_cat_transient() {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	delete_transient('airinblog_transient_categories');
}
add_action('edit_category', 'airinblog_fun_tag_cat_transient');
add_action('save_post',     'airinblog_fun_tag_cat_transient');
