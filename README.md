# Ampy — mini-menu (block 2)

The homepage **product-picker block** that sits directly under Hero 1, replacing the small
icon-row. Three cards: **Elinstallationer · Laddbox · Solcellsbatteri**. Light glass cards on the
offwhite surface, a single signature device (teal top-edge draw on hover), built on real Ampy
tokens, candour-gated, AA-clean.

## Live preview
- **The block (with a compact Hero 1 above it, to show the continuation):** [`index.html`](index.html)
- **Bricks parity render (scoped `.ampy-mm`, verified identical):** [`bricks/preview/index.html`](bricks/preview/index.html)

> Rendered and iterated on desktop, tablet, and mobile via ampy-syn; reviewed by a 6-lens swarm
> (CMO · copy/röst · design/tokens · UX/a11y · spacing · UI). Candour gate: 0 blocks.

## Design
- **Direction A** (light glass trio) — chosen from 3 divergent directions.
- **Glyph language, not photos** — Hero 1 is geometric/token-driven and there is no rights-cleared
  photo library, so glyphs are the gap-free continuation.
- **One signature:** the teal top-edge that draws across on hover (+ lift + teal-glow).
- Responsive: 3-up desktop → horizontal list-rows (≤880) → vertical cards (≤420). CTAs bottom-align.
  AA contrast verified, semantic `<ul>/<li>`, focus-visible + forced-colors, reduced-motion safe.

## Bricks deliverable
`bricks/` — paste into WordPress/Bricks in the visste-du-att format:
- `mini-menu.bricks.json` — paste-JSON (Section + Code element; CSS in `_cssCustom`)
- `mini-menu.css` — the CSS, standalone, scoped under `.ampy-mm` with token fallbacks
- `mini-menu.snippet.html` — the markup
- `preview/index.html` — parity render
- `README.md` — paste guide + the open `[GAP]` list

## Open `[GAP]` before go-live
1. `/laddboxar/` — live URL in the data layer is `/laddbox/` (singular); confirm which.
2. `/elservice/` — parent landing unverified (`/elservice/elcentral/` + `/elinstallation/` exist); confirm.
3. `/solcellsbatterier/` — ✅ verified, no action.
4. Copy sign-off (eyebrow "Hela hemmet", h2, card descs — all candour-clean).

*Reference/inspiration studied: `Picasso/components/mini-menu` (evify + hemsol). Nothing copied — Ampy
tokens, Ampy voice, candour gate throughout.*
