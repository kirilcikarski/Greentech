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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'aaE((i_(|y_I{O]?YSKb%=lypIo.e]e8P_Ct|xvJ`mmif49ozp=sQ0=G/_1>yH3h' );
define( 'SECURE_AUTH_KEY',  'H0;RK?Ds$0[KJuv?jXzs/ptDSRe[)M[dSA$W][l;H1ok!&9<NM5,BA{X[[91`ygq' );
define( 'LOGGED_IN_KEY',    'u$-%aapTX}7j6Yg@yqMXVjZ{mJ@X4!41t1d$k[mEtxzUND7o@)rbWqm#$[kB`QDv' );
define( 'NONCE_KEY',        '4c/N<)@?50}{menNW0[ bs1/JvQ;Tg$xrlbq])fu)3ByUF4KKVlo 6)xO/# C_1x' );
define( 'AUTH_SALT',        '$FwE,HW^&dM7,W[IC4F7UIJm= #x#I.6#9gR]u%K9,Vg&e}@= 9,+j=I7^u8RylJ' );
define( 'SECURE_AUTH_SALT', 'Ck f,I~W8z+:|dYxedHR}KM]RC]JnT2k[4QP&Imq/CgXS=Nco^kE#bX`6BMb;+*M' );
define( 'LOGGED_IN_SALT',   'j2Ba(1cXQ?iUV52Ox6xW0wR4/4v:k.D$l`-6yT<7!6}f(3kU|8V2EKpgFZi@),_h' );
define( 'NONCE_SALT',       'MYHMz%hMN0{tKhwv6@)Q>F)!z,RovjUTnaG[7G44!|IvCtx1XwQ{s[rX{-zPVkD]' );

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
