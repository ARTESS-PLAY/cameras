<?php
/*
Template Name: Шаблон страницы о нас
Template Post Type: page
*/
get_header(); ?>
<style>
	@media (max-width: 1023.89px) {
		.wrapper .info .info__picture {
			background-image: url('<?php the_field('about_img'); ?>');
		}
	}
</style>
<div class="info">
	<p class="info__title"><?php the_title(); ?></p>
	<div class="info__characteristics">
		<p class="info__characteristic">
			<?php the_field('about_text'); ?>
		</p>
	</div>
	<div class="info__statistics">
		<?php the_field('about_label'); ?>
		</p>
		<div class="info__statistics-items">

			<?php if (get_field('about_repeater')): ?>
				<?php while (has_sub_field('about_repeater')): ?>
					<div class="info__statistics-item">
						<img src="<?php the_sub_field('about_repeater_img'); ?>" class="info__statistics-icon" alt="<?php the_sub_field('about_repeater_title'); ?>">
						<div class="info__statistics-info">
							<p class="info__statistics-name"><?php the_sub_field('about_repeater_title'); ?></p>
							<p class="info__statistics-text"><?php the_sub_field('about_repeater_text'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
	<div class="info__picture"></div>
</div>

<div class="pictures">
	<img src="<?php the_field('about_img_bg'); ?>" class="pictures__building">
	<img src="<?php the_field('about_img'); ?>" class="pictures__man">
</div>
<?php get_footer(); ?>