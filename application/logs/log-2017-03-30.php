<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-30 00:02:16 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:02:16 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:02:42 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:02:42 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:04:03 --> Severity: Parsing Error --> syntax error, unexpected ')', expecting ']' /Users/forest/Development/Sumo/www/puretours.co.za/puretours.co.za/application/views/cms/_layout_main.php 69
ERROR - 2017-03-30 00:07:19 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:07:19 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:07:52 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:07:52 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:08:04 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:08:04 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:08:17 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:08:17 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:09:25 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:09:25 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:11:46 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:11:46 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:12:25 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:12:25 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:12:26 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:12:26 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:12:55 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:12:55 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:14:05 --> 404 Page Not Found: Admin_ski_packages/index
ERROR - 2017-03-30 00:14:18 --> 404 Page Not Found: Admin_ski_packages/index
ERROR - 2017-03-30 00:14:21 --> 404 Page Not Found: Admin_robinson_packages/index
ERROR - 2017-03-30 00:24:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/forest/Development/Sumo/www/puretours.co.za/puretours.co.za/application/controllers/Admin_sport_packages.php:22) /Users/forest/Development/Sumo/www/puretours.co.za/puretours.co.za/system/core/Common.php 573
ERROR - 2017-03-30 00:24:51 --> Severity: Error --> Class 'Sport_packages' not found /Users/forest/Development/Sumo/www/puretours.co.za/puretours.co.za/application/controllers/Admin_sport_packages.php 22
ERROR - 2017-03-30 00:25:53 --> Query error: Table 'puretours.package_resort' doesn't exist - Invalid query: SELECT
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
WHERE p.package_category_id = '2'
GROUP BY p.package_id
LIMIT 0, 10

ERROR - 2017-03-30 00:37:04 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:04 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:25 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:25 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:28 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:28 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:30 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:30 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:32 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:32 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:35 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:35 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:36 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:36 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:37:38 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:37:38 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:40:54 --> 404 Page Not Found: Admin/sport-packages
ERROR - 2017-03-30 00:43:13 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:43:13 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:43:44 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:43:44 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:45:06 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:45:06 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:45:30 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:45:30 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:46:03 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:46:03 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:46:54 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:46:54 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:46:55 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:46:55 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:47:27 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:47:27 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:47:30 --> 404 Page Not Found: Admin/sport-packages
ERROR - 2017-03-30 00:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:47:33 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:47:33 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2017-03-30 00:47:49 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:47:49 --> 404 Page Not Found: Assets/libs
ERROR - 2017-03-30 00:51:16 --> Query error: Undeclared variable: sport - Invalid query: SELECT
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
WHERE p.package_category_id = '2'
GROUP BY p.package_id
LIMIT sport-packages, 10

ERROR - 2017-03-30 00:51:50 --> 404 Page Not Found: Admin/sport-packages
