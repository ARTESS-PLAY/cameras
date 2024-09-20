<?php 
/**
 * Шаблон вывода секции каталога со слайдером
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

$products_query  = get_products_from_tag($args['slug']);
?>

<section class="catalog__section">
    <p class="catalog__section-title"><?php echo $args['title']?></p>

    <?php if($products_query->have_posts()):?>

        <div class="swiper slider-1">
            <img class="button-prev" src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_left.svg" alt="Стрелка влево">

            <div class="swiper-wrapper">

                <?php while($products_query->have_posts()): $products_query->the_post()?>
                    <div class="swiper-slide">
                        <?php wc_get_template_part('product', 'card')?>
                    </div>
                <?php endwhile?>

                <?php $products_query->reset_postdata();?>
            </div>

            <img class="button-next" src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_left.svg" alt="Стрелка вправо">
        </div>
    <?php else:?>
        <p><?php echo esc_html__('Продуктов не найдено :(', 'asbvideo'); ?></p>
    <?php endif;?>
</section>