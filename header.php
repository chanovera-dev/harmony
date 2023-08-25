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
                        echo '<ul class="nav left">';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/menu-button.php'); echo '</li>';
                            echo '<li id="menu-wrapper" class="menu-wrapper">'; include(TEMPLATEPATH . '/parts/header/menu.php'); echo '</li>';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/search-button.php'); echo '</li>';
                        echo '</ul>';
                        include(TEMPLATEPATH . '/parts/header/brand.php');
                        echo '<ul class="nav right">';
                                echo '<li><a href="' . get_home_url() . '/mi-cuenta">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </a>
                            </li>';
                            echo '<li><a href="' . get_home_url() . '/wishlist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </a>
                            </li>';
                            echo '<li><a href="'; echo wc_get_cart_url(); echo '"  title="'; _e( 'View your shopping cart' ); echo '">
                                    '; WC()->cart->get_cart_contents_count(); echo '
                                </a>
                            </li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="nav left">';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/menu-button.php'); echo '</li>';
                            echo '<li id ="menu-wrapper" class="menu-wrapper">'; include(TEMPLATEPATH . '/parts/header/menu.php'); echo '</li>';
                            echo '<li>'; include(TEMPLATEPATH . '/parts/header/search-button.php'); echo '</li>';
                        echo '</ul>';
                        include(TEMPLATEPATH . '/parts/header/brand.php');
                        echo '<ul class="nav right">';
                                echo '<li><a href="' . get_home_url() . '/mi-cuenta">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </a>
                            </li>';
                            echo '<li><a href="' . get_home_url() . '/wishlist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </a>
                            </li>';
                            echo '<li><a href=""></a></li>';
                        echo '</ul>';
                    }
                ?>
            </section>
        </header>