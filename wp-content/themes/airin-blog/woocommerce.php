<?php

/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Airin Blog
* Description: Support WooCommerce - Pages: Shop, product categories, product page
* ------------------------------------------------------------------------------ */
get_header();
?>
<div id="primary" class="airinblog-css-content-area">
	<main id="main" class="airinblog-css-site-main">
		<?php 
// Content WooCommerce
woocommerce_content();
?>
	</main>
</div>
<?php 
airinblog_fun_sidebar_select();
get_footer();