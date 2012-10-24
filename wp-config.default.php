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
define('DB_NAME', getenv('MYSQL_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** --- PHP Fog --- Set WordPress to cache requests (for Varnish) */
define('WP_CACHE', true);

/** --- PHP Fog --- Patch a few issues with file saves, plugins, etc. */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Dl-1xz+t,!xE&-:q(?!z+{HZo`23q,.f=Ginw q|-$J3T+jfek7H}J&hGJzLA3ar');
define('SECURE_AUTH_KEY',  '7>83YPf{<D&S_k]#xQsnzi3ksUF;O2z/Iz?w}vS-gFi_AS8l|-|dhH<%=q%p1kTZ');
define('LOGGED_IN_KEY',    'Qeo}@P<<3~/k7E}5}u$e>Hs(k,R?h#p5-WJB{4qRO2H|pW6gMK2^p2D#zJA9|91A');
define('NONCE_KEY',        'y;;+T`c!PUKq+_l7V4(e]+AP{o{WUa4KP,A8)SfU~^w]Khym#+A3%{vDoJ4F1%:L');
define('AUTH_SALT',        '+h^,].M_qlQP-YAb~$2X>HHy99_ R^F.2!J-I2mZoED^-9Exx[-7uw:9 eM?q*v%');
define('SECURE_AUTH_SALT', 'u8@KDYa&?H0(9! CFE&{S)gcGxq~^*+>,i)&-CxeqX:38ozc7v!=h2<H+/6+ 15i');
define('LOGGED_IN_SALT',   '>.=mj/MLk0}7b7IJ=L[QR1o]5.iU1?&[cxG#@8f*zwDZr:0#2qVZhw{H<V#rYzAR');
define('NONCE_SALT',       '$vcQt,ydhA_xAZlRqQSk;=Z6<m#5nwtNs(W/wdH[b&L7lE[#Q7)|A(zT$cm|m2N7');

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
