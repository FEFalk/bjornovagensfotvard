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

define( 'DB_NAME', 'bjornovagensfotvard' );



/** MySQL database username */

define( 'DB_USER', 'admin' );



/** MySQL database password */

define( 'DB_PASSWORD', 'root' );



/** MySQL hostname */

define( 'DB_HOST', 'localhost' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );



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

define('AUTH_KEY',         'iJjmK9B9yyg8A0r8o4zaRLC6uRYUyJxvMDSZ6Fh6lnKGxqbTxylF15dVKOVRghR0');

define('SECURE_AUTH_KEY',  'x9pz2LsBxsIdjgljmMJEjJFJQEjc92wjp0YEwZtOow63XZunmPiBP9hZzMLusGIK');

define('LOGGED_IN_KEY',    'YjqmTziNc1IYpHhqIdIMxemkbmsteZLUfFSKggOu40j5YnWFfxyoXHEwVgHLkCZZ');

define('NONCE_KEY',        'S0J9eQffOvwUFHy8JoLl8Fo1BRgTHUxMGKZa2qIWBrMewSNo4dJzIT6vT5kTjkDj');

define('AUTH_SALT',        'SHXj9X6dkun0QqIBSBq0rscanudmZwvcDMTqDQkTOkq2OJVnA2u7v0g2ZBcvU1Ky');

define('SECURE_AUTH_SALT', 'oTsOzUIwRC4zgu4cx7DwAEvimc22j1mhevSQxiA9g83Pb3iPsGTQq49oQGV3QnSP');

define('LOGGED_IN_SALT',   'AqjOVGDIyVsQ7e0uZdAzu334HusqNSbuPDsMafHu4QR6eMtkpUHJ4C3uLlg4MDKO');

define('NONCE_SALT',       'IZGgefYbUNfmb0PEONV272E3glSuVM6BQfwpv0CP5FbSbXkq71j8a2a6JBzfLEv4');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed externally by Installatron.

 * If you remove this define() to re-enable WordPress's automatic background updating

 * then it's advised to disable auto-updating in Installatron.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}



/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

