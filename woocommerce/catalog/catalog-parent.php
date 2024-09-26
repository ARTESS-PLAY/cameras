<?php 
/**
 * Шаблон вывода страницы категории продукта первого уровня
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;
?>
<?php $category  = get_queried_object();?>


<div class="catalog">

    <?php if($category->slug =='system-video'):?>
        <?php wc_get_template_part( 'catalog/catalog', 'types-solutios' );?>
    <?php endif?>

    <?php wc_get_template_part( 'catalog/catalog', 'list-category' );?>
    
</div>