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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'sOG(Dt+yOJEFeQ.pLV/,0$H5#TL@rPw_G0vRNX*>! n HUYV(;NPw6>793K8pAUj' );
define( 'SECURE_AUTH_KEY',  '8T^sx~2J?4d-PI;92aE{13^gh>k@$JsQbB6hc)O8}-(0KymJCPZPUsYr-.WONdAu' );
define( 'LOGGED_IN_KEY',    'GZTSM/fpRi`js{:bnR6N-U_]s=$-`]Do@9@P*NW5iAsTK>.q hE=U83E$1L:[l4U' );
define( 'NONCE_KEY',        'w^o#<H~$ElW}1>a={UN<~X=]Tw|%GLiJgyCwjN#PnU_<OE,M3sH%@Q7ujd7Of[gF' );
define( 'AUTH_SALT',        'Ux4-2]2l3oQ=nW~LA1hhd?~rj5)r8d*lC3j>kJ_FRUJ#lS~elgMP8[ppdpQku Sw' );
define( 'SECURE_AUTH_SALT', 'wQ%u[ qu-v}5;0nda@L}I#?$yQ.YlZVrmkXP_j2Rhw?a:,*YrXP7_w+h]/)^SQC*' );
define( 'LOGGED_IN_SALT',   'e&{Rux6SdgLp)MGj!PQ;Tq^@)dr<e%J46 !|DWBb[dL@lR#nFyYpLD7Q~%smw])j' );
define( 'NONCE_SALT',       '.^l/dOc}qog6 Gdu}nevB!^.cGFteLBDSt:RePVC(.~!EY_+0S sTS~M:_bfhUi^' );

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
