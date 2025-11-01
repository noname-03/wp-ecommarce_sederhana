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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wajib' );

/** Database username */
define( 'DB_USER', 'mariadb' );

/** Database password */
define( 'DB_PASSWORD', '49a93beada57b6ddc577' );

/** Database hostname */
define( 'DB_HOST', 'wajib_wp-db' );

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
define( 'AUTH_KEY',         'rW(+#RY#2&pvB2XCQ5R6* P({v*dpBx;&S}vIz*w;e:3&246k+ji;pLoK2]s[qV(' );
define( 'SECURE_AUTH_KEY',  ';Y~j)NjU=O_ra^.x]!{~Azf 30iQ_3aHU#0`x6)=/|;,k=L>=9l#bP+M6v>R^tqr' );
define( 'LOGGED_IN_KEY',    'bv0Ms0+6GF*^wRhN6fb1dW=9Kv(Fcyg&2k`O1oN$MT|/Ncv4DN28%$+##hovb*b3' );
define( 'NONCE_KEY',        'RW; fKq-1H7Enc]n;`hfAl>Vd7`ahz1#NWe+F<Y&YXW.IB)+`E[C7lr1SAm4}Fhb' );
define( 'AUTH_SALT',        'X;xih.VupuRDujo>t5p#$i-J|*S#@Kmb!tD45f#(8e.GQ5|}`A.lig$(Bz&9_}}v' );
define( 'SECURE_AUTH_SALT', 'r/Q4z,c#s|h`sjbG[BnFP`_%+;&nH/7e/_XlN-9B.(h4IIIE P-Hz`~%33;w*k8;' );
define( 'LOGGED_IN_SALT',   '_%bW>V+664)3vJVzQZcNg~fo`4{xr7Hab;dK7kt~0ZHX^))*0P8B=t`$((8D{6X]' );
define( 'NONCE_SALT',       'r}ZgpiSi`W5$Je*hS_Q1POXmgW>mH^:bZxM>[eOtq,Ze^zM~qtPeys~o`!h:9m</' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
