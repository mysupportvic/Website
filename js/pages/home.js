/**
 * Home Page
 * js/pages/home.js
 */

const HomePage = {
  init: function() {
    this.renderHero();
    this.renderTrustBar();
    this.renderServices();
    this.renderHowItWorks();
    this.renderWhyUs();
    this.renderTestimonials();
    this.renderCTA();
  },

  renderHero: function() {
    const heroHTML = `
      <section class="hero">
        <h1>Empowering Your NDIS Journey</h1>
        <p>Supporting Greater Melbourne with quality, compassionate NDIS services.</p>
        <button class="btn btn-primary">Get Started</button>
      </section>
    `;
    const heroContainer = document.getElementById('hero');
    if (heroContainer) {
      heroContainer.innerHTML = heroHTML;
    }
  },

  renderTrustBar: function() {
    const trustHTML = `
      <section class="trust-bar">
        <p>Trusted by over 500 NDIS participants across Greater Melbourne</p>
      </section>
    `;
    const trustContainer = document.getElementById('trust-bar');
    if (trustContainer) {
      trustContainer.innerHTML = trustHTML;
    }
  },

  renderServices: function() {
    const servicesHTML = `
      <section class="services">
        <h2>Our Services</h2>
        <div class="service-grid">
          <div class="service-card">
            <h3>Daily Living Support</h3>
            <p>Personal care and household management assistance.</p>
          </div>
          <div class="service-card">
            <h3>Transport & Mobility</h3>
            <p>Safe, reliable transportation to appointments and activities.</p>
          </div>
          <div class="service-card">
            <h3>Community Participation</h3>
            <p>Support to engage in community activities and social events.</p>
          </div>
        </div>
      </section>
    `;
    const servicesContainer = document.getElementById('services');
    if (servicesContainer) {
      servicesContainer.innerHTML = servicesHTML;
    }
  },

  renderHowItWorks: function() {
    const howHTML = `
      <section class="how-it-works">
        <h2>How It Works</h2>
        <ol>
          <li>Contact us for a consultation</li>
          <li>We assess your needs</li>
          <li>Create a personalized plan</li>
          <li>Begin your support journey</li>
        </ol>
      </section>
    `;
    const howContainer = document.getElementById('how-it-works');
    if (howContainer) {
      howContainer.innerHTML = howHTML;
    }
  },

  renderWhyUs: function() {
    const whyHTML = `
      <section class="why-us">
        <h2>Why Choose CareConnect?</h2>
        <ul>
          <li>Experienced, compassionate staff</li>
          <li>Personalized support plans</li>
          <li>Flexible scheduling</li>
          <li>NDIS quality and safety framework certified</li>
        </ul>
      </section>
    `;
    const whyContainer = document.getElementById('why-us');
    if (whyContainer) {
      whyContainer.innerHTML = whyHTML;
    }
  },

  renderTestimonials: function() {
    const testimonialsHTML = `
      <section class="testimonials">
        <h2>What Our Participants Say</h2>
        <blockquote>
          <p>"CareConnect has been a game-changer for my NDIS experience. The team is professional, caring, and truly understands my needs."</p>
          <footer>— Sarah M., Melbourne</footer>
        </blockquote>
      </section>
    `;
    const testimonialsContainer = document.getElementById('testimonials');
    if (testimonialsContainer) {
      testimonialsContainer.innerHTML = testimonialsHTML;
    }
  },

  renderCTA: function() {
    const ctaHTML = `
      <section class="cta">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to learn more about our services.</p>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </section>
    `;
    const ctaContainer = document.getElementById('cta');
    if (ctaContainer) {
      ctaContainer.innerHTML = ctaHTML;
    }
  },
};