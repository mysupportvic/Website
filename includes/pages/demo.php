<?php
// Demo page - Our Approach & Process
?>

<div id="demo-content">
  <div class="demo-page">
    <div class="demo-header">
      <h1>Our Approach to Care</h1>
      <p>How My Support provides compassionate, reliable home care tailored to your needs.</p>
    </div>

    <div class="demo-timeline">
      <div class="timeline-step">
        <div class="timeline-time">Step 1</div>
        <div class="timeline-content">
          <h3>Initial Contact & Assessment</h3>
          <p>We listen carefully to understand your situation, needs, preferences, and any concerns. This helps us create the right care plan for you.</p>
        </div>
      </div>

      <div class="timeline-step">
        <div class="timeline-time">Step 2</div>
        <div class="timeline-content">
          <h3>Personalized Care Planning</h3>
          <p>Based on your needs, we design a customized support schedule. Whether you need help daily or weekly, we work around your routine.</p>
        </div>
      </div>

      <div class="timeline-step">
        <div class="timeline-time">Step 3</div>
        <div class="timeline-content">
          <h3>Carer Matching & Introduction</h3>
          <p>We match you with a trained, vetted carer who fits your needs and preferences. You'll meet them before care begins.</p>
        </div>
      </div>

      <div class="timeline-step">
        <div class="timeline-time">Step 4</div>
        <div class="timeline-content">
          <h3>Ongoing Support & Adjustment</h3>
          <p>Your carer begins regular visits. We stay in touch and adjust your plan if your needs change. You're never alone.</p>
        </div>
      </div>
    </div>

    <section class="demo-section demo-section--reasons">
      <h2 class="demo-section-title">Why Choose My Support</h2>
      <div class="features-showcase">
        <?php foreach ($site['reasons'] as $reason): ?>
          <article class="reason-card">
            <i class="ti <?= e($reason['icon']) ?>" aria-hidden="true"></i>
            <h4><?= e($reason['title']) ?></h4>
            <p><?= e($reason['desc']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="demo-section">
      <h2 class="demo-section-title">What You Can Do with CareConnect</h2>

      <div class="demo-features">
        <div class="feature-card">
          <i class="ti ti-bulb"></i>
          <h4>Smart Matching</h4>
          <p>AI-powered recommendations show you the best providers for your needs in seconds.</p>
        </div>

        <div class="feature-card">
          <i class="ti ti-search"></i>
          <h4>Provider Matching</h4>
          <p>Our system finds vetted providers tailored to your specific needs and location in seconds.</p>
        </div>

        <div class="feature-card">
          <i class="ti ti-chart-line"></i>
          <h4>Budget Tracking</h4>
          <p>Real-time visibility into your spending, remaining funds, and NDIS plan allocation.</p>
        </div>

        <div class="feature-card">
          <i class="ti ti-bulb"></i>
          <h4>Plan Optimization</h4>
          <p>Smart recommendations powered by AI to help you get the most from your NDIS funding.</p>
        </div>
      </div>
    </section>

    <div class="demo-cta">
      <h2>Ready to Experience It Yourself?</h2>
      <p>Join early adopters taking control of their NDIS support today. No lock-in. No hidden fees.</p>
      <a href="<?= e($routes['participants']) ?>" class="btn btn--primary">Join Early Adopters</a>
    </div>
  </div>
</div>
