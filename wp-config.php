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
define( 'DB_NAME', 'palomafuentes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hqxf:OAWJPLQSEu#(83=Cq|8jl^%O*:ZiA;U,T{+ZK:3O=}f1=#c>5m0f7f@Zc6l' );
define( 'SECURE_AUTH_KEY',  'ts(PwA isG/j:rJQfro>SoOrjaNLV;<KM<:_8{n}!|36P5(bb/c/v%g.PzT;;4oL' );
define( 'LOGGED_IN_KEY',    'An9EudROyJ/kSno1_8ZlXg)jf,O3Llb<@uPS`dT%$}8U?_}}w%vck4h5SE*R,fq%' );
define( 'NONCE_KEY',        'd-fDuzI=6sK0<sqD}MHC]MS4xSjg[m.x]hbm7ts$$w&ISdNGLhBH`$A$sfEA9lIz' );
define( 'AUTH_SALT',        'q.,X*S;zX_ 6X32R8UV0Gq%.Gj#13)|TB>9*OIYoz61#]{n`R}bOw =QoNFmb:&l' );
define( 'SECURE_AUTH_SALT', 'Wa@C<e7o%NoW,/te_XRUk_-y%<dGQpAUFV*6/>GB4&F2@|_MtN4:lZXm=Yimc7AF' );
define( 'LOGGED_IN_SALT',   '7/R ~:XfkI]cL!zKz/.<vbj@3RU):Je&yTsAKLQsmagGlnjaYr9pB+C2V.YV.*Q$' );
define( 'NONCE_SALT',       'x1[8tz+yUet`3e[tLFkuTInQo3Cb&Io4!X#jDU&8oVA6$c6*~vkY!u.PH/A:&D/+' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
