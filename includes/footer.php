<?php

$footerColumns = '';
foreach ($site['footerLinks'] as $column) {
    $links = '';
    foreach ($column['links'] as $link) {
        $links .= sprintf('<li><a href="%s">%s</a></li>', e($link['href']), e($link['label']));
    }

    $footerColumns .= sprintf(
        '<div class="footer-col"><h5>%s</h5><ul>%s</ul></div>',
        e($column['heading']),
        $links
    );
}
?>
<footer class="site-footer" role="contentinfo">
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= e($routes['home']) ?>" class="footer-brand-logo">
          <?= e(str_replace(' NDIS', '', $site['name'])) ?><span> NDIS</span>
        </a>
        <p>Supporting NDIS participants across <?= e($site['region']) ?> with person-centred, reliable services.</p>
        <div class="ndis-badge" style="margin-top:16px;">
          <i class="ti ti-shield-check" aria-hidden="true"></i>
          <span>NDIS Support Services</span>
        </div>
      </div>

      <?= $footerColumns ?>
    </div>

    <div class="footer-bottom">
      <p>© <?= date('Y') ?> <?= e($site['name']) ?>. All rights reserved. ABN: <?= e($site['abn']) ?></p>
      <p><?= e($site['address']) ?></p>
    </div>
  </div>
</footer>