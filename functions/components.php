<?php

// Estilos para las páginas
function page_styles() {
    if ( is_page() ) {
        wp_enqueue_style( 'page-styles', get_template_directory_uri() . '/assets/css/page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

// Estilos para el template de la página Contacto
function contact_styles() {
    if ( is_page_template('contact.php') ) {
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/contact.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
        wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'contact_styles' );

// Estilos para el template de la página Conocenos
function conocenos_styles() {
    if ( is_page_template('conocenos.php') ) {
        wp_enqueue_style( 'about-us-styles', get_template_directory_uri() . '/assets/css/about-us.css' );
        wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'conocenos_styles' );