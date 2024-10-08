<?php
/**
 * Шаблон вывода карточки товара
 * 
 * @package ASB Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<?php wc_get_template_part( 'catalog/catalog', 'links' ); ?>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<?php wc_get_template_part( 'content', 'single-product' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php
get_footer();