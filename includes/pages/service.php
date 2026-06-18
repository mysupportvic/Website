<?php
$serviceKey = $serviceKey ?? 'overview';
$serviceContent = $site['servicePages'][$serviceKey] ?? $site['servicePages']['overview'];
$serviceSteps = $serviceContent['steps'] ?? $site['steps'];
$serviceHighlights = $serviceContent['highlights'] ?? $site['reasons'];
?>

<div id="service-content">
  <div class="service-page">
    <!-- HERO -->
    <section class="po-hero">
      <div class="po-hero-content">
        <h1><?= e($serviceContent['heroTitle']) ?></h1>
        <p><?= e($serviceContent['heroIntro']) ?></p>
        <div>
          <a href="<?= e($routes['participants']) ?>" class="btn btn--primary"><?= e($serviceContent['ctaLabel']) ?></a>
          <a href="<?= e($routes['contact']) ?>" class="btn btn--ghost">Call <?= e($site['phone']) ?></a>
        </div>
      </div>
    </section>

    <!-- PROBLEM/SOLUTION -->
    <section class="po-problem-solution">
      <div>
        <h2><?= e($serviceContent['challengeTitle']) ?></h2>
        <ul>
          <?php foreach ($serviceContent['challenges'] as $challenge): ?>
            <li><?= e($challenge) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="solution">
        <h2><?= e($serviceContent['solutionTitle']) ?></h2>
        <ul>
          <?php foreach ($serviceContent['solutions'] as $solution): ?>
            <li><?= e($solution) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <!-- SERVICES -->
    <section class="po-features">
      <div class="po-features-header">
        <h2><?= e($serviceContent['featuresTitle']) ?></h2>
        <p><?= e($serviceContent['featuresIntro']) ?></p>
      </div>
      <div class="po-features-grid">
        <?php foreach ($serviceContent['features'] as $feature): ?>
          <div class="po-feature-card">
            <i class="ti <?= e($feature['icon']) ?>"></i>
            <h4><?= e($feature['title']) ?></h4>
            <p><?= e($feature['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="po-how-it-works">
      <h2><?= e($serviceContent['stepsTitle'] ?? 'How We Work With You') ?></h2>
      <p><?= e($serviceContent['stepsIntro'] ?? 'A simple, caring process designed to meet your needs.') ?></p>
      <div class="po-steps-grid">
        <?php foreach ($serviceSteps as $step): ?>
          <div class="po-step">
            <div class="po-step-number"><?= e($step['num']) ?></div>
            <h4><?= e($step['title']) ?></h4>
            <p><?= e($step['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="po-savings">
      <h2><?= e($serviceContent['highlightsTitle'] ?? 'Why Choose My Support') ?></h2>
      <div class="po-savings-grid">
        <?php foreach ($serviceHighlights as $reason): ?>
          <div class="po-savings-card" style="text-align: left; padding: 30px;">
            <i class="ti <?= e($reason['icon']) ?>" style="font-size: 36px; color: white; margin-bottom: 15px; display: block;"></i>
            <h4 style="color: white; margin-bottom: 10px;"><?= e($reason['title']) ?></h4>
            <p><?= e($reason['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- CTA -->
    <section class="po-cta">
      <h2><?= e($serviceContent['ctaTitle']) ?></h2>
      <p><?= e($serviceContent['ctaText']) ?></p>
      <a href="<?= e($routes['contact']) ?>" class="btn btn--primary"><?= e($serviceContent['ctaLabel']) ?></a>
    </section>
  </div>
</div>
