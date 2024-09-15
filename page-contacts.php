<?php
/*
Template Name: Шаблон страницы Контакты
Template Post Type: page
*/
get_header(); ?>
<div class="info">
	<div class="sections">
		<section class="section">
			<p class="section__title"><?php echo esc_html__('Контакты', 'asbvideo') ?></p>
			<div class="section__group">
				<div class="section__col">
					<div class="section__col-title">
						<img src="<?php bloginfo('template_url'); ?>/assets/svg/address.svg" class="section__col-icon" alt="Адрес">
						<p class="section__col-name"><?php echo esc_html__('Адрес офиса:', 'asbvideo') ?></p>
					</div>
					<div class="section__col-title section_margin">
						<img src="<?php bloginfo('template_url'); ?>/assets/svg/clock.svg" class="section__col-icon" alt="Часы">
						<p class="section__col-name"><?php echo esc_html__('Время работы офиса:', 'asbvideo') ?></p>
					</div>
					<div class="section__col-title">
						<img src="<?php bloginfo('template_url'); ?>/assets/svg/phone_menu_active.svg" class="section__col-icon" alt="Телефон">
						<a href="tel:<?php the_field('contacts_phone_link', 'option'); ?>">
							<p class="section__col-name"><?php the_field('contacts_phone', 'option'); ?></p>
						</a>
					</div>
					<div class="section__col-title">
						<img src="<?php bloginfo('template_url'); ?>/assets/svg/mail.svg" class="section__col-icon" alt="Почта">
						<a href="mailto:info@asb-video.ru">
							<p class="section__col-name"><?php the_field('contacts_email', 'option'); ?></p>
						</a>
					</div>
					<div class="section__col-title section_margin">
						<img src="<?php bloginfo('template_url'); ?>/assets/svg/telegram_filled.svg" class="section__col-icon" alt="Телеграм">
						<a href="https://<?php the_field('contacts_tg', 'option'); ?>" target="_blank">
							<p class="section__col-name"><?php the_field('contacts_tg', 'option'); ?></p>
						</a>
					</div>
					<div class="section__col-title">
						<p class="section__col-name"><?php echo esc_html__('Прием заказов на&nbsp;сайте:', 'asbvideo') ?></p>
					</div>
				</div>
				<div class="section__col">
					<p class="section__col-info section__col-info_large"><?php the_field('contacts_adress', 'option'); ?></p>
					<p class="section__col-info section_margin"><?php the_field('contacts_time', 'option'); ?></p>
					<p class="section__col-info"><?php the_field('contacts_time_call', 'option'); ?></p>
					<p class="section__col-info"><?php echo esc_html__('E-mail для заказов', 'asbvideo') ?></p>
					<p class="section__col-info section_margin"><?php echo esc_html__('Telegram для консультаций', 'asbvideo') ?></p>
					<p class="section__col-info section__col-info_bold"><?php the_field('contacts_order', 'option'); ?></p>
				</div>
			</div>
		</section>
		<section class="section">
			<p class="section__title"><?php echo esc_html__('Реквизиты', 'asbvideo') ?></p>
			<p class="section__company-name"><?php the_field('details_name', 'option'); ?></p>
			<div class="section__group">
				<div class="section__column section__column_min">
					<p class="section__column-title"><?php echo esc_html__('Юридический адрес:', 'asbvideo') ?></p>
					<p class="section__column-title"><?php echo esc_html__('ИНН:', 'asbvideo') ?></p>
					<p class="section__column-title"><?php echo esc_html__('КПП:', 'asbvideo') ?></p>
					<p class="section__column-title"><?php echo esc_html__('ОГРН:', 'asbvideo') ?></p>
					<p class="section__column-title section__column-title_padding"><?php echo esc_html__('Р/с:', 'asbvideo') ?></p>
					<p class="section__column-title"><?php echo esc_html__('К/с:', 'asbvideo') ?></p>
				</div>
				<div class="section__column">
					<p class="section__column-info section__column-info_high"><?php the_field('details_adress', 'option'); ?></p>
					<p class="section__column-info"><?php the_field('details_inn', 'option'); ?></p>
					<p class="section__column-info"><?php the_field('details_kpp', 'option'); ?></p>
					<p class="section__column-info"><?php the_field('details_ogrn', 'option'); ?></p>
					<p class="section__column-info"><?php the_field('details_rc', 'option'); ?></p>
					<p class="section__column-info"><?php the_field('details_kc', 'option'); ?></p>
				</div>
			</div>
		</section>
	</div>
	<div class="note">
		<?php the_field('contacts_text'); ?>
	</div>
</div>

<div class="pictures">
	<img src="<?php the_field('contacts_img') ?>" class="pictures__man"
		alt="">
</div>
<?php get_footer(); ?>