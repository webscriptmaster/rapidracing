<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'rapidracing' );

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
define( 'AUTH_KEY',         'M=ZpZR|q&M.dG#oA.7)B):56&3*1P=Y!Fo{6?Wg<_8@OK(Z!|@L8B[wBB,p5Cc[~' );
define( 'SECURE_AUTH_KEY',  'a=F}qCyaVWF#e nV`Ru)9}S)y,xK@6C42yH]jObt&wKU{@88%r]XS-a*8`BXvl(K' );
define( 'LOGGED_IN_KEY',    'Ms{-Eob>n6_:V?`{pg4I{vQ^@p9{ow,j 8E43~yk_[;/:c}$<v!t$W|xwmMaxCVO' );
define( 'NONCE_KEY',        'F8H7Q%pFDooKm(~nG/-K!l>#F/%v`6t6VX`/z(0t$=z:oI*(q^-gJ:Rj0cJC}u {' );
define( 'AUTH_SALT',        '>Jkt=?^Se>T.o?p(&ptd{:629DB`MQ:2h$TfsfDy;>5gL/bdvc?4iwsC:zLJM]b$' );
define( 'SECURE_AUTH_SALT', 'dnXfAr.kChg9^K[6clb}}:U.Y$/XZ~X8R#*~f?AsOLJ|-..GD}$PE$A&b7[/*%T ' );
define( 'LOGGED_IN_SALT',   'y^;=bvYL9ohI,31D%Ib:@;0;~8[>fT,#D*IK:,Dr+3;m+bCt`K|7HiDN$RnfNn@^' );
define( 'NONCE_SALT',       'z+?Hr$Yib[_- Fje/hu/7B&|4*s>5ffr UkweUY)Y[P>p]f:jgiNCci-I^/Dx*GS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rr_';

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
