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
define( 'DB_NAME', 'continen_dreamscape' );

/** MySQL database username */
define( 'DB_USER', 'continen_dream' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd89-Rtf3@_cC' );

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
define( 'AUTH_KEY',         '}8S{NX$m6zh]MWFojb*kbvfuLZorWj`]w{lI K?+}x*8T;d6Pt9+t}SvC>|aRXd2' );
define( 'SECURE_AUTH_KEY',  'tIb^P3rj({;32Drl5/m+X2lFZ*($e&Xbo0uP?,S@$MsN=Ta{i8ldGF*DO|Z L0pW' );
define( 'LOGGED_IN_KEY',    'P.KD`o+Wj:O%}-si~THXWL@m1MZFf~#3l4rYi;cA3mLc/UT?3#v:%6f}UY%t;BkT' );
define( 'NONCE_KEY',        'l+}m?>BmBQ{5Ce)#0i@uj$K[:hijX<fnj&%;x?w4Xe&KBx]KE5*ut9su-EVFZy%Y' );
define( 'AUTH_SALT',        ';DAs*tiy?rYqr#s? N^QU?J6R1@_@G8~QW<0@~c!z:!#sKr;DhVH||sbn(Yt-v r' );
define( 'SECURE_AUTH_SALT', '0?F;Dxd#dF<XBU,H$yhoT6 9Xnx{i[riulXO_H>r4^=;msYULOx)h~hUX>:VBJlr' );
define( 'LOGGED_IN_SALT',   ')FLLbIl2ZN/c*THN]1r(XT}W+OU+o)D*cnGTxuNn}zKXMnRxix7P& t>P!PRisBI' );
define( 'NONCE_SALT',       '}uI#[JO61X6Ys 3dr+3SG+12S)/_uZ1.I6b$!+L&lR<t0!p,Gc[p]v(3DB!BKIh-' );

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

	
define( 'UPLOADS', 'wp-content/uploads' );
