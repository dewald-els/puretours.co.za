SELECT
p.page_id,
p.page_title,
p.slug,
m.alias,
m.module_id,
m.module_name,
m.module_path,
pm.module_data
FROM page p
LEFT JOIN page_module pm ON (pm.page_id = p.`page_id`)
INNER JOIN module m ON (pm.`module_id` = m.`module_id`)
WHERE `p`.`page_id` = '{$page_id}' AND m.active = 1
ORDER BY pm.order