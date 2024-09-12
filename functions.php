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
 * Enqueue scripts and styles.
 */

add_action('wp_enqueue_scripts', 'asbvideo_scripts');

function asbvideo_scripts()
{
	wp_enqueue_style('asb-video-swiper-style', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");

	wp_enqueue_script('asb-video-header-script', get_template_directory_uri() . '/assets/js/header.js', array(), null, true);
	wp_enqueue_script('asb-video-menu-script', get_template_directory_uri() . '/assets/js/menu.js', array(), null, true);

	wp_enqueue_script('asb-video-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

	wp_enqueue_script('asb-video-swiper-script', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), null, true);
	wp_enqueue_script('asb-video-slider-script', get_template_directory_uri() . '/assets/js/slider.js', array('asb-video-swiper-script'), null, true);

	if (is_front_page()) {
		wp_enqueue_style('asb-video-main-style', get_template_directory_uri() . '/assets/css/main.css');
	}
	if (is_page_template('page-about-us.php')) {
		wp_enqueue_style('asb-video-about-style', get_template_directory_uri() . '/assets/css/about_us.css');
	}
	if (is_page_template('page-maintenance.php')) {
		wp_enqueue_style('asb-video-maintenance-style', get_template_directory_uri() . '/assets/css/installation_maintenance.css');
	}
	if (is_page_template('page-working.php')) {
		wp_enqueue_style('asb-video-working-style', get_template_directory_uri() . '/assets/css/working.css');
	}
	if (is_page_template('page-contacts.php')) {
		wp_enqueue_style('asb-video-contacts-style', get_template_directory_uri() . '/assets/css/contacts.css');
	}
	if (is_page_template('page-projects.php')) {
		wp_enqueue_style('asb-video-projects-style', get_template_directory_uri() . '/assets/css/projects.css');
	}
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * as indicating support for post thumbnails.
 */

add_action('after_setup_theme', 'asbvideo_theme_setup');

function asbvideo_theme_setup()
{

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

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
/*
   Регистрация и подключение options page Acf
*/
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => esc_html__('Основные контакты', 'asbvideo'),
		'menu_title' => esc_html__('Основные контакты', 'asbvideo'),
		'menu_slug'  => esc_html__('my-options'),
		'capability' => esc_html__('edit_posts'),
		'redirect' => false
	));
}
