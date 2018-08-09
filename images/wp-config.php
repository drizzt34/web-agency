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
define('DB_USER', 'N3ban.is');

/** MySQL database password */
define('DB_PASSWORD', 'Marie1954t');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'fsd}WoU%~YGz.hE,1|@w6M/tCh/EiR6SGw9M?$G!)y#>m@xZsSxraoC^t(4Nm&8.');
define('SECURE_AUTH_KEY',  'Z}wiK*|#)YY6z0c(FdfdaH`._Byc{sd^fI7#BuA=NE%gD1W:6EqMKQQ8]w/%0-:c');
define('LOGGED_IN_KEY',    'Tjb/fzaHX/ ^)4P@#gdK$Yl4_X$t|e#bdp}|D#Mk#JD67=&hnP3va9bSjO_qFV]3');
define('NONCE_KEY',        ':qB~cx<-l$+ !VI^L,fIPx+aGxy55cQ60L5lGn?}b1xxS FjA;Fvj5I$Gl+,Flx9');
define('AUTH_SALT',        'k? .YAQj$R27B4t Z{ Wk[b5oW]QH]Zx)C7N5a6<yhLCQA7@B*eshNh4X%QpZCO8');
define('SECURE_AUTH_SALT', ');o!8a[ne;|NY-cSB+%5|BQ!oNx>Xj{z@l{PS[sVQ;:^%A4qZsf|{(yNKm4(;hvC');
define('LOGGED_IN_SALT',   'Z9:a9?Lw/xCH(>_nmWmOA?/T=e9|/rz7k^923K_WhUEY~2EDn!@I9GoU3)tH~Wf/');
define('NONCE_SALT',       ' W;P?jNp@O^}ZgSv*40HOG1:XHDuPUI)^y=tHqFS^!bktat<jpu:HGp(_I% 3]f^');

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
