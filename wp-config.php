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
define( 'DB_NAME', 'portofolio' );

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
define( 'AUTH_KEY',         'NafHu)M3z05 Y9Uv7Tfq;;)>3>By~=O@_ F+5,ax]eI*<!LYhg]4~X^_(M(a//BP' );
define( 'SECURE_AUTH_KEY',  'hopHI@#b$$)yZ@oT.~})9Es.l,WI(vSl#^mN-nQ@vEbLQ=T!3]HVvHl0^/9CA%tH' );
define( 'LOGGED_IN_KEY',    'O?c6m e> kKq4l#O0Z.|T8UmrZ1@CQ,7Y0sJV9!=TDq8L^aZQs4${w*3)@c03{%K' );
define( 'NONCE_KEY',        '`#1$3I<6nu^6W0@?`pW_^P244]p1Frm-%}YQ w4o}R|nX]ck43hKcjD^&8*1D=Zj' );
define( 'AUTH_SALT',        'g5PChrsT*y})YUOo^s?<j~NLyuB}JAsDmvW6Nw?Ym}*^^B2eW:.tV$=M8`+^06 -' );
define( 'SECURE_AUTH_SALT', '$m.A;|}eQ4IG6g&Z;r-%|[SPF3`[V*3<* d*EKp2-:.S&st9XR+pnnnO C5N[pz8' );
define( 'LOGGED_IN_SALT',   ' I3~zPz6=GY5/W|Th{~o<Lc1jF5&;Pe1[Jn%sv9U9mp&>,beCk9nCH!)v^zWi_Rt' );
define( 'NONCE_SALT',       'bg9Ewsqjg|b4GbyiqH5Ygw`m|~67[|s [5BRW&1Pn3adO*KLoiIHGp/nEbi-+O0Y' );

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
