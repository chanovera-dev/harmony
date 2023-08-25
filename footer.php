<?php
        echo '<footer id="main-footer" class="container">
            <div class="footer-content section">';
                echo '<div>';
                    $menu_id = get_nav_menu_locations()[ 'about-us' ];
                    $menu = wp_get_nav_menu_object( $menu_id );
                    $items = wp_get_nav_menu_items( $menu_id );
                    echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                    wp_nav_menu(
                        array(
                            'container' => 'nav', 
                            'container_class' => 'about-us', 
                            'theme_location' => 'about-us',
                        ) 
                    ); 
                echo '</div>';
                echo '<div>';
                    $menu_id = get_nav_menu_locations()[ 'support' ];
                    $menu = wp_get_nav_menu_object( $menu_id );
                    $items = wp_get_nav_menu_items( $menu_id );
                    echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                    wp_nav_menu(
                        array(
                            'container' => 'nav', 
                            'container_class' => 'support', 
                            'theme_location' => 'support',
                        ) 
                    );
                echo '</div>';
                echo '<div>';
                    $menu_id = get_nav_menu_locations()[ 'politicals' ];
                    $menu = wp_get_nav_menu_object( $menu_id );
                    $items = wp_get_nav_menu_items( $menu_id );
                    echo '<div class="title-wrapper"><h2 class="title">' . $menu->name . '</h2></div>';
                    wp_nav_menu(
                        array(
                            'container' => 'nav', 
                            'container_class' => 'politicals', 
                            'theme_location' => 'politicals',
                        ) 
                    );
                echo '</div>';
                wp_nav_menu(
                    array(
                        'container' => 'nav', 
                        'container_class' => 'contact', 
                        'theme_location' => 'contact',
                    ) 
                );
                echo '<p class="copyright">'.__('Todos los Derechos Reservados ', 'renata').date("Y").' © '; bloginfo( 'title' ); echo '</p>';
            '</div>
        </footer>' .
        wp_footer() .
    '</body>
</html>';