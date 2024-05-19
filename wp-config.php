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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbq_resturant' );

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
define( 'AUTH_KEY',         'S1JMP/0p!^^~o *x4tmd|MdTv{q^DNF,yMKyVl0u_kP&Qcf6w0`P1Wc@[O+UjhbI' );
define( 'SECURE_AUTH_KEY',  '=As`&!b6ZusfWNEzFR6>!6qX(k~ERZ#1IZQ%yxqxjA-MlaxKXI%CBedF?_z*y9K}' );
define( 'LOGGED_IN_KEY',    '[Ek.;{EoZ91@4+_LdkO?JxfG4X71;P<T$dfN.~WMvK}U&!vcd`ctc Hs<fS/][i)' );
define( 'NONCE_KEY',        'cSDn0VbgW%iRo|BjDB6s l!_A5&1:,RF2Os[>muK9qAX/eq%8iO{ >ll{GVtDb##' );
define( 'AUTH_SALT',        '$*$wTyO5lj5,%?5/gR,Traba|HiyQxmB_}:=B>m;$!jA5SCrq6[ 6qNA4mW>+:p1' );
define( 'SECURE_AUTH_SALT', 'gLF[&fCv5G@$,(yf;>|X1-hS?K.^c.gZ;PXZQc2UeTh}F~gBCZQ~$A%8Jv#_}umh' );
define( 'LOGGED_IN_SALT',   '&_V^8M7-3 W_uLN9&RbRB%ET 7lm`[J4{Pn N7gmO1fn9,p.9u5G8RWpsB/ ?m3R' );
define( 'NONCE_SALT',       'kO0{wyO#T4+mwL| !PopsoDtC`U,]Xw!&{)fx%SzP&~GAx1%[[!9,7TP`~XM0=GN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbbq_';

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
