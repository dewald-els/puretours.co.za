select 
r.resort_id, r.resort_name, r.resort_description, r.banner,
c.country_name
from resort r
left join country c on r.country_id = c.country_id
where r.resort_id = '{$resort_id}'
limit 1;
