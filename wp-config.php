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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'books_shop_db' );

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
define( 'AUTH_KEY',         '8<&F$f<~1k3 ~#/O<pOh,ml0nf^uSrcDV@fw>8MzwhE1BN17/IWn/Pq;M5{PXY)t' );
define( 'SECURE_AUTH_KEY',  '!N:_DSbeP>+OH~d^i*)Z9ihom+y5D#ZPd.JPO0*5o3Z5^?3:q5Lf7@:Y134c?:`0' );
define( 'LOGGED_IN_KEY',    '_Idq!C$,4?sml$~gxoh|B=K%Vb;_3GY]z[h|x1QLi~3Dn}wT}>N)C}0+=O~r[6hF' );
define( 'NONCE_KEY',        'p.hG}azG*IRu)i~Bdr^d?#UXSU<,uN$w:WAs6+xvE]2r{4M!N`X_f^>},F.F7].s' );
define( 'AUTH_SALT',        '=UI{mCD=-87QqA~=vTG+_N<?LDM1Kw>Y9nOo@/dmtVS+wlq(X.dwhxd=LXhDUA89' );
define( 'SECURE_AUTH_SALT', 'ejv~E?D?gYZN?UI2fL:EZQj;aXfPc{J4>%v5kMBFgtCgCX[CR{?e]I5d,>OV[w_7' );
define( 'LOGGED_IN_SALT',   '2fM[$<|=%Q3q+Ni6N`WvbP5ErXCs*v>CzDIKbNIDyW~+=o^4{ZIp?r*]x88xP7`}' );
define( 'NONCE_SALT',       '^2L$9CDFbKAmx*5evd6e}U},+P<poA4^xOKVRz%}m,Y&nprQj3pG<2Y6E#KbTANR' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
