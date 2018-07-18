<?php

/** Enable W3 Total Cache */

define('WP_CACHE', true); // Added by W3 Total Cache



/** Enable W3 Total Cache */

 //Added by WP-Cache Manager
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

 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/u393031784/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'u393031784_vylyb');



/** MySQL database username */

define('DB_USER', 'u393031784_dypyp');



/** MySQL database password */

define('DB_PASSWORD', 'zaXaXySePe');



/** MySQL hostname */

define('DB_HOST', 'mysql');



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

define('AUTH_KEY',         '8PmS1f9YkjwVuUfWvwSSt0NIxJMIivhLD8fdF8pgeaFfZkNb94d0mnl4JO7ZX2Pd');

define('SECURE_AUTH_KEY',  'Cc0iCrxqULiyO4D6e9oxwV0nhmiBIvFPDWx3WqOIjJrHA2crcQSntFiuHHkQZC7b');

define('LOGGED_IN_KEY',    'MSDQFTMHssJtNe3S2urkfoB859vBYxwY0a2K5jcqqpi1xmkrVFDOMdhL6d3Ksb3X');

define('NONCE_KEY',        'OesLD61wysYZVSfA7IOs5MRvYMirD0RZqzMZkxKy0dih96LdOaP7bqY0Oqg1uBaF');

define('AUTH_SALT',        'LG0zDuHSzxEOmsbxqB69tsDcioplXG6vdrQhqLtku1QyoY0YXf7o6H2UQ3eCZ3AY');

define('SECURE_AUTH_SALT', 'H3uvrJ3k8BnAldPa1E76v3QcDjsNmRXd35q1mTZJIUceNjit4r0CeSAJ1IMd9DBA');

define('LOGGED_IN_SALT',   'Zp03m4ALsbk0bplffwtHrpETnpzx7QTjtymikyv8yR5lDQOrSdPrTjD87WK55CNq');

define('NONCE_SALT',       'HYIx7zNVMhnaVUk5GeDmNSFkSRmFtg6hr8euGnoXCcI6OT59TMyOei7ysvOl4Y03');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'alez_';



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

define('WP_ALLOW_REPAIR', true);



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

