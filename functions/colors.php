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
            --border-color-list:#ddd;
        }
    </style>
    <?php
}
add_action('wp_head', 'theme_colors');