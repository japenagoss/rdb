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
define('DB_NAME', 'talento1_rdb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'talento1_rdb');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'P1UV9wiPizOFIZxs2PnR');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '~=RexnGjT.+(Z!23i>|(C<W)+SDbuWrL_OIK{,Qm& xBb-dtFY(;U(]l,:Usid#9'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 't}1>{d|xba:1ck,}:;v}fYvwdBZ|^-J~Du+VUiFTC=l6lKUbnF7MpT(0( JUo//O'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '}Bsf9rJL|Q0bR2yenzw;sq#0N1X3S->v2R~h-`0Jx(4<d0 5~yko#p2;yQj@j*,Y'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'e+i&!VnorDuelF:@|-%${^A^sYD<vV%Asa(}An,) E4q,V5twadE@x!1*}_jWRHd'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'V.gl#Js_!5R;$Bb.cB`x/5UKal[5FTS/^vyG*6^gh)!Px[uE1}O-]w&7l&TgjKuH'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', ']t+6]jd<XSHs<gH)dNl,4#@/|e<yf/>%s_r>1+ ETl0[Sq=mc{6UwhRg@?I6H&d^'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'Pp4+x{iQ+wZ%c7d=&?qFbgIsrZZ*)>Qck+<m75A<KDHl0k>ljAe>tdB^d?q.%V~w'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '`-oL/Z7`ro:|4F<{)Iswx<y=on?p#^%}s UwR6;xsUGDFzN{f4>tWlab0PM!HlT~'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

