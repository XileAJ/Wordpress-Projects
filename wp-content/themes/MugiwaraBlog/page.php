<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">
                <?php
                if (have_posts()) : // Verificar se há postagens a serem exibidas
                    while (have_posts()) : the_post(); // Iniciar o loop das postagens
                ?>
                        <div class="post_title post_title_single">
                            <?php the_title(); ?>
                        </div>

                        <div class="post_content">
                            <?php the_content(); ?>
                        </div>
                <?php
                    endwhile;
                ?>
                  
                <?php
                else :
                    echo 'Nenhuma postagem encontrada.';
                endif;
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
