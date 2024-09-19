<?php 
/**
 * Шаблон вывода секции "типовые решения"
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;
?>

<section class="catalog__section">
    <p class="catalog__section-title"><?php echo esc_html__('Типовые решения', 'asbvideo'); ?></p>
    <div class="catalog__section-content content-articles">
        <a href="#">
            <article class="catalog__article">
                <img class="catalog__article-img" src="<?php bloginfo('template_url') ?>/assets/img/catalog_pics/house_1.png"
                    alt="Видеонаблюдение на&nbsp;складе">
                <p class="catalog__article-title">Видеонаблюдение на&nbsp;складе</p>
            </article>
        </a>
        <a href="#">
            <article class="catalog__article">
                <img class="catalog__article-img" src="<?php bloginfo('template_url') ?>/assets/img/catalog_pics/house_2.png"
                    alt="Видеонаблюдение в&nbsp;квартире">
                <p class="catalog__article-title">Видеонаблюдение в&nbsp;квартире</p>
            </article>
        </a>
        <a href="home_control/home_control.html">
            <article class="catalog__article">
                <img class="catalog__article-img" src="<?php bloginfo('template_url') ?>/assets/img/catalog_pics/house_3.png"
                    alt="Видеонаблюдение для дома">
                <p class="catalog__article-title">Видеонаблюдение для дома</p>
            </article>
        </a>
        <a href="#">
            <article class="catalog__article">
                <img class="catalog__article-img" src="<?php bloginfo('template_url') ?>/assets/img/catalog_pics/house_4.png"
                    alt="Видеонаблюдение в&nbsp;офисе">
                <p class="catalog__article-title">Видеонаблюдение в&nbsp;офисе</p>
            </article>
        </a>
        <a href="#">
            <article class="catalog__article">
                <img class="catalog__article-img" src="<?php bloginfo('template_url') ?>/assets/img/catalog_pics/house_5.png"
                    alt="Видеонаблюдение в&nbsp;магазине">
                <p class="catalog__article-title">Видеонаблюдение в&nbsp;магазине</p>
            </article>
        </a>
    </div>
</section>