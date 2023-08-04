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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'hpP[>UxM8D}*IY}pptHe#a,UD53IfK25/ RK1Ox(fDj&}s.2A$_m|?z>MJtLm_W8' );
define( 'SECURE_AUTH_KEY',  '<Sq8#WOeQMo}*vO[bZ;upr]m5BQlz7fzC86,L[]eZN}|QNo<G;wa|r?nG!2U_7Q&' );
define( 'LOGGED_IN_KEY',    '|t[YU_ _<YlFhr&L?6)5LiB[K{I</Kh|HbP`5>aO9OD6#FM@-tIA@V*ww=C/p Ff' );
define( 'NONCE_KEY',        '0Qn]N1Ks*QxIg1EAo+.>T,Y`FN-S1D}WU9B^598zCN!+ZF0{JXR4p4G`Iq6?q_vg' );
define( 'AUTH_SALT',        'q]0WDn!DSqc@(c`}TT!@!)?s2~0]%:S m@nY*y|+NTc_pQ@.X${EtSotIRU.h$bt' );
define( 'SECURE_AUTH_SALT', 'NC9@/&A7QJ(*WMp_(dGZHc>y[}@}!Y`4[t&^relBqi/&ia3T/~OUz-X=]:r}zxf^' );
define( 'LOGGED_IN_SALT',   ')3h=.Uz|M_9uhxnnu*}B86%DbeSkt[~%OGN(O;h2Bz+ow^}HAX38v)1-c>fWKU:8' );
define( 'NONCE_SALT',       '(Rg7e&%>:lhSji*?U0)ZKtrKT<_s)1*gy(Q))$Wyz2Im+GNRdh$yNh?#;oQLI-i,' );

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
