<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BSV19
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> data-wf-page="5363b4b55dc35ef729000669" data-wf-site="5363b4b55dc35ef729000667">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta content="Frauenfußball in Bahrenfeld, Hamburg beim BSV19." name="description">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bsv19-frauenfussball.webflow.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.jpg" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/images/webclip.png" rel="apple-touch-icon">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="w-container">
      <a href="<?php echo home_url(); ?>" class="brand w-clearfix w-nav-brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/BSV-Logo.png" height="50" alt="" class="image-4">
        <div class="company-title"><?php bloginfo('name'); ?></div>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav-menu w-nav-menu',
          'items_wrap' => '%3$s',
          'walker' => new BSV19_Walker_Nav_Menu()
        ));
        ?>
      </nav>
      <div class="menu-button w-hidden-main w-nav-button">
        <div class="nav-link w-icon-nav-menu"></div>
      </div>
    </div>
  </div>