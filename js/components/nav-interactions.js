document.addEventListener('DOMContentLoaded', () => {
  console.log('Nav interactions loaded');
  
  const hamburger = document.getElementById('nav-hamburger');
  const mobileMenu = document.getElementById('nav-mobile');
  const htmlElement = document.documentElement;

  console.log('Hamburger:', hamburger);
  console.log('Mobile menu:', mobileMenu);

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isOpen = mobileMenu.classList.toggle('open');
      this.setAttribute('aria-expanded', isOpen);
      this.querySelector('i').className = isOpen ? 'ti ti-x' : 'ti ti-menu-2';
      
      // Lock/unlock body scroll on iOS
      if (isOpen) {
        htmlElement.classList.add('nav-open');
      } else {
        htmlElement.classList.remove('nav-open');
      }
    });
  }

  // Mobile dropdown toggles
  const dropdownToggles = document.querySelectorAll('.nav-mobile-dropdown-toggle');
  console.log('Found dropdown toggles:', dropdownToggles.length);
  
  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      console.log('Dropdown toggle clicked');
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !isExpanded);
      const menu = this.nextElementSibling;
      console.log('Next sibling:', menu);
      if (menu) {
        menu.classList.toggle('open');
      }
    });
  });

  // Close menu when a submenu link or regular link is clicked
  const allNavLinks = document.querySelectorAll('.nav-mobile a, .nav-mobile-dropdown-menu a');
  allNavLinks.forEach((link) => {
    link.addEventListener('click', () => {
      mobileMenu.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
      hamburger.querySelector('i').className = 'ti ti-menu-2';
      htmlElement.classList.remove('nav-open');
      
      // Close all dropdowns
      dropdownToggles.forEach((toggle) => {
        toggle.setAttribute('aria-expanded', 'false');
        toggle.nextElementSibling?.classList.remove('open');
      });
    });
  });

  const desktopDropdownToggles = document.querySelectorAll('.has-dropdown[data-href]');
  desktopDropdownToggles.forEach((toggle) => {
    toggle.addEventListener('keydown', function (event) {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        window.location.href = this.getAttribute('data-href');
      }
    });
  });
});