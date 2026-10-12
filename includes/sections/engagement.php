    <!-- ============ ENGAGEMENT MODEL ============ -->
    <section class="container engagement">
        <div class="section-head">
            <h2 class="h2 h2--center">Engagement Model</h2>
            <p class="lead lead--engagement">Our 100% in-house team offers different engagement models to fit your business needs. We do not further outsource or engage freelance teams to execute our orders, which ensures client confidentiality. We make sure the same or similarly skilled resources work on your orders every time, so you get smooth and consistent delivery that meets your quality and turnaround commitments. How you work with us depends on what you need.</p>
        </div>

        <div class="models">
            <?php foreach ($engagement_models as $m): ?>
                <article class="model model--<?= $m['height'] ?>">
                    <div class="model__panel <?= $m['panel'] ?>">
                        <img class="model__img <?= $m['img_class'] ?? '' ?>" src="assets/images/<?= $m['img'] ?>" alt="">
                        <span class="model__no" style="color: <?= $m['num_color'] ?>"><?= $m['no'] ?></span>
                        <div class="model__title">
                            <h3 class="h-card"><?= $m['title'] ?></h3>
                            <span class="model__tag" style="background: <?= $m['color'] ?>"><?= $m['tag'] ?></span>
                        </div>
                    </div>
                    <ul class="model__list">
                        <?php foreach ($m['bullets'] as $b): ?>
                            <li><span class="dot-anchor"></span><p class="small"><?= $b ?></p></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="cta-band cta-band--pricing">
            <img class="cta-band__grid" src="assets/icons/grid-lines.svg" alt="">
            <div class="price-badge">
                <?php require __DIR__ . '/price-badge.php'; ?>
            </div>
            <div class="cta-band__copy">
                <h2 class="cta-title">Flexible hourLy pricing</h2>
                <p>Terms &amp; conditions apply · Minimum 5-hour booking</p>
            </div>
            <?php btn('Let’s Collaborate', 'btn--cta', 'arrow-cta.svg'); ?>
        </div>
    </section>

