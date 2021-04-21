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
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Pandana$69' );

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
define( 'AUTH_KEY',         '/{cu+QCW;6)L7|red+1G>g53js{zToWWNvw87?gxT%V^;ycFQVg6EuLJhPQ`Nb%r' );
define( 'SECURE_AUTH_KEY',  'tGR1PecOatU{Er8*iuJ2WC=p2;jJDykkqt+9>qI$VA#BH-`P{.iv@9N+UYK1;s>?' );
define( 'LOGGED_IN_KEY',    'Ku@/W&3VrT=#|[1-p!3B7xol)j84Xl;&Tvt[P`mPwuU]2SC<&OSk|i62O.S45E!b' );
define( 'NONCE_KEY',        ':]_nSPCrs+;!<O@4r}jU{YO3#)DSq+@YirXFqryH,$vIbM,!Zbt{cu_NFq15y{ 2' );
define( 'AUTH_SALT',        '6|dVVDjQ/Lz/gJp:%@{ucX:0p|9gy!e)f&dr.q )0w*3c3%><WF~Nu:2CCytV6#|' );
define( 'SECURE_AUTH_SALT', '@A&QWm@3at)O B118>+Dw9Ap&)HPXWWi[a]3DXP/6T{RJofoB~<fqdHiZwITwy.@' );
define( 'LOGGED_IN_SALT',   '~<*qUmsG-PQ:)MgSU>z;~Nn63)qnd/G[N-tV$v92?JF+EI%kzZ.&s1$Xa&jhci<`' );
define( 'NONCE_SALT',       'e0^]}{E7j*zK3L1&GCRf,:;rr060y/.QEe=12%@H/_6D?]QOa]u=C7oqwY#~m.{l' );

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
