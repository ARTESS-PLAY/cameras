<?php
/*
Template Name: Шаблон страницы Монтаж и оборудование
Template Post Type: page
*/
get_header(); ?>

<div class="info">
	<div class="info__mobile-block">
		<div class="info__text">
			<p class="info__title">
				<?php the_title(); ?>
				<?php the_field('maintenance_text'); ?>
		</div>
		<img src="<?php the_field('maintenance_img_mobile'); ?>" class="info__picture">
	</div>
	<section class="info__section">
		<?php the_field('maintenance_descr'); ?>
	</section>
	<button class="info__btn btn-green" id="btn_open-application"><?php echo esc_html__('Оставить заявку', 'asbvideo'); ?></button>
</div>
<div class="pictures">
	<img src="<?php the_field('maintenance_img_bg'); ?>" class="pictures__camera">
	<img src="<?php the_field('maintenance_img'); ?>" class="pictures__man">
</div>

<?php get_template_part('template-parts/modals/modal', 'montage-leed-result'); ?>
<?php get_template_part('template-parts/modals/modal', 'montage-leed'); ?>

<?php get_footer(); ?>