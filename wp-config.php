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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_caso' );

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
define( 'AUTH_KEY',         'Fw9*GT}8ClN`ndIp4?D5t(!i+k+8,EV&I K^bY[zh`DeBf*d`|BQ4IG_wKKCm?2+' );
define( 'SECURE_AUTH_KEY',  'X5~&FP8bk|1l#w]sA##6`b_&Gzta59|>;:(0K=k#H-%Rs.629)nso}!@--NaqqFi' );
define( 'LOGGED_IN_KEY',    'bN#psL#bCe6;lq[.&q#Jrz5<riF6?OI9bnXQzygR1_C/+a|tug$SH%90M)ZJ`U+a' );
define( 'NONCE_KEY',        ';=x(4~ZIW[2ycmoYl)W/pDzrXF>gIy.Z/(uVsF%x?2N zD~E%+)?hZ$q(Z=8^^Xk' );
define( 'AUTH_SALT',        '^m+;smnv%T(X!_kPg(+RAq;Q)K[RQ7R61PNNT?2rHEw+lC$T4>/qZyNU[>:X$sa<' );
define( 'SECURE_AUTH_SALT', 'BG<hfFl9ZY@w a2T-%j6lluHFkZH.&1SDtUxY npJD/CIm#(f0:OF=x;6i/0:far' );
define( 'LOGGED_IN_SALT',   'Ys<D(uARjm^T@-*iaZN6]Rf?HEolK^Po:[}+Suh:8Rqg(8H8oHJK*Oz:$w!}Ufl%' );
define( 'NONCE_SALT',       '-+Ms8e5,4aC^SBi$piN>/lOA;6q_/xYXk3W:eKmJ9#L/J;f1v VJ9%0naT=9K}=+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'caso_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
