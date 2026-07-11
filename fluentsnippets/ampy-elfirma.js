/* ============================================================================
   Ampy — "Din elektriker för hela hemmet" (homepage block 2)
   FluentSnippets: JS snippet.  Type = "JS", run "Everywhere" (or only where the
   shortcode is used).

   ── This block needs NO JavaScript. ──
   Every interaction (whole-card link, photo zoom, scrim deepen, pill lift/brighten)
   is pure CSS (:hover / :focus-visible). The block renders and works fully with JS
   disabled. This file exists only to fill the CSS/PHP/JS three-file slot and to hold
   OPTIONAL progressive enhancements.

   If you want NOTHING, leave this snippet OFF — nothing breaks.

   Optional enhancement (off by default): a pointer-tracked glow. Uncomment to enable.
   It is guarded for reduced-motion and touch, and degrades to nothing if unsupported.
   ============================================================================ */

(function () {
  'use strict';

  /* --- OPTIONAL: pointer-tracked teal glow. Uncomment the block below to enable. ---
  try {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    if (window.matchMedia('(hover: none)').matches) return;
    document.querySelectorAll('.ampy-elfirma__card').forEach(function (card) {
      var raf = null, mx = '50%', my = '30%';
      card.addEventListener('pointermove', function (e) {
        var r = card.getBoundingClientRect();
        mx = (((e.clientX - r.left) / r.width) * 100).toFixed(1) + '%';
        my = (((e.clientY - r.top) / r.height) * 100).toFixed(1) + '%';
        if (raf) return;
        raf = requestAnimationFrame(function () {
          card.style.setProperty('--mx', mx);
          card.style.setProperty('--my', my);
          raf = null;
        });
      });
    });
  } catch (e) {}
  --- end optional enhancement --- */

})();
