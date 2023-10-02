<?php get_header() ?>
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

<main>
    continue this over here
</main>


<?php get_footer() ?>