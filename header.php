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

        <a class="header__logo" href="/"><img src="<?php the_field('logo', 'options'); ?>"></a>

        <nav class="header__links">

            <?php $menu_items = wp_get_nav_menu_items( get_nav_menu_locations()['header-menu']) ?>

            <?php foreach ((array) $menu_items as $key => $menu_item ): ?>
                <?php if ( ! $menu_item->menu_item_parent ):?>
                    <a href='<?php echo $menu_item->url ?>' class="<?php echo (check_active_menu($menu_item) ? 'header__link_active' : '')?> header__link link-green "><?php echo $menu_item->title;?></a>
                <?php endif;?>
            <?php endforeach?>
        
        </nav>

        <div class="header__btns">
            <button class="header__menu-btn"></button>
            <button class="header__phone-btn btn-dark-green">
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
                    <span class="wrapper__menu-name"><span><?php the_field('footer_location', 'options'); ?></span></span>
                </div>
                <p class="wrapper__menu-rights"><?php echo esc_html__('2010-2014 © Все права защищены', 'asbvideo') ?></p>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/vectors/vector_5.svg" class="wrapper__menu-vector-1" alt="Вектор">
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/vectors/vector_6.svg" class="wrapper__menu-vector-2" alt="Вектор">
            </div>
        </div>