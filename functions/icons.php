<?php

function theme_icons() {
    ?>
        <style>
            .contact .menu li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/facebook-white.svg');}
            .contact .menu li a[href*="mail"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/envelope-white.svg');}
            .contact .menu li a[href*="tel"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/telephone-fill-white.svg');}
            .contact .menu li a[href*="youtube"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/youtube-white.svg');}

            .categories ul li a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/category.svg');}
            .archive-list-widget li a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/archive.svg');}
        </style>
    <?php
}
add_action('wp_head', 'theme_icons');