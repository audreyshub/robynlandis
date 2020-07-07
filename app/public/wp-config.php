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
define('AUTH_KEY',         'aBQ8kO2Tb0vjnljcuqkQQWBfiOGyWjWf55fjq+lLeNwAebF8fmdt1Hh1561Cyr1kZreHSv8OFkRQwsa5YXgY7g==');
define('SECURE_AUTH_KEY',  'pBPVHTIoPVsZ+rXIdP81v8yaZ8E3i1hYbr86QwtIbLcVFcSFATGsc0ooxURjgFQ0/M9xH9Cw1ptnjrxwU+hMXQ==');
define('LOGGED_IN_KEY',    'Ve3OJRH6jFJ8je2H/giK5KWAIZQhIW2xmeMjf4rc5tTpCXdk75WsdkxrAqywO27/Jdd57vsspLgxQL7c9fvuMQ==');
define('NONCE_KEY',        '1pAUEAIvcPOM7rcZ+aJOfMREI3zswo5y4Vhx4dqx5ZwSWxg1C9SczCC3ge8mYLGzPies3FwbNMgzdutK6JCY+A==');
define('AUTH_SALT',        'gRnH3Thtb9H7reoy3IXv45ty5duBGAHPT8KbgjZ+uDPLr9kF15LUg1eX5cyIwNljTuA/VmlLdt8ji4GMdog4/g==');
define('SECURE_AUTH_SALT', 'eEEj6WK9+8EhwqSh1q3AE3urF9vnVf3Ixpol5UNJ/sRI3js/YsRbAUxVJUn93VquYMRRkPsLm8Y/d31U41XDFA==');
define('LOGGED_IN_SALT',   'QcEpWnjN4TCI29yMTF2zRZUrvjtcvJnR5PMh478RwcLOtmPxAFdAsf2cJaZUaOSGInfUHTGoXxhNCreUzIo/jw==');
define('NONCE_SALT',       'mJqsq7KRSYJGM/iEVlzw/ADkNEPg3b+k9MdDRlXMUKHxER96lWOMWaNft/MGXg2VKT9ESueGWnxwwU7CVbCizg==');

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
