<?php

//Register Custom Js 
function rentAVroom_register_scripts() {

    //Jquery
    wp_enqueue_script('jquery');

    //Navbar and mobile navbar functionality
    wp_enqueue_script("navbar color swap", get_theme_file_uri() . "/assets/js/navbar-controls.js", array(), "1.0",  true);

    //Header image parallax
    wp_enqueue_script("header image parallax", get_theme_file_uri() . "/assets/js/parallax.js", array(), "1.0",  true);

    //imported package
    wp_enqueue_script("owl Carosel Code", get_theme_file_uri() . "/assets/js/owl.carousel.min.js", array("jquery"), "1.0",  true);

    //my custom carosel controls
    wp_enqueue_script("Carosuel control", get_theme_file_uri() . "/assets/js/carousel.js", array("jquery", "owl Carosel Code"), "1.0",  true);

    if (is_home()) {

        //GSAP Animation JS 
        wp_enqueue_script("gsap animation", get_template_directory_uri() . "/assets/js/animations.js", array("gsap_cdn"), "1.0",  true);

        //Gsap CDN
        wp_enqueue_script('gsap_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '', true);


        //Vimeo js
        wp_enqueue_script("video js", get_template_directory_uri() . "/assets/js/video.js", array(), "1.0",  true);


        //reservation form 
        wp_enqueue_script("form_submition", get_template_directory_uri() . "/assets/js/reservation-form.js", array(), "1.0", true);
    }



    //single-rental
    wp_enqueue_script("single-rental-js", get_template_directory_uri() . "/assets/js/single-rental-functions.js", array(), "1.0", true);
}
add_action("wp_enqueue_scripts", "rentAVroom_register_scripts");
