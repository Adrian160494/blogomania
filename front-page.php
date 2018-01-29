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
    <hr/>
    <main>
        <div class="mainContent">
                <section>
                   <div class="greeting text-center">
                       <div class="front_page_header">
                           <h1>Witam wszystkich na moim Blogu!!</h1>
                       </div>
                       <div class="buttonStart">
                           <p><span class="arrow4 glyphicon glyphicon-arrow-down"></span><span class="arrow3 glyphicon glyphicon-arrow-down"></span></p>

                           <p><a href="<?php echo get_template_directory_uri(); ?>/blog" >
                                   <span class="globe glyphicon glyphicon-globe"></span>
                               </a></p>
                           <p><span class="arrow1 glyphicon glyphicon-arrow-up"></span><span class="arrow2 glyphicon glyphicon-arrow-up"></span></p>
                       </div>
                   </div>
                </section>
        </div>
    </main>
<?php get_footer() ?>