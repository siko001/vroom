<?php get_header() ?>

<!-- ANimate -->
<div class="header">
    <div id="parallax-box">
        <img alt="Picture Of Car" class="header__image " src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>">

        <div class="center parallax__inside">
            <h1 class="custom-font"> Fast & Easy Way To Rent A Car</h1>
            <br>
            <p class="custom-font sub-heading">
                A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts
            </p>
            <br>
            <div class="video">
                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
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
<div class="angled-div">
    <div class="container">
        <div class="container__main">
            <div class="left">

                <form method="POST" action="#">
                    <h2 class="title custom-font">Make Your Trip</h2>
                    <div class="flex-group">
                        <label>PICK-UP LOCATION</label>
                        <br>
                        <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                    </div>
                    <div class="flex-group">
                        <label>DROP-OFF LOCATION</label>
                        <br>
                        <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                    </div>
                    <div class="form__group">
                        <div class="flex-group">
                            <label>PICK-UP DATE</label>
                            <br>
                            <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                        </div>
                        <div class="flex-group">
                            <label>DROP-OFF DATE</label>
                            <br>
                            <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                        </div>
                    </div>
                    <div class="flex-group">
                        <label>PICK-UP TIME</label>
                        <br>
                        <input type="text" class="form-control ui-timepicker-input" id="time_pick" placeholder="Time" autocomplete="off">
                    </div>
                    <div>
                        <button class="left-btn">Rent A Car Now</button>
                    </div>
                </form>
            </div>
            <div class="right">
                <div class="right__text">
                    <h3 class="custom-font font-light">Better Way to Rent Your Perfect Cars</h3>
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
                        <div class="logo__text font-light">Reserve Your Rental Car</div>
                    </div>
                </div>
                <div class="right-btn">
                    <button>Reserve Your Perfect Car</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<main>
    <!-- Rentals Section Animate-->
    <section id="rentals">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">what we offer</h4>
            <h2 class="custom-font main-heading">Featured Vehicles</h2>
        </div>



        <div class="carousel-container">
            <div class="owl-carousel owl-theme">

                <?php get_template_part("/template-parts/rentals") ?>

            </div>
        </div>

        <div class="left-slanting-line" style="top:-300px"></div>

    </section>
    <!-- End Rental Section  -->


    <!-- About us Section ANimate-->
    <section id="about-us">
        <div class="about-us__main-container">
            <div class="main-container__background">
                <div class="main-container__left">
                    <div class="text__image">
                        <img src="<?= get_theme_file_uri() . '/assets/images/pexels-erik-mclean-7629183.jpg' ?>">
                    </div>
                </div>
                <div class="main-container__right">
                    <div class="text__box">
                        <h5 class="box__section custom-font font-lighter">ABOUT US</h5>

                        <h2 class="box__title custom-font"> Welcome to Rent-A-<span class="blue">Vroom</span></h2>
                        <br>
                        <p class="box__para custom-font"> Malta's Mediterranean gem. <strong>Rent-A-<span class="blue">Vroom</span> </strong> your Maltese adventure. Explore in style with our well-maintained fleet and discover paradise around every bend</p>
                        <br>
                        <p class="box__para custom-font">Welcome to our sports car rental company, where <span class="blue"><strong>speed</strong></span>, style, and exhilaration unite. Our fleet boasts a selection of high-performance vehicles, from sleek roadsters to <span class="blue"><strong>powerful</strong></span> supercars. Whether it's a special occasion or simply a desire for <span class="blue"><strong>thrill</strong></span>, we put you in the driver's seat of your dream ride. Experience the rush of the open road as you command these precision-<span class="blue"><strong>engineered</strong></span> machines. Your journey begins with us, where every mile is a symphony of power and <span class="blue"><strong>luxury</strong></span></p>
                        <br>
                        <br>
                        <button class="custom-font about-btn">Search Vehicles</button>
                    </div>
                </div>

            </div>
            <!-- <div class="main-container__text">
               
             
            </div> -->
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- Services Section  to (*) make dynamic (*) AND ANIMATE-->
    <section id="services">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">Services</h4>
            <h2 class="custom-font main-heading ">Exclusive Services</h2>
        </div>
        <div class="container">
            <div class="service-container">
                <div class="services__logo">logo</div>
                <div class="services__title custom-font">title</div>
                <div class="services__para custom-font font-lighter">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum provident asperiores modi, facere quasi veniam, ut explicabo et voluptates, at doloribus! Culpa, velit veritatis.</div>
            </div>
            <div class="service-container">
                <div class="services__logo">logo</div>
                <div class="services__title custom-font">title</div>
                <div class="services__para custom-font font-lighter">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum provident asperiores modi, facere quasi veniam, ut explicabo et voluptates, at doloribus! Culpa, velit veritatis.</div>
            </div>
            <div class="service-container">
                <div class="services__logo">logo</div>
                <div class="services__title custom-font">title</div>
                <div class="services__para custom-font font-lighter">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum provident asperiores modi, facere quasi veniam, ut explicabo et voluptates, at doloribus! Culpa, velit veritatis.</div>
            </div>
            <div class="service-container">
                <div class="services__logo">logo</div>
                <div class="services__title custom-font">title</div>
                <div class="services__para custom-font font-lighter">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum provident asperiores modi, facere quasi veniam, ut explicabo et voluptates, at doloribus! Culpa, velit veritatis.</div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Image heading to (*) make dynamic (*) AND ANIMATE-->
    <div class="image-container">
        <div class="left-slanting-line-img" style="position:absolute;left:-800px;top:-100px;"></div>
        <img src="<?= get_theme_file_uri() ?>/assets/images/pexels-mike-bird-2365572.jpg">

        <h2 class="center-image__heading custom-font">Join Malta's Exclusive Rental
            <br> <button class="heading-button">Join Now</button>
        </h2>
    </div>
    <!-- Image heading end -->


    <!-- Testimonials To (*)Make Dynamic (*) AND ANIMATE -->
    <section id="testimonials">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">Testimonials</h4>
            <h2 class="custom-font main-heading ">Happy Clients</h2>
        </div>
        <div class="carousel-container">
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="testimonial__photo">

                    </div>
                    <p class="testimonial__para custom-font"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque similique error accusantium deserunt voluptates modi a mollitia dicta dolorem. Sequi.</p>
                    <h3 class="testimonial__name custom-font font-light"> Name Bla</h3>
                    <h4 class="testimonial__position custom-font blue">position</h4>
                </div>

                <div class="item">
                    <div class="testimonial__photo">

                    </div>
                    <p class="testimonial__para custom-font"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque similique error accusantium deserunt voluptates modi a mollitia dicta dolorem. Sequi.</p>
                    <h3 class="testimonial__name custom-font font-light"> Name Bla</h3>
                    <h4 class="testimonial__position custom-font blue">position</h4>
                </div>

                <div class="item">
                    <div class="testimonial__photo">

                    </div>
                    <p class="testimonial__para custom-font"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque similique error accusantium deserunt voluptates modi a mollitia dicta dolorem. Sequi.</p>
                    <h3 class="testimonial__name custom-font font-light"> Name Bla</h3>
                    <h4 class="testimonial__position custom-font blue">position</h4>
                </div>

                <div class="item">
                    <div class="testimonial__photo">

                    </div>
                    <p class="testimonial__para custom-font"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque similique error accusantium deserunt voluptates modi a mollitia dicta dolorem. Sequi.</p>
                    <h3 class="testimonial__name custom-font font-light"> Name Bla</h3>
                    <h4 class="testimonial__position custom-font blue">position</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Blog to (*)MAKE DYNAMIC (*) AND ANIMATE -->
    <section id="blog">
        <div class="section__heading">
            <h4 class="custom-font mini-heading">Blog</h4>
            <h2 class="custom-font main-heading ">Recent Blog</h2>
        </div>

        <div class="blog__container">
            <div class="blog__post">
                <div class="post__img">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/pexels-mike-bird-2365572.jpg" alt="">
                </div>
                <div class="post__info custom-font blue">
                    <div>date</div>
                    <div><i class="fa-regular fa-message"></i> Commenter</div>
                </div>
                <div class="post__title custom-font ">Why Lead Generation is Key for Business Growth</div>
                <div class="post__link">
                    <button>Read More</button>
                </div>
            </div>
            <div class="blog__post">
                <div class="post__img">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/pexels-erik-mclean-7629183.jpg" alt="">
                </div>
                <div class="post__info custom-font blue">
                    <div>date</div>
                    <div><i class="fa-regular fa-message"></i> Commenter</div>
                </div>
                <div class="post__title custom-font ">Why Lead Generation is Key for Business Growth</div>
                <div class="post__link">
                    <button>Read More</button>
                </div>
            </div>
            <div class="blog__post">
                <div class="post__img"><img src="<?php echo get_theme_file_uri() ?>/assets/images/pexels-mike-bird-2365572.jpg" alt=""></div>
                <div class="post__info custom-font blue">
                    <div>date</div>
                    <div><i class="fa-regular fa-message"></i> Commenter</div>
                </div>
                <div class="post__title custom-font ">Why Lead Generation is Key for Business Growth</div>
                <div class="post__link custom-font">
                    <button>Read More</button>
                </div>
            </div>
        </div>
    </section>

    <section id="numbers">
        <div class="container">
            <div class="background">
                <div class="left__background">
                    <div class="number__container custom-font">
                        <div class="number blue">20</div>
                        <div class="number__text font-light">
                            Luxurious
                            Sports-Cars
                        </div>
                    </div>
                </div>
                <div class="right__background">
                    <div class="number__container custom-font">
                        <div class="number blue">100+</div>
                        <div class="number__text font-light">
                            Pick-Ups
                            Drop-offs
                        </div>
                    </div>
                    <div class="number__container custom-font">
                        <div class="number blue">10</div>
                        <div class="number__text font-light">
                            Exclusive
                            Personal
                        </div>
                    </div>
                    <div class="number__container custom-font">
                        <div class="number blue">50+</div>
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


<?php get_footer() ?>