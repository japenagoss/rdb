<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

get_header();

?>
<div class="contenedor_home">
    <!-- 
    ==================================================
    Info sobre la compañia 
    ==================================================
     -->
    <div class="div_center nuestra_compania">
        <img src="<?php the_field("imagen_titulo",55); ?>" alt="rdb auditorias marketing" />
        <h1><?php the_field("titulo", 55); ?></h1>
    </div>

    <div class="contenedor_items_nuestra_compania div_center">
    	<div class="item_nuestra_compania">
        	<img src="<?php the_field("imagen_item_1",55); ?>" alt="rdb auditorias marketing" />
            <h2><?php the_field("titulo_item_1", 55); ?></h2>
            <p>
           	<?php the_field("descripcion_item_1", 55); ?>
            </p>
            <a href="<?php the_field("link_item_1", 55); ?>">Ver más.</a>
        </div>
        
        <div class="item_nuestra_compania">
        	<img src="<?php the_field("imagen_item_2",55); ?>" alt="rdb auditorias marketing" />
            <h2><?php the_field("titulo_item_2", 55); ?></h2>
            <p>
           	<?php the_field("descripcion_item_2", 55); ?>
            </p>
            <a href="<?php the_field("link_item_2", 55); ?>">Ver más.</a>
        </div>
        
        <div class="item_nuestra_compania">
       	 	<img src="<?php the_field("imagen_item_3",55); ?>" alt="rdb auditorias marketing" />
            <h2><?php the_field("titulo_item_3", 55); ?></h2>
            <p>
           	<?php the_field("descripcion_item_3", 55); ?>
            </p>
            <a href="<?php the_field("link_item_2", 55); ?>">Ver más.</a>
        </div>
    </div>
    <div class="div_sombra_3">
    	<img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/sombra_2_rdb_auditorias_marketing.png" alt="rdb auditorias marketing" />
    </div>
    
    <!-- 
    ==================================================
    Info sobre la compañia 
    ==================================================
    -->
    <div class="div_herramientas clear_float">
    	<img src="<?php the_field("imagen_principal",86); ?>" alt="rdb auditorias marketing"/>
        
        <h2 class="font_myriad_web_pro"><?php the_field("titulo_principal", 86); ?></h2>
        
        <div class="parrafo_herramientas">
        	<h2 class="font_myriad_pro_italic"><?php the_field("titulo_secundario", 86); ?></h2>
            <p class="font_myriad_web_pro">
            	<?php the_field("parrafo", 86); ?>
            </p>
        </div>
        
        <div class="animacion_herramientas">
        	<div class="animacion_herramientas_pasos">
            	<img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_paso_1.png" class="paso_1" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_siguiente_1.png" class="siguiente_1" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_paso_2.png" class="paso_2" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_siguiente_2.png" class="siguiente_2" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_paso_3.png" class="paso_3" />	
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_siguiente_3.png" class="siguiente_3" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_paso_4.png" class="paso_4" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_siguiente_4.png" class="siguiente_4" />
                <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/auditoria_marketing_herramientas_rdb_paso_5.png" class="paso_5"/>
            </div>
        	<img src="<?php the_field("background", 86); ?>" alt="rdb auditorias marketing"/>
        </div>
    </div>
    
</div>

<?php 
	get_footer();
?>
