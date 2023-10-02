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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'noveindra' );

/** Database password */
define( 'DB_PASSWORD', 'noveindra' );

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
define( 'AUTH_KEY',         'p$JJU1%Med|x.fB&$_H^Kn+<!0]wgMiP4A{C?9mTQ9Y@-9w%e|HvA6h0-jn`= Js' );
define( 'SECURE_AUTH_KEY',  '%<fIlUXQW~.bKYab|E z/0bXLDj~RSU1OnI6Q>L..eIWtBMBv{}i1CWw,Kk?^`6[' );
define( 'LOGGED_IN_KEY',    '3&:.Irx]UR^5}$6%,R~m,HW`:V+Bxv-o6S :7#@}Iv+kL7OY=h2mbQ/_42)w=l=:' );
define( 'NONCE_KEY',        'NG71[el4^cSWt+FPu9IDX-no}}[9K48N^nHVo23+[&,WFi[%AB@)(QKg%W}^/.aD' );
define( 'AUTH_SALT',        'h=f(DgUX+)5gf> :4qRV,[C iSNvmJX/_JeXBG<c!*)yEmlabs,W&8X2z>VA4G9?' );
define( 'SECURE_AUTH_SALT', 'Owz|).SprSkv}Gf`jiWEk9GBbthGmJm}qT8lK@szL$A;UCgvR82f6aVnTl3*l){!' );
define( 'LOGGED_IN_SALT',   '$y>6U?]Po^*cbRtfm=te6weY8C`9{NkPX-GXwmM}2)F0B`NTdrV@0K Vl2#A}?+#' );
define( 'NONCE_SALT',       ')?[Wz(:Zkl{2{F827z)ysrA[{F;&i+!?NPCoTS^$[q+[8{!ArI|kSvyC>7jCnnTy' );

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
