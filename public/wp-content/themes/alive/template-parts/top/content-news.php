<!-- NEWS -->
<?php
$all_posts = get_posts([
    'posts_per_page' => 3,
    'status' => 'publish'
]);
$news = get_posts([
    'posts_per_page' => 3,
    'status' => 'publish',
    'category' => get_category_by_slug('news')->term_id
]);
$employments = get_posts([
    'posts_per_page' => 3,
    'status' => 'publish',
    'category' => get_category_by_slug('employment')->term_id
]);
?>
<section class="top__section top__section_news">
    <div class="top__inner-parent">
        <h2 class="top__inner-heading">
            <span class="top__inner-heading-child top__inner-heading-child_en text-upper">News</span>
            <span class="top__inner-heading-child top__inner-heading-child_ja text-upper">ニュース</span>
        </h2>
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
            <p class="news__button"><a href="" class="button button_color_black">VIEW MORE</a></p>
        </div>
    </div>
</section>
<!-- NEWS end -->