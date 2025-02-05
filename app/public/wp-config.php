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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't.5iyV-?rYv=#X3)?,1{$gcHnj=J7/&_?Z<U$yo,2=4w#j)Vw%&3^ <wL{rR`J|R' );
define( 'SECURE_AUTH_KEY',   '4b4!7k-wu25@SO%!mqCk%stx^U;&]bi8I/>J^Ouwmz^vLt&eZiMVM~!OX84!WM#e' );
define( 'LOGGED_IN_KEY',     '9jr{]7ODY}SF{1GoPi3KMA{7/,hbOkVMB3{B:R<C?Air_)xZ-41J3,tq4I]/iP4z' );
define( 'NONCE_KEY',         '2/z^y]5C^@5F?52cZv$w;_g 8E,aWTonr^M#r3JlE=l+AtvS7qf*p^FPQ9}z|b].' );
define( 'AUTH_SALT',         'Y1z:&Rp{CHrL?zTV5r705y?BGeOn>|rvS$v/T%ewD=uy2y79eP;Mwg$WV|6bd[ U' );
define( 'SECURE_AUTH_SALT',  'L6*>Q#t9h/houcgG8fT3MnT5J]IlC}`FVuO~@03z0<-QW{;>U+7PkmW:su>pHq|=' );
define( 'LOGGED_IN_SALT',    'zeO1xOzf+`:bO3tk$sQi|z)t02aq#=!xpU71ly!H]eQr7vei0uG{O@xjRfw F{/8' );
define( 'NONCE_SALT',        '][I[c?Q7E?>W]q&4RC$ >h#.@KNw6Xa j5Tk*A{:%T pPsJ@ KD&89*&B1IODE_F' );
define( 'WP_CACHE_KEY_SALT', '=@d<`#|P[ n3/ZU&ijH~-(&avqA]a g5.lH4fPD(~o} U4vyv$~jRA<+P#t3W}NH' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
