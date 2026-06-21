/**
 * Participants Page
 * js/pages/participants.js
 */

const ParticipantsPage = {
  init: function() {
    const participantsContent = document.getElementById('participants-content');
    if (participantsContent) {
      participantsContent.innerHTML = `
        <section class="page-section">
          <h1>For Participants</h1>
          <p>Information and resources specifically designed for NDIS participants.</p>
          <div class="content-grid">
            <div class="card">
              <h3>Getting Started</h3>
              <p>Learn how to begin your NDIS journey with CareConnect.</p>
            </div>
            <div class="card">
              <h3>Support Options</h3>
              <p>Explore the range of support services we offer.</p>
            </div>
            <div class="card">
              <h3>FAQ</h3>
              <p>Common questions and answers about our services.</p>
            </div>
          </div>
        </section>
      `;
    }
  },
};