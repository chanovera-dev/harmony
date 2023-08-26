<?php

function theme_colors() {
    ?>
    <style>
        :root{
            /* generales */
            --background-color-body:#663c6d;
            --background-color-main-content:#fff;
            --color-header:#fff;
            --color-text:#000;

            /* listas */
            --border-color-list:#ddd;

            /* formularios */
            --border-color-input:#69727D;
            --background-color-input:#fff;
            --color-text-input:#7a7a7a;
        }
    </style>
    <?php
}
add_action('wp_head', 'theme_colors');