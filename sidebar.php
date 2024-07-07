<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Minimal
 */

if (is_active_sidebar('right-sidebar')) : ?>
  <div class="section grey">
    <div class="w-container">
      <?php dynamic_sidebar('right-sidebar'); ?>
    </div>
  </div>
<?php endif; ?>