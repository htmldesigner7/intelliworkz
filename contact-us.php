<?php
$page_title = 'Contact Us | Intelliworkz';
$body_class = 'page-contact';
$extra_css  = ['assets/css/video.css', 'assets/css/magazine.css', 'assets/css/manufacture.css', 'assets/css/contact.css'];
require __DIR__ . '/includes/data-contact.php';
require __DIR__ . '/includes/data-video.php'; // for $ve_form_fields (shared lead-form field list)
require __DIR__ . '/includes/header.php';

$ni = 'assets/images/contact/';   // page images
$nc = 'assets/icons/contact/';    // page icons
$vc = 'assets/icons/video/';      // shared icons
?>

<main class="page ve ct">

    <!-- ============ HERO ============ -->
    <section class="ve-hero ve-hero--plain ct-hero">
        <img class="ct-hero__photo" src="<?= $ni ?>hero.png" alt="">

        <div class="ve-hero__content">
            <?php require __DIR__ . '/includes/site-header.php'; ?>

            <div class="container mf-hero__copy ct-hero__copy">
                <p class="breadcrumb breadcrumb--light"><a href="index.php">Home</a> / <span>Contact Us</span></p>
                <div class="ct-hero__text">
                    <h1 class="h1">Let’s Start a<br>Conversation.</h1>
                    <p>Tell us what you’re trying to build, improve, market or manage. We’ll understand your requirement, identify the right capabilities and connect you with the right team.</p>
                </div>
                <div class="mf-hero__btns">
                    <a href="#contact-form" class="mf-btn mf-btn--red">Start a Project</a>
                    <a href="#" class="mf-btn mf-btn--ghost">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <div class="ct-body">

        <!-- ============ FORM ============ -->
        <section class="container ct-form" id="contact-form">
            <div class="ct-form__copy">
                <h2 class="h2">Bring Us the Requirement.<br>We’ll Bring the Right Expertise.</h2>
                <p>Whether you need a single specialist service, an ongoing delivery partner or a dedicated team, tell us what you need and we’ll connect the relevant capabilities around your requirement.</p>
                <img class="ct-form__outline" src="<?= $ni ?>outline.png" alt="">
            </div>

            <form class="ct-card" action="#" method="post">
                <div class="ct-card__head">
                    <h2>Let’s Bring Your Packaging Vision to Life.</h2> <!-- kept exactly as written in Figma; looks like a leftover from the Packaging page -->
                    <p>Tell us about your project.</p>
                </div>
                <div class="ct-card__fields">
                    <?php foreach (array_chunk($ve_form_fields, 2) as $row): ?>
                        <div class="ct-card__row">
                            <?php foreach ($row as $f): ?>
                                <label class="ct-field"><span><?= $f[0] ?></span><input type="<?= $f[2] ?>" name="<?= strtolower(str_replace(' ', '_', $f[0])) ?>" placeholder="<?= $f[1] ?>"></label>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                    <label class="ct-field"><span>Subject</span><input type="text" name="subject" placeholder="Enter your subject"></label>
                    <label class="ct-field"><span>Your Message</span><textarea name="message" rows="1" placeholder="Tell us about your requirements"></textarea></label>
                </div>
                <button type="submit" class="btn btn--cta btn--block">Start a Project</button>
                <p class="ct-card__privacy"><img src="<?= $vc ?>lock.svg" width="14" height="14" alt="">We respect your privacy. Your information is safe with us.</p>
            </form>
        </section>

        <!-- ============ OFFICES (dark) ============ -->
        <section class="ct-dark">
            <div class="ct-dark__head">
                <h2 class="h2">Working Across Markets.<br>Connected From One Team.</h2>
                <p>Our teams work with businesses across markets while maintaining a consistent delivery structure, project communication and quality standard.</p>
            </div>

            <img class="ct-dark__map" src="<?= $nc ?>world-map.svg" alt="">
            <?php foreach ($ct_pins as $p): ?>
                <span class="ct-pin" style="left: <?= $p[1] ?>px; top: <?= $p[2] ?>px"></span>
                <span class="ct-pin__label" style="left: <?= $p[3] ?>px; top: <?= $p[4] ?>px"><?= $p[0] ?></span>
            <?php endforeach; ?>

            <div class="ct-offices" data-offices>
                <div class="ct-offices__tabs">
                    <?php $n = 0; foreach ($ct_offices as $key => $o): ?>
                        <button type="button" class="ct-offices__tab <?= $n++ === 0 ? 'is-active' : '' ?>" data-office="<?= $key ?>"><?= $o['tab'] ?></button>
                    <?php endforeach; ?>
                </div>
                <?php $n = 0; foreach ($ct_offices as $key => $o): ?>
                    <div class="ct-office" data-office-panel="<?= $key ?>" <?= $n++ === 0 ? '' : 'hidden' ?>>
                        <div class="ct-office__id"><strong><?= $o['country'] ?></strong><span><?= $o['city'] ?></span></div>
                        <hr class="ct-office__rule">
                        <div class="ct-office__cols">
                            <?php foreach ($o['blocks'] as $row): foreach ($row as $b): ?>
                                <div class="ct-office__block"><span class="ct-office__label"><?= $b[0] ?></span><p><?= $b[1] ?></p></div>
                            <?php endforeach; endforeach; ?>
                            <div class="ct-office__block ct-office__block--contact">
                                <div><span class="ct-office__label">Phone</span><p><?= $o['phone'] ?></p></div>
                                <div><span class="ct-office__label">Email :</span><p><?= $o['email'] ?></p></div>
                            </div>
                        </div>
                        <div class="ct-office__actions">
                            <a href="<?= $o['map'] ?>" target="_blank" rel="noopener" class="ct-office__btn ct-office__btn--ghost">View on Map ↗</a>
                            <a href="tel:<?= $o['call'] ?>" class="ct-office__btn ct-office__btn--red">Call Office →</a>
                        </div>
                        <?php if ($o['blocks2']): ?>
                            <hr class="ct-office__rule">
                            <div class="ct-office__cols">
                                <?php foreach ($o['blocks2'] as $b): ?>
                                    <div class="ct-office__block"><span class="ct-office__label"><?= $b[0] ?></span><p><?= $b[1] ?></p></div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div class="ct-office__note"><span>Consistent communication</span><span>Global project delivery</span></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ============ FAQs ============ -->
        <section class="container ve-faq">
            <h2 class="h2 h2--center">FAQs</h2>
            <div class="acc acc--faq" data-accordion>
                <?php foreach ($ct_faqs as $i => $f): ?>
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
