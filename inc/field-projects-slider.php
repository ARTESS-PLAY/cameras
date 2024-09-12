<?php

/**
 * Получаем заголовки и контент post type Projects
 * 
 * @package ASB Video
 */

$all_posts = get_posts(array(
	'post_type' => 'projects',
	'posts_per_page' => -1,
));

$project_titles = array();
$project_text = array();


foreach ($all_posts as $post) {
	$project_titles[] = $post->post_title;
	$project_text[] = $post->post_excerpt;
}
?>
<script>
	const sliderTexts = <?php echo json_encode($project_titles); ?>;
	const pageTexts = <?php echo json_encode($project_text); ?>;
	console.log(sliderTexts)
</script>