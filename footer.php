<?php

/**
 * Подвал сайта
 * 
 * @package ASB Video
 */
?>

</main>

<footer class="footer">
    <div class="footer__info">
        <div class="footer__legal-name"><span><?php the_field('footer_name', 'options'); ?></span></div>
        <div class="footer__location">
            <div class="footer__location-icon"></div>
            <span class="footer__location-name"><span><?php the_field('footer_location', 'options'); ?></span></span>
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
            <p class="footer__rights-text">2010-<?php echo current_time('Y'); ?> © <?php echo esc_html__('Все права защищены', 'asbvideo') ?></p>
            <a class="footer__telegram" href="https://<?php the_field('contacts_tg', 'options'); ?>">
                <img class="footer__telegram-icon" src="<?php bloginfo('template_url') ?>/assets/svg/telegram.svg" alt="Телеграм">
                <p class="footer__telegram-text"><?php echo esc_html__('Мы в Telegram', 'asbvideo') ?></p>
            </a>
        </div>
    </div>
    <div class="footer__contacts">
        <p class="footer__phone"><?php the_field('contacts_phone', 'options'); ?></p>
        <button class="footer__btn btn-green"><?php echo esc_html__('Оформить заказ', 'asbvideo') ?></button>
    </div>
    <div class="footer__rights-bottom">
        <p class="footer__rights-bottom-text">2010-<?php echo current_time('Y'); ?> © <?php echo esc_html__('Все права защищены', 'asbvideo') ?> </p>
        <a class="footer__telegram-bottom" href="https://t.me/asb_video">
            <img class="footer__telegram-icon" src="<?php bloginfo('template_url') ?>/assets/svg/telegram.svg" alt="Телеграм">
            <p class="footer__telegram-text"><?php echo esc_html__('Мы в Telegram', 'asbvideo') ?></p>
        </a>
    </div>
    <img src="<?php bloginfo('template_url') ?>/assets/svg/vectors/vector_2.svg" class="footer__vector-desktop" alt="Вектор">
    <img src="<?php bloginfo('template_url') ?>/assets/svg/vectors/vector_4.svg" class="footer__vector-mobile-1" alt="Вектор">
    <img src="<?php bloginfo('template_url') ?>/assets/svg/vectors/vector_3.svg" class="footer__vector-mobile-2" alt="Вектор">
</footer>

<?php wp_footer(); ?>
</body>

</html>