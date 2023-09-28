<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <?php if (get_theme_mod('xm_topmenu_show') == 'yes') : ?>
            <div class="top_header">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar_header">
                            <div class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar">
                            <?php
                            if (has_nav_menu('top')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'top',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'nav navbar-nav'
                                ));
                            }
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        <?php endif; ?>
        <div class="main_header">
            <div class="container">
                <div class="logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <?php if (get_theme_mod('xm_primarymenu_show') == 'yes') : ?>
                    <div class="main_nav_border">
                        <div class="main_nav">
                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'nav navbar-nav'
                                ));
                            }
                            ?>
                            <div class="search_area">
                                <?php if (get_theme_mod('xm_search_show') == 'yes') : ?>
                                    <?php get_search_form(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="main_info">
                    <div class="row">
                        <div class="col-sm-8 random_post">
                            <strong>VEJA MAIS</strong>
                            <?php
                            $xm_query = new WP_Query(array(
                                'posts_per_page' => 1,
                                'post_type' => 'post',
                                'orderby' => 'rand',
                                'ignore_sticky_posts' => 1, // Ignora posts fixados
                            ));
                            if ($xm_query->have_posts()) {
                                while ($xm_query->have_posts()) {
                                    $xm_query->the_post();
                            ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>


                        <div class="col-sm-4 socialarea">
                            <div class="socialtxt">
                                SIGA:
                            </div>
                            <div class="socialicons">
                                <?php if (get_theme_mod('xm_facebook')) : ?>
                                    <a href="<?php echo get_theme_mod('xm_facebook'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" />
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('xm_googleplus')) : ?>
                                    <a href="<?php echo get_theme_mod('xm_googleplus'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gplus.png" />
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('xm_instagram')) : ?>
                                    <a href="<?php echo get_theme_mod('xm_instagram'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" />
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('xm_twitter')) : ?>
                                    <a href="<?php echo get_theme_mod('xm_twitter'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" />
                                    </a>
                                <?php endif; ?>

                                <?php if (get_theme_mod('xm_youtube')) : ?>
                                    <a href="<?php echo get_theme_mod('xm_youtube'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" />
                                    </a>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <?php if (get_header_image()) : ?>
            <div class="custom-header container">
                <img src="<?php header_image(); ?>" />
            </div>
        <?php endif; ?>
    </header>