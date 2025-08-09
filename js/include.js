// Simple client-side include loader for partial HTML files.
// Note: fetch of local files requires serving over HTTP (python -m http.server).
function loadHTML(selector, file) {
  var container = document.querySelector(selector);
  if (!container) return;
  fetch(file)
    .then(function(res){ if (!res.ok) throw new Error('Fetch failed'); return res.text(); })
    .then(function(html){
      container.innerHTML = html;
      // after injecting header we may attach events that other scripts depend on
      // dispatch a simple event
      document.dispatchEvent(new CustomEvent('partialLoaded', {detail:{selector:selector}}));
    })
    .catch(function(err){
      console.warn('Could not load', file, err);
    });
}

document.addEventListener('DOMContentLoaded', function(){
  loadHTML('#header-placeholder', 'partials/header.html');
  loadHTML('#footer-placeholder', 'partials/footer.html');
});
