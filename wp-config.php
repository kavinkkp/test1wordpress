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
define( 'DB_NAME', 'githubwptest1_db' );

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
define( 'AUTH_KEY',         'Vf)^eT)k b= iFE:4%4PSmF6Og0o!vNd~j7S$lc+r~_C-T1He9-h<]m$X6EbwpKI' );
define( 'SECURE_AUTH_KEY',  'seybb&V`FcbZ&[`MkR:*%9uzQf7MKZUg|<4dZ{>.vdG8GPbWp#WIO.Rv4ywk|7K~' );
define( 'LOGGED_IN_KEY',    'G!UD:~0m0@HzP=M$#_CO,9h$LPY`LaagaD-H{azi$y3N@<U:oxt01WoGjZT?$#;c' );
define( 'NONCE_KEY',        '~?jL16tq,>l)yKk^!KudnPB6,,_1h5>z@+tql^D%r) %=ch!J1~GJ.<,TL/#Pm7s' );
define( 'AUTH_SALT',        'nXyo1N@!aKGcv-wj_a16=JURWK2PG|)hV10`EDYUA{Tv,RwoEbXaeys[XzSXDstY' );
define( 'SECURE_AUTH_SALT', '7M^|TSK)`);ly=g6IBcJuE(;]p7Eq]t8>gXbcX?Tak!)8Nv}1&0.9E_7V@>2{<TF' );
define( 'LOGGED_IN_SALT',   '3<>}u6vfy1[f)PZm9,9W0i7c~e9P3YjSbJsu5j^Kf]os9hS}:r6R~QQ1=ADQ,Dsb' );
define( 'NONCE_SALT',       'xr}C?j$C.AnygcB)Sfe<|e2UPsrx2$Ee>W?qy,[>>p.>aBfe0EodE>8mJpsMe|&K' );

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
