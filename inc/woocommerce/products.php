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


/**
 * Получить все продукты из метки
 * 
 * @param int $slug - slug метки из которой нужно получить продукты
 * 
 * @return WP_query
 */
function get_products_from_tag($slug){
    $args = array( 
        'post_type' => 'product', 
        'nopaging' => true, 
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'product_tag',
                'field'    => 'slug',
                'terms'    => array( $slug),
            ]
        ]
    );
    return new WP_Query( $args );
}


// Добавляем новое поле в "Основные" на странице редактирования товара
add_action( 'woocommerce_product_options_general_product_data', 'add_custom_unit_field' );
function add_custom_unit_field() {
    woocommerce_wp_select( array(
        'id'          => 'custom_product_unit', // ID мета-поля
        'label'       => __( 'Единица измерения', 'asbvideo' ),
        'description' => __( 'Выберите единицу измерения для этого товара.', 'asbvideo' ),
        'options'     => array(
            'pcs'          => __( 'Штуки', 'asbvideo' ),
            'meters'       => __( 'Метры', 'asbvideo' ),
            'complects'    => __( 'Комплекты', 'asbvideo' ),
            'buh'          => __( 'Бухта', 'asbvideo' ),
            'none'         => __( 'Без учета', 'asbvideo' ),
        )
    ) );
}


// Сохраняем значение единицы измерения при сохранении товара
add_action( 'woocommerce_process_product_meta', 'save_custom_unit_field' );
function save_custom_unit_field( $product_id ) {
    $custom_unit = isset( $_POST['custom_product_unit'] ) ? sanitize_text_field( $_POST['custom_product_unit'] ) : '';
    update_post_meta( $product_id, 'custom_product_unit', $custom_unit );
}


/**
 * Получение краткой еденицы товара
 * 
 * @param int $product_id - айди продукта
 * 
 * @return string - еденица измерериня товара
 */
function asb_get_product_unit($product_id){

    $unit = get_post_meta( $product_id, 'custom_product_unit', true);

    // Если не задано
    if(!$unit){
        return __('шт.', 'asbvideo' );
    }


    $acc = [
        'pcs'          => __( 'шт.', 'asbvideo' ),
        'meters'       => __( 'м', 'asbvideo' ),
        'complects'    => __( 'компл.', 'asbvideo' ),
        'buh'          => __( 'бухта', 'asbvideo' ),
        'none'         => '',
    ];

    return $acc[$unit];

}


/**
 * Красиво выводит цену
 * 
 * @param Wc_Product $product - продукт
 */
function asb_echo_price($product){
    echo wc_price(wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) ));
}