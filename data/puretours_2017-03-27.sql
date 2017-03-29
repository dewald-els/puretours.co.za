# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.6.35)
# Database: puretours
# Generation Time: 2017-03-27 12:05:00 +0000
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
	('b303d02d1e105c894d0acf285c70e01d','::1',1490542675,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303534323637353B'),
	('053111d659747b392af130fbcd3b1af3','::1',1490542675,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303534323637353B'),
	('dfb5c7022f255be5706e2b9f7b55f9f9','::1',1490542675,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303534323637353B'),
	('9295063b4c5984f3e957ef81c91173b5','::1',1490542675,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303534323637353B'),
	('61e2ea38ab4914f0184530cc5d005fb7','::1',1490542675,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303534323637353B'),
	('42f27af8dfc2588a19b9ea0926874f11','::1',1490599252,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235323B'),
	('e0cb0cd28fd1729872bd7d8b0c784c6c','::1',1490599252,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235323B'),
	('3716c7c18a2d8e88cdeec96c9d4ec1ec','::1',1490599253,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235333B'),
	('17633492500e2d6cb97ed838366a7537','::1',1490599254,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235343B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('99939ed6dc3ef50e7a7acd3151da22df','::1',1490599254,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235343B'),
	('33c71a556329f747dc275de623944867','::1',1490599254,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235343B'),
	('b49e0e0210dbae208322890223836d83','::1',1490599254,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235343B'),
	('c55cedb7160ea388e151278243003609','::1',1490599255,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235353B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('d19b053a811209eadc642126dee8b83c','::1',1490599255,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235353B'),
	('b6ebcba0b38d858a3e8b7daff90c240d','::1',1490599255,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235353B'),
	('a7e81da85e5532cdc698e676c9b9655e','::1',1490599256,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235363B'),
	('1a76a7a03f1cb7f3f1e28f87a6f18cbe','::1',1490599256,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235363B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('f65b164e10a59ddeb8fb7664f029f9e9','::1',1490599256,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235363B'),
	('365c565c087dd924dace7287b1273e8b','::1',1490599256,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235363B'),
	('cd3b5695cb01860bb7ed8806fabcb0b2','::1',1490599256,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235363B'),
	('8736d0ba00517261b312dfba40c7a3dc','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('6fe96b2bd946d20a1062a67782f7cdc6','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B'),
	('6d05c9b9bf4f9d902e3eba5c353640cf','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B'),
	('85cbc628e4bcb81c206edcebd91cf51b','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B'),
	('f392b1909ee4b383802a3ec9b2e1f8df','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('d368f962bce9c6a3a9b4c6730ec21f75','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B'),
	('f04a1fb9a45561b06134df2902292708','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B'),
	('a038c0ec8a9437cecb775e8ae23a20b1','::1',1490599257,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235373B'),
	('34453913416f12b47f4ec6cfd5121072','::1',1490599258,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235383B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('eaf928d83d34df0a62a6dfbae11e6af7','::1',1490599258,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235383B'),
	('495e895b2cd2aacfe76d29ad03e22f4e','::1',1490599258,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235383B'),
	('43b850ba84456c5c8a05e9f039c4b613','::1',1490599258,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393235383B'),
	('06950e635294305e222419906f24e58b','::1',1490599276,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393237363B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('85fd3e0256efeb5d77504471a479cc0e','::1',1490599309,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393330393B'),
	('f52c82e57349cfbe43945d9bfcf88c8d','::1',1490599309,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393330393B'),
	('737e8b211062a2a509b02cada624d64b','::1',1490599311,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393331313B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('7fb87180b5a2a07cdb1788c46f0bc661','::1',1490599311,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393331313B'),
	('b953318cdefdc99e3dbfba4b03d36507','::1',1490599311,X'5F5F63695F6C6173745F726567656E65726174657C693A313439303539393331313B');

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
	(1,'Dewald','Els','dewald@sumodevelopment.co.za','a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=','dewald',NULL,'2016-10-26 22:37:04',1,1),
	(2,'Admin',NULL,'admin@puretours.co.za','a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=','admin',NULL,'2016-10-27 08:12:31',1,1),
	(3,'John','Editor','editor@puretours.co.za','a83ed14cedd287482224af3cadfe186a9761e79aa4023bbce881a3afac89fb451549f446bcfe00f7698d288ef0f367f221b5d491118996f76821758f0cc32b3eCRzKHouXqWpEhHKLwodjL48gFMemHhb01sknNEbOyHY=','editor',NULL,'2016-10-27 17:48:50',2,1);

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
