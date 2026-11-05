/* Shared layout: theme toggle, mobile menu. Loaded in <head>. */
(function () {
  const root = document.documentElement;
  window.SITE = { email: 'faisal.alam.dev@gmail.com', phone: '+880 1624 823163', wa: '8801624823163',
    github: 'https://github.com/faisalalamdev', linkedin: 'https://linkedin.com/in/faisalalamdev', web: 'https://faisalalamdev.com' };
  try { root.classList.toggle('dark', localStorage.getItem('theme') !== 'light'); } catch (e) { root.classList.add('dark'); }

  function init() {
    const sync = () => { const d = root.classList.contains('dark');
      document.querySelectorAll('[data-ic="sun"]').forEach(e => e.classList.toggle('hidden', !d));
      document.querySelectorAll('[data-ic="moon"]').forEach(e => e.classList.toggle('hidden', d)); };
    sync();
    document.querySelectorAll('[data-theme-toggle]').forEach(b => b.addEventListener('click', () => {
      root.classList.toggle('dark'); try { localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light'); } catch (e) {} sync(); }));
    const mb = document.querySelector('[data-menu-button]'), mn = document.querySelector('[data-mobile-nav]');
    if (mb && mn) mb.addEventListener('click', () => mn.classList.toggle('open'));
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init); else init();
})();
