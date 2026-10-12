<?php
$page_title = 'Marketing & Sales Collaterals | Intelliworkz';
$body_class = 'page-collaterals';
$extra_css  = ['assets/css/video.css', 'assets/css/magazine.css', 'assets/css/collaterals.css'];
require __DIR__ . '/includes/data-collaterals.php';
require __DIR__ . '/includes/data-video.php'; // for $ve_form_fields (shared lead-form field list)
require __DIR__ . '/includes/header.php';

$ci = 'assets/images/collaterals/';  // page images
$cc = 'assets/icons/collaterals/';   // page icons
$mc = 'assets/icons/magazine/';      // shared with the magazine page (metric + tool icons)
$vi = 'assets/images/video/';        // shared with the video page (offer art)
$vc = 'assets/icons/video/';         // shared icons
?>

<main class="page ve cl">

    <!-- ============ HERO ============ -->
    <section class="ve-hero ve-hero--plain">
        <div class="cl-hero__art" role="img" aria-label=""></div>
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb breadcrumb--light"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Branding &amp; Creative</a> / <span>Marketing &amp; Sales Collaterals</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                            <div class="ve-hero__intro">
                                <h1 class="h1">Marketing &amp; Sales<br>Collaterals</h1>
                                <p>Marketing and sales collateral is the set of materials your team uses to explain, promote, and sell what you do: brochures, presentations, proposals, product sheets, case studies, and more. When these are designed well and all look part of the same brand, they make your business look credible and make your team's job easier. We design that full range of material, built on your brand and ready to use across print and screen.</p>
                            </div>
                            <ul class="ve-benefits">
                                <?php foreach ($cl_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated In-House Design Team</strong>
                                <span>Experienced designers creating consistent, high-quality marketing and sales collateral with reliable turnaround.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="lead-form" action="#" method="post">
                    <div class="lead-form__head">
                        <h2>Let’s Bring Your Presentation to Life.</h2> <!-- kept exactly as written in Figma; looks like a leftover from the PPT page -->
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

    <!-- ============ SELECTED WORK ============ -->
    <section class="cl-pf" data-examples data-autoplay="2600">
        <div class="cl-pf__head">
            <div class="cl-pf__top">
                <div class="cl-pf__title">
                    <h2 class="h2">Selected Marketing &amp; Sales Collateral Work</h2>
                    <p>Our collateral design work supports businesses, corporate teams and marketing agencies with brochures, company profiles, sales materials, product catalogues and digital marketing assets. Every piece is designed to communicate clearly, strengthen brand consistency and support marketing and sales activities across print and digital platforms.</p>
                </div>
                <div class="round-arrows">
                    <button type="button" class="round-arrow" aria-label="Previous" data-examples-prev><img src="<?= $vc ?>slider-arrow-left.svg" width="52" height="52" alt=""></button>
                    <button type="button" class="round-arrow" aria-label="Next" data-examples-next><img src="<?= $vc ?>slider-arrow-right.svg" width="52" height="52" alt=""></button>
                </div>
            </div>
            <div class="filter-tabs">
                <?php foreach ($cl_filters as $key => $label): ?>
                    <button type="button" class="filter-tab <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= $key ?>"><?= $label ?></button>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="mg-viewport">
            <div class="mg-strip" data-examples-track>
                <?php /* Figma shows a fixed 5-tile strip; duplicate it so the autoplay loop never runs out of tiles. */ ?>
                <?php foreach (array_merge($cl_strip, $cl_strip) as $t): ?>
                    <div class="cl-tile" data-cats="<?= $t['cats'] ?>"><img src="<?= $ci . $t['img'] ?>" alt="Marketing and sales collateral example"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ METRICS (dark) ============ -->
    <section class="container metrics metrics--dark">
        <?php foreach ($cl_metrics as $i => $m): ?>
            <?php if ($i): ?><span class="metrics__divider"></span><?php endif; ?>
            <div class="metric">
                <span class="metric__icon"><img src="<?= $mc . $m[0] ?>" width="24" height="24" alt=""></span>
                <div class="metric__body">
                    <div class="metric__value"><span data-count="<?= $m[1] ?>"><?= $m[1] ?></span><span>+</span></div>
                    <span class="metric__label"><?= $m[2] ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- ============ WHY INTELLIWORKZ ============ -->
    <section class="container ve-why">
        <div class="ve-split">
            <h2 class="h2">Why Intelliworkz</h2>
            <div class="ve-split__side">
                <p>We handle your collateral as one connected whole. A brochure, a deck, and a proposal all shape the same impression, so we design them to hold together. When they do, your business looks confident at every step.</p>
                <p>We bring that consistency by treating your brand as the starting point for everything we produce, then designing each piece. And because your teams move quickly, we build much of this material as templates they can own and reuse, so your brand stays intact long after we hand it over.</p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="cl-why">
            <?php foreach ($cl_why as $w): ?>
                <article class="cl-why__card" style="--c: <?= $w['c'] ?>">
                    <img class="cl-why__bg" src="<?= $ci . $w['bg'] ?>" alt="">
                    <div class="cl-why__tabbar">
                        <img class="cl-why__tab" src="<?= $cc . $w['tab'] ?>" alt="">
                        <span class="cl-why__no" style="color: <?= $w['num'] ?>"><?= $w['no'] ?></span>
                    </div>
                    <div class="cl-why__content">
                        <span class="cl-why__icon"><img src="<?= $cc . $w['icon'] ?>" alt=""></span>
                        <div class="cl-why__text">
                            <h3><?= $w['title'] ?></h3>
                            <p><?= $w['text'] ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ TOOLS STRIP ============ -->
    <section class="mg-tools">
        <ul class="mg-tools__row">
            <?php foreach ($cl_tools as $i => $t): ?>
                <?php if ($i): ?><li class="mg-tools__divider"></li><?php endif; ?>
                <li class="mg-tool">
                    <?php if ($t[1]): ?>
                        <span class="mg-tool__icon" style="background: <?= $t[1] ?>"><img src="<?= $mc . $t[0] ?>" alt=""></span>
                    <?php else: ?>
                        <img class="cl-tool__tile" src="<?= $ci . $t[0] ?>" width="108" height="72" alt="">
                    <?php endif; ?>
                    <div><strong><?= $t[2] ?></strong><span><?= $t[3] ?></span></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow cl-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center cl-services__head">
                <h2 class="h2 cl-services__title">Everything Your Brand Needs to Support Sales</h2>
                <div class="ve-split__side">
                    <p>We design the full range of material your marketing and sales teams use, all held to one standard and shaped around how your business sells. Take a single piece, or a complete set that shares one consistent look.</p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services" data-accordion>
                    <?php foreach ($cl_services as $i => $s): ?>
                        <?php if ($i): ?><hr class="acc__rule"><?php endif; ?>
                        <div class="acc-item <?= !empty($s['open']) ? 'is-open' : '' ?>">
                            <button type="button" class="acc-head" aria-expanded="<?= !empty($s['open']) ? 'true' : 'false' ?>">
                                <span class="acc-title"><?= $s['title'] ?></span>
                                <span class="acc-icons"><img class="acc-icon acc-icon--closed" src="<?= $vc ?>acc-icon-2.svg" width="42" height="42" alt=""><img class="acc-icon acc-icon--open" src="<?= $vc ?>acc-icon-1.svg" width="42" height="42" alt=""></span>
                            </button>
                            <div class="acc-panel"><div class="acc-panel__inner">
                                <ul class="dot-list dot-list--plain acc-points">
                                    <?php foreach ($s['points'] as $pt): ?><li><?= $pt ?></li><?php endforeach; ?>
                                </ul>
                            </div></div>
                        </div>
                    <?php endforeach; ?>
                    <hr class="acc__rule">
                </div>
                <div class="cl-services__img"><img src="<?= $ci ?>services.png" alt="Marketing and sales collateral overview"></div>
            </div>
        </div>

        <div class="cl-flow">
            <?php foreach ($cl_flow as $f): ?>
                <span class="cl-flow__seg" style="left: <?= $f['seg'] ?>px; background: <?= $f['c'] ?>"></span>
            <?php endforeach; ?>
            <?php foreach ($cl_flow as $n => $f): ?>
                <img class="cl-flow__img" src="<?= $ci ?>step-<?= $n + 1 ?>.png" alt="" style="left: <?= $f['img'] ?>px">
                <span class="cl-flow__dot" style="left: <?= $f['dot'] ?>px; --c: <?= $f['c'] ?>"></span>
                <div class="cl-flow__text" style="left: <?= $f['tx'] ?>px; width: <?= $f['tw'] ?>px">
                    <h3><?= $f['title'] ?></h3>
                    <p><?= $f['text'] ?></p>
                </div>
            <?php endforeach; ?>
            <?php foreach ($cl_flow_next as $x): ?>
                <img class="cl-flow__next" src="<?= $vc ?>next-step-1.svg" width="30" height="30" alt="" style="left: <?= $x ?>px">
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php
    $showcase_title = 'What Our PPT Design Services Cover'; // exactly as in Figma (looks like a leftover from the PPT page)
    require __DIR__ . '/includes/sections/showcase.php';
    ?>

    <!-- ============ WHAT WE OFFER + CTA + ENGAGEMENT ============ -->
    <div class="ve-offer-engagement">
        <section class="ve-offers">
            <div class="ve-offers__head">
                <h2 class="h2 h2--center">what we offer</h2>
                <p>We design brochures, company profiles, sales presentations, proposals, product catalogues and digital marketing materials. From a single brochure to a complete suite of branded collateral, every piece follows a consistent design process tailored to its format and purpose.</p>
            </div>
            <div class="container offer-viewport" data-offers>
                <div class="offer-cards" data-offers-track>
                    <?php foreach ($cl_offers as $k => $o): ?>
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
                <?php foreach ($cl_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
            </div>
        </section>

        <section class="cta-band">
            <img class="cta-band__grid" src="assets/icons/grid-lines.svg" alt="">
            <h2 class="cta-title">Book a Free Consultation</h2>
            <?php btn('Let’s Talk', 'btn--cta', 'arrow-cta.svg'); ?>
        </section>

        <?php require __DIR__ . '/includes/sections/engagement.php'; ?>
    </div>

    <!-- ============ FAQs ============ -->
    <section class="container ve-faq">
        <h2 class="h2 h2--center">FAQs</h2>
        <div class="acc acc--faq" data-accordion>
            <?php foreach ($cl_faqs as $i => $f): ?>
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

<?php
$show_prefooter = false;
$footer_class   = 'site-footer--service';
$phone_icon     = 'video/icon-phone-outline.svg';
require __DIR__ . '/includes/footer.php';
