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
define( 'DB_NAME', 'ass2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';= -#TM6[.#D0 ^C{>Lt_}$cCCjIcpJQT?XeJGNZ<GokxJB3Isk)_d}WFUdIA Tp' );
define( 'SECURE_AUTH_KEY',  'dHNUd%jSJ(ZHN9Zh] pW|!&T~Z#z:fSxT<Q*8$F/Y2zkSzCJw`l n-_^o_QzA)pF' );
define( 'LOGGED_IN_KEY',    '6:V?nwM7+gD3[V3XiE$KdSXsk59+hxKX[~x7|]@C:>WA /[xcr1G-q9>^Baa!h%e' );
define( 'NONCE_KEY',        '6CPm4^5GmaS^4]!48Hm4OKC(f|+uC}bp#zv)tA}>j/67_<GIx(pl-#eQ#.@et&d~' );
define( 'AUTH_SALT',        '_xm^[g+;^ ZqmIxj &E?*gE]T0YC_`MJSQ[wF#F~pwF]Q|0@46+Q`=>RXb|o]B0L' );
define( 'SECURE_AUTH_SALT', 'CuY_w/$GU>5s/5Bvt{Sf+,~kBD&$=VNCrCw&.:KP`D:Ql[fM,ICyqo~L  9`^}Xv' );
define( 'LOGGED_IN_SALT',   'IvqSD(`Zu:b`ZOfVR}gA^K][e-h/32=b{1_`ka9Csb) =@#, WA>GJT-FiM@g>>V' );
define( 'NONCE_SALT',       'L%h|&=UsDmHt!V#:|2L%Ul[#g{Q77ifl6?nmq_ !S~3+68R:Ym(J(rXCD6zriBTS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
