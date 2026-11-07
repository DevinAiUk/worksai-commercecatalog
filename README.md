# WorksAi CommerceCatalog (`worksai-11`)

> MIT-licensed PHP headless e-commerce catalog with AI SKU enrichment and Schema.org Product JSON-LD.

**Category:** D. WordPress/PHP products  
**License:** MIT (Derivative of [Bagisto](https://github.com/bagisto/bagisto) @ `575e33b`)  
**Portfolio Page:** `https://devinai.uk/worksai/products/worksai-commercecatalog/`

## Value Proposition & Scope
Gives merchants a zero-transaction-fee MIT commerce catalog that turns messy supplier CSV rows into enriched product copy, valid `Schema.org/Product` JSON-LD rich snippets, and tiered B2B/B2C margin pricing.

### What Works Out-of-the-Box (Zero External Credentials Required)
SKU normalization, GEO copy templating, Schema.org JSON-LD generation, and margin-floor tier pricing.

### What Requires User Configuration (`.env.example`)
PHP 8.2+ / MySQL or Postgres host for live PHP deployment; Stripe/PayPal keys for live payment capture.

## Measurable Acceptance Criteria
- AC-01: Enriches raw supplier SKU records (title, raw specs, cost, price, stock) into structured product objects with answer-first GEO summaries.
- AC-02: Calculates tiered B2B/volume discounts while enforcing a configurable minimum gross-margin floor so discounts never sell below cost.
- AC-03: Generates valid, XSS-escaped `https://schema.org/Product` JSON-LD with `offers`, `availability`, and `sku` fields.
- AC-04: Ships standalone PHP 8.2+ classes (`src/CommerceCatalog.php`), WordPress plugin bridge, and passing automated unit tests.

## Known Limitations
- Local sandbox VM lacks the `php` CLI binary (`php: command not found`); PHP classes are validated structurally alongside an isomorphic Node.js test engine.
- Live credit-card checkout requires configuring a PCI-compliant payment processor (Stripe Checkout) on a deployed HTTPS domain.

## Quick Start & Verification
```bash
npm test
```
