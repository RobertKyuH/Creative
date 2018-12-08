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
define('DB_NAME', '16462946_0000019');

/** MySQL database username */
define('DB_USER', '16462946_0000019');

/** MySQL database password */
define('DB_PASSWORD', 'blog2017;blog');

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
define('AUTH_KEY',         '(Vw]$&| {ty=3}c _3!B3=|bbm/Jnv[XB/]8w#p8`(k9YNw)oEYc`bp)2zJ:?Z:*');
define('SECURE_AUTH_KEY',  '2-TJ55#j a9L6Z4@%LeX4-Jxc}C#Pp1A/jjpDY|&S`kDVRl(5c<l}MC)BI/^.(9j');
define('LOGGED_IN_KEY',    ']08gx<:ry0v`yB.M{R6m^OFiS0.D[!T<2F6fd@,<nIxiu}ef?sY BZ04UhO5,0&V');
define('NONCE_KEY',        'ie3V>(1}o;0DH]rTa:][u)]KTDOqJ+v)JvHO>NQ9).e5^+J&$6#yszL>QjEHV>QV');
define('AUTH_SALT',        'o,V:kb^Y,OhUx#ISxP<}y9R,BF[ `!Da+tD]-){-XdA4r-NypP&>W-z5I`p-=*UX');
define('SECURE_AUTH_SALT', 'ta/H@#iw+qhUVv{?E*H=Aq9Y*8OLdnY5cBnP|.Jm:P4!q(z&01`eUeFv0u@~C1md');
define('LOGGED_IN_SALT',   '}PJnXW0Y8/Ns7(Wj_5o>u_ql~#D]a{gSYXZ{f 5P~RlKhy^>)W9qB$N7<2/mG/;8');
define('NONCE_SALT',       '%2?,37R$P+OwI#ns&5LdN=]7&l+OL%:;WP@3xz<;:t}DZ[$h_g^wrzr<#Jf/~5Zc');

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
