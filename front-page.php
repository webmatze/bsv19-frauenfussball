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
            <div class="w-col w-col-6">
                <?php
                $page_id = get_option('page_on_front');
                $content = get_post_field('post_content', $page_id);
                echo apply_filters('the_content', $content);
                ?>
            </div>
            <div class="w-col w-col-6">
                <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                    <div class="w-slider-mask">
                        <div class="w-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/MzLic2kw.jpeg" alt="Teamfoto BSV19" class="image-5"></div>
                        <div class="w-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bsv19-frauenfussball-3.jpg" alt=""></div>
                        <div class="w-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Bild-3.jpg" alt=""></div>
                        <div class="w-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_20181001_155936.jpg" width="604" alt=""></div>
                    </div>
                    <div class="left-arrow w-slider-arrow-left">
                        <div class="w-icon-slider-left"></div>
                    </div>
                    <div class="right-arrow w-slider-arrow-right">
                        <div class="w-icon-slider-right"></div>
                    </div>
                    <div class="w-slider-nav w-round"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="w-container">
        <a href="neuigkeiten.html" class="heading">Neuigkeiten</a>
        <div class="w-dyn-list">
            <div role="list" class="w-dyn-items w-row">
                <div role="listitem" class="collection-item w-dyn-item w-col w-col-4">
                    <div>
                        <a href="#" class="link-block w-inline-block">
                            <h4 class="w-dyn-bind-empty"></h4><img width="400" alt="" src="" class="image-2 w-dyn-bind-empty">
                        </a>
                    </div>
                    <p class="paragraph news-item-text w-dyn-bind-empty"></p>
                    <a href="#" class="link">Mehr lesen</a>
                </div>
            </div>
            <div class="w-dyn-empty">
                <div>No items found.</div>
            </div>
        </div>
    </div>
</div>
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