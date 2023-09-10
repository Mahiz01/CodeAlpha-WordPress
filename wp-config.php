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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';|TUeT[nVvt7DGERWd(#E]<A=V#^&]eThjea.uaFxzo|*I8?>orzaM@~uJPW8xG@' );
define( 'SECURE_AUTH_KEY',  'T<4J6iW#<^l=#a&/CF~2/4UJ3l?gSS`}t<VxLd]vI ;LFb+p%1K2n6M,MbSt.h%J' );
define( 'LOGGED_IN_KEY',    '![Z:(W**K9?QxC|@LBSMunGz[_z}w~hk)0d9UQ?IDdU0;6Z;G]W2LrcV7|h.Z%RQ' );
define( 'NONCE_KEY',        'yp@7tAmBN_y6(W<9?N$=.PgL7{gcCxJ}6a?qoNwy*X.E.S1JkCsQo;GW@Rp]6)3d' );
define( 'AUTH_SALT',        'q#CHVMk]+se*.%{cbeIpEaAQktf(aWQj$5Ow-2N+tnkMc8y:u|@7L%X%@69-=0^W' );
define( 'SECURE_AUTH_SALT', '`>LCsjcd0d=<*g}cfc*u-e~?`X;7>+jVHr^>ueT&E@ke~DiTr18h>b}<Zq{+_GR!' );
define( 'LOGGED_IN_SALT',   '6B>#D0k>AX>Zg$]{O`dQ=?Ww4[Tkq-G%f$YUHEN;Mei]utX>/`k:/{{H6[M4y,.n' );
define( 'NONCE_SALT',       'r}Zw5]S,j4M 7-~4yP.O_qfwG82AnT1uTfD/_1=>AVMd.&hoSj6kXr]whv?dUzzi' );

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
