<?php

/* 
    Plugin Name: Bootstrap5 Slider Gallery
    Plugin URI:
    Description: A plugin made to display the latest post dynamically
    Version:1.0
    Author: Subhan Ghani
    Author URI:
    License: GPL2
*/

/* 
Don't delete this because of register_post_type which brings back the post in gallery
*/

function andgo_home_carousel_slider(){
    add_theme_support('post-thumbnails');

    register_post_type('andgocorouselpost', array (
        "labels" => array(
            "name" => "Andgo slider"),
            "public" => true,
            "menu_icons" => 'dashicons-format-gallery'
        ));
}

add_action('after_setup_theme','andgo_home_corousel_slider');
?>