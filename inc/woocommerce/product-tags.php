<?php 
/**
 * Функции для работы с тегами продуктов
 * 
 * @package ASB Video
 */


/**
 * Делает архивную страницу тегов продуктов не публичной
 */
add_filter( 'register_taxonomy_args', 'my_tags_disable', 10, 3 );

function my_tags_disable( $args, $name, $object_type ) {
    if ( 'product_tag' !== $name ) {
        return $args;
    }

    $args['public'] = FALSE;
    $args['publicly_queryable'] = FALSE;

    return $args;
}


/**
 * Выводит тег
 * 
 * @param Wp_Term $term - какой терм выводим
 */
function asb_echo_tag($tag){
    $class = '';
    switch ($tag->slug) {
        case 'in_stock':
            $class = 'mark_stock';
            break;

        case 'hit':
            $class = 'mark_hit';
            break;

        case 'new':
            $class = 'mark_new';
            break;

        case 'for_order':
            $class = 'mark_order';
            break;
        
        default:
            return;
            break;
    }

    ?>
    <div class="product-card__mark <?php echo $class?>">
        <span class="product-card__mark-name"><?php echo $tag->name?></span>
    </div>
    <?php

}

/**
 * Выводит все теги для продукта
 * 
 * @param int $product_id - для какого продукта выводим 
 */
function asb_echo_tags($product_id){
    $terms = get_the_terms( $product_id, 'product_tag' );
    foreach ($terms as $term) {
        asb_echo_tag($term);
    }
}
