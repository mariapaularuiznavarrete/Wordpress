<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Blocks of posts in categories
* ------------------------------------------------------------------------------ */


?>
<article id="post-<?php the_ID(); ?>" <?php post_class('airinblog-css-cat-grid'); ?>>

	<div class="airinblog-css-cat-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div class="airinblog-css-cat-thum-anime">
				<?php airinblog_fun_post_thumb_cat(); ?>
			</div>
		</a>
	</div>

	<?php
	$title_none = get_theme_mod('airinblog_cus_cat_style_title_none', 0);
	if ($title_none != 1) {
		?>
		<header class="airinblog-css-entry-header">
			<?php
			the_title('<h2 class="airinblog-css-entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			?>
		</header>
		<?php
	}

	$cat_meta = get_theme_mod('airinblog_cus_cat_meta', 1);
	if ($cat_meta == 1) {
		?>
		<div class="airinblog-css-entry-meta">
			<?php
			if ('post' === get_post_type()) {
				airinblog_fun_posted_on_cat();
			}
			?>
		</div>
		<?php 
	}
	$entry_none = get_theme_mod('airinblog_cus_cat_style_entry_none', 0);
	if ($entry_none != 1) {
		?>
		<!-- Don't add spaces to the block (airinblog-css-entry-content) - css selector is used "empty" -->
		<div class="airinblog-css-entry-content"><?php
			if (!is_search()) {
				echo airinblog_fun_excerpt();
			} else {
				the_excerpt();
			}
		?></div>
		<?php
	}
	
	$read_more = get_theme_mod('airinblog_cus_cat_style_more', 0);
	if ($read_more == 1) { ?>
		<div class="airinblog-css-entry-more">
			<a href="<?php the_permalink(); ?>" class="airinblog-css-more-link" ><?php echo esc_html__('Read more', 'airin-blog'); ?></a>
		</div>
		<?php
	}
	?>
	
</article>
