<?php
$page_title = 'Pre-Press Service | Intelliworkz';
$body_class = 'page-prepress';
$extra_css  = ['assets/css/video.css', 'assets/css/magazine.css', 'assets/css/seo.css', 'assets/css/collaterals.css', 'assets/css/prepress.css'];
require __DIR__ . '/includes/data-prepress.php';
require __DIR__ . '/includes/data-video.php'; // for $ve_form_fields (shared lead-form field list)
require __DIR__ . '/includes/header.php';

$pi = 'assets/images/prepress/';      // page images
$pc = 'assets/icons/prepress/';       // page icons
$ci = 'assets/images/collaterals/';   // image-strip tiles (same two images as the Collaterals page)
$si = 'assets/images/seo/';           // tools-strip photo (same Figma image as the SEO page)
$mc = 'assets/icons/magazine/';       // shared tool glyphs
$vi = 'assets/images/video/';         // shared offer art
$vc = 'assets/icons/video/';          // shared icons
?>

<main class="page ve pp">

    <!-- ============ HERO ============ -->
    <section class="ve-hero ve-hero--plain">
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb breadcrumb--light"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Branding &amp; Creative</a> / <span>Pre-Press Service</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                            <div class="ve-hero__intro">
                                <h1 class="h1">Print Ready File</h1>
                                <p>The highest print quality can only be achieved even before the printing press is started to print. Even a brilliant, innovative design can end up being really expensive errors if your file is not properly ready. Color shifts, pixilated files, missing fonts, or incorrect layout- it all makes sense for a delay in production and also leads to an impact on the final results.</p>
                                <p>We’ve developed pre-press services to provide each artwork with an official tech review before it’s ready for printing. Whether you need packaging, commercial print goods, labels, marketing materials, or wide-format display work, we can enable your company to eradicate production defects and secure greater quality control on all jobs.</p>
                            </div>
                            <ul class="ve-benefits">
                                <?php foreach ($pp_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated In-House Pre-Press Team</strong>
                                <span>Experienced pre-press specialists delivering technically accurate, colour-consistent, print-ready artwork with reliable turnaround.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="lead-form" action="#" method="post">
                    <div class="lead-form__head">
                        <h2>Let’s Make Your Artwork Print-Ready.</h2>
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
                    <h2 class="h2">Selected Pre-Press Work</h2>
                    <p>Our pre-press work supports brands, packaging printers and businesses with artwork verification, colour management, print proofing and production-ready file preparation. Every file undergoes technical checks to minimise printing errors, maintain colour consistency and ensure accurate results across different printing formats.</p>
                </div>
                <div class="round-arrows">
                    <button type="button" class="round-arrow" aria-label="Previous" data-examples-prev><img src="<?= $vc ?>slider-arrow-left.svg" width="52" height="52" alt=""></button>
                    <button type="button" class="round-arrow" aria-label="Next" data-examples-next><img src="<?= $vc ?>slider-arrow-right.svg" width="52" height="52" alt=""></button>
                </div>
            </div>
            <div class="filter-tabs">
                <?php foreach ($pp_filters as $key => $label): ?>
                    <button type="button" class="filter-tab <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= $key ?>"><?= $label ?></button>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="mg-viewport">
            <div class="mg-strip" data-examples-track>
                <?php foreach (array_merge($pp_strip, $pp_strip) as $t): ?>
                    <div class="cl-tile" data-cats="<?= $t['cats'] ?>"><img src="<?= $ci . $t['img'] ?>" alt="Pre-press work example"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ STATS ============ -->
    <section class="container ve-stats pp-stats">
        <img class="pp-stats__bg" src="<?= $pi ?>stats.png" alt="">
        <div class="ve-stats__content">
            <?php foreach ([$pp_stats_top, $pp_stats_bottom] as $n => $row): ?>
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

    <!-- ============ WHAT YOU GET ============ -->
    <section class="container ve-why">
        <div class="ve-split">
            <h2 class="h2 pp-why__title">What You Get From Our Pre-Press Services Beyond File Preparation</h2>
            <div class="ve-split__side">
                <p>Pre-production &amp; Color Management is Not Just a Case of Exporting the PDF. Artwork preparation for print covers a wide range of activities that ensure your finished printed product matches your design aspirations accurately. Quality control ensures every artwork is screened for color profile, the images have been supplied with the required resolution, any necessary bleed has been set correctly, fonts used are all embedded or outlined, copy and positioning are perfectly consistent, and it is 100% production ready to ensure there are no reprinting, lost production time, or poor print results.</p>
                <p>The whole process must culminate in file integrity, and at Intelliworkz, we adhere to a very rigorous pre-press &amp; color management procedure before every file goes into production; we're in communication with the designer, printer, and production team daily.</p>
                <p>Having trusted pre-press companies that can support all our graphic needs is a must, a team of specialists that take files from brief through to litho and digital production consistently throughout all.</p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="pp-why">
            <?php foreach ($pp_why as $w): ?>
                <article class="pp-why__card" style="--c: <?= $w['c'] ?>; --t: <?= $w['tint'] ?>">
                    <span class="pp-why__bar"></span>
                    <div class="pp-why__head">
                        <span class="pp-why__icon"><img src="<?= $pc . $w['icon'] ?>" alt=""></span>
                        <span class="pp-why__no"><?= $w['no'] ?></span>
                    </div>
                    <div class="pp-why__text">
                        <h3><?= $w['title'] ?></h3>
                        <p><?= $w['text'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ TOOLS STRIP ============ -->
    <section class="seo-tools pp-tools">
        <img class="seo-tools__photo" src="<?= $si ?>tools-bg.png" alt="">
        <div class="seo-tools__grid">
            <?php foreach ($pp_tools as $col): ?>
                <div class="seo-tools__col">
                    <?php foreach ($col as $i => $t): ?>
                        <?php if ($i): ?><hr class="seo-tools__rule"><?php endif; ?>
                        <div class="seo-tool">
                            <?php if ($t[0] === 'mag'): ?>
                                <span class="mg-tool__icon" style="background: <?= $t[2] ?>"><img src="<?= $mc . $t[1] ?>" alt=""></span>
                            <?php else: ?>
                                <img src="<?= ($t[0] === 'svg' ? $pc : $pi) . $t[1] ?>" width="72" height="72" alt="">
                            <?php endif; ?>
                            <div><strong><?= $t[3] ?></strong><span><?= $t[4] ?></span></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow pp-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center pp-services__head">
                <h2 class="h2 pp-services__title">Comprehensive Pre-Press Services for Commercial and Packaging Printing</h2>
                <div class="ve-split__side">
                    <p>Get every print project prepared for production before we start, no matter if your project is in packaging printing, in printing labels, in marketing collateral printing, in producing brochures printing, or in wide-format print graphics. Our digital pre-press services ensure every potential print production problem is prevented or caught before the first page is sent for print, every.single.print job, to the very last page.</p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services" data-accordion>
                    <?php foreach ($pp_services as $i => $s): ?>
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
                <div class="cl-services__img"><img src="<?= $pi ?>services.png" alt="Pre-press services overview"></div>
            </div>
        </div>

        <div class="pp-flow">
            <?php foreach ($pp_flow as $n => $f): ?>
                <article class="pp-step" style="background: <?= $f['bg'] ?>; --c: <?= $f['c'] ?>">
                    <span class="pp-step__no"><?= $f['no'] ?></span>
                    <h3><?= $f['title'] ?></h3>
                    <p><?= $f['text'] ?></p>
                    <img src="<?= $pi ?>step-<?= $n + 1 ?>.png" alt="" style="top: <?= $f['iy'] ?>px">
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php
    $showcase_title = 'What Our Pre-Press Services Cover';
    require __DIR__ . '/includes/sections/showcase.php';
    ?>

    <!-- ============ WHAT WE OFFER + CTA + ENGAGEMENT ============ -->
    <div class="ve-offer-engagement">
        <section class="ve-offers">
            <div class="ve-offers__head">
                <h2 class="h2 h2--center">What we offer</h2>
                <p>We design brochures, company profiles, sales presentations, proposals, product catalogues and digital marketing materials. From a single brochure to a complete suite of branded collateral, every piece follows a consistent design process tailored to its format and purpose.</p>
            </div>
            <div class="container offer-viewport" data-offers>
                <div class="offer-cards" data-offers-track>
                    <?php foreach ($pp_offers as $k => $o): ?>
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
                <?php foreach ($pp_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
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
            <?php foreach ($pp_faqs as $i => $f): ?>
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
