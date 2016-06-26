<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>

<section id="noticias-page" class="inner-page">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Noticias</h2>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div id="noticias-page-listado" class="listado-noticias">


                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                            );
                            $the_query2 = new WP_Query($args);

                            if ($the_query2->have_posts()) {
                                ?>

                                <div id="dots-container-noticias"></div>
                                <div id="listado-noticias-slides">
                                    <div class="row">
                                        <?php
                                        $i = 1;
                                        while ($the_query2->have_posts()) {
                                            $the_query2->the_post();

                                            $feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                            $tags = get_the_tags();
                                            ?>
                                            <a href="<?php the_permalink(); ?>" class="noticia col-md-3">

                                                <h3 class="noticia-hash">#<?php echo $tags[0]->name; ?></h3>

                                                <div class="noticia-imagen" style="background-image: url(<?php echo $feat_image; ?>);">

                                                </div>
                                                <div class="noticia-contenido">
                                                    <h1 class="noticia-titulo"><?php the_title(); ?></h1>
                                                    <div class="noticia-resumen">
                                                        <?php the_excerpt() ?>
                                                        <span class="noticia-ver-mas">+ Ver Más</span>
                                                    </div>

                                                </div>   

                                            </a>
                                            <?php
                                            if ($i % 4 == 0) {
                                                ?>
                                            </div><div class="row">
                                                <?php
                                            }

                                            $i++;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }

                            wp_reset_postdata();
                            ?>
                        </div>

                    </main>
                </div>
            </div>
            <div class="col-md-4">

                <?php get_sidebar('seccion'); ?>
            </div>
        </div>
    </div>

</section>

<?php get_template_part('template-parts/content','imagen-destacada'); ?>


<?php get_footer(); 

