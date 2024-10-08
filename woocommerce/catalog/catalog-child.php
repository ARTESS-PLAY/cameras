<?php 
/**
 * Шаблон вывода страницы категории продукта вложенного уровня
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

 $category  = get_queried_object();
 $products = get_products_from_category( $category->term_id);
?>

<div class="catalog">
    
    <?php wc_get_template_part('catalog/catalog', 'breadcrumbs')?>

    <section class="catalog__section">
        <header class="catalog__section-header">
            <p class="catalog__section-title"><?php echo $category->name?></p>

            <?php wc_get_template_part( 'catalog/catalog', 'sort');?>

        </header>
        
        <?php if($products->have_posts()):?>

            <div class="catalog__section-content content-articles-grid scroll-block">
                <?php while ( $products->have_posts() ) : $products->the_post();?>
                    <?php wc_get_template_part('product', 'card')?>
                <?php endwhile;?>
            </div>

            <?php $products->reset_postdata()?>

        <?php else:?>
            <p><?php echo esc_html__('Продуктов не найдено :(', 'asbvideo'); ?></p>
        <?php endif;?>
    </section>
</div>