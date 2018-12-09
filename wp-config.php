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
define('DB_NAME', 'wp_konocti');

/** MySQL database username */
define('DB_USER', 'wp_konocti');

/** MySQL database password */
define('DB_PASSWORD', 'wp_konocti');

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
define('AUTH_KEY',         '/S)aw[@{awu({&xz2QEV9XhO5KP=XxJLn wYc3gwbWAkL.>hw{Jk(HN[nZ=,,7i;');
define('SECURE_AUTH_KEY',  'c=Zr<tC9S$@Ti)kr[[O;[WpaO8D,]nx{uHk8W@2!w{&]Z2$O=M%O!TOwVe0De]<H');
define('LOGGED_IN_KEY',    '+n)uf!C*AsXGp3(V#c)vk/J_/a@rPCBNxY,Mv)]9JW,+}k2:._hNBi%:7R?<h*C=');
define('NONCE_KEY',        'h&^F187nmdh,[AI@>MYH]%tWS]Nok$8CUHF);2-W2k0,;LhB9Uo/K,S!;*5;3??&');
define('AUTH_SALT',        'j9rvj86[]0N`K~Qy}gvY a&*91@OgC5BRW1UNB4McG<%`8S5bl1fRMisFJ#k~ZHc');
define('SECURE_AUTH_SALT', 'BSH@|kBKBm+s#I}CzV} ^uGv@6Qm}|3 rkmq1WR!K0zU[{uv&q$gw x1,#}ziMJM');
define('LOGGED_IN_SALT',   'tO9dwC+<LEPaJxM=2j8ZvY97X+w%(?Q(?D=UN0!.T|VjW{!<4qHJ]+su-5^5g)fA');
define('NONCE_SALT',       ';4S+fd1g|!)FoCwyInB@Fx)%h5K^iwG{Y>VCIUhmcBJ!}Di@S`|kmMELH:^SJvQK');

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
