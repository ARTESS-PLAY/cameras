<?php 
/**
 * Шаблон вывода карточки категории
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

$cat = $args['cat']; 

$image_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
$image_url = wp_get_attachment_image_src( $image_id, 'thumbnail' ) ? wp_get_attachment_image_src( $image_id, 'thumbnail' )[0]  : wc_placeholder_img_src();

?>

<a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>">
    <article class="catalog__card">
        <img class="catalog__card-img" src="<?php echo $image_url?>"
            alt="<?php echo $cat->name ?>">

        <p class="catalog__card-title"><?php echo $cat->name ?></p>
    </article>
</a>