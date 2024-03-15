<?php
/**
 * BSV19 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package BSV19
 */

$bsv19_theme_data = wp_get_theme();

if ( ! defined( 'BSV19_VERSION' ) ) {
  // Replace the version number of the theme on each release.
  define( 'BSV19_VERSION', $bsv19_theme_data->get( 'Version' ) );
}

if ( ! function_exists( 'bsv19_setup' )) :

  function bsv19_setup() {};

endif;
add_action( 'after_setup_theme', 'bsv19_setup' );

/**
 * We need to dequeue the parent theme's styles first, then enqueue our own styles.
 */
function dequeue_parent_style() {
  wp_dequeue_style( 'bootstrap' );
  wp_dequeue_style( 'the-minimal-style' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_parent_style', 11 ); // Set a higher priority (11) to ensure it runs after the parent theme enqueues styles

/**
 * Enqueue scripts and styles.
 */
function bsv19_scripts() {
  wp_enqueue_style( 'normalize.css', get_stylesheet_directory_uri(). '/css/normalize.css' );
  wp_enqueue_style( 'webflow.css', get_stylesheet_directory_uri(). '/css/webflow.css'  );
  wp_enqueue_style( 'bsv19-frauenfussball.webflow.css', get_stylesheet_directory_uri(). '/css/bsv19-frauenfussball.webflow.css'  );
};
add_action( 'wp_enqueue_scripts', 'bsv19_scripts' );
