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
define('AUTH_KEY',         'urKzRgnOpbg5iwEjncyMM5TuOk5gyBV8CMFgLt8rRmQTfIwS0wJngHiFjGQ8rkqgqy2sVUpp+lnZ0Z0Hk0lJ2A==');
define('SECURE_AUTH_KEY',  'f2oSZpbe39nd8zPA6p73mpFsTDyqRTjBKUv9F2Ku9t9/j01wdmH15yVpNGkOgd5wC+AgsKZke/nJKSiQXA8/YA==');
define('LOGGED_IN_KEY',    'ma/sqlJxxzX+VwP81/MGeeFpR3KJlYZ5pLZg8XAag3e45IwIdEfYMPmYpqb19I1rHs/sLLDV4ucuWkkEnJ8iSw==');
define('NONCE_KEY',        'rVnN+hMPKb69ZSsc4Js/ZAML3wb3w3mej3XTJWErnHD4tlVc4nr3Td0x/OcauO+KJKJoqoIy3UTn/qg4x3A1/A==');
define('AUTH_SALT',        'q+8MQv5CKU4ZPTPvWmcGgHirrKEUVlmbX+tJAATRtFjjDa1pyXEG4kzxmog4BUtrqWyWZK8yTAMapyRtLrDm7g==');
define('SECURE_AUTH_SALT', 'akRJD2jjdf62I9onC/oRiT0UKdThqzvqRXaZZ/3+lz3MvdGSeg7EZx7pfWFYTBh0fD4C8REUBK2YCcRRNQcgQQ==');
define('LOGGED_IN_SALT',   '9pytMd4wV40yweT9oARzl/AYJZ4jae4AHnAhPrc1a1RbUd8Lmnhuje6oKahh1bOrWAMfb78SRusLxXPdwB3l+A==');
define('NONCE_SALT',       'P3Uays7rlqHnFIZecQZw39EpojeA2h3K0/Craix3LIsUzjhB7dgRw1zwYCM6Jf8gRaNIqKUIeg6ymXKh3WJ4ug==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
