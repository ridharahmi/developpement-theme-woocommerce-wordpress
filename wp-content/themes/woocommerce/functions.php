<?php
 /*
  variables utilise in theme woocommerce
  */
  define('theme_path', get_template_directory());
  define('theme_url', get_template_directory_uri());

add_action('wp_print_styles', 'fonts_googleapis');
function fonts_googleapis() {
    wp_register_style('fonts-googleapis', 'https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
    wp_enqueue_style( 'fonts-googleapis');
}

//files css
add_action('wp_enqueue_scripts', 'styles_css');
function styles_css()
{
    wp_enqueue_style('settings-css', theme_url . '/css/settings.css');
    wp_enqueue_style('layers-css', theme_url . '/css/layers.css');
    wp_enqueue_style('navigation-css', theme_url . '/css/navigation.css');
    wp_enqueue_style('lib-css', theme_url . '/libraries/lib.css');
    wp_enqueue_style('plugins-css', theme_url . '/css/plugins.css');
    wp_enqueue_style('navigation-menu-css', theme_url . '/css/navigation-menu.css');
    wp_enqueue_style('shortcode-css', theme_url . '/css/shortcode.css');
    wp_enqueue_style('style-css', theme_url . '/css/style.css');
}

//files js
add_action('wp_enqueue_scripts', 'styles_script');
function styles_script()
{
   wp_enqueue_script('jquery-js', theme_url . '/js/jquery.min.js', array('jquery'), false, true);
   wp_enqueue_script('lib-js', theme_url . '/libraries/lib.js', array('jquery'), false, true);
   wp_enqueue_script('jquery-count-js', theme_url . '/js/jquery.countdown.min.js', array('jquery'), false, true);
   wp_enqueue_script('jquery-tool-js', theme_url . '/js/jquery.themepunch.tools.min.js', array('jquery'), false, true);
   wp_enqueue_script('jquery-revol-js', theme_url . '/js/jquery.themepunch.revolution.min.js', array('jquery'), false, true);
   wp_enqueue_script('revolution-vedio--js', theme_url . '/js/revolution.extension.video.min.js', array('jquery'), false, true);
   wp_enqueue_script('revolution-slideanims-js', theme_url . '/js/revolution.extension.slideanims.min.js', array('jquery'), false, true);
   wp_enqueue_script('ext-layer-js', theme_url . '/js/revolution.extension.layeranimation.min.js', array('jquery'), false, true);
   wp_enqueue_script('ext-navig-js', theme_url . '/js/revolution.extension.navigation.min.js', array('jquery'), false, true);
   wp_enqueue_script('ext-act-js', theme_url . '/js/revolution.extension.actions.min.js', array('jquery'), false, true);
   wp_enqueue_script('functions-js', theme_url . '/js/functions.js', array('jquery'), false, true);
}

