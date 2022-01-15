/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 8.0.18 : Database - telefoni
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`telefoni` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `telefoni`;

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
(2,'juzna koreja'),
(3,'kina'),
(4,'finska');

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
(1,'Apple',1),
(2,'Huawei',3),
(3,'Xiaomi',3),
(4,'Nokia',4),
(5,'Samsung',2);

/*Table structure for table `model` */

DROP TABLE IF EXISTS `model`;

CREATE TABLE `model` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `marka` bigint(20) NOT NULL,
  `naziv` varchar(30) DEFAULT NULL,
  `procesor` varchar(20) DEFAULT NULL,
  `kamera` int(11) DEFAULT NULL,
  `memorija` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`marka`),
  KEY `marka` (`marka`),
  CONSTRAINT `model_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `marka` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `model` */

insert  into `model`(`id`,`marka`,`naziv`,`procesor`,`kamera`,`memorija`) values 
(1,2,'P smart','Octa core',48,128),
(2,2,'P20 lite','Octa core',16,256),
(3,1,'iPhone 13','Hexa-core',12,128),
(4,3,'11T','Octa-core',108,128),
(5,5,'Galaxy S21','Octa-core',12,128),
(6,5,'Galaxy Z Flip3','Hexa-core',48,128);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

