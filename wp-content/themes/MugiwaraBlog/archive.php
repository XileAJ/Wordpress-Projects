<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">

                <h1><?php the_archive_title(); ?></h1>

                <?php
                $args = array(
                    'post_type' => 'any', // Isso buscará todos os tipos de posts
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part('template_parts/post');
                    endwhile; ?>

                    <div class="pag">
                        <div class="previous_pag"><?php previous_posts_link('Página Anterior'); ?></div>
                        <div class="next_pag"><?php next_posts_link('Próxima Página');
                         ?></div>
                    </div>
                    
                <?php endif; ?>


            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
