<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alive
 */

?>
<main class="<?= get_post_field('post_name'); ?>">
    <!-- lower-head -->
    <section class="lower-head js-slide-image-trigger">
        <div class="lower-head__parent lower-head__parent_business">
            <div class="lower-head__heading-area">
                <div class="lower-head__heading-item is-slide-item">
                    <div class="is-slide-cover"></div>
                    <h2 class="lower-head__heading">
                        <span class="lower-head__heading-child lower-head__heading-child_en text-upper"><?php the_title() ?></span>
                        <span class="lower-head__heading-child lower-head__heading-child_ja"><?= get_field('subtitle') ?></span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- lower-headここまで -->
    <?php
    the_content();
    ?>
</main>
