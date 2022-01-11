/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 8.0.18 : Database - automobili
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`automobili` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `automobili`;

/*Table structure for table `drzava` */

DROP TABLE IF EXISTS `drzava`;

CREATE TABLE `drzava` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `drzava` */

insert  into `drzava`(`id`,`naziv`) values 
(1,'US'),
(2,'nemacka'),
(3,'francuska'),
(4,'japan');

/*Table structure for table `marka` */

DROP TABLE IF EXISTS `marka`;

CREATE TABLE `marka` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) DEFAULT NULL,
  `drzava` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drzava` (`drzava`),
  CONSTRAINT `marka_ibfk_1` FOREIGN KEY (`drzava`) REFERENCES `drzava` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `marka` */

insert  into `marka`(`id`,`naziv`,`drzava`) values 
(1,'BMW',2),
(2,'AUDI',2),
(3,'opel',2),
(4,'ford',1),
(5,'tojota',4),
(6,'nissan',4),
(7,'citroen',3),
(8,'pezo',3),
(9,'reno',3);

/*Table structure for table `model` */

DROP TABLE IF EXISTS `model`;

CREATE TABLE `model` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `marka` bigint(20) NOT NULL,
  `naziv` varchar(30) DEFAULT NULL,
  `karoserija` varchar(20) DEFAULT NULL,
  `kubikaza` int(11) DEFAULT NULL,
  `snaga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`marka`),
  KEY `marka` (`marka`),
  CONSTRAINT `model_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `marka` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `model` */

insert  into `model`(`id`,`marka`,`naziv`,`karoserija`,`kubikaza`,`snaga`) values 
(1,2,'A4','limuzina',1900,115),
(2,2,'A6','limuzina',3000,140),
(3,1,'x3','terenski',1600,110),
(4,1,'x5','terenski',2000,125),
(5,2,'Q5','terenski',2000,110),
(6,5,'yaris cross','terenski',2000,130),
(7,6,'nissan navara','pikap',2000,190),
(8,5,'prius','terenski',1798,99);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
