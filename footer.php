<footer>
    <div class="footer__main">
        <div class="footer__upper custom-font">
            <div class="footer__upper-container">
                <div class="upper-container__title">
                    <div class="navbar__logo">
                        <?php
                        $custom_logo_id = get_theme_mod("custom_logo");
                        $logo = wp_get_attachment_image_src($custom_logo_id, "full");
                        if (has_custom_logo()) {
                            echo '<img width=200 height=100 src="' . esc_url($logo[0]) . '"alt="' . get_bloginfo("name") . '">';
                        } else {
                            echo "<h1>" . get_bloginfo("name") . "</h1>";
                        }
                        ?>
                    </div>
                </div>
                <div class="upper-container__body">
                    <div class="footer__text">
                        <?php
                        $footer_company_description = get_theme_mod('footer_company_description');

                        if ($footer_company_description) {
                            echo "<p>" . $footer_company_description . "</p>";
                        } else {
                            echo "<h4 style='color:red'>Please Enter A Short Company Description in the Customizer</h4>";
                        }
                        ?>
                    </div>
                    <div class="socials blue"><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
            <div class="footer__upper-container">
                <div class="upper-container__title green">Information</div>
                <div class="upper-container__body">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'Footer Information Menu',
                        'menu_class' => 'navbar__menu footer_menu',
                    )); ?>
                </div>
            </div>
            <div class="footer__upper-container">
                <div class="upper-container__title green">Customer Support</div>
                <div class="upper-container__body">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'Footer Customer Support Menu',
                        'menu_class' => 'navbar__menu footer_menu',
                    )); ?>
                </div>
            </div>
            <div class="footer__upper-container">
                <div class="upper-container__title green">Have a Question?</div>
                <div class="upper-container__body ">
                    <div class="footer__contact">

                        <div>
                            <?= get_theme_mod('footer_address') ? "<i class='blue fa-solid fa-location-dot'></i> &nbsp;" : "" ?>
                            <?= get_theme_mod('footer_address'); ?>
                        </div>

                        <div>
                            <?= get_theme_mod('footer_phone_number') ? "<i class='blue fa-solid fa-phone'></i> &nbsp;" : "" ?>
                            <?= get_theme_mod('footer_phone_number'); ?>
                        </div>


                        <div>
                            <?= get_theme_mod('footer_email_address') ? "<i class='blue fa-solid fa-envelope'></i> &nbsp;" : "" ?>

                            <!-- mailto:  to send the email above -->
                            <?= get_theme_mod('footer_email_address'); ?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer__lower custom-font">
            Copyright ©2023 | This WordPress site built by <a href="https://neilmallia.com"><i class="fa-solid fa-user-secret blue"></i> <span style="color:red">Neil Mallia</span> <i class="fa-solid fa-gears"></i> <i class=" green fa-solid fa-code"></i></a>
        </div>
    </div>
</footer>




<?php wp_footer() ?>
<div class="overlay">
    <div class="mobile-nav__header">
        <div class="navbar__logo">
            <?php
            $custom_logo_id = get_theme_mod("custom_logo");
            $logo = wp_get_attachment_image_src($custom_logo_id, "full");
            if (has_custom_logo()) {
                echo '<img width=200 height=100 src="' . esc_url($logo[0]) . '"alt="' . get_bloginfo("name") . '">';
            } else {
                echo "<h1>" . get_bloginfo("name") . "</h1>";
            }
            ?>
        </div>
        <div class="navbar__close">
            <i class="fa-solid fa-x"></i>
        </div>
    </div>
    <hr width=70%>
    <br>
    <div class="navbar__menu custom-font">
        <?php wp_nav_menu(array(
            'theme_location' => 'Main menu',
            'menu_class' => 'navbar__menu',
        )); ?>
    </div>
    <br>
    <hr width=25%>
    <div class="navbar__footer">
        <a href="https://neilmallia.com" target="_blank"><img src="<?= get_theme_file_uri() ?>'/assets/images/logo7.png' " alt="developer Logo"></a>
    </div>
</div>



</body>

</html>