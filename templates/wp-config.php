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
define('DB_NAME', 'hello_db');

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
define('AUTH_KEY',         'Y)_|&<oMj(6~/0lu8cjPMLp]j]R?84YPA&&;/(-)v<-Hr.,Z>bdAb{*1>PYL?gCK');
define('SECURE_AUTH_KEY',  '%wjr!D.SVl1(1Q|OPE^sRaWZNL6l-GiII73%W1jU6P=VnIjQDXE|xC$x;2hXnMaB');
define('LOGGED_IN_KEY',    'S]w&Wi/3`%[<^[Io$~dcPL<Q_DKacbppdBz/!o{88 #f+a+!{_73`bdP jFt?(p[');
define('NONCE_KEY',        '+p&uS6w(.`MVG{].t}ZO)t,<<4R5&YVZtE|.NA6xd`bNAp|2-b;2[#dL1Z;.-FS~');
define('AUTH_SALT',        '+yE)ROfAg`[.M dsC!{*)#q]hV n1ZinviQqWmloG2j>=<A+J4tN`iu-aNFM<r_>');
define('SECURE_AUTH_SALT', '[iRlbyd$%0iHxf+I@dYY*UgJStf+J>OGr2?;dZJ-pc4+P-;u]?Njpt;Ti?5Z4];?');
define('LOGGED_IN_SALT',   '$1]9l*#a=*cGgKnt494chA&QSNN(kXlezj_Q=~Yu[RT+#h|a$)T&JZuA_E&d2V]t');
define('NONCE_SALT',       'ia_pF3.EXLi+{}{ ca6ZFY-8MWz9HT2^|74&]Wf^2,^s&{=/)~56Xp/.E0J3){Xp');

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
