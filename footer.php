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
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam iure aliquam commodi quis deleniti nam exercitationem?</p>
                    </div>
                    <div class="socials blue"><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
            <div class="footer__upper-container">
                <div class="upper-container__title green">Information</div>
                <div class="upper-container__body">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'Main menu', // Use the registered location name
                        'menu_class' => 'navbar__menu footer_menu', // Use the custom class 'navbar__menu'
                    )); ?>
                </div>
            </div>
            <div class="footer__upper-container">
                <div class="upper-container__title green">Customer Support</div>
                <div class="upper-container__body">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'Main menu', // Use the registered location name
                        'menu_class' => 'navbar__menu footer_menu', // Use the custom class 'navbar__menu'
                    )); ?>
                </div>
            </div>
            <div class="footer__upper-container">
                <div class="upper-container__title green">Have a Question?</div>
                <div class="upper-container__body ">
                    <div class="footer__contact">
                        <div><i class=" blue fa-solid fa-location-dot"></i> &nbsp;1101, Binary Street, Matrix</div>
                        <div><i class=" blue fa-solid fa-phone"></i> &nbsp;(+356) 771010011</div>
                        <div><i class=" blue fa-solid fa-envelope"></i> &nbsp;http://neilmallia.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__lower custom-font">
            Copyright ©2023 | This WordPress site built by <i class="fa-solid fa-user-secret blue"></i> Neil Mallia <i class="fa-solid fa-gears"></i> <i class=" green fa-solid fa-code"></i>
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
            'theme_location' => 'Main menu', // Use the registered location name
            'menu_class' => 'navbar__menu', // Use the custom class 'navbar__menu'
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