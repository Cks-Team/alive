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
            <h2 class="intro__key-heading text-upper js-intro-heading">Everyone&nbsp;is&nbsp;livery<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All&nbsp;for&nbsp;a&nbsp;smile.
            </h2>
            <h3 class="intro__key-sub-heading js-intro-heading">皆が生き生きと。全ては笑顔の為に。</h3>
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

        <!-- top about -->
        <section class="top__section top__section_about">
            <div class="top__inner-parent">
                <h2 class="top__inner-heading">
                    <span class="top__inner-heading-child top__inner-heading-child_en text-upper">About&nbsp;Us</span>
                    <span class="top__inner-heading-child top__inner-heading-child_ja text-upper">ALIVEについて</span>
                </h2>
                <div class="top__inner-area js-slide-image-trigger">
                    <div class="top__inner-item js-text-fade-trigger">
                        <h3 class="top__inner-about-heading js-text-fade">皆が生き生きと<br>全ては笑顔の為に。</h3>

                        <!-- ここに文言を入れてください -->
                        <p class="top__inner-text js-text-fade">生き生きとした社会作りの為、経済の成長に貢献
                            生き生きとした生活の創造のため、お客様に喜びの提供
                            生き生きとした会社作りの為、個性を発揮しつつ一体感のある職場を目指す
                            仲間・お客様・社会と共に発展し生き生きとした環境づくりに励みます</p>
                        <!-- ここに文言を入れてくださいここまで -->

                        <div class="top__inner-button-area js-text-fade">
                            <!-- button -->
                            <a href="<?=get_permalink(get_page_by_path('about'))?>" role="button" class="text-upper button button_color_black">
                <span class="button__inner">
                  VIEW MORE    </span>
                            </a>
                            <!-- buttonここまで -->
                        </div>
                    </div>
                    <div class="top__inner-item">
                        <div class="is-slide-area">
                            <div class="top__inner-about-image-area is-slide-item">
                                <div class="is-slide-cover"></div>
                                <figure class="top__inner-about-image">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top aboutここまで -->



        <!-- top Business -->
        <section class="top__section top__section_business">
            <div class="top__inner-parent">
                <h2 class="top__inner-heading">
                    <span class="top__inner-heading-child top__inner-heading-child_en text-upper">Business</span>
                    <span class="top__inner-heading-child top__inner-heading-child_ja text-upper">事 業 内 容</span>
                </h2>
                <div class="top__inner-area business">
                    <p class="top__inner-business-label text-upper">
                        <span class="top__inner-business-label-child top__inner-business-label-child_number">01</span>
                        <span class="top__inner-business-label-child">ライフライン事業</span>
                    </p>
                    <p class="top__inner-business-text">電力、ガス、光回線、ウォーターサーバーなど日常生活に必要なサービスを提供、お客様にあったプランでご案内。<br>
                        日常生活にかかるコスト削減、パフォーマンス向上の提案。</p>
                    <p class="top__inner-business-label text-upper">
                        <span class="top__inner-business-label-child top__inner-business-label-child_number">02</span>
                        <span class="top__inner-business-label-child">デジタル化推進事業</span>
                    </p>
                    <p class="top__inner-business-text">お会計のキャッシュレス化を推進しており、オンラインでの決済により、お会計がスムーズになり、衛生管理も徹底できます。<br>
                        また、経理業務のデジタル化も推進しており、業務効率向上に伴い、コスト削減できます。<br>
                        様々なデジタル化を推進しておりますので、今後の時代の変化に適用するサービスを提供いたします。</p>
                    <p class="top__inner-business-label text-upper">
                        <span class="top__inner-business-label-child top__inner-business-label-child_number">03</span>
                        <span class="top__inner-business-label-child">パートナー事業</span>
                    </p>
                    <p class="top__inner-business-text">B to B、B to C問わず、旬の商材を提供させて頂き、販売戦略の構築をし、相乗効果を生み出し、共に成長できるよう努めます。</p>
                </div>
                <div class="top__inner-button-area">
                    <!-- button -->
                    <a href="<?=get_permalink(get_page_by_path('business'))?>" role="button" class="text-upper button button_color_black btn-center">
            <span class="button__inner">
              VIEW MORE    </span>
                    </a>
                    <!-- buttonここまで -->
                </div>
            </div>
        </section>
        <!-- top Businessここまで -->


        <!-- top recruit -->
        <section class="top__section top__section_recruit js-slide-image-trigger">
            <div class="top__inner-parent">
                <h2 class="top__inner-heading">
                    <span class="top__inner-heading-child top__inner-heading-child_en text-upper">Recruit</span>
                    <span class="top__inner-heading-child top__inner-heading-child_ja text-upper">採 用 情 報</span>
                </h2>
                <div class="top__inner-area">
                    <div class="top__inner-item">
                        <div class="is-slide-area">
                            <div class="top__inner-recruit-item is-slide-item">
                                <div class="is-slide-cover"></div>
                                <h3 class="top__inner-recruit-heading">共に成長できる仲間を募集中</h3>
                                <p class="top__inner-recruit-text">弊社は2021年に設立したばかりのスタートアップ企業であり、右肩上がりの成長をし続ける企業となります。
                                    ALIVEでは、向上し続けるために、意見は気兼ねなく言って頂き、社内環境の改善改良に取り組みます。
                                    　会社の成長、個人の成長を実感し、共に見たことのないネクストステージへ進んでいきたいと考えます。
                                    　是非とも、一緒に成長を実感できれば幸いです。</p>
                            </div>
                        </div>
                        <div class="top__inner-button-area">
                            <!-- button -->
                            <a href="<?=get_permalink(get_page_by_path('recruit'))?>" role="button" class="text-upper button button_color_black btn-center">
    <span class="button__inner">
      VIEW MORE    </span>
                            </a>
                            <!-- buttonここまで -->
                        </div>
                    </div>
                    <div class="top__inner-item">
                    </div>
                </div>
            </div>
        </section>
        <!-- top recruitここまで -->


    </main>
<?php
get_footer();
