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
define('DB_NAME', 'wp_ikan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(XiFqk=<R$1 rg$SQzke%a$JUrR3^1lB4H#W#E8=TLTMhQ(r<2~;r,o(O5(Lh?vz');
define('SECURE_AUTH_KEY',  '6b/fj7<o>G2|>hc}h![EgoD!MVZNt<.MpLV9=TB/{6X}p$JJ|78BigqfNJ`H$[N%');
define('LOGGED_IN_KEY',    '?,#}Jh<cfh$BVoHHo^2c| S3kvWeN,m>L9(lpC;=M4G9 `s$&`R1b%GJpC*D^pn9');
define('NONCE_KEY',        'sf*d90^Vx JWe7H?|-2iEFs0AaQK%J`mX!#J#tTo.VtKflR[Ju)),Y52zI j`}g?');
define('AUTH_SALT',        '8A@SoqSB|#m$3anu! ydeGHt-:[CX_CLx*qf|T=D5z%~rw+Xb{;;RGu|OQNE|2,{');
define('SECURE_AUTH_SALT', 'Mi$@sd<N$&o%o)sf)mao`Ex_Y,t-7RB0;z2Sf Vv~Z,;VykGy~jFP[hw]*?#!@u.');
define('LOGGED_IN_SALT',   'twK11*Ffu*Y.AC&3i]|]2W`x3UUvK]j4HVgYdF&q&H2&!{cLxUhnU?faC*1/ro;,');
define('NONCE_SALT',       ')M~83aQr&+zgC~5ciU.R>ui6~<zeJoY|9*{ZK~LtR[WS(LL`1c5LU.5af&YWwz^d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
