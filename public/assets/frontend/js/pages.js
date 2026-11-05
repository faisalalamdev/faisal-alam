/* Page behaviours: projects filter + search, 404 page finder, 503 maintenance. */
(function () {
  const $ = (s, c = document) => c.querySelector(s);

  /* Projects list: cards are static HTML in the blade view; this only handles filter + search */
  const grid = $('[data-projects-grid]');
  if (grid) {
    const fbox = $('[data-projects-filters]'), searchBox = $('[data-projects-search]');
    const shown = $('[data-projects-shown]'), empty = $('[data-projects-empty]');
    let cur = 'All', q = '';
    const apply = () => {
      let n = 0;
      grid.querySelectorAll('[data-category]').forEach(c => {
        const ok = (cur === 'All' || c.dataset.category === cur) && (!q || c.dataset.search.includes(q));
        c.classList.toggle('hidden', !ok); if (ok) n++;
      });
      shown.textContent = n; empty.classList.toggle('hidden', n > 0);
    };
    fbox.addEventListener('click', (e) => {
      const b = e.target.closest('.filter'); if (!b) return; cur = b.dataset.filter;
      fbox.querySelectorAll('.filter').forEach(x => ['!bg-brand', '!text-bg', '!border-brand'].forEach(k => x.classList.toggle(k, x === b)));
      apply();
    });
    searchBox.addEventListener('input', (e) => { q = e.target.value.trim().toLowerCase(); apply(); });
  }
  /* 404: jump to a page by typing its name */
  const nfForm = $('[data-not-found-form]');
  if (nfForm) {
    const pages = JSON.parse(nfForm.dataset.pages), nfInput = $('[data-not-found-input]'), nfMessage = $('[data-not-found-message]');
    nfForm.addEventListener('submit', (e) => {
      e.preventDefault(); const q = nfInput.value.trim().toLowerCase();
      const key = Object.keys(pages).find(k => q && (k.indexOf(q) === 0 || q.indexOf(k) > -1));
      if (key) location.href = pages[key]; else nfMessage.textContent = `No page matches “${nfInput.value.trim()}”. Try Projects or Contact.`;
    });
  }

  /* 503 maintenance: animated steps + optional countdown (set data-eta on [data-maint-countdown]) */
  const steps = [...document.querySelectorAll('[data-maint-steps] .step')];
  if (steps.length) {
    let i = 0;
    const tick = () => {
      steps.forEach((s, k) => { s.classList.toggle('done', k < i); s.classList.toggle('active', k === i); });
      i = (i + 1) % (steps.length + 1);
      if (i === 0) steps.forEach(s => s.classList.remove('done', 'active'));
    };
    tick(); setInterval(tick, 1800);
  }
  const countdown = $('[data-maint-countdown]');
  const eta = countdown && countdown.dataset.eta ? new Date(countdown.dataset.eta).getTime() : 0;
  if (eta) {
    countdown.classList.remove('hidden');
    const set = (k, v) => { $('[data-maint-' + k + ']').textContent = v; };
    const run = () => {
      const s = Math.floor(Math.max(0, eta - Date.now()) / 1000);
      set('days', Math.floor(s / 86400)); set('hours', Math.floor(s % 86400 / 3600)); set('minutes', Math.floor(s % 3600 / 60)); set('seconds', s % 60);
    };
    run(); setInterval(run, 1000);
  }

})();