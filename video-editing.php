<?php
$page_title  = 'Video Editing Services | Intelliworkz';
$body_class  = 'page-video';
$extra_css   = ['assets/css/video.css'];
require __DIR__ . '/includes/data-video.php';
require __DIR__ . '/includes/header.php';

$vi = 'assets/images/video/';   // page images
$vc = 'assets/icons/video/';    // page icons
?>

<main class="page ve">

    <!-- ============ HERO ============ -->
    <section class="ve-hero">
        <img class="ve-hero__bg" src="<?= $vi ?>hero-bg-d31711.png" alt="">
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">
        <img class="ve-hero__floor" src="<?= $vi ?>floor-glow.png" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Brand &amp; Creative</a> / <span>Video Editing</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                        <div class="ve-hero__intro">
                            <h1 class="h1">Video Editing Services</h1>
                            <p>Most of the planning for a video happens before the shoot. The pressure usually begins after it, when the footage is in and the delivery date is close. That is where we support you. Our post-production team works to the timeline you have agreed on and the quality standard you have set.</p>
                        </div>
                        <ul class="ve-benefits">
                            <?php foreach ($ve_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                        </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated Project Manager</strong>
                                <span>One point of contact throughout the project.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="lead-form" action="#" method="post">
                    <div class="lead-form__head">
                        <h2>Let's bring your magazine to life.</h2>
                        <p>Tell us about your project.</p>
                    </div>
                    <div class="lead-form__fields">
                        <?php foreach (array_chunk($ve_form_fields, 2) as $row): ?>
                            <div class="lead-form__row">
                                <?php foreach ($row as $f): ?>
                                    <label class="field"><span><?= $f[0] ?></span><input type="<?= $f[2] ?>" name="<?= strtolower(str_replace(' ', '_', $f[0])) ?>" placeholder="<?= $f[1] ?>"></label>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                        <label class="field"><span>Subject</span><input type="text" name="subject" placeholder="Enter your subject"></label>
                        <label class="field"><span>Your Message</span><textarea name="message" rows="1" placeholder="Tell us about your requirements"></textarea></label>
                    </div>
                    <button type="submit" class="btn btn--cta btn--block">Start a Project</button>
                    <p class="lead-form__privacy"><img src="<?= $vc ?>lock.svg" width="14" height="14" alt="">We respect your privacy. Your information is safe with us.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- ============ PORTFOLIO ============ -->
    <section class="container ve-portfolio">
        <div class="ve-portfolio__head">
            <div class="ve-portfolio__top">
                <div class="ve-portfolio__title">
                    <h2 class="h2">Selected Video Editing Work</h2>
                    <p class="lead lead--left">Lorem ipsum dolor sit amet consectetur. Porttitor egestas leo viverra nec consequat nunc sit cum pretium. Enim iaculis malesuada pharetra risus mattis. Convallis faucibus malesuada vitae pellentesque viverra sagittis. Sed vestibulum volutpat lacus a malesuada lorem dolor sagittis. Suspendisse vitae turpis a magna. Varius a sed a hac hendrerit.</p>
                </div>
                <div class="round-arrows">
                    <button type="button" class="round-arrow" aria-label="Previous" data-pf-prev><img src="<?= $vc ?>slider-arrow-left.svg" width="52" height="52" alt=""></button>
                    <button type="button" class="round-arrow" aria-label="Next" data-pf-next><img src="<?= $vc ?>slider-arrow-right.svg" width="52" height="52" alt=""></button>
                </div>
            </div>
            <div class="filter-tabs" data-filter-tabs>
                <?php foreach ($ve_filters as $key => $label): ?>
                    <button type="button" class="filter-tab <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= $key ?>"><?= $label ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="pf-cards" data-pf-track>
            <?php foreach ($ve_cards as $c): ?>
                <article class="pf-card" data-cats="<?= $c['cats'] ?>" data-video="<?= $c['video'] ?>" data-title="<?= $c['title'] ?>">
                    <div class="pf-media" data-play>
                        <img class="pf-media__base" src="<?= $vi ?>pf-base-19393f.png" alt="">
                        <?php if ($c['overlay']): ?><img class="pf-media__overlay" src="<?= $vi . $c['overlay'] ?>" alt=""><?php endif; ?>
                        <span class="pf-media__time">02:45</span>
                        <button type="button" class="pf-media__play" aria-label="Play <?= $c['title'] ?>"><img src="<?= $vi ?>pf-play.png" width="80" height="80" alt=""></button>
                    </div>
                    <div class="pf-meta">
                        <div class="pf-meta__row">
                            <h3><?= $c['title'] ?></h3>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 11L11 3M4 3h7v7" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <p><?= $c['meta'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ STATS ============ -->
    <section class="container ve-stats">
        <img class="ve-stats__bg1" src="<?= $vi ?>stats-bg-1.png" alt="">
        <img class="ve-stats__bg2" src="<?= $vi ?>stats-bg-2.png" alt="">
        <div class="ve-stats__bg3"><img src="<?= $vi ?>stats-bg-3.png" alt=""></div>
        <div class="ve-stats__content">
            <?php foreach ([$ve_stats_top, $ve_stats_bottom] as $n => $row): ?>
                <?php if ($n): ?><hr class="ve-stats__rule"><?php endif; ?>
                <div class="ve-stats__row">
                    <?php foreach ($row as $i => $s): ?>
                        <?php if ($i): ?><span class="ve-stats__divider"></span><?php endif; ?>
                        <div class="ve-stat">
                            <div class="ve-stat__value"><span data-count="<?= $s[0] ?>"><?= $s[0] ?></span><span>+</span></div>
                            <span class="ve-stat__label"><?= $s[1] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ WHY INTELLIWORKZ ============ -->
    <section class="container ve-why">
        <div class="ve-split">
            <h2 class="h2">Why Intelliworkz</h2>
            <div class="ve-split__side">
                <p>Most design problems in publishing are not creative problems. They are production problems: inconsistent output, missed deadlines, each issue that needs re-briefing, and source files that nobody can edit. We work differently. The same team handles your publication across every issue. Your grid, your typography, your cover format, and your brand rules are documented and followed from the first issue onward. </p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="pillars">
            <?php foreach ($ve_pillars as $p): ?>
                <article class="pillar" style="background: <?= $p['bg'] ?>">
                    <img class="pillar__img" src="<?= $vi . $p['img'] ?>" alt="" style="left: <?= $p['x'] ?>px">
                    <div class="pillar__content">
                        <span class="pillar__icon" style="border-color: <?= $p['ring'] ?>"><img src="<?= $vc . $p['icon'] ?>" alt=""></span>
                        <div class="pillar__text">
                            <h3><?= $p['title'] ?></h3>
                            <p><?= $p['text'] ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ EDITING TOOLS ============ -->
    <section class="ve-tools">
        <img class="ve-tools__bg" src="<?= $vi ?>tools-bg-63eb73.png" alt="">
        <ul class="ve-tools__row">
            <?php foreach ($ve_tools as $i => $t): ?>
                <?php if ($i): ?><li class="ve-tools__divider"></li><?php endif; ?>
                <li class="ve-tool">
                    <img src="<?= $vi . $t[0] ?>" alt="">
                    <div><strong><?= $t[1] ?></strong><span><?= $t[2] ?></span></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center">
                <h2 class="h2">What Our Video Editing Services Cover</h2>
                <div class="ve-split__side">
                    <p>We work across corporate brand films, commercials, product videos, documentaries, training content, event coverage and short-form social content. Finishing work is part of the scope rather than quoted separately.</p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services" data-accordion>
                    <?php foreach ($ve_services as $i => $s): ?>
                        <?php if ($i): ?><hr class="acc__rule"><?php endif; ?>
                        <div class="acc-item <?= $s['open'] ? 'is-open' : '' ?> ">
                            <button type="button" class="acc-head" aria-expanded="<?= $s['open'] ? 'true' : 'false' ?>">
                                <span class="acc-title"><?= $s['title'] ?></span>
                                <span class="acc-icons"><img class="acc-icon acc-icon--closed" src="<?= $vc ?>acc-icon-2.svg" width="42" height="42" alt=""><img class="acc-icon acc-icon--open" src="<?= $vc ?>acc-icon-1.svg" width="42" height="42" alt=""></span>
                            </button>
                            <?php if ($s['points']): ?>
                                <div class="acc-panel"><div class="acc-panel__inner">
                                    <ul class="dot-list dot-list--plain acc-points">
                                        <?php foreach ($s['points'] as $pt): ?><li><?= $pt ?></li><?php endforeach; ?>
                                    </ul>
                                </div></div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <img class="ve-services__img" src="<?= $vi ?>services.png" alt="Video editing services overview">
            </div>
        </div>

        <div class="workflow">
            <div class="workflow__inner">
                <?php foreach ($ve_workflow as $i => $w): ?>
                    <span class="workflow__line" style="left: <?= $i * 304 ?>px; background: <?= $w[1] ?>"></span>
                <?php endforeach; ?>
                <?php foreach ($ve_workflow as $i => $w): ?>
                    <article class="wstep" style="left: <?= 37 + $i * 304 ?>px; --c: <?= $w[1] ?>">
                        <div class="wstep__art">
                            <img class="wstep__ring" src="<?= $vc ?>step-ring-<?= $i + 1 ?>.svg" alt="">
                            <span class="wstep__no" style="left: <?= $w[2] ?>px; width: <?= $w[3] ?>px"><?= $w[0] ?></span>
                            <img class="wstep__img" src="<?= $vi . $w[4] ?>" alt="" style="left: <?= $w[5] ?>px; top: <?= $w[6] ?>px; width: <?= $w[7] ?>px; height: <?= $w[8] ?>px">
                        </div>
                        <div class="wstep__body">
                            <img src="<?= $vc ?>step-conn-<?= $i + 1 ?>.svg" width="14" height="62" alt="">
                            <div class="wstep__copy">
                                <h3><?= $w[9] ?><span></span></h3>
                                <p><?= $w[10] ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                <?php foreach ([291, 611, 921, 1241, 1551] as $x): ?>
                    <img class="workflow__next" src="<?= $vc ?>next-step-1.svg" alt="" style="left: <?= $x ?>px">
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php
    $showcase_title = 'What Our Video Editing Services Cover';
    $showcase_decor = [
        ['src' => $vi . 'floor-glow.png',      'style' => 'left:1145.53px;top:508.46px;width:969.91px;height:599.17px;opacity:.5'],
        ['src' => $vi . 'showcase-deco.png',   'style' => 'left:-111.5px;top:766px;width:699.31px;height:208.5px;opacity:.4'],
    ];
    require __DIR__ . '/includes/sections/showcase.php';
    ?>

    <!-- ============ WHAT WE OFFER + CTA + ENGAGEMENT ============ -->
    <div class="ve-offer-engagement">
        <section class="ve-offers">
            <div class="ve-offers__head">
                <h2 class="h2 h2--center">what we offer</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Porttitor egestas leo viverra nec consequat nunc sit cum pretium. Enim iaculis malesuada pharetra risus mattis. Convallis faucibus malesuada vitae pellentesque viverra sagittis. Sed vestibulum volutpat lacus a malesuada lorem dolor sagittis. Suspendisse vitae turpis a magna. Varius a sed a hac hendrerit.</p>
            </div>
            <div class="container offer-viewport" data-offers>
            <div class="offer-cards" data-offers-track>
                <?php foreach ($ve_offers as $k => $o): ?>
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
                <?php foreach ($ve_offers as $k => $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
            </div>
        </section>

        <section class="ve-cta">
            <img class="ve-cta__bg" src="<?= $vi ?>cta-bg.png" alt="">
            <h2 class="h1">Book a Free <br>Consultation</h2>
            <?php btn('Let’s Talk', 'btn--cta', 'arrow-cta.svg'); ?>
        </section>

        <?php require __DIR__ . '/includes/sections/engagement.php'; ?>
    </div>

    <!-- ============ FAQs ============ -->
    <section class="container ve-faq">
        <h2 class="h2 h2--center">FAQs</h2>
        <div class="acc acc--faq" data-accordion>
            <?php foreach ($ve_faqs as $i => $f): ?>
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

</main>

<!-- Video popup -->
<div class="video-modal" id="video-modal" role="dialog" aria-modal="true" aria-label="Video player" hidden>
    <div class="video-modal__backdrop" data-video-close></div>
    <div class="video-modal__box">
        <button type="button" class="video-modal__close" aria-label="Close video" data-video-close>&times;</button>
        <div class="video-modal__title"></div>
        <div class="video-modal__stage"></div>
    </div>
</div>

<?php
$show_prefooter = false;
$footer_class   = 'site-footer--service';
$phone_icon     = 'video/icon-phone-outline.svg';
require __DIR__ . '/includes/footer.php';
