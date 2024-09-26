<?php 
/**
 * Шаблон карточки товара - главная информация
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<section class="catalog__section-description">

    <?php wc_get_template_part('single-product/title')?>
    
    <?php wc_get_template_part('single-product/main-info-content')?>

    <?php wc_get_template_part('single-product/main-info-footer')?>

</section>