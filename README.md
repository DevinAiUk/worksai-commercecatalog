# WorksAi CommerceCatalog (`worksai-commercecatalog`)

> MIT-licensed PHP headless e-commerce catalog with AI SKU enrichment and Schema.org Product JSON-LD.

- **Live Subdomain Application:** [https://commercecatalog.worksai.org](https://commercecatalog.worksai.org)
- **WorksAI Hub Specification:** [https://worksai.org/apps/worksai-commercecatalog](https://worksai.org/apps/worksai-commercecatalog)
- **Category:** D. WordPress/PHP products
- **License:** MIT (Derived from [Bagisto](https://github.com/bagisto/bagisto) @ `575e33b`)

## Capability Matrix
- **What You Can Do:** Install the working PHP 8.2+ / Bagisto / WooCommerce bridge (worksai-commercecatalog-bridge.php) or call the Edge API to enforce minimum margin floors on discounted SKUs and generate Schema.org Product JSON-LD.
- **Deterministic Domain Utilities:** enrichSkuAndBuildProductJsonLd (margin-floor price calculator, HTML sanitizer, and Schema.org/Product JSON-LD builder).
- **Genuine AI Model Features:** Cloudflare Workers AI (@cf/meta/llama-3.1-8b-instruct) SEO-optimized product copy and structured attribute extraction.
- **Persisted R2/Neon Features:** Enriched SKU records and Product JSON-LD schemas persisted in Cloudflare R2 (workspaces/worksai-commercecatalog/*).
- **Known Limitations:** Direct Bagisto/WooCommerce database catalog writeback requires installing the downloadable PHP bridge in your store environment.

## Verification & Local Testing
```bash
npm run lint
npm run typecheck
npm test
```
