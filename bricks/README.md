# Ampy mini-menu (block 2) — Bricks deliverable

Product-picker block that replaces the small icon-row in Hero 1. Three cards:
**Elinstallationer · Laddbox · Solcellsbatteri**. Light glass cards on the offwhite page
surface, teal top-edge draw as the single signature device. Built on real Ampy tokens,
candour-gated, AA-clean.

## Files
| File | What it is |
|---|---|
| `mini-menu.bricks.json` | Paste-JSON for Bricks (Section + Code element). CSS is embedded in the Section's `_cssCustom`. |
| `mini-menu.css` | The same CSS, standalone (source of truth / version control). Fully scoped under `.ampy-mm`. |
| `mini-menu.snippet.html` | The markup rendered by the Code element. |
| `preview/index.html` | Parity render (CSS + HTML) — verified identical to the signed-off prototype. |

## How to paste
1. Bricks editor → open the homepage template → select the structure panel.
2. Right-click the spot **directly under Hero 1** → **Paste** (or use the "+" → Paste from clipboard).
   Copy the entire contents of `mini-menu.bricks.json` to the clipboard first.
3. It drops a `section` containing one `code` element. The CSS is already on the section's
   **Custom CSS** field (`_cssCustom`), so nothing else to wire.
4. If your Bricks blocks external code by default: enable **Code execution** for this element
   (Bricks → Settings → Custom code, and the element's "Execute code" toggle is already set on).

## Token dependency (safe either way)
The CSS declares the `ap*` tokens as **scoped fallbacks on `.ampy-mm`** (identical values to
`ampy-design-system/reference/tokens.css`). So it renders correctly **whether or not** the Ampy
Bricks theme exposes those custom properties globally — no `:root` pollution, no global carryover
risk. If the theme later changes a token value, update the fallback block at the top of the CSS.

## What it does NOT do (by design / candour gate)
- No install-count line ("20 000 installationer" is Evify's number — banned).
- No rating, no "hela Sverige", no "1000+ kunder", no urgency/scarcity.
- Battery card is pure self-consumption framing (survives stödtjänster=0 AND effektavgift=0).

---

## [GAP] — owner must confirm before go-live
1. **`/laddboxar/` URL.** Every live `src:` in `ampy-foretagsdata.md` is **`/laddbox/`** (singular);
   `Laddboxar` is only the *Produkter* nav label. Confirm the card should point to `/laddboxar/`
   or change to the verified `/laddbox/`.
2. **`/elservice/` URL.** `/elservice/elcentral/` is a confirmed live child path, but the standalone
   parent `/elservice/` landing page is not independently verified (the sibling `/elinstallation/`
   also exists live). Confirm `/elservice/` resolves, or switch to `/elinstallation/`.
3. **`/solcellsbatterier/` URL.** ✅ Verified as the live comparison hub (§3.2) — no action.
4. **Copy sign-off (voice items):** eyebrow **"Hela hemmet"** (chosen over the colder "En leverantör"),
   h2 "Samma elektriker, oavsett vad ditt hem behöver.", and the three card descs. All candour-clean;
   confirm wording.
5. **Glyphs:** hand-drawn line icons (bolt / wall-box+bolt / battery+bolt) in the Hero-1 geometric
   spirit. If you later clear rights to real install photos, the card can switch to a photo treatment —
   but that introduces a photo-rights gap, so glyphs are the default.
