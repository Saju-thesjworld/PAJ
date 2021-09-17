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
define( 'DB_NAME', 'PAJGPS' );

/** MySQL database username */
define( 'DB_USER', 'PAJadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PAJadmin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Yuoj7AKlP6[$lM@A3Z64{0:j:lbR]O;vq|3Gh$!,*(=5t|MOl#J)CIcJA`_QNg7#' );
define( 'SECURE_AUTH_KEY',  'GO;;|e%UT&b~iq&<]:a4!7Bt1x2oy7#9BbbC4r/TftS?bT$527JLB*,0>FcC].7V' );
define( 'LOGGED_IN_KEY',    '(~s1f31{)G2%rQ^p 87l#`-6mUvj1E*kJxXNyyoFp1WcnT&wT2^{`WL5^-Xt5XSP' );
define( 'NONCE_KEY',        '9e~Xji(;eT:3ybcdFO.S_n7Kg0?8UkW6S.ozgYhgtmh%N3S!@Q3+bO0cC4zTq ;E' );
define( 'AUTH_SALT',        '|_TTMxm2)R0W{>oNVQ<E[$E|!%bOhL1u~,G- zKwKU[TenR/th$u@bPP{fN@PkU+' );
define( 'SECURE_AUTH_SALT', 'Hpe<7X%^9cK5N0{[ mG<,[#Zx[r}YU*U5CFms?E2o5%rym^g,4vqm|Y(VJN;rl7(' );
define( 'LOGGED_IN_SALT',   'Gl#_j[iUQJkIV,A@ZyBu+=N3!3Lo,aPH6NXwCLE(;grg^`#(XX:qGp8Z1|_*-$~U' );
define( 'NONCE_SALT',       'F$XM!jOL }mX`FR-3d|R];yXrN(ZK4d##^Zz:-_ela0553$z1r]D+u?$E!kkcyOy' );

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
