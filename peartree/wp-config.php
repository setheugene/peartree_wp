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
define( 'DB_NAME', 'pear_tree' );

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
define( 'AUTH_KEY',         'xZaKrf9J/?Ys7tD.MY8Q*P}muI3QFkV]}9F[f$F|y|WB<q>aG_DB:S&n85*rdY@|' );
define( 'SECURE_AUTH_KEY',  ':{w_:<9Wm@,cG/)-#2]uS.,)0},!E}v,<W2Bm2-=6BP_:|lt5lG7Phl>5}&LK~oL' );
define( 'LOGGED_IN_KEY',    '&zLDBl=aeLWCeeSYXZQa!6@9r7*pCG{4aLl$m^c_nP6pbLvy:NNg;c9N6K~dN;JV' );
define( 'NONCE_KEY',        'ITmM5-0C_rsWV$d:&&lZ~5j|4qU!pA3wkX9)D;E_by?h{ePyiEja7<2~(SZA?6CF' );
define( 'AUTH_SALT',        'ciAeUbm,y2wrH n9K{~mhT 30G^)!Qk(q]Nq0#7kaXH/?k3EdB(?zwA<![7Z+LX{' );
define( 'SECURE_AUTH_SALT', 'uWBGNdY|-VU);c;o>N1VGX{OLu&nz0f]CT6J%H(imi}sz%s*>ky}nVP.3]6p@beN' );
define( 'LOGGED_IN_SALT',   'gxnbc^hAc|q%CkpnppHL[y_DgiVk:F1w!~if(uW#|~^y}*M+/G+&9OiI!9;OS+O*' );
define( 'NONCE_SALT',       '!:|&b3O-}HxFYC-F [4Nqa|-2K0#&q7yN*vT9Q9ybgG{xF@c2[cJ&FrZ4.bb =T}' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
