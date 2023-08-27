<?php

// carga componentes en el header
function load_parts_header() {
    
    // Estilos globales
    wp_register_style( 'global', get_template_directory_uri() . '/style.css', '', 1, 'all' ); 
    wp_enqueue_style( 'global' );
     
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes en el footer
function load_parts_footer(){

    // JS de efectos en la cabecera
    wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', '', 1, true );
    
}
add_action( 'get_footer', 'load_parts_footer' );

// Anexos al customizador de Wordpress | colores
require_once(get_template_directory() . '/functions/colors.php');

// Anexos al customizador de Wordpress | iconos
require_once(get_template_directory() . '/functions/icons.php');

// Registro de menús
register_nav_menus( 
    array(
        'primary' => __( 'Primary', 'renata' ),
        'contact' => __( 'Contact', 'renata' ),
        'about-us' => __( 'About Us', 'renata' ),
        'support' => __( 'Support', 'renata' ),
        'politicals' => __( 'Politicals', 'renata' ),
    ) 
);

// Agrega soporte para los siguientes componentes
function theme_support(){
    
    // Carga el título de la página en el head
    add_theme_support( 'title-tag' );

    // Permite agregar un logo personalizado al sitio
    add_theme_support( 'custom-logo' );
    
    // Activa las miniaturas en los artículos en portada
    add_theme_support( 'post-thumbnails' );
    
}
add_action( 'after_setup_theme', 'theme_support' );

// Registra los sidebars
function widgets_areas(){
    
    register_sidebar(
        array(
            'name' => __('Reviews','harmony'),
            'id' => 'reviews',
            'description' => __('Reviews area','harmony'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Blog Sidebar','harmony'),
            'id' => 'blog-sidebar',
            'description' => __('Sidebar Widget Area','harmony'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
}
add_action( 'widgets_init', 'widgets_areas' );

// Estilos particulares
require_once(get_template_directory() . '/functions/components.php');

// Customizer
require_once(get_template_directory() . '/functions/customizer.php');

// Delimita el tamaño del excerpt 
function limite_excerpt($limite) { return 15; }
add_filter ('excerpt_length', 'limite_excerpt', 999);

// activa woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
}