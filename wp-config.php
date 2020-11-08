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
define( 'DB_NAME', 'komp_co' );

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
define( 'AUTH_KEY',         '$puREu)L[Y,{XKI;u3Q=!=Eh27hR{+mX`XLqha0;9tU>|lPu;Ocn_l[m]q41L%H)' );
define( 'SECURE_AUTH_KEY',  'P(QrAnUmx[F|0.~>+5fW%S&Qw$ %(Ilsb7s%+,@jjffjXtE0!,KSn=1iE.AAC`KR' );
define( 'LOGGED_IN_KEY',    ' {6OI2{f^! sqD99GSNHqqtO7Py$|Tn zpfc!O:i%x^CxDr?@QY cx47GH.uUSs!' );
define( 'NONCE_KEY',        '3xw>K_+{ax4PUX0|`p thcB $eXC@Mp<x2O)@F^x2Pt-k#&(iLUCkGLCXH6U>(X=' );
define( 'AUTH_SALT',        'n>R;aUlWC%gBDUEUE)H^kHG{yxjB*8-~?#`Lb+~BfzDO.Px4Z^JU3|+Co ~NoJm)' );
define( 'SECURE_AUTH_SALT', 'c)Tr6~[a)#m{dXU5g} #ZE)BPpR:7ibD5U]s=6h1g_+9$~2kjyNa+)I_-*K@ytZc' );
define( 'LOGGED_IN_SALT',   '5[FhU% vmDY:SB  <a^34$1c#?3Jq?(OLc%Gv_X?#cLw>VVRh`B(Ga,/,i(=wE3e' );
define( 'NONCE_SALT',       'mI#$pC;nHK%#F^mR_ERQ&-L#v4QSU>_yX+vp$$3|`>:t0b;y846_tOUp!pr&o49k' );

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
