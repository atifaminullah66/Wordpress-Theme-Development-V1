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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themedevelopment_v1' );

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
define( 'AUTH_KEY',         '^|VoBe91EqqA=Y/Z>n(_}tF^vfU#NBUyFgv2ltU7/9qj8P)FBuOTMY+O[^x -]mG' );
define( 'SECURE_AUTH_KEY',  '[DrSaD%Z{e>aMz&X!SOiEN*ctFL?;r%K-&S$:FF`=t <k|g&KaVW4CD}!C]H@RdD' );
define( 'LOGGED_IN_KEY',    '2tx#4bVrRr1>4}t[>tZ?uWIt*gnTg]E/egq9`U^Hb=6!p~(&W>:ZteK.Hr_[` 2U' );
define( 'NONCE_KEY',        '`kq4:c GdH^rkE4L2$a&`Q}4A7_Mj 0gqjj4c;/[DG={qKCb#2fQ6X@/kNgD8^}h' );
define( 'AUTH_SALT',        'Ei72LQqQ9PfVZC[}<os^e;Sg}<# FtNA<`nQUIOJZJ~yQ#<>rpT*L<3o(2!LSY:7' );
define( 'SECURE_AUTH_SALT', 'jfV8<e~Ir/DbWbF[SFS[6=obLiGS:,j;l5S/7j8YA*kXzQbY,.86Fx5e?(WL[Zlc' );
define( 'LOGGED_IN_SALT',   'W7|0.:DQ:dIoExf?Up77Db3.sEJucI{RQQSRIBN8u.Tt$X8S>M51=/A[(nusD} ~' );
define( 'NONCE_SALT',       'Rz7WrnV[u%l&Kp$As`V/+bR?MY.ParExw ,(Y(c^<;=xv2TsH~Bj)s&)V -^UtUW' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
