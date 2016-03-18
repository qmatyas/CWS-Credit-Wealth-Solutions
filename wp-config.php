<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cws');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' 6InO.7!9u?m;b1M*Vrf8$}^a~yU&.@{~%lRODom+*?JU;._Qf9D|KZ_l+lRj;)8');
define('SECURE_AUTH_KEY',  'bt{phFX(@X;g0q.W-NWQ wo|u4s;J$DXI%(]7#fpP4{6B$#Lu!sZ:d(r{w|%t*R`');
define('LOGGED_IN_KEY',    'T>XUk!-.L}g7VT)+.}P|b8C|/nZA]I;(}&n<TRT zH!I#K3pIJ4V!RrJ1[BR(.DD');
define('NONCE_KEY',        't(HYR^+=E@:rUkk}=!0}~9*%5Ck>a~8(!.x~5,0+kYD5iKtatPUqE(%uRUvH%h5Y');
define('AUTH_SALT',        '0t^*H=d%Pptzxc:we)#S=#XLx+?W.f7w:MKM>BQ|>I}iMp3@hpu,IU,C3Qz[9c9&');
define('SECURE_AUTH_SALT', 'T+D9t(+ 0}75)1/gVe(dGrV>x%#r6<lT{=GD@)|Xo#%G+hZT?vU,u{VN)d<D%>ah');
define('LOGGED_IN_SALT',   '|$Pgp-6RV9*HFp:/S6]=#&LC#cC_B5VJmd0>gXNv?DBY7./+0-o6ce7<,U_X@ID+');
define('NONCE_SALT',       '[}C~oJjsSN-XVxW{{N1RIS OD}Z=ls}E<L-L_e`yDR]&)a)UzpMt+T}[B]Z@iVx^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
