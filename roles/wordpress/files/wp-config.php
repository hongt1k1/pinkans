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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wpusr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Passw0rd' );

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
define( 'AUTH_KEY',         'w6[w3S]xoh`M!{az3sSHGS:Gdt|Q&a^ze6f-n_MBG+O)MexA_a+C&y=5f^EM-`e3' );
define( 'SECURE_AUTH_KEY',  'cVH+G2kgJ*%`h`E|:V2#7e)B-dP.%,8O3|yLG$S8oe}$W,wU9v|{rvnYZ;;YvOk8' );
define( 'LOGGED_IN_KEY',    ' +9,< gJ<f-{TI1RWfa_V?O$?LoIX35kGUzyRXGIklJv@3#I&})^duL|A8qDZhX(' );
define( 'NONCE_KEY',        '#cf3S?rjp6hqU.|e;`>h%vr0@X?B;*F*}izNd?L;*=/X{vk1*]qD9yF(Y-N&R?x8' );
define( 'AUTH_SALT',        '&@)t95Z~G!0y:nOA<n91x/A0FBK$WjnwQJg6^JM+(U6~xKTTQ8M5,9*xJ5Wr<X01' );
define( 'SECURE_AUTH_SALT', 'l#1ku1@rF>?uI:*i#,#5822Q-fs!/n|Q3tw-cLoN|J38Qrtsm$nuQXx6EyuDYz~^' );
define( 'LOGGED_IN_SALT',   ' `/9gT4 +q>;w*kmE) 4wUjK]mtISUj>.3t5r^3vVHI~RK@8}JEA{e1x>|@.tl)2' );
define( 'NONCE_SALT',       '=>qc?I:MbMIHc37uB]r@Tr;HH+!-&fr-c;C%!,_Y%+aIb9WCKf6ik2kf,[csjp(r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
