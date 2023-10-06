<?php


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

// Add a section for footer contact information
$wp_customize->add_section('footer_contact_info', array(
    'title' => __('Contact Information'),
    'priority' => 3,
));
