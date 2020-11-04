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
define( 'DB_NAME', 'angra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'angra_mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O*UB+!<VF$sM+;1]@8#<@}[xZT`<JD@)qSiV;7uEsFZtD|D`,0+vwcIy[)wga$m,');
define('SECURE_AUTH_KEY',  '{0;L@*01+DWtFy%ekh>,/I-]$%2#)>4_;|A0$2,QQC,=:wXV`EK~Or4y-Z$P3#no');
define('LOGGED_IN_KEY',    '$?w5~OjiMiuLBjuANr,fLK5jJX0vMf+>OoV3HA-k9zEB69<J:vy+[FKkY h]X=%~');
define('NONCE_KEY',        'bc_>Eo{rZ7>69@G{&gQ2EmG{rE3,W^vaH+Hk5#VZ3(tMY7}%#v5vpO+h~aQEcFs$');
define('AUTH_SALT',        '+ujVY|_xY^GUfnuspWr8dxa4TTks3{ /z[*F.rpNRP+02 R:_W1X8^>NyckU(5~_');
define('SECURE_AUTH_SALT', 'Y,!)ylI6 `UA2OB,|^E]DnTho^^>+O?3BL|$Z+#6]-yai7oNy&hg)5Br.am[N7,O');
define('LOGGED_IN_SALT',   'MI`-osp+GLi#~B^Er9he@i+..]PAOGBdm7f/A_#vEpc:rn.pYXt+;!2o^OO[oR8}');
define('NONCE_SALT',       '%f}cA iwFQ!:|,k;-T>xN-=44esPb}+smqPyxH&SWN3rYzrH=~0;)NM3ob*+|LIr');

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

define('WP_HOME','http://localhost'); 
define('WP_SITEURL','http://localhost');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
