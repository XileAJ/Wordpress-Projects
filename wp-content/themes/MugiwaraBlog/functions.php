<?php 
//include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
//Hooks
add_action("wp_enqueue_scripts", "xm_theme_styles");
add_action("after_setup_theme", "xm_after_setup");
add_action("widgets_init", "xm_widgets");
add_action("customize_register", "xm_customize_register");