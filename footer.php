<?php
        echo '<footer id="main-footer" class="container">
            <div class="footer-content section">';
                wp_nav_menu(
                    array(
                        'container' => 'nav', 
                        'container_class' => 'about-us', 
                        'theme_location' => 'about-us',
                    ) 
                );
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