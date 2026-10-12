<?php
$page_title = 'Manufacturing Marketing Agency | Intelliworkz';
$body_class = 'page-manufacture';
$extra_css  = ['assets/css/video.css', 'assets/css/magazine.css', 'assets/css/manufacture.css'];
require __DIR__ . '/includes/data-manufacture.php';
require __DIR__ . '/includes/header.php';

$fi = 'assets/images/manufacture/';  // page images
$fc = 'assets/icons/manufacture/';   // page icons
$vi = 'assets/images/video/';        // shared offer art
$vc = 'assets/icons/video/';         // shared icons
?>

<main class="page ve mf">

    <!-- ============ HERO ============ -->
    <section class="ve-hero ve-hero--plain mf-hero">
        <img class="mf-hero__photo" src="<?= $fi ?>hero.png" alt="">
        <img class="mf-hero__decor" src="<?= $fi ?>hero-decor.png" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container mf-hero__copy">
                <p class="breadcrumb breadcrumb--light"><a href="index.php">Home</a> / <a href="#">Industries</a> / <span>Manufacturing</span></p>
                <div class="mf-hero__text">
                    <h1 class="h1">Great Manufacturing Deserves Greater Visibility</h1>
                    <p>Manufacturing businesses earn their reputation through what they produce, their process, their quality standards, and their clients. Communicating this to their ever increasing market at to the market, clearly and to the right buyers, is where most fall short. As a manufacturing marketing agency, Intelliworkz brings brand, creative, and digital capability built around how industrial businesses sell.</p>
                </div>
                <div class="mf-hero__btns">
                    <a href="#" class="mf-btn mf-btn--red">Start a Project</a>
                    <a href="#" class="mf-btn mf-btn--ghost">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <div class="mf-body">

        <!-- ============ BUYERS DECIDE ============ -->
        <section class="container mf-buyers">
            <div class="mf-buyers__copy">
                <h2 class="h2">Buyers Decide Before They Call</h2>
                <div class="mf-buyers__text">
                    <p>The manufacturing sector has always been relationship-driven. Referrals, trade shows, and long-standing distributor networks used to be enough. That is no longer the case. Today, a procurement manager researching suppliers starts online, comparing websites and reviewing capability statements before a conversation takes place.</p>
                    <p>At the same time, buyer expectations are rising. They want to see what you produce, understand the scale of your operation, verify your certifications, and get a sense of whether you are the kind of business they want to work with, all from your digital presence alone. Manufacturers who have invested in how they present themselves online are meeting that expectation.</p>
                    <p>The brands that grow in this environment are not just operationally strong. They are visible, credible, and easy to evaluate, and they have built the marketing infrastructure to stay that way consistently.</p>
                </div>
            </div>
            <img class="mf-buyers__img" src="<?= $fi ?>collage.png" alt="Industrial engineering marketing collage">
        </section>

        <!-- ============ WHERE MANUFACTURERS LOSE GROUND ============ -->
        <section class="container mf-lose">
            <h2 class="h2 h2--center">Where Manufacturers Lose Ground</h2>
            <div class="mf-lose__row">
                <?php foreach ($mf_lose as $c): ?>
                    <article class="mf-card" style="--c: <?= $c['c'] ?>">
                        <img class="mf-card__img" src="<?= $fi . $c['img'] ?>" alt="" style="left: <?= $c['box'][0] ?>px; top: <?= $c['box'][1] ?>px; width: <?= $c['box'][2] ?>px; height: <?= $c['box'][3] ?>px">
                        <h3 class="mf-card__title"><?= $c['title'] ?></h3>
                        <p class="mf-card__text"><?= $c['text'] ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ============ DARK: BUILT FOR MANUFACTURERS ============ -->
        <section class="mf-dark">
            <img class="mf-dark__decor mf-dark__decor--top" src="<?= $fi ?>dark-decor-top.png" alt="">
            <img class="mf-dark__decor mf-dark__decor--bottom" src="<?= $fi ?>dark-decor-bottom.png" alt="">
            <div class="mf-dark__head">
                <h2 class="h2">Built for Manufacturers. Not Adapted for Them.</h2>
                <p>We work as a dedicated manufacturing marketing agency. Every service is built around the buying behaviour and sales cycles specific to manufacturing.</p>
            </div>
            <img class="mf-dark__shot" src="<?= $fi ?>showcase.png" alt="Industrial precision engineering showcase">
            <div class="acc acc--services mf-acc" data-accordion>
                <?php foreach ($mf_services as $i => $s): ?>
                    <div class="acc-item <?= !empty($s['open']) ? 'is-open' : '' ?>">
                        <button type="button" class="acc-head" aria-expanded="<?= !empty($s['open']) ? 'true' : 'false' ?>">
                            <span class="acc-title"><?= $s['title'] ?></span>
                            <span class="acc-icons"><img class="acc-icon acc-icon--closed" src="<?= $fc ?>acc-closed.svg" width="42" height="42" alt=""><img class="acc-icon acc-icon--open" src="<?= $fc ?>acc-open.svg" width="42" height="42" alt=""></span>
                        </button>
                        <div class="acc-panel"><div class="acc-panel__inner"><p><?= $s['text'] ?></p></div></div>
                        <hr class="acc__rule">
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ============ WHO WE SUPPORT ============ -->
        <section class="container mf-support">
            <h2 class="h2">The Manufacturers We Support</h2>
            <div class="mf-support__body">
                <p>We work with industrial goods and component manufacturers, consumer product producers, contract and custom manufacturers, OEM suppliers, and assembly operations. Growing businesses building their market presence for the first time and established ones that have outgrown how they currently present themselves. The work is always shaped around your specific situation, not a generic manufacturing template.</p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </section>

        <!-- ============ WHAT WE BRING + CTA ============ -->
        <div class="ve-offer-engagement mf-offers-wrap">
            <section class="ve-offers">
                <div class="ve-offers__head">
                    <h2 class="h2 h2--center">What We Bring</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Porttitor egestas leo viverra nec consequat nunc sit cum pretium. Enim iaculis malesuada pharetra risus mattis. Convallis faucibus malesuada vitae pellentesque viverra sagittis. Sed vestibulum volutpat lacus a malesuada lorem dolor sagittis. Suspendisse vitae turpis a magna. Varius a sed a hac hendrerit.</p>
                </div>
                <div class="container offer-viewport" data-offers>
                    <div class="offer-cards" data-offers-track>
                        <?php foreach ($mf_offers as $k => $o): ?>
                            <article class="offer-card" data-i="<?= $k ?>" style="background: <?= $o['bg'] ?>">
                                <div class="offer-card__top">
                                    <span class="offer-card__no" style="color: <?= $o['noc'] ?>"><?= $o['no'] ?></span>
                                    <a href="#" aria-label="<?= $o['title'] ?>"><img src="<?= $vc . $o['arrow'] ?>" width="48" height="48" alt=""></a>
                                </div>
                                <div class="offer-card__body">
                                    <h3><?= $o['title'] ?></h3>
                                    <p><?= $o['text'] ?></p>
                                </div>
                                <img class="offer-card__img" src="<?= $vi . $o['img'] ?>" alt="" style="left: <?= $o['x'] ?>px; top: <?= $o['y'] ?>px; width: <?= $o['w'] ?>px; height: <?= $o['h'] ?>px">
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="dots dots--navy dots--center" data-offers-dots>
                    <?php foreach ($mf_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
                </div>
            </section>

            <section class="cta-band">
                <img class="cta-band__grid" src="assets/icons/grid-lines.svg" alt="">
                <h2 class="cta-title">Let the Right Buyers Find You</h2>
                <?php btn('Start a Conversation', 'btn--cta', 'arrow-cta.svg'); ?>
            </section>
        </div>

        <!-- ============ FAQs ============ -->
        <section class="container ve-faq">
            <h2 class="h2 h2--center">FAQs</h2>
            <div class="acc acc--faq" data-accordion>
                <?php foreach ($mf_faqs as $i => $f): ?>
                    <div class="acc-item <?= $i === 0 ? 'is-open' : '' ?>">
                        <button type="button" class="acc-head" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                            <span class="acc-chevron"><img src="<?= $vc ?>faq-chevron.svg" width="20" height="20" alt=""></span>
                            <span class="acc-title"><?= $f[0] ?></span>
                        </button>
                        <div class="acc-panel"><div class="acc-panel__inner"><p><?= $f[1] ?></p></div></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>

</main>

<?php
$show_prefooter = false;
$footer_class   = 'site-footer--service';
$phone_icon     = 'video/icon-phone-outline.svg';
require __DIR__ . '/includes/footer.php';
