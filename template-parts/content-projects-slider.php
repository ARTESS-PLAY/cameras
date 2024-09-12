<div class="slider">
	<div class="slider__header">
		<div class="slider__navigation">
			<button class="slider__button-prev"><img src="<?php bloginfo('template_url') ?>/assets/svg/arrow.svg" alt="Стрелка влево"></button>
			<p class="slider__text"></p>
			<button class="slider__button-next"><img src="<?php bloginfo('template_url') ?>/assets/svg/arrow.svg" alt="Стрелка вправо"></button>
		</div>
		<div class="slider__counter">
			<div class="slider__counter-number"><span class="slider__current-count">1</span></div>
			<div class="slider__counter-slash"><span>/</span></div>
			<div class="slider__counter-number"><span><?php echo wp_count_posts('projects')->publish ?></span></div>
		</div>
	</div>
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php
			$args = array(
				'post_type' => 'projects',
				'posts_per_page' => -1
			);

			$query = new WP_Query($args);

			if ($query->have_posts()):
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="swiper-slide">

						<?php the_post_thumbnail(); ?>
					</div>
			<?php
				endwhile;

			endif;

			wp_reset_postdata();
			?>
		</div>
	</div>
</div>


<p class="description"></p>