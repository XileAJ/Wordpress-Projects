<a href="<?php the_permalink(); ?>">
    <article <?php post_class(); ?>>
        <div class="post_item">
            <div class="post_comment_area">
                <?php comments_number('0', '1', '%'); ?>
            </div>
            <div class="post_info">
                <?php if (get_post_format() == 'video') : ?>
                    <?php
                    $content = apply_filters('the_content', get_the_content());
                    $video = get_media_embedded_in_content($content, array(
                        'iframe',
                        'embed',
                        'object',
                        'video'
                    ));
                    if ($video) {
                    ?>
                        <div class="post_video">
                            <?php echo $video[0]; ?>
                        </div>
                    <?php
                    }
                    ?>
                <?php elseif (get_post_format() == 'audio') : ?>
                    <?php
                    $content = apply_filters('the_content', get_the_content());
                    $audio = get_media_embedded_in_content($content, array(
                        'iframe',
                        'audio'
                    ));
                    if ($audio) {
                    ?>
                        <div class="post_audio">
                            <?php echo $audio[0]; ?>
                        </div>
                    <?php
                    }
                    ?>
                <?php elseif (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'post_thumb')); ?>
                <?php endif; ?>

                <div class="post_data">
                    <?php echo the_date(); ?>
                </div>
                <div class="post_title">
                    <?php echo the_title(); ?>
                </div>
                <div class="post_resumo">
                    <?php
                    $excerpt = get_the_excerpt(); // Obtém o resumo do post
                    $excerpt_length = 130; // Define o número máximo de caracteres desejado

                    if (strlen($excerpt) > $excerpt_length) {
                        // Limita o resumo ao número máximo de caracteres
                        $excerpt = substr($excerpt, 0, $excerpt_length);
                        echo $excerpt . '...'; // Adiciona reticências ao final do resumo
                    } else {
                        echo $excerpt; // Exibe o resumo completo se ele for menor que o limite
                    }
                    ?>
                </div>


            </div>
        </div>
    </article>
</a>