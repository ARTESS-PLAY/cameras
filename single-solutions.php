<?php 
/**
 * Шаблон вывода типового решения
 */

get_header();
?>
    <?php wc_get_template_part( 'catalog/catalog', 'links' ); ?>

    <div class="catalog solution">

        <?php wc_get_template_part('catalog/catalog', 'breadcrumbs')?>

        <div class="catalog__section">
            <section class="catalog__section-description">
                <p class="catalog__section-title"><?php the_title()?></p>
                <?php the_content();?>
                <button class="btn-green catalog__section-btn catalog__section-btn-desktop btn_open-installation-application"><?php _e('Оставить заявку', 'asbvideo')?></button>
            </section>

            <?php get_template_part('template-parts/soulitions-list')?>
            
            <button class="btn-green catalog__section-btn catalog__section-btn-mobile btn_open-installation-application"><?php _e('Оставить заявку', 'asbvideo')?></button>
        </div>
    </div>

<?php get_footer()?>