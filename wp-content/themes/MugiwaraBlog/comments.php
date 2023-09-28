<?php
if (comments_open() || get_comments_number()) :
    // Verifica se os comentários estão abertos ou se já existem comentários
?>

<div id="comments" class="comments-area">
    <h2 class="comments-title">
        <?php
        $comments_number = get_comments_number();
        if ($comments_number === 1) {
            echo '1 Comentário';
        } else {
            echo $comments_number . ' Comentários';
        }
        ?>
    </h2>

    <?php if (have_comments()) : ?>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'avatar_size' => 60,
            ));
            ?>
        </ol>
    <?php endif; ?>

    <?php
    // Avatar do usuário atual, se estiver logado
    $user_avatar = get_avatar(get_current_user_id(), 60);

    comment_form(array(
        'title_reply' => 'Deixe um Comentário',
        'comment_notes_after' => '', // Remova qualquer texto após o formulário
        'class_submit' => 'btn btn-primary', // Estilize o botão de envio
        'label_submit' => 'Enviar Comentário', // Texto do botão de envio
        'fields' => array(
            'author' => '<div class="comment-input">' . $user_avatar . '<input id="author" name="author" type="text" placeholder="Seu Nome" aria-required="true" required /></div>',
            'email' => '<div class="comment-input">' . '<input id="email" name="email" type="text" placeholder="Seu E-mail" aria-required="true" required /></div>',
        ),
        'comment_field' => '<div class="comment-input">' . '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Seu Comentário"></textarea></div>',
    ));
    ?>

</div><!-- #comments -->

<?php
endif; // Verifica se os comentários estão abertos ou se já existem comentários
?>
