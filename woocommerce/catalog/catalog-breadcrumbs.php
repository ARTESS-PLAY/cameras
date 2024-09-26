<?php 
/**
 * Шаблон вывода хлебных крошек для каталога
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;
?>

<nav class="catalog__breadcrumbs" aria-label="breadcrumb">
    <?php foreach (asb_get_catalog_breadcrumbs() as $elem):?>

        <?php if($elem['current']):?>
            <p class="link-green catalog__breadcrumbs-link link-green--active"><?php echo $elem['name']?></p>
        <?php else:?>
            <a class="link-green catalog__breadcrumbs-link" href="<?php echo $elem['url']?>"><?php echo $elem['name']?></a>
            <span>&gt;</span>
        <?php endif;?>

    <?php endforeach?>

</nav>