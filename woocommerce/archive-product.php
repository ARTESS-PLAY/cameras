<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
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
