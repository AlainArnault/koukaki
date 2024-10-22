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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         '];RD$B/`4m[i:TzR%Gs_((._ir KxELZ%n6o*,-vJS=]vtYk*?pPLd#Jk@&)#S9P' );
define( 'SECURE_AUTH_KEY',  ':l1)@E2S;4L@ga1Y8R;RW&WE8gn>;kO{P2PW8hrmQv}jEu&1Jz~d-4pROFG WVqr' );
define( 'LOGGED_IN_KEY',    'Q[1@Xh|gSS0w%?f6T}Q,}BN& 5_jvD `rX-L6mAx?Vkj<]ulI.PM[8vI5Df(1Wc}' );
define( 'NONCE_KEY',        '/3 >R$PV}wI/;r4KX|YI,dHm.jnI,@}`b~{Ou6yz(<VCG47&3gOgD!Qr>f43B0N.' );
define( 'AUTH_SALT',        'F>MfKFA+lQ/M?*;s*^]ypx?+?rFQKpeAV8xvEiQf*^:z!F8H| vD Fdb~fg{hN{r' );
define( 'SECURE_AUTH_SALT', '#$Cin*`6d`,W`=iWF6Xv9T)Tt^n,`2O-h}%2|D-]~wjE1)<up~D7Q:izf/OrZ2Wl' );
define( 'LOGGED_IN_SALT',   '?$bN:Ok3wx6H]T%~ZyW<@M[iby{j[46`i|~:G7gn&&v0nRQ{x]Y_W6KaXo}r)<a2' );
define( 'NONCE_SALT',       ']MmD],Jdzp0WIMSChf&Y+$&?#8`4{JX~/W=-vbe<b|O&TpNV%oNkZiGX3(GKQOu`' );

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
