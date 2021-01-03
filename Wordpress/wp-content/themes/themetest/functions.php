<?php

function themetest_theme_support(){
//Add dynamic title tag support
add_theme_support('title_tag');
//add custom logo -- Go on Wordpress webiste settings to upload logo.png
add_theme_support('custom_logo');
//Pour ajouter les images a upload dans les articles
add_theme_support('post_thumbnails');
}

add_action('after_setup_theme', 'themetest_theme_support');

function themetest_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'themetest_menus');
/*1:00:37 -- Menu Wordpress sur le site 
There you can add pages [contact, about us, etc.] to menu (side/header/footer)
*/


function themetest_register_styles(){

    $version = wp_get_theme()-> get( 'Version' );
    wp_enqueue_style('themestest-style', get_template_directory_uri() . "/style.css", array('themestest-bootstrap'), $version, 'all');
    wp_enqueue_style('themestest-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('themestest-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'themetest_register_styles');




function themetest_register_scripts(){

wp_enqueue_script('themetest-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1', true); 
wp_enqueue_script('themetest-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0', true); 
wp_enqueue_script('themetest-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1', true); 
wp_enqueue_script('themetest-main', get_template_directory_uri() ."assets/js/main.js", array(),'1.0', true); 

}

add_action( 'wp_enqueue_scripts', 'themetest_register_scripts');


function themetest_widget_areas(){
//Sidebar
    register_sidebar(
        array(
          'before_title' => '',
          'after_title' => '',
          'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
          'after_widget' => '</ul>',
          'name' => 'Sidebar Area',
          'id' => 'sidebar-1',
          'description' => 'Sidebar Widget Area',
        )
    );
//Footer
    register_sidebar(
        array(
          'before_title'=>'',
          'after_title'=>'',
          'before_widget'=>'<div class="widget"><div class="widget-content">',
          'after_widget'=>'</div></div>',
          'name'=>'Footer Area',
          'id'=>'footer-1',
          'description'=>'Footer Widget Area',
        )
    );
}

add_action( 'widgets_init', 'themetest_widget_areas');

?>