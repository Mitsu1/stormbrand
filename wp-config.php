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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stormbrand' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '`e(lmWbVP3swa;p]CpD{62@`m}]F5_d)DhQi`|5);)xt$-y<CraudMWR6[h)<nuW' );
define( 'SECURE_AUTH_KEY',  'z:n*_L(t_u1XojI4Fe0rCYUa7evABFlFs#>;<ulvOiP*oRb!UH4D2Dd|c-Q|,DBx' );
define( 'LOGGED_IN_KEY',    ' 5sf6J7b%x#;(9!|6cMW=9Og=_t53P3{E!G_Fvg_=51[2}+s&$fQo6PP8V4#^6<Y' );
define( 'NONCE_KEY',        'x<ad2c+eV[S]cl3nV2KVGTA{gZGLu:!=Ed:[N[XPdF5^ad5/TFvU%/&/|/)FM/*$' );
define( 'AUTH_SALT',        'A.b9@vve* .L(DSury=%qW-^_=*.fJz`#rHDM~.r#*dM$V1I0Z@{v28_s%-cu6$}' );
define( 'SECURE_AUTH_SALT', '.q{%D8|R5O+3kd~VIC@NXG2lagx!QlA_cw*K=ud~J<y{ZMM;m%^U6@ka_Wy`lGmE' );
define( 'LOGGED_IN_SALT',   'K[1rD=^W>Q-0D1sQs70aRh[&)Ptxppku]Y4.POlV?YB ?xmU1F0Cec*?{bPL>0_e' );
define( 'NONCE_SALT',       ' IsK`CC<m{McJ6N@v5_.nDvl|hqX^9Pix+n3pDK{bBhs$I2Mw;]rox!`;Fx<x@=J' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
