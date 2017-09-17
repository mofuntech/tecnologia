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
define('DB_NAME', 'db_wordpress_estudio');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'M!lP;R[UJ+RXLzM/*tz=IJ}Cv3D6sdB?A0jdXke0V[f.;f=>oUyZ^h=~GOd#h`&K');
define('SECURE_AUTH_KEY', 'H]%/co{ud,!O4TA$v7!t:5GK5+~O!MdGhAL#zd/$wZz2Ilxiw/(Ee>SR!KM,n<yZ');
define('LOGGED_IN_KEY', '4C}% TP.2lH uK-zO;%YA18pd):imQ<BvLj$)V{pXRou27E3P#fL#8E(:BZkMD/4');
define('NONCE_KEY', '0&-/9OB|44w8={py`f47yxO)/;~GT-U2?Y|j[RKQ2XD>W)LF%A!h1r~IO+H/C=OT');
define('AUTH_SALT', '(N*c>}iAoLLn8bs mV`lJT?L,yfks&zfxrFGyc++F )W<no=eVs4@d3]~$]c->zZ');
define('SECURE_AUTH_SALT', 'Qn%rN{)lJr6Ir-Fxrs^A#p-t8f<R08l&X{!X8?YJDWJb,)4yk`GVmi6cbO2:|t3|');
define('LOGGED_IN_SALT', 'sD{|`Ym:.V|2L6t8d9X2/k~55R2zuaGA4N9bK)%>Q{N(+_f/*SCINq=`kwE9iCx_');
define('NONCE_SALT', 'o) UA,=|x|#qS+9;*$]<=wnl.6CMv/}*__JI( Z:Q#$;_2j6uw]&[QZGoApRzCjb');

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

