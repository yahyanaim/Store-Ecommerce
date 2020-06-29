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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '!ml02uz/Y]^V!/_Nqj=TgQbEJ|*NqhKG96AiI/ p&@JWE8%40P!cOKi%|E8,Ct=+' );
define( 'SECURE_AUTH_KEY',  '|+.0%{8QNC=[5on<#b-&/uY^9HXFWrVQ3UY6.|+:i83jMpz >]vR:^22T&FhUTDB' );
define( 'LOGGED_IN_KEY',    'bC?MBo8[o%,@YMErZq5]/Dd7$n{m#|JvZ =LVrRj$Xn^Ele[lJB~HT{sRR(QQ z4' );
define( 'NONCE_KEY',        'y~A9h8KC@.=Py?ZY4=0!6/yj,My].ahc}HC_2mZvBuQ0=g3Hycpv7seh_)J9dd)K' );
define( 'AUTH_SALT',        'd^Usu<o!${::o0:|lh(q_Ymb>$.,<Y#+lcG~?csKcwf~nkiNkF[n@$k)#z#)fa@}' );
define( 'SECURE_AUTH_SALT', 'rzLpy<6Y8co)|Vdk:e$EPD+SO4$V]QW|4wb73K_@v&jH9]|2avd:T]R4N> !533s' );
define( 'LOGGED_IN_SALT',   'W*/E4 j&9&}q>N/3~2oq?BMQ)[#@e/rSV7j0DFn$6tYX,xc6)qwc+L7N?_bIaH>Y' );
define( 'NONCE_SALT',       't($hx,|707}3wnd:qx Xe>+5K]aB-kPJ(u2S*.8V4w^f!.^q/h*UYOjN9EE=lT(D' );

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
