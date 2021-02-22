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
define( 'DB_NAME', 'ecomm-winter-2021' );

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

define('FS_METHOD','direct');

define( 'WP_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AkO3%OLfQf2L jKPy<7I5;R,pLG@Ww5{/=R5[)!PrH1Hj4bu,Z%RKlaqiEEm}O(S' );
define( 'SECURE_AUTH_KEY',  'MPw@l/$QSOnRi~T:=;~OlhQC#{b5hOvdH<y;,K1[-*:4HVUuI6GuO~gYU& Ez)<;' );
define( 'LOGGED_IN_KEY',    '}`7cM~4>#x0olZT?>C(~wZ5#Coe<d]E+*@r#E8Z|wdG]K4*=}OT,xCsj|OSdSnGa' );
define( 'NONCE_KEY',        'P td8]sH})S&ES?pK4b^qh$:XxZx$ss:Z+<(U?Bm)DW_iST/hXe`p&DHXVbrJ`Jp' );
define( 'AUTH_SALT',        '{B0lF yAQF2./IBt;jwdR:#UoqV?n_U8G7607#l|roh<<eCV=n#%fB.1Y#Q<N`5v' );
define( 'SECURE_AUTH_SALT', ',?[d[M?/P~p<#VZUAW7- fnKJR-;9nm<PGcas$KPWMTrdgYj_THbbz.v,IUTrdWV' );
define( 'LOGGED_IN_SALT',   '6q`dK<h;9WRY8FIil1-bylDp]TqI_^(#@si!hPs6w3|rvz d|8.O#arJ~=s;luM ' );
define( 'NONCE_SALT',       'dTI{f8KYdZH)4R$]QvBCG]j]ikAZgWEiRzHj=F_;*_EFEP^U[A46YV6<J^;dR(yd' );

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
