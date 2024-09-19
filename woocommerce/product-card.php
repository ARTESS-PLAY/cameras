<?php 
/**
 * Шаблон вывода мини-карточки товара
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

global $product;

$image =  wp_get_attachment_image_src( $product->get_id(), 'thumbnail' ) ? wp_get_attachment_image_src( $product->get_id(), 'thumbnail' )[0]  : wc_placeholder_img_src();
?>
<a href="products/camera.html">
    <article class="product-card">
        <img class="product-card__img" src="<?php echo $image?>"
            alt="<?php echo $product->get_name()?>">
        <p class="product-card__title"><?php echo $product->get_name()?></p>
        <div class="product-card__footer">
            <p class="product-card__price"><?php echo wc_price(wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) ));?></p>
            <button class="btn-application product-card__btn">Заказать</button>
        </div>
        <div class="product-card__mark mark_stock">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/circle_green.svg" alt="Круг">
            <span class="product-card__mark-name">в наличии</span>
        </div>
    </article>
</a>