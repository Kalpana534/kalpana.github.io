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
define('DB_NAME', 'Project1');

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
define('AUTH_KEY',         'b5E5ZC*|v.^X-0%S_7X>><hKuh}{{2N|=#R>Dn38MUvqD68.,e>*HFOM:q?Lc_HK');
define('SECURE_AUTH_KEY',  '#F,O><g}`A+G*G>DDy8;tm}Whcy&BUyHY[!nva9}}jy`H%/S}[>X}1&j_?D:POV>');
define('LOGGED_IN_KEY',    '>Dda51g-jW!KI--9_M6PxlqhOAE8^J-*Q&m):{9jO[$?QNUpo#P^Rb,&Ay[7AVfD');
define('NONCE_KEY',        'vo&CTO.(4%Apl$H5nKDI/5rEz}D=,=-2GL)#912hxStCX}EQ>/};YRB4CnZpg(-#');
define('AUTH_SALT',        'rL;HdLMo(tpPxF:EWS|rk6b6+il=G!6L(kMv!(~bkKZ-FGmzy :[H(4cqM>.HtOg');
define('SECURE_AUTH_SALT', 'qV|~>e9>6` $[gir%o }!mOmH3 bGztS5aA>}pVt)iBl#jggZ {Mn)i[*eYU;6r:');
define('LOGGED_IN_SALT',   '>O#2:!|#podD~@4G!GRI}X($d7qB`v{{DNS52ecQ@SA-9}AgN$=%tj^m:eYctWx,');
define('NONCE_SALT',       ' 9wm=-J4P#ImkMeAIC]*J8kgP^BgPYR8?&e57vtGt(wJ,tpto!k&JFY>v[dBj|3G');

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
