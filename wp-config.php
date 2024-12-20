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
define( 'DB_NAME', 'portfolio_2024' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_{BN$qF^Ag3cE%=8MZOjq)VybIHK{%8[*ZM)m(4hckFbmU`/2GnlEl>|l=#P7_,*' );
define( 'SECURE_AUTH_KEY',  'lyJS?N8]3%9P1ho@%z3+6,oVKIEhr7;+/!NbJA,AA4YH_qdXh&~A8X-uO{WD@K~C' );
define( 'LOGGED_IN_KEY',    '=/1A0wF,33h9W+!@3q&  Qh[Pz,J{}NWHe_U`<NV#yKlDV-F~xCtHMVhp8y{&;e%' );
define( 'NONCE_KEY',        '0I,~UZsl-M0OxSu92$OIt?c}62(*:]yo!`}7kwBW,_a8fzCG~=)p(i,2`&M*0jdl' );
define( 'AUTH_SALT',        '69QK/WA?b~:2,HE@)Y?0cng43*I9*]53H-[>uX$a-*cN5MZ81[BOBX7?M{9nBz|4' );
define( 'SECURE_AUTH_SALT', '2m4&3C%(]ry]p;<aYmTQot*cY?goJv9?%MoADc$vtmJ9(:G4>U,vC]*Qnp1H++n!' );
define( 'LOGGED_IN_SALT',   '@~*#EYmtG<o:GGlYHe(Mas &DS2NgF?6?dskE/.}<=aD?4smv2!*^Kglw->6Yo2b' );
define( 'NONCE_SALT',       'Nyd-vKi6EVc:7FcwO]idJ(Jq-NcNCB%[svGouK>-NE=ZE*ySQRuB`%/ByNP ?e3P' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
