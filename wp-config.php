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
define( 'AUTH_KEY',         ']4VA+@nUNe_rGJvZ6s0]Ryi,VXd0dS`m7fDj,@dxw!E;J:x.y,a){=6{144TQ V:' );
define( 'SECURE_AUTH_KEY',  '{>5kzHszB,$HM:EUb+$T)ynR:hde<8E/H8IOs^l3WjS#1,<NWjd+bm9y7q,|WS@E' );
define( 'LOGGED_IN_KEY',    '`!J[e*FYlTP@qHKv+Tc>>Y:_XahwGXW;* myJS4z-wVO/vCN{JcN@H!}.L>{%*IN' );
define( 'NONCE_KEY',        'v..d4(;TZZ=g^nUO0S&Z)xM@,aq.^Wpp[8R-E[e?I8WG1^>D*S`Lc~Tr=<5Fb<x0' );
define( 'AUTH_SALT',        '1D6%oVX?pw_!y.Y2!j^m;IVnuMJR6:)kK:J(+Td*@tU^m(^tx4m6` ;eG8?J8f;s' );
define( 'SECURE_AUTH_SALT', 'w/oca3ElCJHMgMd&6)cspU<;(cu,+IOfmKXu1ACn>j:Tqo|^ j)S?m]jiE6HB.K9' );
define( 'LOGGED_IN_SALT',   'q:mf6fshcp34Gd?ljriS[VER#l [~W~V8cZyEDD^vP#RKIr.*ZrVV=WPh> FRUmt' );
define( 'NONCE_SALT',       'qHFn}*a?gBdt;@0V7B/L)R&maI{M `Y=?6*>zvC`ZN5(:R:4_|a-_tM3Vp53EiP$' );

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
