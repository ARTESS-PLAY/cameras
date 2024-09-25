<?php
/*
Template Name: Шаблон страницы Как мы работаем
Template Post Type: page
*/
get_header(); ?>
<div class="info">
	<p class="info__title"><?php the_title(); ?></p>
	<div class="info__stages">

		<?php if (get_field('working_repeater')): ?>
			<?php $count = 1;
			while (has_sub_field('working_repeater')): ?>
				<div class="info__stage">
					<div class="info__stage-header">
						<span class="info__stage-number">
							<?php echo $count ?>

						</span>
						<img class="info__stage-icon" src="<?php the_sub_field('working_repeater_img'); ?>" alt="как мы работаем">
					</div>
					<div class="info__stage-description">
						<p class="info__stage-title"><?php the_sub_field('working_repeater_title'); ?></p>
						<p class="info__stage-definition"><?php the_sub_field('working_repeater_text'); ?></p>
					</div>
				</div>
			<?php $count++;
			endwhile; ?>
		<?php endif; ?>

	</div>
</div>


<div class="pictures">
	<img src="<?php the_field('working_img'); ?>" class="pictures__worker">
</div>

<?php get_footer(); ?>