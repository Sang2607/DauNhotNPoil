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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daunhotnpoil' );

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
define( 'AUTH_KEY',         'o23jCHKfgN VSG6Zql$qVf50k{r+IyuN4/Rm|dZ_Vq/_[F0e4a2x>wkb~)?kBTsi' );
define( 'SECURE_AUTH_KEY',  '8(3An~;P,~gvlSw 2M^C6`g^:4@0SDs+=9>v!,&JK(+yH%($8yS_/Eu$IpAf==C=' );
define( 'LOGGED_IN_KEY',    'P&qZFP{d*JzadqtO^&B0%G93XiT+IuqAB:63R!.Fz{HLW5%.W IrUO($[rP=21F_' );
define( 'NONCE_KEY',        '75`Y4l kZ_Gg@^)k%qpuZDe7e#1;dtds+z2YP*U+HDdi,RRwTFd7~5>$h3/zC.[P' );
define( 'AUTH_SALT',        '3ib-!ZlCW|*KmtqMtV|U9-%{qGS!jMrVSGai=*V]#9QA!,!TAW}I.FG~,D%yh)1b' );
define( 'SECURE_AUTH_SALT', 'cq<ScQ<83ui2BC5S{$SQ?ow5YCQkr/=?uT4wn$AHYox>}0v.%Q+&MLrbvrMBsYvh' );
define( 'LOGGED_IN_SALT',   'r@?ht&$:FqX,4uVZZZ|Y= 1N[u^!MoaZ+2I^L/t9X-|^70W_b=h4=D%>wh:EiZ;6' );
define( 'NONCE_SALT',       '>Q&Hoe(sCQ=Vt(M8DQAs/o[H%%,Q0}2vEnw&q(F#[A@4vtqt{hNN#fFknZ9155lh' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
