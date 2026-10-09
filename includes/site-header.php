<header class="site-header">
    <div class="topbar">
        <div class="container topbar__inner">
            <button class="menu-toggle" type="button" aria-controls="site-menu" aria-expanded="false" data-menu-open>
                <img src="assets/icons/menu.svg" width="16" height="16" alt="">
                <span>Menu</span>
            </button>
            <a href="index.php" class="logo"><img src="assets/icons/logo.svg" width="297" height="64" alt="Intelliworkz"></a>
            <?php btn('Start a Project', 'btn--header', 'arrow-right.svg'); ?>
        </div>
    </div>
    <nav class="subnav">
        <ul class="container subnav__list" data-subnav>
            <?php foreach ($sub_nav as $label => $links): ?>
                <li class="subnav__item">
                    <button type="button" class="subnav__btn" aria-expanded="false" aria-haspopup="true"><?= $label ?><img src="assets/icons/chevron-down.svg" width="9" height="5" alt=""></button>
                    <ul class="dropdown">
                        <?php foreach ($links as $text => $url): ?>
                            <li><a href="<?= $url ?>"><?= $text ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<!-- Slide-out menu -->
<div class="menu-backdrop" data-menu-close hidden></div>
<aside class="menu-drawer" id="site-menu" aria-label="Site menu" aria-hidden="true">
    <div class="menu-drawer__top">
        <a href="index.php"><img src="assets/icons/logo.svg" width="198" height="43" alt="Intelliworkz"></a>
        <button type="button" class="menu-drawer__close" aria-label="Close menu" data-menu-close>&times;</button>
    </div>
    <div class="menu-drawer__grid">
        <?php foreach (['services', 'industries', 'products', 'company', 'insights'] as $key): ?>
            <div class="menu-drawer__col">
                <h3><?= $footer_cols[$key][0] ?></h3>
                <ul>
                    <?php foreach ($footer_cols[$key][1] as $link): ?>
                        <li><a href="#"><?= $link ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="menu-drawer__bottom"><?php btn('Start a Project', 'btn--cta'); ?></div>
</aside>
