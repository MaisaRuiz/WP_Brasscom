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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '-861ZjmVWIX?dn06-P@4qYh<l{aR7/HK`yUdEQ,Q%)Um3bgb![UP7>KMQjd}B]YN');
define('SECURE_AUTH_KEY',  ',^Tm10&6SzOUT#sFZR[Igdh|&->7RHq8Tayp,^0Zq#iYa!)OUp*A+.?U>oy_fSl&');
define('LOGGED_IN_KEY',    '6^<Us1W S/Zw?wgSbZoaE;|<!=0[.64+*(N{Z2yjuP):$ ZIE#rrEmCf4x1`UW.y');
define('NONCE_KEY',        't?^S-jtMp0Gr~~jk1#1s#.E{5~74(KM|s{B>>0iTKgF}J5Vkw;AYlx[fo!,u+Wg1');
define('AUTH_SALT',        '*,{6:.eOW8o4S0A.2447WpF06g4)/ZU1iEWuP_44zu.v[Toe0Fz-xYh{Bzt&e0qI');
define('SECURE_AUTH_SALT', '.}GCR f_O-L*z*x5<P{w|a(E7V>%T5zs(eHYC<L_==7_^Kct?&5X%3mU#jJe+ag4');
define('LOGGED_IN_SALT',   'ekw]]fy7X4ZM2[7y,cX!8v-{w2UU <pi-4C1N|#[b_U}c *lYZ/ qxVxj(`:$Ybz');
define('NONCE_SALT',       'zCRqXlkz(oB:#%]3(e60$$XYW*$*sNP1di:`gw=Nj-mA6p p4H!$#pBgjTM-tVf(');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'br_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
