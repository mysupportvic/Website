document.addEventListener('DOMContentLoaded', () => {
  const storageKey = 'preferredLanguage';
  const gate = document.querySelector('[data-language-gate]');

  if (!gate) {
    return;
  }

  const optionButtons = gate.querySelectorAll('[data-language-option]');
  const switchButtons = document.querySelectorAll('[data-language-switcher]');
  const savedLanguage = window.localStorage.getItem(storageKey);

  const redirectToLanguageRoute = (languageCode) => {
    const routesForLanguage = LANGUAGE_ROUTES?.[languageCode];
    const targetRoute = routesForLanguage?.[CURRENT_ROUTE_KEY] || routesForLanguage?.home;

    if (!targetRoute) {
      closeGate();
      return;
    }

    window.localStorage.setItem(storageKey, languageCode);
    window.location.replace(targetRoute);
  };

  const closeGate = () => {
    gate.hidden = true;
    document.body.classList.remove('language-gate-open');
  };

  const openGate = (languageCode = null) => {
    gate.hidden = false;
    document.body.classList.add('language-gate-open');
    applySelection(languageCode);
  };

  const applySelection = (languageCode) => {
    optionButtons.forEach((button) => {
      const isSelected = button.getAttribute('data-language-option') === languageCode;
      button.setAttribute('aria-pressed', isSelected ? 'true' : 'false');
    });
  };

  if (!IS_LANGUAGE_LANDING) {
    window.localStorage.setItem(storageKey, ACTIVE_LANGUAGE);
    document.documentElement.lang = ACTIVE_LANGUAGE === 'vn' ? 'vi' : 'en';
    applySelection(ACTIVE_LANGUAGE);
    closeGate();
  } else {
    openGate(savedLanguage && LANGUAGE_ROUTES?.[savedLanguage] ? savedLanguage : null);
  }

  switchButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const fallbackLanguage = document.body.dataset.language === 'vn' ? 'vn' : 'en';
      openGate(savedLanguage && LANGUAGE_ROUTES?.[savedLanguage] ? savedLanguage : fallbackLanguage);
    });
  });

  optionButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const languageCode = button.getAttribute('data-language-option');
      if (!languageCode) {
        return;
      }

      redirectToLanguageRoute(languageCode);
    });
  });
});