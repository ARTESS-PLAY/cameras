<?php 
/**
 * Шаблон карточки товара - картинка
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

global $product;

$image =  wp_get_attachment_image_src( $product->get_image_id(), 'full' ) ? wp_get_attachment_image_src( $product->get_image_id(), 'full' )[0]  : wc_placeholder_img_src();
?>

<div class="product-card">
    <img class="product-card__img" src="<?php echo $image?>" alt="<?php the_title();?>">

    <?php asb_echo_tags($product->get_id());?>
</div>