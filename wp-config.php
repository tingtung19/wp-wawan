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
define( 'DB_NAME', 'wp_wawan' );

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
define( 'AUTH_KEY',         '1#S@o?b|;va1gxsz;D-y+:zx8ehM:1W5+S(t8&|D4+MC-he!vp[ MT_0Kt3x4CcU' );
define( 'SECURE_AUTH_KEY',  '$>bUeUG:1>V%KtIH,:~/[[du*?lz2@BP5Pj@+*HD4Tsv#=@P[Epo{KJ%.1[Hcx-k' );
define( 'LOGGED_IN_KEY',    'd;P6Jt&%Le.ycV%-2f;&;bB2r&$RJKyGKUk!>{*Uto}CW*J]$y3WVh@}awI4T|>7' );
define( 'NONCE_KEY',        'jM71zI{p}S_#pr~f<dWT)HX.m,tlj}HxFsNR28je#[JQYOlnA^:^U~po4Ts}q|9m' );
define( 'AUTH_SALT',        'A8QN>n>Np,lK&*O^lx_9cPKt=?q%Hlh?l2j2f>)A&oEQaptgBfaz1p!^X.d$.?8/' );
define( 'SECURE_AUTH_SALT', 'd%t@(Gh|E6%xM#1,H~RcF[qb=P.In+GCrf!E_aSt_7Nq{?pv{ukE8N(vZ(3{Rzqb' );
define( 'LOGGED_IN_SALT',   'uO861vN|?T)VF_6,%A[*n)ZTt{N+6GdNI<vuuls4eeGh_tXPEE-K5dG>2PPGm5Ms' );
define( 'NONCE_SALT',       '-#;U;AuDz3HthNk3mZy],Yt/duVb.sB1uKq)~[rHhk6EiV &Kk)lX8Vo`*K%xk?b' );

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
