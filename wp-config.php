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
define( 'DB_NAME', 'finalproject' );

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
define( 'AUTH_KEY',         '#X};{}7yLvzkiap.*g[ik9i&2>$X?J-`xUHoFw#jS#/@5PB#D>Rg8ivrV!G991c-' );
define( 'SECURE_AUTH_KEY',  '9`&!T#q>zY@7&swyNdf5o/lbRZC>;D2,MvE#q;2bgL1%uUXpQ%!{@J]`kS82S}W[' );
define( 'LOGGED_IN_KEY',    'CB+cs$y+&:F%AId2xhZcx?l5FzP/$4n}8%&R$4|,IC4a?Ai}wdECqW7RXC{#Oa4e' );
define( 'NONCE_KEY',        'E07}lnWCsC)F4nF&U3<CwVhIp!scV0;Uj/(==U`SJF{0$tz^X<.z)$ @ut<bvC3E' );
define( 'AUTH_SALT',        'D&.8,V$*ROx[WaTrh4_ma%}bUZExXW~P[l z^~Pt8hW*odMF.5MXW^dlK$~rX;3p' );
define( 'SECURE_AUTH_SALT', 't/~[&Yd_208JF$f][E+Q>NTOPrT]Q0`P?jn6k*UOpEHLtS69(cv~C ,WxKoh#ZU0' );
define( 'LOGGED_IN_SALT',   'pae/ZT?>o5`S^_u40Z$Q8xe+S~M7o~J:83ZhdO)oJL6~X`Yvx}]u; *K O1(=}T^' );
define( 'NONCE_SALT',       '#7_|dJ]>a_]K%Qb Ub1R1Zj]0LNBKcw>#47)>G$;,vJr).X=MKa1>&x@1 ;F?IAe' );

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
