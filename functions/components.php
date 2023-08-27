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
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'about-us-styles', get_template_directory_uri() . '/assets/css/about-us.css' );
        wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'conocenos_styles' );

// Estilos para la página blog
function blog_styles() {
    if ( is_home() or is_page_template('home.php') ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/blog.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'blog_styles' );

// Estilos para la página frontal
function frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        wp_enqueue_style( 'frontpage-styles', get_template_directory_uri() . '/assets/css/frontpage.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'frontpage_styles' );