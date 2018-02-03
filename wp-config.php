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
define('DB_NAME', 'pruebaconocimiento');

/** MySQL database username */
define('DB_USER', 'yoselynR');

/** MySQL database password */
define('DB_PASSWORD', '22520821re');

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
define('AUTH_KEY',         'J:M-h#sb8u0`3%!qGv9>~3~/R,rlzp7*y7|!Tl_@8?t=@_r_m4`Hkb#Oc?N]K%xC');
define('SECURE_AUTH_KEY',  '_P$!x!`<9%pt4#A.+3<FA3M=Sw|@E&c~#wlaht|1b{a ~^I?ovEPzAk[ Zy4kRZL');
define('LOGGED_IN_KEY',    '}qfR[<ihEjEpK5Z^XaU}ftRs+9/{~PYq}zz1QYTBQpA<{`XuI0IQ!_M!6^cl$:-A');
define('NONCE_KEY',        'iy~mf{_s+^8d<,<)c(^CrW+qV{Jl .l:}$XTEbsn9oGG(4%k{dB2TR*=30UIU-PB');
define('AUTH_SALT',        'ulD+o]SZ1?+T)1.TgsY$Ol,iQ|F7?o..)l|@x=?:^%l[wyk&YOB|DQ`E.8j4|3;v');
define('SECURE_AUTH_SALT', 'R1CO0NMlP)t?}N5}OFgViW|}fbz;SaFVsP7q%_<u#m7ToJ9q=G}=;R]8Jb`Y}<]f');
define('LOGGED_IN_SALT',   'PUU?dMbgb>G_qJTnBuC/:=#~=T~Nk.h3ZGReI^I2LNTbuFTWzL|M(54uhg5G/@)-');
define('NONCE_SALT',       '`:z4+<F_!U%PRi,!h<&=f!5MfHoyj7lID)Y6;i5KBaw|r;gy9/3h5Ar{d>!|;VRw');

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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
//define('WP_DEBUG', false);


/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if(is_admin()) { 
add_filter('filesystem_method', create_function('$a', 'return "direct";' )); 
define( 'FS_CHMOD_DIR', 0751 ); 
} 


?>