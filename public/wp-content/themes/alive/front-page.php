<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alive
 */

get_header();
?>
    <div class="intro get-height-full" id="intro">
        <div class="intro__cover intro__cover_first js-intro-cover"></div>
        <div class="intro__cover intro__cover_second js-intro-cover"></div>
        <div class="intro__area">
            <!--            <h2 class="intro__key-heading text-upper js-intro-heading">Everyone&nbsp;is&nbsp;livery<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All&nbsp;for&nbsp;a&nbsp;smile.-->
<!--            </h2>-->
<!--            <h3 class="intro__key-sub-heading js-intro-heading">皆が生き生きと。全ては笑顔の為に。</h3>-->
            <div class="intro__key-heading text-upper js-intro-heading"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/common/logo.svg" alt="" ></div>
        </div>
    </div>
    <main class="top">
        <!-- topkey -->
        <section class="top__key">
            <div class="top__key-heading-area">
                <h2 class="top__key-heading text-upper">Everyone&nbsp;is&nbsp;livery<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All&nbsp;for&nbsp;a&nbsp;smile.</h2>
                <h3 class="top__key-sub-heading">皆が生き生きと。全ては笑顔の為に。</h3>
            </div>

            <!-- 動画ここから -->
            <script>
                jQuery(function(){
                    jQuery(".fade-img img:not(:first-child)").hide();
                    setInterval(function() {
                        jQuery(".fade-img img:first-child").fadeOut(1000).next("img").fadeIn(1000).end().appendTo(".fade-img");
                    },5000);
                });
            </script>

            <div class="top__key-slider-area">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/images/top/top_img1.png" alt="">
            </div>
        </section>
        <!-- topkeyここまで -->

        <?php get_template_part('template-parts/top/content', 'news'); ?>

        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile; // End of the loop.
        ?>

    </main>
<?php
get_footer();
