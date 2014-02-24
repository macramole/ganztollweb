/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.20-log : Database - ganztoll
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admins` */

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `admins` */

insert  into `admins`(`id`,`user`,`password`,`last_login`,`email`) values (1,'admin','a8f5f167f44f4964e6c998dee827110c',NULL,NULL);

/*Table structure for table `admins_permisos` */

CREATE TABLE `admins_permisos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAdmin` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `admins_permisos` */

/*Table structure for table `clean_urls` */

CREATE TABLE `clean_urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `url` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `language` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `table` (`table`,`node_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `clean_urls` */

/*Table structure for table `configuracion` */

CREATE TABLE `configuracion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `configuracion` */

/*Table structure for table `coordenadas` */

CREATE TABLE `coordenadas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) DEFAULT NULL,
  `idStill` int(10) unsigned NOT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `coordenadas` */

insert  into `coordenadas`(`id`,`codigo`,`idStill`,`weight`) values (21,'<area alt=\'\' title=\'\' href=\'http://www.google.com\' shape=\'poly\' target=\'_blank\'  coords=\'750,382,818,378,827,530,731,532\' />',1,1),(20,'<area alt=\'\' title=\'\' href=\'www.google.com\' shape=\'poly\'  coords=\'524,368,641,372,643,521,541,533\' target=\'_blank\' />',1,0);

/*Table structure for table `files` */

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `node_id` int(10) unsigned DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` tinytext COLLATE utf8_bin,
  `flag` tinyint(10) NOT NULL DEFAULT '0',
  `weight` int(11) NOT NULL DEFAULT '0',
  `language` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `files` */

insert  into `files`(`id`,`table`,`node_id`,`filename`,`description`,`flag`,`weight`,`language`) values (4,'stills',1,'Still_0140.jpg',NULL,0,0,NULL),(5,'stills',8,'Still_0257.jpg',NULL,0,0,NULL),(6,'stills',9,'Still_0390.jpg',NULL,0,0,NULL),(7,'stills',10,'Still_0460.jpg',NULL,0,0,NULL),(8,'stills',11,'Still_0511.jpg',NULL,0,0,NULL),(9,'stills',12,'Still_0629.jpg',NULL,0,0,NULL),(10,'stills',13,'Still_0766.jpg',NULL,0,0,NULL),(11,'stills',14,'Still_0830.jpg',NULL,0,0,NULL),(12,'stills',15,'Still_0954.jpg',NULL,0,0,NULL),(13,'stills',16,'Still_1043.jpg',NULL,0,0,NULL),(14,'stills',17,'Still_1140.jpg',NULL,0,0,NULL),(15,'stills',18,'Still_1243.jpg',NULL,0,0,NULL),(16,'stills',19,'Still_1393.jpg',NULL,0,0,NULL),(17,'stills',20,'Still_1498.jpg',NULL,0,0,NULL),(18,'stills',21,'Still_1511.jpg',NULL,0,0,NULL),(19,'stills',22,'Still_1697.jpg',NULL,0,0,NULL),(20,'stills',23,'Still_1740.jpg',NULL,0,0,NULL),(21,'stills',24,'Still_1816.jpg',NULL,0,0,NULL),(22,'stills',25,'Still_1969.jpg',NULL,0,0,NULL),(23,'stills',26,'Still_2014.jpg',NULL,0,0,NULL),(24,'stills',27,'Still_2174.jpg',NULL,0,0,NULL);

/*Table structure for table `files_thumbs` */

CREATE TABLE `files_thumbs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFile` int(10) unsigned NOT NULL,
  `filename` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `files_thumbs` */

insert  into `files_thumbs`(`id`,`idFile`,`filename`) values (4,4,'cab052cd1f22e19d8a83d950761344b9.jpg'),(5,5,'7bce9975ce9d15cd0bd3a4657ac41b28.jpg'),(6,6,'c8ef42db06165e96d2af90dea00ab642.jpg'),(7,7,'f4102bc9ade75eea3a22cd364d0b53cf.jpg'),(8,8,'372867ad13ca411fdc215cdee610d3e0.jpg'),(9,9,'1d02cf74cd1213151abb27689eb0d646.jpg'),(10,10,'6b8ac839576b00d6e0c8cd3e80826ff9.jpg'),(11,11,'417e8cce66aab91ba35284baf4442080.jpg'),(12,12,'6ec1109885c138f532ffb1796b962669.jpg'),(13,13,'14f6a1ea99f1df425061472568e7d59f.jpg'),(14,14,'2995b81fd90d720b89df8cbd503420f5.jpg'),(15,15,'d042239226254c5ac02710b0d5cd8d23.jpg'),(16,16,'0cfdbed9a4c66b9215e3f550a0bbe66c.jpg'),(17,17,'af8852506a5b0bde34d22a8f2cd18575.jpg'),(18,18,'297aff6c1794f67b6965310497ad05d7.jpg'),(19,19,'249c7bc98bc8f8cb53619c1af884ab95.jpg'),(20,20,'685fad50a58e0eff06778d0859b32283.jpg'),(21,21,'d4a2f8774e696e3363a4f38d3a5fcb42.jpg'),(22,22,'1eba60e0f3e2d3bd2f4168fe67b38b12.jpg'),(23,23,'d20f3b9f49ed173a75558f94e1689741.jpg'),(24,24,'dd1bf3d5afff547703a0f04d1145cdb6.jpg'),(25,7,'de70d851d1754a068b255f0eb5059d2b.jpg'),(26,4,'5942e7ae2299f90d19400f0758e58c65.jpg'),(27,5,'626c2a8c80ad833876fac7157e4cd608.jpg'),(28,6,'6d89e8d54199229c5a228ddb75d14963.jpg'),(29,8,'e38dab79479537c907bdca7dc7c44163.jpg'),(30,9,'1191c15532576e36f33447a286b0fd8b.jpg'),(31,10,'2c9f1a051f2863987079e14d8de121ab.jpg'),(32,11,'0d0f2ecec017be64c4023d77e0dc93bb.jpg'),(33,12,'9063e66f5a8075952237e14f698d3863.jpg'),(34,13,'2f72da0e5e385272017336fcdee186df.jpg'),(35,14,'372c802d4f8e9ff5c2e21fd0a6519045.jpg'),(36,15,'283c4f832deeacbfa60cb703b68b0ecb.jpg'),(37,16,'73fea2cfd1124d8d8c2e84e06f43cefc.jpg'),(38,17,'a2df05bdb5147a56fa5f089dbb7b6e36.jpg'),(39,18,'b40fadaa990b5a0c331846a35d34ff0e.jpg'),(40,19,'6eed89d4b7149c15c2487d2356e4942e.jpg'),(41,20,'6f1ce6d52d697a61a9453362b4d7d5dd.jpg'),(42,21,'9672921a83310a3fd5cf4afc40b6eb32.jpg'),(43,22,'12b16e2f1aa06ceb7ff971e13218c723.jpg'),(44,23,'a3d3479bce176a8dbb4cef394fbdd7da.jpg'),(45,24,'debaece39ecfe80974f821ec47ca0c9d.jpg'),(46,4,'43a892ea6333cbd1af1355fcfb721548.jpg'),(47,7,'3dee63b66d21ad70751211c7b8ce14e6.jpg'),(48,5,'18ae66776064fcae67a9821747553fb6.jpg'),(49,6,'838aed7ec403e19d81577113017c18f7.jpg'),(50,8,'882e1dd36cd6fb6da773c192ee1f84fb.jpg'),(51,9,'baa4c0249baf25f8546c42b5c7e23aaa.jpg'),(52,10,'0b7e32067c0fe115a470e8714354e385.jpg'),(53,11,'a2bc4b2ed165d74d2f42836e1028c161.jpg'),(54,12,'73d541aa83ef6565936d4b7a8417585c.jpg'),(55,13,'0eb4f1db109980e4be396e6e0721ca91.jpg'),(56,14,'e34850ac1865510ea91fb967a3e6928f.jpg'),(57,15,'e935b491df10d4024db23adbcbccf596.jpg'),(58,16,'efcd035bc0a9b87f421623ec442cae94.jpg'),(59,17,'f356f908be54bbd640162cdc68cf363b.jpg'),(60,18,'01ae1d360213748b3c04dddb68df4edd.jpg'),(61,19,'9903fdf8080c341b610d59c2f89a7cfa.jpg'),(62,20,'6c05d578c890c00d6664fc30e36e3733.jpg'),(63,21,'0938f35ed04dbc0f7119b8641e770ead.jpg'),(64,22,'ab173165689288c9b4b4426875dc743d.jpg'),(65,23,'38c48427f7c8f074c75fece71597c056.jpg'),(66,24,'d84acc1cf82cfa414bdb67ae863047ed.jpg');

/*Table structure for table `stills` */

CREATE TABLE `stills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weight` varchar(5) DEFAULT NULL,
  `esVideo` tinyint(4) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `stills` */

insert  into `stills`(`id`,`weight`,`esVideo`,`video`) values (1,'1',0,''),(10,'6',0,''),(8,'4',0,''),(9,'5',0,''),(11,'7',0,''),(12,'8',0,''),(13,'9',0,''),(14,'10',0,''),(15,'11',0,''),(16,'12',0,''),(17,'13',0,''),(18,'14',0,''),(19,'15',0,''),(20,'16',0,''),(21,'17',0,''),(22,'18',0,''),(23,'19',0,''),(24,'20',0,''),(25,'21',0,''),(26,'22',0,''),(27,'23',0,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
