<?php


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

    //Added Sections to the wordpress Customizer
    include_once get_template_directory() . "/inc/customizer-section.php";

    //settings for the Fields in the customizer
    include_once get_template_directory() . "/inc/customizer-settings.php";

    //Controls
    include_once get_template_directory() . "/inc/customizer-controls.php";

    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('custom_css');


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
    //video links
    add_textarea_customizer_control($wp_customize, 'front_page', 'video_link', 'Video Link');
    // Add About Section Top Paragraph
    add_textarea_customizer_control($wp_customize, 'front_page', 'about_section_top_paragraph', 'About Section Top Paragraph');
    // Add About Section Bottom Paragraph
    add_textarea_customizer_control($wp_customize, 'front_page', 'about_section_bottom_paragraph', 'About Section Bottom Paragraph');
    //Add Mid page Image Paragraph
    add_textarea_customizer_control($wp_customize, "front_page", "mid_page_image_paragraph", "Mid Page Image Banner Paragraph");
}

add_action('customize_register', 'custom_things');
