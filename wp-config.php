<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressproofofconcept');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql*J0s1e');

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
define('AUTH_KEY',         'PT/7Oc;zHtKaFN(p99-#w_LM#~9cJ-^`b_&%kGpQ5/^`+nnHhAfSujD:2db3h{-H');
define('SECURE_AUTH_KEY',  'z]$q!]XI+L>cvW-#WB]AwQE#bCF>j0;hi tznO/8v|/ZklKh|!3ac2>I#P*~wGE@');
define('LOGGED_IN_KEY',    ' L+|G%9U[BVzNHN3ia -o.|.^4c@iSo|VswWaaOB,N(KL 8Wa2TwBe|5wM2@l.Pb');
define('NONCE_KEY',        '{H<Dpe?TLGaUx NQ==zv5a|g;>K5dNw/A[-9(]??iQR4IQht~A=8@f]CVr-Ws2{(');
define('AUTH_SALT',        'QT]!o.eVY&0qk%NTDf21%WkB$VHpk9|cCW$`MngwMsJ[RMk91H&Wr3>n<{^{VZ!A');
define('SECURE_AUTH_SALT', '8Y6BA?OZ&k%K_j9-KOlt_~`Z2(<zsvU/HTr`PtUvFUIeR|9pOcb)%q2=XSp+L}}E');
define('LOGGED_IN_SALT',   '4:GghGJ%YCu?|0AJ.nK%v+<93zD:v$0$F~}]HEr0yZ  Wa:mG1Gel|U;gjE0UP.H');
define('NONCE_SALT',       'Ja;b2=OY-I-s&5JC(4SZ&DCD_|m|J<t-H@Lo[=78?gMz=Sg@K@c~GF.Vl*M-Z=tB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
