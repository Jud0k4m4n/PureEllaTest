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
define( 'DB_NAME', 'pureellatest_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v8s?gwDV$O|D6%%3R>%dHA7/L7lFi(R(&d3x+gTvpR:H~DF!YbF)9/,bG.5?wl{%' );
define( 'SECURE_AUTH_KEY',  '`EQE07#-z:Pv{gJ9B&`1k25t0IcS95xB)nYp9oV#rPD<8f>7,N_d>S+Va(@bF>]f' );
define( 'LOGGED_IN_KEY',    'q&QC^Bn2KB$@c0*lA2c.E1&8MUjx6?z0(1Me?,<|IBgJ2cU>:;.j$J$y dwe_v7a' );
define( 'NONCE_KEY',        'e]{X[q[B0ZUQ+izWA?IS/i.;y,wPj>[u@:RvNV[{9}M[;q@zAL$,m.AUQW%XIB@E' );
define( 'AUTH_SALT',        'T)aG%Xv2uXW;/?I2b`sOF.$.1ofRY#-m0i~,o;1<eA!FIAvabxX5%Z5RJ{+K  Ma' );
define( 'SECURE_AUTH_SALT', 'K|2l^9Vix-76KH0i_B<:^Hj=Gx!8H29/83<w,rtfpUXKb   q%B],J=PP_&iaB[A' );
define( 'LOGGED_IN_SALT',   'm|r0A0*=;DJW<)~.Fg k.,8A{/3T3s$ {*/F$rBue1w[7>fr[1${(Q=y&*<[8,6,' );
define( 'NONCE_SALT',       'D}t1*@@q${Ys<XMU`&,/X!t/8*_6[y!8TbzLo{3-ZKT*(K:^LC!-EJ(PLZVioCeI' );

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
