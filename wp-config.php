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
define( 'DB_NAME', 'testdb' );

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
define( 'AUTH_KEY',         'cj04jD!>(ChuXh_~-QpR*IXX6jv-3m59 hd:7I+JXtbapNK_9P ww-)iV-!4MYI:' );
define( 'SECURE_AUTH_KEY',  'u!]_[L-nvwu`S0k`;JqO3W$_p%e[vw$YEWapJM=K)i|!x6*wn0Hbg+W1G_`=VYNm' );
define( 'LOGGED_IN_KEY',    's9XD5lM@[l(:+^IoOj#ptMMq@+0[RFr@NwQSd|3]|mjy>Sgo/;B_i4vX4+CgRBHG' );
define( 'NONCE_KEY',        '&NMx<L29JpP3VV`>u?GMivQTgt9}1HE6c^DU^V?0;rj*3PO6L-eP>%jysBv:Y@T]' );
define( 'AUTH_SALT',        'VA9MSnJ%`0VR12VolxiEP.Nmspt~D6=kJk[lqo/Qih4vm_M4K%1V2]2t,F0KjXmB' );
define( 'SECURE_AUTH_SALT', 'M!g.1r6?}B .w4CL#ty_mRi<Pp:T+V%w8*gN&!(3}FU:Y>eZkayvfW9j)]2:Oe@:' );
define( 'LOGGED_IN_SALT',   'l<E2SSWYVfq?{*$#2J/}qB|omcBA+mk,d3B>;XgZorMd|EM%JhIRDjf(4TyE1PiH' );
define( 'NONCE_SALT',       'X-tI0qfO#3T+VycG$kChV[&>t:y0Jspn7A&U<E+DK3Xtkxq38e.#O]fMU=XL5Ohe' );

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
