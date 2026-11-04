/* Renders data-driven sections: featured projects, projects list, project detail, blog list, blog post. */
(function () {
  const $ = (s, c = document) => c.querySelector(s);
  const P = () => window.PROJECTS || [];
  const NOIMG = 'assets/images/no-image.svg'; /* dummy image when a project/blog image is missing or broken */
  const esc = (s) => String(s).replace(/[&<>"]/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[c]));
  const host = (u) => u.replace(/^https?:\/\//, '').replace(/\/$/, '');
  const arrow = '<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9"/></svg>';

  function projectCard(p, i) {
    return `
    <a href="project.html?slug=${encodeURIComponent(p.slug)}" data-shot-host data-cat="${esc(p.category)}" data-title="${esc((p.title + ' ' + p.industry + ' ' + p.summary + ' ' + p.stack.join(' ')).toLowerCase())}"
       class="card spot group block reveal hover:-translate-y-1" style="--d:${(i % 3) * 90}ms">
      <div class="p-3 pb-0"><div class="shot"><div class="shot-bar"><i></i><i></i><i></i><span>${esc(host(p.url))}</span></div>
        <div class="shot-view"><img src="${esc(p.image || NOIMG)}" onerror="this.onerror=null;this.src='${NOIMG}'" alt="${esc(p.title)} website preview" loading="lazy"><span class="shot-hint">hover to scroll ↓</span></div></div></div>
      <div class="p-6">
        <div class="flex items-center justify-between gap-3 mb-3"><span class="chip cat-${esc(p.category.toLowerCase())}">${esc(p.category)}</span><span class="text-xs font-mono text-muted">${esc(p.industry)}</span></div>
        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">${esc(p.title)}<span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">${arrow}</span></h3>
        <p class="text-muted text-sm mt-2">${esc(p.summary)}</p>
      </div>
    </a>`;
  }
  const refresh = (root) => { if (window.Fx) { Fx.observe(root); Fx.initShots(root); } };

  /* Home: featured */
  const feat = $('[data-render="featured"]');
  if (feat) { feat.innerHTML = P().filter(p => p.featured).slice(0, 4).map(projectCard).join(''); refresh(feat); }
  document.querySelectorAll('[data-project-count]').forEach(e => e.textContent = '38+');

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
})();