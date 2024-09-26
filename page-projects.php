<?php
/*
Template Name: Шаблон страницы Наши проекты
Template Post Type: page
*/
get_header(); ?>
<div class="info">
	<div class="info__block">
		<p class="info__title"><?php the_title() ?></p>
		<p class="info__text"></p>
	</div>
</div>

<?php get_template_part('template-parts/field', 'projects-slider'); ?>

<?php get_template_part('template-parts/content', 'projects-slider'); ?>

<?php get_footer(); ?>