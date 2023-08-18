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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '2Ao0COO2AmZoLnUzxOhyDQmDljcTM2Ask78pNxekYNbxvixfjBP9MgWIqpqqGWC2eO4I7+XWQZnihzM5s3dG4Q==');
define('SECURE_AUTH_KEY',  '34Bsm66168jL1Z/7q8+HrvZqYl9yaZWXNskjRVz7xNUDC0Wg7ACXeHmAfbb1zfdERThAlvyuIKAHr/p9ME5EcQ==');
define('LOGGED_IN_KEY',    's1myRM2HZchVfPw6R0CTnctKt8wELU9K7sIUslkfpnt6K4FWt2Q4Qg74aVhYX0BV4LbqXC+MEt+cYmCvptw1Mw==');
define('NONCE_KEY',        'fapdSzfOW3LuFeiPW46XkjUouhFTrJgn9tsHmjli9C6HDQZVIAiBzhD73NoaXFkAKciV3mWJMcEPm8Rw2ydXdA==');
define('AUTH_SALT',        'VNu3w5OXvLIx1IRVbDfdLBOL7/TZUPEHA3ovh/PTK6I8zDZoPY91SLNhO8eeGWo+bIWkYPNZehgbpUNb0e0zuQ==');
define('SECURE_AUTH_SALT', 'gHrw6EiO2+y+ifgXnzZBrH6d0v2Qs/pL4wlS3IhdEH2SbrbIt3/m8N/Xka4zNxscVtf0jayI34yRcaSa+IYSwg==');
define('LOGGED_IN_SALT',   '6puHbGUjl++RjQtJH9muQijpUL9tGa/Zd/mWl4HDiU8EViE9U2HWMtjYYc4zNRl/NDJ9tA+96AZKa9dPC4GSEA==');
define('NONCE_SALT',       'wQRiZ93FsPWm1bTmt1tYHUk37TM17rOwFsv/SKH58cdT/2iKT06BZkNecJsFYYXYMYmdM5yOkUUiyyDiim6Znw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
