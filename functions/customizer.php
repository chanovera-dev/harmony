<?php

function theme_customizer($wp_customize) {
    // Equipo de trabajo
    $wp_customize->add_section('team__data', array(
        'title' => __('Equipo de trabajo'),
        'description' => __('Establece los datos del equipo de trabajo'), 
        'priority' => 11,
    ));
        // servicios -- titulo
        $wp_customize->add_setting('team_title', array(
            'default' => __('Equipo de trabajo'),
        ));
        $wp_customize->add_control('team_title', array(
            'label' => 'Título',
            'section' => 'team__data',
        ));
        // testimonios -- foto de testimonio 1
        $wp_customize->add_setting('pic-testimony-1', array(
            'default' => get_bloginfo('template_url') . '/assets/img/user.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'pic-testimony-1', array(
            'label' => 'Persona 1',
            'section' => 'team__data',
        )));
        // nombre 1
        $wp_customize->add_setting('testimony-name1', array(
            'default' => __('Usuario 1'),
        ));
        $wp_customize->add_control('testimony-name1', array(
            'label' => 'Nombre 1',
            'section' => 'team__data',
        ));
        // nombre 1
        $wp_customize->add_setting('titulo1', array(
            'default' => __('Título 1'),
        ));
        $wp_customize->add_control('titulo1', array(
            'label' => 'Título 1',
            'section' => 'team__data',
        ));
}
add_action('customize_register', 'theme_customizer');