<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meme
 */
$urlThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('post')); ?>>

    <div class="post-thumbnail" style="background-image:url(<?php echo $urlThumbnail[0]; ?>); "></div>

    <h3 class="post-title"><?php the_title(); ?></h3>
    <div class="post-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'meme'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
    <div class="post-back">
        <a href="<?php echo get_permalink(get_page_by_title('Noticias')); ?>">Volver</a> 
    </div>
</article><!-- #post-## -->
