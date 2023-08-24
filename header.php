<?php 
echo '<!DOCTYPE html>' .
'<html' . language_attributes() . '>' .
    '<head>' .
        '<meta charset="' . bloginfo( 'charset' ) . '">' .
        '<meta name="description" content="' . bloginfo( 'description' ) . '">' .
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">' .
        wp_head() .
    '</head>
    <body ' . body_class() . '>' .
        '<header class="main-header container">
            <section class="header-content section">' .
                
            '</section>
        </header>';