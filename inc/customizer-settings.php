<?php
// Add an option for the email address
$wp_customize->add_setting('footer_email_address', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_email',
));

// Add an option for the phone number
$wp_customize->add_setting('footer_phone_number', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));
// Add an option for the phone number
$wp_customize->add_setting('footer_address', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add an option for the phone number
$wp_customize->add_setting('footer_company_description', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));
