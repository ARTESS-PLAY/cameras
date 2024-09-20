<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

get_header();

wc_get_template_part( 'catalog/catalog', 'links' );

$category  = get_queried_object();

// Если первого уровня
if($category->parent == 0){
	wc_get_template_part( 'catalog/catalog', 'parent' );
}else{
	//Иначе подключаем другой шаблон	
	wc_get_template_part( 'catalog/catalog', 'child' );
}


get_footer( );
