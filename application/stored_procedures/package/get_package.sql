select
  p.package_id, p.package_name, p.package_description, p.active, p.`date_available`, p.date_end, p.tags, p.base_price, p.duration, p.banner,
  r.resort_id, r.resort_name, r.resort_description,
  c.country_name,
  pi.text AS included, pe.text AS excluded,
  group_concat(pg.path) AS gallery
from package p
  left join package_resort pr on p.package_id = pr.package_id
  left join resort r on pr.resort_id = r.resort_id
  left join country c on r.country_id = c.country_id
  left join package_inclusion pi on p.inclusion_id = pi.package_inclusion_id
  left join package_exclusion pe on p.exclusion_id = pe.package_exclusion_id
  left join package_gallery pg on p.package_id = pg.package_id
where p.package_id = '{$package_id}'
group by p.package_id