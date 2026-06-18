document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.getElementById('nav-hamburger');
  const mobileMenu = document.getElementById('nav-mobile');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isOpen = mobileMenu.classList.toggle('open');
      this.setAttribute('aria-expanded', isOpen);
      this.querySelector('i').className = isOpen ? 'ti ti-x' : 'ti ti-menu-2';
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.querySelector('i').className = 'ti ti-menu-2';
      });
    });
  }

  const dropdownToggles = document.querySelectorAll('.has-dropdown[data-href]');
  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener('keydown', function (event) {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        window.location.href = this.getAttribute('data-href');
      }
    });
  });
});