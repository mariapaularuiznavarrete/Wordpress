<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Support for BuddyPress
* ------------------------------------------------------------------------------ */
get_header();
?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php 
while ( have_posts() ) {
    the_post();
    ?>
			<article id="post-<?php 
    the_ID();
    ?>" <?php 
    post_class();
    ?>>

				<?php 
    do_action( 'airinblog_hook_before_buddypress_title' );
    ?>

				<header class="airinblog-css-page-header-default">
					<?php 
    if ( !is_front_page() ) {
        the_title( '<h1 class="airinblog-css-page-title">', '</h1>' );
    }
    ?>
				</header>
			
				<?php 
    do_action( 'airinblog_hook_after_buddypress_title' );
    ?>
			
				<div class="airinblog-css-page-content">
					<?php 
    the_content();
    ?>
				</div>

			</article>
		<?php 
}
do_action( 'airinblog_hook_after_buddypress' );
?>
	</main>
</div>
<?php 
if ( get_theme_mod( 'airinblog_cus_buddypress_sidebar', 0 ) == 0 ) {
    airinblog_fun_sidebar_select();
}
get_footer();