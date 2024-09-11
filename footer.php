<?php

/**
 * Подвал сайта
 * 
 * @package ASB Video
 */
?>

<footer class="footer">
    <div class="footer__info">
        <div class="footer__legal-name"><span>ООО «Автономные Системы</span><span>Безопасности»</span></div>
        <div class="footer__location">
            <div class="footer__location-icon"></div>
            <span class="footer__location-name"><span>Москва</span><span> и Московская область</span></span>
        </div>
    </div>
    <div class="footer__details">

        <?php
        $menu = strip_tags(wp_nav_menu([
            'theme_location'  => 'footer-menu',
            'container'       => 'nav',
            'container_class' => 'footer__links',
            'echo'            => false,
            'items_wrap'      => '%3$s',
        ]), '<a><nav>');
        echo str_replace("<a", '<a class="footer__link"', $menu);
        ?>

        <div class="footer__rights">
            <p class="footer__rights-text">2010-2024 © Все права защищены</p>
            <a class="footer__telegram" href="https://t.me/asb_video">
                <img class="footer__telegram-icon" src="<?php bloginfo('template_url') ?>/assets/svg/telegram.svg" alt="Телеграм">
                <p class="footer__telegram-text">Мы в Telegram</p>
            </a>
        </div>
    </div>
    <div class="footer__contacts">
        <p class="footer__phone">+7 (495) 225-60-61</p>
        <button class="footer__btn">Оформить заказ</button>
    </div>
    <div class="footer__rights-bottom">
        <p class="footer__rights-bottom-text">2010-2024 © Все права защищены</p>
        <a class="footer__telegram-bottom" href="https://t.me/asb_video">
            <img class="footer__telegram-icon" src="<?php bloginfo('template_url') ?>/assets/svg/telegram.svg" alt="Телеграм">
            <p class="footer__telegram-text">Мы в Telegram</p>
        </a>
    </div>
    <img src="<?php bloginfo('template_url') ?>/assets/svg/vectors/vector_2.svg" class="footer__vector-desktop" alt="Вектор">
    <img src="<?php bloginfo('template_url') ?>/assets/svg/vectors/vector_4.svg" class="footer__vector-mobile-1" alt="Вектор">
    <img src="<?php bloginfo('template_url') ?>/assets/svg/vectors/vector_3.svg" class="footer__vector-mobile-2" alt="Вектор">
</footer>

<?php wp_footer(); ?>
</body>

</html>