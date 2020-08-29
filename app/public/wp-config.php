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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xCSeJEwIe854wj8ImeBegSg0n1vrMUGGE01XqTq1Anrnzb4UJL9SiCyszy16LD8GJ2Al0DA7e9ZVBahNWwV98g==');
define('SECURE_AUTH_KEY',  'SqrEpcePuDasHz9wmyCHEZB3oNkikTdXTnostRmTsYDlxrRqSUcCZuQ61NlofNiy+5gZlTsQaZ24apmI/9gw3g==');
define('LOGGED_IN_KEY',    'p5MntUzQ6EzFa+6WhfZofrmdQVGbFO1/FQ6kqwEjoMdKNRCN8kgr9anAxe3IU0KfK9jZBTDYjUnuUlaFlBot1Q==');
define('NONCE_KEY',        'EPAfEnLpKTWa5UYd6pU8pD0lplH3eUT9/5t81MzjsgBemr3Wu3ktBgD2ka3RLxTv0MROy2p3rz9xnVYeWatrUg==');
define('AUTH_SALT',        '6oqTWLHY2x8ckdRRSeDXKSZ7NC4ePlhOzthR9+mHyWx2yLrU85PcKZRmmftOg1O8EDCCSwKIgPvuvx8YuyPJoQ==');
define('SECURE_AUTH_SALT', '2wNdG+JVhEm9ptQdVchDk6iZqNWrgZeqwXhkL9WEx7V5ByfZsWAzLEQWWFEuAxeRC+YU1MhdPkElmCVX1RpE4w==');
define('LOGGED_IN_SALT',   'h9DJL0Ncs69a0P2TmPjFmArJmjhiOwLSyOZnJBnlTG4rDmwO1Bo/qGsdU3BTf8/dTmc19zxa1TyLUa8X8PTcQQ==');
define('NONCE_SALT',       '65WsYMsvoQyI8wBbXCirHx382yyi/UIcqWeYIky9aFZi3IjJ8ElIErf7zu5A5mrzV+1P3dK+Lvxlv5tovthwIQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
