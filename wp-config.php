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
define( 'DB_NAME', 'wp_kair_db' );

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
define( 'AUTH_KEY',         ';d4l.4Q2FWb}kA?uqWx3F#6t9UPEQU[NfL?FpwjJ7A:&TBi,07RH<F<8}OdNke@I' );
define( 'SECURE_AUTH_KEY',  'bpU{pA5(vD:w#a=~wQA|xV #HTMw|zp ;{.Ix/d`31yw[&o;5aqEK1;kG|AC {)k' );
define( 'LOGGED_IN_KEY',    'wt?7p-W}!yq+_Sz2+AfT3(@hNkG<|Gu@K+9c2dO]$x:3BZ0F_0z@IQKaq>zxiEb%' );
define( 'NONCE_KEY',        '~f-`]R0Ot4I7ieimW43dx;-C-V^8{,/gYClaGQpZ<}*7|4B%^M%=$P.czj]VFczt' );
define( 'AUTH_SALT',        'up({@b^Jv!{hQB^OHPuKHtQWBu2a2ru~buu+wy3GP!q$Bd%qV9C8IC@y7`8M:_~v' );
define( 'SECURE_AUTH_SALT', 'Rvyd7rVWG69Y-W=M$ZtVJ$Zhbj:U#!jWi]IO6Nkst[(A<o3{PcgY4L1 R ;#od,(' );
define( 'LOGGED_IN_SALT',   'ir.GMexHy|99/L`WubiM%FwEjya]f-TC$F_c$|oWWe)Ec(VO]-3GxJ,p^g/XxV,.' );
define( 'NONCE_SALT',       '(s}`2eFTC%ush}|H^`0=o+Zoh;~+ve#kItd9/h6.Sj{<WMVIA o={kw}@wi+w7,9' );

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
