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

// Registro de menús
register_nav_menus( 
    array(
        'primary' => __( 'Primary', 'renata' ),
        'contact' => __( 'Contact', 'renata' ), 
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

// Estilos particulares
require_once(get_template_directory() . '/functions/components.php');

// activa woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
}