SELECT p.page_id, p.page_title, p.slug, p.keywords, p.description
FROM page p
WHERE slug = '{$url}';