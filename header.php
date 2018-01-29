<!DOCTYPE html>
<html lang="<?php get_language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/myStyles.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header>
        <div class="header">
            <div class="headerLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" height="100px"/>
            </div>
            <div class="headerContent">
            </div>
            <div class="headerSocialMedia pull-right">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" width="40"/> </a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" width="40"/> </a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/git.png" width="40"/> </a>
            </div>
            <div class="headerSidebar pull-right">
                <?php dynamic_sidebar('sidebarHeader'); ?>
            </div>
        </div>
    </header>
    <hr/>
    <section>
        <div class="slider">
            <img id="slide1" src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg"/>
            <img id="slide2" src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"/>
            <img id="slide3" src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg"/>
            <img id="slide4" src="<?php echo get_template_directory_uri(); ?>/images/slide4.jpg"/>
        </div>
    </section>
    <nav>
        <div class="navbar navbar-default">
            <div class="navbar-brand">
                <a href="<?php echo get_template_directory_uri(); ?>/">BlogMania</a>
            </div>
            <?php wp_nav_menu(array(
                    'menu_glowne' => 'menu glowne',
                    'menu_class' => 'nav navbar-nav pull-right',
                    'depth' => 2,

            )) ?>
        </div>
    </nav>