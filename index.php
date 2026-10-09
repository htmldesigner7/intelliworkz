<?php
$page_title = 'Intelliworkz | Technology, Creative & Digital Capabilities';
require __DIR__ . '/includes/header.php';
?>

<main class="page">

    <!-- ============ HERO ============ -->
    <section class="hero">
        <img class="hero__bg" src="assets/images/hero-bg.png" alt="">

        <?php require __DIR__ . "/includes/site-header.php"; ?>

        <div class="container hero__content">
            <h1 class="h1">Technology, Creative &amp; Digital Capabilities Built Around Your Business</h1>
            <p class="hero__text">In the ever-changing global landscape, companies today need more than individual service providers. They need partners with the right resources, domain expertise, and the latest technology who can deliver consistently. At Intelliworkz, we provide offshore solutions to deliver creative and digital marketing services that operate as an extended team under one roof.</p>
            <div class="hero__actions">
                <?php btn('Start a Project'); ?>
                <?php btn('Explore Our Services', 'btn--stroke'); ?>
            </div>
        </div>

        <p class="hero__caption">A seamless flow: your creative ideas transformed into digital growth</p>
    </section>

    <!-- ============ METRICS ============ -->
    <section class="container metrics">
        <?php foreach ($metrics as $i => $m): ?>
            <?php if ($i): ?><span class="metrics__divider"></span><?php endif; ?>
            <div class="metric">
                <span class="metric__icon"><img src="assets/icons/<?= $m['icon'] ?>" width="24" height="24" alt=""></span>
                <div class="metric__body">
                    <div class="metric__value"><span data-count="<?= $m['value'] ?>"><?= $m['value'] ?></span><span>+</span></div>
                    <span class="metric__label"><?= $m['label'] ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- ============ DOMAIN EXPERTISE ============ -->
    <section class="expertise">
        <div class="expertise__media"></div>
        <div class="expertise__content">
            <h2 class="h2">Domain Expertise Across Creative, Digital &amp; Technology</h2>
            <div class="expertise__text">
                <p>Your business may need a new brand, a website, a mobile application, ongoing digital marketing, or a team to manage technology requirements. These needs may sit in different domains, but they often need to work towards the same business objective.</p>
                <p>Intelliworkz brings together brand development, creative design, digital marketing, technology, and outsourcing capabilities, backed by teams with expertise across the domains they work in. This allows us to understand not only what needs to be delivered but also the business context, audience, workflows, and objectives behind the requirement.</p>
                <p>Our domain expertise spans creative and communication, digital marketing, web and mobile applications, enterprise systems, publishing, and technology services. With these capabilities under one roof, you can work with one partner across different requirements instead of coordinating multiple specialists for connected work.</p>
                <p>Whether you need a single specialist service or an ongoing technology, creative or digital partner, our 100% in-house teams bring the relevant expertise together around your requirement.</p>
            </div>
            <div><?php btn('About us'); ?></div>
        </div>
    </section>

    <!-- ============ SERVICES ============ -->
    <section class="container services">
        <div class="split-head">
            <h2 class="h2">Everything Your Business Needs to Build, Grow &amp; Transform</h2>
            <div class="split-head__side">
                <p class="lead">We work across creative, digital, technology, and publishing requirements, bringing specialized capabilities together when a project calls for more than one discipline.</p>
                <div><?php btn('View All Services'); ?></div>
            </div>
        </div>

        <div class="domain-grid">
            <?php foreach ($domains as $d): ?>
                <article class="domain-card" style="--c: <?= $d['color'] ?>">
                    <h3 class="domain-card__title"><?= $d['title'] ?></h3>
                    <div class="domain-card__body">
                        <div class="domain-card__main">
                            <p class="lead lead--left"><?= $d['intro'] ?></p>
                            <ul class="domain-card__list">
                                <?php foreach ($d['items'] as $item): ?>
                                    <li><a href="#"><?= $item ?></a><img src="assets/icons/arrow-red.svg" width="10" height="10" alt=""></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <a href="#" class="pill"><?= $d['cta'] ?><img src="assets/icons/arrow-circle.svg" width="14" height="14" alt=""></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ CTA BAND ============ -->
    <section class="cta-band">
        <img class="cta-band__grid" src="assets/icons/grid-lines.svg" alt="">
        <h2 class="cta-title">Book a Free Consultation</h2>
        <?php btn('Let’s Talk', 'btn--cta', 'arrow-cta.svg'); ?>
    </section>

    <!-- ============ OUTSOURCING ============ -->
    <section class="container outsourcing">
        <div class="split-head split-head--center">
            <h2 class="h2">Extend Your Team With Creative &amp; Engineering Expertise</h2>
            <div class="split-head__side">
                <p class="lead">Building every capability internally isn't always practical. You may need additional creative capacity for ongoing production, engineering expertise for a technology project, or a dedicated team to manage development and digital requirements without expanding your internal headcount.</p>
                <p class="lead">Intelliworkz provides IT outsourcing services, creative service outsourcing, and engineering service outsourcing through 100% in-house teams. You can outsource a specific function, a complete project or build a dedicated team around your ongoing requirements.</p>
            </div>
        </div>

        <div class="steps">
            <div class="steps__line"></div>
            <img class="steps__red-line" src="assets/icons/steps-red-line.svg" width="1526" height="6" alt="">
            <h3 class="steps__badge">OUR 4-STEP ENGAGEMENT PROCESS</h3>
            <div class="steps__row">
                <?php foreach ($outsourcing_steps as $s): ?>
                    <div class="step">
                        <img src="assets/icons/<?= $s['img'] ?>" width="160" height="161" alt="">
                        <div class="step__text">
                            <h4><?= $s['title'] ?></h4>
                            <p><?= $s['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="outsource-grid">
            <?php foreach ($outsourcing_cards as $c): ?>
                <article class="outsource-card <?= $c['class'] ?>">
                    <div class="outsource-card__head">
                        <span class="outsource-card__no"><?= $c['no'] ?></span>
                        <h3 class="h-card"><?= $c['title'] ?></h3>
                    </div>
                    <?php if (!empty($c['lead'])): ?>
                        <p class="small"><?= $c['lead'] ?></p>
                        <ul class="dot-list">
                            <?php foreach ($c['items'] as $item): ?><li><?= $item ?></li><?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p class="small outsource-card__text"><?= $c['text'] ?></p>
                    <?php endif; ?>
                    <img class="outsource-card__img" src="assets/images/<?= $c['img'] ?>" alt="">
                </article>
            <?php endforeach; ?>
        </div>

        <div class="whitelabel">
            <div class="whitelabel__left">
                <h3 class="whitelabel__title">WHITE-LABEL &amp; OFFSHORE SUPPORT</h3>
                <div class="whitelabel__sub">
                    <h4 class="h-card">Extend Delivery Without Extending Your Brand</h4>
                    <div class="whitelabel__cols">
                        <ul class="dot-list dot-list--plain">
                            <li>Confidential collaboration</li>
                            <li>Brand-safe delivery standards</li>
                        </ul>
                        <ul class="dot-list dot-list--plain">
                            <li>Scalable offshore resources</li>
                            <li>Consistent project execution</li>
                        </ul>
                    </div>
                </div>
            </div>
            <span class="v-line"></span>
            <div class="whitelabel__right">
                <p class="small">Build a team around your specific requirements with dedicated resources, project management, and the flexibility to scale as your workload changes. The team can work alongside your existing employees, follow your processes, and collaborate within your preferred working structure.</p>
                <div><?php btn('Explore Outsourcing Solutions', 'btn--cta'); ?></div>
            </div>
        </div>
    </section>

    <!-- ============ INDUSTRIES ============ -->
    <section class="container industries">
        <?php section_head('Solutions Shaped Around Your Industry', 'The right digital, creative, or technology solution depends on the business behind it. A manufacturing company has different operational requirements from a real estate business, while a technology company may need a completely different customer experience.<br><br>Our teams bring domain expertise into the projects they work on, adapting the approach to the audience, processes, technology environment, and objectives involved.', 'section-head--wide'); ?>

        <div class="slider" data-slider>
            <div class="slider__track" data-slider-track>
                <?php foreach ($industries as $ind): ?>
                    <article class="industry <?= empty($ind['img']) ? 'industry--plain' : '' ?> <?= (strlen($ind['title']) > 20) ? 'industry--two-line' : '' ?>" tabindex="0">
                        <?php if (!empty($ind['img'])): ?><img src="assets/images/<?= $ind['img'] ?>" alt="<?= $ind['title'] ?>"><?php endif; ?>
                        <h3 class="industry__title <?= !empty($ind['font']) ? 'is-alt' : '' ?>"><?= $ind['title'] ?></h3>
                        <p class="industry__text"><?= $ind['text'] ?? $industry_text ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="dots" data-slider-dots>
                <?php for ($i = 0; $i < 4; $i++): ?><button type="button" class="dots__dot" aria-label="Go to slide <?= $i + 1 ?>"></button><?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- ============ WHY INTELLIWORKZ ============ -->
    <section class="why">
        <div class="why__inner">
            <h2 class="h2 h2--center h2--white">Why Businesses Choose Intelliworkz</h2>
            <div class="why__grid">
                <?php foreach ($reasons as $i => $r): ?>
                    <article class="reason">
                        <div class="reason__top"><span class="reason__no"><?= sprintf('%02d', $i + 1) ?></span><span class="reason__line"></span></div>
                        <div class="reason__body">
                            <h3 class="h-card h-card--white"><?= $r[0] ?></h3>
                            <p><?= $r[1] ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ PRODUCTS ============ -->
    <section class="products">
        <?php section_head('Technology Products Built Around Real Business Needs', 'Alongside our client services, Intelliworkz develops products that address practical business requirements. These solutions bring together our understanding of technology, business processes, and user needs to simplify the way organizations work.', 'section-head--products'); ?>

        <div class="products__stage" data-products>
            <?php foreach ($products_data as $i => $pr): ?>
                <div class="product <?= $i === 0 ? 'is-active' : '' ?>" id="product-<?= $i ?>" role="tabpanel" aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
                    <img class="products__img" src="assets/images/<?= $pr['img'] ?>" alt="<?= $pr['name'] ?>">
                    <div class="products__info">
                        <div class="products__intro">
                            <div>
                                <h3 class="products__name"><?= $pr['name'] ?></h3>
                                <p class="products__tag"><?= $pr['tag'] ?></p>
                            </div>
                            <p><?= $pr['text'] ?></p>
                            <div><?php btn('Explore ' . $pr['name'], 'btn--cta'); ?></div>
                        </div>
                        <div class="products__features">
                            <h4 class="h-card">Key Capabilities:</h4>
                            <div class="feature-grid">
                                <?php foreach ($pr['features'] as $f): ?>
                                    <button type="button" class="feature">
                                        <span><?= $f ?></span>
                                        <span class="feature__icon"><img src="assets/icons/icon-plus-box.svg" width="20" height="20" alt=""></span>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <ul class="products__tabs" role="tablist">
                <?php foreach ($products_data as $i => $pr): ?>
                    <li><button type="button" class="tab <?= $i === 0 ? 'is-active' : '' ?>" role="tab" aria-controls="product-<?= $i ?>" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"><span><?= $pr['name'] ?></span><span><?= sprintf('%02d', $i + 1) ?></span></button></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- ============ PROCESS ============ -->
    <section class="process">
        <span class="process__rule process__rule--1"></span>
        <span class="process__rule process__rule--2"></span>
        <?php section_head('From Requirement to Reliable Delivery', 'We don\'t start with a fixed solution. We start by understanding what you need to achieve.', 'process__head'); ?>

        <?php foreach ([1 => $process_row_1, 2 => $process_row_2] as $rowNo => $row): ?>
            <div class="process__row process__row--<?= $rowNo ?>">
                <?php foreach ($row as $p): ?>
                    <article class="process-card" style="--c: <?= $p['color'] ?>">
                        <div class="process-card__bg" style="background: <?= $p['fade'] ?>, url('assets/images/<?= $p['img'] ?>') center / cover no-repeat"></div>
                        <span class="process-card__flag"><?= $p['no'] ?></span>
                        <div class="process-card__body">
                            <div class="process-card__title">
                                <span class="process-card__icon" style="background: <?= $p['tint'] ?>"><img src="assets/icons/<?= $p['icon'] ?>" width="21" height="21" alt=""></span>
                                <h3 class="h-card h-card--dark"><?= $p['title'] ?></h3>
                            </div>
                            <p><?= $p['text'] ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <img class="process__flow process__flow--loop" src="assets/icons/connector-loop.svg" alt="">
        <img class="process__flow process__flow--a" src="assets/icons/flow-arrow-a.svg" alt="">
        <img class="process__flow process__flow--b" src="assets/icons/flow-arrow-b.svg" alt="">
        <img class="process__flow process__flow--c" src="assets/icons/flow-arrow-c.svg" alt="">
        <img class="process__flow process__flow--d" src="assets/icons/flow-arrow-d.svg" alt="">
        <img class="process__flow process__flow--e" src="assets/icons/flow-arrow-e.svg" alt="">
    </section>

    <?php require __DIR__ . '/includes/sections/showcase.php'; ?>

    <?php require __DIR__ . '/includes/sections/engagement.php'; ?>

    <!-- ============ INSIGHTS ============ -->
    <section class="container insights">
        <h2 class="h2 h2--center">Insights &amp; Intelligence</h2>
        <div class="insights__row">
            <?php foreach ($blog_posts as $b): ?>
                <article class="post">
                    <img class="post__img" src="assets/images/<?= $b['img'] ?>" alt="">
                    <div class="post__body">
                        <span class="small small--dark"><?= $b['date'] ?></span>
                        <div class="post__text">
                            <h3 class="post__title"><?= $b['title'] ?></h3>
                            <div><?php btn('Read More', 'btn--cta'); ?></div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
