<?php

// Custom Theme supports
include_once get_template_directory() . "/inc/custom-theme-options.php";

// Custom Fields inside the Customizer sections
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
