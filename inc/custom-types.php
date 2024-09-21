<?php

/**
 * Кастомные типы
 * 
 * @package ASB Video
 */

add_action('init', 'asbvideo_register_post_types');

/*
 * Регистрация новый типов записи
 * - Проекты
 * - Типовые решения
*/

function asbvideo_register_post_types()
{
	$args_projects = [
		'label'  => esc_html__('Проекты', 'asbvideo'),
		'labels' => [
			'name'               => esc_html__('Проекты', 'asbvideo'),
			'singular_name'      => esc_html__('Проект', 'asbvideo'),
			'add_new'            => esc_html__('Добавить проект', 'asbvideo'),
			'add_new_item'       => esc_html__('Добавление проекта', 'asbvideo'),
			'edit_item'          => esc_html__('Редактирование проекта', 'asbvideo'),
			'new_item'           => esc_html__('Новый проект', 'asbvideo'),
			'view_item'          => esc_html__('Смотреть проект', 'asbvideo'),
			'search_items'       => esc_html__('Искать проект', 'asbvideo'),
			'not_found'          => esc_html__('Не найдено', 'asbvideo'),
			'not_found_in_trash' => esc_html__('Не найдено в корзине', 'asbvideo'),
			'parent_item_colon'  => '',
			'menu_name'          => esc_html__('Проекты'),
		],
		'description'            => esc_html__('Проекты'),
		'public'              => true,
		'publicly_queryable'  => false,
		'query_var '  		  => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'hierarchical'        => false,
		'supports'            => ['title', 'excerpt', 'thumbnail'],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
		'show_in_rest'        => true,
		'rest_base'           => true,
	];
	register_post_type('projects', $args_projects);

	$args_solutions = [
		'label'  => esc_html__('Типовые решения', 'asbvideo'),
		'labels' => [
			'name'               => esc_html__('Типовые решения', 'asbvideo'),
			'singular_name'      => esc_html__('Типовое решение', 'asbvideo'),
			'add_new'            => esc_html__('Добавить типовое решение', 'asbvideo'),
			'add_new_item'       => esc_html__('Добавление типового решения', 'asbvideo'),
			'edit_item'          => esc_html__('Редактирование типового решения', 'asbvideo'),
			'new_item'           => esc_html__('Новое типовое решение', 'asbvideo'),
			'view_item'          => esc_html__('Смотреть типовое решение решение', 'asbvideo'),
			'search_items'       => esc_html__('Искать типовое решение', 'asbvideo'),
			'not_found'          => esc_html__('Не найдено', 'asbvideo'),
			'not_found_in_trash' => esc_html__('Не найдено в корзине', 'asbvideo'),
			'parent_item_colon'  => '',
			'menu_name'          => esc_html__('Типовые решения'),
		],
		'description'            => esc_html__('Типовые решения'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'has_archive'        => true,
		'show_in_rest'       => true,
		'hierarchical'       => false,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'supports'            => ['title', 'editor', 'thumbnail', 'revisions'],
	];
	register_post_type('solutions', $args_solutions);
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

	acf_add_options_page(array(
		'page_title' => esc_html__('Настройки модалок', 'asbvideo'),
		'menu_title' => esc_html__('Настройки модалок', 'asbvideo'),
		'menu_slug'  => esc_html__('my-modals'),
		'capability' => esc_html__('edit_posts'),
		'redirect' => false
	));
}
