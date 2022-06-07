<?php

function bootstrap_scripts(){
    wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri(). '/assets/js/bootstrap.bundle.js');
}
add_action('wp_enqueue_scripts','bootstrap_scripts');


function register_bootstrap_styles(){
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/bootstrap.css' );
    wp_enqueue_style('style.css', get_template_directory_uri(). '/style.css' );

} 

add_action('wp_enqueue_scripts', 'register_bootstrap_styles');

?>