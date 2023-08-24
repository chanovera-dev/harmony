<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="main-header container">
            <section class="header-content section">
            <?php    
                    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                        echo '<ul class="left-nav">';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/menu-button.php'); echo '</li>';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/menu.php'); echo '</li>';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/search-button.php'); echo '</li>';
                        echo '</ul>';
                        include(TEMPLATEPATH . '/parts/header/brand.php');
                    } else {
                        echo '<ul class="left-nav">';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/menu-button.php'); echo '</li>';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/menu.php'); echo '</li>';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/search-button.php'); echo '</li>';
                        echo '</ul>';
                        include(TEMPLATEPATH . '/parts/header/brand.php');
                        echo '<ul class="right-nav">';
                            echo '<li><a href="' . get_home_url('/mi-cuenta') . '"></a></li>';
                        echo '</ul>';
                    }
                ?>
            </section>
        </header>