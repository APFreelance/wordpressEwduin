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
define( 'DB_NAME', 'sitioewduin' );

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
define( 'AUTH_KEY',         '@_>/;+{Ino4~3D4m;=vc@;yCZI`|5Jy+!nRFG)b(n/>pp jCD!$puNu`MJBE_]7*' );
define( 'SECURE_AUTH_KEY',  '>52;0~-_53q~9.J;;M@hI-Sb{7kLnKl6j2T4FC?przY$19Q+Zp(FXYOw-y=;ZDjL' );
define( 'LOGGED_IN_KEY',    'y)fCZBe_oxFKin],Q.ue@o +O3a(T<M+5iIi{MVYQFLI.17*SPY6< ++{1j~w<-Q' );
define( 'NONCE_KEY',        'Uh+_o_uCj;%typvX%;TKS3CFs*9)39RreB^7b;@Xa RsZP}UBJW.9,k#:ZgE0Rh?' );
define( 'AUTH_SALT',        ';;M0e3`px0VRogns~N_&?;e7(]7Vt`)<~m~&oWA9Wk$Vo5=o9}&!5R1f<`vUOwxE' );
define( 'SECURE_AUTH_SALT', '*4%Ok;xc7i@S#a {p2Wj4W0<RyE/-~/{SO7$zO;7-`}-F)R*2]`!3totchDp7ekM' );
define( 'LOGGED_IN_SALT',   '(O@N!Zus zZ[PLyl9iq/Sx_>vSt%f~K-KZfnF-/^]-r=Xk9nZP6nglO(g^K,c,d1' );
define( 'NONCE_SALT',       'zPonj5Y}6b4T{s]#[&K@Q-@=Cj(%Bk#e2MP#aqL?Px:c}oQXnk|v}]P#IJSRd*r=' );

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
