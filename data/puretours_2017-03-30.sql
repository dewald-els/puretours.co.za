# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.28)
# Database: puretours
# Generation Time: 2017-03-29 22:56:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table country
# ------------------------------------------------------------

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(128) DEFAULT NULL,
  `country_abbreviation` varchar(5) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;

INSERT INTO `country` (`country_id`, `country_name`, `country_abbreviation`, `active`)
VALUES
	(1,'Austria','AT',1),
	(2,'Germany','GER',1),
	(3,'Switzerland','SWZ',1);

/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `menu_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;

INSERT INTO `menu` (`menu_id`, `name`)
VALUES
	(1,'Primary');

/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_item`;

CREATE TABLE `menu_item` (
  `menu_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `display` varchar(80) DEFAULT NULL,
  `page_id` int(11) unsigned DEFAULT NULL,
  `menu_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`menu_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menu_item` WRITE;
/*!40000 ALTER TABLE `menu_item` DISABLE KEYS */;

INSERT INTO `menu_item` (`menu_item_id`, `name`, `display`, `page_id`, `menu_id`)
VALUES
	(1,'Home','Home',1,1),
	(2,'Pure Skiing','Pure Skiing',4,1),
	(3,'Pure Sport','Pure Sport',5,1),
	(4,'Robinson Club','Robinson Club',6,1),
	(5,'About','About',2,1),
	(6,'Contact','Contact',3,1);

/*!40000 ALTER TABLE `menu_item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `module_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(80) DEFAULT NULL,
  `module_category_id` int(10) unsigned DEFAULT NULL,
  `module_path` varchar(128) DEFAULT NULL,
  `alias` varchar(80) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;

INSERT INTO `module` (`module_id`, `module_name`, `module_category_id`, `module_path`, `alias`, `active`, `date_created`)
VALUES
	(1,'Banner - Small',1,'modules/banners/small','bannerSmall',1,'2016-10-26 00:11:37'),
	(2,'Banner - Medium',1,'modules/banners/medium','bannerMedium',1,'2016-10-26 00:12:14'),
	(3,'Banner - Large',1,'modules/banners/large','bannerLarge',1,'2016-10-26 00:12:14'),
	(4,'Header',3,'modules/header','header',1,'2016-10-26 00:12:27'),
	(5,'Footer',4,'modules/footer','footer',1,'2016-10-26 00:12:56'),
	(6,'Nav - Public',5,'modules/nav-public','navPublic',1,'2016-10-26 22:50:36'),
	(7,'Tiles - Featured',6,'modules/tiles/featured','featuredTiles',1,'2016-11-04 15:52:08'),
	(8,'Top 5 Locations',7,'modules/sliders/top5locations','top5Locations',1,'2017-03-05 14:01:52'),
	(9,'Tiles - 2 Col News',6,'modules/tiles/twocolnews','twoColNews',1,'2017-03-05 20:11:08'),
	(10,'Tiles - Row of four',6,'modules/tiles/row_of_four','rowOfFour',1,'2017-03-06 21:27:29'),
	(11,'About',8,'modules/pages/about','about',1,'2017-03-06 21:57:04'),
	(12,'Contact',8,'modules/pages/contact','contact',1,'2017-03-07 00:16:34'),
	(13,'Pureskiing',8,'modules/pages/pureskiing','pureskiing',1,'2017-03-07 07:53:12'),
	(14,'Package Builder',9,'modules/package-builder','packageBuilder',1,'2017-03-07 07:53:33'),
	(15,'Puresport',8,'modules/pages/puresport','puresport',1,'2017-03-07 08:43:52'),
	(16,'Robinson',8,'modules/pages/robinson','robinson',1,'2017-03-07 09:31:16'),
	(17,'Package',8,'modules/pages/package','package',1,'2017-03-09 21:43:27'),
	(18,'Package gallery',7,'modules/sliders/package-gallery','packageGallery',1,'2017-03-09 22:43:12'),
	(19,'Package filter',10,'modules/package-filter','packageFilter',1,'2017-03-10 06:58:46'),
	(20,'Packages',8,'modules/pages/packages','packages',1,'2017-03-10 06:59:13'),
	(21,'Package card - Large',11,'modules/package-card-large','packageCardLarge',1,'2017-03-10 07:03:27');

/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table module_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `module_categories`;

CREATE TABLE `module_categories` (
  `module_category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`module_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `module_categories` WRITE;
/*!40000 ALTER TABLE `module_categories` DISABLE KEYS */;

INSERT INTO `module_categories` (`module_category_id`, `name`)
VALUES
	(1,'Banners'),
	(2,'Sliders'),
	(3,'Header'),
	(4,'Footer'),
	(5,'Navbar'),
	(6,'Tiles'),
	(7,'Slider'),
	(8,'Page'),
	(9,'Pacakge builders'),
	(10,'Filter'),
	(11,'Information cards');

/*!40000 ALTER TABLE `module_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package`;

CREATE TABLE `package` (
  `package_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `package_name` varchar(80) DEFAULT NULL,
  `package_description` text,
  `package_category_id` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `date_available` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `tags` varchar(128) DEFAULT NULL,
  `base_price` decimal(12,2) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `inclusion_id` int(11) unsigned DEFAULT NULL,
  `exclusion_id` int(11) unsigned DEFAULT NULL,
  `banner` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package` WRITE;
/*!40000 ALTER TABLE `package` DISABLE KEYS */;

INSERT INTO `package` (`package_id`, `package_name`, `package_description`, `package_category_id`, `active`, `date_available`, `date_end`, `date_created`, `date_updated`, `tags`, `base_price`, `duration`, `inclusion_id`, `exclusion_id`, `banner`)
VALUES
	(1,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',37299.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(2,'Liverpool vs. Crystal Palace Apr 2017','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',21299.00,5,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(3,'Man United Red Cafe post-match experience package','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',10299.00,2,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(4,'Wimbledon Ladies Quarter Final','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',60500.00,12,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(5,'F1 Belgium Grand Prix','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',32199.00,6,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(6,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',4580.00,1,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(7,'F1 Malaysian Grand Prix','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',6899.00,5,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(8,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',22799.00,5,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(9,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',15299.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(10,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',11099.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(11,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',9259.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(12,'2017 Hong Kong 7\'s','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',2,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',17099.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(13,'Austria skiing','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',1,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',7299.00,3,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(14,'Germany skiing','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',1,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',2540.00,1,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(15,'Switzerland holiday','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',1,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',22045.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg'),
	(16,'Germany holiday','2017 Hong Kong 7\'s rugby tour for all the 7\'s fans. Some more information entered here.\n\nA second paragraph if you\'d like.',1,1,'2017-01-01 08:00:00','2017-12-09 22:50:22','2017-03-09 22:50:22',NULL,'1,4',37299.00,7,1,1,'assets/img/modules/banners/package/1/1.jpg');

/*!40000 ALTER TABLE `package` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_category`;

CREATE TABLE `package_category` (
  `package_category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`package_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_category` WRITE;
/*!40000 ALTER TABLE `package_category` DISABLE KEYS */;

INSERT INTO `package_category` (`package_category_id`, `name`)
VALUES
	(1,'PureSki'),
	(2,'PureSport'),
	(3,'Robinson');

/*!40000 ALTER TABLE `package_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_exclusion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_exclusion`;

CREATE TABLE `package_exclusion` (
  `package_exclusion_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text,
  PRIMARY KEY (`package_exclusion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_exclusion` WRITE;
/*!40000 ALTER TABLE `package_exclusion` DISABLE KEYS */;

INSERT INTO `package_exclusion` (`package_exclusion_id`, `text`)
VALUES
	(1,'A bunch of text explaining what is excluded\n');

/*!40000 ALTER TABLE `package_exclusion` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_gallery`;

CREATE TABLE `package_gallery` (
  `package_gallery_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(128) DEFAULT NULL,
  `package_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`package_gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_gallery` WRITE;
/*!40000 ALTER TABLE `package_gallery` DISABLE KEYS */;

INSERT INTO `package_gallery` (`package_gallery_id`, `path`, `package_id`)
VALUES
	(1,'assets/img/gallery/package-gallery/1/1.jpg',1),
	(2,'assets/img/gallery/package-gallery/1/2.jpg',1);

/*!40000 ALTER TABLE `package_gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_inclusion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_inclusion`;

CREATE TABLE `package_inclusion` (
  `package_inclusion_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text,
  PRIMARY KEY (`package_inclusion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_inclusion` WRITE;
/*!40000 ALTER TABLE `package_inclusion` DISABLE KEYS */;

INSERT INTO `package_inclusion` (`package_inclusion_id`, `text`)
VALUES
	(1,'A bunch of text explaining what is included');

/*!40000 ALTER TABLE `package_inclusion` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_price
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_price`;

CREATE TABLE `package_price` (
  `package_price_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` int(11) unsigned DEFAULT NULL,
  `price_name` varchar(128) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`package_price_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_price` WRITE;
/*!40000 ALTER TABLE `package_price` DISABLE KEYS */;

INSERT INTO `package_price` (`package_price_id`, `package_id`, `price_name`, `price`)
VALUES
	(1,1,'Basic',10000.00),
	(2,1,'All inclusive',20000.00);

/*!40000 ALTER TABLE `package_price` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_resort
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_resort`;

CREATE TABLE `package_resort` (
  `package_resort_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` int(11) unsigned DEFAULT NULL,
  `resort_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`package_resort_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_resort` WRITE;
/*!40000 ALTER TABLE `package_resort` DISABLE KEYS */;

INSERT INTO `package_resort` (`package_resort_id`, `package_id`, `resort_id`)
VALUES
	(1,1,1);

/*!40000 ALTER TABLE `package_resort` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table package_tag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `package_tag`;

CREATE TABLE `package_tag` (
  `package_tag_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `icon` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`package_tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `package_tag` WRITE;
/*!40000 ALTER TABLE `package_tag` DISABLE KEYS */;

INSERT INTO `package_tag` (`package_tag_id`, `name`, `icon`)
VALUES
	(1,'Flights','flights'),
	(2,'Hosted','hosted'),
	(4,'All inclusive','all-inclusive'),
	(5,'Ski pass','ski-pass');

/*!40000 ALTER TABLE `package_tag` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `page_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(128) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `keywords` varchar(128) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;

INSERT INTO `page` (`page_id`, `page_title`, `date_created`, `slug`, `active`, `keywords`, `description`)
VALUES
	(1,'Home','2016-10-26 00:11:18','home',1,'puretours,sport,ski','PureTours sport and ski trips'),
	(2,'About','2016-10-27 15:33:11','about',1,'puretours,puresport,pureski,ski,sport,about','About PureTours and the packages we offer'),
	(3,'Contact','2016-10-27 15:33:34','contact',1,'puretours,tours,sport,contact,skiing,ski','Contact PureTours for any information'),
	(4,'Pure Skiing','2016-11-01 15:12:19','pure-skiing',1,'pure-ski,skiing,ski,holiday,snow,winter','Pure Skiing holidays'),
	(5,'Pure Sport','2016-11-01 15:12:25','pure-sport',1,'pure-sport,sport,sporting,holiday,events','Pure Sport holidays and events'),
	(6,'Robinson Club','2016-11-01 15:12:34','robinson-club',1,'robinson,holiday,tour','Robinson club holidays'),
	(7,'Package','2017-03-09 21:40:41','package',1,'package,holiday','Holiday pacakge'),
	(8,'Ski packages','2017-03-10 06:55:29','ski-packages',1,'packages,holidays,booking,sport,tour,ski,robinson','View all PureSport holiday packages'),
	(9,'Resort','2017-03-18 10:57:11','resort',1,'resort,holiday,sport,robinson,ski','A resort to stay at for your holiday'),
	(10,'Sport packages','2017-03-25 10:54:29','sport-packages',1,'sport,deal,holiday,robinson,puretours,tours,rugby,soccer,football','Sport packages available from Pure Tours');

/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_module`;

CREATE TABLE `page_module` (
  `page_module_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned DEFAULT NULL,
  `module_id` int(11) unsigned DEFAULT NULL,
  `module_data` text,
  `order` int(2) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `plugins` text,
  PRIMARY KEY (`page_module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `page_module` WRITE;
/*!40000 ALTER TABLE `page_module` DISABLE KEYS */;

INSERT INTO `page_module` (`page_module_id`, `page_id`, `module_id`, `module_data`, `order`, `active`, `plugins`)
VALUES
	(1,1,3,'{\"src\": \"assets/img/backgrounds/modules/banner-home.jpg\", \"content\":{\"text\":\"Get in touch and let us help you book your <i>dream holiday</i>\",\"button\": {\"text\":\"Book my dream holiday\",\"link\":\"contact\"}}}',2,1,NULL),
	(2,1,6,NULL,1,1,NULL),
	(3,1,4,'{\"tel\":\"0861 123 754\"}',0,1,NULL),
	(4,1,5,NULL,50,1,NULL),
	(5,2,2,'{\"src\": \"assets/img/backgrounds/modules/banner-about.jpg\"}',2,1,NULL),
	(6,2,6,NULL,1,1,NULL),
	(7,2,4,'{\"tel\":\"0861 123 754\"}',0,1,NULL),
	(8,2,5,NULL,50,1,NULL),
	(9,1,7,'{\"tiles\": [{\"src\":\"assets/img/tiles/all-inclusive.jpg\"},{\"src\":\"assets/img/tiles/full-board.jpg\"},{\"src\":\"assets/img/tiles/wide-hosted.jpg\"},{\"src\":\"assets/img/tiles/beach.jpg\"},{\"src\":\"assets/img/tiles/ski-chalet.jpg\"},{\"src\":\"assets/img/tiles/sports.jpg\"}]\r\n}',3,1,NULL),
	(10,3,3,'{\"src\": \"assets/img/backgrounds/modules/banner-contact.jpg\",\"content\":{\"text\":\"Your perfect <i>get away</i> awaits\",\"button\": {\"text\":\"Book my dream holiday\",\"link\":\"contact\"}}}',2,1,NULL),
	(11,3,6,NULL,1,1,NULL),
	(12,3,4,'{\"tel\": \"0419221111\"}',0,1,NULL),
	(13,3,5,NULL,50,1,NULL),
	(14,1,8,'{\"slides\": [{\"src\" : \"assets/img/sliders/top5locations/slide1.jpg\",\"title\" : \"Italy\",\"text\" : \"Text about Italy here. Modern Italian cuisine has developed through centuries of social and political changes, with roots as far back as the 4th century BC. Italian cuisine in itself takes heavy influences, including Etruscan, and Jewish.\",\"button\" : {\"text\":\"See Italian escapes\",\"link\": \"/destination/italy\"}}, {\"src\" : \"assets/img/sliders/top5locations/slide2.jpg\",\"title\" : \"Germany\",\"text\" : \"Text about Germany here. Modern German cuisine has developed through centuries of social and political changes, with roots as far back as the 4th century BC. Italian cuisine in itself takes heavy influences, including Etruscan, and Jewish.\",\"button\" :{\"text\":\"See German escapes\",\"link\": \"/destination/germany\"}}]}',4,1,'{\"js\":[\"assets/plugins/unslider/js/unslider-min.js\",\"application/views/modules/sliders/top5locations/script.js\"],\"css\": [\"assets/plugins/unslider/css/unslider.css\",\"assets/plugins/unslider/css/unslider-dots.css\"]}'),
	(15,4,4,'{\"tel\":\"0418887777\"}',0,1,NULL),
	(16,4,3,'{\"src\": \"assets/img/backgrounds/modules/banner-pureskiing.jpg\",\"content\":{\"text\":\"Your perfect <i>get away</i> awaits\",\"button\": {\"text\":\"Book my dream holiday\",\"link\":\"contact\"}}}',2,1,NULL),
	(17,4,6,NULL,1,1,NULL),
	(18,4,5,NULL,50,1,NULL),
	(19,5,3,'{\"src\": \"assets/img/backgrounds/modules/banner-puresport.jpg\",\"content\":{\"text\":\"Your perfect <i>get away</i> awaits\",\"button\": {\"text\":\"Book my dream holiday\",\"link\":\"contact\"}}}',2,1,NULL),
	(20,5,4,'{\"tel\":\"0713334444\"}',0,1,NULL),
	(21,5,6,NULL,1,1,NULL),
	(22,5,5,NULL,50,1,NULL),
	(23,6,3,'{\"src\": \"assets/img/backgrounds/modules/banner-robinson.jpg\", \"content\":{\"text\":\"Your dream <i>escape</i> awaits\",\"button\": {\"text\":\"Book my dream holiday\",\"link\":\"contact\"}}}',2,1,NULL),
	(24,6,4,'{\"tel\":\"0713335555\"}',0,1,NULL),
	(25,6,6,NULL,1,1,NULL),
	(26,6,5,NULL,50,1,NULL),
	(27,1,9,'{\"tiles\":[{\"src\":\"assets/img/tiles/twocolnews/tile1.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile2.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile3.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile4.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile5.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile6.jpg\",\"link\":\"link/value\"}],\"content\":{\"top\":{\"title\":\"Discover Pure Tours\",\"text\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at.\\n\\nMauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\\n\\nMaecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at. Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Cras posuere commodo dolor, eget porttitor ante sollicitudi.\",\"button\":{\"text\":\"Find out more about us\",\"link\":\"about\"}},\"bottom\":{\"title\":\"Latest travel News\",\"button\":{\"text\":\"Read all travel news\",\"link\":\"travel-news\"}}}}',5,1,NULL),
	(28,4,10,'{\"tiles\":[{\"src\":\"assets/img/tiles/row-of-four/all-inclusive.jpg\",\"link\":\"#all-inclusive\"},{\"src\":\"assets/img/tiles/row-of-four/full-board.jpg\",\"link\":\"#full-board\"},{\"src\":\"assets/img/tiles/row-of-four/hosted.jpg\",\"link\":\"#hosted\"},{\"src\":\"assets/img/tiles/row-of-four/chalets.jpg\",\"link\":\"#chalets\"}]}',3,1,NULL),
	(29,2,11,NULL,3,1,NULL),
	(30,3,12,NULL,3,1,'{\"js\":[\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDgGLsLhhjI17YizeDEDZi94aCfYScQQTI&callback=initMap\",\"application/views/modules/pages/contact/script.js\"],\"css\": []}'),
	(31,4,13,NULL,4,1,NULL),
	(32,5,15,NULL,4,1,NULL),
	(33,6,16,NULL,4,1,NULL),
	(34,7,17,'{\"package_id\":\"1\", \"packageGallery\": [{\"src\":\"assets/img/backgrounds/modules/package-gallery/1/1.jpg\"},{\"src\":\"assets/img/backgrounds/modules/package-gallery/1/2.jpg\"}]}',4,1,'{\"js\":[\"assets/plugins/unslider/js/unslider-min.js\",\"application/views/modules/sliders/package-gallery/script.js\"],\"css\": [\"assets/plugins/unslider/css/unslider.css\",\"assets/plugins/unslider/css/unslider-dots.css\"]}'),
	(35,7,1,'{\"src\": \"assets/img/backgrounds/modules/banner-package.jpg\"}',2,1,NULL),
	(36,7,4,'{\"tel\":\"0861 123 754\"}',0,1,NULL),
	(37,7,6,NULL,1,1,NULL),
	(38,7,5,NULL,50,1,NULL),
	(39,8,2,'{\"src\": \"assets/img/backgrounds/modules/banner-packages.jpg\"}',2,1,NULL),
	(40,8,4,'{\"tel\":\"0861 123 754\"}',0,1,NULL),
	(41,8,6,NULL,1,1,NULL),
	(43,8,20,NULL,3,1,'{\"js\":[\"assets/plugins/match-height/jquery.matchHeight-min.js\",\"application/views/modules/pages/packages/script.js\"],\"css\": []}'),
	(44,8,5,NULL,50,1,NULL);

/*!40000 ALTER TABLE `page_module` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pt_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pt_sessions`;

CREATE TABLE `pt_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pt_sessions` WRITE;
/*!40000 ALTER TABLE `pt_sessions` DISABLE KEYS */;

INSERT INTO `pt_sessions` (`id`, `ip_address`, `timestamp`, `data`)
VALUES
	('b988daa190060b2fd36686e84c1ac6ece68cc019','::1',1490826694,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303832363431333B757365727C613A323A7B733A383A22757365726E616D65223B733A363A22646577616C64223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B7D'),
	('ad2abf7af2c9311ca3092f2cce142acd60326582','::1',1490827049,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303832363734393B757365727C613A323A7B733A383A22757365726E616D65223B733A363A22646577616C64223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B7D'),
	('a8ff2ba5775379c9eae22d023f1c81439843b4eb','::1',1490827296,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303832373035323B757365727C613A323A7B733A383A22757365726E616D65223B733A363A22646577616C64223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B7D'),
	('33d3eaa0001cdeb76146ad732c418acab7c2f2b9','::1',1490827669,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303832373338393B757365727C613A323A7B733A383A22757365726E616D65223B733A363A22646577616C64223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B7D'),
	('b6c5129f53f92537cbc0caa88618b80f3944678f','::1',1490827994,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303832373639353B757365727C613A323A7B733A383A22757365726E616D65223B733A363A22646577616C64223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B7D'),
	('0aa73ca746713d2db8d2f4cae6b90647215ac637','::1',1490828090,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303832373939383B757365727C613A323A7B733A383A22757365726E616D65223B733A363A22646577616C64223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B7D');

/*!40000 ALTER TABLE `pt_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resort
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort`;

CREATE TABLE `resort` (
  `resort_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resort_name` varchar(128) DEFAULT NULL,
  `country_id` int(11) unsigned DEFAULT NULL,
  `resort_description` text,
  `banner` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`resort_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resort` WRITE;
/*!40000 ALTER TABLE `resort` DISABLE KEYS */;

INSERT INTO `resort` (`resort_id`, `resort_name`, `country_id`, `resort_description`, `banner`, `active`)
VALUES
	(1,'Resort test',1,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.','assets/img/modules/banners/resorts/1/banner.jpg',1),
	(2,'Resort test 2',2,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.','assets/img/modules/banners/resorts/1/banner.jpg',1),
	(3,'Resort test 3',2,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur beatae, consectetur doloremque eaque eos, facilis impedit laborum maxime nisi nostrum praesentium, qui quia quidem quis rerum sit temporibus.','assets/img/modules/banners/resorts/1/banner.jpg',1);

/*!40000 ALTER TABLE `resort` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resort_facility
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort_facility`;

CREATE TABLE `resort_facility` (
  `resort_facility_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`resort_facility_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resort_facility` WRITE;
/*!40000 ALTER TABLE `resort_facility` DISABLE KEYS */;

INSERT INTO `resort_facility` (`resort_facility_id`, `name`, `description`)
VALUES
	(1,'Kids entertainment','Entertainment for kids\nSlides\nToy room\nSupervision');

/*!40000 ALTER TABLE `resort_facility` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resort_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort_gallery`;

CREATE TABLE `resort_gallery` (
  `resort_gallery_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(128) DEFAULT NULL,
  `resort_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`resort_gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resort_gallery` WRITE;
/*!40000 ALTER TABLE `resort_gallery` DISABLE KEYS */;

INSERT INTO `resort_gallery` (`resort_gallery_id`, `path`, `resort_id`)
VALUES
	(1,'assets/img/modules/gallery/resort-gallery/1/1.jpg',1),
	(2,'assets/img/modules/gallery/resort-gallery/1/2.jpg',1);

/*!40000 ALTER TABLE `resort_gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resort_resort_facility
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort_resort_facility`;

CREATE TABLE `resort_resort_facility` (
  `resort_resort_faclity_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resort_id` int(11) unsigned DEFAULT NULL,
  `facility_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`resort_resort_faclity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resort_resort_facility` WRITE;
/*!40000 ALTER TABLE `resort_resort_facility` DISABLE KEYS */;

INSERT INTO `resort_resort_facility` (`resort_resort_faclity_id`, `resort_id`, `facility_id`)
VALUES
	(1,1,1);

/*!40000 ALTER TABLE `resort_resort_facility` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resort_resort_room
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort_resort_room`;

CREATE TABLE `resort_resort_room` (
  `resort_resort_room_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resort_id` int(11) unsigned DEFAULT NULL,
  `resort_room_id` int(10) unsigned DEFAULT NULL,
  `features` text,
  `thumbnail` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`resort_resort_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table resort_room
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort_room`;

CREATE TABLE `resort_room` (
  `resort_room_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL COMMENT 'name of the room',
  `description` varchar(255) DEFAULT NULL COMMENT 'introduction text',
  PRIMARY KEY (`resort_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resort_room` WRITE;
/*!40000 ALTER TABLE `resort_room` DISABLE KEYS */;

INSERT INTO `resort_room` (`resort_room_id`, `name`, `description`)
VALUES
	(1,'Single Room','Single room');

/*!40000 ALTER TABLE `resort_room` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `username`, `last_login`, `date_created`, `role_id`, `active`)
VALUES
	(1,'Dewald','Els','dewald@sumodevelopment.co.za','429c575a75b42c92ceb40b9738a3694c34fda2b81dc3d2c46795f4e1473a657c29d826d3795d23fd5f26705939c19a8845b38bedb54ef17517000862f29aa93f4U9JWgeZGfDZ5TxqWcCKiI34Dspzz1cfrQqgyguVqko=','dewald',NULL,'2016-10-26 22:37:04',1,1),
	(2,'Admin',NULL,'admin@puretours.co.za','429c575a75b42c92ceb40b9738a3694c34fda2b81dc3d2c46795f4e1473a657c29d826d3795d23fd5f26705939c19a8845b38bedb54ef17517000862f29aa93f4U9JWgeZGfDZ5TxqWcCKiI34Dspzz1cfrQqgyguVqko=','admin',NULL,'2016-10-27 08:12:31',1,1),
	(3,'John','Editor','editor@puretours.co.za','429c575a75b42c92ceb40b9738a3694c34fda2b81dc3d2c46795f4e1473a657c29d826d3795d23fd5f26705939c19a8845b38bedb54ef17517000862f29aa93f4U9JWgeZGfDZ5TxqWcCKiI34Dspzz1cfrQqgyguVqko=','editor',NULL,'2016-10-27 17:48:50',2,1);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `role_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;

INSERT INTO `user_role` (`role_id`, `name`, `active`)
VALUES
	(1,'Admin',1),
	(2,'Editor',1);

/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
