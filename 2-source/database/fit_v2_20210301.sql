-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2021 at 10:02 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit_v2_20210301`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_id` int(11) NOT NULL COMMENT 'Context ID',
  `category_id_parent` int(11) DEFAULT NULL COMMENT 'ID of category parent',
  `category_id_parent_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category parent',
  `category_id_child_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category child',
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category name',
  `category_order` int(11) NOT NULL COMMENT 'Order in list of categories',
  `category_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `category_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category url',
  `category_icon` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category icon',
  `category_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category overview',
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category description',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `context_id`, `category_id_parent`, `category_id_parent_str`, `category_id_child_str`, `category_name`, `category_order`, `category_slug`, `category_url`, `category_icon`, `category_overview`, `category_description`, `category_image`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, NULL, 'Java Advanced - RESTful', 1, 'java-advanced-restful', 'asfasfasf', 'sfasfasf', 'pluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelect', '<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>', NULL, 99, NULL, 1, 1, NULL, '2021-03-08 02:26:53', '2021-03-08 02:26:53'),
(2, 3, NULL, NULL, NULL, 'Java Advanced - RESTful', 1, 'java-advanced-restful', 'asfasfasf', 'sfasfasf', 'pluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelectpluckSelect', '<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>\r\n<p>pluckSelectpluckSelectpluckSelectpluckSelect</p>', NULL, 99, NULL, 1, 1, NULL, '2021-03-08 02:26:59', '2021-03-08 02:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `contact_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email',
  `contact_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Phone',
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Title',
  `contact_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contexts`
--

DROP TABLE IF EXISTS `contexts`;
CREATE TABLE IF NOT EXISTS `contexts` (
  `context_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context name',
  `context_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context key',
  `context_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context references',
  `context_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Context slug',
  `context_notes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category overview',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`context_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contexts`
--

INSERT INTO `contexts` (`context_id`, `context_name`, `context_key`, `context_ref`, `context_slug`, `context_notes`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'User level', 'ab7e417e2dddc5e5240b586d454e', 'user/level', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(2, 'User department', 'ab7e417e2dddc5e5240b586d454f', 'user/department', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(3, 'Admin posts', 'ab7e417e2dddc5240b586d454e', 'admin/posts', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-03-08 02:26:27', '2021-03-08 02:26:27'),
(4, 'Admin slideshows', 'ab7e417e2dddc5e5240b586d454f', 'admin/slideshows', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-03-08 02:26:27', '2021-03-08 02:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `crawler_patterns`
--

DROP TABLE IF EXISTS `crawler_patterns`;
CREATE TABLE IF NOT EXISTS `crawler_patterns` (
  `pattern_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `site_id` int(11) NOT NULL COMMENT 'Sites ID',
  `pattern_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `pattern_machine_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Machine name',
  `pattern_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pattern_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crawler_patterns`
--

INSERT INTO `crawler_patterns` (`pattern_id`, `site_id`, `pattern_name`, `pattern_machine_name`, `pattern_description`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tag name', 'tag-name', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 99, NULL, 1, 1, NULL, '2021-03-08 19:32:06', '2021-03-08 19:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `crawler_regular_expressions`
--

DROP TABLE IF EXISTS `crawler_regular_expressions`;
CREATE TABLE IF NOT EXISTS `crawler_regular_expressions` (
  `regular_expression_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `pattern_id` int(11) NOT NULL COMMENT 'Pattern ID',
  `regular_expression_value` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Regular expression',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`regular_expression_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crawler_regular_expressions`
--

INSERT INTO `crawler_regular_expressions` (`regular_expression_id`, `pattern_id`, `regular_expression_value`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(27, 1, '3333', 99, NULL, 1, 1, NULL, '2021-03-10 02:04:24', '2021-03-10 02:04:24'),
(26, 1, '222', 99, NULL, 1, 1, NULL, '2021-03-10 02:04:24', '2021-03-10 02:04:24'),
(25, 1, '1222', 99, NULL, 1, 1, NULL, '2021-03-10 02:04:24', '2021-03-10 02:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `crawler_sites`
--

DROP TABLE IF EXISTS `crawler_sites`;
CREATE TABLE IF NOT EXISTS `crawler_sites` (
  `site_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Sites name',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Sites url',
  `site_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Sites image',
  `site_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crawler_sites`
--

INSERT INTO `crawler_sites` (`site_id`, `site_name`, `site_url`, `site_image`, `site_description`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Stack Overflow', 'https://stackoverflow.com/', '/photos/1/logo.svg', '<p>Lorem ipsum dolor sit am</p>', 99, NULL, 1, 1, NULL, '2021-03-08 19:29:28', '2021-03-08 19:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '{\"_superadmin\":1}', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(2, 'editor', '{\"_user-editor\":1,\"_group-editor\":1}', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(3, 'base admin', '{\"_user-editor\":1}', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2021_02_23_084351_create_categories_table', 1),
(34, '2021_02_23_084351_create_contacts_table', 1),
(35, '2021_02_23_084351_create_posts_table', 1),
(36, '2021_02_23_084351_create_slideshow_styles_table', 1),
(37, '2021_02_23_084351_create_slideshows_table', 1),
(38, '2021_02_23_084421_create_contexts_table', 1),
(39, '2021_02_24_095545_create_users_table', 1),
(40, '2021_02_24_095623_create_user_groups_table', 1),
(41, '2021_02_24_095637_create_groups_table', 1),
(42, '2021_02_24_100000_create_password_resets_table', 1),
(43, '2021_02_24_122145_create_profile_field_types', 1),
(44, '2021_02_24_122155_create_profile_field', 1),
(45, '2021_02_24_160516_create_permission_table', 1),
(46, '2021_02_24_165011_create_user_profile_table', 1),
(47, '2021_02_24_225988_migration_cartalyst_sentry_install_throttle', 1),
(48, '2021_02_23_084351_create_samples_table', 2),
(49, '2021_02_23_084351_create_modules_table', 3),
(59, '2021_02_23_084351_create_crawler_sites_table', 4),
(57, '2021_02_23_084351_create_crawler_patterns_table', 4),
(58, '2021_02_23_084351_create_crawler_regular_expressions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `module_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `module_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `module_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email',
  `module_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Phone',
  `module_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Title',
  `module_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `module_email`, `module_phone`, `module_title`, `module_description`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'asfas', 'asdf asdfa sdfasd fasf', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 33, NULL, 1, 1, NULL, '2021-03-07 20:48:48', '2021-03-07 20:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `overview` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `overview`, `description`, `url`, `permission`, `protected`, `created_at`, `updated_at`) VALUES
(1, '', 'superadmin', '', '_superadmin', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(2, '', 'user editor', '', '_user-editor', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(3, '', 'group editor', '', '_group-editor', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(4, '', 'permission editor', '', '_permission-editor', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47'),
(5, '', 'profile type editor', '', '_profile-editor', 0, '2021-03-07 20:12:47', '2021-03-07 20:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `slideshow_id` int(11) DEFAULT NULL COMMENT 'Slideshow ID',
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `post_view_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'View time',
  `post_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `post_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `post_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post overview',
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `post_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `post_cache_comments` text COLLATE utf8mb4_unicode_ci COMMENT 'Comments of post',
  `post_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `post_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
CREATE TABLE IF NOT EXISTS `profile_field` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `profile_field_type_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
CREATE TABLE IF NOT EXISTS `profile_field_type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

DROP TABLE IF EXISTS `samples`;
CREATE TABLE IF NOT EXISTS `samples` (
  `sample_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `sample_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name',
  `sample_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email',
  `sample_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Phone',
  `sample_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Title',
  `sample_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sample_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`sample_id`, `sample_name`, `sample_email`, `sample_phone`, `sample_title`, `sample_description`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'asdfasdfLorem ipsum dolor sit amet, consectetur adipisicing elit.', 'asdfasdfasdf', 'asdfasdf', 'asdfasdfasdf asd Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', 99, NULL, 1, 1, NULL, '2021-03-07 20:48:25', '2021-03-07 20:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

DROP TABLE IF EXISTS `slideshows`;
CREATE TABLE IF NOT EXISTS `slideshows` (
  `slideshow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `style_id` int(11) NOT NULL COMMENT 'Style ID',
  `slideshow_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow name',
  `slideshow_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow overview',
  `slideshow_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow description',
  `slideshow_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `slideshow_images` text COLLATE utf8mb4_unicode_ci COMMENT 'List of image paths',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow_styles`
--

DROP TABLE IF EXISTS `slideshow_styles`;
CREATE TABLE IF NOT EXISTS `slideshow_styles` (
  `style_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `style_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style name',
  `style_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style image',
  `style_view_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View file',
  `style_js_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Js file',
  `style_css_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Css file',
  `style_view_content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View content',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `banned`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$qlQ9U63Eo5LntBk7C5ZxNuDgG61aKFuH8zu1Tofqr6HtjaWo.td7S', NULL, 1, 0, NULL, NULL, '2021-03-09 21:45:46', '$2y$10$R5zuc41smhYk4Ozns21/m.RgmQ4b0kvJq0mGhugcYr.hFRdAVpTU.', NULL, 0, '2021-03-07 20:12:47', '2021-03-09 21:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profile_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `code`, `vat`, `first_name`, `last_name`, `phone`, `state`, `city`, `country`, `sex`, `category_id`, `address`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-07 20:12:47', '2021-03-07 20:12:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
