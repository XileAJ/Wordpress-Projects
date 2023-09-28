<footer>
    <div class="footer_widgets">
        <div class="row">
            <?php
            if (is_active_sidebar('xm_footersidebar')) {
                dynamic_sidebar('xm_footersidebar');
            }
            ?>
        </div>
    </div>
    <div class="main_footer">
        <div class="mainfooter_left">
            Todos os direitos reservados - 
            <?php  if(get_theme_mod('xm_privacy_url')): ?>
                <a href="<?php the_permalink(get_theme_mod('xm_privacy_url')); ?>">Política de Privacidade</a>
            <?php endif; ?>
        </div>
        <div class="mainfooter_right">
            Criado por XileAJ
        </div>
        <div class="main_footer_scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png" />
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
