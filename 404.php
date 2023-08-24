<?php
    get_header();

    echo '<main id="main">' . 
    '<section class="container"><div class="section">' .
    '<h1>404</h1>' .
    '<div>
        <h2>' . __('¡Oops! No se encontró la página.', 'harmony') . '</h2>
        <p>' . __('Parece que no se encontró nada en este sitio. ¿Quizás deba probar uno de los links inferiores o una búsqueda?', 'harmony') . '</p>' .
        get_search_form() .
    '</div>' .
    '</div></section></main>';

    get_footer();