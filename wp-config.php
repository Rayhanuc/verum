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
define( 'DB_NAME', 'verum' );

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
define( 'AUTH_KEY',         'K-1QZ17!l5zK4pqCRkQ~Do.I3Je$h|V2[RZ%`>>0x6]Pv6lgfgrZzZelf},i<2$r' );
define( 'SECURE_AUTH_KEY',  '5;!0{D93K?%GXn;0aXmwQnF[)gU-} /^M`<D1Hwc.n2SvtNb_R,fo2HY(}Z)~nB[' );
define( 'LOGGED_IN_KEY',    'dfVT+>V$[TYpGUfZ@^wwa+5B@I<)u*`(j(gE>;H%43]$=|:x~yN]x!d@ZRY,y*bI' );
define( 'NONCE_KEY',        '6Bap#jV].:~QRyMJDvV$.X)ay][[o{ctj]P6x*]dz3w=b7Xu]#t+:G(#wbDZc.f;' );
define( 'AUTH_SALT',        '1N6x[(ue`tfkU|&1_QaG7{`xhw+DQ9:!CStvCxQq<GfCeJC>{0ZZX/Uz[c<G7i7i' );
define( 'SECURE_AUTH_SALT', 'T9@(gYKF/z?ti9}S]T 4^_v3zYMT.gD4d2^ Uqof9IuW4(;j%g:;[;mcu7V/qrT8' );
define( 'LOGGED_IN_SALT',   '-`&(4R<:8iV2c3$iPqD]Zxi]qfwzm`w}<}dSe,$;<J:0|Z/06#Dz_:u+0+L1spR_' );
define( 'NONCE_SALT',       ' _#I>2pTVHd5}%9eVBH[mHz<LSH6!IO3@dM4Q&yT;%ArTwAXifaW?/Vd8qek.r#t' );

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
