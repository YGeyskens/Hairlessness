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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'user20' );

/** MySQL database username */
define( 'DB_USER', 'user20' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HzFCdxV7' );

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
define( 'AUTH_KEY',         '**l+~j^;tA;9}D;E1@1Byr9<x=T2R7?s4>rTfH)UCn{w]x-dP60`j]Qm)kZIMyV ' );
define( 'SECURE_AUTH_KEY',  'cG{v3WmZy Z((Obu C2nOEV1~T@@y=&Uf,X~YKR&30-k~Y7l-F8=D!w~/R;Q8oJX' );
define( 'LOGGED_IN_KEY',    'eZ@1~HM}^Eud?e7!KL=k8ND=TG)&**%z7]!% {KGj8z-nuGg+E#5mrIw5>F^}&`C' );
define( 'NONCE_KEY',        ' |IBq oHP[al@UupjqY|E]AQ-^uPy8ixxk{+` E)Q2?#t;#ZB$,=;4r#nnS.l~xG' );
define( 'AUTH_SALT',        'h|BR)$qXl=QNg.ZjkkH4d%70x3(SR]VOhZZQm8,[ey_,J{$3&5@8}AIh75GpuSLt' );
define( 'SECURE_AUTH_SALT', 'Iz(`GDfcLrHYuH6~H.o,6|H2r:jSsCGq(g%<e1r8o^|J[#:/}v4GdhF0BX5m2tzp' );
define( 'LOGGED_IN_SALT',   'xJ.vaz:J?gN 9Bez9tG >oVN[<aUX>R>dTCj)eiC-c|s60-sDM/r*Q,&R*9@uheg' );
define( 'NONCE_SALT',       'q)m{5?nZ2^M%g?~cQD},?i;NbJ!ZUmg&WHw-IO*ATT$&c4k#apt/_EhuW7<zG`jX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'h_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
