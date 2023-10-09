<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>

        <div class="blog__post">
            <div class="post__img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="post__info custom-font blue">
                <div><?php echo get_the_date(); ?></div>
                <div><i class="fa-regular fa-message"></i> <?php the_author(); ?></div>
            </div>

            <div class="post-content custom-font">
                <?php the_excerpt(); ?>
            </div>
            <div class="post__title custom-font"><?php the_title(); ?></div>
            <div class="post__link">
                <a href="<?php the_permalink(); ?>"><button>Read More</button></a>
            </div>
        </div>

<?php
    endwhile;

    wp_reset_postdata(); // Reset the query
else :
    echo 'No blogs.';
endif;
?>