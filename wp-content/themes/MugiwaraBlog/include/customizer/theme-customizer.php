<?php 
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function xm_customize_register($wp_customize) {
    $wp_customize->add_panel('opcoes', array(
        'title' => 'Opções do Tema',
        'priority' => 200
    ));

    xm_social_customizer($wp_customize);
    xm_layout_customizer($wp_customize);
}
?>