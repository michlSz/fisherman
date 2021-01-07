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
define( 'DB_NAME', 'enemer_wp213' );

/** MySQL database username */
define( 'DB_USER', 'enemer_wp213' );

/** MySQL database password */
define( 'DB_PASSWORD', '-S3-8p0ezm' );

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
define( 'AUTH_KEY',         'gu7s5kengemfnmmaekmiigny3escusbzo3jxjael8riyqrrqz7dq3z6ruatt9mum' );
define( 'SECURE_AUTH_KEY',  '8zdltvgj7jbwqke5jwzogth9o6evataqfoulwt6u1csgojvpfqsb4syf7jycnuvn' );
define( 'LOGGED_IN_KEY',    'djrky7zzxsvqmdhwlbslfzfuob7zom3zfi9xdhogiqy77fe4zmgu7tbhz2y0b9w1' );
define( 'NONCE_KEY',        '4drxtrizee7fby0xnowpzue0mdeyflwwla6beje88jjo0ph3tg2fj0srddvoryll' );
define( 'AUTH_SALT',        'f2dqdtirrdbfmfnhtnupnajvgjvsdemycizrrmjqk0f7d9no9vpa1iw8ywsz3qt2' );
define( 'SECURE_AUTH_SALT', '4xoxmwfbmqux2wmw3kkvczaapttrcc6rxjm1te3heqou0qnh3rhtjo8wwix6xlsq' );
define( 'LOGGED_IN_SALT',   'ldxmg0fgpn1975bcyaexmbuwxck0e9bldki2mlvhsprzxmqmaf07ua8qe9ojl2h4' );
define( 'NONCE_SALT',       'az06j4z5jmejlobcjifhmpewsrkpjvstkpjlwbnl2zehrmylx3bwcx17fop1c3j5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpiq_';

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
