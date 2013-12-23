<?php 
/*
Feature Name:   Sidebars
Description:    Any additional child theme sidebars can be registered here
*/
/************* ACTIVE SIDEBARS ********************/

function div_child_register_sidebars() {
    // register_sidebar(array(
    //     'id' => 'home-posts',
    //     'name' => __('Home Posts', 'divtheme'),
    //     'description' => __('The home posts sidebar.', 'divtheme'),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h4 class="widgettitle">',
    //     'after_title' => '</h4>',
    // ));

    // register_sidebar(array(
    //     'id' => 'hero',
    //     'name' => __('Hero', 'div_theme'),
    //     'description' => __('The hero sidebar.', 'div_theme'),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h4 class="widgettitle">',
    //     'after_title' => '</h4>',
    // ));
    
    //register_sidebar(array(
        //'id' => 'features',
        //'name' => __('Features', 'div_theme'),
        // 'description' => __('The features sidebar.', 'div_theme'),
        //'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //'after_widget' => '</div>',
        //'before_title' => '<h4 class="widgettitle">',
        //'after_title' => '</h4>',
    //));

    // register_sidebar(array(
    //     'id' => 'cta',
    //     'name' => __('Call to Action', 'div_theme'),
    //     'description' => __('The Call to Action sidebar.', 'div_theme'),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget' => '</div>',
    //     'before_title' => '',
    //     'after_title' => '',
    // ));
    
    register_sidebar(array(
        'id' => 'footer1',
        'name' => __('Footer 1', 'divtheme'),
        'description' => __('Column 1 footer sidebar.', 'divtheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'footer2',
        'name' => __('Footer 2', 'divtheme'),
        'description' => __('Column 2 footer sidebar.', 'divtheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'footer3',
        'name' => __('Footer 3', 'divtheme'),
        'description' => __('Column 3 footer sidebar.', 'divtheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'footer4',
        'name' => __('Footer 4', 'divtheme'),
        'description' => __('Column 4 footer sidebar.', 'divtheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));  
} 
add_action( 'widgets_init', 'div_child_register_sidebars' );
?>