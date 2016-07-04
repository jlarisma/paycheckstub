<?php


/** Enable W3 Total Cache */
 //Added by WP-Cache Manager


define('WP_MEMORY_LIMIT', '128M' /* WebSharks™ Core auto-fix. */);
/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

/** Enable W3 Total Cache */
define( 'WPCACHEHOME', '/home/nginx/domains/paycheckstubonline.com/public/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
 //Added by WP-Cache Manager




set_time_limit(0);
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
define('DB_NAME', 'paycheck_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', TRUE); // Sucuri Security: Mon, 20 Jun 2016 06:37:45 +0000


define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OL#0P+q^?[r`C#A6b=b3u,d.Cg_*Rw:)iU}446O+L+#!d|b+s@D[ejkfO3uW[r$q');
define('SECURE_AUTH_KEY',  '9IWhaDE_B4.X^jFRYQ eG9)Ud|^2J%6-m,1[bZuPO=8@CRa Cffp.EIuG8yha6Q=');
define('LOGGED_IN_KEY',    'XBm#JaKirM::7l:dGQnP25u)>e`68Jf%T)438v?IjmD<1Vi/v=X(Pfgi_*{|NH(6');
define('NONCE_KEY',        '*.4Gz=o<iKE@4-1i#|H^W ~FT,DSEM,_v!e,Q/r%{VBW9FEy)5!lu8-+}5t-Cp{[');
define('AUTH_SALT',        ':>/#A=A@__[hL8>q<~Zth|CdGT.t>4d)WuhEy4VY<MpS|xbFTI}Fk5TTS42f]Blm');
define('SECURE_AUTH_SALT', 'gclnx2Bzx~L3C0DH+4.(^@ulJ+w[c*gJ.4f-k >#g 2Pqs+Jr!D7^5qFWLWW,67W');
define('LOGGED_IN_SALT',   'S#=U1@1`<)IX6vszl&wBzxde0|v 4[Xq]3d.3-s4JBkiNRP-8M#B8mM^myzmg1mx');
define('NONCE_SALT',       '~i)]Dp*u+8H0ubi8OSJ<L;6]szUq(T2bf>f1}9>i.#?tr@3,aCkkbPq6T6L+Hp.-');

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
define('WP_DEBUG_LOG', false );

/** ini_set('log_errors', 'On');
    ini_set('error_log', ‘/home/nginx/domains/paycheckstubonline.com/php-errors.log');
*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');