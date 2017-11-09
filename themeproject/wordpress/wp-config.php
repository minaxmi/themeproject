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
define('DB_NAME', 'wander_db');

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
define('AUTH_KEY',         'GNq;#y:T1&sCq$3<6JCbGr hr[I$0~SH-[yG1+rEuP_^<4RM4E*+`+}jg*~W$CV*');
define('SECURE_AUTH_KEY',  'Rb[VUY|)-3kttWsm>L;=3WVn$s!dWH.b1wD1s)!=$MdZe*IN;W|D,Y,=Gx!pB?Xw');
define('LOGGED_IN_KEY',    'DJ}Kfy~X0p15D@U>cluC_YnDQg_}x6q*t/X(M`(T81^aOyw)FI#O*[[T@5}Jk2g,');
define('NONCE_KEY',        '0pvH`sx3*hoZwii/{]l?8$QoDHHrthz#;HRNpS$gnx;Zt?r%p 2Vmmw51 jv(evJ');
define('AUTH_SALT',        'qm<atsDRz~|+#LwUhi5itwpx9F#T.#x[cQ+S;>VOdvD!|=2-DDP7Oo9`ocz)Z<XM');
define('SECURE_AUTH_SALT', 'q.$fi;T1L=%<2Jzo@Q(X@GJ((x/Bz[_#7+.:}x$l|kQf;N5@Xh-<*As7kKG4`}}L');
define('LOGGED_IN_SALT',   ',j)*92M)Vj8wRc^5AE;C6+/ua?wO)O_D{_e8P{Ub1V*=W|/PHjIH=Rz.0,]dApc1');
define('NONCE_SALT',       '-ZPT.`6a^Uq|r*j&xjE]U]vHnTt+k DV};d>@z9-Rqf,yP~7wk.q(kD[0AaNCqy*');

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
