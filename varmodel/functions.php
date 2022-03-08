<?php

// start include style
add_action('wp_enqueue_scripts', 'farb_style');
function farb_style()
{
  wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('normalize-style', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('font1', get_template_directory_uri() . '/fonts/Montserrat/montserrat.css');
  wp_enqueue_style('font2', get_template_directory_uri() . '/fonts/Ubuntu/ubuntu.css');
  wp_enqueue_style('font3', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('addon-atyle', get_stylesheet_uri());
}
// end include style


// start include script
add_action('wp_enqueue_scripts', 'farb_scripts');
function farb_scripts()
{
  wp_enqueue_script('jquery-script', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', '', true);
  wp_enqueue_script('slick-script', get_template_directory_uri() . '/slick/slick.js', '', '', true);
  wp_enqueue_script('slder-script', get_template_directory_uri() . '/js/slider.js', '', '', true);
  wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', '', '', true);
}

// start add custom logo
add_theme_support('custom-logo');
// end add custom logo

// start hide admin bar
show_admin_bar(false);
add_filter('show_admin_bar', '__return_false');
// end hide admin bar


// start register menu
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
  register_nav_menu('header_menu', 'header menu');
}
// end register menu

// start add option page acf
if (function_exists('acf_add_options_page')) {
  acf_add_options_page('Theme Settings');
}
// end add option page acf
