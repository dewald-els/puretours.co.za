# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.28)
# Database: puretours
# Generation Time: 2016-10-26 05:59:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `module_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(80) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `module_category_id` int(10) unsigned DEFAULT NULL,
  `module_path` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;

INSERT INTO `module` (`module_id`, `module_name`, `date_created`, `module_category_id`, `module_path`)
VALUES
	(1,'Banner - Small','2016-10-26 00:11:37',1,'modules/banners/small/index'),
	(2,'Banner - Medium','2016-10-26 00:12:14',1,'modules/banners/medium/index'),
	(3,'Banner - Large','2016-10-26 00:12:14',1,'modules/banners/laarge/index'),
	(4,'Header','2016-10-26 00:12:27',3,'modules/header/index'),
	(5,'Footer','2016-10-26 00:12:56',4,'modules/footer/index');

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
	(4,'Footer');

/*!40000 ALTER TABLE `module_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `page_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(128) DEFAULT NULL,
  `show_header` tinyint(1) DEFAULT '1',
  `show_footer` tinyint(1) DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;

INSERT INTO `page` (`page_id`, `page_title`, `show_header`, `show_footer`, `date_created`, `slug`)
VALUES
	(1,'Home',1,1,'2016-10-26 00:11:18','/home');

/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_module`;

CREATE TABLE `page_module` (
  `page_module_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned DEFAULT NULL,
  `module_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`page_module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `page_module` WRITE;
/*!40000 ALTER TABLE `page_module` DISABLE KEYS */;

INSERT INTO `page_module` (`page_module_id`, `page_id`, `module_id`)
VALUES
	(1,1,2);

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




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
