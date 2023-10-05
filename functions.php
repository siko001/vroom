<?php
// Custom Theme supports
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
    // End Front page css imports -------------------------

    //Font Package
    wp_enqueue_style("font_import", "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap");
}
add_action("wp_enqueue_scripts", "rentAVroom_register_styles");



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

    //GSAP Animation JS 
    wp_enqueue_script("gsap animation", get_template_directory_uri() . "/assets/js/animations.js", array("gsap_cdn"), "1.0",  true);

    //Gsap CDN
    wp_enqueue_script('gsap_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '', true);
}
add_action("wp_enqueue_scripts", "rentAVroom_register_scripts");


//Sorting functions-------------------------------------
//function to dynamically sort content
function add_textarea_customizer_control($wp_customize, $section_id, $setting_id, $label) {
    $wp_customize->add_setting($setting_id, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control($setting_id . '_control', array(
        'label' => $label,
        'section' => $section_id,
        'settings' => $setting_id,
        'type' => 'textarea',
    ));
}

//-----------------------------------------------
//function to dynamically sort Images
function add_image_customizer_option($wp_customize, $setting_name, $control_label, $section_id) {
    // Add a setting to enable or disable featured images
    $wp_customize->add_setting($setting_name, array(
        'default' => true,
        'type' => 'theme_mod',
    ));

    // Add a control to select an image from the media library
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, $setting_name, array(
        'label' => $control_label,
        'section' => $section_id,
        'mime_type' => 'image',
    )));
}


function custom_things($wp_customize) {
    // Create the Front Page section
    $wp_customize->add_section('front_page', array(
        'title' => 'Front Page',
        'priority' => 1,
        "description" => "Customize the text for your front page. (To make blue text, wrap it with [blue]text[/blue] shortcode)",
    ));

    //Create The front Page Images Section
    $wp_customize->add_section('front_page_image', array(
        'title' =>  'Front Page Images',
        'priority' => 2,
    ));



    // Call the sort function with it's counterpart
    // ------------------------IMAGES----------------------------
    //About Section
    add_image_customizer_option(
        $wp_customize,
        'about_section_image',
        'About Section',
        'front_page_image'
    );

    // Mid page Image
    add_image_customizer_option(
        $wp_customize,
        'mid_page_image',
        'Mid Page Section',
        'front_page_image'
    );

    //----------------------------Text-----------------------
    // Add Page Header Title
    add_textarea_customizer_control($wp_customize, 'front_page', 'page_header', 'Page Header Title');
    // Add About Section Top Paragraph
    add_textarea_customizer_control($wp_customize, 'front_page', 'about_section_top_paragraph', 'About Section Top Paragraph');
    // Add About Section Bottom Paragraph
    add_textarea_customizer_control($wp_customize, 'front_page', 'about_section_bottom_paragraph', 'About Section Bottom Paragraph');
    //Add Mid page Image Paragraph
    add_textarea_customizer_control($wp_customize, "front_page", "mid_page_image_paragraph", "Mid Page Image Banner Paragraph");
}

add_action('customize_register', 'custom_things');


//Function to turn [blue]word[/blue] into <span class="blue">word</blue>
function blue_text_shortcode($atts, $content = null) {
    return '<span class="blue"><strong>' . $content . '</strong></span>';
}
add_shortcode('blue', 'blue_text_shortcode');
