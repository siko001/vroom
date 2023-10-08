<?php


// Content for the header
$header_text = get_theme_mod("page_header");

//Video Link
$video_link = get_theme_mod("video_link");

$front_page_image_id = get_theme_mod('about_section_image');
$mid_page_img = get_theme_mod("mid_page_image");

// Get the customized about section paragraph
$top_about_paragraph = get_theme_mod('about_section_top_paragraph');
$bottom_about_paragraph = get_theme_mod('about_section_bottom_paragraph');

//mid-page image paragraph
$mid_page_image_paragraph = get_theme_mod('mid_page_image_paragraph');


// Apply the [blue] shortcode to the content
$top_about_paragraph = do_shortcode($top_about_paragraph);
$bottom_about_paragraph = do_shortcode($bottom_about_paragraph);
$header_text = do_shortCode($header_text);
$mid_page_image_paragraph = do_shortcode($mid_page_image_paragraph);
