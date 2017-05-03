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
define('DB_NAME', 'ship');

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
define('AUTH_KEY',         'O[iM$lG^ PYy3a?hvUc!y2arAz!]_q{V`Ck)sn6lY#URMq>Av }v3gWVL3nSA!e8');
define('SECURE_AUTH_KEY',  'y`_7;;kj82?[Al?Ie&BML[I*^_9.%=V iXWk,Qp5fvdFG2ncyt1}!{#uLVI]I,2&');
define('LOGGED_IN_KEY',    'l2MD^?$b&m#v1)^*{[-zaMEw+TSPG`dUf.v}ta2(bLqeG6}~y}EkyyOCdJbP)6V.');
define('NONCE_KEY',        'jS3q)6(PVNGRsDe.Ww}*avjy`VUof0|A#{Z~,rduwC7{j=U;5;_.Xm$;R%li61[*');
define('AUTH_SALT',        '~:_V9/xxI[ww,*aVEH JTU]|Hlg!Pij&9)$}(4dhiu~mNO}<kxRa@I ~;95Mu=:_');
define('SECURE_AUTH_SALT', ',i,!w91q/]xT)ldD}/AWOgB2pRL@#xcs>99[^IL!WV2R=lmSx`4n>!IoOj9y;|Ia');
define('LOGGED_IN_SALT',   'c}QPV,<]#3{AJ;UAvoJ@)U[$65|OF?x^Bps8IFmwokbE$q@*xON5negacAf5~4k}');
define('NONCE_SALT',       'L17[;,VDj#-_j%tkVdlSu)lJs(:}$UG=bU~;x)I8q_2>%M.~Gqlozc#,D_~MN_&>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shp';

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
