<?php

function register_andgo_navs() {
    register_nav_menus(array(
        "andgo-top-nav" => __("Andgo Top Menu"),

        'andgo-bottom-nav' => __("Andgo Bottom Menu"),
    ));
}
add_action("init","register_andgo_navs");

?>