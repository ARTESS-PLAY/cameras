<?php 
/**
 * Шаблон вывода списка категорий
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

$cats = get_child_categories(get_queried_object()->term_id);
?>
<section class="catalog__section">
    <p class="catalog__section-title"><?php echo esc_html__('Категории товаров', 'asbvideo'); ?></p>

    <?php if(count($cats)):?>
        <div class="catalog__section-content content-cards">
            <?php foreach ($cats as $cat):?>

                <?php wc_get_template( 'catalog/catalog-category-card.php', ['cat' => $cat]);?>

            <?php endforeach;?>
        </div>
    <?php else:?>
        <p><?php echo esc_html__('Дочерних категорий не найдено :(', 'asbvideo'); ?></p>
    <?php endif;?>
</section>