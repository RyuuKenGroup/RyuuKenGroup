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
define( 'DB_NAME', 'ryuukengroup' );

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
define( 'AUTH_KEY',         'ESO1k8H*5-52k$QfK3m8m#v~8>F/.>02tD=[1^60.kfMf/U9zerbsmfcv.U?)M-L' );
define( 'SECURE_AUTH_KEY',  'ma)+iE~BK.!wbyM>j}YYM>8lq}XxeA ]Hb8n2t4nEYd{y:4~3&I7*d(_; cIf~JA' );
define( 'LOGGED_IN_KEY',    ',!$fwDi?EeB%@WQyscSehM.P_]H,cJ62s>_eOjv2T?=g,]RltgUDFnFL#Q>W68$!' );
define( 'NONCE_KEY',        's4/nm;P$W?Q_%z/v41.&@h$?;=#+3$fVhD!eM6lq.5YS(U#_*]pYx*_ode^,oAB3' );
define( 'AUTH_SALT',        'Sys.&s/Xs%e>ZXZ90qogX^J6ey|@I$EYlxY^:I@KMu6)Ef`jy#`!3ob@J]R^nqk+' );
define( 'SECURE_AUTH_SALT', 'nVn.PdUFW*`B1:!|MScr%*l>w~Qk3#RyXrW~Izs~mQF4$EeC.~~~k-U}D k-y#3h' );
define( 'LOGGED_IN_SALT',   'Cx&oBKR;ZYBn[ElhjJExkU){nyc*_CH}HuVT0O#F8|ej4j?s44xNQ$T2@cs`83Kd' );
define( 'NONCE_SALT',       'IpmSBGvzFnrw%v~UY]=kuiBP=q>DyYb.&+vrd00K?O=6]`^.<KjW, g1 w~VY&N`' );

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
