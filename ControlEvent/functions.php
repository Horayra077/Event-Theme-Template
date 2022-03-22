<?php

function controlevent_files() {
  wp_enqueue_script('bootstrap-min-js', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery-js', get_theme_file_uri('/js/jquery-3.3.1.min.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery-countdown-min-js', get_theme_file_uri('/js/jquery.countdown.min.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery-magnific-popup-min-js', get_theme_file_uri('/js/jquery.magnific-popup.min.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery-slicknav-js', get_theme_file_uri('/js/jquery.slicknav.js'), NULL, '1.0', true);
  wp_enqueue_script('main-controlevent-js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
  wp_enqueue_script('owl-carousel-min-js', get_theme_file_uri('/js/owl.carousel.min.js'), NULL, '1.0', true);

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_enqueue_style('controlevent_bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
  wp_enqueue_style('controlevent_elegant_icons', get_theme_file_uri('/css/elegant-icons.css'));
  wp_enqueue_style('controlevent_font-awesome', get_theme_file_uri('/css/font-awesome.min.css'));
  wp_enqueue_style('controlevent_magnific-popup', get_theme_file_uri('/css/magnific-popup.css'));
  wp_enqueue_style('controlevent_owl.carousel', get_theme_file_uri('/css/owl.carousel.min.css'));
  wp_enqueue_style('controlevent_slicknav', get_theme_file_uri('/css/slicknav.min.css'));
  wp_enqueue_style('controlevent_style', get_theme_file_uri('/css/style.css'));

  wp_enqueue_style('controlevent_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'controlevent_files');