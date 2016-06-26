<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meme
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

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
                        <div class="col-md-6">

                            <div id="mapa-sucursales">


                            </div>

                        </div>
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

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="instagram">
                    <h2><i class="flaticon-instagram"></i>/MercedesMeier</h2>

                    <?php echo do_shortcode('[instagram-feed]') ?>



                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div id="nav-footer">
                    <div class="nav-footer-col">
                        <h3>QUIÉNES SOMOS</h3>
                        <ul>
                            <li><a href="#">- Bio Mercedes Meier</a></li>
                            <li><a href="#">- Transparencia</a></li>
                        </ul>
                    </div>
                    <div class="nav-footer-col">
                        <h3>NOVEDADES</h3>
                        <ul>
                            <li><a href="#">- Noticias</a></li>
                            <li><a href="#">- Proyectos</a></li>
                        </ul>
                    </div>
                    <div class="nav-footer-col">
                        <h3>CONTACTO</h3>
                        <ul>
                            <li><a href="#">- Sumate</a></li>
                            <li><a href="#">- Contacto</a></li>
                            <li><a href="#">- Prensa</a></li>
                        </ul>
                    </div>


                </div>

                <div id="redes-footer">

                    <a href="www.twitter.com/MercedesMeier" target="blank"><i class="flaticon-twitter"></i>www.twitter.com/MercedesMeier</a>
                    <a href="http://www.facebook.com/MercedesMeier" target="blank"><i class="flaticon-facebook"></i>www.facebook.com/MercedesMeier</a>
                    <a href="www.youtube.com/MercedesMeier" target="blank"><i class="flaticon-youtube"></i>www.youtube.com/MercedesMeier</a>
                    <a href="www.facebook.com/MercedesMeier" target="blank"><i class="flaticon-instagram"></i>www.facebook.com/MercedesMeier</a>

                </div>
                <div id="copyright">
                    <p>
                        <strong>
                            © 2016 www.mercedesmeier.com.ar</strong>
                        <br/>
                        contacto@mercedesmeier.com.ar - Todos los derechos reservados.
                        <a href="http://estudiolunes.com.ar"><img src="<?php echo get_template_directory_uri() . '/img/estudio-lunes.png'; ?>"/></a>
                    </p>
                </div>
            </div>
        </div>
    </div>


</footer><!-- #colophon -->
</div><!-- #page -->

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6&appId=388886614495246";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDYEF2lMRrP2Q7mgGKjKtUs2qF2o8xq24A"></script>
<?php wp_footer(); ?>

</body>
</html>
