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
define( 'DB_NAME', 'colidtws_wp318' );

/** MySQL database username */
define( 'DB_USER', 'colidtws_wp318' );

/** MySQL database password */
define( 'DB_PASSWORD', '07pSLD(]6X' );

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
define( 'AUTH_KEY',         'lgxbmeiczqbsx2v08hejuzeamtx34zhmhuxnx5jstg54hhxqwqpq983yzxakkgqh' );
define( 'SECURE_AUTH_KEY',  'amag5zbse5qlz8ju7pa2tyle9tearkhcmhjbb28m1popmpjhzljkmxssuwv9d40s' );
define( 'LOGGED_IN_KEY',    'iezuonjekhacgy2qjyuyafqsb6sxjy3ldaz8fauivajgua3funfkulgvvmcozec6' );
define( 'NONCE_KEY',        'upzwl6rzdjkebubiw02opckdd4qcncvy7erbfq7eh24jex7wryqkzjpp2yh8k8yn' );
define( 'AUTH_SALT',        'ywfus81kukoutoq8ouvhowdagwdjflodph5djxjwlm0kbuhp3q1ei0ngqy4tlsox' );
define( 'SECURE_AUTH_SALT', '1rybjd8dqeobudn3ctjedcp4vfmsabobjbysvvhserdwmvbdivfcbhzk7meyrfn5' );
define( 'LOGGED_IN_SALT',   'zkzydmzdfwzft46a5z7okw7odo5ndtofi3e6mg4bmlugd7ucqtemdn3ddgpn6z1f' );
define( 'NONCE_SALT',       '6nqfmp3psdt0x4upm6pqbm6mxudyhwncbogrn8dl9ew8rxdn2eq0bwhafrq3cnfy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbx_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
