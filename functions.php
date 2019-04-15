<?php

function ajout_css_js(){
	wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome' , get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('flaticon' , get_template_directory_uri() . '/css/flaticon.css');
	wp_enqueue_style('magnific-popup' , get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('styleLabs', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'ajout_css_js');

function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu'); 

?>
