<?php

// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'pedalmania_setup' ) ) :
 
   function pedalmania_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support('post_thumbnails');
     add_theme_support('html5', array('search-form'));

     register_nav_menus( 
      array(
          'main-menu'=> 'Header Menu',
          'footer-menu'=> 'Footer Menu'
      )
      );


   }
 
endif;
 
add_action('after_setup_theme', 'pedalmania_setup');
 
function pedalmania_scripts_styles(){
   wp_enqueue_style('pedalmania_style', get_stylesheet_uri(), '', "ver=rand()");
   wp_enqueue_style('pedalmania_google_fonts', 'https://fonts.googleapis.com/css?family=Bebas+Neue|Libre+Baskerville:400,700&display=swap');
   wp_enqueue_script('fontawesome-script', 'https://kit.fontawesome.com/a076d05399.js', array(), NULL, true);
}
 
add_action('wp_enqueue_scripts', 'pedalmania_scripts_styles');