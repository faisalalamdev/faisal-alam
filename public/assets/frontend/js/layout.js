/* Shared layout: theme, header, footer. Loaded in <head>. */
(function () {
  const root = document.documentElement;
  const SITE = { email: 'faisal.alam.dev@gmail.com', phone: '+880 1624 823163', wa: '8801624823163',
    github: 'https://github.com/faisalalamdev', linkedin: 'https://linkedin.com/in/faisalalamdev', web: 'https://faisalalamdev.com' };
  window.SITE = SITE;
  try { root.classList.toggle('dark', localStorage.getItem('theme') !== 'light'); } catch (e) { root.classList.add('dark'); }

  const NAV = [['index.html', 'Home'], ['about.html', 'About'], ['services.html', 'Services'], ['projects.html', 'Projects'], ['experience.html', 'Experience'], ['blog.html', 'Blog'], ['contact.html', 'Contact']];
  const cur = (location.pathname.split('/').pop() || 'index.html').toLowerCase();
  const act = (h) => (h === cur || (cur === 'project.html' && h === 'projects.html') || (cur === 'post.html' && h === 'blog.html')) ? 'active' : '';
  const sun = '<svg data-ic="sun" class="w-[17px] h-[17px]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"/><path stroke-linecap="round" d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>';
  const moon = '<svg data-ic="moon" class="w-[17px] h-[17px]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg>';

  function build() {
    const h = document.getElementById('site-header');
    if (h) h.outerHTML = `
      <header id="siteHeader"><nav class="max-w-6xl mx-auto px-5 h-20 flex items-center justify-between gap-4">
        <a href="index.html" class="flex items-center" aria-label="Faisal Alam — Home"><img src="assets/images/logo-wordmark.png" alt="Faisal Alam — Full Stack Developer" class="logo-light h-11 sm:h-16 w-auto"><img src="assets/images/logo-wordmark-light.png" alt="Faisal Alam — Full Stack Developer" class="logo-dark h-11 sm:h-16 w-auto"></a>
        <div class="hidden lg:flex items-center gap-1">${NAV.map(([u, t]) => `<a class="navlink ${act(u)}" href="${u}">${t}</a>`).join('')}</div>
        <div class="flex items-center gap-2">
          <button class="icon-btn" data-theme-toggle aria-label="Toggle theme">${sun}${moon}</button>
          <a href="contact.html" class="btn btn-primary hidden sm:inline-flex !py-2">Hire me</a>
          <button class="icon-btn lg:hidden" id="menuBtn" aria-label="Menu"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg></button>
        </div></nav>
        <div id="mobileNav">${NAV.map(([u, t]) => `<a href="${u}" class="${act(u) ? 'text-brand' : ''}">${t}</a>`).join('')}</div></header>`;

    const f = document.getElementById('site-footer');
    if (f) f.outerHTML = `
      <footer class="site-footer mt-16"><div class="max-w-6xl mx-auto px-5 py-6 flex flex-col md:flex-row items-center justify-between gap-3 text-sm text-muted">
        <p class="flex items-center gap-2"><img src="assets/images/logo-icon.png" alt="" class="w-8 h-8 rounded-md">© <span id="year"></span> Faisal Alam · Full Stack Web Developer</p>
        <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-1">${NAV.slice(0, 6).map(([u, t]) => `<a class="hover:text-brand transition" href="${u}">${t}</a>`).join('')}</div>
        <div class="flex items-center gap-4"><a class="hover:text-brand transition" target="_blank" rel="noopener" href="${SITE.github}">GitHub</a><a class="hover:text-brand transition" target="_blank" rel="noopener" href="${SITE.linkedin}">LinkedIn</a><a class="hover:text-brand transition" href="mailto:${SITE.email}">Email</a></div>
      </div></footer>`;
    const y = document.getElementById('year'); if (y) y.textContent = new Date().getFullYear();

    const sync = () => { const d = root.classList.contains('dark');
      document.querySelectorAll('[data-ic="sun"]').forEach(e => e.classList.toggle('hidden', !d));
      document.querySelectorAll('[data-ic="moon"]').forEach(e => e.classList.toggle('hidden', d)); };
    sync();
    document.querySelectorAll('[data-theme-toggle]').forEach(b => b.addEventListener('click', () => {
      root.classList.toggle('dark'); try { localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light'); } catch (e) {} sync(); }));
    const mb = document.getElementById('menuBtn'), mn = document.getElementById('mobileNav');
    if (mb) mb.addEventListener('click', () => mn.classList.toggle('open'));
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', build); else build();
})();
