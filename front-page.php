<?php
/*
Template Name: Шаблон главной страницы
Template Post Type: page
*/
get_header(); ?>
<style>
	@media (max-width: 374.89px) {

		.wrapper .info .info__calculation-btn-wrapper .info__calculation-btn-img {
			background-image: url('<?php the_field('main_img_bg_mobile'); ?>') !important;
		}
	}
</style>
<div class="info">
	<p class="info__title"><?php the_field('main_title') ?></p>
	<p class="info__text"><?php the_field('main_text') ?></p>

	<?php get_template_part('template-parts/content', 'main-calc'); ?>

	<div class="info__statistics">

		<?php if (get_field('main_repeater')): ?>
			<?php while (has_sub_field('main_repeater')): ?>
				<div class="info__statistics-item">
					<img src="<?php the_sub_field('main_repeater_img'); ?>" alt="Камера">
					<p><?php the_sub_field('main_repeater_text'); ?></p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>
	<div class="info__calculation-btn-wrapper btn_open-calculation-application">
		<button class="info__calculation-btn">
			<img src="<?php bloginfo('template_url'); ?>/assets/svg/calculator.svg" alt="Калькулятор">
			<span class="info__calculation-btn-text"><?php echo esc_html__('Рассчитать стоимость', 'asbvideo') ?></span>
		</button>
		<div class="info__calculation-btn-img" style="background-image: url('<?php the_field('main_img_mobile'); ?>')"></div>
	</div>
</div>

<div class="pictures">
	<div class="pictures__camera" style="background-image: url(<?php the_field('main_img_bg'); ?>);"></div>
	<div class="pictures__man">
		<img src="<?php the_field('main_img'); ?>" alt="">
	</div>
</div>

<?php get_template_part('template-parts/modals/modal', 'main'); ?>
<?php get_template_part('template-parts/modals/modal', 'montage-leed-result'); ?>
<?php get_template_part('template-parts/modals/modal', 'montage-leed'); ?>

<?php get_footer(); ?>