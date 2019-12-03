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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cart' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VsfqLLeW.}MPV}*Br5Hx*#:?i]V:WahQRdUlz]6HEtI`8~$@?}5~RD$v4b.!xW}s' );
define( 'SECURE_AUTH_KEY',  'bH9A&Dc|hC_PwA);8[e-Ck^>5(4m7&$vH E4vI3s~QF_g9?zw~_K>!c)8MMBu0*o' );
define( 'LOGGED_IN_KEY',    '?!F1Okzd<V +gc$uT-(L5&!Y~K%0N[mO..}mOz=LyGvoy*{28JT+a<DJyjstnGDm' );
define( 'NONCE_KEY',        'cI(,0X_{MgNtT_#f1jI_N1Ev*in~DH8PRn)OwAV?[sb<]> ]LkCmlsd@|GPC9Cr ' );
define( 'AUTH_SALT',        'JBBG2R{z5{:]73>kBYW5)(B:}A~LZK;z!]]g0N3)^hEff;c_.JqwgD]?(0qX)pnY' );
define( 'SECURE_AUTH_SALT', ';-D@tHPYR`]faimO(|Fu-*F$BF)52(0S@b~y&).@pp,7+_8JL![Ng+5Swr2Q`}m;' );
define( 'LOGGED_IN_SALT',   'G=S9B|5c02nVHN19=k_oiR,PG:MKUMWLD[P%uyvVa-o*pf=.Eg(M[Gfj-l&%$QL)' );
define( 'NONCE_SALT',       '8AQpd)d(^XXm$raeObwWw1*?v5Yb>A|+D=4uYHlvJOk-Kh.Zj[?#^zp{(SpNvi(y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
