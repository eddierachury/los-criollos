<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u796210182_I9GFP' );

/** Database username */
define( 'DB_USER', 'u796210182_col4q' );

/** Database password */
define( 'DB_PASSWORD', 'YyA0jgwHgv' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+-O<>jS}Gn};pUp{8s{^YHTJ-uSoeC5n?>4>{4&Egt|L}Au$}BHuu{0(eENhS5`T' );
define( 'SECURE_AUTH_KEY',   ')/<[93pe)o6 Y$$`H*}uX[wQu([GQ9w).F_Vj0rDQbNL*b!pzl/]~$;Wsmi5r!tm' );
define( 'LOGGED_IN_KEY',     'o21iJsA32TbGW@pZ`O#{H}1*P;0U@VZy8S8;P27g7=yG06C`%~hADb,5{v<G^UKe' );
define( 'NONCE_KEY',         '_[(5{N+?i(oB(DVe0Z|5X<Ii9w=r&]n=S]MfXS7zX2ku!:jvbP&Y&3MdZNN:F#Q|' );
define( 'AUTH_SALT',         '+*-EN9cp%RZ~V.Nb@I;2~(rfn0NWRJ4%^o{H_Cc2qfsL7D.A>&+S$5,awK[]U7pR' );
define( 'SECURE_AUTH_SALT',  '!,~8EMx2nIy  g<_Paz|B?L$I*z%~s[}SMojZl?c`<yp2N%M~8kh:X4:DcN}kagJ' );
define( 'LOGGED_IN_SALT',    'rbkPj_sf;I]rA3Pb:TR]6N{/%Bunug*7n;Yisw>^+KG-.}q]Ou7olowhf}gR_R+%' );
define( 'NONCE_SALT',        'jWX*~Cvev9.U`M);pvycg~?VET})fQ@o[1D-(IK[=LZkhRgd0[N`0#$5PtJDx7}w' );
define( 'WP_CACHE_KEY_SALT', 'NR19r rgo~,$V/`]8/Q,{T1[esE17cAg/fB--5>ns}1MjM^7aPz!WcbU?E:3YRyq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3ee62fb283d89792deed6757729e44d8' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
