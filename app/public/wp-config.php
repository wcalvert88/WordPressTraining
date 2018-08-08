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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O/Wud271vhnYQNumI01xZxfmUrCh6f3xDW/NUyZQ7k/hjzSqhGCgy9VqlSnjeN6tIurWU42jUlNweXbzMfbAtA==');
define('SECURE_AUTH_KEY',  'DGShtEyPTVj6+uicKiDlO00ERDlZab8zABPQYUXy7VI7ziEJjOYNwR19hgzN8PBrPN7YkUc197+YvBQ3ykbC6w==');
define('LOGGED_IN_KEY',    'J1NxqJeEJ7TsrRrNtMn+ARI2GpY1EqKY7F0mBHT9pxC8eIFcEPebl9vGILKA+Gidz7Sj03JOZnOg70Jt4Lg8vg==');
define('NONCE_KEY',        'jFmaYL+LWHzbMcKHx1V0oFxJeg/u3k2WVnL2wrFlxz/C+4/VWLMxkhJpk8VNSUR0Jkjt5xGTDRQ7T8xbjfFJ5Q==');
define('AUTH_SALT',        'G/NVnnAg7Z5iFGYQzD9hU9kNO4U5VRngVYaDgILqF/JVo9kM+khHKo0N0+ny9sSoH2gVF4/KqHudzan3zC8ZBQ==');
define('SECURE_AUTH_SALT', 'hJBNYEZcsyd3f6ZUCabapr9gutc3Qdybh+vEpISDobVN2keNXgyp6HvEt84ulxlVKeIXMGc2a8JKrfYxMVAJEw==');
define('LOGGED_IN_SALT',   'L9JGPkN2rnI9EoLej0+c9X4ahgT+TzB5Y9t5+HiWqho7RbDMpEsGx956U6KBeZZRt5v6ELfgfHp8M1+88CCkEw==');
define('NONCE_SALT',       '9XBCIz8b7EcuGfg/JyLum7s1tSdZ6MBxovW+BH5sAcoNhDdw4D3RoI2RZ0m4exRpFG4xecomtlw9RBKH6q3xpA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
