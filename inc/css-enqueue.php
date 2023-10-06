<?php

//Register Custom Css
function rentAVroom_register_styles() {
    //Front Page CSS elements--------------------------------
    wp_enqueue_style("navbar_style", get_theme_file_uri() . "/assets/css/front-page/navbar.css");
    wp_enqueue_style("about_setion_style", get_theme_file_uri() . "/assets/css/front-page/about.css");
    wp_enqueue_style("header_style", get_theme_file_uri() . "/assets/css/front-page/header.css");
    wp_enqueue_style("overlay_style", get_theme_file_uri() . "/assets/css/front-page/overlay.css");
    wp_enqueue_style("reset_style", get_theme_file_uri() . "/assets/css/front-page/resets.css");
    wp_enqueue_style("service_style", get_theme_file_uri() . "/assets/css/front-page/services.css");
    wp_enqueue_style("center_style", get_theme_file_uri() . "/assets/css/front-page/center-image.css");
    wp_enqueue_style("owl-theme", get_theme_file_uri() . "/assets/css/front-page/owl.theme.default.min.css");
    wp_enqueue_style("carosel_style", get_theme_file_uri() . "/assets/css/front-page/owl.carousel.min.css");
    wp_enqueue_style("testimonials_style", get_theme_file_uri() . "/assets/css/front-page/testimonials.css");
    wp_enqueue_style("numbers_style", get_theme_file_uri() . "/assets/css/front-page/numbers.css");
    wp_enqueue_style("blog_style", get_theme_file_uri() . "/assets/css/front-page/blog.css");
    wp_enqueue_style("footer_style", get_theme_file_uri() . "/assets/css/front-page/footer.css");
    wp_enqueue_style("video_style", get_theme_file_uri() . "/assets/css/front-page/video.css");
    // End Front page css imports -------------------------

    //Font Package
    wp_enqueue_style("font_import", "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap");
}
add_action("wp_enqueue_scripts", "rentAVroom_register_styles");
