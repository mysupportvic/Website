<div id="contact-content">
  <div class="info-page">
    <section class="info-hero">
      <div class="info-hero-inner">
        <p class="info-eyebrow">Contact My Support</p>
        <h1>Let us Build the Right NDIS Support Plan Together</h1>
        <p>Whether you are a participant, family member, nominee, or support coordinator, our team is here to help you get started with confidence.</p>
      </div>
    </section>

    <section class="info-section">
      <div class="info-grid two">
        <article class="info-card">
          <h2>Get In Touch</h2>
          <p>Call us, email us, or send an enquiry. We respond quickly and guide you through next steps in plain language.</p>
          <ul class="contact-list">
            <li><i class="ti ti-phone"></i><a href="tel:<?= e(str_replace(' ', '', $site['phone'])) ?>"><?= e($site['phone']) ?></a></li>
            <li><i class="ti ti-mail"></i><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></li>
            <li><i class="ti ti-map-pin"></i><span><?= e($site['address']) ?></span></li>
            <li><i class="ti ti-clock"></i><span><?= e($site['hours']) ?></span></li>
          </ul>
        </article>

        <article class="info-card">
          <h2>Enquiry Form</h2>
          <p>Tell us a little about your support needs and we will contact you within one business day.</p>
          <form class="contact-form" id="contact-form" action="https://formspree.io/f/xykqyypk" method="POST">
            <label for="full-name">Full name</label>
            <input id="full-name" name="name" type="text" required />

            <label for="phone">Phone number</label>
            <input id="phone" name="phone" type="tel" required />

            <label for="service-interest">Service of interest</label>
            <select id="service-interest" name="service">
              <?php foreach ($site['services'] as $service): ?>
                <option value="<?= e($service['title']) ?>"><?= e($service['title']) ?></option>
              <?php endforeach; ?>
            </select>

            <label for="message">How can we help?</label>
            <textarea id="message" name="message" rows="4" placeholder="Share your goals, preferred days, or any questions..."></textarea>

            <button type="submit" class="btn btn--primary">Send Enquiry</button>
          </form>
        </article>
      </div>
    </section>

    <section class="info-section info-band">
      <div class="info-heading">
        <h2>Who Can Contact Us</h2>
      </div>
      <div class="info-grid three">
        <article class="info-card compact">
          <h3>Participants</h3>
          <p>Get support tailored to your NDIS goals and daily living needs.</p>
        </article>
        <article class="info-card compact">
          <h3>Families & Nominees</h3>
          <p>Partner with us to coordinate dependable and respectful support.</p>
        </article>
        <article class="info-card compact">
          <h3>Support Coordinators</h3>
          <p>Refer participants and collaborate on service delivery and outcomes.</p>
        </article>
      </div>
    </section>
  </div>
</div>

<!-- Formspree will auto-redirect on success. No custom JS needed. -->
