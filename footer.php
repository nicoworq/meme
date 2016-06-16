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
                        <a href="http://estudiolunes.com.ar"><img src="<?php echo get_template_directory_uri().'/img/estudio-lunes.png'; ?>"/></a>
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

<?php wp_footer(); ?>

</body>
</html>
