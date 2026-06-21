/**
 * Budget Tracking Page
 * js/pages/budget-tracking.js
 */

const BudgetTrackingPage = {
  init: function() {
    const budgetContent = document.getElementById('budget-tracking-content');
    if (budgetContent) {
      budgetContent.innerHTML = `
        <section class="page-section">
          <h1>Budget Tracking</h1>
          <p>Keep track of your NDIS plan expenditure and remaining funding.</p>
          <div class="content-grid">
            <div class="card">
              <h3>Real-time Tracking</h3>
              <p>Monitor your budget utilization in real-time.</p>
            </div>
            <div class="card">
              <h3>Spending Reports</h3>
              <p>Detailed reports on your service spending by category.</p>
            </div>
            <div class="card">
              <h3>Planning Tools</h3>
              <p>Tools to forecast and plan your future spending.</p>
            </div>
          </div>
        </section>
      `;
    }
  },
};
