<?php 
/**
 * Шаблон вывода секции "типовые решения"
 * 
 * @package ASB Video
 */

 defined( 'ABSPATH' ) || exit;

 $args = array( 
    'post_type' => 'solutions', 
    'nopaging' => true, 
);

$solutions_query = new WP_Query( $args );
?>

<section class="catalog__section">
    <p class="catalog__section-title"><?php echo esc_html__('Типовые решения', 'asbvideo'); ?></p>

    <div class="catalog__section-content content-articles">
        <?php while ($solutions_query->have_posts()): $solutions_query->the_post()?>
            <a href="<?php echo get_post_permalink(get_the_id())?>">
                <article class="catalog__article">
                    <img class="catalog__article-img" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0]; ?>"
                        alt="<?php the_title()?>">
                    <p class="catalog__article-title"><?php the_title()?></p>
                </article>
            </a>
        <?php endwhile;?>
        <?php $solutions_query->reset_postdata()?>
    </div>
</section>