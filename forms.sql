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
INSERT INTO `menus` VALUES (1,'Form Submission (A) - MySQL','a/','form-a-mysql.php','_self'),(2,'Form Submission (B) - MySQL','b/','form-b-mysql.php','_self'),(3,'Form Submission (C) - MySQL','c/','form-c-mysql.php','_self'),(4,'Form Submission (D) - MySQL','d/','form-d-mysql.php','_self'),(5,'Form Submission (E) - MySQL','e/','form-e-mysql.php','_self'),(7,'Form Submission (F) - MySQL','f/','form-f-mysql.php','_self'),(8,'Form Submission (G) - MySQL','g/','form-g-mysql.php','_self'),(9,'Form Submission (H) - MySQL','h/','form-h-mysql.php','_self'),(10,'Home','/','','');
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `release` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `macos` VALUES (1,'Kodiak','Public Beta','2000-09-13'),(2,'Cheetah','10.0','2001-03-21'),(3,'Puma','10.1','2001-09-25'),(4,'Jaguar','10.2','2002-08-24'),(5,'Panther','10.3','2003-10-24'),(6,'Tiger','10.4','2005-04-29'),(7,'Leopard','10.5','2007-10-26'),(8,'Snow Leopard','10.6','2009-08-28'),(9,'Lion','10.7','2010-07-20'),(10,'Mountain Lion','10.8','2012-07-25'),(11,'Mavericks','10.9','2013-10-22'),(12,'Yosemite','10.10','2014-10-16'),(13,'El Capitan','10.11','2015-09-30'),(14,'Sierra','10.12','2016-09-20'),(15,'High Sierra','10.13','2017-09-25'),(16,'Mojave','10.14','2018-09-24'),(17,'Catalina','10.15','2019-10-07'),(18,'Big Sur','11.0','2020-11-12');
