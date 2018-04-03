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
define('DB_NAME', 'woowcommerce');

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
define('AUTH_KEY',         'h!69:O)w3<j</`9.6gGA&30g?,EW;4Q[rqme>=^&S;]8e|=h-v*,l`17Yf}wQ@0S');
define('SECURE_AUTH_KEY',  '`|g,,*8$BFtq5r_QNI^iru]FH8;JPXavcF -J9,:t6k]rz~=mv>!.{YvGl)*s/u<');
define('LOGGED_IN_KEY',    'NdD6LW$QZphGSFQA5sO%*I{9$_~%Sf>{{ZAdWCm8#C$aYUcco!N|mJu2]=US-UO]');
define('NONCE_KEY',        ',lQ]V@LCsc=[Fj<Nv*47Cv]eKOpA5yl^qxT&^ims+8?)h.i+VlzX)EB9jHO8|VH[');
define('AUTH_SALT',        'u|=#RyU)obYk>Q/eTM6gtzgRV$$/<,wuR6GFBW1h9WX83pIY{e)VsQ%:b9f9_QV:');
define('SECURE_AUTH_SALT', '0u :#R[Qj{s*rwZ5f*W>tDwjJ$[9,VGO3<tLrz-LOAqP< C>}l:XSyeLt}$w5?aO');
define('LOGGED_IN_SALT',   '*{?(u5e8WE:F)~;]PDvvhQn:*YtmRSESXCmt[qs|3/T6I?Z@C~|FB]:xWtB;QB>i');
define('NONCE_SALT',       'q?[|2o>@9BfjE N_tf-XL*~~~zQw/ML3-vkG<t>Hb4E}=H{G%@Q&&V`qsnUQ&Eox');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'woow_';

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
