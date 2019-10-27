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
define('DB_NAME', 'publications');

/** MySQL database username */
define('DB_USER', 'jinjian');

/** MySQL database password */
define('DB_PASSWORD', 'jinjian123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'yX&D9SHp|Nt#_7*$X0=DR#ZU-E6gBShW1`&To&zpoqiGK<%k;R~GZv](<R;t@XJp');
define('SECURE_AUTH_KEY',  'j+6?61GBU5D.(G*bM@UYF?uTRupP!}I8 mU-?K I(8cv +2AF  4w0DC T.cJwD/');
define('LOGGED_IN_KEY',    'OLdfq*2L;M{e-~$4AX UCpf9COD4odr7#)xIb9BER;b6V2T-m6csUKdJcZG5 G<;');
define('NONCE_KEY',        'Gd:ynrbIxs568Oqu)-<|IzD}Sx?8qXB7e>:;Y!<@Fl[m-S!XlCLaF;k&qsX@Ru#>');
define('AUTH_SALT',        'be]EuV?~CqG3!7;d}%#9`hx qc^1;BcEJAF d8f/t&bZ=Bf/]KKccBB=01)m*eqy');
define('SECURE_AUTH_SALT', 'Y9*9Uju:WV/h%Q:oGJ?(ntVP}]yA/r=CCP?-h)x)^)tc:}==WGGx!hcg)v2XbW-/');
define('LOGGED_IN_SALT',   'pX_ X{$,qWs<eMH3>;Af7I&o1xLkd;(WVk::j.D~7S+<B{,-y=4i.C6vY-A+*(Y4');
define('NONCE_SALT',       'x5h1;!de#yJ`sYa6l.C2HC,N9/q!bwaU(^C[t#{29#1,Nr.U(8&Z 8r%M0j]e7H5');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
