<main id="main">

    <section class="container main-content mission values">

        <div class="section content-section">

            <div class="content">

            <div class="title-wrapper"><h2 class="title"><?php echo get_theme_mod('about_us_title', 'Conócenos'); ?></h2></div>

                <?php the_content(); ?>

            </div>

        </div>

    </section>

    <?php include(TEMPLATEPATH . '/parts/sections/team.php');?>

    <section class="container main-content reviews">

        <div class="section content-section">

            <div class="content">
            <div class="title-wrapper"><h2 class="title"><?php echo get_theme_mod('reviews_title', 'Reseñas de clientes'); ?></h2></div>
                <?php if ( is_active_sidebar('reviews') ) { dynamic_sidebar('reviews');} ?>

            </div>

        </div>

    </section>

</main>