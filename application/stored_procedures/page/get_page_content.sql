SELECT p.page_id, p.page_title, p.slug, p.keywords, p.description, m.alias,m.module_id,m.module_name, m.module_path,pm.module_data,pm.plugins
FROM page p
  LEFT JOIN page_module pm ON (pm.page_id = p.`page_id`)
  INNER JOIN module m ON (pm.`module_id` = m.`module_id`)
WHERE slug = '{$url}' AND m.active = 1 AND pm.`active` = 1
ORDER BY pm.order