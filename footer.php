<?php
        echo '<footer id="main-footer" class="container">
            <div class="footer-content section">';
                echo '<div>';
                    $theme_locations = get_nav_menu_locations();
                    $menu_object = get_term( $theme_locations[$theme_location], 'about-us' );
                    if ( $menu_object ) {
                        $menu_name = $menu_object->name;
                        echo '<h2>' . $menu_name . '</h2>';
                        
                        wp_nav_menu(
                            array(
                                'container' => 'nav', 
                                'container_class' => 'about-us', 
                                'theme_location' => 'about-us',
                            ) 
                        );
                    } else {
                        echo 'No se encontró ningún menú en la ubicación ' . $menu_location;
                    }
                echo '</div>';
                wp_nav_menu(
                    array(
                        'container' => 'nav', 
                        'container_class' => 'support', 
                        'theme_location' => 'support',
                    ) 
                );
                wp_nav_menu(
                    array(
                        'container' => 'nav', 
                        'container_class' => 'politicals', 
                        'theme_location' => 'politicals',
                    ) 
                );
                wp_nav_menu(
                    array(
                        'container' => 'nav', 
                        'container_class' => 'contact', 
                        'theme_location' => 'contact',
                    ) 
                );
                echo '<p>'.__('Todos los Derechos Reservados ', 'renata').date("Y").' © '; bloginfo( 'title' ); echo '</p>';
            '</div>
        </footer>' .
        wp_footer() .
    '</body>
</html>';