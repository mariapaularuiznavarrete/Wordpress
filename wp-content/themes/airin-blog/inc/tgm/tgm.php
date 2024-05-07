<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'airinblog_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function airinblog_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
        // array(
        // 	'name'               => 'DMCWebZone Apps Functions', // The plugin name.
        // 	'slug'               => 'dmcwz-apps-functions', // The plugin slug (typically the folder name).
        // 	'source'             => get_template_directory() . '/inc/tgm/plugins/dmcwz-apps-functions.zip', // The plugin source.
        // 	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        // 	'version'            => '1.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        // 	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        // 	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        // 	'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        // 	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        // ),
        // This is an example of how to include a plugin from an arbitrary external source in your theme.
        // array(
        // 	'name'         => 'DMCWebZone Apps Functions', // The plugin name.
        // 	'slug'         => 'dmcwz-apps-functions', // The plugin slug (typically the folder name).
        // 	'source'       => 'https://update.web-zone.org/dmcwz-apps-functions/dmcwz-apps-functions.zip', // The plugin source.
        // 	'required'     => true, // If false, the plugin is only 'recommended' instead of required.
        //  'version'      => '1.0.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        // 	'external_url' => '', // If set, overrides default API URL and points to an external URL.
        // ),
        // This is an example of how to include a plugin from a GitHub repository in your theme.
        // This presumes that the plugin code is based in the root of the GitHub repository
        // and not in a subdirectory ('/src') of the repository.
        // array(
        // 	'name'      => 'Adminbar Link Comments to Pending',
        // 	'slug'      => 'adminbar-link-comments-to-pending',
        // 	'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
        // ),
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'     => 'Force Regenerate Thumbnails',
            'slug'     => 'force-regenerate-thumbnails',
            'required' => false,
        ),
    );
    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'airin-blog',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
    );
    tgmpa( $plugins, $config );
}
