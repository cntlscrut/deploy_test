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
define('DB_NAME', 'deploy_test');

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
define('AUTH_KEY',         'kM,.#&&o^Zar_ %$Kr2G!Rt+W$^4z+D,R2$5]}/WA$&b;=Bx%3m/iN7E5RBbjTJQ');
define('SECURE_AUTH_KEY',  ';(FlI389mk:As%g-Rk?tATTFJ01bFrmuj:6j4`OLbK?wJei-+_p(l+$G+>]}-E$i');
define('LOGGED_IN_KEY',    'tK$mfl~xjC|0%;6DqqE 9wA-YD>[{E5%1;.OF`mjtE!`|7`YeF&7UDp!0>,^Or_Z');
define('NONCE_KEY',        'XD9!`;fjC]A.j),.r_Kk-]OE5?533IXg|TQT[$fAUg|25W!Ie%TbgZXt3|19t5K-');
define('AUTH_SALT',        'hQX^M,lB5Osymu+fiiq7;>F`mP|xz?I/r3{aZf$Upe0D@%%#_qx/NikQPkxj8Y=^');
define('SECURE_AUTH_SALT', 'V-KJpQQY/Mek6qbU[GGULkE5bTLR+{U6 n/{[jmrC`~#>;=(T_m?M1<kI^HVX%$U');
define('LOGGED_IN_SALT',   ']!,0`^F|z2!l*H,|/30jTZA|uEvPS-8Z<uyawNm]bcj22m/wU}yS=+_t&FQ~nwVz');
define('NONCE_SALT',       'V Jv;`UZ*#HgLZq]41/o[#+oy$:0+AN_l(xc/TN=hCNi~uwT d%fC<|HAANj|13n');

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
