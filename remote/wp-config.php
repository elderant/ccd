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
define('DB_NAME', 'reativa3_WP3RG');

/** MySQL database username */
define('DB_USER', 'reativa3_WP3RG');

/** MySQL database password */
define('DB_PASSWORD', '4FGLKs03VdK2Q7q4I');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '8e2d414aaa93ba69e0dacffc6b86834e7733ea01b2ac7df7bc2c0571dfda794d');
define('SECURE_AUTH_KEY', 'b397e2c5dfe482f3e7e1a182836e8fcd725da18883d07970e4e95636e22d4802');
define('LOGGED_IN_KEY', '97c42b65a4bccfecf7e0a40f8d783399f74962c0eb9be82e6869e96524f10d21');
define('NONCE_KEY', '61a9b5fb7d9bc0b5df536868f08a9f0030b9d518f9acd4d694372eb9677be766');
define('AUTH_SALT', '077453eb8bf97e36c8675b76041abbda5b4ed039656768057888962a470fed15');
define('SECURE_AUTH_SALT', '36e2183cbcf8482142f5433bc37ecd17c8bef57fc96bd8e83dd125de4037b435');
define('LOGGED_IN_SALT', '8369a58f1523f859097a6aa56b1f92a37fe65bc41050666e9fa7c6d2b822ba58');
define('NONCE_SALT', '2d7ffedf0efdcd90b6d002b6cd0b3737851df024b210b1e2435ba12f4c0ea1b5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_3RG_';

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
define('WP_DEBUG', false);
// define('WP_DEBUG', true );
// define('WP_DEBUG_DISPLAY', false);
// define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


