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

$all_posts = get_posts([
    'posts_per_page' => -1,
    'status' => 'publish'
]);
$news = get_posts([
    'posts_per_page' => -1,
    'status' => 'publish',
    'category' => get_category_by_slug('news')->term_id
]);
$employments = get_posts([
    'posts_per_page' => -1,
    'status' => 'publish',
    'category' => get_category_by_slug('employment')->term_id
]);

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


        <section class="news__section js-slide-image-trigger">
            <div class="news__parent">
                <h2 class="lower-heading text-upper">
                    <span class="lower-heading__heading lower-heading__heading_en">News</span>
                    <span class="lower-heading__heading lower-heading__heading_ja">ニュース</span>
                </h2>
                <p class="news-heading-text">お知らせ、採用情報などお知らせはこちらをご覧ください。</p>
                <div class="news__upperside">
                    <div class="w3-bar w3-black js-fade-trigger">
                        <button class="w3-bar-item w3-button tablink js-fade-target w3-red" onclick="openTab(event,'tab1')">全て</button>
                        <button class="w3-bar-item w3-button tablink js-fade-target" onclick="openTab(event,'tab2')">お知らせ</button>
                        <button class="w3-bar-item w3-button tablink js-fade-target" onclick="openTab(event,'tab3')">採用情報</button>
                    </div>
                    <div id="tab1" class="w3-container w3-border tab">
                        <ul class="news__area top__inner-item js-fade-trigger">
                            <?php if($all_posts):?>
                                <?php foreach ($all_posts as $post): setup_postdata( $post ); $categories = get_the_category()?>
                                    <li class="news__item top__inner-label js-fade-target">
                                        <article class="news__article">
                                            <a href="<?= get_permalink()?>" class="news__link">
                                                <div class="news__item-child">
                                                    <h4 class="news__heading"><?= get_the_title()?></h4>
                                                    <p class="news__date"><time datetime="<?= get_the_time('Y-m-d') ?>"><?= get_the_time('Y.m.d') ?></time></p>
                                                    <p class="news__category"><?=$categories[0]->name?></p>
                                                </div>
                                            </a>
                                        </article>
                                    </li>
                                <?php endforeach; wp_reset_postdata();?>
                            <?php endif;?>
                        </ul>
                    </div>

                    <div id="tab2" class="w3-container w3-border tab" style="display:none">
                        <ul class="news__area top__inner-item js-fade-trigger">
                            <?php foreach ($news as $post): setup_postdata( $post ); $categories = get_the_category()?>
                                <li class="news__item top__inner-label js-fade-target">
                                    <article class="news__article">
                                        <a href="<?= get_permalink()?>" class="news__link">
                                            <div class="news__item-child">
                                                <h4 class="news__heading"><?= get_the_title()?></h4>
                                                <p class="news__date"><time datetime="<?= get_the_time('Y-m-d') ?>"><?= get_the_time('Y.m.d') ?></time></p>
                                                <p class="news__category"><?=$categories[0]->name?></p>
                                            </div>
                                        </a>
                                    </article>
                                </li>
                            <?php endforeach; wp_reset_postdata();?>
                        </ul>
                    </div>

                    <div id="tab3" class="w3-container w3-border tab" style="display:none">
                        <ul class="news__area top__inner-item js-fade-trigger">
                            <?php foreach ($employments as $post): setup_postdata( $post ); $categories = get_the_category()?>
                                <li class="news__item top__inner-label js-fade-target">
                                    <article class="news__article">
                                        <a href="<?= get_permalink()?>" class="news__link">
                                            <div class="news__item-child">
                                                <h4 class="news__heading"><?= get_the_title()?></h4>
                                                <p class="news__date"><time datetime="<?= get_the_time('Y-m-d') ?>"><?= get_the_time('Y.m.d') ?></time></p>
                                                <p class="news__category"><?=$categories[0]->name?></p>
                                            </div>
                                        </a>
                                    </article>
                                </li>
                            <?php endforeach; wp_reset_postdata();?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



    </main>
<?php
get_footer();
