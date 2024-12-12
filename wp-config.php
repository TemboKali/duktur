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
define( 'DB_NAME', 'dukturdb' );

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
define( 'AUTH_KEY',         'ZR>TW#Rl:f}lys}6U)q}&OEt62wr#nu.ht|6ML$jtnL1n6Wg%3T3o~n84iF:itQ?' );
define( 'SECURE_AUTH_KEY',  ';&wV)!ESEd@7&d9=T=to#1hz] i5QGEgxxjmo`])L2]/v)=+;*7&r|@Bq6!Fb$j ' );
define( 'LOGGED_IN_KEY',    ';-wYgvF,0Z6{Z#g?6eEs:#s4H^&@jmwHgxO5vPGe?:U;W|dZhJWV8jHeEt=,{JF{' );
define( 'NONCE_KEY',        'DvsKI;0/lA^:[,)qaL7 dCONf=;v_h^gYl_K} 6`$ziAt0~k1;Od^/qP_;BhQ c;' );
define( 'AUTH_SALT',        '84P~>ps-)5P0P|ZehFkAXmS^kRJg=:Z.MTv_ez.`A;*G0UtZAkTidMt2P;Fu)T;B' );
define( 'SECURE_AUTH_SALT', 'mhtb[AD}ZLEDVN.,4I$(G:B$xa-`<Y=oMv_kFcAC!;8W${QQbVF 8_6c1IXj %?b' );
define( 'LOGGED_IN_SALT',   'x>^O#b2?&pj3VAG(_Y-c8<b1Gcc<:QZbUD_CemR2Q2YqxQ Vq)Kj}T#F&bMw~.=T' );
define( 'NONCE_SALT',       'T%>ncluFYGF <Q*UJ@X9;y=~mC*@g:GXeO|vGBx _-ZltkpXPv4PV-!*H7$Y4Y$@' );

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
