<?php


 add_theme_support( "post-thumbnails" );

function register_enqueue_style() {
    $theme_data = wp_get_theme();

    /* Registrando estilos */
    wp_register_style('bootstrap',
    get_parent_theme_file_uri('/assets/bootstrap/css/bootstrap.min.css'), null, '1.0.0', 'screen');
    wp_register_style('bootstrap-grid',
    get_parent_theme_file_uri('/assets/bootstrap/css/bootstrap-grid.min.css'), null, '1.0.0', 'screen');
    wp_register_style('fontAwesome',
    'https://use.fontawesome.com/releases/v5.7.1/css/all.css', null, '1.0.0', 'screen');
    wp_register_style('googleFonts',
    'https://fonts.googleapis.com/css?family=Lato', null, '1.0.0', 'screen');
    wp_register_style('magnificPopup',
    'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', null, '1.0.0', 'screen');
    wp_register_style('main',
    get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');
    


    /* Enqueue estilos */

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('portfolio');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('googleFonts');
    wp_enqueue_style('magnificPopup');
    wp_enqueue_style('main');

    }

    add_action( 'wp_enqueue_scripts', 'register_enqueue_style');

    // REGISTRO DE SCRIPTS
    
    
    function register_enqueue_scripts(){
        $theme_data = wp_get_theme();

        /* Deregister Scripts */
        wp_deregister_script('jquery');

   
    


    /* Registrando Scripts */
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, '1.0.0', true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, '1.0.0', true);
    wp_register_script('bootstrap-js', 
    get_parent_theme_file_uri('/assets/bootstrap/js/bootstrap.min.js'), null, '1.0.0', true);
    wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
    
    
    /* Enqueue scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
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
            'label'  => 'Antipasto',
            'menu_position'         => 2,
          );
          register_post_type( 'antipasto', $args );
      
    });

    add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Ensalda',
            'menu_position'         => 3,
          );
          register_post_type( 'ensalada', $args );
      
    });

     add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Sopa',
            'menu_position'         => 4,
          );
          register_post_type( 'sopa', $args );
      
    });

    add_action ('init', function(){
        $args = array(
            'public' => true,
            'label'  => 'Pizza Tradicional',
            'menu_position'         => 5,
          );
          register_post_type( 'pizza_tradicional', $args );
      
    });


    //registro de widgets

    function dl_widgets() {
        register_sidebar( array(
            'name' => 'Widget Footer',
            'id' => 'widget_footer'
        ));
    }

    add_action('widgets_init', 'dl_widgets');








?>