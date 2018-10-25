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
define('DB_NAME', 'test-wordpress');

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
define('AUTH_KEY',         '#W*%kg{QYR(PCF%Jmi;nuYaQFGHpt^V^?&}&%dBH^igjW+?8Tr>7h/_YAAiiU5 8');
define('SECURE_AUTH_KEY',  'Ys~Rv+*ta*4>qEPwmD1eI$(G$]EccZG#7H2&?#-U:HEr#s#Jl:_3x9MH*bx3rc-L');
define('LOGGED_IN_KEY',    '4 hg,Bc1 fwI=it/SEX2B[z-d~e!$j~X>NQ3WJuKtBn%d0LL;i<5LK0PeL19T$]6');
define('NONCE_KEY',        '9qvyeGF}YOsu42?(Ljw7:X+1t8bl*qBIdjTD1!70TZSV,}b$%Jd(?{h}nU>+X.I<');
define('AUTH_SALT',        '6ZKS +wSRKVdAI>zKyB%.j.c5b|W#@k9w *3.9{0Z}kAOqyQZg$au[TPb1DP/>OV');
define('SECURE_AUTH_SALT', 'm:w3EpPSvZ:3NPO(@F@&`F)BhZstjMxi^ENVqAGlBKmMYc0U`Lt9`@)B87sxZdPw');
define('LOGGED_IN_SALT',   'SdhqI&lMKGG6H5XSR|~k~bHc>=-9{+U$7BL|ta30CFnHphpF_P_sZc~EXCtMBPli');
define('NONCE_SALT',       'y_3#zbiTX)Vl<~L2<d-Ex7YPL`L/9[NUl;(hY&.t#u}L*kb@YHjn%n_-SS;.hr>b');

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
