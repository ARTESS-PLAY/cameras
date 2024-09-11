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

add_action('wp_enqueue_scripts', 'asb_video_scripts');

function asb_video_scripts()
{
	wp_enqueue_style('asb-video-main-style', get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_script('asb-video-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
	wp_enqueue_script('asb-video-header-script', get_template_directory_uri() . '/assets/js/header.js', array(), null, true);
	wp_enqueue_script('asb-video-menu-script', get_template_directory_uri() . '/assets/js/menu.js', array(), null, true);
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * as indicating support for post thumbnails.
 */

add_action('after_setup_theme', 'asb_video_theme_setup');

function asb_video_theme_setup()
{

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	register_nav_menus(
		[
			'header-menu' => esc_html__('Меню в шапке', 'asbvideo'),
			'footer-menu' => esc_html__('Меню в подвале', 'asbvideo'),
		]
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
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
