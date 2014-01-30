<?php

function load() {
    wp_enqueue_style('reset',  get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('style-name', get_stylesheet_uri());
    wp_enqueue_script('footer',  get_template_directory_uri() . '/scripts/footer.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'load');

/*
//Some simple code for our widget-enabled sidebar
if (function_exists('register_sidebar')) {
    register_sidebar();
}

//Add support for WordPress 3.0's custom menus
add_action('init', 'register_my_menu');

//Register area for custom menu
function register_my_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support('automatic-feed-links');

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);


add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'sample_options', 'sample_theme_options');
} 

function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
} 
*/