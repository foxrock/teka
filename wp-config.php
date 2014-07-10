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
define('DB_NAME', 'teka');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'c#t^>E5o#a9Ufb45hz#Ar_L$t1||jQnR1l2wBUWn13;tA+^L#x|I~8c$B)+_#iF8');
define('SECURE_AUTH_KEY',  '+F3+Ykp**sH9k _?iyKV?9+Wjb7%Tg6V#j 2w-Brhbd6s^SPS6[+uMrm5XwO}S|7');
define('LOGGED_IN_KEY',    'hYwo+(VD[+jOnHg![++-u#ZZicQjm:yO4>0exbEx}>]*R>vNX[T[P99~+|dj+Ans');
define('NONCE_KEY',        'U(53X)nYx,V,vRqT&M7zM}Z|#(4rLz >j|W!>)dH_mpYcTOQ}i1d**AfG:i=.jO3');
define('AUTH_SALT',        '|~ING3k>gw>RS6xHB+$k9.J8b^]U>zkzqlOM9v8NSbT>I+oW/RR}v:9YE.Y+pU5/');
define('SECURE_AUTH_SALT', '2!P[60Y3<aRECf+D{6x<WYI`-7,c|O~9AOlZmDywv1F!n9QV^[{ez,Ra-81gtLZi');
define('LOGGED_IN_SALT',   'PUz{>mU&G*cJxj 1ZVYJ]w,zy@6u,kIMJ7r^zgM _pD?,@A-)nX+AY:;U>#X:fXr');
define('NONCE_SALT',       '<s;pTrTi]b/AM^ce+X4>U::CE+-yT36&&?qb00./Q%}-`+~`6B5rW&<(!jk,~s(x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tk_';

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

