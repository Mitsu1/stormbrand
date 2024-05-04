<?php 

include('components/slider.php');
include('components/headband.php');
include('components/banner.php');
include('components/card.php');
include('components/gallery.php');
include('components/contact.php');
include('components/footer.php');
include('components/copyright.php');

$swiper = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min';
wp_enqueue_style( 'swiper-css', "$swiper.css" . '', array(), null, false);
wp_enqueue_script('swiper-js', "$swiper.js". '', array(), null, false);


wp_enqueue_style( 'slider', get_stylesheet_directory_uri() . './styles/slider.css', array('generate-style'));
wp_enqueue_style( 'gallery', get_stylesheet_directory_uri() . './styles/gallery.css', array('generate-style'));
wp_enqueue_style( 'services', get_stylesheet_directory_uri() . './styles/services.css', array('generate-style'));
wp_enqueue_style( 'contact', get_stylesheet_directory_uri() . './styles/contact.css', array('generate-style'));
wp_enqueue_style( 'footer_widgets', get_stylesheet_directory_uri() . './styles/footer_widgets.css', array('generate-style'));

wp_enqueue_script('slider-js', get_stylesheet_directory_uri() ."./scripts/slider.js". '', array(), null, false);
wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() ."/global.js". '', array(), null, false);

