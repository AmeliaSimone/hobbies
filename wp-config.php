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
define( 'DB_NAME', 'hobbies' );

/** Database username */
define( 'DB_USER', 'hobbies' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '4t2vzjr>4NDj>RY<G] wYYbgT1P5Y}$0M3E9Chu-Bvj3M<bSs}>!pE2*ASQk|P):' );
define( 'SECURE_AUTH_KEY',  'gBWIK;!g T*Sfi9V>O[dg7fB+8xzDIw3eS9q~6zH1W.WG,f9,&(f{JLu?&uEXB7/' );
define( 'LOGGED_IN_KEY',    '=?^7S[si#RAU! }h;{A$r7?qG1{U%K&y6pLc/#7%;/sr7U1=I&@aJT{);>|^tLyD' );
define( 'NONCE_KEY',        '7zu2$4bqZxrLbxj.m4qM7qu8wpv@n5B|/HorA YahnSjNZ~{lNBE4<ki2=p<@s(g' );
define( 'AUTH_SALT',        'Z#,jVXaZT9A8LF,0ftwTUIE]/w(h-LE%_nbBpi:/fP.md<zK=wO=1L!YFC0Ag^50' );
define( 'SECURE_AUTH_SALT', ']Nhk]Ak>Z!|8|[@(EKmOX8hP%a`qy^)#5RI.ak|bHjDAzYgITIJqAf%UhS9&IO{-' );
define( 'LOGGED_IN_SALT',   '*?^(n;e}Pm7hq4<FUI]ga{d2p4n4a=6ejga.c~08kVt~zV<HS`xh+aL]>bS5!68s' );
define( 'NONCE_SALT',       'Q}vDwIjX&Y yW`:Zjn~*6z-zt1rf4m{t/jFQ?5l<h&N<60p>QC-HdSD7{r9@6m%H' );

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
