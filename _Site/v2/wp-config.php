<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'whatsinseason');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '7WzH}Z%dW}!Ho#{nQ4N/~86PC|Fs>o#Az)dV-]SUT/j?Ox+!uiRuEB<$acte<p>1');
define('SECURE_AUTH_KEY',  ':LOZWLWTz(t|t&>>>wY=81-Yny[hL``>g?8&--`Co*W IFSKFIDRpQ;JqF8u Vwp');
define('LOGGED_IN_KEY',    '3&|Q9TW}}GXbJsibE[TkDCd<Sl.UXG%Q-#*m1oPKJ`wg]3R#~%+r~DER-EK`(>77');
define('NONCE_KEY',        'N0hx<71IXjG;$ )Z]<9WjA:$~3/J{5<VyAp]+Rl+WnuYa~8oEZ]Z*yy6mp5Gg;bV');
define('AUTH_SALT',        '$MIXvLHk:HK-2zjIL+m[UMu#tSV`VeD/PgEs!jQ402wkc9p@..]diAxL)?{ub_)~');
define('SECURE_AUTH_SALT', ' re0r)6]QsFQsy)ejlmwWGEGrfLw||S{%kUL}sQcmknt6moo,:BbcD%Hc%ukauyn');
define('LOGGED_IN_SALT',   'W0zuho?_$999prl%>B4Jr/3Kiz^p2AAhqFbv%0;]0!96W?kVi~yUF(.Gi&0%zlUa');
define('NONCE_SALT',       'p0[#*6{dn~yg`,f`)|v6E4]2PX`l1yR^a*CWYr]?w(:{9SqiyqW`d{bQa|Z?Mh+d');


$table_prefix = 'wp_';

define('WPLANG', '');




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
