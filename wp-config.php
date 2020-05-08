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
define( 'DB_NAME', 'wp_wccourse' );

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
define( 'AUTH_KEY',         '*O-kG9hmZ6X0zAng+&_dX?/=q!|`TJ~urD(hdS!y<g,[T&cx?#fALh$d32G2NaX4' );
define( 'SECURE_AUTH_KEY',  '8?|ZR^k>B`B~]4d]yBJhVw^1m~bxL<eNpN|VmcvOw+w_RE.Y0n.25Qjg(z;mh:&B' );
define( 'LOGGED_IN_KEY',    ' n%Z5Rw33t<tg:n{C|A>&$D7A_t3&BI[#KNm7 /~n23ILd#L6W]?5**D((R b]dh' );
define( 'NONCE_KEY',        '#KoK?u^ok##/g234Vs3Vd4SE,g9OJkBBbR!BG6yW,^:GXM<4E.@3VGW7WJOz~`Do' );
define( 'AUTH_SALT',        'TbieT-p,cj60d19cgBMCrB5uPB$1nV/EnW}hdS]L!KQr<5g=!e)z*P*Zc{UHqcgW' );
define( 'SECURE_AUTH_SALT', 'jsHL*$XdvNy I$FgCR=[e(t<a?ep+D1!RUVYrOjF[X48~@~LYw& =rhLHuj^d>yY' );
define( 'LOGGED_IN_SALT',   'Uib#9QB%Z)}9.G9,~z}@Gd>rkcG;i%N0-u`xVr.8=8uF9g4H0;+/UmeZ!){GuGc]' );
define( 'NONCE_SALT',       '[=TOAW~2:e0M+ZANG4T8a=iq}^f]&&i&%4s0}-zx<E,2ta+]{:xyUQnaG<*#mQVc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcc_';

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
