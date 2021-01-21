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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crypto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C^*fmR><q@~6sgVh`3QVKQFgq@je&<Wr!1P*NY(FV`Nfc#Cfk)MRqt7]ryC)8MYl' );
define( 'SECURE_AUTH_KEY',  '9bL2p{l$.R5C(CnX@[+i;;XV9 LD^dao==-B[Lou2auuRb72C/+qeI<#`X5Q/Z6D' );
define( 'LOGGED_IN_KEY',    'Sl1P_MX|:Fl.cce{*&)f3N}~_>6lIb!6VGxe,d4,0JoBSz}-S$fOlKjg_VKQ;fqn' );
define( 'NONCE_KEY',        '67Wy%MXeTty-u2NQ$EqjjcA9P`kV6sm{@5q6J7Nqp!}Fwq,wAN13(Y[J*7CU fBB' );
define( 'AUTH_SALT',        ':GQNdGt28)fZAOS(K!H),,0_aZ@yi^CpMY`#POVgBP{!gQ*3awUN~U(VrQEtGZ{&' );
define( 'SECURE_AUTH_SALT', '7<JX8d!f;GyqR#8Bs5H/EV+@qCiuinwR85-!==Re@iwj)*EAOaBr/iO+5ZRh6Ix%' );
define( 'LOGGED_IN_SALT',   '2?s2Fn/p96J1f9Y4#^UoN~2$-Q%LJofBdMQN~pzxhXFNfGV_7D[Bb|$`|uJ1= r4' );
define( 'NONCE_SALT',       'K,h(R]?O=U1.-959QlzW:<8yGNMFE.|bogg]wk(1[D|cOwa[2l2@]z4];?t=:-s;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
