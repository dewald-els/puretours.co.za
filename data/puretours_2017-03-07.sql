# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.6.28)
# Database: puretours
# Generation Time: 2017-03-07 08:05:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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
	(16,'Robinson',8,'modules/pages/robinson','robinson',1,'2017-03-07 09:31:16');

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
	(9,'Pacakge builders');

/*!40000 ALTER TABLE `module_categories` ENABLE KEYS */;
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
	(2,'About','2016-10-27 15:33:11','about',1,NULL,NULL),
	(3,'Contact','2016-10-27 15:33:34','contact',1,NULL,NULL),
	(4,'Pure Skiing','2016-11-01 15:12:19','pure-skiing',1,NULL,NULL),
	(5,'Pure Sport','2016-11-01 15:12:25','pure-sport',1,NULL,NULL),
	(6,'Robinson Club','2016-11-01 15:12:34','robinson-club',1,NULL,NULL);

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
	(1,1,3,'{\"src\": \"assets/img/backgrounds/modules/banner-home.jpg\"}',2,1,NULL),
	(2,1,6,NULL,1,1,NULL),
	(3,1,4,'{\"tel\":\"0861 123 754\"}',0,1,NULL),
	(4,1,5,NULL,50,1,NULL),
	(5,2,2,'{\"src\": \"assets/img/backgrounds/modules/banner-about.jpg\"}',2,1,NULL),
	(6,2,6,NULL,1,1,NULL),
	(7,2,4,'{\"tel\":\"0861 123 754\"}',0,1,NULL),
	(8,2,5,NULL,50,1,NULL),
	(9,1,7,'{\"tiles\": [{\"src\":\"assets/img/tiles/all-inclusive.jpg\"},{\"src\":\"assets/img/tiles/full-board.jpg\"},{\"src\":\"assets/img/tiles/wide-hosted.jpg\"},{\"src\":\"assets/img/tiles/beach.jpg\"},{\"src\":\"assets/img/tiles/ski-chalet.jpg\"},{\"src\":\"assets/img/tiles/sports.jpg\"}]\r\n}',3,1,NULL),
	(10,3,3,'{\"src\": \"assets/img/backgrounds/modules/banner-contact.jpg\"}',2,1,NULL),
	(11,3,6,NULL,1,1,NULL),
	(12,3,4,'{\"tel\": \"0419221111\"}',0,1,NULL),
	(13,3,5,NULL,50,1,NULL),
	(14,1,8,'{\"slides\": [{\"src\" : \"assets/img/sliders/top5locations/slide1.jpg\",\"title\" : \"Italy\",\"text\" : \"Text about Italy here. Modern Italian cuisine has developed through centuries of social and political changes, with roots as far back as the 4th century BC. Italian cuisine in itself takes heavy influences, including Etruscan, and Jewish.\",\"button\" : {\"text\":\"See Italian escapes\",\"link\": \"/destination/italy\"}}, {\"src\" : \"assets/img/sliders/top5locations/slide2.jpg\",\"title\" : \"Germany\",\"text\" : \"Text about Germany here. Modern German cuisine has developed through centuries of social and political changes, with roots as far back as the 4th century BC. Italian cuisine in itself takes heavy influences, including Etruscan, and Jewish.\",\"button\" :{\"text\":\"See German escapes\",\"link\": \"/destination/germany\"}}]}',4,1,'{\"js\":[\"assets/plugins/unslider/js/unslider-min.js\",\"application/views/modules/sliders/top5locations/script.js\"],\"css\": [\"assets/plugins/unslider/css/unslider.css\",\"assets/plugins/unslider/css/unslider-dots.css\"]}'),
	(15,4,4,'{\"tel\":\"0418887777\"}',0,1,NULL),
	(16,4,3,'{\"src\": \"assets/img/backgrounds/modules/banner-pureskiing.jpg\"}',2,1,NULL),
	(17,4,6,NULL,1,1,NULL),
	(18,4,5,NULL,50,1,NULL),
	(19,5,3,'{\"src\": \"assets/img/backgrounds/modules/banner-puresport.jpg\"}',2,1,NULL),
	(20,5,4,'{\"tel\":\"0713334444\"}',0,1,NULL),
	(21,5,6,NULL,1,1,NULL),
	(22,5,5,NULL,50,1,NULL),
	(23,6,3,'{\"src\": \"assets/img/backgrounds/modules/banner-robinson.jpg\"}',2,1,NULL),
	(24,6,4,'{\"tel\":\"0713335555\"}',0,1,NULL),
	(25,6,6,NULL,1,1,NULL),
	(26,6,5,NULL,50,1,NULL),
	(27,1,9,'{\"tiles\":[{\"src\":\"assets/img/tiles/twocolnews/tile1.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile2.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile3.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile4.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile5.jpg\",\"link\":\"link/value\"},{\"src\":\"assets/img/tiles/twocolnews/tile6.jpg\",\"link\":\"link/value\"}],\"content\":{\"top\":{\"title\":\"Discover Pure Tours\",\"text\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at.\\n\\nMauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\\n\\nMaecenas pretium ut justo at scelerisque. Donec feugiat ligula nec nisl ornare viverra. Aliquam accumsan risus purus, id hendrerit velit dictum at. Mauris eget felis ex. Proin pharetra non purus et posuere. Donec elementum sit amet turpis quis molestie. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Suspendisse at posuere ex. Cras posuere commodo dolor, eget porttitor ante sollicitudin et. Cras posuere commodo dolor, eget porttitor ante sollicitudi.\",\"button\":{\"text\":\"Find out more about us\",\"link\":\"about\"}},\"bottom\":{\"title\":\"Latest travel News\",\"button\":{\"text\":\"Read all travel news\",\"link\":\"travel-news\"}}}}',5,1,NULL),
	(28,4,10,'{\"tiles\":[{\"src\":\"assets/img/tiles/row-of-four/all-inclusive.jpg\",\"link\":\"#all-inclusive\"},{\"src\":\"assets/img/tiles/row-of-four/full-board.jpg\",\"link\":\"#full-board\"},{\"src\":\"assets/img/tiles/row-of-four/hosted.jpg\",\"link\":\"#hosted\"},{\"src\":\"assets/img/tiles/row-of-four/chalets.jpg\",\"link\":\"#chalets\"}]}',3,1,NULL),
	(29,2,11,NULL,3,1,NULL),
	(30,3,12,NULL,3,1,'{\"js\":[\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDgGLsLhhjI17YizeDEDZi94aCfYScQQTI&callback=initMap\",\"application/views/modules/pages/contact/script.js\"],\"css\": []}'),
	(31,4,13,NULL,4,1,NULL),
	(32,5,15,NULL,4,1,NULL),
	(33,6,16,NULL,4,1,NULL);

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
	('356b5255c084b9ad48cfe9441b825d192083aef8','::1',1480444591,X'5F5F63695F6C6173745F726567656E65726174657C693A313438303434343335353B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('3220b1d2a0eb91ab71e5ba854bf1ba9d655f95ab','::1',1480445179,X'5F5F63695F6C6173745F726567656E65726174657C693A313438303434353130343B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('b9f1246eb308277b89cdd610f6369e2e21002484','::1',1480445735,X'5F5F63695F6C6173745F726567656E65726174657C693A313438303434353438323B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('1647ddbdd9f72729b8c205c84b9b264c19361be6','::1',1480446088,X'5F5F63695F6C6173745F726567656E65726174657C693A313438303434353830333B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('8083e5ddf349080a71a3cb84408ee56de617f33d','::1',1480446333,X'5F5F63695F6C6173745F726567656E65726174657C693A313438303434363133303B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('87b631f87f4fad5611b33284a7b3db474674e399','::1',1488552601,X'5F5F63695F6C6173745F726567656E65726174657C693A313438383535323538303B'),
	('0bf153c66c5f30b47512934d366de5fa88491f07','::1',1488553175,X'5F5F63695F6C6173745F726567656E65726174657C693A313438383535323838333B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('c80d5456f0fcb0afd57e8eea3a90a8696c334767','::1',1488553196,X'5F5F63695F6C6173745F726567656E65726174657C693A313438383535333138343B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D'),
	('90fcca0748020d9f96fe7826b36727fe9cc27d10','::1',1488553531,X'5F5F63695F6C6173745F726567656E65726174657C693A313438383535333533303B757365727C4F3A383A22737464436C617373223A31303A7B733A373A22757365725F6964223B733A313A2231223B733A31303A2266697273745F6E616D65223B733A363A22446577616C64223B733A393A226C6173745F6E616D65223B733A333A22456C73223B733A353A22656D61696C223B733A32383A22646577616C644073756D6F646576656C6F706D656E742E636F2E7A61223B733A383A2270617373776F7264223B733A3137323A22613833656431346365646432383734383232323461663363616466653138366139373631653739616134303233626263653838316133616661633839666234353135343966343436626366653030663736393864323838656630663336376632323162356434393131313839393666373638323137353866306363333262336543527A4B486F75587157704568484B4C776F646A4C343867464D656D4868623031736B6E4E45624F7948593D223B733A383A22757365726E616D65223B733A363A22646577616C64223B733A31303A226C6173745F6C6F67696E223B4E3B733A31323A22646174655F63726561746564223B733A31393A22323031362D31302D32362032323A33373A3034223B733A373A22726F6C655F6964223B733A313A2231223B733A363A22616374697665223B733A313A2231223B7D');

/*!40000 ALTER TABLE `pt_sessions` ENABLE KEYS */;
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
