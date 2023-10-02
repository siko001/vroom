<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="navbar__logo">
                <?php
                $custom_logo_id = get_theme_mod("custom_logo");
                $logo = wp_get_attachment_image_src($custom_logo_id, "full");
                if (has_custom_logo()) {
                    echo '<img width=200 height=100 src="' . esc_url($logo[0]) . '"alt="' . get_bloginfo("name") . '">';
                } else {
                    echo "<h1>" . get_bloginfo("name") . "</h1>";
                }
                ?>
            </div>
            <div class="navbar__menu custom-font">
                <?php wp_nav_menu(array(
                    'theme_location' => 'Main menu', // Use the registered location name
                    'menu_class' => 'navbar__menu', // Use the custom class 'navbar__menu'
                )); ?>
            </div>
            <div class="mobile-nav__menu ">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>