<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <div class="navbar" style="background-color:<?= (is_home() || is_page_template('home-template.php')) ? '' : 'black' ?>">

            <div id="nav-logo" class="navbar__logo">
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
                <?php if (is_home()) {
                    wp_nav_menu(array(
                        'theme_location' => 'Main menu',
                        'menu_class' => 'navbar__menu',
                    ));
                } elseif (is_page_template('home-template.php')) {
                    // Replace 'custom-home-template.php' with the actual template file name
                    wp_nav_menu(array(
                        'theme_location' => 'Main menu',
                        'menu_class' => 'navbar__menu',
                    ));
                } else {
                    wp_nav_menu(array(
                        'theme_location' => 'Whole Website',
                        'menu_class' => 'navbar__menu',

                    ));
                } ?>
            </div>
            <div class="mobile-nav__menu ">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
    <div class="page-navigator custom-font">
        <div><a href="#home">Back To Top</a> </div>
        <div><?php echo wp_nav_menu(array('theme_location' => 'Whole Website',)) ?></div>
    </div>