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
define( 'DB_NAME', 'wordpressprueba' );

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
define( 'AUTH_KEY',         '`33$E,tkWKRla^#Bp/01+)hb|IB0IU-zIx5AnBED!fRGxyp?7)wSLdv&3Cj50|v)' );
define( 'SECURE_AUTH_KEY',  'NUMgcP4Co{g*)u4-+t_oSx3kfbQow*)Q#y=sSPh|rR@sV[W;N#Zi11VzOmD([5te' );
define( 'LOGGED_IN_KEY',    'j<e)}[x(sFOtrv}|%*%T2-I2LX &d&(:T~j6D#?PVZXFOPJ=<>:xArAW[&HRuB[W' );
define( 'NONCE_KEY',        'OOJCF:w V;CS3Z)i5NR{`4Pct&<X<h%.i.tep3)+FB;9UjFvs37ex_KGXs^bz$:R' );
define( 'AUTH_SALT',        'b0[?xd%-|.@11<<&7&q54pZX4U#{V)|5-m)^R6f>.,3m]max m7DW>B@^]84q$I1' );
define( 'SECURE_AUTH_SALT', 'T^2ud#(@{.*9]D*NR0#<OtxdFFH]Dm0B|,(1XyXfkR&+2k]CBK:p_r>u?l=|2>*E' );
define( 'LOGGED_IN_SALT',   'spxZ(`_sD95b3P<>9y[2OM}{{y/}irphg|7*JbP0TXgbZ%(?cmj!#Cc+mR!oMxC+' );
define( 'NONCE_SALT',       '^,zb.MGT=l9N==Go2# SUrzxLq_b~[t5PtG9HBm[rhd4Q#d?ENP`eFbC$.(kB_Q,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'word_';

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
