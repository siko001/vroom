<?php
/*
Template Name: all-rentals Template
*/ #
get_header();

// Define your custom query arguments
$args = array(
    'post_type' => 'rental', // Replace 'rentals' with your custom post type name
    'posts_per_page' => -1,   // Display all posts of the custom post type
);

// Create a new WP_Query instance
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        // Output your custom field values here (from ACF)
        $link = get_permalink();
        $make = get_field('car_manufacturer');
        $type = get_field('car_type');
        $price = get_field('price');
        $image = get_field('image');
?>



        <div class="single-rental">
            <div class="item">
                <div class="item__image">
                    <img height="200px" width="100%" src="<?= $image ?>" alt="Car Picture" />
                </div>
                <br>
                <div class="item__text">
                    <div class="item__title">
                        <h2 class="custom-font"> <?= $type ?></h2>
                    </div>
                    <div class="item__group">
                        <h3 class="group__type custom-font font-lightest"><?= $make ?></h3>
                        <h3 class="group__price custom-font font-lightest"><span class="product__price">$<?= $price ?></span> /day</h3>
                    </div>
                    <br>

                </div>
            </div>


    <?php

    endwhile;

    wp_reset_postdata(); // Reset the query
else :
    echo 'No Rentals Avaliable.';
endif;



get_footer();
    ?>