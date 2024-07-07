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
  <meta charset="utf-8">
  <head itemscope itemtype="https://schema.org/WebSite">
  <meta content="Frauenfußball in Bahrenfeld, Hamburg beim BSV19." name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); 
  $the_minimal_ed_social = get_theme_mod('the_minimal_ed_social');
  ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
  <?php wp_body_open(); ?>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" class="navbar w-nav" role="banner" itemscope itemtype="https://schema.org/WPHeader">
    <div class="w-container">
      <a href="index.html" aria-current="page" class="brand w-clearfix w-nav-brand w--current"><img src="images/BSV-Logo.png" height="50" alt="" class="image-4">
        <div class="company-title">Frauenfußball BSV 19.</div>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="index.html" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
        <a href="neuigkeiten.html" class="nav-link w-nav-link">News</a>
        <a href="probetraining.html" class="nav-link w-nav-link">Probetraining</a>
        <a href="spasskick.html" class="nav-link w-nav-link">Spaßkick</a>
        <a href="team.html" class="nav-link w-nav-link">Unser Team</a>
        <a href="kontakt.html" class="nav-link w-nav-link">Kontakt</a>
      </nav>
      <div class="menu-button w-hidden-main w-nav-button">
        <div class="nav-link w-icon-nav-menu"></div>
      </div>
    </div>
  </div>

