<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Footer
* ------------------------------------------------------------------------------ */

?>
</div>
<?php
if (get_theme_mod('airinblog_cus_footer', 1) == 1) {
	if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) { ?>
		<footer id="colophon" class="airinblog-css-site-footer">

			<?php
			do_action('airinblog_hook_before_footer');
			
			if (is_active_sidebar('sidebar-footer-one') ||
				is_active_sidebar('sidebar-footer-two') ||
				is_active_sidebar('sidebar-footer-three') ||
				is_active_sidebar('sidebar-footer-four')) {
					get_sidebar('footer');
			}

			if (get_theme_mod('airinblog_cus_footer_menu', 1) == 1) {
				echo '<div class="airinblog-css-footer-menu">';
					do_action('airinblog_hook_before_menu_footer');
					wp_nav_menu(array('theme_location' => 'airinblog-loc-menu-footer', 'depth' => 1));
				echo '</div>';
			}

			$brand = get_theme_mod('airinblog_cus_footer_brand', 'Created with the <a href="//airinblog.web-zone.org" target="_blank" rel="nofollow">WordPress theme Airin Blog</a>');
			if (!empty($brand)) {
				echo '<div class="airinblog-css-footer-info">';
					echo wp_kses_post($brand);
				echo '</div>';
			}
			do_action('airinblog_hook_after_footer'); ?>

		</footer>
		<?php 
	}
}
?>
</div>
<a href="#" class="airinblog-css-scrollup"></a>
<?php wp_footer(); ?>
</body>
</html>