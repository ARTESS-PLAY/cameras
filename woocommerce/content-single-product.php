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
		<section class="catalog__section-description">
			<header>
				<p class="catalog__section-title">Видеокамера HiWatch DS-T200P</p>
			</header>
			<main class="catalog__section-block">
				<div class="product-card">
					<img class="product-card__img" src="<?php bloginfo('template_url') ?>/assets/img/catalog_pics/9.png"
						alt="Видеокамера HiWatch DS-T200P">
					<div class="product-card__mark mark_stock catalog__section-mark">
						<img src="<?php bloginfo('template_url') ?>/assets/img/icons/circle_green.svg" alt="Круг">
						<span class="product-card__mark-name">в наличии</span>
					</div>
				</div>
				<section class="catalog__section-specification">
					<p class="catalog__section-specification-title">Описание</p>
					<div class="catalog__section-specification-block">
						<p class="catalog__section-text">
							Аналоговая камера Hikvision HiWatch DS-T200P 2.8мм отличается функциональностью
							и&nbsp;удобством, чтоб делает отличным выбором для создания с&nbsp;нуля или
							модернизации
							существующей системы видео- наблюдения с&nbsp;минимальными затратами бюджета.
						</p>
						<p class="catalog__section-text">
							Данная модель выполнена в&nbsp;герметичном и&nbsp;прочном корпусе, устойчивом как
							к&nbsp;механическим воздействиям, так и&nbsp;к&nbsp;непогоде, что позволяет
							устанавливать устройство на&nbsp;улице.
						</p>
						<p class="catalog__section-text">
							Передача осуществляется в&nbsp;формате HDTVI или CVBS на&nbsp;расстояние
							до&nbsp;500&nbsp;м.
						</p>
					</div>
				</section>
			</main>
			<footer class="catalog__section-footer">
				<div class="catalog__section-footer-notes">
					<div class="catalog__section-footer-note">
						<img src="<?php bloginfo('template_url') ?>/assets/img/icons/car.svg" alt="Машина">
						<div class="catalog__section-footer-note-block">
							<p class="catalog__section-footer-note-title">Доставка по России*</p>
							<p class="catalog__section-footer-note-description">стоимость доставки уточняйте у
								менеджеров</p>
						</div>
					</div>
					<div class="catalog__section-footer-note">
						<img src="<?php bloginfo('template_url') ?>/assets/img/icons/card.svg" alt="Банковская карта">
						<p class="catalog__section-footer-note-title">Безопасная оплата</p>
					</div>
				</div>
				<div class="catalog__section-footer-ordering">
					<div class="catalog__section-footer-cost">
						<span class="catalog__section-footer-new-cost">2 740₽</span>
						<span class="catalog__section-footer-old-cost">3 590₽</span>
					</div>
					<button
						class="btn-dark-green catalog__section-footer-btn catalog__section-footer-desctop-btn">Заказать</button>
				</div>
			</footer>
		</section>

		<section class="catalog__section-components">
			<header>
				<p class="catalog__section-components-title">Характеристики HiWatch DS-T200P</p>
			</header>
			<main class="catalog__section-list scroll-block">
				<div class="catalog__section-list-block">
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Артикул</p>
						<span class="catalog__section-list-item-text text-article">1617686480</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Бренд</p>
						<span class="catalog__section-list-item-text text-brand">HiWatch</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Страна-изготовитель</p>
						<span class="catalog__section-list-item-text">Китай</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Место установки камеры</p>
						<span class="catalog__section-list-item-text">Наружная</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Вид камеры</p>
						<span class="catalog__section-list-item-text">Аналоговая</span>
					</article>
				</div>
				<div class="catalog__section-list-block">
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Степень защиты</p>
						<span class="catalog__section-list-item-text">IP66</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Дальность ИК-подсветки, м</p>
						<span class="catalog__section-list-item-text">20</span>
					</article>
				</div>
				<div class="catalog__section-list-block">
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Цветность дисплея</p>
						<span class="catalog__section-list-item-text">Цветной</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Количество пикселей</p>
						<span class="catalog__section-list-item-text">2.0 Мпикс</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Угол обзора, градусов</p>
						<span class="catalog__section-list-item-text">82,6</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Фокусное расстояние</p>
						<span class="catalog__section-list-item-text">3.6 мм</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Тип матрицы</p>
						<span class="catalog__section-list-item-text">CMOS 1/2.7”</span>
					</article>
				</div>
				<div class="catalog__section-list-block">
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Цветность дисплея</p>
						<span class="catalog__section-list-item-text">Цветной</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Количество пикселей</p>
						<span class="catalog__section-list-item-text">2.0 Мпикс</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Угол обзора, градусов</p>
						<span class="catalog__section-list-item-text">82,6</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Фокусное расстояние</p>
						<span class="catalog__section-list-item-text">3.6 мм</span>
					</article>
					<article class="catalog__section-list-item">
						<p class="catalog__section-list-item-name">Тип матрицы</p>
						<span class="catalog__section-list-item-text">CMOS 1/2.7”</span>
					</article>
				</div>
			</main>
		</section>

		<button class="btn-dark-green catalog__section-footer-btn catalog__section-footer-mobile-btn">Заказать</button>
	</div>
</div>