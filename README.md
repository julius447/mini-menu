# Ampy — "En leverantör" (block 2)

Homepage product-picker that sits directly under Hero 1. **Evify layout** (centred header + three
equal square tiles, same 30px gutters) × **Hemsol interaction** (whole tile clickable, media zooms on
hover, a small arrow that grows into a "Se …" button) × **Ampy quality** (real `ap*` tokens, Outfit,
midnight + teal + aurora, candour-clean voice).

## Live preview
- **The Ampy block:** [`index.html`](index.html) → https://julius447.github.io/mini-menu/
- **1:1 Evify reference clone:** [`evify-clone.html`](evify-clone.html)
- **Ampy v1 (light glass cards, superseded):** [`prototype.html`](prototype.html)

## The interaction (what you asked for)
- **Default:** each tile shows its label (Elservice · Laddbox · Batteri) + a small arrow chip — the "liten
  pil" that signals it's clickable.
- **Hover / keyboard focus:** the whole tile lifts, the media plate zooms (Hemsol), the scrim deepens, and
  the arrow chip **grows into a white pill** — "Se elservice →" / "Se laddboxar →" / "Se batterier →".
  No persistent "Läs mer", no "Köp"; the CTA is revealed, not shouted.
- One signature device, done well. Verified desktop + mobile, hover + focus, reduced-motion + forced-colors.

## Ampy quality (vs the Evify clone)
- **Tokens:** teal `#00a991`, midnight `#090b32`, Outfit, the aurora surface. No Evify blue, no Montserrat.
- **Voice (candour gate):** the Evify hype does **not** carry over. No "över 20 000 installationer", no
  "är bäst", no invented number, no superlative, no "!". The lead sells scope honestly instead.
- **A11y:** semantic `<ul>/<li>`, whole-tile link, focus parity with hover, AA contrast, forced-colors
  outline, reduced-motion safe.

## Open `[GAP]` before go-live
1. **Photos.** The tiles currently use on-brand **midnight-aurora plates** (a `.tile__media` gradient layer)
   as placeholders — Ampy has no rights-cleared install-photo library yet. Supply three rights-cleared
   photos (elservice / laddbox / batteri) and swap the `.tile__media` span for `<img class="tile__media">`;
   the zoom + scrim already work.
2. **URLs:** `/elservice/` (parent landing unconfirmed — `/elservice/elcentral/` + `/elinstallation/` exist),
   `/laddboxar/` (live URL is `/laddbox/` singular), `/batterilagring/` (verified live; or `/solcellsbatterier/`
   for the comparison hub — confirm which the "Batteri" tile should point to).
3. **Copy sign-off:** header "En leverantör, oavsett vad hemmet behöver." + the lead, and the tile CTAs.

*Reference studied: `Picasso/components/mini-menu` (Evify + Hemsol). Ampy tokens, Ampy voice, candour gate.*
