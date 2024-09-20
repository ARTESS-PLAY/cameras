<?php 
/**
 * Шаблон карточки товара - основная информация
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<main class="catalog__section-block">

    <?php wc_get_template_part('single-product/main-info-image')?>

    <section class="catalog__section-specification">
        <p class="catalog__section-specification-title"><?php _e('Описание', 'asbvideo')?></p>

        <div class="catalog__section-specification-block">

            <?php the_content();?>

        </div>

    </section>
</main>