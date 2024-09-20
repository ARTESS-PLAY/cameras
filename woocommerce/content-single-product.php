<?php
/**
 * Шаблон карточки продукта
 * 
 * @package ASB Video
 */

defined( 'ABSPATH' ) || exit;

global $product;



if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<div class="catalog">

	<?php wc_get_template_part('catalog/catalog', 'breadcrumbs')?>

	<div class="catalog__section">
		
		<?php wc_get_template_part('single-product/main-info')?>

		<?php wc_get_template_part('single-product/properties')?>

		<button class="btn-dark-green catalog__section-footer-btn catalog__section-footer-mobile-btn"><?php _e('Заказать', 'asbvideo')?></button>
	</div>
</div>