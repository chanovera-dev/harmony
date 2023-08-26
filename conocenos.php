<?php /* Template name: About us */

    get_header();

    if ( have_posts() ){
        
        while( have_posts() ){
            
            the_post();
            
            get_template_part( 'templates/content', 'about-us' );
            
        }
        
    }

    get_footer();

?>