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
define( 'DB_NAME', 'lispace_deploytest' );

/** Database username */
define( 'DB_USER', 'lispace_lasith' );

/** Database password */
define( 'DB_PASSWORD', 'X)1]A1qO-ao4' );

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
define( 'AUTH_KEY',         'z$>SqG47l$Zl6:H@(Zeiw=ItBIBxesgUB E}-Vjv%JZUg4bU[W9A8**]U!)IaF;]' );
define( 'SECURE_AUTH_KEY',  'kKc6%IuJ+*i{(Md_ +O9zT!Zb@HOd$F`I:9BQl/{Ya=uUZ+T4#Z<1w9NAbRA]/IC' );
define( 'LOGGED_IN_KEY',    '9@n4n2A>2r*?n0um6}*BWW><>@IAp4coV|K:a H]o:~Tsi@r8pB[D_!-7{AyZbH:' );
define( 'NONCE_KEY',        'r^lsMXiq33Dllq-0h|Vq0K*#@e/QifNYXPXixr~x@?P;$Yu31C0Df~d_D9I@9=?o' );
define( 'AUTH_SALT',        'L`V<2hY^BrY@K#RKs0a[,%$P({GfOUQ4f,:~Llq{vCoY<!oS6DSS~b#Ms`iY|xZv' );
define( 'SECURE_AUTH_SALT', 'BPAwVhW7!)=PyS`%{fEf=/jmfgZy]YyUoMZ;W%54gj7&Gsfk(_jeatU~>05UdT&T' );
define( 'LOGGED_IN_SALT',   ':nK5DpJn`)_uT8)opOlZ^d;e) ??5UR(REPCJG)&{O?sU,<F8LF1gYsu-3ZM5:8O' );
define( 'NONCE_SALT',       'h;ScV%Ezf94Vyl3nffHEldwLHrpy;E_=vsdtmc8JC| [FD!y7$QBbOyGSUOh?E&_' );

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
