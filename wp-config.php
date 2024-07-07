<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beauty' );

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
define( 'AUTH_KEY',         'U~%95p,mxn-7Mf@KaCK:&;{*f1u.),~@Hd77MFlnwET m%6UPiDJy<dAy[J<>AQg' );
define( 'SECURE_AUTH_KEY',  '&{1L{1[NGIW60/<`~F:(B#=&Qf<0E*mX4F0E!L-*9^[R^+_AY+(]i63vUGt`,y31' );
define( 'LOGGED_IN_KEY',    'QS QrK(Qe4#EMl;r82ch|lrE|TisGTKOFD4(+InKah)Jtx~84*zvX,W?U79*dMzK' );
define( 'NONCE_KEY',        '7}@6/PO2ZY<-{/#l_$KryQIpD(!,e|N-h/Pf<X<_8NA%-YRn|echnn*?mOB&8u28' );
define( 'AUTH_SALT',        'FHp/AcpGA+!S<GyonQ)/xwF]x|Y72WA-U{;:9r;]ccB(0z#P[a.=Wzym;75&6Z6A' );
define( 'SECURE_AUTH_SALT', 'w^H/6+v.JZesf3+@5n^SL|;87{.<HidR#W*Rs~Ke.6J{ujSGnV>=MC7/)QxHN{Zt' );
define( 'LOGGED_IN_SALT',   'OA]5`.Mpa?vCtL [d4M8I9,<8W8Lg2I-uq1.K_[X/x%2V!s&oF4j=Si,*:&naGGw' );
define( 'NONCE_SALT',       '+V;+%;f4I[Va~|#Ntp$$qw}0%/5`]@kGiGJ/#RJL(>asU*fc#nw,)!/QalvyP$eF' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
