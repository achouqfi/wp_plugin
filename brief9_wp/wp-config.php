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
define( 'DB_NAME', 'wp_brief9' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         'y1`v:w,:I,85PNC66KJ*ekxp}d$#@XsEiV .jw{)WO*w#Q9Q$e2}PT.S/hVg6WtC' );
define( 'SECURE_AUTH_KEY',  '#3JywJ;qo$!u$<859.Iab$,2&f;Oz*#o#d-H/$um%/d4)}1m;i=6c0r7KPN, #(,' );
define( 'LOGGED_IN_KEY',    'ABLtK0z*mm*j@.1+bwo)%g+!]/;654N2Ot?i83.Xn4f5 ]-jXv!Rcws0B[.4V4XQ' );
define( 'NONCE_KEY',        'gH4P /HaMn%%[127!(e@~iR5(BM/`GyNlWs`Wz<YVM=1ud)?%nwT)Wk,{p>UBr(<' );
define( 'AUTH_SALT',        '{I+TO~cwKbCB|.=*;d9f#?%qXYdc,TE4YXhWP`6|JoF0t-#<:r>gcS(27116p^X;' );
define( 'SECURE_AUTH_SALT', 'hfU/vSuO{0+gteQGY6Ad~v,-c8Z0Fpp;{7r.Yr`0N|)!Mvkq@@|<(,9Fg33r^#eA' );
define( 'LOGGED_IN_SALT',   'uHK]*Kgg]ALYFtKNyCcut<I8&+nQUz:|-B?gVI;-P#:y]mShj]A;G  r>~V4Y R<' );
define( 'NONCE_SALT',       '^e?qR(Z@X3XE_Jg>s*VIJD4!A+<rPeoxjNznF!Y{j]}sn+piFX^YVOh0}l|%),hk' );

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
