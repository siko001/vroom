<?php
get_header(); // Include your theme's header.

while (have_posts()) : the_post();
    $featured_image = get_the_post_thumbnail($post); // 'thumbnail' is the image size name
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


<?php endwhile;

get_footer(); // Include your theme's footer.
?>


<!-- 
   
 -->