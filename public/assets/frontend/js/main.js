/* Subtle effects: fade-in on scroll, skill bars, hover-scroll project previews, contact form. */
(function () {
  const $ = (s, c = document) => c.querySelector(s);
  const $$ = (s, c = document) => [...c.querySelectorAll(s)];

  const io = new IntersectionObserver((es) => es.forEach(e => {
    if (!e.isIntersecting) return;
    e.target.classList.add('in');
    $$('.bar > span', e.target).forEach(b => b.style.width = b.dataset.level + '%');
    io.unobserve(e.target);
  }), { threshold: 0.1 });
  const observe = (root = document) => $$('.reveal', root).forEach(el => io.observe(el));

  /* hover-scroll: the page screenshot scrolls from top to bottom while hovering */
  function initShots(root = document) {
    $$('.shot-view', root).forEach(view => {
      if (view.dataset.bound) return; view.dataset.bound = 1;
      const img = $('img', view); if (!img) return;
      const host = view.closest('[data-shot-host]') || view;
      const go = () => {
        const shift = img.offsetHeight - view.offsetHeight; if (shift <= 0) return;
        view.style.setProperty('--dur', Math.min(Math.max(shift / 240, 3), 12) + 's');
        view.classList.add('scrolling'); img.style.transform = `translateY(-${shift}px)`;
      };
      const back = () => { view.classList.remove('scrolling'); img.style.transform = 'translateY(0)'; };
      host.addEventListener('mouseenter', go); host.addEventListener('mouseleave', back);
      host.addEventListener('touchstart', () => { view.classList.contains('scrolling') ? back() : go(); }, { passive: true });
      host.addEventListener('focusin', go); host.addEventListener('focusout', back);
    });
  }

  const form = $('#contactForm');
  if (form) form.addEventListener('submit', (e) => {
    e.preventDefault(); const f = new FormData(form);
    const body = `${f.get('message')}\n\n— ${f.get('name')} (${f.get('email')})${f.get('budget') ? '\nBudget: ' + f.get('budget') : ''}`;
    location.href = `mailto:${window.SITE.email}?subject=${encodeURIComponent(f.get('subject') || 'Project inquiry')}&body=${encodeURIComponent(body)}`;
    const n = $('#formNote'); if (n) n.textContent = 'Opening your email app…';
  });

  window.Fx = { observe, initShots };
  const run = () => { observe(); initShots(); };
  document.addEventListener('DOMContentLoaded', run);
  if (document.readyState !== 'loading') run();
})();
