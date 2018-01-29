<?php

add_theme_support('post-thumbnail');
set_post_thumbnail_size(600,400,false);

function load_css(){
    wp_enqueue_style(
        'style',
        get_template_directory_uri().'/css/style2.css'
    );
}
add_action('init','load_css');

function load_js(){
    wp_enqueue_script(
        'frontPage',
        get_template_directory_uri().'/js/frontPageAnimation.js',
        false,
        1.0,
        false
    );

    wp_enqueue_script(
        'script',
        get_template_directory_uri().'/js/slider.js',
        false,
        1.0,
        false
    );
}

add_action('init','load_js');

register_sidebar(array(
   'name' =>'sidebar1',
    'description'=>'desc',
    'before_widget'=>'<div class="sidebar text-center">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
));
register_sidebar(array(
    'name' =>'sidebarHeader',
    'description'=>'desc',
    'before_widget'=>'<div class="sidebar text-center">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
));

register_sidebar(array(
   'name'=>'footerBar',
    'description'=>'desc',
    'before_widget'=>'<div class="footerBar">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
));


function register_my_menu(){
    register_nav_menus(array(
        'menu_glowne'=>__('menu glowne')
        )
    );
}

add_action('init','register_my_menu');