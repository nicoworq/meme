<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Meme
 */
get_header();
?>


<div class="container">

    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', get_post_format());

                        //the_post_navigation();
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                        //comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <?php get_sidebar('seccion') ?>
        </div>
    </div>

</div>

<?php get_template_part('template-parts/content', 'imagen-destacada'); ?>
<?php
get_footer();
