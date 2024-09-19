<?php 
/**
 * Шаблон вывода ссылок каталога
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

?>

<div class="info">
    <p class="info__title"><?php esc_html__('Каталог', 'asbvideo')?></p>
    <nav class="info__links">
        <?php foreach (get_main_product_categories() as $cat):?>
            <?php $link = get_term_link($cat->slug, 'product_cat')?>

            <a href="<?php echo $link?>" class="info__link link-green <?php echo (is_in_product_category($cat->term_id) ? 'info__link_active' : '')?>">
                <?php echo $cat->name?>
            </a>

        <?php endforeach;?>
    </nav>
</div>