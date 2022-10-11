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
define( 'AUTH_KEY',         'W]:J^aHlFg;?ilb*fVoE=-Nrg5@(a9h(+z6T[mQ0HD>]P>2k8Yzpc%=t8xBj}e*p' );
define( 'SECURE_AUTH_KEY',  '??%$soXa{m!G)pebq9Y,76Og2%MHjkR{T9:;7+%BKvs9%<m@)@>kF0[wOv02uB*F' );
define( 'LOGGED_IN_KEY',    '_t4E1?(z?6K7&jC5{kDbA3~$krnl2h]X}/OJs<T`1aUAqV,fPha.&p[djLj`bTd]' );
define( 'NONCE_KEY',        '!|ZE_DF|L6u3OrK&<XkY6nIqHAxvK:VB4u`e2S>{p.]erWN!N% Z`Y|FSMInk9R@' );
define( 'AUTH_SALT',        'Y-Po)9r#,2Dz_)YcCMyW19`ZO^TMN22zbZayN=)0B5SUi%Y nRd:u8S9#QYvqRB6' );
define( 'SECURE_AUTH_SALT', '50w?%MBfhd(|k|O9NztBP,Ad-ewf]30VOH:w1^FYe(=C&=;]>2GBv}bM:rEYVUA%' );
define( 'LOGGED_IN_SALT',   'EOAvZf6W&dn+~Qi!E!~r,;-]_JB3VK(j}V+L;L{SSVL)]|ut;;Yrk[cA+.WGfYFf' );
define( 'NONCE_SALT',       '1J{Z:NUl[CtK0lNZ2:.UTFW8Jc0)6aBqy:}[L#s!#Un?d0:N-<T.e_dJ%z!I[~k(' );

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
