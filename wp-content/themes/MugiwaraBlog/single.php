<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div  id="post-<?php the_ID(); ?>"<?php post_class('col-sm-8 maincontent'); ?>>
                <?php
                if (have_posts()) : // Verificar se há postagens a serem exibidas
                    while (have_posts()) : the_post(); // Iniciar o loop das postagens
                ?>
                        <div class="post_title post_title_single">
                            <?php the_title(); ?>
                        </div>

                        <div class="post_data">
                            <?php the_date(); ?>
                        </div>

                        <div class="post_content">
                            <?php the_content(); ?>
                        </div>
                <?php
                    endwhile;
                ?>
                    <div class="pag">
                        <div class="previous_pag"><?php previous_post_link('%link', 'Postagem Anterior'); ?></div>
                        <div class="next_pag"><?php next_post_link('%link', 'Próxima Postagem'); ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div class="comments_area">
                        <?php if (comments_open()) {
                            comments_template();    
                        }
                        ?>
                    </div>
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
