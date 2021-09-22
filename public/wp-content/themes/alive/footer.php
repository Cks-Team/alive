<!-- footer -->
<footer class="footer">
    <div class="footer__parent">
        <h2>
            <a href="#" class="footer__logo">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/common/logo_white.svg" alt=""
                     class="footer__logo-image">
            </a>
        </h2>
        <nav class="footer__navigation">
            <ul class="footer__navigation-area">
                <?php foreach (footer_navs() as $item): ?>
                    <li class="footer__navigation-item">
                        <a href="<?= $item['link'] ?>" class="footer__navigation-link">
                            <span class="footer__navigation-link-child footer__navigation-link-child_en text-upper"><?= $item['title'] ?></span>
                            <span class="footer__navigation-link-child footer__navigation-link-child_ja"><?= $item['title_ja'] ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </nav>
        <p class="footer__copyright"><small>Copyright ALIVE inc All Rights Reserved.</small></p>
    </div>
</footer>
<!-- footerここまで -->
</div>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/assets/application.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/lib/js/wp-embed.min.js"></script>
<!--ofi.min.js-->
<script src="<?= get_stylesheet_directory_uri() ?>/assets/ofi.min.js"></script>
<script>
    objectFitImages('img.obj-fit-img');
</script>
<script>
    function openTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>

<div class="betternet-wrapper"></div>
<?php wp_footer(); ?>
</body></html>