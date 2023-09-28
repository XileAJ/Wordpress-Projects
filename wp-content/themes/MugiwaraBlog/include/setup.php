<?php

function customize_image_quality($quality) {
    return 90; // Ajuste a qualidade desejada aqui (90 é um bom valor padrão)
}
add_filter('jpeg_quality', 'customize_image_quality');
add_filter('wp_editor_set_quality', 'customize_image_quality');


function xm_theme_styles() {
    // Puxando arquivos CSS
    wp_enqueue_style('bootstrap_css' , get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css' , get_template_directory_uri().'/assets/css/template.css');
    wp_enqueue_style('print_css', get_template_directory_uri().'/assets/css/print.css', array('template.css'), false, 'print');

    // Puxando os arquivos JS
    wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery', 'bootstrap_js'), false, true);

}
add_action('wp_enqueue_scripts', 'xm_theme_styles'); // Adicione a ação para enfileirar os estilos e scripts

function xm_after_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-formats', array('video', 'audio'));

    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri().'/assets/images/headers/Onepiece2.jpg',
        'width' => 1280,
        'height' => 400,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => false
        
    ));

    register_default_headers(array(
        'header1' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/Onepiece2.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/Onepiece2.jpg',
            'description' => 'Header 1'
        ),
        'header2' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/Onepiece1.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/Onepiece1.jpg',
            'description' => 'Header 2'
        ),

    ));

    register_nav_menu('primary', 'Menu Principal');
    register_nav_menu('top', 'Menu Superior');
}
add_action('after_setup_theme', 'xm_after_setup');

function xm_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar Lateral',
        'id' => 'xm_sidebar',
        'description' => 'Sidebar Lateral',
        'before_widget' => '<div class="widget-lateral %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar Rodapé',
        'id' => 'xm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div class="widget-rodape %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4'
    ));
}

