<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Woocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q7]e=3NY7GSHk]6dg/94O#Vz$N^~UGCH}|7P[V,1=b15X1z+;~:G33f(T&)(ppC/' );
define( 'SECURE_AUTH_KEY',  '2|9.X`uBqpUG>99[D?T??v}}saiVPz2Hv_t5$]VPOKvk.HO>Qc`9qk81)Kv0{r[%' );
define( 'LOGGED_IN_KEY',    '>pV5Eo@pu-GFswHMu|s^HvU/` ~KaQ*f9Fk+}w@pMp?nx]G`:o=e/MDikLvB&2$R' );
define( 'NONCE_KEY',        '?QQRkYXvo0#:>XA{@W(Pi#mX5Z]%}4bj:@DrMA4i+@J(<IsFV^s|n}5VIKke#Jr[' );
define( 'AUTH_SALT',        'cas9:odXiE<X@,%;%xrm(<$Jo?3!LfkCGs.xXz8Ft06$B-Q^<z~*M gvE4GNY9(<' );
define( 'SECURE_AUTH_SALT', '>8fB5H$=P4.Q^+L::[L:.$H.P`cp*L+KJEiJwRw&Z&+_U]}Dr%uEJJ!* JWO7#c>' );
define( 'LOGGED_IN_SALT',   ' />{=hklx}d_E@m:jCE?O~kE#=S2$(CJSxuWVg*U6K>06MnUqV(Kq@LwW~=,V~%J' );
define( 'NONCE_SALT',       'SP5LrOjIhh X0 SrGWKc0s|l%&j)9_L2boe(z`7=Y:XD$%KKVkVEAQ+@z@bLC6JE' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
