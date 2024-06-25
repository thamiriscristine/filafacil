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
define( 'DB_NAME', 'wordpresscurso' );

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
define( 'AUTH_KEY',         '@TZ?{Uk#f$jUFW>zwYy&VBoC(2yr` (I|+ys1j$W:yd,0B_&mVrJ%me/kpTJTY*p' );
define( 'SECURE_AUTH_KEY',  '+;UFnu:5!W+#=fa0 aa6B_GeE`Q*|$rc?<?W(cXO(&TNb?e /?:u,vt,x{gaZmdt' );
define( 'LOGGED_IN_KEY',    ']_V#2l}D>9G-ErPV~8kq0gqrs :fyY#PCUK[`mCw;=UqWUhZ1{<U2NUS#Md6FFJ!' );
define( 'NONCE_KEY',        'l0.WaS/[NIr79EqgiN-uu./S)66SsO OA6{Jq)2u;QUU#6Knx}5HctZEa~LmMhcD' );
define( 'AUTH_SALT',        'c4Q&`4,8|lO%/EicDLYrX[+#z5EIndBvI]d#TE[[WJS2Mw:HPuR9OEU0wdm=HN~I' );
define( 'SECURE_AUTH_SALT', ';j!Tc..)Q5P9U2ZvvIF%TsCON~S6oFBs(8)/4^I*$;pcQ>`1) H4J=q7`.:d)6,U' );
define( 'LOGGED_IN_SALT',   'L*V{^f`-WF9G4{TQXe,8*,EQDWglXU/G}6fD KW7OOaI%ZEzT;t4h]U&^,`B=in:' );
define( 'NONCE_SALT',       'io|2Vmv%67oSS%|{o TwL(;^(iv$|]eRZnZjNQ$j/W_-G`<AXqGlu@tIs77#Wg`=' );

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
