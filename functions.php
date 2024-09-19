<?php

/**
 * Главная логика по подключению функционала тут
 * 
 *  @package ASB Video
 */

/**
 * Поключаем основную логкику
 */

require_once __DIR__ . '/inc/__loader.php';

/**
 * Подключаем стили и скрипты
 */

add_action('wp_enqueue_scripts', 'asbvideo_scripts');

function asbvideo_scripts()
{
	wp_enqueue_style('asb-video-swiper-style', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");

	wp_enqueue_script('asb-video-menu-script', get_template_directory_uri() . '/assets/js/menu.js', array(), null, true);

	wp_enqueue_script('asb-video-swiper-script', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), null, true);

	wp_enqueue_style('asb-video-general-style', get_template_directory_uri() . '/assets/css/general.css');

	wp_enqueue_style('asb-video-body-style', get_template_directory_uri() . '/assets/css/body.css');

	if (is_front_page()) {
		wp_enqueue_style('asb-video-main-style', get_template_directory_uri() . '/assets/css/main.css');
		wp_enqueue_script('asb-video-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
		wp_enqueue_script('asb-video-main_application-script', get_template_directory_uri() . '/assets/js/main_application.js', array(), null, true);
	}
	if (is_page_template('page-about-us.php')) {
		wp_enqueue_style('asb-video-about-style', get_template_directory_uri() . '/assets/css/about_us.css');
	}
	if (is_page_template('page-maintenance.php')) {
		wp_enqueue_style('asb-video-maintenance-style', get_template_directory_uri() . '/assets/css/installation_maintenance.css');
		wp_enqueue_style('asb-video-maintenance-style', get_template_directory_uri() . '/assets/js/application.css');

		wp_enqueue_style('asb-video-notyf-style', "https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css");
		wp_enqueue_script('asb-video-nonify', "https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js", array(), null, true);

		wp_enqueue_script('asb-video-application-script', get_template_directory_uri() . '/assets/js/application.js', array('asb-video-nonify'), null, true);
	}
	if (is_page_template('page-working.php')) {
		wp_enqueue_style('asb-video-working-style', get_template_directory_uri() . '/assets/css/working.css');
	}
	if (is_page_template('page-contacts.php')) {
		wp_enqueue_style('asb-video-contacts-style', get_template_directory_uri() . '/assets/css/contacts.css');
	}
	if (is_page_template('page-projects.php')) {
		wp_enqueue_style('asb-video-projects-style', get_template_directory_uri() . '/assets/css/projects.css');
		wp_enqueue_script('asb-video-projects-script', get_template_directory_uri() . '/assets/js/projects_slider.js', array('asb-video-swiper-script'), null, true);
	}

	if( is_singular( 'product' ) ){
		wp_enqueue_style('asb-video-camera-style', get_template_directory_uri() . '/assets/css/camera.css');
    }

	if( is_product_category() ){
		wp_enqueue_style('asb-video-tvi-style', get_template_directory_uri() . '/assets/css/tvi.css');
		wp_enqueue_style('asb-video-video_control-style', get_template_directory_uri() . '/assets/css/video_control.css');
    }
}

/**
 *
 * Добавление Миниатюры, тайтлтэг, регистрация меню и кастом
 */

add_action('after_setup_theme', 'asbvideo_theme_setup');

function asbvideo_theme_setup()
{

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');
	
	add_theme_support('woocommerce');

	register_nav_menus(
		[
			'header-menu' => esc_html__('Меню в шапке', 'asbvideo'),
			'footer-menu' => esc_html__('Меню в подвале', 'asbvideo'),
		]
	);

	add_theme_support(
		'custom-logo',
		[
			'height'      => 85,
			'width'       => 300,
			'flex-width'  => true,
			'flex-height' => true,
		]
	);
}
/*
   Добавление СВГ формата в админку
*/

add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes)
{
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svg']  = 'image/svg';

	return $mimes;
}

/**
 * Проверяет активна ли страница меню
 */
function check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (str_contains($menu_item->url, $actual_link) && $actual_link != ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]/") {
        return true;
    }
    return false;
}
