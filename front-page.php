<?php get_header();



include_once get_template_directory() . "/inc/homepage-variables.php";

?>

<div id="home" class="header">
    <div id="parallax-box">
        <img alt="Picture Of Car" class="header__image " src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>">

        <div class="center parallax__inside" id="header-text">
            <h1 class="custom-font">
                <?php echo $header_text ?></h1>
            <br>
            <p class="custom-font sub-heading">
                <?= $top_about_paragraph  ?>
            </p>
            <br>
            <div id="play-btn-id" class="video">
                <div class="play-btn"><i class="fa-solid fa-play"></i>
                </div>
                <div class="text">
                    <span class="line"></span>
                    <div class="custom-font">
                        <p>
                            Easy steps for renting a car
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-nav-stop" class="control"></div>
<div class="angled-div">
    <div class="container">
        <div class="container__main">
            <div id="form-container" class="left">

                <form method="POST" id="reservation_form" action="#">
                    <h2 class="title custom-font">Make Your Trip</h2>
                    <div class="flex-group">
                        <label>PICK-UP LOCATION</label>
                        <br>
                        <input type="text" name="pick-up-loaction" class="form-control" placeholder="City, Airport, Station, etc">
                    </div>
                    <div class="flex-group">
                        <label>DROP-OFF LOCATION</label>
                        <br>
                        <input type="text" class="form-control" name="drop-off-location" placeholder="City, Airport, Station, etc">
                    </div>
                    <div class="form__group">
                        <div class="flex-group">
                            <label>PICK-UP DATE</label>
                            <br>
                            <input type="date" class="form-control" name="pick-up-date" id="book_pick_date" placeholder="Date">
                        </div>
                        <div class="flex-group">
                            <label>DROP-OFF DATE</label>
                            <br>
                            <input type="date" class="form-control" name="drop-off-date" id="book_off_date" placeholder="Date">
                        </div>
                    </div>
                    <div class="flex-group">
                        <label>PICK-UP TIME</label>
                        <br>
                        <input type="time" class="form-control ui-timepicker-input" name="pick-up-time" id="time_pick" placeholder="Time" autocomplete="off">
                    </div>
                    <div>
                        <button class="left-btn">Rent A Car Now</button>
                    </div>
                </form>
                <div id="success-overlay" class="success-overlay">
                    <div class="success-overlay-content">
                        <div class="success-overlay-text custom-font">
                            <p>Reservation Submitted Successfully<br><br>
                                We'll get back to you soon!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="right__text">
                    <h3 class="custom-font font-light">Better Way to Rent Your Luxurious Cars</h3>
                </div>
                <div class="right__logos">
                    <div class="logo__container">
                        <div class="logo"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="logo__text font-light">Choose Your Pickup Location</div>
                    </div>
                    <div class="logo__container">
                        <div class="logo"><i class="fa-solid fa-handshake"></i></div>
                        <div class="logo__text font-light">Select the Best Deal</div>
                    </div>
                    <div class="logo__container">
                        <div class="logo"><i class="fa-solid fa-car"></i></div>
                        <div class="logo__text font-light">Reserve Your Car</div>
                    </div>
                </div>
                <div class="right-btn">
                    <a href="#cars"><button>Reserve Your Car</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<main>
    <!-- Rentals Section Animate-->
    <section id="rentals">
        <div id="cars" class="section__heading">
            <h4 class="custom-font mini-heading">what we offer</h4>
            <h2 class="custom-font main-heading">Featured Vehicles</h2>
        </div>
        <div id="carousel-container" class="carousel-container">
            <div class="owl-carousel owl-theme">

                <?php get_template_part("/template-parts/rentals") ?>
            </div>
        </div>
        <div>
            <br>
            <br>
            <br>
            <br>
        </div>
        <!-- <div class="left-slanting-line" style="top:-300px"></div> -->

    </section>
    <!-- End Rental Section  -->


    <!-- About us Section ANimate-->
    <section id="about-us">
        <div class="about-us__main-container">
            <div class="main-container__background">
                <div class="main-container__left">
                    <div class="text__image">
                        <?php if ($front_page_image_id) {
                            echo wp_get_attachment_image($front_page_image_id, "100%");
                        } ?>
                    </div>
                </div>
                <div id="about" class="main-container__right">
                    <div class="text__box" id="about-us-text">
                        <h5 class="box__section custom-font font-lighter">ABOUT US</h5>
                        <h2 class="box__title custom-font"> Welcome to <?php bloginfo('name'); ?>
                        </h2>
                        <br>
                        <p class="box__para custom-font"> <?php echo $top_about_paragraph ?></p>
                        <br>
                        <p class="box__para custom-font">
                            <?php echo $bottom_about_paragraph ?>
                        </p>
                        <br>
                        <br>
                        <a href="#cars" class="custom-font about-btn">Search Vehicles</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- Services Section -->
    <section id="services">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">Services</h4>
            <h2 class="custom-font main-heading ">Exclusive Services</h2>
        </div>
        <div class="container">

            <?php get_template_part("/template-parts/services") ?>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Image heading -->
    <div class="image-container">
        <div class="left-slanting-line-img" style="position:absolute;left:-800px;top:-100px;"></div>
        <?php if ($mid_page_img) {
            echo wp_get_attachment_image($mid_page_img, "100%");
        } ?>

        <h2 class="center-image__heading custom-font"><?= $mid_page_image_paragraph ?>
            <a href="#reservation_form" class="heading-button">Join Now</a>
        </h2>

    </div>
    <!-- Image heading end -->


    <!-- Testimonials -->
    <section id="testimonials">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">Testimonials</h4>
            <h2 class="custom-font main-heading ">Happy Clients</h2>
        </div>
        <div class="carousel-container">
            <div class="owl-carousel owl-theme">

                <?php get_template_part("/template-parts/testimonials") ?>
            </div>
        </div>
    </section>
    <!-- End Tesimonials -->

    <!-- Start Blog   -->
    <section id="blog">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">Blog</h4>
            <h2 class="custom-font main-heading ">Recent Blog</h2>
        </div>

        <div class="blog__container">
            <?php get_template_part("template-parts/blog")  ?>
        </div>
    </section>
    <!-- End blog -->
    <div id="number-start">
    </div>
    <!-- Numbers start -->
    <section id="numbers">
        <div id="pricing" class="container">
            <div class="background">
                <div class="left__background">
                    <div class="number__container custom-font">
                        <div class="number blue"></div>
                        <div class="number__text font-light">
                            Luxurious
                            Sports-Cars
                        </div>
                    </div>
                </div>
                <div class="right__background">
                    <div class="number__container custom-font">
                        <div class="number blue"></div>
                        <div class="number__text font-light">
                            Pick-Ups
                            Drop-offs
                        </div>
                    </div>
                    <div class="number__container custom-font">
                        <div class="number blue"></div>
                        <div class="number__text font-light">
                            Exclusive
                            Personal
                        </div>
                    </div>
                    <div class="number__container custom-font">
                        <div class="number blue"></div>
                        <div class="number__text font-light">
                            Upgrades
                            Avaliable
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Video Box -->
<div class="vimeo-shadowbox vimeo-shadowbox--hidden">
    <div class="vimeo-shadowbox__video-wrapper">
        <div class="vimeo-shadowbox__video">
            <iframe src="<?= $video_link ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <a class="vimeo-shadowbox__close-button" href="#">Close</a>
    </div>
</div>



<?php get_footer() ?>