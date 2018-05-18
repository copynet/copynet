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
define('DB_NAME', 'copynet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4WG>WQgZ|^X`DZlP@NYq3U(^tuXtH[}fpW5h]U*VWLEO%uRi0}&~@c+qYoGhk$I<');
define('SECURE_AUTH_KEY',  '9qbHxD<,`S]v,:onm#YR~!,DH*l&8XcA~B@Ct`-zm?V/aa4X9fS@fx9#T5wU7ws|');
define('LOGGED_IN_KEY',    'WFBYrqd /wP3# ]z9GKQy;|Y[j{>C!_mir$]fraI?oifQl]-c#Bh`!LcNg..l>+7');
define('NONCE_KEY',        'u4.]t^Ty04RDfaWNo+YG/oRKPoa`iU3.yUo|BX!CE0lRL8s!(+.QwAFjH9il^$Gj');
define('AUTH_SALT',        '{p&7Ha6Vuv@{3l$4OA<ck/LwAN092>_o)b}[&@/[CUH.cKG$kYo]Ppa4JoMK_r|x');
define('SECURE_AUTH_SALT', 'n.$m)l4@<$2!pfd2w6E2d<~?+heghapDN:~Mp E;_v1JTNGS:,.f|A.o6ct.0~S%');
define('LOGGED_IN_SALT',   '147s%dpg#ke hEYXf;kp(BkoP4YzsawalyHtUp<VpU<TnP=,^R/b{Yq@w;I=/UFd');
define('NONCE_SALT',       ',NhF9ah0Ex4?}Vw~s:#GR;F5YtOzXY+b1%CzR_8Y6V(ELpNQG_HQqE3_YRKuigzl');

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
