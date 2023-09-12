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
define( 'DB_NAME', 'uhcp' );

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
define( 'AUTH_KEY',         ',!(0y@G261HobRE?9WYRKx_@/cf!nVd^Y4xb]ooL0[1hA4@T;xy-kPTT?,/kIsu8' );
define( 'SECURE_AUTH_KEY',  '?p>nXG$$_plvs_mAh4mIcUb$.lRf3KV{A0lR6-kp1Tb-UCS9dFvt#=:V@C|a5A:z' );
define( 'LOGGED_IN_KEY',    'MC;*Yd%[cJ30LXSn:dJ8>GT !|pgu9dT5%B#!jTgFPx/<Z!L.T_=icr=D2|>(dwC' );
define( 'NONCE_KEY',        ':&Lp@xu[~<Pv~D;)fcWsVpP= c[_(R{(naKS?+9ZI@f#B@XiULm?rB1h,vTm,0ZC' );
define( 'AUTH_SALT',        '-szwFX{%v8`5MWTlW)YNuO,cP(y:??/#(d(bj-/$@^1Ujn>_-<WkTQ)/Za{GHZ^7' );
define( 'SECURE_AUTH_SALT', 'EVt9;o?u*8_Hb~8TyN,1_n8gr$Dq?DWJ42k{1F.?R|L|6>W-Ct4;:1$o5Uom;}>{' );
define( 'LOGGED_IN_SALT',   '1NS7-hp2Urw%.eScR]Ep$W0B#<HZ*ii ge#Bi`d4KGKBi+k-z6k.wHH@Z~:A8gNS' );
define( 'NONCE_SALT',       '+$X K0DvtdaYAD{QyI}5Oj:DVIhE3:aw4jWBeZ$2+hc]y2=n8ZvSI:6Z^k.cM6nu' );

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
