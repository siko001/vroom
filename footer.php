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