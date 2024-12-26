<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'live_oOBn3' );

/** Database username */
define( 'DB_USER', 'live_user_oOBn3' );

/** Database password */
define( 'DB_PASSWORD', 'IJSeg5e6ytqREAFITCsXKk0he4smKDr8so' );

/** Database hostname */
define( 'DB_HOST', 'mysql.10web.site' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%~2:&P4I?TrtF!Bp9:3;W|5RZyW$M *0,wAJ9+b+KbuGNM-eEJucimU.)+F65o]d' );
define( 'SECURE_AUTH_KEY',   '=45<g8IPCqJ2v?qQW_vXD{Ya#0KUH`lc]U{*YvgQX<Ca<i}oTOFL7L pS96Qe_cF' );
define( 'LOGGED_IN_KEY',     '2E<zO?l(Z4|maCR*0y6H|_kGl*JRKs2zqKH]/2l;M[20Pt@;)ix9hG,Y{SOg>e%c' );
define( 'NONCE_KEY',         '5;4@O&XVFhuDqc?Le&xKY>A;P}7Mra3I?Pj+rX2U;{iREYy%^M}XeN{COG1;zNY>' );
define( 'AUTH_SALT',         '@<$Hu*xd.NnBcgtQ<q(Bx!uf%d,VD+y)M+U)if5{MUM4q{8/hf;rc}v,.z:*#)I*' );
define( 'SECURE_AUTH_SALT',  'vLCf|7x%[B-@[p?LQDzmM4%tA,lQZ`kG@UA!@r:tuM(`Bk~BmVW2RNIGN)+:k8Z_' );
define( 'LOGGED_IN_SALT',    ' )I7]|fbf8$U&SNG-# m55cuFZp)3{Eh?o~uZAC|)<SD^vcv~}xme3g>^,l=|=HL' );
define( 'NONCE_SALT',        'n6.Ya5!J=:%b=L2dONsk8`u-|m*gd~!u<Wc?CrT-<5389#VkgF]1cA-DY@.7sHZ?' );
define( 'WP_CACHE_KEY_SALT', 'l&?QU]uPDrabNE+qCT,`|0BnmmSx.AnMx(TPz~$[Q&`&>^V6P] u8d*Un?P/nxg!' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_REDIS_HOST', '10.44.10.10' );
define( 'WP_REDIS_PREFIX', 'TENWEBLXC-732550-object-cache-' );
define( 'WP_REDIS_PASSWORD', ["redis_user_732550","xeN26l9A4OkAq2GJL6wEsvZlDSOSK0evhJ"] );
define( 'WP_REDIS_MAXTTL', '360' );
define( 'WP_REDIS_IGNORED_GROUPS', ["comment","counts","plugins","wc_session_id"] );
define( 'WP_REDIS_GLOBAL_GROUPS', ["users","userlogins","useremail","userslugs","usermeta","user_meta","site-transient","site-options","site-lookup","site-details","blog-lookup","blog-details","blog-id-cache","rss","global-posts","global-cache-test"] );
define( 'TENWEB_OBJECT_CACHE', '1' );
define( 'TENWEB_CACHE', '1' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
