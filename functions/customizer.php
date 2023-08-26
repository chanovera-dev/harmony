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
        // título 1
        $wp_customize->add_setting('titulo1', array(
            'default' => __('Título 1'),
        ));
        $wp_customize->add_control('titulo1', array(
            'label' => 'Título 1',
            'section' => 'team__data',
        ));
        // bio 1
        $wp_customize->add_setting('bio1', array(
            'default' => __('Bio 1'),
        ));
        $wp_customize->add_control('bio1', array(
            'label' => 'Bio 1',
            'section' => 'team__data',
            'type' => 'textarea',
        ));

        // testimonios -- foto de testimonio 2
        $wp_customize->add_setting('pic-testimony-2', array(
            'default' => get_bloginfo('template_url') . '/assets/img/user.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'pic-testimony-2', array(
            'label' => 'Persona 2',
            'section' => 'team__data',
        )));
        // nombre 2
        $wp_customize->add_setting('testimony-name2', array(
            'default' => __('Usuario 2'),
        ));
        $wp_customize->add_control('testimony-name2', array(
            'label' => 'Nombre 2',
            'section' => 'team__data',
        ));
        // título 2
        $wp_customize->add_setting('titulo2', array(
            'default' => __('Título 2'),
        ));
        $wp_customize->add_control('titulo2', array(
            'label' => 'Título 2',
            'section' => 'team__data',
        ));
        // bio 2
        $wp_customize->add_setting('bio2', array(
            'default' => __('Bio 2'),
        ));
        $wp_customize->add_control('bio2', array(
            'label' => 'Bio 2',
            'section' => 'team__data',
            'type' => 'textarea',
        ));

        // testimonios -- foto de testimonio 3
        $wp_customize->add_setting('pic-testimony-3', array(
            'default' => get_bloginfo('template_url') . '/assets/img/user.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'pic-testimony-3', array(
            'label' => 'Persona 3',
            'section' => 'team__data',
        )));
        // nombre 2
        $wp_customize->add_setting('testimony-name3', array(
            'default' => __('Usuario 3'),
        ));
        $wp_customize->add_control('testimony-name3', array(
            'label' => 'Nombre 3',
            'section' => 'team__data',
        ));
        // título 2
        $wp_customize->add_setting('titulo3', array(
            'default' => __('Título 3'),
        ));
        $wp_customize->add_control('titulo3', array(
            'label' => 'Título 3',
            'section' => 'team__data',
        ));
        // bio 2
        $wp_customize->add_setting('bio3', array(
            'default' => __('Bio 3'),
        ));
        $wp_customize->add_control('bio3', array(
            'label' => 'Bio 3',
            'section' => 'team__data',
            'type' => 'textarea',
        ));

        // testimonios -- foto de testimonio 4
        $wp_customize->add_setting('pic-testimony-4', array(
            'default' => get_bloginfo('template_url') . '/assets/img/user.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'pic-testimony-4', array(
            'label' => 'Persona 4',
            'section' => 'team__data',
        )));
        // nombre 2
        $wp_customize->add_setting('testimony-name4', array(
            'default' => __('Usuario 4'),
        ));
        $wp_customize->add_control('testimony-name4', array(
            'label' => 'Nombre 4',
            'section' => 'team__data',
        ));
        // título 2
        $wp_customize->add_setting('titulo4', array(
            'default' => __('Título 4'),
        ));
        $wp_customize->add_control('titulo4', array(
            'label' => 'Título 4',
            'section' => 'team__data',
        ));
        // bio 2
        $wp_customize->add_setting('bio4', array(
            'default' => __('Bio 4'),
        ));
        $wp_customize->add_control('bio4', array(
            'label' => 'Bio 4',
            'section' => 'team__data',
            'type' => 'textarea',
        ));

        // testimonios -- foto de testimonio 5
        $wp_customize->add_setting('pic-testimony-5', array(
            'default' => get_bloginfo('template_url') . '/assets/img/user.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'pic-testimony-5', array(
            'label' => 'Persona 5',
            'section' => 'team__data',
        )));
        // nombre 2
        $wp_customize->add_setting('testimony-name5', array(
            'default' => __('Usuario 5'),
        ));
        $wp_customize->add_control('testimony-name5', array(
            'label' => 'Nombre 5',
            'section' => 'team__data',
        ));
        // título 2
        $wp_customize->add_setting('titulo5', array(
            'default' => __('Título 5'),
        ));
        $wp_customize->add_control('titulo5', array(
            'label' => 'Título 5',
            'section' => 'team__data',
        ));
        // bio 2
        $wp_customize->add_setting('bio5', array(
            'default' => __('Bio 5'),
        ));
        $wp_customize->add_control('bio5', array(
            'label' => 'Bio 5',
            'section' => 'team__data',
            'type' => 'textarea',
        ));

        // testimonios -- foto de testimonio 6
        $wp_customize->add_setting('pic-testimony-6', array(
            'default' => get_bloginfo('template_url') . '/assets/img/user.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'pic-testimony-6', array(
            'label' => 'Persona 6',
            'section' => 'team__data',
        )));
        // nombre 2
        $wp_customize->add_setting('testimony-name6', array(
            'default' => __('Usuario 6'),
        ));
        $wp_customize->add_control('testimony-name6', array(
            'label' => 'Nombre 6',
            'section' => 'team__data',
        ));
        // título 2
        $wp_customize->add_setting('titulo6', array(
            'default' => __('Título 6'),
        ));
        $wp_customize->add_control('titulo6', array(
            'label' => 'Título 6',
            'section' => 'team__data',
        ));
        // bio 2
        $wp_customize->add_setting('bio6', array(
            'default' => __('Bio 6'),
        ));
        $wp_customize->add_control('bio6', array(
            'label' => 'Bio 6',
            'section' => 'team__data',
            'type' => 'textarea',
        ));
}
add_action('customize_register', 'theme_customizer');