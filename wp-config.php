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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@edU52D6nKA/l0T)x2XYe8uPKm>._ssHm+(Y&J0C)Vn3x0_+NS|]@,GJVsW}B?_M' );
define( 'SECURE_AUTH_KEY',  'rP]]KAX#GBPnR2P@yVPU}<c2GSijcC~Dp4co3dwKew@Vd49SMM>g4ZC_M`Av=jb]' );
define( 'LOGGED_IN_KEY',    'S&L,j+nC?%k*<7tlR5K626o|+Waf;<!]TQ6|L67vphHgzXFe;+;Je2^-(1J;%<F1' );
define( 'NONCE_KEY',        'JGdfFcFU.(EuF71,=o6N+L<;h4kI;7&X1*vuYks1x&2m,@WytHy0-y)PycB(chy ' );
define( 'AUTH_SALT',        '-sz*pO4<WM^?o>r;HeaR(_e9F|173oUAoGcY[[`(%{efw!{.-0M| 5{9smf6o8K3' );
define( 'SECURE_AUTH_SALT', 'b2E%yq(6z^2/GZej)0n;4{C@=hl {<qd-TS::,RVGMl~>Jk}$h%G|tp+B~Rj|M.2' );
define( 'LOGGED_IN_SALT',   '2vhO(D,6@PUMX}LKCaz6!gAIAU-/Ou<UA[_]a+@FjNDT?z 3/y6+m`<R!}an<XqD' );
define( 'NONCE_SALT',       'R~BNflw;kKd2(y:I]DHwVOn{#FM=YRr8ES61^19XKxj*XLqc3$T=~E$>n(6YIA*q' );

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




define('FS_METHOD','direct');


