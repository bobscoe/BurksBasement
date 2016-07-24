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
define('DB_NAME', 'Xenon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'me4LVMR|eLNJ$(T_c}YAd3ABXt!X`%2XoDkt4P}wR:QU|o*O[Igy#O<`SNj0ex{n');
define('SECURE_AUTH_KEY',  '7h$y Q7r`b_)t]h8T&WwWaoqSU${ M|ZUv3{3,uPykL9j>9pNV,h?Oq7_MB[9F4K');
define('LOGGED_IN_KEY',    '!p>=#eu#>rx(yi .>GHW5CB2RXjeUGzA!}W$U$_(hX,r@8PUnumX*Z^f+G-&Rv$+');
define('NONCE_KEY',        'PTRz;sF$#zn~3{W~=2GS(nDhpq6+-7eS`rxh0Sp`r9lAa!Ko#x{u{cp)VjRgjGu1');
define('AUTH_SALT',        'nYZ::i*<@rG]-P5k#~&OH:e4ZC.FgA8+n[64l.zUjh#G:lnoL}#lO2WbH&VMQK{?');
define('SECURE_AUTH_SALT', 'je:IH:^7R>pJu&+2)`gDo5@<Sr]qm<v~$h+QD:n<V;InQ~ym?r(1B6>Fi &i7 &$');
define('LOGGED_IN_SALT',   'TCsxL1Avg_g> )wEQR7%%t<5 AfX]&TTWKA)NU28W8dDhdJs,tvo^uv8&p+f7a4e');
define('NONCE_SALT',       'ov]~2?l,Bs})Jf?xx#1*b;f0=:bddl2rp{EMd@*9E#XUd+R+W4OY|&#uNg]H3W#`');

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
