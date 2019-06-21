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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         'Kxhg,VxU1W(DAbCWqIKJ!=RwQU)5:GkJQ:b&wo<a<ppgYrjBm!9#8(P!x@Zp1![F' );
define( 'SECURE_AUTH_KEY',  ']x/s%@$C]~U?nU0IP`B]=9w$dT+7GWK2RuSZyE14g{9!@|+Xc6iZ,0IhP|K_::t5' );
define( 'LOGGED_IN_KEY',    'E^w)SG`Gh(8ZZy*TMyBHr:<TB2 lt=m)( 1a =g>S)hMH1_A>4|dn^I-R%MeA-i~' );
define( 'NONCE_KEY',        'n|!W0YEEArt_J[!&C.7cWU1+si6%EJVJ{{{34hi%a0[tE$5ZX0&VEp.TF= h-^S|' );
define( 'AUTH_SALT',        ':f=Fb<P9vm<$GC~IaXaVv9.OK4J[c9v/*pPv&|`FI,E,tJmpP^d`ke5.*OP4)D~C' );
define( 'SECURE_AUTH_SALT', ']QQx(tnsy;};/TSP1bnH69E[S<2Dy[/&5%B=Op:(])WhqmNGmmeWJ`Q&ebN.-W,_' );
define( 'LOGGED_IN_SALT',   'zm+p?Vg2v|3/,=31oLm[Xzo$-||m?F$Tk!ng]p_ayM]3Fq2sa/O`Nsp3kLTH<8K5' );
define( 'NONCE_SALT',       '}8tsdyI[<8+58HUlU{;4RuuusPstIAji1<N,14h&}Pc~8}q6HH*guX_$x+rDZzT(' );

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
