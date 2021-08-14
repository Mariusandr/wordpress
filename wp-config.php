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
define( 'DB_NAME', 'bestphone' );

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
define( 'AUTH_KEY',         '1o<UQ:N0~v2*&ZifH1n($7<u8Rzb>*}?B?hl_^:1>nlrViYg%CQe+QJ-1cEfG*fj' );
define( 'SECURE_AUTH_KEY',  'jJ6sb3vGDH~ee9Jdo33pto={T6PeXiG@3Gl0S9Wr 0I}<C8Z0_lQM+1ipcu;hA4;' );
define( 'LOGGED_IN_KEY',    '5`ZJmT6~SL?!l{Lwv^C/_7XLttZbOgQ-h8dJZ8qJi]#s;wsC/0-qJn`og=fBmNeJ' );
define( 'NONCE_KEY',        '6XdYu=xK(s/=hmz)Atuc)HotQm,!I0q#5]e6zdebvB5uA3g4[LfBef5r}](.ZBQ/' );
define( 'AUTH_SALT',        'q10uUYmBl0[sT.=ld|I3&Q$m*V pN61SG1|L<UB}`<Y0$kG`ru.-f[N5}b#co,M<' );
define( 'SECURE_AUTH_SALT', 'l/#LccC8GtH(E0E$^i0-6e8!Ru5w/R+PUdijmeJt`xPr2GlXFV%rxZfi!:4n[RxX' );
define( 'LOGGED_IN_SALT',   ';(Bi*9<hM&!(u(00>JY7RA(IE%&l4X1MH8K#?Y#q/d<o*wW!PHSmQm8dD{/{WyA-' );
define( 'NONCE_SALT',       '|h^=cj,%qp:{tQ?XTK!e8v4t{P93zuk??Wx;o_PZIsnk8z=d>] 8)SVVmO2{ER!o' );

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
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
