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
define( 'AUTH_KEY',         'A.r6<+7KF#8k3;}C7at0me.hJf5z}ET/hUvxeiNyv0Du}qQy4WZc}Kb|HcS1qP.q' );
define( 'SECURE_AUTH_KEY',  '^{Ra^!lv|-9-N;-Ob{3SN4EVq:7-IX~I_{ ;s+dpqxD@2`(%I+,gAWB_0}#N 0[%' );
define( 'LOGGED_IN_KEY',    'FwY?P*w>UQ!AZl%9i-(8WdK3J|YR[Uvg6gF4UA$d78&I..pH_+hM3=yw7R/Hnt[=' );
define( 'NONCE_KEY',        'A>S&q3larE^_@/%P9l9Df7J}]CWf9HD~wge!Lj7Yg{C(;hxGSOtQsDyqMW_P?|tT' );
define( 'AUTH_SALT',        '>(s<k*KBaSr1rUSKE#7[7,`eChkzNH%w0Lf ?P.l+oe+:z=4FWH-S%2(TAbcjjOu' );
define( 'SECURE_AUTH_SALT', 'P;x-Hs[b_Wa&)rZ*RX1t7#@F4NO|2kTyQT`j3p(K7}Jho)8PFd-pU+@,CJdr0?e~' );
define( 'LOGGED_IN_SALT',   'M~z|vwUaz$7ok;WJh(2Rwjk+`LL1W#=@3=<Iv6rZ.ouWQsZ#NMvJ`)=&I1^%Nf4]' );
define( 'NONCE_SALT',       'A^.u<O*_s];x3C+V-L_F`)q{Z.h4BnrTH;0}<GFt.uI(2XBagB M+3mpmfTK@lkG' );

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
