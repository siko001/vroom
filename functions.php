<?php

// Custom Theme supports
include_once get_template_directory() . "/inc/custom-theme-options.php";

// Custom Fields inside the Customizer
include_once get_template_directory() . "/inc/customizer-fields.php";


// Css Enqueues
include_once get_template_directory() . "/inc/css-enqueue.php";
// Js Enqueues
include_once get_template_directory() . "/inc/js-enqueue.php";


//Function to turn [blue]word[/blue] into <span class="blue">word</blue>
function blue_text_shortcode($atts, $content = null) {
    return '<span class="blue"><strong>' . $content . '</strong></span>';
}
add_shortcode('blue', 'blue_text_shortcode');


function custom_login_message() {
    echo '<h1>Welcome to the website. Please login with this account</h1> <br> <h3 style="color:red;">Username: james@gmail.com</h3><br><h3 style="color:red;">Password: LR@%#11m7gVMqY6DqWL9xZE9</h3><br><p>you can edit the front page and customise content through the theme customizer add more blogs, services or even rental cars! front page will update accordingly</p><br>';
}
add_action('login_message', 'custom_login_message');
