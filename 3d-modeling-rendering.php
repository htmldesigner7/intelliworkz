<?php
$page_title = '3D Modeling and Rendering | Intelliworkz';
$body_class = 'page-3d';
$extra_css  = ['assets/css/video.css', 'assets/css/3d.css'];
require __DIR__ . '/includes/data-3d.php';
require __DIR__ . '/includes/data-video.php'; // for $ve_form_fields (shared lead-form field list)
require __DIR__ . '/includes/header.php';

$ti = 'assets/images/3d/';   // page images
$tc = 'assets/icons/3d/';    // page icons
$vi = 'assets/images/video/'; // shared with video/magazine pages (offer + engagement images)
$vc = 'assets/icons/video/';  // shared icons
$tm = 'assets/models/3d/';    // 3D model files (.glb)
?>
<!-- <model-viewer>: real drag-to-rotate 3D viewer (Google's web component, loads a .glb). -->
<script type="module" src="https://cdn.jsdelivr.net/npm/@google/model-viewer@3.5.0/dist/model-viewer.min.js"></script>

<main class="page ve td">

    <!-- ============ HERO ============ -->
    <section class="ve-hero">
        <img class="ve-hero__pattern" src="assets/icons/showcase-bg.svg" alt="">
        <img class="ve-hero__floor" src="<?= $ti ?>hero-floor.png" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container ve-hero__cols">
                <div class="ve-hero__copy">
                    <p class="breadcrumb"><a href="index.php">Home</a> / <a href="#">Services</a> / <a href="#">Animation</a> / <span>3D Modeling and Rendering</span></p>

                    <div class="ve-hero__stack">
                        <div class="ve-hero__group">
                            <div class="ve-hero__intro">
                                <h1 class="h1">3D Modeling and Rendering</h1>
                                <p>3D modeling and rendering turn an idea, sketch, or design file into a precise digital model and photorealistic visuals. This lets you explore form, materials, finishes, lighting, and variations before anything is manufactured or built. You can refine a product, visualize a space, present concepts for approval, and create marketing imagery without producing a physical prototype. For businesses that need to develop, sell, or approve something before it exists, this transforms an abstract idea into something clear and convincing.</p>
                            </div>
                            <ul class="ve-benefits">
                                <?php foreach ($td_benefits as $b): ?><li><?= $b ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="ve-pm">
                            <span class="ve-pm__icon"><img src="<?= $vc ?>pm-users.svg" width="24" height="24" alt=""></span>
                            <div>
                                <strong>Dedicated in-house 3D team</strong>
                                <span>Focused on accuracy, realism &amp; on-time delivery.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="lead-form" action="#" method="post">
                    <div class="lead-form__head">
                        <h2>Let's bring your 3D vision to life.</h2>
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

    <!-- ============ 360 VIEWER + SELECTED WORK ============ -->
    <!-- Figma keeps the heading, filter tabs, gallery strip, the "Flexibel" panel and the
         Exploded View button all inside ONE 1920x920 scene (node 6:179), overlaid on the same
         grid-floor photo, not stacked as separate blocks. Every left/top below is that node's
         exact coordinate. -->
    <section class="td-viewer">
        <img class="td-viewer__bg" src="<?= $ti ?>viewer-bg.png" alt="">
        <img class="td-viewer__texture" src="<?= $ti ?>technical-panel.png" alt="">

        <h2 class="h2 h2--center td-viewer__heading">Selected 3D Modeling and Rendering Work</h2>
        <div class="filter-tabs td-viewer__tabs">
            <?php foreach ($td_filters as $key => $label): ?>
                <button type="button" class="filter-tab <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= $key ?>"><?= $label ?></button>
            <?php endforeach; ?>
        </div>

        <div class="td-rings">
            <span class="td-rings__ellipse td-rings__ellipse--shadow"></span>
            <span class="td-rings__ellipse td-rings__ellipse--outer-dash"></span>
            <span class="td-rings__ellipse td-rings__ellipse--outer"></span>
            <span class="td-rings__ellipse td-rings__ellipse--mid"></span>
            <span class="td-rings__ellipse td-rings__ellipse--inner"></span>
            <span class="td-rings__dot"></span>
            <!-- Real, drag-to-rotate 3D model (glTF/.glb via <model-viewer>). Loads assembled by
                 default; the Exploded View button below swaps the actual .glb src to the "-open"
                 file, not a camera trick. -->
            <model-viewer
                class="td-rings__product"
                src="<?= $tm ?>expansion-joint.glb"
                poster="<?= $ti ?>product.png"
                alt="Belt type fabric expansion joint — 3D model"
                camera-controls
                disable-pan
                touch-action="pan-y"
                interaction-prompt="none"
                shadow-intensity="0"
                exposure="1.2"
                auto-rotate
                rotation-per-second="18deg"
                camera-orbit="25deg 75deg 85%"
                field-of-view="30deg"
                min-camera-orbit="auto 55deg auto"
                max-camera-orbit="auto 100deg auto"
                min-field-of-view="20deg"
                max-field-of-view="45deg"
                data-src-normal="<?= $tm ?>expansion-joint.glb"
                data-src-exploded="<?= $tm ?>expansion-joint-open.glb"
                reveal="auto"
            ></model-viewer>
            <img class="td-rings__cursor" src="<?= $tc ?>rotate-cursor.svg" alt="">
        </div>
        <div class="td-cue">
            <strong>360°</strong><span>Drag to Rotate &harr;</span>
        </div>

        <div class="td-viewer__panel">
            <h3>Flexibel</h3> <!-- kept exactly as written in Figma; looks like a typo for "Flexible" -->
            <p class="td-viewer__panel-sub">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="td-viewer__panel-text">Lorem ipsum dolor sit amet consectetur. Convallis sed dui netus suscipit quis. Porttitor ut egestas faucibus consectetur scelerisque magna. Orci adipiscing proin facilisis semper tortor viverra sed nulla duis. Ut eu.</p>
        </div>
        <button type="button" class="td-viewer__btn" data-explode-toggle aria-pressed="false">
            <span data-explode-label>Exploded View</span>
            <span class="td-viewer__btn-icon"><img src="<?= $tc ?>exploded-view.svg" width="20" height="20" alt=""></span>
        </button>

        <div class="td-gallery">
            <button type="button" class="round-arrow" aria-label="Previous" data-gallery-prev><img src="<?= $vc ?>slider-arrow-left.svg" width="52" height="52" alt=""></button>
            <div class="td-gallery__viewport" data-gallery>
                <div class="td-gallery__track" data-gallery-track>
                    <?php foreach ($td_gallery as $i => $g): ?>
                        <button type="button" class="td-gallery__tile <?= $i === 5 ? 'is-featured' : '' ?>" data-cats="<?= $g['cats'] ?>">
                            <img src="<?= $ti . $g['img'] ?>" alt="3D render example">
                            <span class="td-gallery__badge"><?= sprintf('%02d', $i + 1) ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <button type="button" class="round-arrow" aria-label="Next" data-gallery-next><img src="<?= $vc ?>slider-arrow-right.svg" width="52" height="52" alt=""></button>
        </div>
    </section>

    <!-- ============ STATS ============ -->
    <section class="container ve-stats td-stats">
        <img class="td-stats__bg" src="<?= $ti ?>why-corner.png" alt="">
        <div class="ve-stats__content ve-stats__content--center">
            <?php foreach ([$td_stats_top, $td_stats_bottom] as $n => $row): ?>
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
                <p>The value of a render is simple: people believe what they can see. A photorealistic image of a product lets a customer picture owning it, lets a stakeholder sign off on it with confidence, and lets your marketing and sales teams start work long before the product reaches a shelf.</p>
                <p>Our team is involved in the entire workflow: setting up the model, all the way through to lighting the final image and finishing rendering; we provide a final result suited to its end purpose. For example, a pure studio shot for an online product directory would require very different lighting, composition, and finishing to a studio or scene designed for an advertising creative or a technical render suitable for a stakeholder.</p>
                <p>Because everything is produced by our own team, your designs never leave our hands, which matters when you are rendering a product that has not yet launched. You get consistent quality across every image, and a team that already understands your product by the second project.</p>
                <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
            </div>
        </div>
        <div class="td-benefits">
            <?php foreach ($td_benefit_cards as $c): ?>
                <article class="td-benefit <?= $c['raised'] ? 'is-raised' : '' ?>" style="--c: <?= $c['color'] ?? $c['ring'] ?>">
                    <span class="td-benefit__deco"></span>
                    <span class="td-benefit__no" style="color: <?= $c['noc'] ?>66"><?= $c['no'] ?></span>
                    <span class="td-benefit__icon" style="background: <?= $c['ring'] ?>"><img src="<?= $tc . $c['icon'] ?>" alt=""></span>
                    <div class="td-benefit__copy">
                        <h3><?= $c['title'] ?></h3>
                        <p><?= $c['text'] ?></p>
                    </div>
                    <span class="td-benefit__rule" style="background: <?= $c['ring'] ?>"></span>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ TOOLS STRIP ============ -->
    <section class="ve-tools td-tools">
        <img class="ve-tools__bg" src="<?= $ti ?>tools-bg-687972.png" alt="">
        <ul class="ve-tools__row">
            <?php foreach ($td_tools as $i => $t): ?>
                <?php if ($i): ?><li class="ve-tools__divider"></li><?php endif; ?>
                <li class="ve-tool <?= $t[0] === 'tool-3dsmax.png' ? '' : 've-tool--mark' ?>">
                    <img src="<?= (str_ends_with($t[0], '.svg') ? $tc : $ti) . $t[0] ?>" alt="">
                    <div><strong><?= $t[1] ?></strong><span><?= $t[2] ?></span></div>
                </li>
            <?php endforeach; ?>
            <li class="ve-tools__divider"></li>
            <li class="ve-tool td-tool-formats">
                <img class="td-tool-formats__img" src="<?= $ti ?>file-formats.png" alt="STP, FBX, STL and OBJ file icons">
                <div><strong><?= $td_tool_formats_label[0] ?></strong><span><?= $td_tool_formats_label[1] ?></span></div>
            </li>
        </ul>
    </section>

    <!-- ============ SERVICES + WORKFLOW ============ -->
    <section class="ve-services-flow">
        <div class="container ve-services">
            <div class="ve-split ve-split--center">
                <h2 class="h2">The Renders We Produce</h2>
                <div class="ve-split__side">
                    <p>Our 3d product rendering services cover the visuals a business needs to sell, present and plan, from a single hero product shot to a full set of images for a catalogue, an online store or a campaign. Some clients send a finished 3D model ready to render; others send a CAD file or a set of drawings for us to model first. Either way, the finished images are built to match how and where you will use them.</p>
                    <div><a href="#" class="btn btn--enquire">Enquire Now</a></div>
                </div>
            </div>

            <div class="ve-services__content">
                <div class="acc acc--services" data-accordion>
                    <?php foreach ($td_services as $i => $s): ?>
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
                <img class="td-services__img" src="<?= $ti ?>services.png" alt="3D rendering services overview">
            </div>
        </div>

        <div class="td-workflow">
            <?php foreach ($td_workflow as $w): ?>
                <article class="td-step" style="--c: <?= $w['color'] ?>">
                    <img class="td-step__img" src="<?= $ti . $w['img'] ?>" alt="">
                    <div class="td-step__no"><?= $w['no'] ?><span></span></div>
                    <h3><?= $w['title'] ?></h3>
                    <p><?= $w['text'] ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ DARK SHOWCASE (shared) ============ -->
    <?php
    $showcase_title = 'What Our 3D Modeling and Rendering Services Cover';
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
                    <?php foreach ($td_offers as $k => $o): ?>
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
                <?php foreach ($td_offers as $o): ?><button type="button" class="dots__dot" aria-label="Show <?= $o['title'] ?>"></button><?php endforeach; ?>
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
            <?php foreach ($td_faqs as $i => $f): ?>
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
