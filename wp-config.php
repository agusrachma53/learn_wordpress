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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'GuDg#5BP<%S*W6Hg/eeCRB~A4w+m2NyLIsQmDRhP<7$!TR^RF;uG:/e~(*]+I7]Y');
define('SECURE_AUTH_KEY',  'oliB12OjxUbg/L/*2*m+uXzABnL1h__YaSL)!GqZFGM5_PIjf7 H)=trxhTp3_}M');
define('LOGGED_IN_KEY',    'iS<hog/^gVmd@.#hEC,~I:?|DbV$Z! *NZS4@r6xo=tN7}dHsc$Q%{Xz5dR%L4V!');
define('NONCE_KEY',        'vDe ,4i(D3_G,l%I+ 7O/6)hwQwy<dT%hWK]UhEW/7GaoosI$`mqR*p&{<x_$<i;');
define('AUTH_SALT',        'qpUe.sR:T.SmV}p$pHpi(1)w37%@it^?hU7v=.4.a(+`kAY:TCL:1b;*9l-WtD(0');
define('SECURE_AUTH_SALT', '>m1p-@IcL4j4Lp;ZK.jEX7:%y{q&%S8q:9wi/,eSPPP=Aep;9HE,/CUbPr;?G1o]');
define('LOGGED_IN_SALT',   'z*s+nxS|X?_n6 R^7RUj2!b|Y|sYcfE,J>*RD.<}>Yh@v?E26jaRLmr@H>&e6]C/');
define('NONCE_SALT',       '(5Le#ojWl/.z~kX.%IW`A ,8nG#X-lL^=yV|J&[uMaL,v*5}.6!S| *g+Plq8{)P');

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
