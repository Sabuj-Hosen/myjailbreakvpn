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
define( 'DB_NAME', 'Jailbreakvpn' );

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
define( 'AUTH_KEY',         'FvBm,IR4_5Hr6u>R=LiANni[1b=.4Zx=g`wrF%if5d8#tE(=C&b]di`.OCvh6Lj+' );
define( 'SECURE_AUTH_KEY',  '{e9yZK#u&Q(0VCYs6B*(wTK[W?>Fp `6B0,*3wD)@2?g!)>N#p&uBSlAd}8 %J36' );
define( 'LOGGED_IN_KEY',    ';ONhqOT/ 0YmO( Z4&k8 0GNn`Y(V++=. 0XwQXgF;r=yegwL8ib8v/y^19#If]/' );
define( 'NONCE_KEY',        'f^FLduB>]//l^jJ/e@{~sKAsx |`UQ0qe6{g;F>$orvntdv3a8=oTsy>|-_&FT*B' );
define( 'AUTH_SALT',        '47Xg}3LxNxWH2Hz@SCS Y{=qjEd[73Lz}T8{?57#Y>fq%zLvhZQSrDN*b0bUF#@s' );
define( 'SECURE_AUTH_SALT', 'X9TUYx4S4[[N-]L+Olm$NiL&BG2MrS9h^J6nfV>E&B=(xop|leu0TlEPCp<*-]>:' );
define( 'LOGGED_IN_SALT',   '>[!_EjBPcZ4gZ5pt+QP23+|:qtfR~ovQpMUH~xF<;BVLwy*E> &HEEbM+W;/t9sK' );
define( 'NONCE_SALT',       'bir`O,l0r_kU-*/BbeIqbflc?exGdEY=^V7[?{_6+9X{6~P4ha(g.s_E3@ao$r>M' );

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
