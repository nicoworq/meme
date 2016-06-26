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

                        <section id="listado-3-noticias" class="listado-noticias">
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