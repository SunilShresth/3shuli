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
define( 'DB_USER', 'zerotwo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HELL0W0RLD' );

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
define( 'AUTH_KEY',         ']df[25of*R^|&_zVtQStEnD9g}PU^E1P`fK#+1%%1le5>[hkc`*j2R&GbymCe7+)' );
define( 'SECURE_AUTH_KEY',  '|%J9}]q-*e`aaFP{z()ae9aJbr!DR4ylC1n}?G]a~%.CSA5HiTpVc_7gWi0o1X/ ' );
define( 'LOGGED_IN_KEY',    'qE9LE$JV7w( T5<U.Yx+Q6mWJTek5[96Ht7+7:wP!%i==<[AvC9^{%S!]n>b!gOY' );
define( 'NONCE_KEY',        '34@FMVXXE<U=v4/lS&QM4$x{otJVmE$tT%.r0/95/V-`FSA.l#qscHXi0A3`NBRX' );
define( 'AUTH_SALT',        '}kV^+H1wk7B4[CxC2f2 -<u^;71!1K:2)$jc1jU&$KFkU,G68Z:QeS$6u-~>blZF' );
define( 'SECURE_AUTH_SALT', 'aLsU}y_fV/$p@VT~XD3-8mN|<R~7}4Xo>jSO8Qg8vQ^xhm_[,(fj_L`)/O 3^xW$' );
define( 'LOGGED_IN_SALT',   'rp]S]v-sWS(^FHB/@M41O~bKKtt+m7?-+4y.l6Dx,kg-H;IryGTP07<>kQ`oP:2@' );
define( 'NONCE_SALT',       'V(1]aMRV4idlw|~y,X}=~fv]DP6T 7vp0LBt}6T3dV-fXpzItv<EB[Zd_2[kY]c|' );

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
