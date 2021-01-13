<?php

function test_wp_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // navigacija
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

}
add_action('after_setup_theme', 'test_wp_setup');

function set_excerpt_length() {
    return 15;
}
add_filter('excerpt_length', 'set_excerpt_length');

function new_excerpt_text() {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');


function sidebar() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar1',
        'id' => 'sidebar1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    }
add_action('widgets_init', 'sidebar');
