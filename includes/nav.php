<?php

$servicesDropdown = '';
foreach ($site['services'] as $service) {
    $servicesDropdown .= sprintf(
        '<a href="%s"><i class="ti %s" aria-hidden="true"></i>%s</a>',
        e($service['href']),
        e($service['icon']),
        e($service['title'])
    );
}

$desktopLinks = '';
$pageToRoute = [
  'home' => $routes['home'],
  'about' => $routes['about'],
  'contact' => $routes['contact'],
  'demo' => $routes['demo'],
  'participants' => $routes['participants'],
  'service' => $routes['service'],
  'budget-tracking' => $routes['budgetTracking'],
];

foreach ($site['nav'] as $item) {
    $isDropdown = !empty($item['dropdown']);
    $isActive = $isDropdown
        ? in_array($currentPage, ['service', 'budget-tracking'], true)
    : (($pageToRoute[$currentPage] ?? null) === $item['href']);
    $activeClass = $isActive ? 'active' : '';

    if ($isDropdown) {
        $desktopLinks .= sprintf(
            '<span class="has-dropdown %s" role="button" tabindex="0" aria-haspopup="true" data-href="%s">%s <i class="ti ti-chevron-down" aria-hidden="true"></i><div class="dropdown">%s</div></span>',
            $activeClass,
            e($item['href']),
            e($item['label']),
            $servicesDropdown
        );
        continue;
    }

    $desktopLinks .= sprintf(
        '<a href="%s" class="%s">%s</a>',
        e($item['href']),
        $activeClass,
        e($item['label'])
    );
}

$mobileLinks = '';
foreach ($site['nav'] as $item) {
    if (!empty($item['dropdown'])) {
        foreach ($site['services'] as $service) {
            $mobileLinks .= sprintf('<a href="%s">%s</a>', e($service['href']), e($service['title']));
        }
        continue;
    }

    $mobileLinks .= sprintf('<a href="%s">%s</a>', e($item['href']), e($item['label']));
}
?>
<nav class="site-nav" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="<?= e($routes['home']) ?>" class="nav-logo"><?= e(str_replace(' NDIS', '', $site['name'])) ?><span> NDIS</span></a>

    <div class="nav-links" id="nav-links-desktop">
      <?= $desktopLinks ?>
    </div>

    <div class="nav-right">
      <a href="tel:<?= e(str_replace(' ', '', $site['phone'])) ?>" class="nav-phone">
        <i class="ti ti-phone" aria-hidden="true"></i>
        <?= e($site['phone']) ?>
      </a>
      <a href="<?= e($routes['participants']) ?>" class="btn btn--primary">Get Started</a>
    </div>

    <button class="nav-hamburger" id="nav-hamburger" aria-label="Open menu" aria-expanded="false">
      <i class="ti ti-menu-2" aria-hidden="true"></i>
    </button>
  </div>

  <div class="nav-mobile" id="nav-mobile" role="menu">
    <?= $mobileLinks ?>
    <a href="<?= e($routes['participants']) ?>" class="nav-mobile-cta">Get Started</a>
    <a href="tel:<?= e(str_replace(' ', '', $site['phone'])) ?>" style="color:var(--color-teal); font-weight:600;">
      <i class="ti ti-phone" aria-hidden="true"></i> <?= e($site['phone']) ?>
    </a>
  </div>
</nav>