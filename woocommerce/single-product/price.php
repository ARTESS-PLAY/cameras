<?php
/**
 * Шаблон вывода цены
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

global $product;

?>

<div class="catalog__section-footer-cost">
	<span class="catalog__section-footer-new-cost"><?php asb_echo_price($product)?></span>

	<?php if($product->is_on_sale()):?>
		<span class="catalog__section-footer-old-cost"><?php echo wc_price(wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price() ) ));?></span>
	<?php endif;?>
</div>
