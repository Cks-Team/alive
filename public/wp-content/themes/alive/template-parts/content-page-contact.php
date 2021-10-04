<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alive
 */
$status = isset($_POST['act']) ? $_POST['act'] : false;
$is_confirm = false;
$is_finish = false;
$data = [];
if($status){
    $data = $_POST['contact_data'];
    if($status == 2) {
        $is_confirm = true;
    }elseif ($status == 3){
        $is_finish = true;
        $send_status = send_notification($data);
    }
}
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
    <div class="contact contact_top">
        <div class="contact__parent">
            <h2 class="lower-heading text-upper">
                <span class="lower-heading__heading lower-heading__heading_en">CONTACT</span>
                <span class="lower-heading__heading lower-heading__heading_ja">お問い合わせ</span>
            </h2>
            <?php if($is_finish):?>
                <div class="contact__area">
                    <div class="contact__upperside">
                        <?php if($send_status):?>
                            <h3 class="contact__sub_heading">お問い合わせいただきありがとうございます。</h3>
                            <p class="contact__text">
                                お問い合わせを受け付けました。<br>
                                近日中に担当者よりご連絡いたします。<br>
                                お手数ですが、しばらくお待ちくださいませ。
                            </p>
                        <?php else:?>
                            <h3 class="contact__sub_heading">Error!!!。</h3>
                        <?php endif;?>
                    </div>
                    <div class="contact__form-button-area">
                        <a href="<?= get_home_url()?>" id="submit" class="contact__form-button">トップに戻る</a>
                    </div>
                </div>
            <?php else:?>
            <div class="contact__area">
                <div class="contact__upperside">
                    <p class="contact__text">必要項目を入力後、確認画面が表示されます。<br>内容に間違いがなければ、ページ最下部の「送信」を押してください。</p>
                    <p class="contact__required-text">・必須項目</p>
                </div>
                <form id="input-form" data-toggle="validator" role="form" method="post" class="contact__form-parent" autocomplete="nope">
                    <?php if($is_confirm):?>
                        <input type="hidden" name="contact_data[name]" value="<?=$data['name']?>">
                        <input type="hidden" name="contact_data[furigana]" value="<?=$data['furigana']?>">
                        <input type="hidden" name="contact_data[mail]" value="<?=$data['mail']?>">
                        <input type="hidden" name="contact_data[tel]" value="<?=$data['tel']?>">
                        <input type="hidden" name="contact_data[kind]" value="<?=$data['kind']?>">
                        <input type="hidden" name="contact_data[message]" value="<?=$data['message']?>">
                    <?php endif;?>
                    <ul class="contact__form-area">
                        <li class="contact__form-item js-required-item">
                            <div class="contact__form-heading">
                                <label class="contact__form-label">お名前</label>
                            </div>
                            <div class="contact__form-description">
                                <input class="contact__form-input js-required" type="text" name="contact_data[name]" placeholder="例：山田 太郎" value="<?= $is_confirm ? $data['name'] : ''?>" data-required-error="必須項目です" required="" <?= $is_confirm ? "disabled" : ""?>>
                            </div>
                        </li>
                        <li class="contact__form-item js-required-item">
                            <div class="contact__form-heading">
                                <label class="contact__form-label">ふりがな</label>
                            </div>
                            <div class="contact__form-description">
                                <input class="contact__form-input js-required" type="text" name="contact_data[furigana]" placeholder="例：やまだ たろう" value="<?= $is_confirm ? $data['furigana'] : ''?>" data-required-error="必須項目です" required="" <?= $is_confirm ? "disabled" : ""?>
                            </div>
                        </li>
                        <li class="contact__form-item js-required-item">
                            <div class="contact__form-heading">
                                <label class="contact__form-label js-required">メールアドレス</label>
                            </div>
                            <div class="contact__form-description">
                                <input class="contact__form-input js-required" type="email" name="contact_data[mail]" placeholder="例：alive@gmail.com" value="<?= $is_confirm ? $data['mail'] : ''?>" data-required-error="必須項目です" required="" <?= $is_confirm ? "disabled" : ""?>
                            </div>
                        </li>
                        <li class="contact__form-item js-required-item">
                            <div class="contact__form-heading">
                                <label class="contact__form-label js-required">電話番号</label>
                            </div>
                            <div class="contact__form-description">
                                <input class="contact__form-input js-required" type="tel" name="contact_data[tel]" placeholder="例：080-1234-5678" value="<?= $is_confirm ? $data['tel'] : ''?>" data-required-error="必須項目です" required="" <?= $is_confirm ? "disabled" : ""?>
                            </div>
                        </li>
                        <div class="contact__form-item contact__form-item_select js-required-item">
                            <div class="w-100">
                                <label class="contact__form-select-area">
                                    <select name="contact_data[kind]" class="contact__form-input contact__form-input_select js-required" data-required-error="必須項目です" required="" <?= $is_confirm ? "disabled" : ""?>
                                        <optgroup>
                                            <option value="" selected="" disabled="">お問い合わせ種類を選択してください</option>
                                            <option value="ALIVEについて" <?= ($is_confirm && $data['kind'] == "ALIVEについて") ? 'selected' : ''?>>ALIVEについて</option>
                                            <option value="採用について" <?= ($is_confirm && $data['kind'] == "採用について") ? 'selected' : ''?>>採用について</option>
                                            <option value="パートナー契約について" <?= ($is_confirm && $data['kind'] == "パートナー契約について") ? 'selected' : ''?>>パートナー契約について</option>
                                            <option value="その他" <?= ($is_confirm && $data['kind'] == "その他") ? 'selected' : ''?>>その他</option>
                                        </optgroup>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <li class="contact__form-item contact__form-item_content js-required-item">
                            <div class="contact__form-description w-100">
                                <textarea class="contact__form-input contact__form-input_content js-required"  name="contact_data[message]" rows="5" placeholder="お問い合せ内容"  data-required-error="必須項目です" required="" <?= $is_confirm ? "disabled" : ""?>><?php if($is_confirm):?><?=$data['message']?><?php endif;?></textarea>
                            </div>
                        </li>
                        <div class="contact__form-button-area">
                            <?php if($is_confirm):?>
                                <button id="submit" type="submit" class="contact__form-button js-submit" name="act" value="3">送 信</button>
                            <?php else:?>
                                <button type="submit" class="contact__form-button js-submit" name="act" value="2">確認画面へ</button>
                            <?php endif;?>
                        </div>
                    </ul>
                </form>
            </div>
            <?php endif;?>
        </div>
    </div>
</main>
