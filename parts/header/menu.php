<?php

wp_nav_menu(
    array(
        'container' => 'nav', 
        'container_class' => 'primary', 
        'theme_location' => 'primary',
    ) 
);

wp_nav_menu(
    array(
        'container' => 'nav', 
        'container_class' => 'contact', 
        'theme_location' => 'contact',
    ) 
);