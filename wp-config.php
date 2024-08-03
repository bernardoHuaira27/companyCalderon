<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'CompanyCalderon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '2002' );

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
define( 'AUTH_KEY',         '}iTjuFoDE4Y_98EUoUW{.^~/9MU+wa*>BN7>oMV<QZszcRsm~eC/0{VhH;F=.b8)' );
define( 'SECURE_AUTH_KEY',  'k`!XH.;Y#h@P^NWYyXHj:|SktZ1KkD@WXT_bSAATUnzSKEt4;`L#<q8T{-k/8IKn' );
define( 'LOGGED_IN_KEY',    '_yzbnb:bmDFo+-=kZGz]TpzxN&5cVPFKYj!3Bt6l?^sVl>37`BHWU_&Ygiy+--}7' );
define( 'NONCE_KEY',        'WSH~7Fj<?FL;3#6]& *|PO6.k2@~:{^EN<h_H;$uy/4D%4P>Wm1oRnG#qCuKCNFv' );
define( 'AUTH_SALT',        'E(@+*Z gZj?+&-rN U#<]-x40i/[8llxe[Z{4|+]!8fo/Ev$>:Y/i=jhG7|fC<f^' );
define( 'SECURE_AUTH_SALT', 'pH.tq86RBP(pB1@,_9&=v AmmR.2a+gv?3{skQoIO%zKiA1eq2lfaz+04izfeqj=' );
define( 'LOGGED_IN_SALT',   '2rqGZX6jJ;JQTq[cRV2wz=OSjBx3EPhIp>riL]kS5Q4Iws:#[_LBq%/5hX3B5!U_' );
define( 'NONCE_SALT',       '3y.R2tR9[(/kl5&)e$wcJSa-cV+=&76,@L[+GF,0HK<f31Ch<A@|E2@7c2=g.H;O' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
