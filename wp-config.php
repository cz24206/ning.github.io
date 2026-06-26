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
define( 'DB_NAME', 'ning' );

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
define( 'AUTH_KEY',         '>!~/:P__1!~{fR=fQT>,C-_{m?X;=LKF>iSpR;ebb9g4b6R--+!mY=(^fHm&?z#u' );
define( 'SECURE_AUTH_KEY',  '%jMX@%ny!5tmc_x:j?0z[8}h25=PX5zQIyQWEX;t3]],uO-Z)+@-]LZ{.d}q/V19' );
define( 'LOGGED_IN_KEY',    ']u,9a)(&R=W}Y131&>)pS&KcSMrlat:2{rn=sP?s![f3&}YHvL6.0S]N|P[:ZlvP' );
define( 'NONCE_KEY',        'tz{PntKgd?9A{4|lp.2iT]orJYXF|#Uv-@=)e|Dz&|4p`wu+:E]7SdGLqG$ F7Ca' );
define( 'AUTH_SALT',        'xThWW_.z2eN}bS|@vuW6Hl8TVu2FM#H7i`hJISv1F@MzuVb&n>=2!mTE%@`S]~v_' );
define( 'SECURE_AUTH_SALT', 'F{%ny&?yvJwl?MWuVV$SQZw{1QTB@FJ_T90f)/[w~dB)-NN}Q;c+8:`)iA.J{GnX' );
define( 'LOGGED_IN_SALT',   'VY5ck8so[UiX)QsirlHDH$%Tiw<:;pQa?`Uz5[y0L 8;xgS{=Iq!K]e7,O^aZuj<' );
define( 'NONCE_SALT',       'R#Lq/l`ZV|1n(XEm,H9[e?HaF$^R+LDEE[=I+TKX9e#kqKAOb?r&ozd4QwxeGcgo' );

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
