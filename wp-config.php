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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jofachweb' );

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
define( 'AUTH_KEY',         'D$_L+-$)6<m>j,!X{bK=}yxn8;oIY-nOzY2%NPr1?:3QV:MLJkdQ3w <]yQq=Iym' );
define( 'SECURE_AUTH_KEY',  '?Bo,jG2m8=?>nx}GoH6Lz[A.uBL;c=6U@0Qo>~0Vhf*~?}m)7dTc}momG]rmQb7t' );
define( 'LOGGED_IN_KEY',    'n/TYiL)SY2,v3x>d~n[]EWu@NYXc GqhbV(Nlm1cGTlRw21!Kq&dI%!-j MT1nD}' );
define( 'NONCE_KEY',        'w::)Y)L^m7;+dR(V(,w![h@a8]J{U41,<N3.el`#-J; qbRm>{e`J=yf2@R.NdVk' );
define( 'AUTH_SALT',        'l~;4m!`BTslD`B_~3+eeBvH=(*.):ZYf0/<Bb&K@Be>*hGDXVY:*Zk^cLoHq `p ' );
define( 'SECURE_AUTH_SALT', '[V,gd%6M0L [dYHvYru_wB&bx[[Vk6:N+Cw]{b2 +:yGEA95;3I$Yv?#-4=WB@4,' );
define( 'LOGGED_IN_SALT',   'rl=u_-U8UezlXLZT?.}?/NQ71(H?v->%5oKQmJs3{Z@r*I3wV49%|nPL/=Pi8-_d' );
define( 'NONCE_SALT',       'Jp^ROw^TOO871P@}]H9h96Dl`Q_b}<EJX<Yztqty@N;guOru+v7v^#k%VyZ4e`X[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
