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
</head>
<body class="<?= $body_class ?? '' ?>">
