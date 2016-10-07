<!DOCTYPE html><head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
    <title><?php 
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    
            ?>
    </title>
    <!--Estilos--> 
    <?php 
	$browser = get_browser($_SERVER['HTTP_USER_AGENT']);
	$version = (float)$browser->version;
	if($browser->browser=="IE" && $browser->version < 9.0):
	?>	
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/ie.css" />
   	<?php else:?>
     	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />  
	<?php endif; ?>
   
    
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/bxslider/jquery.bxslider.css" />
    
   <!-- Archivos JS-->
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/bxslider/jquery.bxslider.min.js"></script>
   <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/home.js"></script>

</head>
<body>

<!--
====================================================
Menu top
====================================================
-->
<div class="contenedor_menu_principal">
    <div class="menu_principal">
        <div class="logo">
            <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/somos_lideres_en_auditoria_marketing.png" width="100%"  alt="RDB Marketing & Business Audit – Expertos en Consultoría y Auditoría de Marketing y Ventas" title="RDB Marketing & Business Audit – Expertos en Consultoría y Auditoría de Marketing y Ventas"/>
        </div>
        
        <div class="menu_main font_helvetica_neueltstd">
            <ul>
                <?php 
                $args = array('category' => 4, 'order' => 'ASC');
                $myposts = get_posts($args);
                foreach( $myposts as $post ) :  setup_postdata($post);
                ?>
                <li>
                    <div class="content_img_menu">
                        <a href="<?php the_field("link"); ?>">
                            <img src="<?php the_field("imagen_uno"); ?>" border="0" />
                        </a>
                    </div>
                   <p> <?php the_title(); ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="div_sombra">
        <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/sombra_rdb_auditorias_marketing.png" />
    </div>
</div>

<!--
==================================================
Slider
==================================================
 -->
<div class="back_gris_header"> 
    <div class="contenedor_bxslider"> 
        <ul class="bxslider">
            <?php
            $args = array('category' => 2,'order' => 'ASC' );
            $myposts = get_posts($args);
            foreach( $myposts as $post ) :	setup_postdata($post);
            ?>
                <li>
                    <img src="<?php the_field("imagen"); ?>" width="100%" title="<?php the_field("texto");?>"  alt="<?php the_field("texto");?>"/>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Sombra-->
<div class="div_sombra_2">
    <img src="<?php bloginfo( 'template_directory' ); ?>/imagenes/sombra_rdb_auditorias_marketing.png" alt="rdb auditorias marketing" />
</div>

<!--
====================================================
Contenedor central 
====================================================
-->  
<div class="contenedor_general">