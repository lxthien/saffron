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
define('DB_NAME', 'hue');

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
define('AUTH_KEY',         'UqajEdoHW0e4<!,vhb{U$O<iLGHi*Q>cJ`)XjF7sF}+=3vW$/N/,Oh,$~4,xa67)');
define('SECURE_AUTH_KEY',  'olpUVvp3ys+9f~s!/ZJ)<Wp%+8fQ6e_xHr(#1,O(?KpIRVEt@CGD(2SObTL?Suqi');
define('LOGGED_IN_KEY',    'Z`9H!u$(zpEbkfW?>f^*#GxI-etxo^A>mvtoyJ~-O(:},umgXednkI tSwswU]m<');
define('NONCE_KEY',        'S+6mAk{{;1U7U%7[2vKl ZZ/}q`>?avOOi nT)~C<}+&$qmE23gTvB,xD&/`tlT(');
define('AUTH_SALT',        '9=2-V/zQXonWf+93caF44]u}i6m{?%+k&Z8?=@[g}LniS)uFBWdMug%(HjgOa<<t');
define('SECURE_AUTH_SALT', '$HxbF9{wgZ%]7U@cj7r[{>CBW&kM}E =Gh>Who7UA_uY-nR]qt64.m]|#^T`.Py?');
define('LOGGED_IN_SALT',   'UQ%G.Xv/m<D `nl0-D1~RP|`n>iN])@z[^eXTq5^C4b3&@8e%r$UTTNBf4%$xD0I');
define('NONCE_SALT',       '2X6md!j8~O[usg(e0irfzHy/)C~Fd76{=zRcbfnC8z{^HKdc{XK%R}54_zeiX_vs');

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
