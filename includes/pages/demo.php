<?php
// Demo page - Our Approach & Process
?>

<div id="demo-content">
  <div class="demo-page">
    <div class="demo-header">
      <h1>Our Approach to Care</h1>
      <p>How MY SUPPORT VIC provides culturally responsive, person-centred support tailored to each participant.</p>
    </div>

    <div class="demo-timeline">
      <div class="timeline-step">
        <div class="timeline-time">Step 1</div>
        <div class="timeline-content">
          <h3>Communication Comes First</h3>
          <p>Good support begins with clear communication. We work to remove language barriers so participants and families can feel informed and involved.</p>
        </div>
      </div>

      <div class="timeline-step">
        <div class="timeline-time">Step 2</div>
        <div class="timeline-content">
          <h3>Person-Centred Support</h3>
          <p>We take time to understand your goals, preferences, and routines, then tailor support around what matters most to you.</p>
        </div>
      </div>

      <div class="timeline-step">
        <div class="timeline-time">Step 3</div>
        <div class="timeline-content">
          <h3>Respecting Culture and Identity</h3>
          <p>We recognise that language, culture, traditions, and family values all shape the support experience. Our services are inclusive and respectful.</p>
        </div>
      </div>

      <div class="timeline-step">
        <div class="timeline-time">Step 4</div>
        <div class="timeline-content">
          <h3>Building Trust and Independence</h3>
          <p>We build strong relationships through consistency and reliability while supporting participants to build confidence and maintain independence.</p>
        </div>
      </div>
    </div>

    <section class="demo-section demo-section--reasons">
      <h2 class="demo-section-title">Why Choose MY SUPPORT VIC</h2>
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
      <h2 class="demo-section-title">Our Commitments to Participants and Families</h2>

      <div class="demo-features">
        <div class="feature-card">
          <i class="ti ti-message-circle"></i>
          <h4>Clear Communication</h4>
          <p>We provide practical guidance so participants and families can make informed decisions with confidence.</p>
        </div>

        <div class="feature-card">
          <i class="ti ti-world"></i>
          <h4>Cultural Understanding</h4>
          <p>Support is delivered with respect for language, identity, traditions, and community connections.</p>
        </div>

        <div class="feature-card">
          <i class="ti ti-user-heart"></i>
          <h4>Person-Centred Care</h4>
          <p>Your goals and preferences guide support planning, service delivery, and ongoing review.</p>
        </div>

        <div class="feature-card">
          <i class="ti ti-users"></i>
          <h4>Community Connection</h4>
          <p>We encourage participation, belonging, and meaningful engagement to support wellbeing and independence.</p>
        </div>
      </div>
    </section>

    <div class="demo-cta">
      <h2>Ready to Start Your Journey With MY SUPPORT VIC?</h2>
      <p>Contact our team to discuss your goals and learn how we can support you with respect, clarity, and care.</p>
      <a href="<?= e($routes['participants']) ?>" class="btn btn--primary">Learn How It Works</a>
    </div>
  </div>
</div>
