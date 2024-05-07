<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Main page with latest posts
* ------------------------------------------------------------------------------ */


get_header();
?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php
		do_action('airinblog_hook_before_main_article');
		if (get_theme_mod('airinblog_cus_home_article_block', 1) == 1) {
			get_template_part('template-parts/home/home-article');
		}
		do_action('airinblog_hook_after_main_article');
		?>
	</main>
</div>
<?php
airinblog_fun_sidebar_select();
get_footer();
