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
define('DB_NAME', 'bounceektrampolinepark_co_uk_db');

/** MySQL database username */
define('DB_USER', 'LCN164583_ek');

/** MySQL database password */
define('DB_PASSWORD', '786budget');

/** MySQL hostname */
define('DB_HOST', 'database3.lcn.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'idW^h6u1(zQSyiSqYI)cHfxMs@t3C59vNFL5#(OWZo6WxB#&pSarC(q0XzfpIRpL');
define('SECURE_AUTH_KEY',  'n24^N3TtaPwFA!TdOL2h6iK4pjm9c3^bpBxVOZ)SpmLQUUifimeEdOSbmMlqEf(l');
define('LOGGED_IN_KEY',    'q%@0bfdgYIq&hMeMr%kti8pE%j#C3aSE1ZN!N0CW5mBzP(I3dLBI7gKEnE&5&Htg');
define('NONCE_KEY',        'S*gUvZv5N2ln3WiFPXICtB06b%vzvBo*R@t2PfVqB6wKq#9N74@1Bj2^(Vp28itU');
define('AUTH_SALT',        'Wb&Wwg@@%g0dCO&gpqlDOwk6%03)17xWH5gq*%7MzAwPX#P(Bw*!cGb3swGXI)7A');
define('SECURE_AUTH_SALT', 'efZeXoI)h@E%gkEV3FFaOLUb&YI4qmfo*Z4&do(fDMn*CbW1tXm(B%ZPUouWlnPe');
define('LOGGED_IN_SALT',   'QTA7oVH^VP0Bx^9(ZBg21ixIk)PL7f#gM73Jk*ByshqnfahPdOjqcBQ1Ht7VYPFd');
define('NONCE_SALT',       '1iVVsQY^3qYDj%5^hD#cdwfoVUeM*zp0mvCVtu4sadCcmAuYhDmpk!Ns4(P7H4yG');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '8c0f0GZxL_';

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
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>