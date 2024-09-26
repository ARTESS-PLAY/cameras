<?php 
/**
 * Шаблон карточки товара - кнопочки, цены и нижняя инфа
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<footer class="catalog__section-footer">
    <div class="catalog__section-footer-notes">

        <div class="catalog__section-footer-note">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/car.svg" alt="Машина">
            <div class="catalog__section-footer-note-block">
                <p class="catalog__section-footer-note-title"><?php _e('Доставка по России*', 'asbvideo')?></p>
                <p class="catalog__section-footer-note-description"><?php _e('стоимость доставки уточняйте у
                    менеджеров', 'asbvideo')?></p>
            </div>
        </div>

        <div class="catalog__section-footer-note">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/card.svg" alt="Банковская карта">
            <p class="catalog__section-footer-note-title"><?php _e('Безопасная оплата', 'asbvideo')?></p>
        </div>

    </div>

    <div class="catalog__section-footer-ordering">

        <?php wc_get_template_part('single-product/price')?>    

        <button class="btn-dark-green catalog__section-footer-btn catalog__section-footer-desctop-btn"><?php _e('Заказать', 'asbvideo')?></button>
    </div>
</footer>