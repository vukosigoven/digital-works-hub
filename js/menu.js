// Handles the mobile menu toggle and accessibility features
document.addEventListener('partialLoaded', function(e){
  if (e.detail && e.detail.selector === '#header-placeholder') {
    initMenu();
  }
});

// If header is already present (rare), init immediately
document.addEventListener('DOMContentLoaded', function(){
  setTimeout(initMenu, 300);
});

function initMenu(){
  var toggle = document.getElementById('menuToggle');
  var nav = document.getElementById('mainNav');
  if (!toggle || !nav) return;

  // Create mobile wrapper for nav if not already
  nav.classList.add('js-nav');

  toggle.addEventListener('click', function(){
    var expanded = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', String(!expanded));
    nav.classList.toggle('open');
    document.body.classList.toggle('nav-open');
  });

  // Close the menu when clicking outside on small screens
  document.addEventListener('click', function(ev){
    if (!nav.classList.contains('open')) return;
    var withinNav = ev.target.closest && ev.target.closest('.js-nav');
    var isToggle = ev.target.closest && ev.target.closest('#menuToggle');
    if (!withinNav && !isToggle) {
      nav.classList.remove('open');
      toggle.setAttribute('aria-expanded','false');
      document.body.classList.remove('nav-open');
    }
  });

  // Keyboard support: Esc to close
  document.addEventListener('keydown', function(ev){
    if (ev.key === 'Escape' && nav.classList.contains('open')) {
      nav.classList.remove('open');
      toggle.setAttribute('aria-expanded','false');
      document.body.classList.remove('nav-open');
    }
  });
}
