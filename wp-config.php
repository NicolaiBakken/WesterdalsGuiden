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
define('DB_NAME', 'baknic17_westerdalsguide');

/** MySQL database username */
define('DB_USER', 'baknic17_admin');

/** MySQL database password */
define('DB_PASSWORD', 'NicolaiBakken');

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
define('AUTH_KEY',         '7o5Bv~Op6T}s6gg7cnat_{w&^%P{jhmJZzb:8^R,.<KjS{HkIN;Xv;P&R7+h(MI|');
define('SECURE_AUTH_KEY',  'nb?me&=?0HV>5t!*O:<,7:G[5s1_abU`xxJT)oWJp?<[/q|oN, )xH(K-,v@eh8z');
define('LOGGED_IN_KEY',    '1X,w$6]WRPKY56pl=-S(`5R?N~V1jCg@2V~,SL2klT%LS7yYdu2I7=?_qu7-HM/M');
define('NONCE_KEY',        '9Fb[+**QE!W_d~}#_W QubhqbCL0]HO5LMB2*G<AJd<EE7}sovby?ufgRW/Jbr|m');
define('AUTH_SALT',        'g?K-+Z#[CN?TTs:Jj)Ga[h5zH/2WMlkBotfdRv`p[P#$g6J%Jpn8D~mB4?,u-Pb6');
define('SECURE_AUTH_SALT', '@8KQk]lr6I;T/;6;:Mw^Zc?&57D2sDj^ogZz.w|ZjbUrut`zhFa1n%<I/)6E^e`@');
define('LOGGED_IN_SALT',   'td4,$G h%r$u$x^:dG[OZni-Pwu4Z!TK`m]f$ 0wV~3?sb1I`[{$fe+]<~W>Ry:d');
define('NONCE_SALT',       '+2J.O-{2icD2^ITG0us56yNuMtbQ)^cPGmfE>KtAq:mVLbFQ(eDas8sQc3G@A&H[');

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
