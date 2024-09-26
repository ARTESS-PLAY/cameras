<?php 
/**
 * Шаблон карточки товара - характеристики
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

global $product;

$first = true;
?>

<section class="catalog__section-components">
    <header>
        <h2 class="catalog__section-components-title"><?php echo __('Характеристики', 'asbvideo') . ' ' . get_the_title()?></h2>
    </header>

    <main class="catalog__section-list scroll-block">

        <?php if(have_rows('properties')):?>

            <?php while(have_rows('properties')): the_row()?>

            <div class="catalog__section-list-block">

                <?php if($first):?>
                    <?php $first = false?>

                    <article class="catalog__section-list-item">
                        <p class="catalog__section-list-item-name"><?php _e('Артикул', 'asbvideo')?></p>
                        <span class="catalog__section-list-item-text text-article"><?php echo $product->get_sku(); ?></span>
                    </article>

                <?php endif;?>

                <?php foreach (get_sub_field('group') as $group):?>

                    <article class="catalog__section-list-item">
                        <p class="catalog__section-list-item-name"><?php echo $group['label']?></p>
                        <span class="catalog__section-list-item-text"><?php echo $group['value']?></span>
                    </article>

                <?php endforeach;?>

            </div>

            <?php endwhile;?>

        <?php else:?>

            <div class="catalog__section-list-block">
                <article class="catalog__section-list-item">
                    <p class="catalog__section-list-item-name"><?php _e('Артикул', 'asbvideo')?></p>
                    <span class="catalog__section-list-item-text text-article"><?php echo $product->get_sku(); ?></span>
                </article>
            </div>

        <?php endif;?>

    </main>
</section>