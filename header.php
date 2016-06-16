<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,900' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page">


            <header id="masthead" role="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="logo-sitio">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <img src="<?php echo get_template_directory_uri() . '/img/meme-logo.jpg' ?>" alt="<?php bloginfo('name'); ?>"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 pull-right">
                            <div id="partidos-sitio">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/img/ptp-logo.jpg' ?>">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/img/fsp-logo.jpg' ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <nav id="navegacion-primaria" class="main-navigation" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                              
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                                
                                <ul class="redes-nav">
                                    <li>
                                        <a href="#"><i class="flaticon-twitter"></i></a>
                                        <a href="#"><i class="flaticon-facebook"></i></a>
                                        <a href="#"><i class="flaticon-youtube"></i></a>
                                        <a href="#"><i class="flaticon-instagram"></i></a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">
