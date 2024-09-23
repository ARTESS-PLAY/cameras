<?php 
/**
 * Список товаров для типового решения
 * 
 * @package ASB Video
 */

?>

<?php if(have_rows('created_products') || have_rows('not_created_products') ):?>

    <section class="catalog__section-components">
        <header>
            <p class="catalog__section-components-title"><?php echo __('Система', 'asbvideo') . ' "' . mb_strtolower(get_the_title()) . '" ' . __('включает в&nbsp;себя:', 'asbvideo')?></p>
        </header>
        <main class="catalog__section-list">
            <?php $price = 0?>
            <?php if(have_rows('created_products') ):?>
                <?php while (have_rows('created_products')): the_row()?>
                    <?php $product_id = get_sub_field('created_products_group')['product']?>
                    <?php $quantity = get_sub_field('created_products_group')['quantity']?>
                    <?php $product = wc_get_product($product_id)?>
                    <?php $image =  wp_get_attachment_image_src( $product->get_image_id(), 'full' ) ? wp_get_attachment_image_src( $product->get_image_id(), 'full' )[0]  : wc_placeholder_img_src();?>
                    <article class="catalog__section-list-item">
                        <p class="catalog__section-list-text"><?php echo get_the_title($product_id)?></p>
                        <span class="catalog__section-list-text-quantity"><?php echo (asb_get_product_unit($product_id) ? $quantity . asb_get_product_unit($product_id) : '')?></span>
                        <img src="<?php echo $image?>" alt="<?php echo get_the_title($product_id)?>">
                    </article>

                    <?php $price += $quantity  * $product->get_price();?>
                <?php endwhile;?>
            <?php endif;?>

            <?php if(have_rows('not_created_products') ):?>
                <?php while (have_rows('not_created_products')): the_row()?>
                    <article class="catalog__section-list-item">
                        <p class="catalog__section-list-text"><?php the_sub_field('product_title')?></p>
                        <span class="catalog__section-list-text-quantity"><?php echo (get_sub_field('product_unit') ? get_sub_field('product_quantity') . get_sub_field('product_unit') : '')?></span>
                        <img src="<?php the_sub_field('product_image')?>" alt="<?php the_sub_field('product_title')?>">
                    </article>
                    <?php $price += get_sub_field('product_quantity')  * get_sub_field('product_price');?>
                <?php endwhile;?>
            <?php endif;?>


        </main>
        <footer class="catalog__section-footer">
            <p class="catalog__section-footer-title"><?php _e('Цена:', 'asbvideo')?></p>
            <p class="catalog__section-footer-price">
                <span><?php echo wc_price($price)?></span>
                <span>*</span>
            </p>
            <p class="catalog__section-footer-note">
                <span>*</span>
                <span><?php _e('Базовая цена. Окончательная сумма устанавливается после обследования объекта.', 'asbvideo')?></span>
            </p>
        </footer>
    </section>

<?php endif;?>