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
define('DB_NAME', 'pedalmania2020');

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
define('AUTH_KEY',         'bwbSmG1s+soasE8i}FSaALbD6EHYqGAht!)OBW{J]EOA2Zne^Qg:M$_-&,.]Ab9+');
define('SECURE_AUTH_KEY',  '2AbF@:Y:aN|yhGqH6Pi39tiW=].Q<kH.J;iWPmC8AAs$^[D 8E*^aZ&{I0i&yLj.');
define('LOGGED_IN_KEY',    'F2(FU4b @CCx]yc~Ys)0zVlXgHoL]j&AGbnadf:$ /v,16Jtn1u*M[~YP`P.6ZYb');
define('NONCE_KEY',        '>+Ms[O2_&)d._s.ca:/ic!-?D$^/x&v4J$8SV8)N(Jc)<Tb=Mrm>Ak-~3Xz#.Gy5');
define('AUTH_SALT',        'wMsOB~3HrS>uU`8v)S%@cd9a!ivTnR7eF/NS#8`MG>,I?jw`f>CL!)/yP:k(<2JN');
define('SECURE_AUTH_SALT', '3I*!r&Dx`41KAvxc?a7e)jaWb-;EbMASbUL$hg$}.QD!)=Xoekliy<!?NI288{hJ');
define('LOGGED_IN_SALT',   '1b0v[)*dsTCZb,WDrAGaw<|{tb`sQRf>ZTYdN0Co0M(2jfj*hiVn:CC^3PFk6p=?');
define('NONCE_SALT',       'cn-iHR_;8X2/;x;cu-%@)@:e>)J+QV;0W]!Zcy YxmW:0jwP.F]:53e;Ld3__t3;');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
