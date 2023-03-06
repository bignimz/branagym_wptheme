<?php 

/*
* Theme Functions.
*
* @package Brana-Eagles
*/


// Link to Queries file
require get_template_directory() . '/inc/queries.php';


function branaeaglesgym_theme_scripts() {

  // Register the styles and scripts first
  wp_register_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', [], 'false', 'all');
  wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'), 'all');
  wp_register_style( 'style', get_stylesheet_uri() );
  wp_register_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', ['jquery'], 'false', true);
  wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);


  // Then Equeue the styles and scripts, this allows for conditional loading of styles or scripts
  wp_enqueue_style('bootstrap-css');
  wp_enqueue_script('bootstrap-js');
  wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/d2acf3efbe.js');
  wp_enqueue_style('main-css');
  wp_enqueue_style('style');
  wp_enqueue_script('main-js');

  
}
// Add Hook
add_action( 'wp_enqueue_scripts', 'branaeaglesgym_theme_scripts' );


// Register Nav Menus
function branaeaglesgym_menus() {
  register_nav_menus(array(
      "main-menu" => "Main Menu",
    )
    );
}
// Add Hook
add_action('init', 'branaeaglesgym_menus');


// Brana Gym Setup
function branaeaglesgym_setup() {
  // featured image
  add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'branaeaglesgym_setup');