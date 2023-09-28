<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">

                <h1>Pesquisou por: <?php echo get_search_query(); ?></h1>

                <?php
                if (have_posts()) : // Verifica se existem resultados de pesquisa
                    while (have_posts()) : the_post();
                        get_template_part('template_parts/post');
                    endwhile; ?>

                    <div class="pag">
                        <div class="previous_pag"><?php previous_posts_link('Página Anterior'); ?></div>
                        <div class="next_pag"><?php next_posts_link('Próxima Página');
                        ?></div>
                    </div>

                <?php else : // Se não houver resultados de pesquisa
                    echo 'Nenhum resultado encontrado.';
                endif;
                ?>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
