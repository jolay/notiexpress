<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'notiexpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'demo');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-_X7}^Crd*9s/`+JZx+<DT7/VE*T]S;Qa{c5#lP|:P-o0UN>{(eb}~Wj$+On.xQ8');
define('SECURE_AUTH_KEY', 'f}GET!rMShr|*jgLg4f?Tug?(}xzyLAm2wLEz{2I40f$W C|-7_gmF]It!4qoG D');
define('LOGGED_IN_KEY', '3gRML7Tlr.,xF~UFgO+m^Uug?.kfPj=dYo 8hgFj+zV|8eq:/}!=}oUAl&,d@V+H');
define('NONCE_KEY', 'fX.2qpt+d^CqqkI~kzrpEm%p-TC?WOSY|-=ql6L^6~puwF,oA{:YCB^i}:f*K+LL');
define('AUTH_SALT', ':#E>=F($lcwiwklb%6{0*h<63qN|b^jXoVtR]i)s>bs ,CF*Whwex[=gb*v[-~rk');
define('SECURE_AUTH_SALT', 'Tpn-~)R($1Fj;vzHL-q*0q}a&xr]|G&*0v($;S6=gxJ i ;-*|1Gbp9tC*y0-V|A');
define('LOGGED_IN_SALT', 'Ng~#d]w!#Kq>Rtm[SE*k=[)$?`Lr:)|}JPIqT|-WvWhcGjq~j<i)nNuk$g-D9d}E');
define('NONCE_SALT', '1,~PA$B.JM`w$({Ki+av$.-_fLcu-mJt+0TX=:H.<Bv?KxsJJ|ruvzBi~Msz5+,6');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

