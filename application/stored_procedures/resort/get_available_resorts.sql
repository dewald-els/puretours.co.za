select 
r.resort_id, r.resort_name, r.resort_description, r.banner,
c.country_name
from resort r
left join country c on r.country_id = c.country_id
where r.active = 1;
