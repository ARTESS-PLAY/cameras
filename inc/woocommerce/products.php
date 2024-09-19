<?php 
/**
 * Кастомные функции связанные с продуктами woocommerce
 * 
 * @package ASB Video
 */

/**
 * Получить все продукты из категории
 * 
 * @param int $term_id - айди категории из которой нужно получить продукты
 * 
 * @return WP_query
 */
function get_products_from_category($term_id){
    $args = array( 
        'post_type' => 'product', 
        'nopaging' => true, 
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'product_cat',
                'field'    => 'id',
                'terms'    => array( $term_id),
            ]
        ]
    );
    return new WP_Query( $args );
}