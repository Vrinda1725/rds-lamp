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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'vrinda17251' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.c9weuc2gabac.eu-north-1.rds.amazonaws.com:3306' );

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
define( 'AUTH_KEY',         '0p =F8*X&HSSpw~GUa.lV+<&<v!*oZq0gR&:)Za3]!5N/0+v3q E|] ;su!vZ5db' );
define( 'SECURE_AUTH_KEY',  'Wb-<gONUFeFZ[~6b-LB2i8:G>E~!R)xNrg0[~Lo@a=0{z37m1`Xn[BaaO4Vmz{N%' );
define( 'LOGGED_IN_KEY',    'f>$eWgB#?:B<?.]~Zwq2C}?3h4-&Bo_:gsogP#YFuR~9{R*yym}?W`%es)5AtZrY' );
define( 'NONCE_KEY',        'i]~6o|r0b Gl)?5jn.~)U&<5aG3uyGQrLWUhnWO, +rT/[KzQi7RJ9+oSqs<iq)I' );
define( 'AUTH_SALT',        'unBH_7a)US#`E{&hDIg 0=cn;E}NR>M7&j;~k@Kw?>VM@Cjk{#K~@x30,=ZKgSe5' );
define( 'SECURE_AUTH_SALT', '>z2A1?&B+`l5 dZ_fe0%0Vx9aD^6cm=8 ywx7 H+~p3]0kg1p]uAI{kyv4XaI9;h' );
define( 'LOGGED_IN_SALT',   'H!qiH2pgqdGm;[1PnP_SrY{:BE l[=iNaB2xXe0`hu` ~/J6Xl@wqf=l_rZ^<J9!' );
define( 'NONCE_SALT',       '!c4k*Gake.:fJUZyF-W?M^B$u&EShBvh*m8uB7t-ng1 *Do;6=1AGoRu+qZX4)O$' );

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
