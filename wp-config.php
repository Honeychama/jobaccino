<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jobaccino');

/** MySQL database username */
define('DB_USER', 'job1431402544934');

/** MySQL database password */
define('DB_PASSWORD', 'J3KXbGtcw!');

/** MySQL hostname */
define('DB_HOST', 'mysql.jobaccino.com');

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
define('AUTH_KEY',         'Ym%qip^y;b0*"zW/@h8@n:Ti9/E9//y0UoS5Vbqs^le0b8OpsjVDE!9SDx3Ly7lG');
define('SECURE_AUTH_KEY',  'u7;vB~_Bt#6%qS:L(uV5+Mm#hx/wAAN5y&rTpqksdM`tzgX?``y2z(ZEYJa?;8Zr');
define('LOGGED_IN_KEY',    'e`g$"x1m1m6!&S/qqnxHTQYUFqCbJYz:3MNfb0fi|Pl^7`398Jd0tk~Dyxt5RIQ8');
define('NONCE_KEY',        'G1jFNNNYozOv%4x2IWJH?eu;6__oKF3gf8`9@~i0vJ^Bub`O)kGy%qi"it%rd/Ii');
define('AUTH_SALT',        '+R0%_dpyVbRhBvCD4`W?vP35bx9afv~PlWBnc/voY@Se9T?wgvt3|h6BfjLO0pQp');
define('SECURE_AUTH_SALT', '~vKN$b`$WWNNzS9zDor9l2~g!)xS*!nwGA21q#C6AEea1t2*Txh!WI%4&2LxOqnh');
define('LOGGED_IN_SALT',   'c5v6I@_VDr)x(SmS~uO#x$aIhKD7J37Hel0%O$K6T^_?ojC"AiKqsOtyBqi(M7+$');
define('NONCE_SALT',       '|b+2@"ug`OBo$:GkH7rf:jCzNelrXwvnD|u:d!8r`X;V7oZN+gl^^abozzBm1^UR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
