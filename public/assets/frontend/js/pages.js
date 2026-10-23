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

  /* Projects list */
  const list = $('#projectList');
  if (list) {
    const cats = ['All', ...new Set(P().map(p => p.category))];
    const fbox = $('#filters'); let cur = 'All', q = '';
    fbox.innerHTML = cats.map((c, i) => `<button class="btn btn-ghost !py-2 !px-5 text-sm filter ${i ? '' : '!bg-brand !text-bg !border-brand'}" data-f="${esc(c)}">${esc(c)} <span class="font-mono text-xs opacity-60">${c === 'All' ? P().length : P().filter(p => p.category === c).length}</span></button>`).join('');
    list.innerHTML = P().map(projectCard).join(''); refresh(list);
    const apply = () => {
      let n = 0;
      list.querySelectorAll('[data-cat]').forEach(c => { const ok = (cur === 'All' || c.dataset.cat === cur) && (!q || c.dataset.title.includes(q)); c.classList.toggle('hidden', !ok); if (ok) n++; });
      $('#shown').textContent = n; $('#empty').classList.toggle('hidden', n > 0);
    };
    fbox.addEventListener('click', (e) => { const b = e.target.closest('.filter'); if (!b) return; cur = b.dataset.f;
      fbox.querySelectorAll('.filter').forEach(x => x.classList.toggle('!bg-brand', x === b)); fbox.querySelectorAll('.filter').forEach(x => { x.classList.toggle('!text-bg', x === b); x.classList.toggle('!border-brand', x === b); }); apply(); });
    $('#search').addEventListener('input', (e) => { q = e.target.value.trim().toLowerCase(); apply(); });
    apply();
  }

  /* Project detail */
  const det = $('#projectDetail');
  if (det) {
    const slug = new URLSearchParams(location.search).get('slug');
    const idx = P().findIndex(p => p.slug === slug); const p = P()[idx >= 0 ? idx : 0];
    if (!p) { det.innerHTML = '<p class="text-muted">No projects yet.</p>'; } else {
      document.title = `${p.title} — Faisal Alam`;
      const prev = P()[(idx - 1 + P().length) % P().length], next = P()[(idx + 1) % P().length];
      det.innerHTML = `
      <a href="projects.html" class="inline-flex items-center gap-2 text-sm text-muted hover:text-brand transition mb-8">← All projects</a>
      <div class="flex flex-wrap gap-2 mb-5 reveal"><span class="chip cat-${esc(p.category.toLowerCase())}">${esc(p.category)}</span><span class="chip chip-n">${esc(p.industry)}</span></div>
      <h1 class="h1">${esc(p.title)}</h1>
      <p class="reveal text-muted text-base max-w-2xl mt-4">${esc(p.summary)}</p>
      <div class="flex flex-wrap gap-3 mt-8 reveal"><a class="btn btn-primary" target="_blank" rel="noopener" href="${esc(p.url)}"><span>Visit live site</span>${arrow}</a><a class="btn btn-ghost" href="contact.html">Start a similar project</a></div>
      <div class="mt-10 reveal"><div><div class="shot shadow-soft" data-shot-host><div class="shot-bar"><i></i><i></i><i></i><span>${esc(host(p.url))}</span></div>
        <div class="shot-view tall"><img src="${esc(p.image || NOIMG)}" onerror="this.onerror=null;this.src='${NOIMG}'" alt="${esc(p.title)} full page preview"><span class="shot-hint">hover to scroll ↓</span></div></div></div></div>
      <div class="grid md:grid-cols-[1.6fr_1fr] gap-10 mt-16">
        <div class="reveal"><p class="eyebrow mb-3">// Overview</p><p class="text-base text-muted">${esc(p.description)}</p>
          <p class="eyebrow mt-10 mb-4">// What's inside</p><ul class="grid sm:grid-cols-2 gap-3">${p.features.map(f => `<li class="card !rounded-2xl px-4 py-3 text-sm flex gap-3 items-start"><span class="text-brand mt-0.5">✦</span>${esc(f)}</li>`).join('')}</ul></div>
        <aside class="card p-6 h-fit reveal" data-reveal="right"><dl class="space-y-5 text-sm">
          <div><dt class="font-mono text-xs text-muted">ROLE</dt><dd class="mt-1">${esc(p.role)}</dd></div>
          <div><dt class="font-mono text-xs text-muted">INDUSTRY</dt><dd class="mt-1">${esc(p.industry)}</dd></div>
          <div><dt class="font-mono text-xs text-muted">LIVE SITE</dt><dd class="mt-1"><a class="text-brand hover:underline break-all" target="_blank" rel="noopener" href="${esc(p.url)}">${esc(host(p.url))}</a></dd></div>
          <div><dt class="font-mono text-xs text-muted mb-2">STACK</dt><dd class="flex flex-wrap gap-2 chips">${p.stack.map(s => `<span class="chip">${esc(s)}</span>`).join('')}</dd></div></dl></aside>
      </div>
      <div class="grid sm:grid-cols-2 gap-4 mt-14">
        <a href="project.html?slug=${encodeURIComponent(prev.slug)}" class="card spot p-6 reveal"><p class="font-mono text-xs text-muted">← PREVIOUS</p><p class="text-lg font-semibold mt-2">${esc(prev.title)}</p></a>
        <a href="project.html?slug=${encodeURIComponent(next.slug)}" class="card spot p-6 text-right reveal"><p class="font-mono text-xs text-muted">NEXT →</p><p class="text-lg font-semibold mt-2">${esc(next.title)}</p></a></div>`;
      refresh(det);
    }
  }

  /* Blog list */
  const bl = $('#blogList');
  if (bl) {
    const posts = window.POSTS || [];
    bl.innerHTML = posts.map((p, i) => `
      <a href="post.html?slug=${encodeURIComponent(p.slug)}" class="card spot group block reveal ${i === 0 ? 'md:col-span-2 md:grid md:grid-cols-2' : ''}" style="--d:${(i % 2) * 90}ms">
        <div class="overflow-hidden ${i === 0 ? 'h-full' : ''}"><img class="w-full ${i === 0 ? 'h-full object-cover' : 'aspect-[16/9] object-cover'} group-hover:scale-105 transition duration-700" src="${esc(p.image || NOIMG)}" onerror="this.onerror=null;this.src='${NOIMG}'" alt="${esc(p.title)}" loading="lazy"></div>
        <div class="p-7 flex flex-col justify-center"><div class="flex items-center gap-3 mb-3"><span class="chip">${esc(p.kind)}</span><span class="text-xs font-mono text-muted">${esc(p.date)} · ${esc(p.read)} read</span></div>
          <h3 class="${i === 0 ? 'text-2xl' : 'text-lg'} font-semibold tracking-tight">${esc(p.title)}</h3><p class="text-muted mt-3 text-sm">${esc(p.excerpt)}</p>
          <span class="mt-5 inline-flex items-center gap-2 text-brand text-sm font-medium">Read article ${arrow}</span></div></a>`).join('');
    refresh(bl);
  }

  /* Blog post */
  const pd = $('#postDetail');
  if (pd) {
    const posts = window.POSTS || []; const slug = new URLSearchParams(location.search).get('slug');
    const p = posts.find(x => x.slug === slug) || posts[0];
    if (p) {
      document.title = `${p.title} — Faisal Alam`;
      const blocks = p.body.map(b => b.t === 'h' ? `<h2>${esc(b.c)}</h2>` : b.t === 'ul' ? `<ul>${b.c.map(x => `<li>${esc(x)}</li>`).join('')}</ul>` : b.t === 'code' ? `<pre><code>${esc(b.c)}</code></pre>` : `<p>${esc(b.c)}</p>`).join('');
      const others = posts.filter(x => x.slug !== p.slug).slice(0, 2);
      pd.innerHTML = `
      <a href="blog.html" class="inline-flex items-center gap-2 text-sm text-muted hover:text-brand transition mb-8">← All articles</a>
      <div class="flex items-center gap-3 mb-5 reveal"><span class="chip">${esc(p.kind)}</span><span class="text-xs font-mono text-muted">${esc(p.date)} · ${esc(p.read)} read</span></div>
      <h1 class="h1">${esc(p.title)}</h1>
      <img class="reveal w-full rounded-3xl border border-line mt-10 aspect-[16/8] object-cover" src="${esc(p.image || NOIMG)}" onerror="this.onerror=null;this.src='${NOIMG}'" alt="${esc(p.title)}">
      <article class="prose reveal mt-10 max-w-2xl mx-auto">${blocks}</article>
      <div class="max-w-2xl mx-auto mt-16 card p-6 reveal flex flex-wrap items-center justify-between gap-4"><p class="font-semibold">Need help with a project like this?</p><a href="contact.html" class="btn btn-primary"><span>Let's talk</span></a></div>
      <div class="grid sm:grid-cols-2 gap-4 mt-16">${others.map(o => `<a href="post.html?slug=${encodeURIComponent(o.slug)}" class="card spot p-6 reveal"><p class="font-mono text-xs text-muted">${esc(o.kind).toUpperCase()}</p><p class="text-base font-semibold mt-2">${esc(o.title)}</p></a>`).join('')}</div>`;
      refresh(pd);
    }
  }
})();
