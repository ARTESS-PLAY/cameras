<?php

/**
 * Кастомные типы
 * 
 * @package ASB Video
 */

add_action('init', 'asbvideo_register_post_types');

/*
   Регистрация нового типа записи - Проекты
*/

function asbvideo_register_post_types()
{
	$args = [
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
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'excerpt', 'thumbnail'],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	];
	register_post_type('projects', $args);
}
