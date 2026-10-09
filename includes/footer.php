<?php
/** Renders a footer link column (heading with dot + list of links). */
function footer_col(array $col): void { ?>
    <div class="footer-col">
        <h3 class="footer-col__title"><span class="dot-anchor"></span><?= $col[0] ?></h3>
        <ul class="footer-col__list">
            <?php foreach ($col[1] as $link): ?>
                <li><a href="#"><?= $link ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php } ?>

<?php if ($show_prefooter ?? true): ?>
<section class="pre-footer">
    <div class="pre-footer__inner">
        <div class="pre-footer__head">
            <h2 class="pre-footer__title">Have a Business Challenge? Let's Work on It.</h2>
            <p class="pre-footer__text">Tell us what you're trying to build, improve, market, or manage. We'll understand the requirements, identify the right capabilities, and work with you on the way forward.<br>Whether you need a new digital experience, a technology solution, stronger brand communication, or additional execution capacity, let's start with the requirements.</p>
        </div>
        <div class="pre-footer__actions">
            <a href="#" class="btn btn--cta">Start a Project</a>
            <a href="#" class="btn btn--cta btn--ghost">Contact Us</a>
        </div>
    </div>
</section>
<?php endif; ?>

<footer class="site-footer <?= $footer_class ?? '' ?>">
    <div class="site-footer__inner">
        <div class="site-footer__top">
            <div class="footer-brand">
                <div class="footer-brand__about">
                    <img src="assets/icons/footer-logo.svg" width="381" height="80" alt="Intelliworkz">
                    <p>Lorem ipsum dolor sit amet consectetur. Morbi feugiat donec felis ac aenean eget in. Facilisis sed massa eleifend aliquet aliquet leo. Commodo sit a dictum diam et nulla. Volutpat ut lectus pulvinar vel leo id at duis. Aliquet nunc dolor ultricies enim lacinia. Viverra volutpat.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><img src="assets/icons/social-facebook.svg" width="32" height="32" alt=""></a>
                        <a href="#" aria-label="Social"><img src="assets/icons/social-2.svg" width="32" height="32" alt=""></a>
                        <a href="#" aria-label="Social"><img src="assets/icons/social-3.svg" width="32" height="32" alt=""></a>
                    </div>
                </div>
                <hr class="footer-brand__line">
                <div class="footer-iso">
                    <img src="assets/icons/iso.svg" width="78" height="80" alt="ISO 27001">
                    <p><strong>ISO 27001</strong><br>Certified</p>
                </div>
            </div>

            <div class="footer-links">
                <?php footer_col($footer_cols['industries']); ?>
                <span class="v-line"></span>
                <div class="footer-stack">
                    <?php footer_col($footer_cols['products']); ?>
                    <hr class="h-line">
                    <?php footer_col($footer_cols['company']); ?>
                </div>
                <span class="v-line"></span>
                <?php footer_col($footer_cols['services']); ?>
                <span class="v-line"></span>
                <div class="footer-stack">
                    <?php footer_col($footer_cols['insights']); ?>
                    <hr class="h-line">
                    <?php footer_col($footer_cols['policies']); ?>
                </div>
            </div>
        </div>

        <div class="offices">
            <?php foreach ($offices as $o): ?>
                <article class="office">
                    <img class="office__map" src="assets/images/<?= $o['map'] ?>" alt="" style="opacity:<?= $o['map_opacity'] ?>">
                    <div class="office__body">
                        <div class="office__row">
                            <img src="assets/icons/<?= $o['flag'] ?>" width="70" height="70" alt="">
                            <div class="office__info">
                                <h3><?= $o['name'] ?></h3>
                                <p><?= $o['address'] ?></p>
                            </div>
                        </div>
                        <div class="office__phone">
                            <img src="assets/icons/<?= $phone_icon ?? 'icon-phone.svg' ?>" width="40" height="40" alt="">
                            <span><?= $o['phone'] ?></span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="bottom-bar">
            <p><?= $site['copyright'] ?></p>
            <ul class="bottom-bar__links">
                <li><a href="#">Privacy Policy</a></li>
                <li class="v-line v-line--sm"></li>
                <li><a href="#">Terms of Use</a></li>
                <li class="v-line v-line--sm"></li>
                <li><a href="#">Cookies</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="<?= asset_url('assets/js/main.js') ?>"></script>
</body>
</html>
