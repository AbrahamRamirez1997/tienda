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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tienda' );

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
define( 'AUTH_KEY',         '%Q^fK:q>VUd5)h5i&?Vib.i+%bGl(PLUt8a+a;M`pgb=JZgue3&m~%KXzaP >WR<' );
define( 'SECURE_AUTH_KEY',  'rakp>RXaeR-H&i/OkzxU>LX?(`o`xkRph0Ijl%g<^IC)Js*%^3pOP_0jrN*K%)N%' );
define( 'LOGGED_IN_KEY',    '{]@tv/Cu?4w<w(/S^SU4=jMPKC~^2`Of;2DGE%nVloQ:JY0^q&Yl2eK/t[bQHYIK' );
define( 'NONCE_KEY',        '})|(7 xs<wy V>0t=/FUl>JVN~b}!)x7Pp|f_Hc?T6N/]RPzN&<UakGo)M/.Q6Cs' );
define( 'AUTH_SALT',        '>l8fSy@2=<%6bf=sHprJ/<@Vz,2&<&qkFo^7z}%<@X&)T,I~!6qp1y($;4mdU^N~' );
define( 'SECURE_AUTH_SALT', 'O~AcCTO-2F/?{*X@$3h,Z6Nb`F+4Fb2W|,$Kfl`=V*w!}QI&oZi%r0J$V|De=awU' );
define( 'LOGGED_IN_SALT',   '@?55=cbAHjV)2aXworO=F8I`mv<nrWW3M =gKSpb9a[CUc?#iLl.+B.(WAoa3;v=' );
define( 'NONCE_SALT',       '_Q$.&^>qAu)$9EBX;3^#1Qr_yw:@GtOadxJ6@HsnDu`_%]M[YQbEEt+Q(p2jH<RK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
