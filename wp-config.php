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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'T~e9M^^MAXS6PKhlC[3O%?ecewk-K1f(f ~Y,7tA@QdZRj`N_,u1h$>uR?d3eXN(' );
define( 'SECURE_AUTH_KEY',  'vkP`(}kA#u&xfpRVa#MiT2FW+.UNcKMl[u7XIfuOt$$60F6r>wy6U8/aBSe,3;Vv' );
define( 'LOGGED_IN_KEY',    'bK;FY<u_&^[zz7<4 oZWtxzB*d$StNpMp,a;+O}h*.%vt;0.o`>i!0+5].CRD~a2' );
define( 'NONCE_KEY',        'G}fE&9;0{{cU&gfrUssV5R^e,og/Wk92J{|[Z,ct V*~HpWex#6Qv]76<-rZ tv<' );
define( 'AUTH_SALT',        'b?hqd!@-C@)t:U;6,`O|YU=Wzo7d/$626zs[?Yx.r%!1s$c[rqMY]Ukts= L-L0{' );
define( 'SECURE_AUTH_SALT', 'DM{<N&`.W?B=I91b.%I!g=@GsBWyQeN/ >A!g4>zs#l!WUKAi:A9?*L&`RJEO4,9' );
define( 'LOGGED_IN_SALT',   'Gl/1;W}.#%tiI_w2%)nb4NI~{ZLz~ @50,Ua]!3p4hJ^Fc2(3&9<b-> Hce| 9*c' );
define( 'NONCE_SALT',       'e/y%b7P2GrKLucSZ4);;yG4({KUFc1+<#WLIc$as#g=eb04A2q:A?};>8RXuacVG' );

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
