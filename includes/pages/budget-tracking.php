<?php
// Budget Tracking page template
?>

<div id="budget-tracking-content">
  <div class="budget-tracking-page">
    <section class="bt-hero">
      <div class="bt-hero-inner">
        <h1>What Participants and Families Say</h1>
        <p>Read feedback from people who have experienced culturally responsive, person-centred support through MY SUPPORT VIC.</p>
      </div>
      <div class="bt-metrics">
        <div class="bt-metric">
          <div class="value">6</div>
          <div class="label">Core Service Areas</div>
        </div>
        <div class="bt-metric">
          <div class="value">100%</div>
          <div class="label">Participant Focus</div>
        </div>
        <div class="bt-metric">
          <div class="value">1</div>
          <div class="label">Trusted Team Approach</div>
        </div>
      </div>
    </section>

    <section class="bt-section">
      <h2>Participant Testimonials</h2>
      <p class="bt-sub">Real stories from participants and families about their experience with MY SUPPORT VIC.</p>
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
      <h3>Ready to Talk With Our Team?</h3>
      <p>Contact MY SUPPORT VIC to discuss your goals and find support that is respectful, clear, and tailored to your needs.</p>
      <a href="<?= e($routes['contact']) ?>" class="btn btn--primary">Contact Us Today</a>
    </section>
  </div>
</div>
