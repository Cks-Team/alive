<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alive
 */

get_header();
?>

    <main class="news">
        <!-- lower-head -->
        <section class="lower-head js-slide-image-trigger">
            <div class="lower-head__parent lower-head__parent_news">
                <div class="lower-head__heading-area">
                    <div class="lower-head__heading-item is-slide-item">
                        <div class="is-slide-cover"></div>
                        <h2 class="lower-head__heading">
                            <span class="lower-head__heading-child lower-head__heading-child_en text-upper">NEWS</span>
                            <span class="lower-head__heading-child lower-head__heading-child_ja">ニュース</span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- lower-headここまで -->
        <?php
		while ( have_posts() ) :
			the_post();
            $categories = get_the_category()
		?>
        <section class="news__section news__section_detail js-slide-image-trigger">
            <div class="news__parent">
                <h2 class="lower-heading text-upper">
                    <span class="lower-heading__heading lower-heading__heading_en">News</span>
                    <span class="lower-heading__heading lower-heading__heading_ja">ニュース</span>
                </h2>
                <p class="news-heading-text">お知らせ、採用情報などお知らせはこちらをご覧ください。</p>
                <div class="news__upperside">
                    <div class="news__item-child">
                        <p class="news__date"><time datetime="<?= get_the_time('Y-m-d') ?>"><?= get_the_time('Y.m.d') ?></time></p>
                        <p class="news__category"><?=$categories[0]->name?></p>
                    </div>
                    <h4 class="news__heading"><?php the_title()?></h4>
                    <div class="news__content">
                        <?php the_content();?>
                    </div>
                    <div class="news__back-button-area">
                        <a href="<?=get_permalink(get_option( 'page_for_posts' ))?>" class="news__back-button">一覧へ戻る</a>
                    </div>
                </div>
            </div>
        </section>
        <?php 	endwhile; // End of the loop. ?>
	</main><!-- #main -->

<?php
get_footer();
