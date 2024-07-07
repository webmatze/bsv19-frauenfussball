<?php get_header(); ?>

<div>
    <div class="hero-bg">
        <div class="greeting w-container">
            <div class="w-row">
                <div class="w-col w-col-7">
                    <h1 id="page-nav-Section-1" class="heading-4"><?php echo get_theme_mod('hero_title', 'Frauenfußball im Herzen von Hamburg'); ?></h1>
                    <div class="subtitle"><?php echo get_theme_mod('hero_subtitle', 'beim Bahrenfelder Sportverein von 1919 e.V.'); ?></div>
                </div>
                <div class="w-col w-col-5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/BSV-Logo.png" alt="BSV19 Logo" class="logo"></div>
            </div>
        </div>
    </div>
</div>

<!-- Add the rest of your homepage content here -->
<div class="section">
    <div class="w-container">
        <h3 class="heading"><?php echo get_the_title(); ?></h3>
        <div class="w-row">
            <div class="w-col">
                <?php
                $page_id = get_option('page_on_front');
                $content = get_post_field('post_content', $page_id);
                echo apply_filters('the_content', $content);
                ?>
            </div>
        </div>
    </div>
</div>
<?php
$recent_posts = wp_get_recent_posts(array(
    'numberposts' => 3,
    'post_status' => 'publish'
));

if (!empty($recent_posts)) :
?>
<div>
    <div class="w-container">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="heading">Neuigkeiten</a>
        <div class="w-dyn-list">
            <div role="list" class="w-dyn-items w-row">
                <?php
                foreach ($recent_posts as $post) :
                    $post_id = $post['ID'];
                ?>
                <div role="listitem" class="collection-item w-dyn-item w-col w-col-4">
                    <div>
                        <a href="<?php echo get_permalink($post_id); ?>" class="link-block w-inline-block">
                            <h4><?php echo get_the_title($post_id); ?></h4>
                            <?php echo get_the_post_thumbnail($post_id, 'medium', array('class' => 'image-2')); ?>
                        </a>
                    </div>
                    <p class="paragraph news-item-text"><?php echo wp_trim_words(get_the_excerpt($post_id), 20); ?></p>
                    <a href="<?php echo get_permalink($post_id); ?>" class="link">Mehr lesen</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div>
    <div class="w-container">
        <h3 class="heading">Spielpan und Tabelle</h3>
        <div class="widget w-embed w-script">
            <div id="widget1"></div>
            <script type="text/javascript">
                new fussballdeWidgetAPI().showWidget('widget1', '02693IQKKO000000VS541L4IVTBCIHT8');
            </script>
        </div>
    </div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>