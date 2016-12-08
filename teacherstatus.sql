/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.5-10.1.16-MariaDB : Database - teacherstatus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`teacherstatus` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `teacherstatus`;

/*Table structure for table `dbavailability` */

DROP TABLE IF EXISTS `dbavailability`;

CREATE TABLE `dbavailability` (
  `id_availability` int(11) DEFAULT NULL,
  `nip_lecturer` char(18) DEFAULT NULL,
  `from` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(100) DEFAULT NULL,
  KEY `FK_dbavailability` (`nip_lecturer`),
  CONSTRAINT `FK_dbavailability` FOREIGN KEY (`nip_lecturer`) REFERENCES `dblecturer` (`nip_lecturer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dbavailability` */

/*Table structure for table `dblecturer` */

DROP TABLE IF EXISTS `dblecturer`;

CREATE TABLE `dblecturer` (
  `nip_lecturer` char(18) NOT NULL,
  `name_lecturer` varchar(20) DEFAULT NULL,
  `number_lecturer` varchar(14) DEFAULT NULL,
  `email_lecturer` varchar(22) DEFAULT NULL,
  `address_lecturer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nip_lecturer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dblecturer` */

insert  into `dblecturer`(`nip_lecturer`,`name_lecturer`,`number_lecturer`,`email_lecturer`,`address_lecturer`) values ('1242','ads',NULL,NULL,NULL),('21321','adsa',NULL,NULL,NULL),('2134','Andy',NULL,NULL,NULL),('23','dd',NULL,NULL,NULL),('2345324','A Haha',NULL,NULL,NULL),('34214','Jaaa',NULL,NULL,NULL);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `username` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `hak_akses` varchar(20) CHARACTER SET latin1 NOT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `login` */

insert  into `login`(`username`,`password`,`hak_akses`,`remember_token`,`created_at`,`updated_at`,`id`) values ('admin','$2y$10$eF21Dm.zj10f0EcG6O.D4OB2D1N9brzBbh.eIVZhOyPRgq6OYw6bi','admin','HPD5ZVa5EaPEc2eoXSj5woIa5rqmz5LXZEmPGmvdmjKzQK2Nb97anB6hG6P2','2016-12-04 09:13:44','2016-12-08 09:13:50',1),('andy','$2y$10$O0ZRXN3WFX0F6RlGFzOzIusH9VJPrMvPHOUX4BMNv.1phVou4um0C','dosen',NULL,'2016-12-05 16:02:05','2016-12-05 16:02:05',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
