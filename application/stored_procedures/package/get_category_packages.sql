SELECT
  p.package_id,
  p.package_name,
  p.package_description,
  p.active,
  p.`date_available`,
  p.date_end,
  p.tags,
  p.base_price,
  p.duration,
  p.banner,
  r.resort_id,
  r.resort_name,
  r.resort_description,
  c.country_name,
  pi.text               AS included,
  pe.text               AS excluded,
  group_concat(pg.path) AS gallery
FROM package p
  LEFT JOIN package_resort pr ON p.package_id = pr.package_id
  LEFT JOIN resort r ON pr.resort_id = r.resort_id
  LEFT JOIN country c ON r.country_id = c.country_id
  LEFT JOIN package_inclusion pi ON p.inclusion_id = pi.package_inclusion_id
  LEFT JOIN package_exclusion pe ON p.exclusion_id = pe.package_exclusion_id
  LEFT JOIN package_gallery pg ON p.package_id = pg.package_id
WHERE p.package_category_id = '{$category_id}'
GROUP BY p.package_id
LIMIT {$start}, {$end}
