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
define('AUTH_KEY',         'GUSVnIq7e8xCitaLE5VcdSn4Gb9Sbu0IpWz6ZxZ0qzSDlV994lxh5XGxeG+1wCpfMrjVx1vi4ysvzxTx4kXe2w==');
define('SECURE_AUTH_KEY',  '9mtCKe+EvJdcPOv0UseF+mqClcnGCFXXVQ9CEGel5wmO+Aa1y/tcT9vjIrfFKzipOFGgWMYZbVz8GNycfxMAXw==');
define('LOGGED_IN_KEY',    'v9Tyxk+xHhVcAYjgN3I7220IITQONWks9Rm43KbQJqYpk4qWmvn+tG0yCfMp1LTXTvmf2/st//6pI5LURfgbqA==');
define('NONCE_KEY',        'z96hO4oFJsIcBHtURJbA+TDpcl3FNUNRDRIpdhUJXc4dljnU2LLD2WtWkPCHmnplpwEPEztjAw38aCgaw1nccA==');
define('AUTH_SALT',        'ua993jQuCCr8/XbC25K9M7Z6cSitII56WAf7gfr9hUYlbMHtDDU/rD5rDTtV744DH/ME0LEjZaddxRCCZEohTw==');
define('SECURE_AUTH_SALT', 'SSeJEUm/Sj8UbGdG8w+F8L+wzSEQx0P0DNktejATzkxBTULwztNOrIsoXlLokCJcjf2tydsbeGn4LSMl/+5zIQ==');
define('LOGGED_IN_SALT',   '1j8/ln0up31i5Yf4h7IpuJk1kIeRmZWHCwr/LGtwTk/PILb8b4eWl+fCXrjpIeaRfGpWkskmX5B9mFzqxi9Hag==');
define('NONCE_SALT',       '0vMwMeO+JFdUVje2nZCrZkXOfLcvFUpRoehfkoH/QQUYT9afrgqwbHH66lpeXSyjHWCFSEV2hMrmpc0TOv44Fg==');

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
