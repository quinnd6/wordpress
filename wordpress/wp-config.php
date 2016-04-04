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
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'Shxo%&v`BwxL+0CBx?_uKL9PlcO) ey.rOsFQofa7mY-Nh3Nl2v,@P_UF-y1J|jg');
define('SECURE_AUTH_KEY',  '+1#FN+M=JWmvCY86)vefJ@dF{+)x*9{xw{|YH&tiiV`i{~Ny^b8q? sJc0$lz:-t');
define('LOGGED_IN_KEY',    'u6mSB`&+[;-q,=XXi0J05y -*3Y06y-[x>&`Iu9LbZ!yw|!0;|8T W|R*u-{a| f');
define('NONCE_KEY',        'f)m_9v{({qmOM9>VV];m3R :4]K3/C+=EXJ (ZJZ^C9:R96wcxoNHy4>os|V=c;[');
define('AUTH_SALT',        'Z~14?Z?BGA-u=g-/ @=BgeRB9<%|4vj6Yold|fD7+t3In5vp%WE.xkACY$_46~n.');
define('SECURE_AUTH_SALT', 'pBJbv)*!ZJQu3#5+K8[I8$+cZ9FAYNuTob r;=/-}gnZsG+Z[.J~P(h9f|r7dB*m');
define('LOGGED_IN_SALT',   '$3l=14ykiS8-/uC*<++Ec@HhgAja&}^bcTi=6%[SLJ2ra&.O@4md^QW+DPPM.J2W');
define('NONCE_SALT',       'Hg@U[JIH a65S1:IJnrN.5+Y?PT/Q(KWHr03v0:sm-T9DiRVoj|0hxHFY:X}s<Fa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
