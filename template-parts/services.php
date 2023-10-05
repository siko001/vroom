<?php

$args = array(
    'post_type' => 'service',
    'posts_per_page' => 4,
    'order' => 'ASC',
    'orderby' => 'date',

);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        // Output your custom field values here (from ACF)
        $link = get_permalink();
        $make = get_field('icon');
        $type = get_field('service_type');
        $description = get_field('service_description');
?>

        <div class="service-container">
            <div class="services__logo"><?= $make ?></div>
            <div class="services__title custom-font"><?= $type ?></div>
            <div class="services__para custom-font font-lighter"><?= $description ?></div>
        </div>

<?php

    endwhile;
    wp_reset_postdata(); // Reset the query
else :
    echo 'No Services Avaliable.';
endif;
?>