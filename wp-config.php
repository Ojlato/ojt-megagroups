<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'DWG2Y963pTHI8HfbYxxrbSSJGRIpFwLvI83c04P6SwSluD6cXaLlhiNo6gLMF1xy');
//END Really Simple Security key

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ohkiicpv_ojmf' );

/** Database username */
define( 'DB_USER', 'ohkiicpv_ojmf' );

/** Database password */
define( 'DB_PASSWORD', '39631244Oj@$' );

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
define( 'AUTH_KEY',         'NdsXb,}sf%;Ycjtg^f-0h6&OkRJ8JKr: [#zK.=Edn1f?w;+E%bP i+xI@;uK2?v' );
define( 'SECURE_AUTH_KEY',  '!yI:y%C`s,FkczhQXD!4b9SjbLBxZL8&P.|XY|EfCU(;h0MqQwnU.qmr2b9/t@V:' );
define( 'LOGGED_IN_KEY',    '}!J)c|c|e^3??1w=w|)^1Zfi_rD%$]|Zy;~;:?IpD R+r?n`|-SydpDgDv]1O^Qc' );
define( 'NONCE_KEY',        '< j;G~d;.FzCy?L)E|IKR/#Da/M<<Z;w#9SPun?7*iyfvNf|IdU>Jx|Fh#}#[1Kq' );
define( 'AUTH_SALT',        '@`P3FT0=$n&ruY|!!NX)|?eKYVVHJUuKo%RH.9sQyNAaZj:FfQ:cH=NY2G|_Skag' );
define( 'SECURE_AUTH_SALT', 'QC>f0/J^ITqTd#=.j*k>8`17;&$cW*x15K%`yAQ$E,%2Zv.rG[;1,w,_P3S-*G4m' );
define( 'LOGGED_IN_SALT',   '`5 ffW=G7| ,]5FfkX4PJ]|.;Y`CS868jfojt clZC5F8+^*Z&gg^Lvwg)o{fjKD' );
define( 'NONCE_SALT',       '9AcJrTj[nx5%R1aIlVIDwq8_X;*mdc:uNNp=x@x;cD@6-[Dg{%>(~H$![MSf#bRw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
