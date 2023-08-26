<main id="main">

    <section class="container main-content mission values">

        <div class="section content-section">

            <div class="content">

                <?php the_content(); ?>

            </div>

        </div>

    </section>

    <section class="container main-content team">

        <div class="section content-section">

            <div class="content">
                <div class="title-wrapper"><h2 class="title"><?php echo get_theme_mod('team_title', 'Equipo de trabajo'); ?></h2></div>
                <article class="team-member">
                    <img src="<?php echo get_theme_mod('pic-testimony-1', get_bloginfo('template_url') . '/assets/img/user.png'); ?>" alt="foto de miembro del equipo" loading="lazy" width="200" height="200">
                    <h2 class="team-name"><?php echo get_theme_mod('testimony-name1', 'Usuario 1'); ?></h2>
                    <h3 class="team-title"><?php echo get_theme_mod('titulo1', 'Título 1'); ?></h3>
                    <p class="mini-bio"><?php echo get_theme_mod('bio1', 'Bio 1'); ?></p>
                </article>
                <article class="team-member">
                    <img src="<?php echo get_theme_mod('pic-testimony-2', get_bloginfo('template_url') . '/assets/img/user.png'); ?>" alt="foto de miembro del equipo" loading="lazy" width="200" height="200">
                    <h2 class="team-name"><?php echo get_theme_mod('testimony-name2', 'Usuario 2'); ?></h2>
                    <h3 class="team-title"><?php echo get_theme_mod('titulo2', 'Título 2'); ?></h3>
                    <p class="mini-bio"><?php echo get_theme_mod('bio3', 'Bio 2'); ?></p>
                </article>
                <article class="team-member">
                    <img src="<?php echo get_theme_mod('pic-testimony-3', get_bloginfo('template_url') . '/assets/img/user.png'); ?>" alt="foto de miembro del equipo" loading="lazy" width="200" height="200">
                    <h2 class="team-name"><?php echo get_theme_mod('testimony-name3', 'Usuario 3'); ?></h2>
                    <h3 class="team-title"><?php echo get_theme_mod('titulo3', 'Título 3'); ?></h3>
                    <p class="mini-bio"><?php echo get_theme_mod('bio3', 'Bio 3'); ?></p>
                </article>
                <article class="team-member">
                    <img src="<?php echo get_theme_mod('pic-testimony-4', get_bloginfo('template_url') . '/assets/img/user.png'); ?>" alt="foto de miembro del equipo" loading="lazy" width="200" height="200">
                    <h2 class="team-name"><?php echo get_theme_mod('testimony-name4', 'Usuario 4'); ?></h2>
                    <h3 class="team-title"><?php echo get_theme_mod('titulo4', 'Título 4'); ?></h3>
                    <p class="mini-bio"><?php echo get_theme_mod('bio4', 'Bio 4'); ?></p>
                </article>
                <article class="team-member">
                    <img src="<?php echo get_theme_mod('pic-testimony-5', get_bloginfo('template_url') . '/assets/img/user.png'); ?>" alt="foto de miembro del equipo" loading="lazy" width="200" height="200">
                    <h2 class="team-name"><?php echo get_theme_mod('testimony-name5', 'Usuario 5'); ?></h2>
                    <h3 class="team-title"><?php echo get_theme_mod('titulo5', 'Título 5'); ?></h3>
                    <p class="mini-bio"><?php echo get_theme_mod('bio5', 'Bio 5'); ?></p>
                </article>
                <article class="team-member">
                    <img src="<?php echo get_theme_mod('pic-testimony-6', get_bloginfo('template_url') . '/assets/img/user.png'); ?>" alt="foto de miembro del equipo" loading="lazy" width="200" height="200">
                    <h2 class="team-name"><?php echo get_theme_mod('testimony-name6', 'Usuario 6'); ?></h2>
                    <h3 class="team-title"><?php echo get_theme_mod('titulo6', 'Título 6'); ?></h3>
                    <p class="mini-bio"><?php echo get_theme_mod('bio6', 'Bio 6'); ?></p>
                </article>
            </div>

        </div>

    </section>

    <section class="container main-content reviews">

        <div class="section content-section">

            <div class="content">
            <div class="title-wrapper"><h2 class="title"><?php echo get_theme_mod('reviews_title', 'Revisiones de clientes'); ?></h2></div>
                <?php if ( is_active_sidebar('reviews') ) { dynamic_sidebar('reviews');} ?>

            </div>

        </div>

    </section>

</main>