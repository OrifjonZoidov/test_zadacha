/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.3.22-MariaDB : Database - zadacha_laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zadacha_laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `zadacha_laravel`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(6,'2014_10_12_000000_create_users_table',1),
(7,'2014_10_12_100000_create_password_resets_table',1),
(8,'2019_08_19_000000_create_failed_jobs_table',1),
(9,'2021_06_26_091700_create_sotrudnikis_table',1),
(11,'2021_06_30_053838_create_odelis_table',2),
(12,'2021_07_01_053237_create_odel_sotrudniks_table',3);

/*Table structure for table `odel_sotrudniks` */

DROP TABLE IF EXISTS `odel_sotrudniks`;

CREATE TABLE `odel_sotrudniks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `odeli_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotrudniki_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `odel_sotrudniks` */

insert  into `odel_sotrudniks`(`id`,`odeli_id`,`sotrudniki_id`,`created_at`,`updated_at`) values 
(1,'AAAAA','11',NULL,NULL),
(2,'SSSSSS','11',NULL,NULL),
(3,'IT','11',NULL,NULL),
(4,'eew33','11',NULL,NULL),
(5,'3333','11',NULL,NULL),
(6,'AAAAA','12',NULL,NULL),
(7,'SSSSSS','12',NULL,NULL),
(8,'IT','12',NULL,NULL),
(9,'eew33','12',NULL,NULL),
(10,'AAAAA','13',NULL,NULL),
(11,'SSSSSS','13',NULL,NULL),
(12,'HR','14',NULL,NULL),
(13,'IT','14',NULL,NULL),
(14,'IT','15',NULL,NULL),
(15,'18','16',NULL,NULL),
(16,'19','16',NULL,NULL),
(17,'19','17',NULL,NULL),
(18,'20','17',NULL,NULL),
(19,'19','18',NULL,NULL),
(20,'20','18',NULL,NULL);

/*Table structure for table `odelis` */

DROP TABLE IF EXISTS `odelis`;

CREATE TABLE `odelis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_otdela` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `odelis` */

insert  into `odelis`(`id`,`name_otdela`,`created_at`,`updated_at`) values 
(18,'HR','2021-07-02 05:19:52','2021-07-02 05:19:52'),
(19,'IT','2021-07-02 05:19:57','2021-07-02 05:19:57'),
(20,'CSS','2021-07-02 09:06:01','2021-07-02 09:06:01');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `sotrudnikis` */

DROP TABLE IF EXISTS `sotrudnikis`;

CREATE TABLE `sotrudnikis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Familiya` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Otchestvo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jins` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Z_Plata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Otdeli` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sotrudnikis` */

insert  into `sotrudnikis`(`id`,`Nom`,`Familiya`,`Otchestvo`,`Jins`,`Z_Plata`,`Otdeli`,`created_at`,`updated_at`) values 
(14,'ZOIDOV','ORIF','GUGRONJOOVICH','Мужской','1112',NULL,'2021-07-02 05:21:38','2021-07-02 05:21:38'),
(15,'RAHMATOV','AMIR','RAVSHANOVICH','Мужской','3333',NULL,'2021-07-02 05:23:50','2021-07-02 05:23:50'),
(16,'Ismoil','Rahmatov','Ilhomovich','Мужской','322',NULL,'2021-07-02 06:20:52','2021-07-02 06:20:52'),
(17,'Abduhafiz','Raupov','Abdu','Мужской','442',NULL,'2021-07-02 09:09:41','2021-07-02 09:09:41'),
(18,'Abdu','Abdu','Abdu','Мужской','2000',NULL,'2021-07-02 11:08:28','2021-07-02 11:08:28');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
