-- MySQL dump 10.13  Distrib 5.7.39, for osx11.0 (x86_64)
--
-- Host: localhost    Database: forms
-- ------------------------------------------------------
-- Server version	5.7.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `macos`
--

DROP TABLE IF EXISTS `macos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `release` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macos`
--

LOCK TABLES `macos` WRITE;
/*!40000 ALTER TABLE `macos` DISABLE KEYS */;
INSERT INTO `macos` VALUES (1,'Kodiak','Public Beta','2000-09-13'),(2,'Cheetah','10.0','2001-03-21'),(3,'Puma','10.1','2001-09-25'),(4,'Jaguar','10.2','2002-08-24'),(5,'Panther','10.3','2003-10-24'),(6,'Tiger','10.4','2005-04-29'),(7,'Leopard','10.5','2007-10-26'),(8,'Snow Leopard','10.6','2009-08-28'),(9,'Lion','10.7','2010-07-20'),(10,'Mountain Lion','10.8','2012-07-25'),(11,'Mavericks','10.9','2013-10-22'),(12,'Yosemite','10.10','2014-10-16'),(13,'El Capitan','10.11','2015-09-30'),(14,'Sierra','10.12','2016-09-20'),(15,'High Sierra','10.13','2017-09-25'),(16,'Mojave','10.14','2018-09-24'),(17,'Catalina','10.15','2019-10-07'),(18,'Big Sur','11','2020-11-12'),(19,'Monterey','12','2021-10-25'),(20,'Ventura','13','2022-10-24'),(21,'Sonoma','14','2023-09-26');
/*!40000 ALTER TABLE `macos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Form Submission (A) - MySQL','a/','form-a-mysql.php','_self'),(2,'Form Submission (B) - MySQL','b/','form-b-mysql.php','_self'),(3,'Form Submission (C) - MySQL','c/','form-c-mysql.php','_self'),(4,'Form Submission (D) - MySQL','d/','form-d-mysql.php','_self'),(5,'Form Submission (E) - MySQL','e/','form-e-mysql.php','_self'),(7,'Form Submission (F) - MySQL','f/','form-f-mysql.php','_self'),(8,'Form Submission (G) - MySQL','g/','form-g-mysql.php','_self'),(9,'Form Submission (H) - MySQL','h/','form-h-mysql.php','_self'),(10,'Home','/','','');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-09  8:41:09
