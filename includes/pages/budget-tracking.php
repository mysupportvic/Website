<?php
// Budget Tracking page template
?>

<div id="budget-tracking-content">
  <div class="budget-tracking-page">
    <section class="bt-hero">
      <div class="bt-hero-inner">
        <h1>What Our Clients Say</h1>
        <p>Join hundreds of seniors who've found trusted, compassionate home support through My Support.</p>
      </div>
      <div class="bt-metrics">
        <div class="bt-metric">
          <div class="value">500+</div>
          <div class="label">Seniors Supported</div>
        </div>
        <div class="bt-metric">
          <div class="value">98%</div>
          <div class="label">Satisfaction Rate</div>
        </div>
        <div class="bt-metric">
          <div class="value">15+</div>
          <div class="label">Years Experience</div>
        </div>
      </div>
    </section>

    <section class="bt-section">
      <h2>Client Testimonials</h2>
      <p class="bt-sub">Real stories from real seniors about their experience with My Support.</p>
      <div class="bt-grid">
        <?php foreach ($site['testimonials'] as $testimonial): ?>
          <article class="bt-card">
            <div class="bt-card-header">
              <div class="bt-avatar">
                <?= e($testimonial['initials']) ?>
              </div>
              <div>
                <h4 class="bt-name"><?= e($testimonial['name']) ?></h4>
                <p class="bt-role"><?= e($testimonial['role']) ?></p>
              </div>
            </div>
            <div class="bt-stars" aria-label="<?= e((string) $testimonial['stars']) ?> out of 5 stars">
              <?php for ($i = 0; $i < $testimonial['stars']; $i++): ?>
                <i class="ti ti-star-filled" aria-hidden="true"></i>
              <?php endfor; ?>
            </div>
            <p class="bt-quote">"<?= e($testimonial['quote']) ?>"</p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="bt-cta">
      <h3>Ready to Experience Quality Care?</h3>
      <p>Get started today with a free assessment. Our caring team will help you find the right support for your needs.</p>
      <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact Us Today</a>
    </section>
  </div>
</div>
