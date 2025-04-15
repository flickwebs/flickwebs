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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flickwebs' );

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
define( 'AUTH_KEY',         'tXHa^lP`~zsUH`O@pTbY2)9GxCH(40TXCO6)c+aoWttI{5r&A}aSd}<QPAGEp_Sn' );
define( 'SECURE_AUTH_KEY',  '4sM1hbux{gU#3h0NDRWgH|tt~I}-xRgGO]e$o2XV=pYq#[BC03[XRU~9zo*m+L~ ' );
define( 'LOGGED_IN_KEY',    '#R,LgRZ h/c*zzho>N!$D!W4{T/NG#T52*0984B/pHmp2HDd,s5Y?g~Zs3M],8m@' );
define( 'NONCE_KEY',        ' >7smT_UMFIy*(%QNS*-VVf>{cIL9gNj{p8=?cGiLad=uT9-&vn;RUND54^c&.`q' );
define( 'AUTH_SALT',        '+y0|5swmgN$%@[a:*th^B~[gb@hH.Dq?/q[[Hv2j?0>e)Sc|Fv5Az&wH0Z2EPT S' );
define( 'SECURE_AUTH_SALT', 'h UH6Vv-acsC+EzY#WkdXMzF0vRl{~xX,0MY*}~]9+%oYL?pH^qS+H@>&T{{jln<' );
define( 'LOGGED_IN_SALT',   'MtfZuM^(7E+<spyTbi6I^l7?KF80Dpb6;u^oQ]~IoppbV[:02}Q.#i/2+#.)pSWl' );
define( 'NONCE_SALT',       'w7ZSbc[1L?A,X)Do++[`G[ZZnBGZrHiQWFJhs%]Y6=(~?h/?DIUhe-vjNh]pF~ac' );

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
