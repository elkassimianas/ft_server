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
define( 'DB_NAME', 'hamid' );

/** MySQL database username */
define( 'DB_USER', 'ael-kass' );

/** MySQL database password */
define( 'DB_PASSWORD', 'anas123' );

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
define( 'AUTH_KEY',         'j>zB9t4og*PLpl]IZCP2NeAM 1fkM!;%1b:P*mNs|>e>9qz$fTp/c3K(#6vmY@}}' );
define( 'SECURE_AUTH_KEY',  '&`0h 25T,B:jZcy?.<<e.6cPg8J80v}nO/S]?X#0vVnff3#B.+9IP8eC($gQRhO%' );
define( 'LOGGED_IN_KEY',    'G8Y/N UJ)}q<&XZ>|w>[J9|.kyEX8Cp:AmfLo@! _WO._Jn7_Hg]aNI~LgY_j0rQ' );
define( 'NONCE_KEY',        'HQVgnd+.&0n!*+y?rdmO,4$TWkU_u#1:V]7vMCEeCwJ}8C.F6VMH`<{i@GQm<S?U' );
define( 'AUTH_SALT',        ':g$a+GLcp*E8 (SA`!Z%h-Y)^1fA>6|HX..Sw@>$6a!GM2)juc+TpT?Osx@o`x1(' );
define( 'SECURE_AUTH_SALT', '2zJrdwAUX[B<G-.WC2v=5q}A:?cT|P5.S)Z-Gr,9WPF)DV4_[4qQ`9p>tlA)(mz$' );
define( 'LOGGED_IN_SALT',   '^Mjo%(VA7XnUlJ$Bj1FV5yy-@:fd+@cK8b^(aQ>, iUH5=-FSQMS%e +;zO3gK]M' );
define( 'NONCE_SALT',       'dT/qefZLvh~`o7uJce?(/&@z{P=vbTs5N$|h P8Gj4E*fzZZ:])WAU)p|czt0Cv4' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
