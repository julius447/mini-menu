# Ampy — "En elfirma för hela hemmet" (block 2)

Homepage product picker: **Evify's exact layout** (centred heading + 3 equal square cards, same sizing,
placement and 30px gutters, identical on mobile) with **Hemsol's hover** (whole card is a link; on hover
the photo zooms, the overlay deepens, the CTA lifts) — dressed in **Ampy** skin (Outfit, teal CTA, candour
voice).

## Live preview
- **This version:** [`index.html`](index.html) → https://julius447.github.io/mini-menu/
- **1:1 Evify reference clone:** [`evify-clone.html`](evify-clone.html)
- **Earlier explorations:** [`masterpiece.html`](masterpiece.html) (asymmetric conversion block), `prototype.html`

## Cards (order → URL → photo)
| # | Card | URL | Photo file |
|---|---|---|---|
| 1 | **Elservice** | `/elservice/` | `img/elservice.jpg` |
| 2 | **Laddbox** | `/laddboxar/` | `img/laddbox.jpg` |
| 3 | **Batterilagring** | `/batterilagring/` | `img/batterilagring.jpg` |

## ⚠️ Photos — you must add three files
The cards reference `img/elservice.jpg`, `img/laddbox.jpg`, `img/batterilagring.jpg`. Until they exist,
each card shows a graceful **midnight-aurora fallback** (no broken-image icon — the `<img>` hides itself on
error). Save the three photos with these exact names, mapping:
- **Elservice** ← the lit house at dusk (image 1) → `img/elservice.jpg`
- **Laddbox** ← the EV charger on wood cladding (image 3) → `img/laddbox.jpg`
- **Batterilagring** ← the wooden house with roof solar (image 2) → `img/batterilagring.jpg`
Any aspect ratio works (`object-fit: cover`); ~1000px+ square or landscape is ideal.

## Copy (copywriting panel → 2 of 3 converged)
- **Heading:** En elfirma för hela hemmet
- **Lead:** Elservice, laddbox eller batterilagring. Samma behöriga elektriker hela vägen, med fast pris
  innan vi börjar.
- Candour-clean: no borrowed "20 000 installationer", no "bäst", no invented numbers, no urgency.

## The "Ampy-friendly light blue" CTA
The **Läs mer** pill uses Ampy **teal** (`#00a991`, brightening to `#1cc4af` on hover) — the palette's
brightest, most "light-blue" accent, replacing Evify's `#4baee3`. Ampy's token set has no separate light
blue and the design system forbids Evify blue; if you want a specific different hex, say the word.
(White-on-teal at the 18px bold pill sits ~3:1 — AA for large text; a darker text is available if you want
AAA.)

## Open `[GAP]`
1. The three photos (above).
2. URLs: `/elservice/`, `/laddboxar/` (live is `/laddbox/`), `/batterilagring/` — confirm.
3. Exact CTA colour if teal isn't the "light blue" you meant.

*Reference: `Picasso/components/mini-menu` (Evify + Hemsol). Ampy tokens, Ampy voice, candour gate.*
