<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'porfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^oX^ajVhx;U!eYKc3[SCuB=n6P<}.6yS5]w.4Nz2Q|vpXct)L;@P|GfsfqF7mSp+' );
define( 'SECURE_AUTH_KEY',  'm8mXR^pp#:oO*7yE/|Ur0z8N^lqR6o<4U}4[=nbOwvvM5zdiaQUx*-H7Fn$s>2BW' );
define( 'LOGGED_IN_KEY',    'VyIZ3FAClZ*i=%V*dgpN&ZVa`N%)T|2C,~knOe[ :p4N<xWKO%8B%_(*-kCyW/+[' );
define( 'NONCE_KEY',        '3R>!KB6v<|l#$N|,y@Ay`mAc1DpE^-2/)b,ZU!mJ;K>_n HLpH4SN_TXo7fZvg= ' );
define( 'AUTH_SALT',        ']-e d|1Yil6x&nXi-=Tl_:|>6cnVmYb:7QmwE`{k6?W],wr&o}/dU[BpR3Gw5)U.' );
define( 'SECURE_AUTH_SALT', '?`/*u[8$GhAaS4FY6$OYNy0+9{J69}/$4Rs{XLQ/$0.fS~hwS.xfj09^a@io-RH7' );
define( 'LOGGED_IN_SALT',   'N5):VnwyTDsX$BK<X`e@AH%Z~<7@J^b,s=oMm},Q}~/3i|p%>RJ+@q6a7/D%nB;-' );
define( 'NONCE_SALT',       '2-X?%&DIBpCN]Yr:KZ*p}jJ.-m@5o<fp~n85%j^k8KdR^>H}oE& <R@8YtJwQtYc' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
