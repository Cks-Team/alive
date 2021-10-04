<?php
/**
 * The header for our theme
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alive
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="--vh:10.8px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="株式会社ALIVE 皆が生き生きと。全ては笑顔のために。">
    <meta name="Keywords" content="株式会社ALIVE">
    <!-- title -->
    <title>株式会社ALIVE</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="http://alivecorporation.co.jp/wp-content/uploads/2021/09/Group-79@2x.png">

    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no">
    <!-- faviconここまで -->
    <!--  <link rel="stylesheet" href="./株式会社H2(エイチツー)_files/yakuhanjp.min.css">-->
    <!--  <link rel="stylesheet" href="./株式会社H2(エイチツー)_files/input-clear-icon.regular.min.css">-->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/application.css">

    <?php wp_head(); ?>
    <link rel="stylesheet" id="wp-block-library-css" href="<?= get_stylesheet_directory_uri() ?>/lib/css/style.min.css"
          type="text/css" media="all">
    <script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/lib/js/jquery/jquery.js"></script>
    <script type="text/javascript"
            src="<?= get_stylesheet_directory_uri() ?>/lib/js/jquery/jquery-migrate.min.js"></script>

    <script>let ifHome = "1";</script>
</head>
<body class="windows chrome">
<!-- scroll-link -->
<div class="scroll-link">
    <a href="#" class="scroll-link__link scroll-link__link_down text-upper"
       style="display: inline;">Scroll&nbsp;Down</a>
    <a href="#" class="scroll-link__link scroll-link__link_up text-upper">Scroll&nbsp;Up</a>
</div>
<!-- scroll-linkここまで -->
<div class="wrapper <?= is_front_page() ? 'is-hidden' : ''?>" <?= !is_front_page() ? 'id="js-scroll"' : ''?>>
    <!-- header -->
    <header class="header">
        <div class="header__area">
            <h1 class="header__heading">
                <a href="#" class="header__logo">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/common/logo.svg" alt=""
                         class="header__logo-image">
                </a>
            </h1>
            <!-- navigation -->
            <div class="navigation-cover sp-only"></div>
            <nav class="navigation navigation-pc pc-only">
                <ul class="navigation__area">
                    <?php foreach (global_navs() as $item): ?>
                        <li class="navigation__item">
                            <a href="<?= $item['link'] ?>" class="navigation__link text-upper">
                                <span class="navigation__link-child navigation__link-child_en"><?= $item['title'] ?></span>
                                <span class="navigation__link-child navigation__link-child_ja"><?= $item['title_ja'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <nav class="navigation">
                <div class="navigation__logo sp-only">
                    <a href="#" class="header__logo">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/common/logo_white.svg" alt=""
                             class="header__logo-image">
                    </a>
                </div>
                <ul class="navigation__area">
                    <?php foreach (global_navs() as $item): ?>
                        <li class="navigation__item navigation__item_sp">
                            <a href="<?= $item['link'] ?>" class="navigation__link text-upper">
                                <span class="navigation__link-child navigation__link-child_en"><?= $item['title'] ?></span>
                                <span class="navigation__link-child navigation__link-child_ja"><?= $item['title_ja'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <?php
                    $contact = get_page_by_path('contact');
                    ?>
                    <li class="navigation__item navigation__item_contact">
                        <a href="<?= get_permalink($contact) ?>"
                           class="navigation__link navigation__link_color_orange text-upper">
                            <span class="navigation__link-child navigation__link-child_en"><?= $contact->post_title ?></span>
                            <span class="navigation__link-child navigation__link-child_ja"><?= get_field('subtitle', $contact->ID) ?></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- headerここまで --> <span class="sp-only hamburger">
      <span class="hamburger__area js-hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
       </span>
     </span>
        </div>
    </header>
    <!-- headerここまで -->
    <?php ?>
