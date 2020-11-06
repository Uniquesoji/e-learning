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
define( 'DB_NAME', 'db_sites' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'n6*`xX|rfeD.EwiUJ^:pT`O|K5(;{hugE<DghQ1DneU)Voz(O(6!k=sNl&s@cys7' );
define( 'SECURE_AUTH_KEY',  'gDMC|p-@Gt1#^!y|rt5AiW7=LU5G8]*I_<{,Plr-+(^!sd&W tvz-&5m|]~CB5pK' );
define( 'LOGGED_IN_KEY',    '[.7k3Y62,,sB_a+_f%@l`bp&BV)1*28X^!Jz|M:f3Rz.SJ!g.0p)~jew3V3a]uB{' );
define( 'NONCE_KEY',        'o?y%M/(,aE%djQt> L`.Rj$[XP5:94CD!{)`or5#ZG)[Z9,E~[00Z)1}0PN:s&J5' );
define( 'AUTH_SALT',        'B9Y(/&V$Q/$[O#vOfmU]ZOf}%$vsqTq|sGtXzY9/`s*FDvzRCDQFws1+M>N=mAwV' );
define( 'SECURE_AUTH_SALT', 'iZ$1tD(g}t?^1X~:S@TtpQ5P=w0fskt<iQsIi8V;F=<A.t>7w;`?%sV13=RR8g>+' );
define( 'LOGGED_IN_SALT',   '.{OCyn;tW187TcZhM55 ^Hjp=I&D?X|NXzak3*Y75KIyP,3@sq8?J#8q.]nyxuW]' );
define( 'NONCE_SALT',       '0S?aorALa)VNY]mp9`NwEM]B7Zh>oNIOlrXJkyqLT^m!S5![x4cx^kMuyt}%V<Xb' );

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
