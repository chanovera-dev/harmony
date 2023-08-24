<?php

function theme_colors() {
    ?>
    <style>
        :root{
            /* generales */
            --background-color-body:#663c6d;
            -background-color-main-content:#000;
            --color-header:#fff;
        }
    </style>
    <?php
}
add_action('wp_head', 'theme_colors');