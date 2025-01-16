<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'novus6sk_wp351' );

/** Database username */
define( 'DB_USER', 'novus6sk_wp351' );

/** Database password */
define( 'DB_PASSWORD', 'H1]RmpS-46' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'b51djrgrhltakq0sicfehgvfcaeandx6ovc1devp5ezhcvtjmrobf9rnriqffo2e' );
define( 'SECURE_AUTH_KEY',  'qlvjeaquzbrgqvzrm6iatbnxe4jf2rmeyrfmcbdn0yzw2immyhi8uds2rwgdbzck' );
define( 'LOGGED_IN_KEY',    'phbypkgmou59f6avuxlbyejl1ehg7mn6lhr5cvxv3iznlt81mldirmfcmigmbo4s' );
define( 'NONCE_KEY',        'z93c4lsmuz1aomh9fdrqfchvwy1lwghpxt0q4ephpemmyri1izrwzsh3hrodurkh' );
define( 'AUTH_SALT',        'beeoybe5serpe85ty6uyje5en7svivsszdjdfpkwspenyvjyuwzdacptm9ks8f5s' );
define( 'SECURE_AUTH_SALT', 'jokipow7li59yopkkdn8qznyzwlzgjbzyztlhysze2gpob9ia8uaays0gh9afaag' );
define( 'LOGGED_IN_SALT',   'rjoqjpdteoqpp1zkqrfc9ujdvzkqxpbcahs7tjdzghlbrovgw38crqdgqvolwzdp' );
define( 'NONCE_SALT',       '5hqbsus7ve9civoeyrkfnpse0eqnp3rup9sv9f77eekynbhs9fxli4njuqync8gx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsv_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
