<?php 
/**
 * Кастомные функции связанные с категориями woocommerce
 * 
 * @package ASB Video
 */

/**
 * Получить все дочерние категории
 */
function get_child_categories($parent){
    $args = [
        'taxonomy'      => [ 'product_cat'],
        'hide_empty'    => false,
        'parent'        => $parent,
        'exclude'       => array(15),
    ];

    return get_terms( $args );
}

/**
 * Получить все категории верхнего уровня
 */
function get_main_product_categories(){
    return get_child_categories(0);
}

/**
 * Получить id всех потомков для таксономии
 * @param $term_id - айди терма
 * 
 * @return array(int)
 */
function get_term_childs_id($term_id_in){
    $args = [
        'taxonomy'      => [ 'product_cat'],
        'hide_empty'    => false,
        'child_of'      => $term_id_in,
        'fields'        => 'ids'
    ];

    $terms = get_terms( $args );

    if(!is_array($terms)){
        $terms = [$terms];
    }

    return $terms;
}


/**
 * Проверяет, находится ли продукт в указанной 
 * 
 * @param $product_id - айди продукта
 * @param $term_id_in - айди терма, в цепочке которого должен находится продукт
 * 
 * @return bool
 */
function is_product_in_category($product_id, $term_id_in){
    $terms = get_term_childs_id($term_id_in);
    array_push($terms, $term_id_in);

    $prodcut_cats = get_the_terms($product_id, 'product_cat');

    if(!$prodcut_cats) return false;

    foreach ($prodcut_cats as $product_cat) {
        if(in_array($product_cat->term_id, $terms)) return true;
    }

    return false;
}

/**
 * Проверяет, находится ли терм в указанной 
 * 
 * @param $term_id - айди терма
 * @param $term_id_in - айди терма, в цепочке которого должен находится терм
 * 
 * @return bool
 */
function is_term_in_category($term_id, $term_id_in){
    $terms = get_term_childs_id($term_id_in);

    array_push($terms, $term_id_in);

    if(in_array($term_id, $terms)) return true;

    return false;
}

/**
 * Проверяет, находится ли объект (терм или продукт) в указанной 
 * 
 * @param $obj_id - айди терма или продукта
 * @param $term_id_in - айди терма, в цепочке которого должен находится объект
 * 
 * @return bool
 */
function is_in_product_category($term_id_in){
    $obj = get_queried_object();

    // Значит на странице продукта
    if($obj->ID){
        return is_product_in_category($obj->ID, $term_id_in);
    }

    // Иначе на странице категории
    return is_term_in_category($obj->term_id, $term_id_in);

}