<?php
/**
 * Plugin Name:       WorksAi CommerceCatalog Companion Bridge
 * Plugin URI:        https://devinai.uk/worksai/products/worksai-commercecatalog/
 * Description:       MIT-licensed PHP headless e-commerce catalog with AI SKU enrichment and Schema.org Product JSON-LD. (MIT-licensed derivative of Bagisto @ 575e33b).
 * Version:           1.0.0
 * Requires at least: 6.4
 * Requires PHP:      8.2
 * Author:            WorksAi.org
 * Author URI:        https://worksai.org
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/src/Engine.php';
