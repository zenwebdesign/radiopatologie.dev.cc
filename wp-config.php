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
define('DB_NAME', 'radiopatDBn80pv');

/** MySQL database username */
define('DB_USER', 'radiopatDBn80pv');

/** MySQL database password */
define('DB_PASSWORD', 'h9F6fWKTKt');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Q,}cr@}7Ncn@}co@}8Nco@}cs@:8Nds@:ds!:8Odo~:ds~:DOdp~:dt_;DSet~Oet');
define('SECURE_AUTH_KEY',  'Hm2HWix<2HXixHXiy<6IXiy<6m${6MXn$<7M${BMbr${Yjy,3JYjz>Ynz>7JYn@>8');
define('LOGGED_IN_KEY',    '>Qcr$}7McrBQgv^}7n@>8Nco@}8Nc}8Ncs!:8NdsCRhs!1GRhs_1hw#5GWlw#5GWl');
define('NONCE_KEY',        '}Ugv,0FU,4JYkz>4JYkz[Zo@:8NZo@[8Nd:CRds~:CSdsCSht_1DShx_1Hx#1HWl+');
define('AUTH_SALT',        'W_;9Oet~;DS_;DSit.2HTi2HXm+<6LXmy<6m${6Mbq${6MbqAQfr^{BQfr^Qfv,F');
define('SECURE_AUTH_SALT', '9Dt.;DPet<APeTi+{EXm+q*2Ibq.2<6Pfy<6QETj${EUn${^3Ibr,3>7Mfz>7QFUn');
define('LOGGED_IN_SALT',   'u6ET.2ETm${*Ibq^3<6Mfy<7QEUn$EYMbv,7Mfvjy}BQj$}B0JYn^0JYNgv,8Rg');
define('NONCE_SALT',       'x6mx<2HXm*;EXmbq.2Lbu.y<APjy<AIXn^I7Mfu<7QfUj${FUn$r^3Jcr,zJ7Qk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
