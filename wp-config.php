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
define( 'DB_NAME', 'fitnostar_db' );

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
define( 'AUTH_KEY',         '~dd/o 9IxpR(vC|lkY&,/hk(#JD9#Vhso|/v6e>kP8w($Y|mF] Dm=6 Q57Ply;!' );
define( 'SECURE_AUTH_KEY',  '/uI]gvlsQ&e0rX|?:98lWBgry$50YFLz 39AO^S ox=48sHj+MnIjkjp%CNV>H5q' );
define( 'LOGGED_IN_KEY',    'I@yD?:wBpGccObqt@fX[3q*^m#kkDD|:N8U#Ut^?`(u{B/+Ze$^Fe6QNP?}8^c?>' );
define( 'NONCE_KEY',        '_${a_U2kGP|4ew^;F#JIK~AipzVA9.e%LgKKu]NHus(-N3<y2brxOIwG$`bVjc`2' );
define( 'AUTH_SALT',        'nXQOZC<B4oGt<<A7@,s+3[dbHR=WAI +4-x/Z9+B%13q#{7%dYnUUB!z0RI*FK/>' );
define( 'SECURE_AUTH_SALT', '7m[ZGnKLQ$fyynuM1WOEB7p(D$.Kb0)UEto>%R!tl0O_D^vS{os(zCv}2[xcRqU)' );
define( 'LOGGED_IN_SALT',   'z1H  :sjyH:U01y6)i m4@ib):FYmz!<uv)623|o>twI_}5&s.&(TGN^VsG1kqPI' );
define( 'NONCE_SALT',       'lop(7:yw:ER4LV{flV[Qy2n:UXf@J:08eW}u&4CJ55BgO2`4jmA{o/6Tbt+hYk#=' );

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
