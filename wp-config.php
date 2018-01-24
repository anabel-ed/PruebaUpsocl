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
define('DB_NAME', 'pruebaconocimiento');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'yoselyn');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '22520676*');

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
define('AUTH_KEY', '@3sr?Y>$Uv%[Nz^xs0s/V=3hUX]>WL!pCLI:S+1N17gP 9cs89/UX}?l1(U|c%(Y');
define('SECURE_AUTH_KEY', 'Tiq=8PYg0[ 1 P6V}+Stz%WN%9?vo?~~cI_- dC=x&b~|LWBQ]76(d,432tOD4+G');
define('LOGGED_IN_KEY', 'J3^>B;Sj(GZ+9+z0C`IpQ3IdOYV[VdAvzu%^8!D-7gOYmlbEG0#5W/,_Gi(TlZL`');
define('NONCE_KEY', 'a=z yX_B<tVNl0M-%nE6H#7r@_kqk-tt,2m3/KCi~PqaJ56|15{10tM{`?|{LglQ');
define('AUTH_SALT', 'H3|8J!TY1HtN7sm[V{.wydsMwp3Yw1]YZ`y|>iJ;$6d?=G{H#q7/QiM&9K9JZiaI');
define('SECURE_AUTH_SALT', 'j;=*j{GE+dv]$<Bb%6b,^E1Y3={7#fv[IF.+_>.nlbKi}8[5ZA,[f AVP <nNW/7');
define('LOGGED_IN_SALT', '^)}X]?G3v[*6T]^12FP+j{P,XcgY{|VoU2HQSm$euy(usY+ox~i bKg]0#+0U(vX');
define('NONCE_SALT', '5!(_E+;m9lu4D[*`}WU1`a{{:/nrE[01(HwNFETMXFHOeD|+f^4Hh1$uOQV[Q^b$');

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

if(is_admin()) { 
add_filter('filesystem_method', create_function('$a', 'return "direct";' )); 
define( 'FS_CHMOD_DIR', 0751 ); 
} 


?>