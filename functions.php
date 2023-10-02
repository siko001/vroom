<?php


// Custom Theme supports
if (!function_exists("rentAVroom_theme_setup")) {
    function rentAVroom_theme_setup() {
        add_theme_support("title-tag");
        add_theme_support("post-thumbnails");
        register_nav_menu('Main menu', __('Main menu'));

        // Custom header Image and props
        add_theme_support('custom-header',  array(
            'flex-width'    => true,
            'width'         => 1400,
            'flex-height'   => true,
            'height'        => 850,
            // 'default-image' => get_template_directory_uri() . '/images/header.jpg', -----Uncomment for standard background
        ));

        // Add Custom Logo and props
        add_theme_support("custom-logo", array(
            "height" => "100",
            "width" => "100",
            "flex-height" => true,
            "flex-width" => true,
            "header-text" => array("site-title", "site-description")
        ));
    }

    show_admin_bar(false);
}
add_action("after_setup_theme", "rentAVroom_theme_setup");


//Register Custom Css
function rentAVroom_register_styles() {
    wp_enqueue_style("navbar_style", get_theme_file_uri() . "/assets/css/main.css");

    wp_enqueue_style("font_import", "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap");
}
add_action("wp_enqueue_scripts", "rentAVroom_register_styles");



//Register Custom Js 
function rentAVroom_register_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script("navbar color swap", get_theme_file_uri() . "/assets/js/navbar-controls.js", array(), "1.0",  true);

    wp_enqueue_script("header image parallax", get_theme_file_uri() . "/assets/js/parallax.js", array(), "1.0",  true);
}
add_action("wp_enqueue_scripts", "rentAVroom_register_scripts");
