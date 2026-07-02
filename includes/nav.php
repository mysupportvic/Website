<?php

$desktopLinks = '';
$pageToRoute = [
  'home' => $routes['home'],
  'about' => $routes['about'],
  'contact' => $routes['contact'],
  'demo' => $routes['demo'],
  'participants' => $routes['participants'],
  'resources' => $routes['resourcesGettingStarted'],
  'service' => $routes['service'],
  'budget-tracking' => $routes['budgetTracking'],
];

foreach ($site['nav'] as $item) {
  $isDropdown = !empty($item['dropdownItems']);
    $isActive = $isDropdown
    ? in_array($currentPage, $item['activePages'] ?? [], true)
    : (($pageToRoute[$currentPage] ?? null) === $item['href']);
    $activeClass = $isActive ? 'active' : '';

    if ($isDropdown) {
    $dropdownLinks = '';
    foreach ($item['dropdownItems'] as $dropdownItem) {
      $dropdownLinks .= sprintf(
        '<a href="%s"><i class="ti %s" aria-hidden="true"></i>%s</a>',
        e($dropdownItem['href']),
        e($dropdownItem['icon'] ?? 'ti-chevron-right'),
        e($dropdownItem['label'])
      );
    }

        $desktopLinks .= sprintf(
            '<span class="has-dropdown %s" role="button" tabindex="0" aria-haspopup="true" data-href="%s">%s <i class="ti ti-chevron-down" aria-hidden="true"></i><div class="dropdown">%s</div></span>',
            $activeClass,
            e($item['href']),
            e($item['label']),
      $dropdownLinks
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
  if (!empty($item['dropdownItems'])) {
    $mobileLinks .= sprintf(
      '<div class="nav-mobile-dropdown"><button class="nav-mobile-dropdown-toggle" type="button" aria-expanded="false"><span>%s</span><i class="ti ti-chevron-down" aria-hidden="true"></i></button><div class="nav-mobile-dropdown-menu">',
      e($item['label'])
    );
    foreach ($item['dropdownItems'] as $dropdownItem) {
      $mobileLinks .= sprintf('<a href="%s">%s</a>', e($dropdownItem['href']), e($dropdownItem['label']));
    }
    $mobileLinks .= '</div></div>';
    continue;
  }

  $mobileLinks .= sprintf('<a href="%s" class="nav-mobile-link">%s</a>', e($item['href']), e($item['label']));
}
?>
<nav class="site-nav" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="<?= e($routes['home']) ?>" class="nav-logo"><?= e(str_replace(' NDIS', '', $site['name'])) ?><span> NDIS</span></a>

    <div class="nav-links" id="nav-links-desktop">
      <?= $desktopLinks ?>
    </div>

    <div class="nav-right">
      <button type="button" class="nav-language-button" data-language-switcher>
        <i class="ti ti-world" aria-hidden="true"></i>
        Language
      </button>
      <a href="<?= e($routes['participants']) ?>" class="btn btn--primary">Get Started</a>
    </div>

    <button class="nav-hamburger" id="nav-hamburger" aria-label="Open menu" aria-expanded="false">
      <i class="ti ti-menu-2" aria-hidden="true"></i>
    </button>
  </div>

  <div class="nav-mobile" id="nav-mobile" role="menu">
    <?= $mobileLinks ?>
    <button type="button" class="nav-mobile-language" data-language-switcher>
      <i class="ti ti-world" aria-hidden="true"></i>
      Change language
    </button>
    <a href="<?= e($routes['participants']) ?>" class="nav-mobile-cta">Get Started</a>
  </div>
</nav>