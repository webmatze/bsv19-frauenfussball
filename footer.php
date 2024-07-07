<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BSV19
 */

?>

  <div class="section">
    <div class="w-container">
      <div class="w-row">
        <div class="left-footer-col w-col w-col-6">
          <div class="footer-text">&copy; <?php echo date('Y'); ?> Bahrenfelder Sportverein von 1919 e.V. All Rights Reserved.</div>
        </div>
        <div class="footer-nav-bar w-col w-col-6">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer-nav-bar',
            'items_wrap' => '%3$s',
            'walker' => new BSV19_Walker_Footer_Nav_Menu()
          ));
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>