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


<section id="noticias-social-media">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="noticias">
                    <h2>Noticias <a href="#">+ Ver todas</a></h2>
                    <?php
                    $args = array(
                        'posts_per_page' => 9,
                    );
                    $the_query2 = new WP_Query($args);

                    if ($the_query2->have_posts()) {
                        ?>

                        <section id="listado-3-noticias">
                            <div id="dots-container-noticias"></div>
                            <div id="listado-3-noticias-slides">
                                <div class="row">
                                    <?php
                                    $i = 1;
                                    while ($the_query2->have_posts()) {
                                        $the_query2->the_post();

                                        $feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                        $tags = get_the_tags();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="noticia col-md-4">

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
                                        if ($i % 3 == 0) {
                                            ?>
                                        </div><div class="row">
                                            <?php
                                        }

                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </section>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>


                </div>

            </div>
            <div class="col-md-3">
                <div id="twitter">
                    <h2><i class="flaticon-twitter"></i>@MercedesMeier</h2>
                    <div id="twitter-container">
                        <a class="twitter-timeline" data-lang="es" data-height="400" href="https://twitter.com/Meme_Meier">Tweets by Meme_Meier</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>


                </div>
            </div>
            <div class="col-md-3">
                <div id="facebook">
                    <h2><i class="flaticon-facebook"></i>/MercedesMeier</h2>
                    <div class="fb-page" data-href="https://www.facebook.com/soy.meme.7/" data-tabs="timeline" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/soy.meme.7/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/soy.meme.7/">Mercedes Meier</a></blockquote></div>

                </div>
            </div>
        </div>
    </div>

</section>



<section id="imagen-destacada">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri() . '/img/malvinas.jpg'; ?>" alt="Malvinas"/>
            </div>
        </div>
    </div>
</section>

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

<section id="youtube">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="flaticon-youtube"></i>/MercedesMeier</h2>
                <iframe src="http://www.youtube.com/embed/?listType=user_uploads&list=UCJy2Dpd3VIhc0-RRC0Ms0DQ" width="480" height="400"></iframe>                   


            </div>
        </div>
    </div>
</section>

<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>CONTACTO</h2>
                <div class="row">
                    <div id="datos-contacto" class="col-md-6">
                        <h3>DIPUTADA MERCEDES MEIER</h3>
                        <h4>Frente social y popular (FSP)</h4>
                        <h4>PARTIDO DEL TRABAJO Y DEL PUEBLO (PTP)</h4>
                        <h5>PROVINCIA DE SANTA FE</h5>

                        <p>Encontrá el local más cercano a tu domicilio, escribinos a <a href="mailto:contacto@mercedesmeier.com.ar">contacto@mercedesmeier.com.ar</a> o simplemente completá el formulario:</p>

                        <form id="form-contacto">
                            <input type="text" name="sex" value="" placeholder="Sex"/>
                            <input type="text" name="nombre" placeholder="NOMBRE" value=""/>
                            <input type="text" name="email" placeholder="CORREO ELECTRÓNICO" value=""/>
                            <input type="text" name="telefono" placeholder="TELÉFONO" value=""/>
                            <input type="text" name="domicilio" placeholder="DOMICILIO" value=""/>
                            <input type="text" name="localidad" placeholder="LOCALIDAD" value=""/>
                            <textarea  name="mensaje" placeholder="MENSAJE" ></textarea>

                            <button>Enviar >></button>

                        </form>
                    </div>
                    <div class="col-md-6"></div>
                </div>



            </div>
        </div>
    </div>

</section>

<?php
get_footer();
