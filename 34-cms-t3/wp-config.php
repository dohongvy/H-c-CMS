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
define( 'AUTH_KEY',         'DuwP:#Av4Kn1h#lGaH,}Fw42|;MG1].u|E+qv0^D>:O6fEFGWo1#Iq}cqe2=v7O[' );
define( 'SECURE_AUTH_KEY',  ']zr?!#-e#vDveT$;vS/}&iZGbz5;*6+X{@$ioICQ`CU~/~bK?J @{$]YNRXzms|V' );
define( 'LOGGED_IN_KEY',    '1@la_8>J!LE:8^+!]dRU[I}Si<WK m45(*U.oLks4cU}GX7lN/i^1zT?CwUf.CAR' );
define( 'NONCE_KEY',        '$FFIQ5jaB81ucCEG3w`00ar)H%`0aig`<X,iUMg $&JqhT061.HaD,Bn-c(][B^m' );
define( 'AUTH_SALT',        '3)Q0_T7ge)}W7sBWenXFC#+8P=)XSym:D~~1D~Vbfw_%[ta1%.ZhXd2teMOcQ`H+' );
define( 'SECURE_AUTH_SALT', 'WyU>le<MVgJYF`T V2L3O){aJr+r9az_3p@u}Tlo/{5tfuO{-XY]e/rjH]pOJcWg' );
define( 'LOGGED_IN_SALT',   'x1:q:#@ zi?ARFdaNj+26WHWO1Mlb~jW3,QsLNGUl#kl9V_YOti`A$_V*EuAu@/c' );
define( 'NONCE_SALT',       'VKQ[WX%LUY_|.f$_UE*s6wpv=/>6H{52#oqjLYA~$k19cjewK;m lJD| k$v&>Kd' );

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
