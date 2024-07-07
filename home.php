<?php
/**
 * The template for displaying the home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BSV19
 */

get_header(); 

$sidebar_layout = the_minimal_sidebar_layout();
    
?>

<?php
if( $sidebar_layout == 'right-sidebar' )
  get_sidebar();
get_footer();
