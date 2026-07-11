# FluentSnippets bundle — `[ampy_elfirma]`

The "Din elektriker för hela hemmet" block as three FluentSnippets. Full guide: [`../IMPLEMENTATION.md`](../IMPLEMENTATION.md).

| File | FluentSnippets type | Run | What |
|---|---|---|---|
| [`ampy-elfirma.css`](ampy-elfirma.css) | **CSS** | Everywhere | The stylesheet, scoped under `.ampy-elfirma` (px, `@container`, self-host Outfit) |
| [`ampy-elfirma.php`](ampy-elfirma.php) | **PHP** | Everywhere | Registers the `[ampy_elfirma]` shortcode |
| [`ampy-elfirma.js`](ampy-elfirma.js) | **JS** | Everywhere | **Not required** — the block is pure CSS. Include only to fill a JS slot. |
| [`preview/index.html`](preview/index.html) | — | — | Parity render (open in a browser); verified identical to the approved block |

## Drop it in
```
[ampy_elfirma
   img_elservice="…/elservice.webp"
   img_laddbox="…/laddbox.webp"
   img_batteri="…/batterilagring.webp"]
```
Overridable attributes: `title`, `lead`, `cta`, `url_elservice`, `url_laddbox`, `url_batteri`,
`img_elservice`, `img_laddbox`, `img_batteri`. Missing photo → on-brand gradient (never a broken image).
