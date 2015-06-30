<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'star');

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
define('AUTH_KEY',         '?8t|_xfGfsX))@K89O*Uk$C:|Vq wX+n1D@Kg{mR7a`kJlK6mo!YJ|`@v/b[dy-A');
define('SECURE_AUTH_KEY',  '31qzmM>OB?@_4zG@t;$=ZcCHD)nH+O+<lseq6@p9L=#b90<IBf;Z`pGUBfR?!]Vp');
define('LOGGED_IN_KEY',    'R_m<A{9V:`-61{s*q$UThkpKsS3X6r6o%XDO?y=T`(t76Qm*=+kf?D&X%:`$/^Bd');
define('NONCE_KEY',        '|g]s2.K.&LE;as!XB)BnI(D9b8pBHi5q8l^`;H& C%T,|PPlFk&AZMAyo/2VJJAB');
define('AUTH_SALT',        ';Jo`HE]Bi]u)Sek2%tc0+g]v(K]X%|~xm|vYbg^$g0UB=s=)8-zXPzM+pg7?WFT2');
define('SECURE_AUTH_SALT', '6/3M! ho]n-2 &U|*nmPbh+*8GcEfD{;l4:[dE3_*=22A>76J9ofH.]w+Zjh Hd/');
define('LOGGED_IN_SALT',   '& 9]+l;*Hty>N7RtvueNC#5v5+EiB<>x.,k(<{PgqTEA0!A`3lsI_.z1P[FgBx3h');
define('NONCE_SALT',       'aw}!hu@Zcsqim+y(l?up04N&hiw/UeAfS1; 6ok&in}NC({.Ce711`cGQJ$rNGfd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
