<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deportes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b;(9j<xp*,2t^SRbwmK9)-PqDj|:`8[OM4z)u;495QNGTnHe!PJAH+VdqaNn[9*?' );
define( 'SECURE_AUTH_KEY',  'j;JDPqQ~vcrmGZ^eTD9[$d-%6?jbI |Nk%|bVSGY7:us{R3ZD j39tCMj}m=MFro' );
define( 'LOGGED_IN_KEY',    'E6&PsNQSmRuaw^w9Eo,;wUQ7,r?y$QvK>(2DwO}M.[vwP}[Dh^J%Vi@Npb:8 +t5' );
define( 'NONCE_KEY',        'C(KE[f!*mnpflwaf,F)#)1x#K[4`.U(GoHJZ)|M?_Gv]7Ffid`6fZb;W]Nx#T!Xc' );
define( 'AUTH_SALT',        '=]g9jX,6c`;?5[e`u.@@6X&R(IrQsS`N7|m.Om^:[`N;kz&7`57.kI{![$IUg&3T' );
define( 'SECURE_AUTH_SALT', 'y6zh)#jOESJg9wtls<dzcxl6aM!b)L+yU>5FPR`-fmZb{V+1j^2AE0!-y(Zm-y2X' );
define( 'LOGGED_IN_SALT',   'Xx+cn?{~`dB$4(h8s&TPrTTO 5eLItfTv:Cg6s9p~ycOt?U)G&qU> =)f/9YqA<q' );
define( 'NONCE_SALT',       '(x{.HkwCi7v(0di|<zUvRTp{l3?#e%K+qNN6EN1={a m!em.z7o_u+T{u?55XW7t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
