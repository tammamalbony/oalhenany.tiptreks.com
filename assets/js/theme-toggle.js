(function() {
  const btn = document.getElementById('theme-toggle-btn');
  if (!btn) return;
  const apply = (theme) => {
    document.body.classList.toggle('dark-mode', theme === 'dark');
    btn.innerHTML = theme === 'dark' ? '<i class="bi bi-sun"></i>' : '<i class="bi bi-moon"></i>';
  };
  let theme = localStorage.getItem('theme') || 'light';
  apply(theme);
  btn.addEventListener('click', () => {
    theme = theme === 'light' ? 'dark' : 'light';
    localStorage.setItem('theme', theme);
    apply(theme);
  });
})();
