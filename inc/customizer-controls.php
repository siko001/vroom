<?php



$wp_customize->add_control('footer_email_address', array(
    'label' => __('Email Address'),
    'section' => 'footer_contact_info',
    'type' => 'text',
));


$wp_customize->add_control('footer_phone_number', array(
    'label' => __('Phone Number'),
    'section' => 'footer_contact_info',
    'type' => 'number',
));

$wp_customize->add_control('footer_address', array(
    'label' => __('Address'),
    'section' => 'footer_contact_info',
    'type' => 'text',
));


$wp_customize->add_control('footer_company_description', array(
    'label' => __('Short Company Description (footer)'),
    'section' => 'footer_contact_info',
    'type' => 'textarea',
));
