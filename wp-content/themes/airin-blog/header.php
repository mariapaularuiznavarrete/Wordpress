<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Header
* ------------------------------------------------------------------------------ */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>> <?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="screen-reader-text skip-link" href="#main"><?php echo esc_html__('Skip to main content', 'airin-blog'); ?></a> 
	<?php airinblog_fun_header(); ?>
	<div id="content" class="airinblog-css-site-content">
		<div>
			<?php do_action('airinblog_hook_after_widthslider'); ?>
		</div>
