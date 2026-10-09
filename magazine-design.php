<?php
$page_title = 'Magazine Design for Print & Digital Publishing | Intelliworkz';
$body_class = 'page-magazine';
$extra_css  = ['assets/css/video.css', 'assets/css/magazine.css'];
require __DIR__ . '/includes/data-magazine.php';
require __DIR__ . '/includes/header.php';

$mi = 'assets/images/magazine/';   // page images
$mc = 'assets/icons/magazine/';    // page icons
$vi = 'assets/images/video/';      // images shared with the video page (offer cards)
$vc = 'assets/icons/video/';       // icons shared with the video page
?>

<main class="page ve mg">

    <!-- ============ HERO ============ -->
    <section class="ve-hero ve-hero--plain">
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb breadcrumb--light"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Print &amp; Publication</a> / <span>Magazine design</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                            <div class="ve-hero__intro">
                                <h1 class="h1">Magazine Design for Print &amp; Digital Publishing</h1>
                                <p>Publishers and brands producing regular issues face the same challenge every cycle - getting quality design delivered on time, to a consistent standard, without rebuilding the brief from scratch each time. Our magazine design services cover the full production scope: cover, layout, print files, and digital editions, managed by a dedicated in-house team that already knows your publication.</p>
                            </div>
                            <ul class="ve-benefits">
                                <?php foreach ($mg_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated in-house design team</strong>
                                <span>Focused on quality, consistency &amp; on-time delivery.</span>
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
                        <?php foreach (array_chunk($ve_form_fields ?? [
                            ['Full Name', 'Enter your first name', 'text'], ['Company Name', 'Enter your company name', 'text'],
                            ['Email ID', 'Enter your email ID', 'email'], ['Contact Number', 'Enter your contact number', 'tel'],
                        ], 2) as $row): ?>
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

    <!-- ============ OUR EXAMPLES ============ -->
    <section class="mg-examples" data-examples data-autoplay="2600">
        <h2 class="h2 h2--center">Our Examples</h2>
        <div class="mg-viewport">
            <div class="mg-strip" data-examples-track>
                <?php
                /* Figma shows a fixed 8-tile strip; duplicate it so the autoplay loop never runs out of tiles to slide in. */
                foreach (array_merge($mg_examples, $mg_examples) as $e):
                ?>
                    <?php if ($e['type'] === 'img'): ?>
                        <div class="mg-tile"><img src="<?= $mi . $e['img'] ?>" alt="Magazine design example"></div>
                    <?php elseif ($e['type'] === 'frame'): ?>
                        <div class="mg-tile mg-tile--frame"><img src="<?= $mi . $e['img'] ?>" alt="Magazine design example"></div>
                    <?php else: ?>
                        <div class="mg-tile mg-tile--blank <?= $e['type'] === 'blank-border' ? 'has-border' : '' ?>"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ METRICS (dark) ============ -->
    <section class="container metrics metrics--dark">
        <?php foreach ($mg_metrics as $i => $m): ?>
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
                <p>Most design problems in publishing are not creative problems. They are production problems: inconsistent output, missed deadlines, each issue that needs re-briefing, and source files that nobody can edit. We work differently. The same team handles your publication across every issue. Your grid, your typography, your cover format, and your brand rules are documented and followed from the first issue onward. </p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="mg-why">
            <?php foreach ($mg_why as $w): ?>
                <article class="mg-why__card <?= $w['shadow'] ? 'has-shadow' : '' ?>" style="--c: <?= $w['c'] ?>">
                    <div class="mg-why__head">
                        <span class="mg-why__icon"><img src="<?= $mc . $w['icon'] ?>" alt=""></span>
                        <span class="mg-why__no" style="color: rgba(255,255,255,<?= $w['noa'] ?>)"><?= $w['no'] ?></span>
                    </div>
                    <div class="mg-why__body <?= $w['border'] ? 'has-border' : '' ?>">
                        <h3><?= $w['title'] ?></h3>
                        <p><?= $w['text'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ TOOLS STRIP ============ -->
    <section class="mg-tools">
        <ul class="mg-tools__row">
            <?php foreach ($mg_tools as $i => $t): ?>
                <?php if ($i): ?><li class="mg-tools__divider"></li><?php endif; ?>
                <li class="mg-tool">
                    <span class="mg-tool__icon" style="background: <?= $t[1] ?>"><img src="<?= $mc . $t[0] ?>" alt=""></span>
                    <div><strong><?= $t[2] ?></strong><span><?= $t[3] ?></span></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center">
                <h2 class="h2">What Our Magazine Design <br>Services Cover</h2>
                <div class="ve-split__side">
                    <p>We produce magazine covers, editorial layouts, print editions, and digital publications. A four-page newsletter and a two-hundred-page annual magazine follow the same production sequence with only the scale of each stage differing. </p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services acc--mag" data-accordion>
                    <?php foreach ($mg_services as $i => $s): ?>
                        <?php if ($i): ?><hr class="acc__rule"><?php endif; ?>
                        <div class="acc-item <?= !empty($s['open']) ? 'is-open' : '' ?>">
                            <button type="button" class="acc-head" aria-expanded="<?= !empty($s['open']) ? 'true' : 'false' ?>">
                                <span class="acc-title"><?= $s['title'] ?></span>
                                <span class="acc-icons"><img class="acc-icon acc-icon--closed" src="<?= $mc ?>acc-closed.svg" width="42" height="42" alt=""><img class="acc-icon acc-icon--open" src="<?= $mc ?>acc-open.svg" width="42" height="42" alt=""></span>
                            </button>
                            <div class="acc-panel"><div class="acc-panel__inner">
                                <ul class="dot-list dot-list--plain acc-points">
                                    <?php foreach ($s['points'] as $pt): ?><li><?= $pt ?></li><?php endforeach; ?>
                                </ul>
                            </div></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <img class="mg-services__img" src="<?= $mi ?>services-597d79.png" alt="Magazine design services overview">
            </div>
        </div>

        <div class="mg-workflow">
            <img class="mg-workflow__art" src="<?= $mc ?>workflow-infographic.svg" width="1140" height="547" alt="">
            <img class="mg-workflow__icon" src="<?= $mc ?>workflow-icon.svg" width="72" height="72" alt="">
            <div class="mg-workflow__title">
                <h2 class="h2">Workflow</h2>
                <p>How a Magazine Issue Gets Designed</p>
            </div>
            <?php foreach ($mg_flow as $f): ?>
                <div class="mg-flow" style="left: <?= $f['x'] ?>px; top: <?= $f['y'] ?>px; width: <?= $f['w'] ?>px; text-align: <?= $f['align'] ?>">
                    <h3 style="width: <?= $f['tw'] ?>px"><?= $f['title'] ?></h3>
                    <p><?= $f['text'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php require __DIR__ . '/includes/sections/showcase.php'; ?>

    <!-- ============ WHAT WE OFFER + CTA + ENGAGEMENT ============ -->
    <div class="ve-offer-engagement">
        <section class="ve-offers">
            <div class="ve-offers__head">
                <h2 class="h2 h2--center">what we offer</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Porttitor egestas leo viverra nec consequat nunc sit cum pretium. Enim iaculis malesuada pharetra risus mattis. Convallis faucibus malesuada vitae pellentesque viverra sagittis. Sed vestibulum volutpat lacus a malesuada lorem dolor sagittis. Suspendisse vitae turpis a magna. Varius a sed a hac hendrerit.</p>
            </div>
            <div class="container offer-viewport" data-offers>
                <div class="offer-cards" data-offers-track>
                    <?php foreach ($mg_offers as $k => $o): ?>
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
                <?php foreach ($mg_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
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
            <?php foreach ($mg_faqs as $i => $f): ?>
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
