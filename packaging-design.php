<?php
$page_title = 'Packaging Design Services | Intelliworkz';
$body_class = 'page-packaging';
$extra_css  = ['assets/css/video.css', 'assets/css/magazine.css', 'assets/css/seo.css', 'assets/css/collaterals.css', 'assets/css/packaging.css'];
require __DIR__ . '/includes/data-packaging.php';
require __DIR__ . '/includes/data-video.php'; // for $ve_form_fields (shared lead-form field list)
require __DIR__ . '/includes/header.php';

$ki = 'assets/images/packaging/';   // page images
$kc = 'assets/icons/packaging/';    // page icons
$mc = 'assets/icons/magazine/';     // shared tool glyphs
$vi = 'assets/images/video/';       // shared offer art
$vc = 'assets/icons/video/';        // shared icons
?>

<main class="page ve pk">

    <!-- ============ HERO ============ -->
    <section class="ve-hero ve-hero--plain">
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">
        <img class="pk-hero__art" src="<?= $ki ?>hero.png" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb breadcrumb--light"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Branding &amp; Creative</a> / <span>Packaging design</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                            <div class="ve-hero__intro">
                                <h1 class="h1">PACKAGING DESIGN SERVICES</h1>
                                <p>Successful packaging goes beyond creative design. It requires artwork that is carefully adapted, technically accurate, and prepared for production, ensuring a smooth transition from concept to press. As a trusted packaging design company, we support that process from start to finish. Our packaging design services, Packaging Rollout, and Pre-Press services help brands and packaging printers manage packaging artwork across the entire production cycle. Whether it’s a new product launch or package redesign, multi-SKU graphics conversion or preflighting for printing, we will help ensure your projects stay true and on time. Using our creativity and understanding of production, we can help you streamline your process and save revisions along the way.</p>
                            </div>
                            <ul class="ve-benefits">
                                <?php foreach ($pk_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated In-House Packaging Team</strong>
                                <span>Creative and technical expertise focused on accurate artwork, consistent branding and timely delivery.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="lead-form" action="#" method="post">
                    <div class="lead-form__head">
                        <h2>Let’s Bring Your Packaging Vision to Life.</h2>
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
    <section class="container pk-pf">
        <div class="pk-pf__head">
            <div class="pk-pf__title">
                <h2 class="h2">Selected Packaging Design Work</h2>
                <p>Explore packaging design, artwork adaptation and production-ready packaging solutions created for brands and packaging printers. Our work covers custom boxes, product labels, packaging concepts, multi-SKU rollouts and artwork localisation, combining creative thinking with technical accuracy to maintain brand consistency across packaging formats.</p>
            </div>
            <div class="filter-tabs" data-pk-tabs>
                <?php foreach ($pk_filters as $key => $label): ?>
                    <button type="button" class="filter-tab <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= $key ?>"><?= $label ?></button>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="pk-grid" data-pk-grid>
            <?php foreach ($pk_tiles as $t): ?>
                <a href="#" class="pk-tile" data-cats="<?= $t['cats'] ?>" style="left: <?= $t['x'] ?>px; top: <?= $t['y'] ?>px; width: <?= $t['w'] ?>px; height: <?= $t['h'] ?>px">
                    <img src="<?= $ki . $t['img'] ?>" alt="Packaging design example" style="height: <?= $t['ih'] ?>px">
                    <span class="pk-tile__meta">
                        <span class="pk-tile__row"><strong>Lorem ipsum</strong></span>
                        <span class="pk-tile__sub">Lorem ipsum dolor sit</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ STATS ============ -->
    <section class="container ve-stats pk-stats">
        <img class="pk-stats__lines" src="<?= $kc ?>stats-lines.svg" alt="">
        <img class="pk-stats__bg" src="<?= $ki ?>stats.png" alt="">
        <div class="ve-stats__content">
            <?php foreach ($pk_stats as $n => $row): ?>
                <?php if ($n): ?><hr class="ve-stats__rule"><?php endif; ?>
                <div class="ve-stats__row">
                    <?php foreach ($row as $i => $s): ?>
                        <?php if ($i): ?><span class="ve-stats__divider"></span><?php endif; ?>
                        <div class="ve-stat">
                            <div class="ve-stat__value"><span data-count="<?= $s[0] ?>"><?= $s[0] ?></span><span><?= $s[1] ?></span></div>
                            <span class="ve-stat__label"><?= $s[2] ?></span>
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
                <p>Good packaging design will never be considered good unless it works well during production. Every piece of artwork must be technically correct and prepared for the approval process, pre-press, and printing without delay.</p>
                <p>As one of the established packaging design agencies, we are aware of both the creative and technical aspects of packaging. Artworks will be designed and edited, packaging will be launched, and print-ready files will be created.</p>
                <p>We work with our clients and the Printers to ensure consistent and timely delivery for their SKU rollout.</p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="pk-why">
            <?php foreach ($pk_why as $w): ?>
                <article class="pk-why__card" style="--c: <?= $w['c'] ?>">
                    <img class="pk-why__bg" src="<?= $ki . $w['bg'] ?>" alt="">
                    <span class="pk-why__no"><?= $w['no'] ?></span>
                    <div class="pk-why__content">
                        <span class="pk-why__icon"><img src="<?= $kc . $w['icon'] ?>" alt=""></span>
                        <div class="pk-why__text">
                            <h3><?= $w['title'] ?></h3>
                            <p><?= $w['text'] ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ TOOLS STRIP ============ -->
    <section class="pk-tools">
        <img class="pk-tools__photo" src="<?= $ki ?>tools-bg.png" alt="">
        <ul class="pk-tools__row">
            <?php foreach ($pk_tools as $i => $t): ?>
                <?php if ($i): ?><li class="pk-tools__divider"></li><?php endif; ?>
                <li class="seo-tool">
                    <span class="mg-tool__icon" style="background: <?= $t[1] ?>"><img src="<?= $mc . $t[0] ?>" alt=""></span>
                    <div><strong><?= $t[2] ?></strong><span><?= $t[3] ?></span></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow pk-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center seo-services__head">
                <h2 class="h2 pk-services__title">Packaging Design Services We Offer</h2>
                <div class="ve-split__side">
                    <p>Good packaging is more than an attractive design. It should represent your brand, work well across different packaging formats, and be easy to manage throughout the production process.</p>
                    <p>We combine creative thinking with a structured production process to help brands build packaging that's practical, consistent, and ready for production. As a product packaging design company, we help brands develop packaging that balances creativity, technical accuracy, and production readiness for a smooth transition to print.</p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services" data-accordion>
                    <?php foreach ($pk_services as $i => $s): ?>
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
                <div class="cl-services__img pk-services__img"><img src="<?= $ki ?>services.png" alt="Packaging design services overview"></div>
            </div>
        </div>

        <div class="pk-flow-wrap">
            <div class="pk-flow-head">
                <h2 class="h2 h2--center">A Streamlined Workflow from Design to Press</h2>
                <p>Every packaging project follows a structured process designed to support accuracy, consistency, and production readiness.</p>
            </div>
            <div class="pk-flow">
                <?php $segX = [-1, 359, 720, 1081, 1441]; $segW = [360, 361, 361, 360, 361]; ?>
                <?php foreach ($pk_flow as $i => $f): ?>
                    <span class="pk-flow__seg" style="left: <?= $segX[$i] ?>px; width: <?= $segW[$i] ?>px; background: <?= $f['c'] ?>"></span>
                <?php endforeach; ?>
                <?php foreach ($pk_flow as $i => $f): ?>
                    <article class="pk-step" style="left: <?= [39, 400, 762, 1123, 1484][$i] ?>px; --c: <?= $f['c'] ?>">
                        <div class="pk-step__art">
                            <span class="pk-step__no" style="left: <?= $f['nx'] ?>px"><?= $f['no'] ?></span>
                            <img src="<?= $ki . $f['img'] ?>" alt="" style="width: <?= $f['iw'] ?>px; height: <?= $f['ih'] ?>px">
                        </div>
                        <div class="pk-step__copy">
                            <span class="pk-step__dot"></span>
                            <h3><?= $f['title'] ?><span></span></h3>
                            <p><?= $f['text'] ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
                <?php foreach ([348, 708, 1068, 1438] as $x): ?>
                    <img class="pk-flow__next" src="<?= $vc ?>next-step-1.svg" width="30" height="30" alt="" style="left: <?= $x ?>px">
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php
    $showcase_title = 'What Our Packaging Design Services Cover';
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
                    <?php foreach ($pk_offers as $k => $o): ?>
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
                <?php foreach ($pk_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
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
            <?php foreach ($pk_faqs as $i => $f): ?>
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
