-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: fit_v3_20210906
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_id` int(11) NOT NULL COMMENT 'Context ID',
  `category_id_parent` int(11) DEFAULT NULL COMMENT 'ID of category parent',
  `category_id_parent_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category parent',
  `category_id_child_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category child',
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category name',
  `category_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `category_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Slug in URL',
  `category_url` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category url',
  `category_icon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category icon',
  `category_overview` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category overview',
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category description',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,1,NULL,NULL,NULL,'Teacher',1,'teacher','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:12:18','2021-11-12 05:12:18'),(2,1,NULL,NULL,NULL,'Student',1,'student','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:12:33','2021-11-12 05:12:33'),(3,6,NULL,NULL,'{\"4\":1,\"5\":1}','2020-2021',1,'2020-2021','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:26:30','2021-11-12 05:27:01'),(4,6,3,'{\"3\":1}',NULL,'2020-2021-HK1',1,'2020-2021-hk1','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:26:49','2021-11-12 05:26:49'),(5,6,3,'{\"3\":1}',NULL,'2020-2021-HK2',1,'2020-2021-hk2','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:27:01','2021-11-12 05:27:01'),(6,6,NULL,NULL,'{\"7\":1,\"8\":1}','2021-2022',1,'2021-2022','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:27:29','2021-11-12 05:27:59'),(7,6,6,'{\"6\":1}',NULL,'2021-2022-HK1',1,'2021-2022-hk1','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:27:49','2021-11-12 05:27:49'),(8,6,6,'{\"6\":1}',NULL,'2021-2022-HK2',1,'2021-2022-hk2','asdf','1','Lorem ipsum dolor sit amet, consectetur adipisicing elit.','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:27:59','2021-11-12 05:27:59');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes_users`
--

DROP TABLE IF EXISTS `classes_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes_users` (
  `class_user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `course_id` int(11) NOT NULL COMMENT 'Course ID',
  `user_id` int(11) NOT NULL COMMENT 'User ID',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`class_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes_users`
--

LOCK TABLES `classes_users` WRITE;
/*!40000 ALTER TABLE `classes_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `classes_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `company_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Company name',
  `company_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Company slug',
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company website',
  `company_tax_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company tax code',
  `company_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Company address',
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company image',
  `company_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Company description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contexts`
--

DROP TABLE IF EXISTS `contexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contexts` (
  `context_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context name',
  `context_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context references',
  `context_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context key',
  `context_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Context slug',
  `context_notes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category overview',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`context_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contexts`
--

LOCK TABLES `contexts` WRITE;
/*!40000 ALTER TABLE `contexts` DISABLE KEYS */;
INSERT INTO `contexts` VALUES (1,'User level','user/level','ab7e417e2dddc5e5240b586d454e',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:09','2021-11-12 04:43:09'),(2,'User department','user/department','ab7e417e2dddc5e5240b586d454f',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:09','2021-11-12 04:43:09'),(3,'Admin posts','admin/posts','ab7e417e2dddc5240b586d454e',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:09','2021-11-12 04:43:09'),(4,'Admin slideshows','admin/slideshows','ab7e417e2dddc5e5240b586d454f',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:09','2021-11-12 04:43:09'),(5,'Admin pexcels','admin/company','abee417e2dddc5240b586d466',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:28','2021-11-12 04:43:28'),(6,'Admin courses','admin/courses','abee417e2dddc5240b586d499',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:29','2021-11-12 04:43:29'),(7,'Admin crawlers','admin/crawlers','abee417e2dddc5240b586d454e',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:30','2021-11-12 04:43:30'),(8,'Admin pexcels','admin/pexcels','abee417e2dddc5240b586d455',NULL,NULL,99,NULL,1,1,NULL,'2021-11-12 04:43:31','2021-11-12 04:43:31');
/*!40000 ALTER TABLE `contexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `course_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `teacher_id` int(11) NOT NULL COMMENT 'User teacher ID',
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course name',
  `course_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course slug',
  `course_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Course start date',
  `course_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Course end date',
  `course_enroll_file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Enroll file path',
  `course_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Course image',
  `course_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Course description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,7,2,'Thực tập doanh nghiệp [ Cô Bùi Thị Phương Thảo]','thuc-tap-doanh-nghiep-co-bui-thi-phuong-thao','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:28:57'),(2,7,3,'Thực tập doanh nghiệp [Thầy Cao Trần Thái Anh]','thuc-tap-doanh-nghiep-co-bui-thi-phuong-thao','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:36:01'),(3,7,8,'Thực tập doanh nghiệp [Thầy Lê Diên Tâm]','thuc-tap-doanh-nghiep-thay-le-dien-tam','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:32:34'),(4,7,15,'Thực tập doanh nghiệp [Thầy Nguyễn Thanh Vũ]','thuc-tap-doanh-nghiep-thay-nguyen-thanh-vu','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:33:30'),(5,7,17,'Thực tập doanh nghiệp [Cô Nguyễn Thị Mộng Hằng]','thuc-tap-doanh-nghiep-co-nguyen-thi-mong-hang','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:33:47'),(6,7,18,'Thực tập doanh nghiệp [Cô Ngô Minh Anh Thư]','thuc-tap-doanh-nghiep-co-ngo-minh-anh-thu','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:34:13'),(7,7,19,'Thực tập doanh nghiệp [Thầy Phan Gia Phước]','thuc-tap-doanh-nghiep-thay-phan-gia-phuoc','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:34:30'),(8,7,21,'Thực tập doanh nghiệp [Cô Phan Thị Thể]','thuc-tap-doanh-nghiep-co-phan-thi-the','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:34:48'),(9,7,24,'Thực tập doanh nghiệp [Thầy Trương Bá Thái]','thuc-tap-doanh-nghiep-thay-truong-ba-thai','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:35:01'),(10,7,27,'Thực tập doanh nghiệp [Thầy Đoàn Quốc Thuận]','thuc-tap-doanh-nghiep-thay-doan-quoc-thuan','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:35:17'),(11,7,20,'Thực tập doanh nghiệp [Thầy Phan Thanh Nhuần]','thuc-tap-doanh-nghiep-thay-phan-thanh-nhuan','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:37:18'),(12,7,14,'Thực tập doanh nghiệp [Cô Nguyễn Phong Lan]','thuc-tap-doanh-nghiep-co-nguyen-phong-lan','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:37:33'),(15,7,14,'Thực tập doanh nghiệp [Cô Nguyễn Ngọc Cẩm Tú]','thuc-tap-doanh-nghiep-co-nguyen-ngoc-cam-tu','13/11/2021','13/01/2022','[]',NULL,NULL,NULL,NULL,1,1,NULL,'2021-11-12 05:28:57','2021-11-12 05:37:33');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crawler_patterns`
--

DROP TABLE IF EXISTS `crawler_patterns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crawler_patterns` (
  `pattern_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `site_id` int(11) NOT NULL COMMENT 'Site ID',
  `pattern_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `pattern_machine_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Machine name',
  `pattern_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pattern_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crawler_patterns`
--

LOCK TABLES `crawler_patterns` WRITE;
/*!40000 ALTER TABLE `crawler_patterns` DISABLE KEYS */;
/*!40000 ALTER TABLE `crawler_patterns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crawler_regular_expressions`
--

DROP TABLE IF EXISTS `crawler_regular_expressions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crawler_regular_expressions` (
  `regular_expression_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `pattern_id` int(11) NOT NULL COMMENT 'Pattern ID',
  `regular_expression_value` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Regular expression',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`regular_expression_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crawler_regular_expressions`
--

LOCK TABLES `crawler_regular_expressions` WRITE;
/*!40000 ALTER TABLE `crawler_regular_expressions` DISABLE KEYS */;
/*!40000 ALTER TABLE `crawler_regular_expressions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crawler_sites`
--

DROP TABLE IF EXISTS `crawler_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crawler_sites` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Site name',
  `site_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Site slug',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Site url',
  `site_type` int(11) NOT NULL COMMENT 'Site type',
  `site_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Site image',
  `site_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Site description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crawler_sites`
--

LOCK TABLES `crawler_sites` WRITE;
/*!40000 ALTER TABLE `crawler_sites` DISABLE KEYS */;
/*!40000 ALTER TABLE `crawler_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crawler_works_categories`
--

DROP TABLE IF EXISTS `crawler_works_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crawler_works_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `site_id` int(11) NOT NULL COMMENT 'Site ID',
  `category_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `category_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Url',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image',
  `category_overview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Overview',
  `category_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crawler_works_categories`
--

LOCK TABLES `crawler_works_categories` WRITE;
/*!40000 ALTER TABLE `crawler_works_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `crawler_works_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crawler_works_categories_jobs`
--

DROP TABLE IF EXISTS `crawler_works_categories_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crawler_works_categories_jobs` (
  `category_job_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `job_id` int(11) NOT NULL COMMENT 'Job ID',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crawler_works_categories_jobs`
--

LOCK TABLES `crawler_works_categories_jobs` WRITE;
/*!40000 ALTER TABLE `crawler_works_categories_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `crawler_works_categories_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crawler_works_jobs`
--

DROP TABLE IF EXISTS `crawler_works_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crawler_works_jobs` (
  `job_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `site_id` int(11) NOT NULL COMMENT 'Site ID',
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `job_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL',
  `job_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Image',
  `job_overview` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Overview',
  `job_requirements` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Requirements',
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crawler_works_jobs`
--

LOCK TABLES `crawler_works_jobs` WRITE;
/*!40000 ALTER TABLE `crawler_works_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `crawler_works_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'superadmin','{\"_superadmin\":1}',0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(2,'editor','{\"_user-editor\":1,\"_group-editor\":1}',0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(3,'base admin','{\"_user-editor\":1}',0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internship` (
  `internship_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `course_id` int(11) NOT NULL COMMENT 'Course ID',
  `user_id` int(11) NOT NULL COMMENT 'User ID',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Internship name',
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship name',
  `company_instructor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship name',
  `company_instructor_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship name',
  `company_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Internship slug',
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship website',
  `company_tax_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship tax code',
  `company_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Internship address',
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship image',
  `company_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Internship description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`internship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internship`
--

LOCK TABLES `internship` WRITE;
/*!40000 ALTER TABLE `internship` DISABLE KEYS */;
/*!40000 ALTER TABLE `internship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internship_diary`
--

DROP TABLE IF EXISTS `internship_diary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internship_diary` (
  `internship_diary_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `internship_id` int(11) NOT NULL COMMENT 'Internship ID',
  `diary_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Start date',
  `diary_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'End date',
  `diary_mon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mon',
  `diary_tue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Tue',
  `diary_wed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Wed',
  `diary_thu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Thu',
  `diary_fri` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Fri',
  `diary_sat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Sat',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`internship_diary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internship_diary`
--

LOCK TABLES `internship_diary` WRITE;
/*!40000 ALTER TABLE `internship_diary` DISABLE KEYS */;
/*!40000 ALTER TABLE `internship_diary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021_01_03_102927_create_classes_users_table',1),(2,'2021_01_03_102927_create_company_table',1),(3,'2021_01_03_102927_create_course_table',1),(4,'2021_01_03_102927_create_internship_diary_table',1),(5,'2021_01_03_102927_create_internship_table',1),(6,'2021_02_23_084351_create_categories_table',1),(7,'2021_02_23_084351_create_crawler_patterns_table',1),(8,'2021_02_23_084351_create_crawler_regular_expressions_table',1),(9,'2021_02_23_084351_create_crawler_sites_table',1),(10,'2021_02_23_084351_create_crawler_works_categories_jobs_table',1),(11,'2021_02_23_084351_create_crawler_works_categories_table',1),(12,'2021_02_23_084351_create_crawler_works_jobs_table',1),(13,'2021_02_23_084351_create_posts_table',1),(14,'2021_02_23_084351_create_site_stackoverflow_answers_table',1),(15,'2021_02_23_084351_create_site_stackoverflow_comments_table',1),(16,'2021_02_23_084351_create_site_stackoverflow_questions_table',1),(17,'2021_02_23_084351_create_site_stackoverflow_tags_questions_table',1),(18,'2021_02_23_084351_create_site_stackoverflow_tags_table',1),(19,'2021_02_23_084351_create_slideshow_styles_table',1),(20,'2021_02_23_084351_create_slideshows_table',1),(21,'2021_02_23_084421_create_contexts_table',1),(22,'2021_02_24_095545_create_users_table',1),(23,'2021_02_24_095623_create_user_groups_table',1),(24,'2021_02_24_095637_create_groups_table',1),(25,'2021_02_24_100000_create_password_resets_table',1),(26,'2021_02_24_122145_create_profile_field_types',1),(27,'2021_02_24_122150_create_user_profile_table',1),(28,'2021_02_24_122155_create_profile_field',1),(29,'2021_02_24_160516_create_permission_table',1),(30,'2021_02_24_225988_migration_cartalyst_sentry_install_throttle',1),(31,'2021_09_11_084351_create_pexcels_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission name',
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Permission slug',
  `protected` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Permission description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` VALUES (1,NULL,'superadmin','_superadmin',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(2,NULL,'user editor','_user-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(3,NULL,'group editor','_group-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(4,NULL,'permission editor','_permission-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(5,NULL,'profile type editor','_profile-editor',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(6,NULL,'teacher','_teacher',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:44:53','2021-11-12 04:44:53'),(7,NULL,'student','_student',0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:45:02','2021-11-12 04:45:02');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pexcels`
--

DROP TABLE IF EXISTS `pexcels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pexcels` (
  `pexcel_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `pexcel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `pexcel_range_data` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Range data',
  `pexcel_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Json value',
  `pexcel_file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'File path',
  `pexcel_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pexcel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pexcels`
--

LOCK TABLES `pexcels` WRITE;
/*!40000 ALTER TABLE `pexcels` DISABLE KEYS */;
/*!40000 ALTER TABLE `pexcels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `slideshow_id` int(11) DEFAULT NULL COMMENT 'Slideshow ID',
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `post_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `post_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `post_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `post_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `post_cache_comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Comments of post',
  `post_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `post_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) unsigned NOT NULL,
  `profile_field_type_id` int(10) unsigned NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`),
  KEY `profile_field_profile_id_index` (`profile_id`),
  CONSTRAINT `profile_field_profile_field_type_id_foreign` FOREIGN KEY (`profile_field_type_id`) REFERENCES `profile_field_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `profile_field_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `user_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_field`
--

LOCK TABLES `profile_field` WRITE;
/*!40000 ALTER TABLE `profile_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_field_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_field_type`
--

LOCK TABLES `profile_field_type` WRITE;
/*!40000 ALTER TABLE `profile_field_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_field_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_stackoverflow_answers`
--

DROP TABLE IF EXISTS `site_stackoverflow_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_stackoverflow_answers` (
  `answer_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `question_id` int(11) NOT NULL COMMENT 'Question ID',
  `answer_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `answer_url_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL user',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_stackoverflow_answers`
--

LOCK TABLES `site_stackoverflow_answers` WRITE;
/*!40000 ALTER TABLE `site_stackoverflow_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_stackoverflow_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_stackoverflow_comments`
--

DROP TABLE IF EXISTS `site_stackoverflow_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_stackoverflow_comments` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_id` int(11) NOT NULL COMMENT 'Context ID',
  `comment_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context Name',
  `comment_url_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL user',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'content',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_stackoverflow_comments`
--

LOCK TABLES `site_stackoverflow_comments` WRITE;
/*!40000 ALTER TABLE `site_stackoverflow_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_stackoverflow_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_stackoverflow_questions`
--

DROP TABLE IF EXISTS `site_stackoverflow_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_stackoverflow_questions` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `question_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `question_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL',
  `question_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `question_url_user` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL user',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_stackoverflow_questions`
--

LOCK TABLES `site_stackoverflow_questions` WRITE;
/*!40000 ALTER TABLE `site_stackoverflow_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_stackoverflow_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_stackoverflow_tags`
--

DROP TABLE IF EXISTS `site_stackoverflow_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_stackoverflow_tags` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `tag_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `tag_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Url',
  `tag_overview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Overview',
  `tag_num_questions` int(11) DEFAULT NULL COMMENT 'Number questions',
  `tag_other` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Other info',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_stackoverflow_tags`
--

LOCK TABLES `site_stackoverflow_tags` WRITE;
/*!40000 ALTER TABLE `site_stackoverflow_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_stackoverflow_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_stackoverflow_tags_questions`
--

DROP TABLE IF EXISTS `site_stackoverflow_tags_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_stackoverflow_tags_questions` (
  `tag_question_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `tag_id` int(11) NOT NULL COMMENT 'Tag ID',
  `question_id` int(11) NOT NULL COMMENT 'Question ID',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tag_question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_stackoverflow_tags_questions`
--

LOCK TABLES `site_stackoverflow_tags_questions` WRITE;
/*!40000 ALTER TABLE `site_stackoverflow_tags_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_stackoverflow_tags_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow_styles`
--

DROP TABLE IF EXISTS `slideshow_styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow_styles` (
  `style_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `style_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style name',
  `style_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style image',
  `style_view_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View file',
  `style_js_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Js file',
  `style_css_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Css file',
  `style_view_content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View content',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow_styles`
--

LOCK TABLES `slideshow_styles` WRITE;
/*!40000 ALTER TABLE `slideshow_styles` DISABLE KEYS */;
/*!40000 ALTER TABLE `slideshow_styles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshows`
--

DROP TABLE IF EXISTS `slideshows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshows` (
  `slideshow_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `style_id` int(11) NOT NULL COMMENT 'Style ID',
  `slideshow_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow name',
  `slideshow_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow overview',
  `slideshow_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow description',
  `slideshow_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `slideshow_images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of image paths',
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshows`
--

LOCK TABLES `slideshows` WRITE;
/*!40000 ALTER TABLE `slideshows` DISABLE KEYS */;
/*!40000 ALTER TABLE `slideshows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT 0,
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,1,'127.0.0.1',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `avatar` blob DEFAULT NULL,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` smallint(6) NOT NULL DEFAULT 0,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profile_user_id_index` (`user_id`),
  CONSTRAINT `user_profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profile`
--

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` VALUES (1,1,'Admin','System',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 04:43:08'),(2,2,'Bùi Thị Phương','Thảo',NULL,NULL,1,NULL,'admin',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:44:35','2021-11-12 05:21:01'),(3,3,'Cao Trần Thái','Anh',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:45:49','2021-11-12 04:45:49'),(4,4,'Nguyễn Huy','Hoàng',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:46:11','2021-11-12 04:46:11'),(5,5,'Hoàng Công','Trình',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:46:38','2021-11-12 04:46:38'),(6,6,'Huỳnh Thị Phương','Thủy',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:46:57','2021-11-12 04:46:57'),(7,7,'Lâm Thị Phương','Thảo',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:47:16','2021-11-12 04:47:16'),(8,8,'Lê Diên','Tâm',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:47:34','2021-11-12 04:47:34'),(9,9,'Lê','Thọ',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:47:55','2021-11-12 04:47:55'),(10,10,'Mai Kỷ','Tuyên',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:48:16','2021-11-12 04:48:16'),(11,11,'Nguyễn Hoàng','Nguyên',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:48:35','2021-11-12 04:48:35'),(12,12,'Nguyễn Ngọc Cẩm','Tú',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:48:53','2021-11-12 04:48:53'),(13,13,'Nguyễn Ngọc Ánh','Mỹ',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:49:11','2021-11-12 04:49:11'),(14,14,'Nguyễn Phong','Lan',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:49:38','2021-11-12 04:49:38'),(15,15,'Nguyễn Thanh','Vũ',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:49:57','2021-11-12 04:49:57'),(16,16,'Nguyễn Thị Hồng','Mỹ',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:50:17','2021-11-12 04:50:17'),(17,17,'Nguyễn Thị Mộng','Hằng',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:50:34','2021-11-12 04:50:34'),(18,18,'Ngô Minh Anh','Thư',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:50:55','2021-11-12 04:50:55'),(19,19,'Phan Gia','Phước',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:51:49','2021-11-12 04:51:49'),(20,20,'Phan Thanh','Nhuần',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:52:19','2021-11-12 04:52:19'),(21,21,'Phan Thị','Thể',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:52:39','2021-11-12 04:52:39'),(22,22,'Phan Thị','Trinh',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:00','2021-11-12 04:53:00'),(23,23,'Tiêu Kim','Cương',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:16','2021-11-12 04:53:16'),(24,24,'Trương Bá','Thái',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:35','2021-11-12 04:53:35'),(25,25,'Nguyễn Thị','Vân',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:55','2021-11-12 04:53:55'),(26,26,'Bùi Thanh Yên','Thảo',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:54:19','2021-11-12 04:54:19'),(27,27,'Đoàn Quốc','Thuận',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:55:00','2021-11-12 04:55:00'),(28,28,'Đồng Thị','Hoan',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:55:18','2021-11-12 04:55:18');
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User id',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User email',
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'User name',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `activation_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','admin','$2y$10$Qy6MUDGtabZ8AVwfTcJsAOyqNE.UPz3DsAHMUxQiTOcBmU76zPV5.',NULL,1,0,NULL,NULL,'2021-11-12 05:52:40','$2y$10$aWkzJ0wpXV6WmYpQdeL9m.mnzCkKXJw7ggdXblejGgHhPdeJOHYjm',NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:43:08','2021-11-12 05:52:40'),(2,'thaobtp@tdc.edu.vn','thaobtp','$2y$10$N9s/3IPZkOEvOiihuEjFmOmQlTaKOrf6YsTkZ9zB95cyUcJXFHZUe','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:44:35','2021-11-12 04:45:21'),(3,'anhctt@tdc.edu.vn','anhctt','$2y$10$K3Npx6Ooal7AZ4HElcafjuQfCtFUylakHJ9jCOrFBSn.fxSQd6MFu','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:45:49','2021-11-12 04:45:53'),(4,'hoanghn@tdc.edu.vn','hoanghn','$2y$10$rL2KxgJqUleLNWRGsJK3xub1QTnU3jroGuukgu0DzDqQV.qTXlNZS','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:46:11','2021-11-12 04:46:16'),(5,'trinhhc@tdc.edu.vn','trinhhc','$2y$10$Ns4C0idtB4xRHOiuckxB5.xft6nqbTh7zjeO0FSXll3KIGGr.gde.','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:46:38','2021-11-12 04:46:43'),(6,'thuyhtp@tdc.edu.vn','thuyhtp','$2y$10$TxN64vnmGxEl13umlUV9iu8C/ORNy.rYYrnENx67o5whvXwW2FvdS','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:46:57','2021-11-12 04:47:01'),(7,'thaoltp@tdc.edu.vn','thaoltp','$2y$10$lLglRO8CMKfY1cnxyLLxQ.6YbDko2vI/kq65tThNLwLH9r/fN2KES','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:47:16','2021-11-12 04:47:21'),(8,'tamld@tdc.edu.vn','tamld','$2y$10$py7LYjUaFWEO5QfMW7gaUOCIbu6PyamIerPi.l/VWPaCQ3S7FrFNC','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:47:34','2021-11-12 04:47:39'),(9,'thole@tdc.edu.vn','thole','$2y$10$3TiJjJ2BeJRX5.8GkZdxZ.gOyY8qZHQbcOX0KVLDIom5e/Vf6um2G','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:47:55','2021-11-12 04:48:00'),(10,'tuyenmk@tdc.edu.vn','tuyenmk','$2y$10$gJ3NfoeL3Ha2WD7G4gmiyuyr6zFNOsc/shKQ8ncgIZVtIDHpDFqS.','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:48:16','2021-11-12 04:48:21'),(11,'nguyennh@tdc.edu.vn','nguyennh','$2y$10$MNCyoUY8nThCiMjJ.OvxqeRtKzGV.Usbj2Eb.lG9CrydJtiVWxsf6','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:48:35','2021-11-12 04:48:40'),(12,'tunnc@tdc.edu.vn','tunnc','$2y$10$7HaX9p8jSEjmzU8o13aYj.QbRYPcGgtQnPVnpru6qsfdSCpTFdLGG','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:48:53','2021-11-12 04:48:57'),(13,'nguyenngocanhmy@tdc.edu.vn','nguyenngocanhmy','$2y$10$UgjUOZ9qLCz5Eoqt3c0cM.TzTgHQMHyih9JL2SmZ6ZZdDMg4xtcmW','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:49:11','2021-11-12 04:49:16'),(14,'nguyenphonglan@tdc.edu.vn','nguyenphonglan','$2y$10$I0Eq.kGCa73aZc5gIoZX7ejeGDZ26TjrGDgilDJQn52RGtRyG206m','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:49:38','2021-11-12 04:49:46'),(15,'vunt@tdc.edu.vn','vunt','$2y$10$5X1VrzANSXO1gtxJB6xKy.COXe9BD265EhEEOV0QI1Qi06UO0Ffbi','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:49:57','2021-11-12 04:50:02'),(16,'mynth@tdc.edu.vn','mynth','$2y$10$a198rCBg/gONRRIwRAly5OdRU4fp9c.4ba/AmKtQWKkQR.PiKt3Ua','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:50:17','2021-11-12 04:50:21'),(17,'hangntm@tdc.edu.vn','hangntm','$2y$10$lKbMMGGpb5OuqjcIfssdUuqWwwX7UpijojnMMcp9aVQY85RiE3g/O','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:50:34','2021-11-12 04:50:39'),(18,'thu.ngo@tdc.edu.vn','thu.ngo','$2y$10$QMZi0YFTjtZikXHzLfQiM.APriPNP8.6.yqQ8ZrcsOUrChvi9prc.','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:50:55','2021-11-12 04:51:29'),(19,'phuocpg@tdc.edu.vn','phuocpg','$2y$10$Jhjqv8WaH3l6yAeW.8riI.uUO0CupQciLBD1523ecN30nHtcxL4lS','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:51:49','2021-11-12 04:51:53'),(20,'ptnhuan@tdc.edu.vn','ptnhuan','$2y$10$TtV4EjdiaHj/tcMEbZWQn.1vAlmYXkl40FrhlL8.v6KsPDLnIUuPG','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:52:19','2021-11-12 04:52:24'),(21,'thept@tdc.edu.vn','thept','$2y$10$6CMKNozfZf4H9/vEBC3/JuznOG7MbZN4X2QAXrv3ZD7SZZ2JlCe7K','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:52:39','2021-11-12 04:52:43'),(22,'trinhpt@tdc.edu.vn','trinhpt','$2y$10$eDRyJBWVCjHWkdxa4Ma.jecQKr.7i76px.A3GVCq.KJmXrg14pLH6','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:00','2021-11-12 04:53:05'),(23,'cuongtk@tdc.edu.vn','cuongtk','$2y$10$NNwisHwAFBsNGnAVPIuz4u4uf/mKgF64j9mgP9X8ZM7K8xZjUqq9.','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:16','2021-11-12 04:53:20'),(24,'truongbathai@tdc.edu.vn','truongbathai','$2y$10$XDpiHMA0.eydNchmdINpROF4zmJvMxZC4n84ngqDv/SsN8I2oMtqi','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:35','2021-11-12 04:53:40'),(25,'vannt@tdc.edu.vn','vannt','$2y$10$2SemuLrjuX9NL.6Tf.MtoOv155Qrjt0V83qaB7JFsJUP2yO0OSgO2','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:53:55','2021-11-12 04:54:05'),(26,'buithanhyenthao@tdc.edu.vn',NULL,'$2y$10$YDc7L92X3GeKYEho/.EnteaG9mJeDKTBJOVbOiIIHjsKXb.lH59wi','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:54:19','2021-11-12 04:54:24'),(27,'thuanqd@tdc.edu.vn',NULL,'$2y$10$UvhtR5g9SZJqUjkdQtGKwuCG6izRd7Mtz37t6P5BaXJ.IQguJ1cdy','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:55:00','2021-11-12 04:55:04'),(28,'donghoan@tdc.edu.vn',NULL,'$2y$10$q6.pUENIkxChMvbYxHRYY.UjKyH6HeuD55b4v4/hw50qZtheMPdbm','{\"_teacher\":1}',1,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-11-12 04:55:18','2021-11-12 04:55:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-12 20:16:25
