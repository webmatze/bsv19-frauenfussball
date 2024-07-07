<?php
/**
 * The template for displaying single posts.
 *
 * @package BSV19
 */

get_header();

$sidebar_layout = the_minimal_sidebar_layout();

?>

<div class="single-post">
    <div class="w-container">
        <?php
        while (have_posts()) : the_post();
            ?>
            <h2 class="heading-2"><?php the_title(); ?></h2>
            <div class="post-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'bsv19'),
                    'after'  => '</div>',
                ));
                ?>
            </div>

            <?php
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
