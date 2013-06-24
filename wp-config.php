<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c1ohoh');

/** MySQL database username */
define('DB_USER', 'c1ohoh');

/** MySQL database password */
define('DB_PASSWORD', 'oh oh oh');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#AKrI&`!R1e m+s.8zLH-w+E*p.!7,8,M?18zP3V:$tA|ndG85D`>U_O2nKv2yz~');
define('SECURE_AUTH_KEY',  '##!prqi-Pdf9<Ud[Fw%W1yAie<<@J*-&K-hDQ2y-NrH+zLRE0|`[%]gJ;lnHaW^1');
define('LOGGED_IN_KEY',    '`$,vYN{4Q6utxP?C},_fOV]W:`]G7,M>v>[l+L!0i$^/.gj]GQtXe<d{yIJ j/eE');
define('NONCE_KEY',        '0TeTs>q#TCqF~o]Sw)ss;#xIvL#{zVl+b`<5_PtDM5++m9z=/D81%dtC]a$+0=rB');
define('AUTH_SALT',        '@Nm/uNj-ZYre+qonN^qFlmX)ik|;BbC.l=-t~=vcl__dafX-PCftTzqaf]>CBBG*');
define('SECURE_AUTH_SALT', 'o-1(_y(<#vD`LNq#I|VQwq|)2fVB{y1C@SC@H|A01ME-9+s}2srH[EN|dd% P6fF');
define('LOGGED_IN_SALT',   ';9B&5Lc4bm=-LrdE@T7(#x ;5zThh9Cq8%,B]5Hu{_mB|Ipdr2JTx-@JHsgA-DbL');
define('NONCE_SALT',       ')&<q|AVCiy]5Ra[?>a~&Jz|Xc)DC vLix.LKCL;s;/2Z[);IPt_?Ng2|[-ojW[H|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

