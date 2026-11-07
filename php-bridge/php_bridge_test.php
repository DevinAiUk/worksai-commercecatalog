<?php
declare(strict_types=1);
require_once __DIR__ . '/worksai-commercecatalog-bridge.php';
use WorksAi\CommerceCatalog\SkuEnrichmentBridge;

$res = SkuEnrichmentBridge::enrichLocal([
    'sku' => 'WORKSAI-NODE-PRO',
    'title' => 'WorksAI Edge Node',
    'costCents' => 12000,
    'priceCents' => 18000,
    'discountPct' => 35,
    'currency' => 'USD',
    'inStock' => true
], 20);

assert($res['finalPriceCents'] === 15000, 'Expected 20% margin floor (15000 cents)');
assert($res['marginFloorEnforced'] === true, 'Expected marginFloorEnforced=true');
assert(str_contains($res['jsonLdString'], '"@type":"Product"'), 'Expected Schema.org Product JSON-LD');
echo "CommerceCatalog PHP bridge tests passed.\n";
