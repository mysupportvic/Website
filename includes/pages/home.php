<?php
// Home page sections template
// Renders: hero, trust-bar, services, how-it-works, why-us, testimonials, CTA
?>

<!-- HERO -->
<div id="hero">
  <div class="hero">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-pill">
          <i class="ti ti-heart" aria-hidden="true"></i>
          Quality Home Support for Seniors
        </div>
        <h1>Stay Independent,<br><em>With Support You Can Trust</em></h1>
        <p class="hero-desc">
          We provide compassionate, reliable home support for seniors. From daily living assistance to companionship, we help you live independently in your own home.
        </p>
        <div class="hero-btns">
          <a href="<?= e($routes['participants']) ?>" class="btn btn--primary">
            Learn How We Can Help
          </a>
          <a href="<?= e($routes['contact']) ?>" class="btn btn--ghost">
            Call <?= e($site['phone']) ?>
          </a>
        </div>
      </div>

      <div class="hero-card" aria-hidden="true">
        <h3>Your Trusted Support Partner</h3>
        <?php foreach ($site['trustBadges'] as $badge): ?>
          <div class="hero-bullet">
            <div class="hero-bullet-dot"></div>
            <p><?= e($badge['label']) ?></p>
          </div>
        <?php endforeach; ?>
        <div class="hero-stats">
          <?php foreach ($site['stats'] as $stat): ?>
            <div class="hero-stat">
              <div class="hero-stat-num"><?= e($stat['value']) ?></div>
              <div class="hero-stat-lbl"><?= e($stat['label']) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TRUST BAR -->
<div id="trust-bar">
  <div class="trust-bar" aria-label="Certifications and credentials">
    <div class="trust-bar-inner">
      <?php foreach ($site['trustBadges'] as $i => $badge): ?>
        <div class="trust-item">
          <i class="ti <?= e($badge['icon']) ?>" aria-hidden="true"></i>
          <?= e($badge['label']) ?>
        </div>
        <?php if ($i < count($site['trustBadges']) - 1): ?>
          <div class="trust-divider" aria-hidden="true"></div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- SERVICES -->
<div id="services">
  <section class="services-section" aria-labelledby="services-title">
    <div class="services-header">
      <div>
        <div class="section-label">Our Services</div>
        <h2 id="services-title" class="section-title">Support That<br>Fits Your Life</h2>
        <p class="section-sub">We offer a comprehensive range of home support services tailored to help you stay independent and well.</p>
      </div>
      <a href="<?= e($routes['service']) ?>" class="btn btn--text">
        View all services <i class="ti ti-arrow-right" aria-hidden="true"></i>
      </a>
    </div>
    <div class="services-grid">
      <?php foreach ($site['services'] as $service): ?>
        <a href="<?= e($service['href']) ?>" class="card service-card" role="article">
          <div class="icon-box">
            <i class="ti <?= e($service['icon']) ?>" aria-hidden="true"></i>
          </div>
          <h4><?= e($service['title']) ?></h4>
          <p><?= e($service['short']) ?></p>
          <div class="svc-link">
            Learn more <i class="ti ti-arrow-right" aria-hidden="true"></i>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<!-- HOW IT WORKS -->
<div id="how-it-works">
  <section class="how-section" aria-labelledby="how-title">
    <div class="how-inner">
      <div class="how-header">
        <div class="section-label">How It Works</div>
        <h2 id="how-title" class="section-title">Getting started is simple</h2>
        <p class="section-sub">From your first call to your first support session — we make the NDIS process clear and stress-free.</p>
      </div>
      <div class="steps-track" role="list">
        <?php foreach ($site['steps'] as $i => $step): ?>
          <div class="step">
            <div class="step-circle <?= $i === 0 ? 'active' : '' ?>" aria-hidden="true"><?= e($step['num']) ?></div>
            <h4><?= e($step['title']) ?></h4>
            <p><?= e($step['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<!-- WHY US -->
<div id="why-us">
  <section class="why-section" aria-labelledby="why-title">
    <div class="why-inner">
      <div>
        <div class="section-label">Why Choose Us</div>
        <h2 id="why-title" class="section-title">Care that puts <em style="font-style:italic;">you</em> first</h2>
        <p class="section-sub" style="margin-top:10px;">
          We're not just a service provider — we're partners in your goals.
          Our team genuinely cares about your progress and wellbeing.
        </p>
        <a href="<?= e($routes['about']) ?>" class="btn btn--outline" style="margin-top:28px;">
          Meet Our Team
        </a>
      </div>
      <div class="why-grid">
        <?php foreach ($site['reasons'] as $reason): ?>
          <div class="why-item">
            <div class="icon-box">
              <i class="ti <?= e($reason['icon']) ?>" aria-hidden="true"></i>
            </div>
            <div>
              <h4><?= e($reason['title']) ?></h4>
              <p><?= e($reason['desc']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<!-- TESTIMONIALS -->
<div id="testimonials">
  <section class="testimonials-section" aria-labelledby="testimonials-title">
    <div class="testimonials-inner">
      <div class="section-label section-label--light">Participant Stories</div>
      <h2 id="testimonials-title" class="section-title section-title--light">Hear from the people we support</h2>
      <p class="section-sub section-sub--light">Real stories from participants and their families across <?= e($site['region']) ?>.</p>
      <div class="testimonials-grid">
        <?php foreach ($site['testimonials'] as $testimonial): ?>
          <div class="card--dark tcard" role="article">
            <div class="stars" aria-label="<?= e($testimonial['stars']) ?> out of 5 stars">
              <?php for ($i = 0; $i < $testimonial['stars']; $i++): ?>
                <i class="ti ti-star-filled" aria-hidden="true"></i>
              <?php endfor; ?>
            </div>
            <p>"<?= e($testimonial['quote']) ?>"</p>
            <div class="tcard-author">
              <div class="tcard-avatar" aria-hidden="true"><?= e($testimonial['initials']) ?></div>
              <div>
                <div class="tcard-name"><?= e($testimonial['name']) ?></div>
                <div class="tcard-role"><?= e($testimonial['role']) ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<!-- CTA -->
<div id="cta">
  <section class="cta-section" aria-labelledby="cta-title">
    <div class="cta-inner">
      <div class="section-label">Get In Touch</div>
      <h2 id="cta-title" class="section-title">Ready to start your NDIS journey with us?</h2>
      <p class="section-sub" style="margin:0 auto;">
        Leave your name and number and one of our friendly team members will be in touch within one business day.
      </p>
      <form class="cta-form" id="cta-form" novalidate>
        <input class="cta-input" type="text" name="name" placeholder="Your name" required aria-label="Your name" />
        <input class="cta-input" type="tel" name="phone" placeholder="Phone number" required aria-label="Phone number" />
        <button type="submit" class="btn btn--primary">Request a call</button>
      </form>
      <p class="cta-note">
        Or call us directly: <strong><?= e($site['phone']) ?></strong> — <?= e($site['hours']) ?>
      </p>
    </div>
  </section>
</div>

<script>
document.getElementById('cta-form').addEventListener('submit', function (e) {
  e.preventDefault();
  const name = this.name.value.trim();
  const phone = this.phone.value.trim();
  if (!name || !phone) {
    alert('Please fill in both fields.');
    return;
  }
  alert('Thanks ' + name + '! We\'ll call you at ' + phone + ' soon.');
  this.reset();
});
</script>
