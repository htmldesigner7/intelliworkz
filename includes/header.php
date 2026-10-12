<?php require_once __DIR__ . '/data.php'; require_once __DIR__ . '/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($page_title ?? 'Intelliworkz') ?></title>

    <link rel="icon" type="image/png" sizes="100x100" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@500&family=Inter+Tight:wght@400;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <?php if (empty($no_zoom)): ?>
    <script>
    /* Desktop scaling: these pages are built on a 1920px canvas. From 1200px to 1919px the whole canvas is scaled
       proportionally (CSS zoom), so the design stays exactly as drawn. Below 1200px the stacked layout in
       responsive.css takes over. --z is exposed for the few rules that need the scale (viewport units, fixed overlays). */
    (function () {
        var d = document.documentElement;
        function fit() {
            var w = window.innerWidth, k = (w >= 1200 && w < 1920) ? w / 1920 : 1;
            d.style.zoom = k === 1 ? '' : k;
            d.style.setProperty('--z', k);
        }
        fit();
        window.addEventListener('resize', fit);
    })();
    </script>
    <?php endif; ?>
    <?php
    /* filemtime() cache-busting: browsers grab the new file the moment it changes on disk,
       instead of serving a stale cached copy of the CSS/JS until a hard refresh. */
    function asset_url(string $path): string {
        $file = __DIR__ . '/../' . $path;
        return $path . (is_file($file) ? '?v=' . filemtime($file) : '');
    }
    ?>
    <link rel="stylesheet" href="<?= asset_url('assets/css/style.css') ?>">
    <?php foreach (($extra_css ?? []) as $css): ?><link rel="stylesheet" href="<?= asset_url($css) ?>">
    <?php endforeach; ?>
    <link rel="stylesheet" href="<?= asset_url('assets/css/effects.css') ?>">
    <link rel="stylesheet" href="<?= asset_url('assets/css/responsive.css') ?>">
</head>
<body class="<?= $body_class ?? '' ?>">
