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
define('DB_NAME', 'innolake_ictalliance');

/** MySQL database username */
define('DB_USER', 'innolake_maj1');

/** MySQL database password */
define('DB_PASSWORD', 'kiina168');

/** MySQL hostname */
define('DB_HOST', 'box873.bluehost.com');

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
define('AUTH_KEY',         'W!:g,Y1R%a!|,@5e70cS@ `CY=t r_r.!3wUQ}hw%/dkertYq&2j$|~=m[|)I9G@');
define('SECURE_AUTH_KEY',  'tK,66CIzKp}UawOG-B`J*@kHng<u!{=Vn#h!>RfDrpW@a{Zo+j|{*CjcY[-rlET,');
define('LOGGED_IN_KEY',    '<e`9+{#edX|jZ1Y:bXl}FDD-<64HYw&6fNS42h=>ko#^GIHy;FP=9(9b [fZ9n{5');
define('NONCE_KEY',        '38+W#MLFKO$14#Z^>(hd|8|nLb.<Uj5K87- #~bcp0ZI5+mfE^MS$ZX;d1_-RLt+');
define('AUTH_SALT',        '5gwi>o7g;wF:uZzH$@GydhsB=S4Z6--,y1+./dj]WWDO;&4+?.%BeP%=Z3f-+k^F');
define('SECURE_AUTH_SALT', 'ihS`f-Km{wJr6GD He.Uf4#3-Ej$mo=J5J+mOwZ[2Ou!=E~16Ml[[?6*-~ufW.f@');
define('LOGGED_IN_SALT',   'RWe2D.}p*c(u;3wZ[yS]rL<U6SoSud8aH,4:buudW|J{P1;#9_;kxp`NQ/qw==-^');
define('NONCE_SALT',       '&mDIo2t;>Cq5(BlvLAq(-a<*nT|./lDh{e--edEjLtz1? Hjf?O&yy Q^:}|kvh5');

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
