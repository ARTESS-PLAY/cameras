<?php
/*
Template Name: Шаблон страницы Каталога
Template Post Type: page
*/
get_header(); ?>

<?php wc_get_template_part( 'catalog/catalog', 'links' ); ?>

<div class="catalog">

	<?php wc_get_template('catalog/catalog-slider.php', ['title' => __('Хиты продаж', 'asbvideo'), 'slug' => 'hit'])?>

	<?php wc_get_template('catalog/catalog-slider.php', ['title' => __('Лучшие новинки', 'asbvideo'), 'slug' => 'new'])?>

</div>
<?php get_footer(); ?>