<?php
define('WP_POST_REVISIONS', 1); // Added by WP Disable

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
define('DB_NAME', 'blancanavarro');

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
define('AUTH_KEY',         '^z-8E]~9dL2Vfh)1MBU#;InF?q(B*HiS0|HxX mQMi|S1{6*X;uA<h&=/G9nUF|W');
define('SECURE_AUTH_KEY',  'bL,^t,wI5JB>Moa{]-V`GIeQA2QN}x}Tl|Xyci[:+&6G7%nx 7=iw|1s)HWH{BI&');
define('LOGGED_IN_KEY',    'sZZ)) XtY.rE.S2iPh6f*6|Cky+Z.n|,V60BJ<<i`9;P(fyAeM7cGI5# mobtn+z');
define('NONCE_KEY',        '>.k1qJA)SCe:N]|DF+BvpwYa8S&FmDjC1Zl(1];3  W:~cp3b%6GS`l?UqT,dZrT');
define('AUTH_SALT',        'I9+S7.w,OK,=&k#?T*nNAxmr6/iQ %12=8,9b4Y|wZbU:_j.!jBm,^B7c;B=s)x*');
define('SECURE_AUTH_SALT', 'f0@)F$P!p>{%Tu=mV?[038|~u2n_>gocH|X7G.wU1;6N)}/h(d[5ct+@WjV@1(P=');
define('LOGGED_IN_SALT',   'HR0PyR9cV|/+,:H7Z0qdUy?5D(T4zM$5sT6.f+&`Ib(u-M}r3]VDzU8BXDQ-Kyyt');
define('NONCE_SALT',       'J}< O0jb-J5[Q<POD${4F3o*&zV8 81 ^t9{U**n+qo`!kJHU}0epZGn|%,^:Q7[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcj_';

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
define( 'WP_MEMORY_LIMIT', '96M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
