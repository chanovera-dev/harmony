<?php

function theme_customizer($wp_customize) {
    // Equipo de trabajo
    $wp_customize->add_section('team__data', array(
        'title' => __('Equipo de trabajo'),
        'description' => __('Establece los datos del equipo de trabajo'), 
        'priority' => 11,
    ));
        // foto
        $wp_customize->add_setting('picture_me', array(
            'default' => get_bloginfo('template_url') . '/assets/img/avatar-06-2023.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'picture_me', array(
            'label' => 'Mi foto',
            'section' => 'team__data',
        )));
}
add_action('customize_register', 'theme_customizer');