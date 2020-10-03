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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '=&)^a@.h+^C1cGH$o0dVp_i:9BkB Q5qhQq:oBQF<epUC<Xx]z+MfvW]W6$93,R4' );
define( 'SECURE_AUTH_KEY',  ']zawN8Zh?jADEmm%n@/%2[_{[+u>NdacT}I^ay|1 9Z$oAzZ?!d}D3z3>|+x(mpA' );
define( 'LOGGED_IN_KEY',    '$J#ow4zNJ]_^cp})NSSx#[UTaR~QPQY&zdjj/nl!--2C{TM~j_%jG86T_IW1k->M' );
define( 'NONCE_KEY',        'Ib_<3Oex:|@d[Vr<M1$b]VC:Nptp:%b726h5z`!=b?$Ranw.|AGE.q=B;xkDUBXe' );
define( 'AUTH_SALT',        '?G4z[kKaU^M7c^u+Ni2>T7nL$*Oxto]rOn}2>ou-z5[qS6H+<n!q  GJYP)<)FB)' );
define( 'SECURE_AUTH_SALT', 'b2gHr>jt,IJaT$Kn-_KKZr`&BM&%DZF*Tl}#{_e|NQ&~IRVW-Wi<(g4{3jptdh7i' );
define( 'LOGGED_IN_SALT',   '3k?-%dT6~S{Q1R-|BY@GaaR3oj0>r{Ol&IhVOs)f(GUq&5yMc.+#?.Fzh,05NqM3' );
define( 'NONCE_SALT',       '.asg=}-zuI=5s}/GDtJlA&LJjU9vhIj*lnakEFmsAiF<QKI4.!U0Nn~zb08it=vL' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
