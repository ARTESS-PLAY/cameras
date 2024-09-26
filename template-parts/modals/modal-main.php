<?php 
/**
 * Модалка на главной для калькулятора
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

$rooms        = $args['rooms']; 
$meters       = $args['meters']; 
$need_setting = $args['need_setting']; 

?>
    <section class="application__modal application__modal-calculation">
        <header class="application__header">
            <img src="<?php the_field('logo_mini', 'options'); ?>" class="application__logo" alt="Логотип компании АСБ">
            <div class="application__block">
                <p class="application__block__min"><?php echo date('m.d.Yг. ', time());?></p>
                <p class="application__block__name"><?php echo esc_html__('Предварительный рассчёт стоимости установки системы видеонаблюдения', 'asbvideo') ?></p>
            </div>
            <div class="application__icons">
                <div class="application__icon cross-icon"></div>
                <div class="application__icon download-icon"></div>
            </div>
        </header>
        <main class="application__content application__calculation-content scroll-block wide-scroll-block">
            <div class="application__table">
                <span class="application__table-head application__table-tag">#</span>
                <span class="application__table-head"><?php echo esc_html__('Наименование', 'asbvideo') ?></span>
                <span class="application__table-head amount-col"><?php echo esc_html__('Кол-во', 'asbvideo') ?></span>
                <span class="application__table-head"><?php echo esc_html__('шт.', 'asbvideo') ?></span>
                <span class="application__table-head"><?php echo esc_html__('Цена', 'asbvideo') ?></span>
                <span class="application__table-head"><?php echo esc_html__('Стоимость', 'asbvideo') ?></span>
                <?php $total_price = 0;?>
                <?php if(have_rows('calc_blocks', 'options')):?>
                    <?php while(have_rows('calc_blocks', 'options')): the_row()?>
                        <?php 
                            $block_price = 0;
                            $counter = 1;
                        ?>
                        <div></div>
                        <span class="application__table-title"><?php the_sub_field('title')?></span>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>

                        <?php if(get_sub_field('created_products')):?>
                            <?php foreach (get_sub_field('created_products') as $product):?>
                                <?php $product_id = $product['created_products_group']['product']->ID?>
                                <?php $quantity = $product['created_products_group']['quantity']?>
                                <?php $_product = wc_get_product( $product_id );?>

                                <span class="application__table-elem application__table-num"><?php echo $counter?></span>
                                <span class="application__table-elem application__table-item-name"><?php echo get_the_title($product_id)?></span>
                                <span class="application__table-elem amount-col"><?php echo asb_get_product_unit($product_id) ? $quantity : ''?></span>
                                <span class="application__table-elem application__table-item-amount"><?php echo asb_get_product_unit($product_id)?></span>
                                <span class="application__table-elem"><?php asb_echo_price($_product)?></span>
                                <span class="application__table-elem application__table-cost"><?php echo wc_price($_product->get_price() * $quantity)?></span>

                                <?php $block_price += $_product->get_price() * $quantity?>

                                <?php $counter++?>
                            <?php endforeach?>
                        <?php endif;?>

                        <?php if(get_sub_field('not_created_products')):?>
                            <?php foreach (get_sub_field('not_created_products') as $product):?>

                                <span class="application__table-elem application__table-num"><?php echo $counter?></span>
                                <span class="application__table-elem application__table-item-name"><?php echo $product['product_title']?></span>
                                <span class="application__table-elem amount-col"><?php echo $product['product_unit'] ? $product['product_quantity'] : ''?></span>
                                <span class="application__table-elem application__table-item-amount"><?php echo $product['product_unit']?></span>
                                <span class="application__table-elem"><?php echo wc_price($product['product_price'])?></span>
                                <span class="application__table-elem application__table-cost"><?php echo wc_price($product['product_price'] * $product['product_quantity'])?></span>

                                <?php $block_price += $product['product_price']  * $quantity?>

                                <?php $counter++?>
                            <?php endforeach?>
                        <?php endif;?>

                        <div></div>
                        <span class="application__table-total"><?php _e('Всего за', 'asbvideo')?> <?php echo mb_strtolower(get_sub_field('title'))?>:</span>
                        <div></div>
                        <div></div>
                        <div></div>
                        <span class="application__table-total-cost"><?php echo wc_price($block_price)?></span>
                        <?php $total_price += $block_price?>
                    <?php endwhile?>
                <?php endif;?>

            </div>
        </main>

        <footer class="application__footer footer-amount">
            <div class="application__footer-amount-block">
                <span class="application__footer-amount-title"><?php echo esc_html__('ИТОГО ПО СМЕТЕ:', 'asbvideo') ?></span>
                <span class="application__footer-amount-price"><?php echo wc_price($total_price)?></span>
            </div>
            <div class="application__footer-block">
                <aside class="application__footnotes">
                    <div class="application__license">
                        <span class="application__license-title"><?php echo esc_html__('Лицензия:', 'asbvideo') ?></span>
                        <div class="application__license-number">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/document.svg" alt="Сертифицированный документ">
                            <span>МЧС России &#8470;&nbsp;77-Б/02699 от&nbsp;01.09.2010</span>
                        </div>
                    </div>
                    <div class="application__guarantee">
                        <div class="application__guarantee-text">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/guarantee.svg" alt="Знак гарантии">
                            <span><?php echo esc_html__('Гарантия на оборудование и выполненные работы:', 'asbvideo') ?></span>
                        </div>
                        <span class="application__guarantee-year"><?php echo esc_html__('1 год', 'asbvideo') ?></span>
                    </div>
                </aside>
                <button class="btn-application application__btn application__btn_wide"
                    id="btn_close-info-application"><?php echo esc_html__('Сформировать заявку', 'asbvideo') ?></button>
            </div>
        </footer>
    </section>
