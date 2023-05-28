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
define( 'DB_NAME', 'project2' );

/** Database username */
define( 'DB_USER', 'abby' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'V#~s}LS Q12dN4V0aXpW:dx+?F)LLJ4H!>>|BOX?R(dAbfCQHK`66p^F>D+mWPZl' );
define( 'SECURE_AUTH_KEY',  '>N(_i$Kf,k%}~MNYAwT[9AR2)m:COhtsi;&I@EutFP@]`?<n>?`TcwP9Q0`V=kZh' );
define( 'LOGGED_IN_KEY',    '7Bh,73h*lAr6PIyrnV%3!<[+:PRVDU{5}ZLRamn*i3epIJ6 =wrAeei}_}>J.79K' );
define( 'NONCE_KEY',        'qMu9u]k7`4Jj.nkwW8AfpI(,<d;,pyQ6CTcrhq.kZ}~,T RvtMSOND96XFT}b,+,' );
define( 'AUTH_SALT',        'yiGz/rv&>d#0Bps5|jsDDa1#ik@BUlW`XDwnY84@xm, @cnL^CL@D$9HSdk-~!]J' );
define( 'SECURE_AUTH_SALT', ',.;^k+/1GzrTr6c^Tm6x#V|e7-Cop&w =T5[hmP|O6$WwTFEhjXuEv0l:&NQM^i|' );
define( 'LOGGED_IN_SALT',   'k&w4Pcy3Yh.BDD<.w+Hk=WbA^K:Se]#8s=aX!QcTr40Kb:&8wr:h gQ;`H;:W-/~' );
define( 'NONCE_SALT',       'E/L|[j1Jv$+1X@XX3(ShY+feY1g2e:q`31q+i&Wj8~5bWFN9]3Gpt{y4Jyl.K6=n' );

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
