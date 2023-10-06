<?php
if (!function_exists("rentAVroom_theme_setup")) {
    function rentAVroom_theme_setup() {
        add_theme_support("title-tag");
        add_theme_support('post-thumbnails');

        // Add additional image sizes (optional)
        add_image_size('custom-thumbnail-size', 300, 200, true); //
        register_nav_menu('Front Page', __('Front Page Menu'));
        register_nav_menu('Whole Website', __('Whole Website Menu'));
        register_nav_menu('Footer Information Menu', __('Footer Information Menu'));
        register_nav_menu('Footer Customer Support Menu', __('Footer Customer Support Menu'));

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
