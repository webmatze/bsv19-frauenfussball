<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BSV19
 */

get_header();

$sidebar_layout = the_minimal_sidebar_layout();

?>

<div class="kontakt">
	<div class="w-container">
		<h2 class="heading-2"><?php the_title(); ?></h2>
		<?php
		while (have_posts()) : the_post();
			the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</div>


<?php
if ($sidebar_layout == 'right-sidebar')
	get_sidebar();
get_footer();
