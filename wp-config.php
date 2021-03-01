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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '>>RG(S|fU&|S6!C}g:PLb*1x7E4t&2z.nfj-5FTZ:J|oWZqtYmU6(R;~,URZ>p-$' );
define( 'SECURE_AUTH_KEY',  'mQ0b]34KPGVJ+NoW#Jxi9-4m7t^Z3r2:o[$T:|x,5f/*us_spSh_)Lat7|Cu[r*5' );
define( 'LOGGED_IN_KEY',    'Y,^g;`O>pf]#0/OKE:KI_!RkF:hL2m,m5)z6jq__twVKeSqtK6B4h?n>rxUTS}>=' );
define( 'NONCE_KEY',        '{SiVkHCL97S+FQe?(FX|V|H_|W%?B}iZdQo2J5sP-?vi}PjSyWr.7>&d1GPEN ~.' );
define( 'AUTH_SALT',        'kzqNGrl?7,*#<b0=ydk0:DZMJ;_,??n70K0DIppu<u=2(#PzKrrcIh90g-TvUSgX' );
define( 'SECURE_AUTH_SALT', ';5ZTPFaM<& INGk.nW>m1^v{Dv;}}aDPu7mwo Uo^]Q]MZZdbM[~mq2svZuz-2Q{' );
define( 'LOGGED_IN_SALT',   '.0SA;|SvDgf`v1t?sj!JX`u/t<{c-[4wwlNs^Q?Z_Z ]QioRe0S7Z>NV&@m&$w)Z' );
define( 'NONCE_SALT',       'Ga`6{H5OIcA:tjy<73dM;c=bA OA5N]tp[(8*ISV>UFje]yuQX`I.O|@k-4)Z/DO' );

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
