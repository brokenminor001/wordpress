<?php
/**


 *se configuration for WordPress
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Oadnpvia04!!' );

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
define( 'AUTH_KEY',         '6Sr/:uT.&ReHm8SmUjE_#x(IQIwod#JL!7}=&4=}-4S|pU0~t5,C19QQ.)k=*O0=' );
define( 'SECURE_AUTH_KEY',  '}$7J7_Z/ypT`:A=!yx} Jw_oogclgY{WN~=h>5Sv8_WYjigYV_z4M9h!|DFnm3l&' );
define( 'LOGGED_IN_KEY',    '.$K!Ohl7[ ?o+76Sq{fA<t~OV9u@9%,eHng&m`CR[]Qd@]d{MM t7lOn8$C]A]%a' );
define( 'NONCE_KEY',        'lD~d#%bfk2k[_*uYz4E2#^lAcy-o|#[4@HC~d9.9F#@1|y6|dSYi~CFG^jX/GR1K' );
define( 'AUTH_SALT',        'p.qxe{L#~P^j[oAOumh`^%(|9M#{J)5w2p0+m-{n7@F+CyWL[R-U0&Mc4[}V.[rQ' );
define( 'SECURE_AUTH_SALT', '3`2kbT|`,@{GXmKuK{=5)kGPw*$_Tn6!TQdq#4~zRoZI83tHfs9V;?cp(|$zF5bt' );
define( 'LOGGED_IN_SALT',   'dw4YJ~uw`uouc.@)O?j^4>wMVI_r Sa.iaIbfJy@JiM-K66><:cV{n]A6Xn_RB@4' );
define( 'NONCE_SALT',       'CX3@B#)}RnuD,|[L>VpM, RbAIW##mld8W<q|n;i/%P0QnQv8BM^t^+2FILjB>y3' );

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

