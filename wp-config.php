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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'book' );

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
define( 'AUTH_KEY',         'UAA/EMT.;l%3=EJENgOovFw2c>K<TOs(@s(dh1yDyiM+9oqdr+kl[EHMqn|Slrx(' );
define( 'SECURE_AUTH_KEY',  'Wy=StJ1|*4K,;]fatH.CqPK:Ca0NB|Bd2U7K+<iv.kI`/(YYpD}0oe5UAWw4%nCM' );
define( 'LOGGED_IN_KEY',    '!UCK R9i?Ocaw|?twPkyR/$/`8M;8x=(T[2FQPJnwt|q_[P$<`}Ppr2o}Wk:O[N6' );
define( 'NONCE_KEY',        'pif/_SSD/c68b#=i%X(czWD*~QE6CC[(yrnn6W>md,3K7`whS(nY.(,pH~9S=N!O' );
define( 'AUTH_SALT',        '?bh.*:)40OY~?nPN=UZB7CqC{k~J:2c*hn8WgFWmb|bt9ST,9(7iNSnJ?C_JKl.C' );
define( 'SECURE_AUTH_SALT', 'O#a r^HHE@iV5;vOs!ChRbL;rnLDwkpK87?y`bxe3`%wLsi[M*d9-7|nJP$(5!09' );
define( 'LOGGED_IN_SALT',   '!x$/$=k@{$sBV}3VS$:cXY,7)>Y9)XUU4Qq]m@q@8@fPPVmy$GVwC-8pC0W+g2]Q' );
define( 'NONCE_SALT',       'b5POd?EM_=QwqHIZThK@V(0Pt?6m8E|m~@_k4gO2E{i~*>x}4{0Fr)NkE~-7_<h3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bxrv_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
