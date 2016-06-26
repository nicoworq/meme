<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meme
 */
get_header();


$tituloDetalle = get_field('titulo_detalle_pagina');

$titulo = $tituloDetalle ? $tituloDetalle : get_the_title();
?>
<div class="container inner-page">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $titulo; ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>
</div>

<?php get_template_part('template-parts/content', 'noticias3-social'); ?>

<?php
//get_sidebar();
get_footer();
