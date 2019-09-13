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
define( 'DB_NAME', 'nexfarm' );

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
define( 'AUTH_KEY',         'Bhk_EL]_vn_=i4jQ<BwHGm=|: 0?SUfWmfb3KFm.`<HCBHT_<C4w6cfEVjS{qx~r' );
define( 'SECURE_AUTH_KEY',  'H+2b(,ML=VI~,CiJ{lfGYWfd5$d-yRml+13NCivZA2;nFZDk:BFkn;DC^3l2R~5*' );
define( 'LOGGED_IN_KEY',    'C*WQpps9|k*`!)P=2aSvc}]-FZ;dWWmuD ,F4%Yl#7Ft*&EX9?cAO/#HrDT__ZKz' );
define( 'NONCE_KEY',        '88XKkg^G+InF$Wc<GWTZ*,i(YQU!a*I2?I=tvHFWK>;itX3W2d.S~DhNf0^UR^_A' );
define( 'AUTH_SALT',        '6X+_<Sb:UqYxj;K`1N,}3(#q&XZxC6j:/)n/@O6{sUQ+EQMnS$UU|gXu}1;>^fci' );
define( 'SECURE_AUTH_SALT', '@F 6[k<HGNmV(T(UCNHJw7::cG=CafS94vG -Zeq}@g#=G[k)-nfQVvE39My|p}3' );
define( 'LOGGED_IN_SALT',   'nE9`AR[h5F((QVsTg<)%5UD<Fj;U}6GEh/tr$D|V>UT%MFm$@0k,%ki_jz1J1Tn`' );
define( 'NONCE_SALT',       'jc|O(a/(5q=<uBIk8HMAx1}L4r3v]N^| a#&Na@}.O)2}Tz`+H(xu;JsAfY}*jy<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nex_';

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
