<?php
/*
Template Name: Comments Template
*/
get_header();

while (have_posts()) {
    the_post();
?>
    <div class="object-container custom-font">

        <?php
        the_content();
        ?>
    </div>
<?php
}

get_footer();
