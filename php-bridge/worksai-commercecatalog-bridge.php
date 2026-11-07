<?php
/**
 * Package: WorksAi CommerceCatalog — Margin-Floor Guard & Schema.org Product JSON-LD Bridge
 * URI: https://commercecatalog.worksai.org
 * Version: 1.2.0
 * License: MIT
 */
declare(strict_types=1);
namespace WorksAi\CommerceCatalog;

final class SkuEnrichmentBridge {
    public static function enrichLocal(array $skuRecord, int $minMarginPct = 20): array {
        $sku = trim((string)($skuRecord['sku'] ?? ''));
        $costCents = (int)($skuRecord['costCents'] ?? 0);
        $priceCents = (int)($skuRecord['priceCents'] ?? 0);
        if ($sku === '' || $costCents <= 0 || $priceCents <= 0) {
            throw new \InvalidArgumentException('ValidationError: sku, costCents, and priceCents are required.');
        }
        $discountPct = (float)($skuRecord['discountPct'] ?? 0);
        $discountedPriceCents = (int)round($priceCents * (1.0 - $discountPct / 100.0));
        $minAllowedPriceCents = (int)ceil($costCents / (1.0 - $minMarginPct / 100.0));
        $finalPriceCents = max($discountedPriceCents, $minAllowedPriceCents);
        $marginFloorEnforced = $finalPriceCents > $discountedPriceCents;

        $safeTitle = htmlspecialchars((string)($skuRecord['title'] ?? $sku), ENT_QUOTES, 'UTF-8');
        $jsonLd = [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'sku' => $sku,
            'name' => $safeTitle,
            'offers' => [
                '@type' => 'Offer',
                'priceCurrency' => (string)($skuRecord['currency'] ?? 'USD'),
                'price' => number_format($finalPriceCents / 100, 2, '.', ''),
                'availability' => ($skuRecord['inStock'] ?? true) ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock'
            ]
        ];
        return [
            'sku' => $sku,
            'finalPriceCents' => $finalPriceCents,
            'marginFloorEnforced' => $marginFloorEnforced,
            'jsonLdString' => json_encode($jsonLd, JSON_UNESCAPED_SLASHES)
        ];
    }
}
