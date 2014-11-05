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
define('DB_NAME', 'multisol_db');

/** MySQL database username */
define('DB_USER', 'multisol_db');

/** MySQL database password */
define('DB_PASSWORD', '!.n)_W,{lggu');

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
define('AUTH_KEY',         '-sAesV4p+jvi o5V+T/O4ijnc3)z%i%0%9V9L~Hs>qc!$Aq%IH2L<5M@JzJGcF:$');
define('SECURE_AUTH_KEY',  '7cE|k5$ahQ+i{UZ}Xd;wC[D^W.-Y?KJF,}&+t|dXD=g.vA<gi)}.XZFv/A7Za@G3');
define('LOGGED_IN_KEY',    'iO5Qh{.l^tkYwhuh{dWY4u5q!]}KmcC:&u=wFX9@}3.T~IlT^a27xh[Yl^GnsA g');
define('NONCE_KEY',        'r3:/$iWH]R+=[-N+,vwKV`jD)) jz{^/C.&CaN`?h]zC5-VoyfaY6?%.rCv pvN5');
define('AUTH_SALT',        '~/&~OTD<&!1+_tdl+UX/0nOF1sR:5+*3x$M]j:uf*|MuD,S~Qh&h&|k0eA`6u/+t');
define('SECURE_AUTH_SALT', 'W4^JExhqJxvh#yI7.gn5[:M+.9oezEP7XM8)c&0s77U})@m{(*+YM`Hz<~tCkkfi');
define('LOGGED_IN_SALT',   'r0D2=iuB5 Y*#xlE+maQ7~cboezK_h%B7%PZfOv<p^aEW8G$d&fMswZvJY|rqlfu');
define('NONCE_SALT',       'R*Y&`w%}tlo5`f5&}}H)KAgB!m{uU?JvJ{87e6UJ-{:w<p(%KA/%dHf_V|q6233!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
