<?php

require __DIR__ . '/site.php';

$pageTitle = $pageTitle ?? 'MY SUPPORT VIC';
$pageDescription = $pageDescription ?? $site['description'];
$currentPage = $currentPage ?? 'home';

$currentRouteKey = match ($currentPage) {
  'about' => 'about',
  'contact' => 'contact',
  'demo' => 'demo',
  'participants' => match ($participantPageKey ?? 'overview') {
    'new-participants' => 'participantsNew',
    'existing-participants' => 'participantsExisting',
    'self-managed-participants' => 'participantsSelfManaged',
    'plan-managed-participants' => 'participantsPlanManaged',
    'payments-how-it-works' => 'participantsPayments',
    default => 'participants',
  },
  'resources' => match ($resourcePageKey ?? 'getting-started-guide') {
    'getting-started-guide' => 'resourcesGettingStarted',
    'understanding-your-ndis-plan' => 'resourcesUnderstandingPlan',
    'self-managed-vs-plan-managed' => 'resourcesCompareManaged',
    'faqs' => 'resourcesFaq',
    'participant-rights' => 'resourcesRights',
    'vietnamese-resources' => 'resourcesVietnamese',
    default => 'resourcesGettingStarted',
  },
  'budget-tracking' => 'budgetTracking',
  'service' => match ($serviceKey ?? 'overview') {
    'daily-living' => 'servicesDailyLiving',
    'community-participation' => 'servicesCommunityParticipation',
    'transport' => 'servicesTransport',
    'domestic-support' => 'servicesDomesticSupport',
    'companionship' => 'servicesCompanionship',
    'cultural-support' => 'servicesCulturalSupport',
    default => 'service',
  },
  default => 'home',
};
?>
<!DOCTYPE html>
<html lang="<?= e($site['htmlLang']) ?>">
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
  <link rel="stylesheet" href="/css/participants.css" />
  <link rel="stylesheet" href="/css/service.css" />
  <link rel="stylesheet" href="/css/info-pages.css" />
  <link rel="stylesheet" href="/css/demo-testimonials.css" />
  <link rel="stylesheet" href="/css/language-gate.css" />
  <link rel="stylesheet" href="/css/responsive-overrides.css" />
</head>
<body data-page="<?= e($currentPage) ?>" data-language="<?= e($site['activeLanguage']) ?>" data-language-landing="<?= $site['isLanguageLanding'] ? 'true' : 'false' ?>">
  <div class="language-gate" data-language-gate hidden>
    <div class="language-gate__backdrop"></div>
    <section class="language-gate__dialog" role="dialog" aria-modal="true" aria-labelledby="language-gate-title" aria-describedby="language-gate-description">
      <div class="language-gate__brand"><?= e($site['name']) ?></div>
      <h2 id="language-gate-title">Select site language</h2>
      <p id="language-gate-description" class="language-gate__description">
        Choose your preferred language to continue. Your selection is saved on this device.
      </p>
      <div class="language-gate__options" role="list">
        <button type="button" class="language-gate__option" data-language-option="en" data-language-label="English" aria-pressed="false">
          <span>English</span>
        </button>
        <button type="button" class="language-gate__option" data-language-option="vn" data-language-label="Tiếng Việt" aria-pressed="false">
          <span>Tiếng Việt</span>
        </button>
      </div>
    </section>
  </div>

  <?php require __DIR__ . '/nav.php'; ?>

  <?php if ($currentPage === 'home'): ?>
    <?php require __DIR__ . '/pages/home.php'; ?>
  <?php elseif ($currentPage === 'demo'): ?>
    <?php require __DIR__ . '/pages/demo.php'; ?>
  <?php elseif ($currentPage === 'participants'): ?>
    <?php require __DIR__ . '/pages/participants.php'; ?>
  <?php elseif ($currentPage === 'resources'): ?>
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
    const CURRENT_ROUTE_KEY = <?= json_encode($currentRouteKey, JSON_UNESCAPED_SLASHES) ?>;
    const ACTIVE_LANGUAGE = <?= json_encode($site['activeLanguage'], JSON_UNESCAPED_SLASHES) ?>;
    const LANGUAGE_ROUTES = <?= json_encode($site['languageRoutes'], JSON_UNESCAPED_SLASHES) ?>;
    const IS_LANGUAGE_LANDING = <?= $site['isLanguageLanding'] ? 'true' : 'false' ?>;
  </script>
  <script src="/js/components/language-gate.js"></script>
  <script src="/js/components/nav-interactions.js"></script>
</body>
</html>