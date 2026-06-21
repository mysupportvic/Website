/**
 * Footer Component
 * js/components/footer.js
 */

const Footer = {
  render: function(currentPage) {
    const footerHTML = `
      <footer class="site-footer">
        <div class="footer-inner">
          <div class="footer-grid">
            <div class="footer-brand">
              <span class="footer-brand-logo">CareConnect <span>NDIS</span></span>
              <p>Supporting Greater Melbourne participants with quality NDIS services including daily living, transport, and community participation.</p>
            </div>
            <div class="footer-col">
              <h5>Services</h5>
              <ul>
                <li><a href="#daily-living">Daily Living</a></li>
                <li><a href="#transport">Transport</a></li>
                <li><a href="#community">Community</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h5>Company</h5>
              <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/privacy">Privacy</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h5>Legal</h5>
              <ul>
                <li><a href="/terms">Terms of Service</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/accessibility">Accessibility</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-bottom">
            <p>&copy; 2026 CareConnect NDIS. All rights reserved.</p>
            <p>Registered NDIS Provider in Victoria</p>
          </div>
        </div>
      </footer>
    `;
    const footerContainer = document.getElementById('site-footer');
    if (footerContainer) {
      footerContainer.innerHTML = footerHTML;
    }
  },
};