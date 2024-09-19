<?php
/*
Template Name: Шаблон страницы Каталога
Template Post Type: page
*/
get_header(); ?>

<?php wc_get_template_part( 'catalog/catalog', 'links' ); ?>

<div class="catalog">
	<section class="catalog__section">
		<p class="catalog__section-title">Хиты продаж</p>
		<div class="swiper slider-1">
			<img class="button-prev" src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_left.svg" alt="Стрелка влево">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/1.png"
								alt="Видеокамера HiWatch DS-T200P">
							<p class="product-card__title">Видеокамера HiWatch DS-T200P</p>
							<div class="product-card__footer">
								<p class="product-card__price">2 740₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/2.png"
								alt="IP-Видеокамера Hiwatch DS-T204">
							<p class="product-card__title">IP-Видеокамера Hiwatch DS-T204</p>
							<div class="product-card__footer">
								<p class="product-card__price">5 790₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/3.png"
								alt="IP-видеорегистратор HikVision DS-8632NI-E8">
							<p class="product-card__title">IP-видеорегистратор HikVision DS-8632NI-E8</p>
							<div class="product-card__footer">
								<p class="product-card__price">33 990₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/4.png"
								alt="Монитор ACER VA200HQb 19,5&rsquo;&rsquo;">
							<p class="product-card__title">Монитор ACER VA200HQb 19,5&rsquo;&rsquo;</p>
							<div class="product-card__footer">
								<p class="product-card__price">5 500₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/5.png"
								alt="Микрофон Stelberry M-1200">
							<p class="product-card__title">Микрофон Stelberry M-1200</p>
							<div class="product-card__footer">
								<p class="product-card__price">5 500₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/6.png"
								alt="Жесткий диск Western Digital WD60PURX">
							<p class="product-card__title">Жесткий диск Western Digital WD60PURX</p>
							<div class="product-card__footer">
								<p class="product-card__price">16 408₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/3.png"
								alt="IP-видеорегистратор HikVision DS-8632NI-E8">
							<p class="product-card__title">IP-видеорегистратор HikVision DS-8632NI-E8</p>
							<div class="product-card__footer">
								<p class="product-card__price">33 990₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_hit">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_orange.svg" alt="Круг">
								<span class="product-card__mark-name">хит продаж</span>
							</div>
						</article>
					</a>
				</div>
			</div>
			<img class="button-next" src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_left.svg" alt="Стрелка вправо">
		</div>
	</section>
	<section class="catalog__section">
		<p class="catalog__section-title">Лучшие новинки</p>
		<div class="swiper slider-2">
			<img class="button-prev" src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_left.svg" alt="Стрелка влево">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/7.png"
								alt="Вызывная панель COMMAX DRC-4DC">
							<p class="product-card__title">Вызывная панель COMMAX DRC-4DC</p>
							<div class="product-card__footer">
								<p class="product-card__price">12 200₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/8.png"
								alt="Видеодомофон COMMAX CDV-70K">
							<p class="product-card__title">Видеодомофон COMMAX CDV-70K</p>
							<div class="product-card__footer">
								<p class="product-card__price">16 565₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/9.png"
								alt="Накладной замок Полис-11-01">
							<p class="product-card__title">Накладной замок Полис-11-01</p>
							<div class="product-card__footer">
								<p class="product-card__price">3 315₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/10.png"
								alt="Охранно-пожарный прибор Астра-812 М">
							<p class="product-card__title">Охранно-пожарный прибор Астра-812 М</p>
							<div class="product-card__footer">
								<p class="product-card__price">5 990₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/11.png"
								alt="Источник питания СКАТ-1200М">
							<p class="product-card__title">Источник питания СКАТ-1200М</p>
							<div class="product-card__footer">
								<p class="product-card__price">2 990₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/12.png"
								alt="Аккумулятор DELTA DT-1218">
							<p class="product-card__title">Аккумулятор DELTA DT-1218</p>
							<div class="product-card__footer">
								<p class="product-card__price">3 390₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="#">
						<article class="product-card">
							<img class="product-card__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog_slider/9.png"
								alt="Накладной замок Полис-11-01">
							<p class="product-card__title">Накладной замок Полис-11-01</p>
							<div class="product-card__footer">
								<p class="product-card__price">3 315₽</p>
								<button class="btn-application product-card__btn">Заказать</button>
							</div>
							<div class="product-card__mark mark_new">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/circle_pink.svg" alt="Круг">
								<span class="product-card__mark-name">новинка</span>
							</div>
						</article>
					</a>
				</div>
			</div>
			<img class="button-next" src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_left.svg" alt="Стрелка вправо">
		</div>
	</section>
</div>
<?php get_footer(); ?>