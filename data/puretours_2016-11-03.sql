/*
SQLyog Enterprise v12.2.1 (64 bit)
MySQL - 5.5.49-log : Database - puretours
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`puretours` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `puretours`;

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `menu_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`menu_id`,`name`) values 
(1,'Primary');

/*Table structure for table `menu_item` */

DROP TABLE IF EXISTS `menu_item`;

CREATE TABLE `menu_item` (
  `menu_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `display` varchar(80) DEFAULT NULL,
  `page_id` int(11) unsigned DEFAULT NULL,
  `menu_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`menu_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `menu_item` */

insert  into `menu_item`(`menu_item_id`,`name`,`display`,`page_id`,`menu_id`) values 
(1,'Home','Home',1,1),
(2,'Pure Skiing','Pure Skiing',1,1),
(3,'Pure Sport','Pure Sport',1,1),
(4,'Robinson Club','Robinson Club',1,1),
(5,'About','About',2,1),
(6,'Contact','Contact',3,1);

/*Table structure for table `module` */

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `module_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(80) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `module_category_id` int(10) unsigned DEFAULT NULL,
  `module_path` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `alias` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `module` */

insert  into `module`(`module_id`,`module_name`,`date_created`,`module_category_id`,`module_path`,`active`,`alias`) values 
(1,'Banner - Small','2016-10-26 00:11:37',1,'modules/banners/small/index',1,'bannerSmall'),
(2,'Banner - Medium','2016-10-26 00:12:14',1,'modules/banners/medium/index',1,'bannerMedium'),
(3,'Banner - Large','2016-10-26 00:12:14',1,'modules/banners/large/index',1,'bannerLarge'),
(4,'Header','2016-10-26 00:12:27',3,'modules/header/index',1,'header'),
(5,'Footer','2016-10-26 00:12:56',4,'modules/footer/index',1,'footer'),
(6,'Nav - Public','2016-10-26 22:50:36',5,'modules/nav-public/index',1,'navPublic');

/*Table structure for table `module_categories` */

DROP TABLE IF EXISTS `module_categories`;

CREATE TABLE `module_categories` (
  `module_category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`module_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `module_categories` */

insert  into `module_categories`(`module_category_id`,`name`) values 
(1,'Banners'),
(2,'Sliders'),
(3,'Header'),
(4,'Footer'),
(5,'Navbar');

/*Table structure for table `page` */

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `page_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(128) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `page` */

insert  into `page`(`page_id`,`page_title`,`date_created`,`slug`,`active`) values 
(1,'Home','2016-10-26 00:11:18','home',1),
(2,'About','2016-10-27 15:33:11','about',1),
(3,'Contact','2016-10-27 15:33:34','contact',1),
(4,'Pure Skiing','2016-11-01 15:12:19','pure-skiing',1),
(5,'Pure Sport','2016-11-01 15:12:25','pure-sport',1),
(6,'Robinson Club','2016-11-01 15:12:34','robinson-club',1);

/*Table structure for table `page_module` */

DROP TABLE IF EXISTS `page_module`;

CREATE TABLE `page_module` (
  `page_module_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned DEFAULT NULL,
  `module_id` int(11) unsigned DEFAULT NULL,
  `module_data` text,
  `order` int(2) DEFAULT '0',
  PRIMARY KEY (`page_module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `page_module` */

insert  into `page_module`(`page_module_id`,`page_id`,`module_id`,`module_data`,`order`) values 
(1,1,3,'{\"src\": \"assets/img/backgrounds/modules/banner-home.jpg\"}',2),
(2,1,6,NULL,1),
(3,1,4,NULL,0),
(4,1,5,NULL,50),
(5,2,2,'{\"src\": \"assets/img/backgrounds/modules/banner-about.jpg\"}',2),
(6,2,6,NULL,1),
(7,2,4,NULL,0),
(8,2,5,NULL,50);

/*Table structure for table `pt_sessions` */

DROP TABLE IF EXISTS `pt_sessions`;

CREATE TABLE `pt_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pt_sessions` */

insert  into `pt_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('bb526561264c4bf126fa185499140a59deeb4390','::1',1477952279,'__ci_last_regenerate|i:1477952263;'),
('9a4f8943005a8ebfdff993f9e3b9c1406d28acfd','::1',1477952693,'__ci_last_regenerate|i:1477952605;user|O:8:\"stdClass\":10:{s:7:\"user_id\";s:1:\"1\";s:10:\"first_name\";s:6:\"Dewald\";s:9:\"last_name\";s:3:\"Els\";s:5:\"email\";s:28:\"dewald@sumodevelopment.co.za\";s:8:\"password\";s:172:\"a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=\";s:8:\"username\";s:6:\"dewald\";s:10:\"last_login\";N;s:12:\"date_created\";s:19:\"2016-10-26 22:37:04\";s:7:\"role_id\";s:1:\"1\";s:6:\"active\";s:1:\"1\";}'),
('f59cea2a855a501df826c11d65d649d3aa739498','127.0.0.1',1478198414,'__ci_last_regenerate|i:1478198156;user|O:8:\"stdClass\":10:{s:7:\"user_id\";s:1:\"1\";s:10:\"first_name\";s:6:\"Dewald\";s:9:\"last_name\";s:3:\"Els\";s:5:\"email\";s:28:\"dewald@sumodevelopment.co.za\";s:8:\"password\";s:172:\"a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=\";s:8:\"username\";s:6:\"dewald\";s:10:\"last_login\";N;s:12:\"date_created\";s:19:\"2016-10-26 22:37:04\";s:7:\"role_id\";s:1:\"1\";s:6:\"active\";s:1:\"1\";}'),
('141fd55e170bdf7d8156810abebc681c08ea9e16','127.0.0.1',1478198697,'__ci_last_regenerate|i:1478198692;user|O:8:\"stdClass\":10:{s:7:\"user_id\";s:1:\"1\";s:10:\"first_name\";s:6:\"Dewald\";s:9:\"last_name\";s:3:\"Els\";s:5:\"email\";s:28:\"dewald@sumodevelopment.co.za\";s:8:\"password\";s:172:\"a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=\";s:8:\"username\";s:6:\"dewald\";s:10:\"last_login\";N;s:12:\"date_created\";s:19:\"2016-10-26 22:37:04\";s:7:\"role_id\";s:1:\"1\";s:6:\"active\";s:1:\"1\";}');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(80) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role_id` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`user_id`,`first_name`,`last_name`,`email`,`password`,`username`,`last_login`,`date_created`,`role_id`,`active`) values 
(1,'Dewald','Els','dewald@sumodevelopment.co.za','a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=','dewald',NULL,'2016-10-26 22:37:04',1,1),
(2,'Admin',NULL,'admin@puretours.co.za','a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=','admin',NULL,'2016-10-27 08:12:31',1,1),
(3,'John','Editor','editor@puretours.co.za','a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=','editor',NULL,'2016-10-27 17:48:50',2,1);

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `role_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `user_role` */

insert  into `user_role`(`role_id`,`name`,`active`) values 
(1,'Admin',1),
(2,'Editor',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
