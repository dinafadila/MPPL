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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'coki123' );

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
define( 'AUTH_KEY',         ',|@)_qwgMS)>WF;#L9/*M#; UiPfMH}{*CSY!-Fk#L+CtnPfEib>5rd6x:$P/+K!' );
define( 'SECURE_AUTH_KEY',  'QbA@u$QS8eB]S$}z%m$2+<r.YR2kAf!/k3(Y?! .DvlFw( >=K;NOk3kz2P`33ok' );
define( 'LOGGED_IN_KEY',    'YD-bp/0>8p[D!JkO/(?82!4RB91I,mChw%^zu!9P9h|r,(eR2X6[>|l_QAhXsWnp' );
define( 'NONCE_KEY',        'J0.xtt-YK=]b{#nyMFhC1)3>cJ@lvn?}zSu3#~od?vv4m^jPP8|&dw.VaGnT/y^Q' );
define( 'AUTH_SALT',        '+{3m;@qz&]7?kpSb; bsCG?gsbWSE?PS dpiw<l.!9_x)qdRbw7w1s%iiJ!6F<yC' );
define( 'SECURE_AUTH_SALT', '52I8+fm$vWU{dzxi~^NWYU<rhU7:HF4n>zz8rM9XuI,1Y+cOY~G^,#5N/:X?4 ND' );
define( 'LOGGED_IN_SALT',   'kdH:J^Kh{1b~*fg}YBqxLu9h]vX)CuUg#8MB~s>Vz`kf$)oDLK5pr{sm3M>+Q~;f' );
define( 'NONCE_SALT',       '(.@VKG)7PIw; `V,` BzPBN0t e}Q[Y%l-b5vrqhz)r@(q?[M&c7@]#FUlQ1(TbX' );

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
