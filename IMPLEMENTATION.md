# Implementering på ampy.se — "Din elektriker för hela hemmet" (block 2)

Blocket levereras i **två format**. Välj det som passar hur ni bygger sidan. Båda producerar
exakt samma resultat (parity-verifierat mot den godkända prototypen, desktop + iPad + mobil).

| | Format 1 — FluentSnippets | Format 2 — Bricks-import (JSON) |
|---|---|---|
| **När** | Ni vill ha en återanvändbar shortcode `[ampy_elfirma]` och äger CSS/JS globalt | Ni vill dra in blocket direkt i en Bricks-mall och redigera det där |
| **Filer** | `fluentsnippets/` (CSS · PHP · JS + preview) | `bricks/ampy-elfirma.bricks.json` |
| **Bilder** | Sätts som shortcode-attribut | Byt 3 platshållar-URL:er i Code-elementet |

> **Rekommendation:** FluentSnippets. Shortcoden gör blocket återanvändbart, håller CSS på ett
> ställe och gör bild-byten till en enrads-ändring. Bricks-JSON:en är bäst om blocket ska bo och
> redigeras inuti en specifik Bricks-mall.

---

## Innan du börjar (gäller båda)

1. **Ladda upp de tre fotona** till Mediabiblioteket och kopiera deras fulla URL:er:
   - `elservice.webp` → det upplysta huset i skymning
   - `laddbox.webp` → laddaren på träpanelen
   - `batterilagring.webp` → trähuset med solceller
   *(Om en URL saknas visas kortets on-brand aurora-gradient istället — inget kort blir trasigt.)*
2. **Outfit-fonten:** blocket använder `Outfit`, som Ampy-temat redan self-hostar (GDPR-säkert).
   Ingen Google Fonts-request görs. Ligger fonten inte globalt — säg till, så lägger vi `@font-face`.
3. **URL:er att bekräfta:** `/elservice/`, `/laddboxar/` (live är `/laddbox/`), `/batterilagring/`.

---

## Format 1 — FluentSnippets

Tre snippets. Skapa dem i **FluentSnippets → New Snippet**:

| Snippet | Typ | Kör | Innehåll |
|---|---|---|---|
| `ampy-elfirma.css` | **CSS** | Everywhere | Hela stilmallen (scoped under `.ampy-elfirma`) |
| `ampy-elfirma.php` | **PHP** | Everywhere | Registrerar shortcoden `[ampy_elfirma]` |
| `ampy-elfirma.js` | **JS** | Everywhere | *Behövs inte* — blocket är ren CSS. Lägg bara på om ert flöde kräver JS-slotten. |

**Placera blocket** där det ska ligga (under Hero 1) med shortcoden:

```
[ampy_elfirma
   img_elservice="https://ampy.se/wp-content/uploads/2026/xx/elservice.webp"
   img_laddbox="https://ampy.se/wp-content/uploads/2026/xx/laddbox.webp"
   img_batteri="https://ampy.se/wp-content/uploads/2026/xx/batterilagring.webp"]
```

I Bricks: lägg en **Shortcode**-element (eller ett Code-element) och klistra in raden ovan.

**Alla attribut** (alla valfria, defaults inbyggda): `title`, `lead`, `cta`, `url_elservice`,
`url_laddbox`, `url_batteri`, `img_elservice`, `img_laddbox`, `img_batteri`.

**Se exakt hur det ska se ut:** öppna `fluentsnippets/preview/index.html` i en webbläsare.

---

## Format 2 — Bricks-import (JSON)

1. Öppna `bricks/ampy-elfirma.bricks.json`, markera **allt**, kopiera.
2. I Bricks-editorn: högerklicka där blocket ska in → **Paste elements** (klistra in från urklipp).
3. Det lägger en **Section** med ett **Code-element**. CSS:en ligger redan i sektionens
   **Custom CSS** (`_cssCustom`) — inget mer att koppla.
4. **Byt de tre bild-platshållarna** i Code-elementets HTML:
   `UPLOAD_ELSERVICE_URL_HERE`, `UPLOAD_LADDBOX_URL_HERE`, `UPLOAD_BATTERILAGRING_URL_HERE`
   → era uppladdade Media-URL:er.
5. Är "Execute code / render as PHP" avstängt i er Bricks-säkerhetsinställning: slå på det för
   just detta Code-element (HTML-only, ingen PHP körs).

---

## Vad som är produktionshärdat (varför det håller på alla enheter)

- **Scoped** under `.ampy-elfirma` — läcker inte in i temat, temat läcker inte in.
- **px, inte rem** — WordPress använder inte prototypens 62,5%-bas.
- **`@container`** — blocket svarar mot sin kolumn (med `@media`-fallback för äldre Safari).
- **CSP-säkra bilder** — foton som `background-image` (ingen `<img>`, ingen inline-`onerror`);
  404 → gradienten visas, aldrig en trasig bild-ikon.
- **iOS-fallbacks** — `aspect-ratio` `::before`-fallback, `env(safe-area)` per sida (liggande urtag),
  `-webkit-tap-highlight` av, `prefers-reduced-motion` + `forced-colors` + `@media print`.
- **Tillgänglighet** — AA-kontrast (svart på sky-blå 6,8:1; vit titel garanterad via mitt-scrim),
  hela kortet är en länk med `aria-label`, synlig fokus-ring.

## Kvarvarande [GAP] (ägar-bekräfta)
1. De tre Media-URL:erna (efter uppladdning).
2. URL:erna `/laddboxar/` vs `/laddbox/`.
3. "3000 installationer/år" — ägar-bekräftad ✅ (i `ampy-foretagsdata`), belägg finns i jobbregistret.
