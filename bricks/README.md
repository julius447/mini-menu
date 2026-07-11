# Bricks import — `ampy-elfirma.bricks.json`

The "Din elektriker för hela hemmet" block as a Bricks paste-JSON. Full guide:
[`../IMPLEMENTATION.md`](../IMPLEMENTATION.md).

## Import
1. Open [`ampy-elfirma.bricks.json`](ampy-elfirma.bricks.json), select all, copy.
2. In the Bricks editor → right-click where the block goes → **Paste elements**.
3. You get a **Section** + a **Code element**; the CSS is already on the section's **Custom CSS**
   (`_cssCustom`) — nothing else to wire.
4. In the Code element's HTML, replace the three image placeholders with your uploaded Media URLs:
   `UPLOAD_ELSERVICE_URL_HERE` · `UPLOAD_LADDBOX_URL_HERE` · `UPLOAD_BATTERILAGRING_URL_HERE`.
   A missing/blank URL falls back to the card's on-brand aurora gradient — no broken image.
5. If your Bricks security disables code execution, enable it for this element (HTML only, no PHP).

Same output as the FluentSnippets format — parity-verified against the approved block (desktop · iPad · mobile).
