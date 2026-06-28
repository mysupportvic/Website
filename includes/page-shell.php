<?php

require __DIR__ . '/site.php';

$pageTitle = $pageTitle ?? 'MY SUPPORT VIC';
$pageDescription = $pageDescription ?? $site['description'];
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($pageDescription) ?>" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
  <link rel="stylesheet" href="/css/global.css" />
  <link rel="stylesheet" href="/css/nav.css" />
  <link rel="stylesheet" href="/css/footer.css" />
  <link rel="stylesheet" href="/css/home.css" />
  <link rel="stylesheet" href="/css/service.css" />
  <link rel="stylesheet" href="/css/info-pages.css" />
  <link rel="stylesheet" href="/css/demo-testimonials.css" />
  <link rel="stylesheet" href="/css/responsive-overrides.css" />
</head>
<body data-page="<?= e($currentPage) ?>">
  <?php require __DIR__ . '/nav.php'; ?>

  <?php if ($currentPage === 'home'): ?>
    <?php require __DIR__ . '/pages/home.php'; ?>
  <?php elseif ($currentPage === 'demo'): ?>
    <?php require __DIR__ . '/pages/demo.php'; ?>
  <?php elseif ($currentPage === 'participants'): ?>
    <?php require __DIR__ . '/pages/participants.php'; ?>
  <?php elseif ($currentPage === 'service'): ?>
    <?php require __DIR__ . '/pages/service.php'; ?>
  <?php elseif ($currentPage === 'budget-tracking'): ?>
    <?php require __DIR__ . '/pages/budget-tracking.php'; ?>
  <?php elseif ($currentPage === 'about'): ?>
    <?php require __DIR__ . '/pages/about.php'; ?>
  <?php elseif ($currentPage === 'contact'): ?>
    <?php require __DIR__ . '/pages/contact.php'; ?>
  <?php else: ?>
    <?php require __DIR__ . '/pages/home.php'; ?>
  <?php endif; ?>

  <?php require __DIR__ . '/footer.php'; ?>

  <script>
    const SITE = <?= json_encode($site, JSON_UNESCAPED_SLASHES) ?>;
    const ROUTES = <?= json_encode($routes, JSON_UNESCAPED_SLASHES) ?>;
  </script>
  <script src="/js/components/nav-interactions.js"></script>
</body>
</html>