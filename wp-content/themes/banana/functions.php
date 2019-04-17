<?php

// eliminando ancla de enlace leer más ...
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

// añadiendo soporte para miniaturas

 add_theme_support( "post-thumbnails" );

// registrando estilos para el tema 

function register_enqueue_style() {
    $theme_data = wp_get_theme();

    /* Registrando estilos */
    wp_register_style('bootstrap',
    get_parent_theme_file_uri('/assets/bootstrap/css/bootstrap.min.css'), null, '1.0.0', 'screen');
    wp_register_style('bootstrap-grid',
    get_parent_theme_file_uri('/assets/bootstrap/css/bootstrap-grid.min.css'), null, '1.0.0', 'screen');
    wp_register_style('baguetteboxcss','https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css', null, '1.0.0', 'screen');
    wp_register_style('fontAwesome',
    'https://use.fontawesome.com/releases/v5.8.1/css/all.css', null, '1.0.0', 'screen');
    wp_register_style('googleFonts',
    'https://fonts.googleapis.com/css?family=Lato', null, '1.0.0', 'screen');
    wp_register_style('magnificPopup',
    'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', null, '1.0.0', 'screen');
    wp_register_style('aos',
    'https://unpkg.com/aos@2.3.1/dist/aos.css', null, '1.0.0', 'screen');
    wp_register_style('main',
    get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');
    
  


    /* Enqueue estilos */

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('portfolio');
    wp_enqueue_style('baguetteboxcss');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('googleFonts');
    wp_enqueue_style('magnificPopup');
    wp_enqueue_style('aos');
    wp_enqueue_style('main');

    }

    add_action( 'wp_enqueue_scripts', 'register_enqueue_style');

// REGISTRO DE SCRIPTS
     
    function register_enqueue_scripts(){
        $theme_data = wp_get_theme();

        /* Deregister Scripts */
        wp_deregister_script('jquery');

    /* Registrando Scripts */
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.0.min.js', null, '1.0.0', true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, '1.0.0', true);
    wp_register_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', null, '1.0.0', true);
    wp_register_script('baguettebox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js', 'jquery', '1.0.0', true);
    wp_register_script('bootstrap-js', 
    get_parent_theme_file_uri('/assets/bootstrap/js/bootstrap.min.js'), null, '1.0.0', true);
    wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
    
    
    /* Enqueue scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('smooth');
    wp_enqueue_script('aos-js');
    wp_enqueue_script('baguettebox');
    wp_enqueue_script('bootstrap-js'); 
    wp_enqueue_script('mainJS');

}
    

    add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts');

// agregando menus personalizables

function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}

add_action( 'after_setup_theme', 'menus_setup' );

// Custom Post Type - Secciones de la web

    add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Sesiones',
            'menu_position'         => 4,
            'menu_icon' => 'dashicons-admin-media',
            'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
          );
          register_post_type( 'sesiones', $args );
      
    });

    add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Eventos',
            'menu_position'         => 5,
            'menu_icon' => 'dashicons-calendar-alt',
            'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
          );
          register_post_type( 'eventos', $args );
      
    });

     add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Bandas',
            'menu_position'         => 6,
            'menu_icon' => 'dashicons-microphone', 
            
            'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
          );
          register_post_type( 'bandas', $args );
      
    });

   
//registro de widgets

    function dl_widgets() {
        register_sidebar( array(
            'name' => 'Widget Footer',
            'id' => 'widget_footer'
        ));
    }

    add_action('widgets_init', 'dl_widgets');

// CONFIGURACIÓN THUMBNAILS

    function thumbnails_setup() {
        add_theme_support( 'post-thumbnails' );
      }
    
      function dl_image_sizes( $sizes ) {
    
        $add_sizes = array(
          'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
          'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
          'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
          'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
        );
    
        return array_merge( $sizes, $add_sizes );
    
      }
    
      if ( function_exists( 'add_theme_support' ) ) {
    
        add_image_size( 'rectangular', 400, 150, true );
        add_image_size( 'portfolio-home', 465, 250, true );
        add_image_size( 'square', 400, 400, true );
        add_image_size( 'post-custom-size', 800, 600, true );
        add_image_size( 'custom-size-blog', 400, 300, true );
    
        add_filter( 'image_size_names_choose', 'dl_image_sizes' );
    
      }
    
      add_action( 'after_setup_theme', 'thumbnails_setup' );




// FUNCIÓN CUSTOM LOGO



function config_custom_logo() {
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ));
}

add_action( 'after_setup_theme', 'config_custom_logo' );



      


?>