<?php 
function xm_layout_customizer($wp_customize) {
    // Configurações (settings)
    $wp_customize->add_setting('xm_topmenu_show', array(
        'default' => 'yes',
    ));
    $wp_customize->add_setting('xm_primarymenu_show', array(
        'default' => 'yes',
    ));
    $wp_customize->add_setting('xm_search_show', array(
        'default' => 'yes',
    ));

    // Seções (sections)
    $wp_customize->add_section('xm_layout_section', array(
        'title' => 'Opções de Layout', 
        'priority' => 2,
        'panel' => 'opcoes'
    ));
    $wp_customize->add_setting('xm_privacy_url', array(
        'default' => ''
    ));

    // Controles (controllers)
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_topmenu_show',
            array(
                'label' => 'Mostrar Menu Superior',
                'section' => 'xm_layout_section',
                'settings' => 'xm_topmenu_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'Sim',
                ),
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_primarymenu_show',
            array(
                'label' => 'Mostrar Menu Primário',
                'section' => 'xm_layout_section',
                'settings' => 'xm_primarymenu_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'Sim',
                ),
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_search_show',
            array(
                'label' => 'Mostrar Busca',
                'section' => 'xm_layout_section',
                'settings' => 'xm_search_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'Sim',
                ),
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'xm_privacy_url',
            array(
                'label' => 'Página de Política de Privacidade',
                'section' => 'xm_layout_section',
                'settings' => 'xm_privacy_url',
                'type' => 'dropdown-pages',
                
                
            )
        )
    );
}
