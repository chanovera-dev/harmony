<?php

function theme_customizer($wp_customize) {
    // Equipo de trabajo
    $wp_customize->add_section('team__data', array(
        'title' => __('Equipo de trabajo'),
        'description' => __('Establece los datos del equipo de trabajo'), 
        'priority' => 11,
    ));
}
add_action('customize_register', 'theme_customizer');