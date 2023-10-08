<?php

get_header();

while (have_posts()) : the_post();
    // Output your custom field values here (from ACF)
    $link = get_permalink();
    $make = get_field('car_manufacturer');
    $type = get_field('car_type');
    $price = get_field('price');
    $image = get_field('image');
    $description = get_field("description");
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
                <div class="item__group">
                    <button onclick=bookcar() class="group__button-left single-btn">Book now</button>
                    <button onclick=showDetails() class="group__button-right">Details</button>
                </div>
            </div>
        </div>

    </div>
    <div class="booking-overlay single-overlay">
        <div class="booked-car">
            <h3 class="custom-font"> Car Booked Staff will contact you Soon! <button class="close-btn" onclick=closeOverlay()>X</button></h3>
        </div>

    </div>
    <div class="details-overlay single-overlay">
        <div class="booked-car">
            <h2 class="custom-font"> <?php echo  $description ? "$description" : "no description" ?> <button class="close-btn" onclick=closeOverlay()>X</button></h2>
        </div>
    </div>


<?php
endwhile;

get_footer();
