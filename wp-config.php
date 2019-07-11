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
define( 'DB_NAME', 'wordpress-custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lo6qH2X67Aq5vkx6rcCuKkjR7HHxgfoR8XMtMG31H1oP6RWKmg51r9UMYXLSSWfN' );
define( 'SECURE_AUTH_KEY',  'zikq1XP2UbjmcR8or6UK0m7DXo8EsDMlqqf8QnKASnnnFa0fWz8JbSNVoEKYBgGo' );
define( 'LOGGED_IN_KEY',    'HIyc8X0kxO2SzK1P6JwT7M9QjGc2hq0Evq7dJfRN3FMe1aJoHkd3bxC254SIhqX8' );
define( 'NONCE_KEY',        'Xr0gPxRun5iM3vPKw2mvEHwtjvpIV2dSfnLncTLudoim1eO2cuUfPEcxKbtBItMm' );
define( 'AUTH_SALT',        'f16oWMpQhZYggtSiqIKvluuYvtoZ2PWOoPD35sRjotj4r5MLEufVn8tpFKHiOfZd' );
define( 'SECURE_AUTH_SALT', 'zpmBrFNpey3mgG0tLOHRb04jQAaPzPktXKIekY9fzVRkgFCD3le5RXqCPKyLCKzI' );
define( 'LOGGED_IN_SALT',   'ZiE20tICm6hezw0wt9iktqndH6hptrIiK9oYMi1xLqXjmy6ReKaE4SsUI3fCtqk6' );
define( 'NONCE_SALT',       'tPDzEBjfzWjiqOBO5h1x3sTQSSWaisrAntuJ2vf6XE8rhYikiRpb6wQT7cc3HxRJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
