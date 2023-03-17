<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'a2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Qsx+<D+fhsP>YO&,!L_Wwb!s89;7akYXDo4`-akNTPym[6$6T%]woP~_nsj`d2(w');
define('SECURE_AUTH_KEY',  'JofQH8q?IQ+^R>4/0m&&m/c:OQ>}Tu%/P=[%8A_ax6YX<B<|.=M8C??rR4*>f80^');
define('LOGGED_IN_KEY',    'CH(e0G|KcPZwPG%)Rvjzi=aL9Q9>=<Zq~=n!mST0g2Wf5u3yA?g-:;dM&z.Pcn}8');
define('NONCE_KEY',        'EEb(RJW&m@)CRD$W%^wE^?uQ;F(fa@?4ukkIXg;7-G9Lc$6Nlf`FRA$L2A_C#Yi[');
define('AUTH_SALT',        'rSVb9ZUrD<TpF4&WtA.?hh0N;5skMI!K!J]J,=(--^w%y+Zb7YALOS#@eDyEW>0|');
define('SECURE_AUTH_SALT', '!< L^}BMT0k+gtkVPCMWQQwDrN;>PGDg5#{Z U]=`|}7]|&)p^9K<Er&`OMb<9!T');
define('LOGGED_IN_SALT',   '%X!rCM_SW2~TG|V0i}B9x5yuycdwE*REAtU$6j_}l,Z$]~`tz=UBX{T|:mxsQ&+O');
define('NONCE_SALT',       '?I<YP ;Zo<(6&gy,u*.}XoR:2v%%^t`:`k7| XcIvRKq5*YIlk-#q1m}<v5nu`zN');

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
