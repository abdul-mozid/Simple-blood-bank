/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.25 : Database - blood_bank
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blood_bank` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `blood_bank`;

/*Table structure for table `blood_group` */

DROP TABLE IF EXISTS `blood_group`;

CREATE TABLE `blood_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_group` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `blood_group` */

insert  into `blood_group`(`id`,`blood_group`) values (1,'A+'),(2,'A-'),(3,'B+'),(4,'B-'),(5,'AB+'),(6,'AB-'),(7,'O+'),(8,'O-');

/*Table structure for table `districts` */

DROP TABLE IF EXISTS `districts`;

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

/*Data for the table `districts` */

insert  into `districts`(`district_id`,`name`) values (1,'Dhaka'),(2,'Faridpur'),(3,'Gazipur'),(4,'Gopalganj'),(5,'Jamalpur'),(6,'Kishorgonj'),(7,'Madaripur'),(8,'Manikganj'),(9,'Munshiganj'),(10,'Mymensingh'),(11,'Narayanganj'),(12,'Narsingdi'),(13,'Netrakona'),(14,'Rajbari'),(15,'Shariatpur'),(16,'Sherpur'),(17,'Tangail'),(18,'Bandarban'),(19,'Brahmanbaria'),(20,'Chandpur'),(21,'Chittagong'),(22,'Comilla'),(23,'Cox\'s Bazar'),(24,'Feni'),(25,'Khagrachhari'),(26,'Lakshmipur'),(27,'Noakhali'),(28,'Rangamati'),(29,'Bogra'),(30,'Chapai Nawabganj'),(31,'Dinajpur'),(32,'Gaibandha'),(33,'Joypurhat'),(34,'Kurigram'),(35,'Lalmonirhat'),(36,'Naogaon'),(37,'Natore'),(38,'Nilphamari'),(39,'Pabna'),(40,'Panchagarh'),(41,'Rajshahi'),(42,'Rangpur'),(43,'Sirajganj'),(44,'Thakurgaon'),(45,'Bagerhat'),(46,'Chuadanga'),(47,'Jessore'),(48,'Jhenaidah'),(49,'Khulna'),(50,'Kushtia'),(51,'Magura'),(52,'Meherpur'),(53,'Narail'),(54,'Satkhira'),(55,'Barguna'),(56,'Barisal'),(57,'Bhola'),(58,'Jhalokati'),(59,'Patuakhali'),(60,'Pirojpur'),(61,'Habiganj'),(62,'Maulvibazar'),(63,'Sunamganj'),(64,'Sylhet');

/*Table structure for table `donor_information` */

DROP TABLE IF EXISTS `donor_information`;

CREATE TABLE `donor_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `age` int(6) DEFAULT NULL,
  `sex` text,
  `mobile` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `donor_information` */

insert  into `donor_information`(`id`,`name`,`blood_group`,`age`,`sex`,`mobile`,`location`,`photo`,`registration_date`) values (1,'Test','',14,'FEMALE','01725331122','Chapai Nawabganj','','2018-01-14'),(2,'Diagnostic Center','B+',23445234,'FEMALE','234324','Faridpur','','2018-01-14'),(3,'Diagnostic Center','B+',234324,'FEMALE','0234324234','Dinajpur','','2018-01-14'),(4,'Diagnostic Center','B+',234234,'FEMALE','243234','Barisal','uploads/children_malnutrition.png','2018-01-14'),(5,'Diagnostic Center','AB+',234234,'FEMALE','234234234','Barguna','uploads/cholera_vac.png','2018-01-14'),(6,'Diagnostic Center','AB+',234234,'FEMALE','234234234','Barguna','uploads/cholera_vac.png','2018-01-14'),(7,'Diagnostic Center','AB+',123,'FEMALE','234324243','Barisal','uploads/Abscess.png','2018-01-14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
