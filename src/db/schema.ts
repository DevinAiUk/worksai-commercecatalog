export const APP_DB_CONFIG = {
  schema: "worksai_hub",
  appSlug: "worksai-commercecatalog",
  subdomain: "commercecatalog.worksai.org",
  mcpEndpoint: "https://commercecatalog.worksai.org/api/mcp",
  aiEndpoint: "https://commercecatalog.worksai.org/api/ai/analyze",
  mcpTools: ["commercecatalog.enrich_sku", "commercecatalog.compute_margins", "commercecatalog.generate_product_jsonld"]
} as const;
