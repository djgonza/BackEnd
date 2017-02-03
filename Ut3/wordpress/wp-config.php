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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'alumno');

/** MySQL database password */
define('DB_PASSWORD', 'alumno');

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
define('AUTH_KEY',         'F$ITZ1f:iT^jGA_r&~J@2VwNi/Q?r*}jpVCK|qq93lX*I_K8TUtGPhnve;Bpl$,5');
define('SECURE_AUTH_KEY',  'xPF.}+#{*h-i^hf-VbN3%3l}@%iV|x)QY@.$D!nj{M.w,<Lc5$q,W NoeN&W/l_z');
define('LOGGED_IN_KEY',    'Ea1<JTSsN0{&8zTV=yqu~f&=^0sD?~;hO;dUZe`K*ZX}*[)*aK9vBZ$TyZ[q00J[');
define('NONCE_KEY',        '~;5|>`1RIY#Y&cVG;(An>Cyb5^M.iML|2-t0ptoe[kxKe~xb!M,bT*Y?GO<S5LM4');
define('AUTH_SALT',        'H()HxUorS/{_ezjzl]MJLf&3}In<uLpDgz{|of3~HO#Wq+&0fTk4KVzP~WF^B4+h');
define('SECURE_AUTH_SALT', 'O&mK~Gp_hQC-^& B!RX9vpq^0Lk9kC^8@{O/i@ Ifkt#fAicgmBN#,PSGrQs3j<R');
define('LOGGED_IN_SALT',   'q8K`Jc-~5lDw[q|.~w-9>gn[%i))~TA7@1iblQ/<1|k7<1lfkVb:a`a, ~Z|zUCT');
define('NONCE_SALT',       'U&!Lr81D5f2y&!f*-taPE?d*XYoktc8{&k+K[wGBV5nL>toba$.]t4Iuy9;<H$p+');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

ini_set('log_errors', 'On');
ini_set('error_log', 'php-errors.log');
