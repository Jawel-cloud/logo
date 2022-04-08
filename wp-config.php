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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'logo_db' );

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
define( 'AUTH_KEY',         '[Rc6SL[cl}(M@kfFzaNi`U0u<~h;s.RO2C{ein(r*+A4Yi~t|J|QFFqE3?8?|/6p' );
define( 'SECURE_AUTH_KEY',  '-dd:V&7B~8(kBY59k}e&nOU,2~WfvWMnjb<$~cp|]l1;M=u}1/!fW>?%TK7Qquj[' );
define( 'LOGGED_IN_KEY',    '.,~r/1@yLY(?mMw|Qtht8ms0m*#9zBJ wGiPT#Y+a3pIdT~&qTJX-6Yw}r40Zo1M' );
define( 'NONCE_KEY',        'L?!}<?srJnx*yqr&@&&>F(`n95Q[{F@LD^m;A 9[Yu2QH(Jh%NSHjdf^2qQWxSSY' );
define( 'AUTH_SALT',        'gW$Aj$gb4F*DLp):Yf,CJR9-ZuO]1U)?g*p(ehFeG}=O-hc^Y?(N[+3$jpB-;bs<' );
define( 'SECURE_AUTH_SALT', '+U o0cR9qZO`0._#FIQOIB<<BWG:pD^EkAH#Yz/H)thXH0}Y1Z`m:d{K|v]X)eNw' );
define( 'LOGGED_IN_SALT',   'HAm[4t)1Xb)bX#g>eoOv[0~j:+pz&j^eq%d(Xh~CU]BM/|2j@.+v9vwI?8.W#f2/' );
define( 'NONCE_SALT',       'o]pwI 4s+u*Q7Q{D~2cw:7[me+7,Jy!4|yEP1_:&^aS7UgXcXy]?[1O0bGU??IB-' );

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
