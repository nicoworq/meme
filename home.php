<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();

$args = array(
    'meta_key' => 'destacado',
    'meta_value' => TRUE,
    'posts_per_page' => 3,
);
$the_query = new WP_Query($args);



if ($the_query->have_posts()) {
    ?>
    <section id="slider-home">
        <div id="dots-container"></div>
        <div id="slider-home-slides">
            <?php
            while ($the_query->have_posts()) {
                $the_query->the_post();
                $feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                $tags = get_the_tags();
                ?>
                <a href="<?php the_permalink(); ?>" class="slide-home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="noticia-imagen" style="background-image: url(<?php echo $feat_image; ?>);">

                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="noticia-contenido">
                                    <h3 class="noticia-hash">#<?php echo $tags[0]->name; ?></h3>
                                    <h1 class="noticia-titulo"><?php the_title(); ?></h1>
                                    <div class="noticia-resumen">
                                        <?php the_excerpt() ?>
                                    </div>
                                    <div class="noticia-ver-mas">+ Ver Más</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
    </section>
    <?php
}

wp_reset_postdata();
?>

<?php get_template_part('template-parts/content','noticias3-social'); ?>


<?php get_template_part('template-parts/content','imagen-destacada'); ?>

<section id="accesos">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="acceso">
                    <a href="">
                        LA<br/>
                        PROVINCIA<br/>
                        <span>QUE <br/>TENEMOS</span>                        
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="acceso">
                    <a href="">
                        LA<br/>
                        PROVINCIA<br/>
                        <span>QUE <br/>QUEREMOS</span>                        
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="acceso" style="background-image: url(<?php echo get_template_directory_uri() . '/img/acceso3.jpg'; ?>);">
                    <a href="">
                        SUMATE<br/>
                        CON<br/>
                        <span>TU<br/>PROYECTO</span>                        
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>


<?php
get_footer();
