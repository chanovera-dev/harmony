<?php /* Template name: Frontpage */

get_header();

echo '<main id="main">';

include(TEMPLATEPATH . '/parts/frontpage/hero.php');
include(TEMPLATEPATH . '/parts/frontpage/sitemap.php');
include(TEMPLATEPATH . '/parts/frontpage/suscribe.php');

echo '</main>';

get_footer();