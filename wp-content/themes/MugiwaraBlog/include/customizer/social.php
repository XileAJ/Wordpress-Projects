<?php
function xm_social_customizer($wp_customize) {
    // Settings
    $wp_customize->add_setting('xm_facebook', array('default' => ''));
    $wp_customize->add_setting('xm_googleplus', array('default' => ''));
    $wp_customize->add_setting('xm_instagram', array('default' => ''));
    $wp_customize->add_setting('xm_twitter', array('default' => ''));
    $wp_customize->add_setting('xm_youtube', array('default' => ''));

    // Sections
    $wp_customize->add_section('xm_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => '1',
        'panel' => 'opcoes'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'xm_social_section',
                'settings' => 'xm_facebook',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_googleplus',
            array(
                'label' => 'Link do Google+',
                'section' => 'xm_social_section',
                'settings' => 'xm_googleplus',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'xm_social_section',
                'settings' => 'xm_instagram',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_twitter',
            array(
                'label' => 'Link do Twitter',
                'section' => 'xm_social_section',
                'settings' => 'xm_twitter',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_youtube',
            array(
                'label' => 'Link do YouTube',
                'section' => 'xm_social_section',
                'settings' => 'xm_youtube',
                'type' => 'text'
            )
        )
    );
}
