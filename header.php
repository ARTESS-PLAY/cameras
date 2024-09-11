<?php

/**
 * Шапка сайта
 * 
 * @package ASB Video
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class('body'); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <?php the_custom_logo(); ?>

        <?php
        $menu = strip_tags(wp_nav_menu([
            'theme_location'  => 'header-menu',
            'container'       => 'nav',
            'container_class' => 'header__links',
            'echo'            => false,
            'items_wrap'      => '%3$s',
        ]), '<a><nav>');
        echo str_replace("<a", '<a class="header__link"', $menu);
        ?>

        <div class="header__btns">
            <button class="header__menu-btn"></button>
            <button class="header__phone-btn">
                <div class="header__phone-btn-icon"></div>
                <span class="header__phone-btn-text"><?php echo esc_html__('Заказать звонок', 'asbvideo') ?></span>
            </button>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/svg/vectors/vector_1.svg" class="header__vector-desktop" alt="Вектор">
    </header>

    <main class="wrapper">
        <div class="wrapper__menu">
            <div class="wrapper__menu-links">

                <?php
                $menu = strip_tags(wp_nav_menu([
                    'theme_location'  => 'header-menu',
                    'container'       => 'nav',
                    'container_class' => 'wrapper__menu-header-links',
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                ]), '<a><nav>');
                echo str_replace("<a", '<a class="wrapper__menu-link"', $menu);
                ?>

                <?php
                $menu = strip_tags(wp_nav_menu([
                    'theme_location'  => 'footer-menu',
                    'container'       => 'nav',
                    'container_class' => 'wrapper__menu-footer-links',
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                ]), '<a><nav>');
                echo str_replace("<a", '<a class="wrapper__menu-link"', $menu);
                ?>

            </div>
            <div class="wrapper__menu-footer">
                <div class="wrapper__menu-location">
                    <div class="wrapper__menu-icon"></div>
                    <span class="wrapper__menu-name"><span>Москва</span><span> и Московская область</span></span>
                </div>
                <p class="wrapper__menu-rights"><?php echo esc_html__('2010-2014 © Все права защищены', 'asbvideo') ?></p>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/vectors/vector_5.svg" class="wrapper__menu-vector-1" alt="Вектор">
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/vectors/vector_6.svg" class="wrapper__menu-vector-2" alt="Вектор">
            </div>
        </div>