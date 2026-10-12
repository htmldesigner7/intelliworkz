<?php
$page_title = 'SEO Services | Intelliworkz';
$body_class = 'page-seo';
$extra_css  = ['assets/css/video.css', 'assets/css/seo.css'];
require __DIR__ . '/includes/data-seo.php';
require __DIR__ . '/includes/data-video.php'; // for $ve_form_fields (shared lead-form field list)
require __DIR__ . '/includes/header.php';

$si = 'assets/images/seo/';    // page images
$sc = 'assets/icons/seo/';     // page icons
$vi = 'assets/images/video/';  // shared with video/magazine pages (offer image 4)
$vc = 'assets/icons/video/';   // shared icons
?>

<main class="page ve seo">

    <!-- ============ HERO ============ -->
    <section class="ve-hero">
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Digital Marketing &amp; Growth</a> / <span>SEO SERVICES</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                            <div class="ve-hero__intro">
                                <h1 class="h1">SEO SERVICES</h1>
                                <p>Our SEO services in India serve two very different clients. Some are brands looking for a partner to run their search programme and bring in qualified leads. Others are corporate marketing teams that need execution taken off their hands, either to scale up or to break into a new market. Website launches. Migrations. Ongoing content. Campaigns across several regions. We keep the work accurate and consistent, and we keep it moving. As an established SEO outsourcing company in India, based in Ahmedabad, we give you senior expertise without the cost of hiring a team.</p>
                            </div>
                            <ul class="ve-benefits">
                                <?php foreach ($seo_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated senior SEO team</strong>
                                <span>Ahmedabad-based expertise with accurate, consistent delivery.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="lead-form" action="#" method="post">
                    <div class="lead-form__head">
                        <h2>Let’s bring your 3D vision to life.</h2> <!-- kept exactly as written in Figma; looks like a leftover from the 3D page -->
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
    <section class="seo-pf">
        <div class="seo-pf__head">
            <div class="seo-pf__top">
                <div class="seo-pf__title">
                    <h2 class="h2">Selected SEO Work</h2>
                    <p>Our SEO work supports brands and corporate marketing teams with search programme management, qualified lead generation, website launches, migrations, ongoing content, and multi-region campaigns—delivered accurately and consistently by our senior Ahmedabad-based team.</p>
                </div>
                <div class="round-arrows">
                    <button type="button" class="round-arrow" aria-label="Previous" data-gallery-prev><img src="<?= $vc ?>slider-arrow-left.svg" width="52" height="52" alt=""></button>
                    <button type="button" class="round-arrow" aria-label="Next" data-gallery-next><img src="<?= $vc ?>slider-arrow-right.svg" width="52" height="52" alt=""></button>
                </div>
            </div>
            <div class="filter-tabs">
                <?php foreach ($seo_filters as $key => $label): ?>
                    <button type="button" class="filter-tab <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= $key ?>"><?= $label ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="seo-pf__scene">
            <img class="seo-pf__bg" src="<?= $si ?>portfolio-bg.png" alt="">
            <img class="seo-pf__main" src="<?= $si ?>portfolio-main.png" alt="SEO results dashboard: keyword ranking, monthly clicks, traffic growth">

            <div class="seo-gallery">
                <button type="button" class="round-arrow" aria-label="Previous" data-gallery-prev><img src="<?= $vc ?>slider-arrow-left.svg" width="52" height="52" alt=""></button>
                <div class="seo-gallery__viewport" data-gallery>
                    <div class="seo-gallery__track" data-gallery-track>
                        <?php foreach ($seo_gallery as $i => $g): ?>
                            <button type="button" class="seo-gallery__tile <?= $i === 5 ? 'is-featured' : '' ?>" data-cats="<?= $g['cats'] ?>">
                                <img src="<?= $si . $g['img'] ?>" alt="SEO work example">
                                <span class="seo-gallery__badge"><?= sprintf('%02d', $i + 1) ?></span>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button type="button" class="round-arrow" aria-label="Next" data-gallery-next><img src="<?= $vc ?>slider-arrow-right.svg" width="52" height="52" alt=""></button>
            </div>

            <div class="seo-pf__panel">
                <h3>Flexibel</h3> <!-- kept exactly as written in Figma; looks like a typo for "Flexible" -->
                <p class="seo-pf__panel-sub">Lorem ipsum dolor sit amet consectetur.</p>
                <p class="seo-pf__panel-text">Lorem ipsum dolor sit amet consectetur. Convallis sed dui netus suscipit quis. Porttitor ut egestas faucibus consectetur scelerisque magna. Orci adipiscing proin facilisis semper tortor viverra sed nulla duis. Ut eu.</p>
            </div>
        </div>
    </section>

    <!-- ============ METRICS (dark) ============ -->
    <section class="container metrics metrics--dark seo-metrics">
        <?php foreach ($seo_metrics as $i => $m): ?>
            <?php if ($i): ?><span class="metrics__divider"></span><?php endif; ?>
            <div class="metric">
                <span class="metric__icon"><img src="<?= $sc . $m[0] ?>" width="24" height="24" alt=""></span>
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
                <p>Picking an SEO agency in India comes down to one question: can they actually execute, or do they just advise? We do both. Our own developers ship the fixes we recommend.</p>
                <p>SEO counts when it shows up in the places that matter. Rankings, yes, but also traffic quality and pipeline. Every campaign has to be technically right and commercially aligned, and it has to move through audits, implementation, and reporting without getting stuck somewhere in the middle.</p>
                <p>Our team knows both sides of the search. Audit, strategy, on-page, technical work, content, link building:. We work alongside digita lmarketing teams to keep campaigns consistent and deliver efficiently.</p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="seo-why">
            <?php foreach ($seo_why as $w): ?>
                <article class="seo-why__card" style="--c: <?= $w['c'] ?>">
                    <div class="seo-why__head">
                        <span class="seo-why__icon"><img src="<?= $sc . $w['icon'] ?>" alt=""></span>
                        <span class="seo-why__no" style="color: rgba(255,255,255,<?= $w['noa'] ?>)"><?= $w['no'] ?></span>
                    </div>
                    <div class="seo-why__body">
                        <h3><?= $w['title'] ?></h3>
                        <p><?= $w['text'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ TOOLS STRIP ============ -->
    <section class="seo-tools">
        <img class="seo-tools__photo" src="<?= $si ?>tools-bg.png" alt="">
        <div class="seo-tools__grid">
            <?php foreach ($seo_tools as $col): ?>
                <div class="seo-tools__col">
                    <?php foreach ($col as $i => $t): ?>
                        <?php if ($i): ?><hr class="seo-tools__rule"><?php endif; ?>
                        <div class="seo-tool">
                            <img src="<?= (str_ends_with($t[0], '.svg') ? $sc : $si) . $t[0] ?>" width="72" height="72" alt="">
                            <div><strong><?= $t[1] ?></strong><span><?= $t[2] ?></span></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center seo-services__head">
                <h2 class="h2 seo-services__title">OUR SEO EXPERTISE AND SERVICES</h2>
                <div class="ve-split__side">
                    <p>Strategic Thinking. Technical Execution. Consistent Search Growth.</p>
                    <p>Our professional SEO services cover three disciplines: technical SEO, on-page and content, and off-page authority. Run together, they form a complete programme rather than a handful of disconnected tactics.</p>
                    <p>Rankings are the start, not the point. Search growth that lasts needs a solid technical base, content that genuinely earns its place, and authority built up slowly enough to hold. All of it is managed the same way in every market. That is the thinking behind our delivery, and it is why our programmes stay practical and scalable. It is also why marketing teams hand us the execution-heavy work they would rather not do themselves, everything from technical audits through to reporting.</p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services" data-accordion>
                    <?php foreach ($seo_services as $i => $s): ?>
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
                </div>
                <div class="seo-services__img"><img src="<?= $si ?>services.png" alt="SEO services overview"></div>
            </div>
        </div>

        <div class="seo-workflow">
            <?php foreach ($seo_workflow as $w): ?>
                <article class="seo-step" style="--c: <?= $w['color'] ?>">
                    <div class="seo-step__art">
                        <img src="<?= $si . $w['img'] ?>" alt="" style="left: <?= $w['art'][0] ?>px; top: <?= $w['art'][1] ?>px; width: <?= $w['art'][2] ?>px; height: <?= $w['art'][3] ?>px">
                    </div>
                    <div class="seo-step__no"><?= $w['no'] ?><span></span></div>
                    <div class="seo-step__copy">
                        <h3><?= $w['title'] ?></h3>
                        <p><?= $w['text'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php
    $showcase_title = 'What Our SEO Services Cover';
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
                    <?php foreach ($seo_offers as $k => $o): ?>
                        <article class="offer-card" data-i="<?= $k ?>" style="background: <?= $o['bg'] ?>">
                            <div class="offer-card__top">
                                <span class="offer-card__no" style="color: <?= $o['noc'] ?>"><?= $o['no'] ?></span>
                                <a href="#" aria-label="<?= $o['title'] ?>"><img src="<?= $vc . $o['arrow'] ?>" width="48" height="48" alt=""></a>
                            </div>
                            <div class="offer-card__body">
                                <h3><?= $o['title'] ?></h3>
                                <p><?= $o['text'] ?></p>
                            </div>
                            <img class="offer-card__img" src="<?= ($o['dir'] === 'seo' ? $si : $vi) . $o['img'] ?>" alt="" style="left: <?= $o['x'] ?>px; top: <?= $o['y'] ?>px; width: <?= $o['w'] ?>px; height: <?= $o['h'] ?>px">
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="dots dots--navy dots--center" data-offers-dots>
                <?php foreach ($seo_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
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
            <?php foreach ($seo_faqs as $i => $f): ?>
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
