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

// To access local file system
define('FS_METHOD', 'direct');

define( 'DB_NAME', 'wp_data');

/** MySQL database username */
define( 'DB_USER', 'admin');

/** MySQL database password */
define( 'DB_PASSWORD', 'password');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e39fe210420d97a80ac2c9a5ca6be4d40a870c9f');
define( 'SECURE_AUTH_KEY',  'a780f5a9a2842867c3cc1c67bb02620f625add66');
define( 'LOGGED_IN_KEY',    'c470b41eeb281cf1444ad24fd80c61be3bb3a144');
define( 'NONCE_KEY',        '67d81bfdcb2f7d3ff4e485b81cbb54fbcaefb86f');
define( 'AUTH_SALT',        '841ce104b57dc22779cc1f15479cc1fe31057597');
define( 'SECURE_AUTH_SALT', '0b353ff3557428ef89062b8a94889abd61214289');
define( 'LOGGED_IN_SALT',   'be6cd2a262fbf04242c05e04be22f89c0fe8fc50');
define( 'NONCE_SALT',       'e8ce07166fb4c8bdaeda6ff3e71592d6b242e047');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

