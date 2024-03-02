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
define( 'DB_NAME', 'express' );

/** Database username */
define( 'DB_USER', 'express' );

/** Database password */
define( 'DB_PASSWORD', 'mydatabase_wordpress' );

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
define( 'AUTH_KEY',         '2[{jNM#h=Gs{b9|hv}oEcP 6I.tUiwG7^P>ip+|F#ZauU[zT`mA)GXsV61paOrG~' );
define( 'SECURE_AUTH_KEY',  'Z41(%%^yRBXwGH;{1JssvO=3%Ig%G}x[N7pOF0ARyM94(mzuJQN9)JA!W>M7zwj-' );
define( 'LOGGED_IN_KEY',    'G-UAOcrNC1?8P$Qd%<HH!Hn{G:b*Cl9!Eg`++QZ#E5M`z8Vj~B2kRYF<R{rn_-9m' );
define( 'NONCE_KEY',        '=X&.S-nMf4lFO7n[,|1JZI8[&R$)z-V0U$y_$IAUjFhL-d)do<&&:6r<5}-t]]2(' );
define( 'AUTH_SALT',        '&jB)r_(I&OPuP4vXt}IiiZ@GX1|*[43+u$$Y}rpN <PBE~q&Y_Cuf<RRw{OWc!VG' );
define( 'SECURE_AUTH_SALT', 'i7<qV|pJZ?Us+dQ)?d^9L@7O-nFuKFbu:aa/@0&%<DDCT!/Zr;PkB/S)yn_=mUEA' );
define( 'LOGGED_IN_SALT',   '$C$a,j78{L#G/Y :Qe)Hha|I2&Ic0/Q>65p9dLM2f^fk}!LgXV&Bc!5JM$fTKelY' );
define( 'NONCE_SALT',       'PzcUk5VM*g H4o57bU`7}&1ejdW%!LJWfp$/z?+M)kcx@f-{cT}x> }~JTTd[[p{' );

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
define('FS_METHOD','direct');
