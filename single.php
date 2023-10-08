<?

get_header(); // Include your theme's header.

while (have_posts()) : the_post();
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        <div class="post-meta">
            Author: <?php the_author(); ?> | Date: <?php the_date(); ?>
        </div>
    </article>

<?php
endwhile;

get_footer(); // Include your theme's footer.
?>