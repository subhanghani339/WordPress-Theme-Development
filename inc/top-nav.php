<?php

function register_andgo_top_nav() {
    register_nav_menus(array(
        "andgo-top-nav" => __("Andgo Top Menu")
    ));
}
add_action("init","register_andgo_top_nav");

?>