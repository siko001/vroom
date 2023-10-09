<?php
/*
Template Name: blog Template
*/ #
get_header(); ?>


<div class="heading text-custom">
    <h1>Blog</h1>
</div>
<?php

// Define your custom query arguments
$args = array(
    'posts_per_page' => -1,   // Display all posts of the custom post type
);

// Create a new WP_Query instance
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        $featured_image = get_the_post_thumbnail($post); // 'thumbnail' is the image size name

        // 
?>
        <br>
        <br>
        <div class="blog__container single-blog">
            <div class="blog__post">
                <div class="post__img">
                    <?php echo $featured_image; ?>
                </div>
                <div class="post__info custom-font blue">
                    <div><?php echo get_the_date(); ?></div>
                    <div><i class="fa-regular fa-message"></i> <?php the_author(); ?></div>
                </div>


                <div class="post__title custom-font "><?php the_content() ?></div>
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