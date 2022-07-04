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
define( 'DB_NAME', 'lp_wp_db' );

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
define( 'AUTH_KEY',         '|KhEydAx1G}[Bw=Nod%KI|`Ck$NhM6w@tGNWXYQ8o{ U. fN!tfKCje%21,^_[V{' );
define( 'SECURE_AUTH_KEY',  '7B~j]08CI7*eJ, |OeL7}C&DM~NR:k0g0&*G,7hHde#G6~%cL5BYT~MU/C#p3ElH' );
define( 'LOGGED_IN_KEY',    '{<*qqj>^O-,)mKyPk!>Qoa;Ld}l+;)El%ca*7FqP^U@G:NH@.oY l-m8@`WNx.K4' );
define( 'NONCE_KEY',        ';Z |9&UO~g.&hW4ly$%w_%W0z~]/g EViEz87.5S&yd!?umpnVc]iRZt^*ss!cIv' );
define( 'AUTH_SALT',        'X}?h_[?0?H0q+$2@3:0IN!Le/bmE[!v<[qlG#=tBiQ</wln]_7.8(n*teoUo$Lj~' );
define( 'SECURE_AUTH_SALT', 'G_zkO(YR2xdTxy1]5x~A 87dC,A.G^#zBt8<%r#,0>jyiVFSK4I/NPpnX,r&dSD&' );
define( 'LOGGED_IN_SALT',   '~BtdndT%SEZ|-3*~a1?s<Bn+V}Rm.Ii6f)Yeunhri7X5{D|4idM2d!frAqWn[7#H' );
define( 'NONCE_SALT',       'F~=Ol@LGZ4Mh? MG^PThP}]JW,@ -/e`a,>,MaqM2Lus4_+}8>J&j]A0S+%.Xu7F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lp_';

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
