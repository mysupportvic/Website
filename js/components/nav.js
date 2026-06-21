/**
 * Navigation Component
 * js/components/nav.js
 */

const Nav = {
  render: function(currentPage) {
    const navHTML = `
      <nav class="site-nav">
        <div class="nav-inner">
          <div class="nav-brand">
            <a href="/">CareConnect <span>NDIS</span></a>
          </div>
          <ul class="nav-menu">
            <li><a href="/" ${currentPage === 'index.html' ? 'class="active"' : ''}>Home</a></li>
            <li><a href="/demo" ${currentPage === 'demo' ? 'class="active"' : ''}>Demo</a></li>
            <li><a href="/participants" ${currentPage === 'participants' ? 'class="active"' : ''}>Participants</a></li>
            <li><a href="/service" ${currentPage === 'plan-optimization' ? 'class="active"' : ''}>Plan Optimization</a></li>
            <li><a href="/service/budget-tracking" ${currentPage === 'service/budget-tracking' ? 'class="active"' : ''}>Budget Tracking</a></li>
          </ul>
        </div>
      </nav>
    `;
    const navContainer = document.getElementById('site-nav');
    if (navContainer) {
      navContainer.innerHTML = navHTML;
    }
  },
};