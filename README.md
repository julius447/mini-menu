# Ampy — "En leverantör" (block 2)

Homepage product-picker + **conversion engine** for warm/returning visitors. **Evify layout** ×
**Hemsol interaction** × **Ampy quality**, elevated by a 6-designer critique panel into an asymmetric,
material, converting block.

## Live preview
- **The Ampy block:** [`index.html`](index.html) → https://julius447.github.io/mini-menu/
- **1:1 Evify reference clone:** [`evify-clone.html`](evify-clone.html)
- **Earlier Ampy versions:** [`prototype.html`](prototype.html) (v1 glass), git history (v2 midnight tiles)

## What makes it a masterpiece + conversion engine
- **Asymmetric hierarchy** — Elservice leads as a large hero tile, Laddbox + Batteri stack beside it.
  The layout encodes the commercial priority (service > laddbox > battery), so the eye has a focal path.
- **Premium material** — the midnight plates carry real depth: overhead light-gradient, corner vignette,
  fine grain (kills banding), a top rim-light hairline, a grounded navy shadow, teal temperature between
  the three. They read as designed art-plates, not empty placeholders.
- **Signature motion** — a teal glow that tracks the cursor across each tile (pointer-driven, rAF-throttled,
  disabled under reduced-motion & touch), plus the media zoom, scrim-deepen, and the arrow-chip that grows
  into a white "Se … →" pill. One wow, done well — no 3D tilt, no idle animation, no bounce.
- **Conversion band** — below the trio: *"Osäker på vad du behöver? Beskriv jobbet, så återkommer en behörig
  elektriker med ett fast pris."* + **Få offert** (primary) + **Ring 010-265 79 79**. The undecided warm
  visitor now has a committing next step, not just three lateral doors.
- **Honest trust row** — behöriga egna elektriker · fast pris innan vi börjar · ROT draget direkt · svar
  oftast inom en arbetsdag. All provenance-backed; the candour-clean substitute for the banned "20 000
  installationer / 5.0" proof.
- **Type** — teal eyebrow, display leading 1.06, `text-wrap:balance`, tile sub-lines, tuned tracking.
- **Mobile** — hero stays largest; the CTA pill is **persistent** (never hover-gated); backdrop-blur and
  `will-change` dropped on touch; safe-area padding; lighter title wrap.
- **A11y** — semantic `<ul>/<li>`, whole-tile links, focus parity with hover, AA contrast, forced-colors
  outline, reduced-motion safe.

## Candour gate (held)
No "20 000 installationer", no "är bäst", no ratings, no urgency/scarcity, no invented numbers, no "hela
Sverige". Teal is the only accent; green/mint live only in the aurora. Battery copy is self-consumption /
"vi räknar hederligt" — survives stödtjänster=0 AND effektavgift=0.

## Open `[GAP]` before go-live
1. **Photos.** Tiles use on-brand midnight-aurora plates as placeholders (the `.tile__media` span). Supply
   three rights-cleared photos (elservice / laddbox / batteri); swap the span for `<img class="tile__media">`
   — the zoom, scrim, and glow already work.
2. **URLs:** `/offert/` (confirm the offert route), `/elservice/`, `/laddboxar/` (live is `/laddbox/`),
   `/batterilagring/` (or `/solcellsbatterier/`). Phone `010-265 79 79` is verified [FACT].
3. **Copy sign-off:** eyebrow "Hela hemmets el", header, tile sub-lines, trust row, and the CTA-band line.
4. **Instrumentation** (optional): consent-gated funnel `block_view → tile_select → cta_click → lead`.

*Reference studied: `Picasso/components/mini-menu` (Evify + Hemsol). Ampy tokens, Ampy voice, candour gate.*
