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
define( 'DB_NAME', 'firstsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         'RqwH3#:RDN}_] dWyb7><4x1QwA!!wzFyf8zp]pw)hrqN)u4-Pg6)X4 F?UdJ31_' );
define( 'SECURE_AUTH_KEY',  '*>4/B>I!G4OvK.&hC6 #S6j&VmI@h?Xicm$bd@C~TTK? o3,%f*N<MLK?Yg)-)`S' );
define( 'LOGGED_IN_KEY',    '}Ip4e=)9Bc?kcFTQ~qa6i?0h,9B45_JJ>bV]<40QNY#bF!mHVk3a!U4)rp3-1Apf' );
define( 'NONCE_KEY',        'Gilg1(=Czvm`2qgYm !rQOX&YuW_2`:/#C,/y7|^>(LCXvf.-Jk=t07(F gV9!Et' );
define( 'AUTH_SALT',        '5A7HD6Fg=5<1+`Re^Yn?4KhdLCGm*n(A9FE-$;=t7oO?la^p,OD_wVkt1!Sf [xX' );
define( 'SECURE_AUTH_SALT', 'tC!BN7VKwxKrBzw}+($y*%;#-{oh+x}5GW%K(0Rhtjd0-B#* 5g|m9YKCRk$*kq?' );
define( 'LOGGED_IN_SALT',   'vTvD>a4U}y{Dh)ys){#1X4.VLm-)zn^Cr;d#fCrY +CKY@kk;l)A}pGyQFhOas,(' );
define( 'NONCE_SALT',       '*n NoKm0? k`~-fUhs5PvBtZ3uU&Ob7ZU!mw3bQ1kSMnlUU*dV]uvYGp*uk)e({+' );

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
