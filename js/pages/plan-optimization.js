/**
 * Plan Optimization Page
 * js/pages/plan-optimization.js
 */

const PlanOptimizationPage = {
  init: function() {
    const planOptContent = document.getElementById('plan-optimization-content');
    if (planOptContent) {
      planOptContent.innerHTML = `
        <section class="page-section">
          <h1>Plan Optimization</h1>
          <p>Maximize the value of your NDIS plan with our optimization strategies.</p>
          <div class="content-grid">
            <div class="card">
              <h3>Budget Planning</h3>
              <p>Strategic allocation of your NDIS funding to best meet your goals.</p>
            </div>
            <div class="card">
              <h3>Service Selection</h3>
              <p>Choose the services that align with your priorities and needs.</p>
            </div>
            <div class="card">
              <h3>Review & Adjust</h3>
              <p>Regular plan reviews to ensure your support meets your evolving needs.</p>
            </div>
          </div>
        </section>
      `;
    }
  },
};