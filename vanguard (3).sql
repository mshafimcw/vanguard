-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 27, 2026 at 04:52 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-admin@gmail.com|127.0.0.1', 'i:1;', 1771832588),
('laravel-cache-admin@gmail.com|127.0.0.1:timer', 'i:1771832588;', 1771832588),
('laravel-cache-harshamdigitz@gmail.com|2401:4900:8fdf:c8d0:eda2:5e56:b2bf:7e2a', 'i:1;', 1763817658),
('laravel-cache-harshamdigitz@gmail.com|2401:4900:8fdf:c8d0:eda2:5e56:b2bf:7e2a:timer', 'i:1763817658;', 1763817658),
('laravel-cache-lqxunxxf@testform.xyz|166.1.173.199', 'i:5;', 1763788526),
('laravel-cache-lqxunxxf@testform.xyz|166.1.173.199:timer', 'i:1763788526;', 1763788526);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

DROP TABLE IF EXISTS `contact_requests`;
CREATE TABLE IF NOT EXISTS `contact_requests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_requests`
--

INSERT INTO `contact_requests` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Milga Tomy', 'milgatomy@gmail.com', 'nothing much', 'nothing', '2026-02-26 05:08:58', '2026-02-26 05:08:58'),
(2, 'Milga Tomy', 'milgatomy@gmail.com', 'nothing', 'hyuygsgyh', '2026-02-26 05:10:23', '2026-02-26 05:10:23'),
(3, 'Sona', 'amruthaksmdigitz@gmail.com', 'nothing', 'bhhjh', '2026-02-26 05:14:02', '2026-02-26 05:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

DROP TABLE IF EXISTS `contact_submissions`;
CREATE TABLE IF NOT EXISTS `contact_submissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `phone`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed shafi MC', 'iamshafimxc@gmail.com', '7025012220', 'General Inquiry', 'fhhhfh fhfhfh fhdf', 1, '2025-11-26 22:14:41', '2025-11-26 22:45:53'),
(2, 'Mohammed shafi MC', 'iamshafimxc@gmail.com', '7025012220', 'General Inquiry', 'fhhhfh fhfhfh fhdf', 1, '2025-11-26 22:15:19', '2025-11-26 22:48:00'),
(3, 'Mohammed shafi MC', 'iamshafimxc@gmail.com', '7025012220', 'General Inquiry', 'fhhhfh fhfhfh fhdf', 0, '2025-11-26 23:07:29', '2025-11-26 23:07:29'),
(4, 'Mohammed shafi MC', 'iamshafimc@gmail.com', '7025012220', 'General Inquiry', 'cxvxcv xcvx gxdg', 0, '2025-11-26 23:10:54', '2025-11-26 23:10:54'),
(5, 'Mohammed shafi MC', 'mshafimcw5@gmail.com', '7025012220', 'Partnership', 'jjhh hhhu hhh', 0, '2025-11-27 15:07:38', '2025-11-27 15:07:38'),
(6, 'Florentina Chinner', 'contact@domain-submit.app', '9561982875', 'Partnership', 'Add your envedfoundation.org website to Google Search Index and have it appear in WebSearch Results.\r\n\r\nAdd envedfoundation.org at https://searchregister.org', 0, '2025-12-03 17:52:51', '2025-12-03 17:52:51'),
(7, 'Ofelia Reibey', 'info@domainsubmitter.info', '108838714', 'Partnership', 'Add your envedfoundation.org website to Google Search Index and have it displayed in Web Search Results.\r\n\r\nRegister envedfoundation.org at https://searchregister.org', 0, '2025-12-14 18:02:13', '2025-12-14 18:02:13'),
(8, 'Hello http://envedfoundation.org/fekal0911 Admin', 'pirduhina96@gmail.com', '618141265', 'Other', 'Dear http://envedfoundation.org/fekal0911 Administrator', 0, '2025-12-25 02:57:08', '2025-12-25 02:57:08'),
(9, 'Kellye Brauer', 'ai@list-envedfoundation.org', '3731342216', 'Other', 'More and more people skip Google Search and ask ChatGPT to search for everything.\r\n\r\nAdd envedfoundation.org to our AI-optimized directory now to increase your chances of being recommended.\r\n\r\nJoin now: https://AIREG.pro/', 0, '2026-01-09 04:49:57', '2026-01-09 04:49:57'),
(10, 'Harlan Masters', 'indexing@searches-envedfoundation.org', '8599085192', 'Volunteer', 'Index envedfoundation.org to Google Search Index and have it appear in search results\r\n\r\nList envedfoundation.org now at https://searchregister.org', 0, '2026-01-15 18:05:31', '2026-01-15 18:05:31'),
(11, 'Nelle Outtrim', 'better@ai-envedfoundation.org', '881030715', 'Donation', 'Users search using AI more & more.\r\n\r\nAdd envedfoundation.org to our AI-optimized directory now to increase your chances of being recommended / mentioned.\r\n\r\nList it here:  https://AIREG.pro', 0, '2026-01-16 17:20:45', '2026-01-16 17:20:45'),
(12, 'Orville Felton', 'indexing@searches-envedfoundation.org', '4193416516', 'Other', 'Hi,\r\n\r\nRegister envedfoundation.org to GoogleSearchIndex and have it displayed in search results!\r\n\r\nAdd envedfoundation.org now at https://searchregister.org', 0, '2026-01-25 22:48:05', '2026-01-25 22:48:05'),
(13, 'Zulma Taft', 'better@ai-envedfoundation.org', '7740261153', 'Partnership', 'Users search using AI more & more.\r\n\r\nAdd envedfoundation.org to our AI-optimized directory now to increase your chances of being recommended / mentioned.\r\n\r\nList it here:  https://AIREG.pro', 0, '2026-01-28 02:16:44', '2026-01-28 02:16:44'),
(14, 'RaymondLUPLE', 'no.reply.JacquesSmith@gmail.com', '84943324338', 'General Inquiry', 'Hi! envedfoundation.org \r\n \r\nDid you know that it is possible to send proposals absolutely legally? \r\nWhen such requests are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals securely. Feedback Forms\' messages are thought of as significant thus avoiding the categorization of them as spam. \r\nThere is now no cost to you to try out our service. \r\nWe can forward up to 50,000 messages to you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', 0, '2026-02-08 09:47:12', '2026-02-08 09:47:12'),
(15, 'Meridith Heinrich', 'form@ebr-envedfoundation.org', '225836271', 'General Inquiry', 'Hello,\r\n\r\nUpdate your company\'s information in Eu Business Register for 2026/2027.\r\n\r\nUpdating is free. Find the form at: ebr-form.pro', 0, '2026-02-12 00:15:28', '2026-02-12 00:15:28'),
(16, 'AndrewPef', 'no.reply.StevenMeyer@gmail.com', '83377793966', 'General Inquiry', 'Yo! envedfoundation.org \r\n \r\nDid you know that it is possible to send request appropriately legitimate way? \r\nWhen such proposals are submitted, no personal information is utilized, and messages are routed to forms specifically configured to receive messages and appeals securely. Since Feedback Forms messages are deemed essential, they won\'t be seen as spam. \r\nWe provide you with the opportunity to test our service free of charge. \r\nWe can dispatch up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', 0, '2026-02-19 01:19:42', '2026-02-19 01:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `description`, `location`, `created_date`, `created_at`, `updated_at`) VALUES
(1, 'Solar Awareness Drive 2025', NULL, 'A community outreach program to promote the adoption of solar energy solutions for homes and small businesses. The event will include live demonstrations, expert talks, and guidance on government solar subsidies.', NULL, '2025-11-15 00:41:00', '2025-11-08 13:43:47', '2025-11-08 13:43:47'),
(2, 'E-Waste Collection Week', NULL, 'Join our week-long campaign encouraging the safe disposal of old gadgets, batteries, and electronic waste. Collection points will be set up across schools, offices, and community centers to promote responsible recycling.', NULL, '2025-11-29 00:44:00', '2025-11-08 13:45:33', '2025-11-08 13:45:33'),
(3, 'Green Campus Challenge', NULL, 'An inter-school and college initiative motivating students to make their campuses more eco-friendly through tree planting, waste segregation, and energy-saving practices. Winning institutions will receive the “Green Campus” recognition from ENVED Foundation.', NULL, '2025-11-29 00:47:00', '2025-11-08 13:47:42', '2025-11-08 13:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `event_bookings`
--

DROP TABLE IF EXISTS `event_bookings`;
CREATE TABLE IF NOT EXISTS `event_bookings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_multiple_images`
--

DROP TABLE IF EXISTS `event_multiple_images`;
CREATE TABLE IF NOT EXISTS `event_multiple_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_multiple_images_event_id_foreign` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ewaste_donations`
--

DROP TABLE IF EXISTS `ewaste_donations`;
CREATE TABLE IF NOT EXISTS `ewaste_donations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_type` enum('Individual/Residential','Association/Education','Institution/Corporate/Commercial','Establishment') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waste_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gdpr_consent` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ewaste_donations_email_index` (`email`),
  KEY `ewaste_donations_status_index` (`status`),
  KEY `ewaste_donations_donor_type_index` (`donor_type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ewaste_donations`
--

INSERT INTO `ewaste_donations` (`id`, `name`, `email`, `phone`, `donor_type`, `pickup_location`, `waste_type`, `message`, `gdpr_consent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed shafi MC', 'iamshafimch@gmail.com', '7025012220', 'Individual/Residential', 'jbjbbjbj', 'knnnk', 'knknnk', 1, 'pending', '2025-11-27 17:20:47', '2025-11-27 17:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

DROP TABLE IF EXISTS `gallery_categories`;
CREATE TABLE IF NOT EXISTS `gallery_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gallery_categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `slug`, `description`, `is_active`, `sort_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Collection drives', 'collection-drives', NULL, 1, 0, '2025-11-21 15:05:10', '2025-11-25 03:12:41', NULL),
(2, 'Awareness program', 'awareness-program', NULL, 1, 0, '2025-11-25 03:13:16', '2025-11-25 03:13:16', NULL),
(3, 'Corporate events', 'corporate-events', NULL, 1, 0, '2025-11-25 03:13:28', '2025-11-25 03:13:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

DROP TABLE IF EXISTS `highlights`;
CREATE TABLE IF NOT EXISTS `highlights` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Sharjah', '2026-02-26 05:56:59', '2026-02-26 05:56:59'),
(2, 'Dubai', '2026-02-26 05:57:14', '2026-02-26 05:57:14'),
(3, 'Ajman', '2026-02-26 05:57:56', '2026-02-26 05:57:56'),
(4, 'Abu Dhabi', '2026-02-26 05:58:10', '2026-02-26 05:58:10'),
(5, 'Ras Al Khaimah', '2026-02-26 05:58:50', '2026-02-26 05:58:50'),
(6, 'Umm Al Quwain', '2026-02-27 02:30:36', '2026-02-27 02:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_05_110840_create_post_categories_table', 1),
(5, '2025_09_05_170409_create_posts_table', 1),
(6, '2025_09_05_200200_create_product_categories_table', 1),
(7, '2025_09_05_200628_create_products_table', 1),
(8, '2025_09_05_211853_create_product_images_table', 1),
(9, '2025_09_30_071156_create_programs_table', 1),
(10, '2025_09_30_092659_rename_name_to_title_in_programs_table', 1),
(11, '2025_09_30_120447_add_start_end_date_to_programs_table', 1),
(12, '2025_09_30_133149_create_multiple_images_table', 1),
(13, '2025_10_01_091857_create_events_table', 1),
(14, '2025_10_01_094318_create_event_multiple_images_table', 1),
(15, '2025_10_04_163520_create_highlights_table', 1),
(16, '2025_10_08_101213_add_location_to_events_table', 1),
(17, '2025_10_16_080928_create_orders_table', 1),
(18, '2025_10_16_082608_create_order_items_table', 1),
(19, '2025_10_16_094637_add_order_status_to_orders_table', 1),
(20, '2025_10_16_121045_add_address_to_orders_table', 1),
(21, '2025_10_17_053133_add_profile_fields_to_users_table', 1),
(22, '2025_10_17_054233_create_transactions_table', 1),
(23, '2025_10_17_071936_create_event_bookings_table', 1),
(24, '2025_10_17_095553_add_phonenumber_to_orders_table', 1),
(25, '2025_10_18_054105_add_amount_to_transactions_table', 1),
(26, '2025_10_18_061712_create_projects_table', 1),
(27, '2025_11_15_225805_add_message_to_orders_table', 2),
(28, '2026_02_25_022048_create_services_table', 3),
(29, '2026_02_25_142510_create_multiple_post_images_table', 4),
(30, '2026_02_25_133221_create_contact_requests_table', 5),
(31, '2026_02_26_052042_create_locations_table', 6),
(32, '2026_02_26_120305_add_text_fields_to_services_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `multiple_images`
--

DROP TABLE IF EXISTS `multiple_images`;
CREATE TABLE IF NOT EXISTS `multiple_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `multiple_images_program_id_foreign` (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multiple_post_images`
--

DROP TABLE IF EXISTS `multiple_post_images`;
CREATE TABLE IF NOT EXISTS `multiple_post_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint UNSIGNED NOT NULL,
  `image_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `multiple_post_images_post_id_foreign` (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiple_post_images`
--

INSERT INTO `multiple_post_images` (`id`, `post_id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 103, '1772029810_mail.jpg', '2026-02-25 09:00:10', '2026-02-25 09:00:10'),
(2, 103, '1772029810_callusnew.jpg', '2026-02-25 09:00:10', '2026-02-25 09:00:10'),
(3, 106, '1772088290_5thimage.jpg', '2026-02-26 01:14:50', '2026-02-26 01:14:50'),
(4, 107, '1772088483_3rdimage.jpg', '2026-02-26 01:18:03', '2026-02-26 01:18:03'),
(5, 108, '1772089033_blog3 (2).jpg', '2026-02-26 01:27:13', '2026-02-26 01:27:13'),
(6, 108, '1772089033_2ndblog.jpg', '2026-02-26 01:27:13', '2026-02-26 01:27:13'),
(7, 110, '1772090486_kochii4.jpg', '2026-02-26 01:51:26', '2026-02-26 01:51:26'),
(8, 110, '1772090486_kochii.jpg', '2026-02-26 01:51:26', '2026-02-26 01:51:26'),
(9, 111, '1772093004_1stimage.jpg', '2026-02-26 02:33:24', '2026-02-26 02:33:24'),
(10, 111, '1772093004_2ndimage.jpg', '2026-02-26 02:33:24', '2026-02-26 02:33:24'),
(11, 112, '1772093256_scrap.jpg', '2026-02-26 02:37:36', '2026-02-26 02:37:36'),
(12, 112, '1772093256_1stimage.jpg', '2026-02-26 02:37:37', '2026-02-26 02:37:37'),
(13, 112, '1772093257_5thimage.jpg', '2026-02-26 02:37:37', '2026-02-26 02:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `razorpay_order_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_payment_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_signature` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_type` enum('Individual/Residential','Association/Education','Institution/Corporate/Commercial','Establishment') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_cause` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gdpr_consent` tinyint(1) NOT NULL DEFAULT '0',
  `order_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`, `amount`, `name`, `email_id`, `donor_type`, `preferred_cause`, `gdpr_consent`, `order_status`, `payment_status`, `address`, `phonenumber`, `message`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 2000.00, 'Shafi mc', 'iamshafimc@gmail.com', NULL, NULL, 0, 'pending', 'pending', 'afaf', '09495009985', NULL, '2025-11-15 17:03:12', '2025-11-15 17:03:12'),
(2, NULL, NULL, NULL, 500.00, 'Shafi mc', 'iamshafimc@gmail.com', NULL, NULL, 0, 'pending', 'pending', 'afaf', '09495009985', NULL, '2025-11-15 17:30:15', '2025-11-15 17:30:15'),
(3, NULL, NULL, NULL, 2000.00, 'Shafi mc', 'iamshafimc@gmail.com', NULL, NULL, 0, 'pending', 'pending', 'afaf', '09495009985', NULL, '2025-11-15 18:01:07', '2025-11-15 18:01:07'),
(4, 'order_Rktii84t0v7rGn', 'pay_Rktip22ij2bW7l', 'c1b3f17c88c8d73e200b87b73ed65358bc96865ee439dc1c2655604ac758eae6', 10.00, 'Mohammed shafi MC', 'iamshafismc@gmail.com', 'Individual/Residential', 'E-Waste Awareness', 1, 'completed', 'success', NULL, '7025145485', 'dfsdf', '2025-11-27 20:33:20', '2025-11-27 20:34:31'),
(5, 'order_Rku9QjwNIoO64v', NULL, NULL, 11.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', NULL, NULL, 0, 'created', 'pending', 'Machenecheri house , tirurkad house', '7025012220', 'df', '2025-11-27 20:58:38', '2025-11-27 20:58:38'),
(6, 'order_Rku9bkovHFe0fv', NULL, NULL, 11.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', NULL, NULL, 0, 'completed', 'pending', 'Machenecheri house , tirurkad house', '7025012220', 'df', '2025-11-27 20:58:48', '2025-11-27 20:59:17'),
(7, 'order_RkuKGHQgUYd2f5', 'pay_RkuKNMXOzkWEuq', '4e8197cd85124600b63dfe1bb131a63088667639e5982b79bfdb363d7498a5a5', 12.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', 'Individual/Residential', 'Sustainability Education Sessions', 1, 'failed', 'failed', NULL, '7025012220', 'ddd', '2025-11-27 21:08:53', '2025-11-27 21:09:30'),
(8, 'order_RkuMso6QO08NcQ', 'pay_RkuMxjXqwpvdDt', '11a5d672c6b9758646cc7f14bfa8eea4431e201de36e59c659684762001fdfaa', 12.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', 'Individual/Residential', 'Sustainability Education Sessions', 1, 'failed', 'failed', NULL, '7025012220', 'ddd', '2025-11-27 21:11:22', '2025-11-27 21:11:50'),
(9, 'order_RkuOyor1SKbHjQ', 'pay_RkuP4YSHdNFbIx', '67ff968dd0a6b5614c26b649a5905cd95c1594a5fab61cbd1d4ca238b79b749d', 13.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', 'Individual/Residential', 'Sustainability Education Sessions', 1, 'failed', 'failed', NULL, '7025012220', 'ddd', '2025-11-27 21:13:21', '2025-11-27 21:13:47'),
(10, 'order_RkuRPpOATJ9uUi', 'pay_RkuRW2j53ibMau', '42a65493e8832dfbef1ab7a3d5ab954244e21f58527cf2982ab6d06898e0a5dd', 14.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', 'Individual/Residential', 'Sustainability Education Sessions', 1, 'completed', 'success', NULL, '7025012220', 'ddd', '2025-11-27 21:15:39', '2025-11-27 21:16:06'),
(11, 'order_RkuSiwwuzLBM6l', 'pay_RkuSnFqXPinoXS', '700fd5c377accd8c22f8bf46c2c78560a53d989727ca24397f1ce7c7292bff0f', 10.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', 'Individual/Residential', 'Sustainability Education Sessions', 1, 'completed', 'success', NULL, '7025012220', 'ddd', '2025-11-27 21:16:54', '2025-11-27 21:17:20'),
(12, 'order_RkuTshUxyZRPD0', 'pay_RkuTwgAd5LfTv1', '83e00bb8272bb43a1554a3812750d7550d9a574ecaa1ff0d66563e0d499dc399', 10.00, 'Mohammed shafi MC', 'iamshafimc@gmail.com', 'Individual/Residential', 'Sustainability Education Sessions', 1, 'completed', 'success', NULL, '7025012220', 'ddd', '2025-11-27 21:18:00', '2025-11-27 21:18:24'),
(13, 'order_Rlp9WKu9echA44', NULL, NULL, 500.00, 'Ajosh k joy', 'akjoy87@gmail.com', NULL, NULL, 0, 'created', 'pending', 'kachappilly House, Mallussery, vattapparambu PO 683579', '9645799995', 'Ewaste Awareness campaign', '2025-11-30 04:44:15', '2025-11-30 04:44:15'),
(14, 'order_RozHedcNhXZb9r', 'pay_RozHp3KWLqpuoo', '6980f1fbb25d492fcdbbecbe1879d73bab744d7f943f394a5834188edfe503b5', 50.00, 'midhun p joy', 'info2mpj@gmail.com', 'Individual/Residential', 'Collection Drive', 1, 'completed', 'success', NULL, '09947156723', NULL, '2025-12-08 04:35:52', '2025-12-08 04:36:31'),
(15, 'order_Rpfl3r5oWTBdNV', 'pay_RpflAOHK6GzgE9', '059a84c0553c0d5533724c94e383c50d748e7bddaf09103b17a3cd4db8b449b2', 10.00, 'Shafi mc', 'iamshafimc@gmail.com', 'Individual/Residential', 'E-Waste Awareness', 1, 'completed', 'success', NULL, '09495009985', 'dgd', '2025-12-09 22:08:50', '2025-12-09 22:09:43'),
(16, 'order_RpfmtJa61Y8rD4', 'pay_Rpfn0V4JZrKCaI', 'a7259af6fa1f2a62d5746eae87b02a4cbda48813da0c713ab3c38bd762381419', 11.00, 'Shafi mc', 'iamshafimc@gmail.com', 'Association/Education', 'Sustainability Education Sessions', 1, 'completed', 'success', NULL, '09495009985', 'sdf', '2025-12-09 22:10:35', '2025-12-09 22:11:04'),
(17, 'order_S63biVmI7XBrPT', NULL, NULL, 10000.00, 'Athul Krishna TS', 'athulachus21@gmail.com', 'Association/Education', 'E-Waste Awareness', 1, 'pending', 'pending', NULL, '9061873766', NULL, '2026-01-20 07:52:37', '2026-01-20 07:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` int DEFAULT NULL,
  `gallery_category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_post_category_id_foreign` (`post_category_id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `image`, `post_category_id`, `user_id`, `published`, `created_at`, `updated_at`, `featured`, `gallery_category_id`) VALUES
(2, 'ngo@envedfoundation.org', 'ngo-at-envedfoundationorg', 'ngo@envedfoundation.org', NULL, 11, 1, 0, '2025-11-08 10:28:24', '2025-11-20 13:48:13', 0, NULL),
(3, '+919846066620', '919846066620', '+919846066620', NULL, 10, 1, 0, '2025-11-08 10:28:51', '2025-11-16 20:35:31', 0, NULL),
(4, 'ENVED FOUNDATION', 'enved-foundation', '<p>We believe environmental responsibility should be simple, accessible, and community-led. Enved Foundation exists to help people make choices that protect the planet.</p>', 'posts/1763742692.png', 14, 1, 0, '2025-11-08 10:31:11', '2025-11-21 16:31:32', 0, NULL),
(5, 'When Communities Act, The Earth Heals.', 'when-communities-act-the-earth-heals', 'Promoting sustainable energy solutions and environmental awareness for a cleaner, healthier planet.', 'posts/1762617951.jpg', 1, 1, 0, '2025-11-08 10:35:51', '2025-11-20 17:01:39', 0, NULL),
(6, 'Protect the Planet. Empower the Future.', 'protect-the-planet-empower-the-future', 'Join our mission to recycle, reuse, and responsibly manage electronic waste for a sustainable future.', 'posts/1762618518.jpg', 1, 1, 0, '2025-11-08 10:45:18', '2025-11-20 17:01:08', 0, NULL),
(11, 'Asha Menon', 'asha-menon', 'The ENVED Foundation team conducted an incredible awareness session at our school. Our students now understand the importance of energy conservation and e-waste recycling. Their approach is inspiring and educational', 'posts/1762636120.png', 8, 1, 0, '2025-11-08 15:36:43', '2025-11-08 15:38:40', 0, NULL),
(12, 'Rahul Krishnan', 'rahul-krishnan', 'Volunteering with ENVED Foundation opened my eyes to how small actions can create big environmental impacts. The Green Campus Challenge made me feel proud to be part of a change-making community.', 'posts/1762636212.png', 8, 1, 0, '2025-11-08 15:40:12', '2025-11-08 15:40:12', 0, NULL),
(13, 'Dr. Sneha Varghese', 'dr-sneha-varghese', 'I truly admire ENVED Foundation’s commitment to sustainable energy awareness. Their projects are well-organized and focused on long-term environmental benefits rather than just short-term campaigns', 'posts/1762636308.png', 8, 1, 0, '2025-11-08 15:41:31', '2025-11-08 15:41:48', 0, NULL),
(14, '5000+', '5000', 'Trees Planted', NULL, 4, 1, 0, '2025-11-08 15:44:47', '2025-11-08 15:44:47', 0, NULL),
(15, '120+', '120', 'Awareness Programs Conducted', NULL, 4, 1, 0, '2025-11-08 15:46:52', '2025-11-08 15:46:52', 0, NULL),
(16, '3000+', '3000', 'Volunteers Engaged', NULL, 4, 1, 0, '2025-11-08 15:47:39', '2025-11-08 15:47:39', 0, NULL),
(17, 'Real Impact', 'real-impact', '<p>Advanced technologies tailored to meet modern environmental challenges.</p>', 'posts/1763744104.png', 5, 1, 0, '2025-11-09 01:44:57', '2025-11-21 16:55:04', 0, NULL),
(18, 'Real People', 'real-people', '<p>A team of educators, innovators, and volunteers committed to building a greener tomorrow.</p>', 'posts/1763744089.png', 5, 1, 0, '2025-11-09 01:45:45', '2025-11-21 16:54:49', 0, NULL),
(19, 'Real Change', 'real-change', '<p>Every programme is designed for long-term environmental benefit, not short-lived activity.</p>', 'posts/1763744072.png', 5, 1, 0, '2025-11-09 01:46:19', '2025-11-21 16:54:32', 0, NULL),
(20, 'LinkedIn', 'linkedin', '<p>https://www.linkedin.com/company/enved-foundation/</p>', 'posts/1769619784.png', 13, 1, 1, '2025-11-09 05:34:18', '2026-01-28 17:03:04', 0, NULL),
(26, 'Cancellation & Refunds', 'cancellation-refunds', '<div class=\"policy-section\">\r\n<div class=\"auto-container\">\r\n<div class=\"row clearfix\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n<div class=\"policy-content\">\r\n<h2>Cancellation &amp; Refunds Policy</h2>\r\n<p>At ENVED Foundation, we value your support and trust in our mission to create a sustainable future. This policy outlines our procedures regarding donation cancellations and refunds.</p>\r\n<h3>Donation Cancellations</h3>\r\n<p>If you wish to cancel a recurring donation, you may do so by:</p>\r\n<ul>\r\n<li>Contacting us at <a href=\"mailto:support@envedfoundation.org\">ngo@envedfoundation.org</a></li>\r\n<li>Calling our support team at +91 9846066620&nbsp;</li>\r\n<li>Using the cancellation option in your donor portal (if available)</li>\r\n</ul>\r\n<p>Please note that cancellation requests should be submitted at least 3 business days before your next scheduled donation to ensure processing.</p>\r\n<h3>Refund Policy</h3>\r\n<p>ENVED Foundation treats all donations as final. However, we understand that exceptional circumstances may occur. Refund requests will be considered under the following conditions:</p>\r\n<ul>\r\n<li>Unauthorized transaction made from your account</li>\r\n<li>Technical error resulting in duplicate charges</li>\r\n<li>Donation made by mistake (must be reported within 7 days)</li>\r\n</ul>\r\n<h3>Processing Refunds</h3>\r\n<p>Approved refunds will be processed within 7-10 business days and credited to the original payment method. Please allow additional time for the refund to reflect in your account based on your financial institution\'s policies.</p>\r\n<h3>Event Registration Cancellations</h3>\r\n<p>For paid events:</p>\r\n<ul>\r\n<li>Cancellations made 14+ days before the event: Full refund</li>\r\n<li>Cancellations made 7-13 days before the event: 50% refund</li>\r\n<li>Cancellations made less than 7 days before the event: No refund, but donation receipt provided</li>\r\n</ul>\r\n<h3>Contact Information</h3>\r\n<p>For any questions regarding our cancellation and refund policy, please contact us:</p>\r\n<div class=\"contact-info-box\">\r\n<p><strong>Email:</strong> <a href=\"mailto:support@envedfoundation.org\">ngo@envedfoundation.org</a></p>\r\n<p><strong>Phone:</strong> +91 9846066620&nbsp;</p>\r\n<p><strong>Hours:</strong> Monday-Friday, 9:00 AM - 6:00 PM IST</p>\r\n</div>\r\n<div class=\"back-to-home text-center mt-5\"><a class=\"theme-btn btn-style-one\" href=\"../../\"> <span class=\"btn-title\">Back to Home</span> </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 17, 1, 1, '2025-11-15 15:47:20', '2025-11-25 01:14:55', NULL, NULL),
(27, 'Terms and conditions', 'terms-and-conditions', '<div class=\"policy-section\">\r\n<div class=\"auto-container\">\r\n<div class=\"row clearfix\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n<div class=\"policy-content\">\r\n<h2>Terms and Conditions</h2>\r\n<p>Welcome to ENVED Foundation. By accessing our website and using our services, you agree to comply with and be bound by the following terms and conditions.</p>\r\n<h3>Acceptance of Terms</h3>\r\n<p>By accessing and using the ENVED Foundation website (envedfoundation.org), you accept and agree to be bound by the terms and provision of this agreement.</p>\r\n<h3>Use of Website</h3>\r\n<p>You agree to use our website for lawful purposes only. You may not:</p>\r\n<ul>\r\n<li>Use our website in any way that breaches any applicable local, national, or international law</li>\r\n<li>Copy, reproduce, or redistribute content without permission</li>\r\n<li>Transmit any data that contains viruses or other harmful components</li>\r\n<li>Attempt to gain unauthorized access to our systems</li>\r\n</ul>\r\n<h3>Donations</h3>\r\n<p>All donations made to ENVED Foundation are voluntary and non-refundable, except in exceptional circumstances as outlined in our Refund Policy.</p>\r\n<h3>Intellectual Property</h3>\r\n<p>All content on this website, including text, graphics, logos, and images, is the property of ENVED Foundation and is protected by copyright and intellectual property laws.</p>\r\n<h3>Third-Party Links</h3>\r\n<p>Our website may contain links to third-party websites. These links are provided for your convenience only. ENVED Foundation has no control over and assumes no responsibility for the content, privacy policies, or practices of any third-party sites.</p>\r\n<h3>Limitation of Liability</h3>\r\n<p>ENVED Foundation will not be liable for any indirect, special, or consequential loss or damage arising under these terms and conditions or in connection with our website.</p>\r\n<h3>Changes to Terms</h3>\r\n<p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting to the website. Your continued use of the website constitutes acceptance of the modified terms.</p>\r\n<h3>Governing Law</h3>\r\n<p>These terms and conditions are governed by and construed in accordance with the laws of India. Any disputes relating to these terms will be subject to the exclusive jurisdiction of the courts of India.</p>\r\n<h3>Contact Information</h3>\r\n<p>For any questions regarding our terms and conditions, please contact us:</p>\r\n<div class=\"contact-info-box\">\r\n<p><strong>Email:</strong> <a href=\"mailto:legal@envedfoundation.org\">ngo@envedfoundation.org</a></p>\r\n<p><strong>Phone:</strong> +91 9846066620&nbsp;</p>\r\n<p><strong>Hours:</strong> Monday-Friday, 9:00 AM - 6:00 PM IST</p>\r\n</div>\r\n<div class=\"back-to-home text-center mt-5\"><a class=\"theme-btn btn-style-one\" href=\"../../\"> <span class=\"btn-title\">Back to Home</span> </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 18, 1, 0, '2025-11-15 16:35:12', '2025-11-25 01:15:45', NULL, NULL),
(28, 'Shipping Policy', 'shipping-policy', '<div class=\"policy-section\">\r\n<div class=\"auto-container\">\r\n<div class=\"row clearfix\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n<div class=\"policy-content\">\r\n<h2>Shipping Policy</h2>\r\n<p>ENVED Foundation primarily deals with environmental initiatives, awareness programs, and digital resources. However, for certain campaigns and donor appreciation, we may ship physical items.</p>\r\n<h3>Digital Products/Services</h3>\r\n<p>Most of our resources, including educational materials, certificates, and receipts, are delivered digitally via email immediately or within 24 hours of completion/contribution.</p>\r\n<h3>Physical Items</h3>\r\n<p>For campaigns that involve physical items (such as merchandise, trees for planting, or event materials):</p>\r\n<ul>\r\n<li>Processing time: 3-5 business days</li>\r\n<li>Shipping time: 7-14 business days within India</li>\r\n<li>International shipping: 15-30 business days (where applicable)</li>\r\n</ul>\r\n<h3>Shipping Methods</h3>\r\n<p>We use reliable shipping partners including India Post, DTDC, and other courier services depending on the destination and item size.</p>\r\n<h3>Shipping Costs</h3>\r\n<p>Shipping costs are typically covered by ENVED Foundation for donor appreciation items. For specific campaigns requiring shipping fees, this will be clearly stated during the donation/registration process.</p>\r\n<h3>Tracking</h3>\r\n<p>For shipped items, tracking information will be provided via email when available.</p>\r\n<h3>Undeliverable Packages</h3>\r\n<p>If a package is returned to us as undeliverable, we will attempt to contact you using the information provided. If we cannot reach you after three attempts, the item may be considered abandoned.</p>\r\n<h3>Damaged Items</h3>\r\n<p>If your item arrives damaged, please contact us within 7 days of receipt with photos of the damaged package and item. We will arrange for a replacement where possible.</p>\r\n<h3>Contact</h3>\r\n<p>For shipping-related inquiries, please contact:</p>\r\n<div class=\"contact-info-box\">\r\n<p><strong>Email:</strong> <a href=\"mailto:shipping@envedfoundation.org\">ngo@envedfoundation.org</a></p>\r\n<p><strong>Phone:</strong> +91 9846066620&nbsp;</p>\r\n<p><strong>Hours:</strong> Monday-Friday, 9:00 AM - 6:00 PM IST</p>\r\n</div>\r\n<div class=\"back-to-home text-center mt-5\"><a class=\"theme-btn btn-style-one\" href=\"../../\"> <span class=\"btn-title\">Back to Home</span> </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 19, 1, 0, '2025-11-15 16:37:48', '2025-11-25 01:16:18', NULL, NULL),
(29, 'Privacy Policy', 'privacy-policy', '<div class=\"policy-section\">\r\n<div class=\"auto-container\">\r\n<div class=\"row clearfix\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n<div class=\"policy-content\">\r\n<h2>Privacy Policy</h2>\r\n<p>ENVED Foundation is committed to protecting your privacy. This policy explains how we collect, use, and safeguard your personal information.</p>\r\n<h3>Information We Collect</h3>\r\n<p>We may collect the following information:</p>\r\n<ul>\r\n<li>Personal identification information (Name, email address, phone number, etc.)</li>\r\n<li>Donation history and payment details</li>\r\n<li>Demographic information</li>\r\n<li>Website usage data through cookies and analytics</li>\r\n</ul>\r\n<h3>How We Use Your Information</h3>\r\n<p>We use your information to:</p>\r\n<ul>\r\n<li>Process donations and provide receipts</li>\r\n<li>Send updates about our programs and impact</li>\r\n<li>Improve our website and services</li>\r\n<li>Comply with legal obligations</li>\r\n</ul>\r\n<h3>Data Security</h3>\r\n<p>We implement appropriate security measures to protect your personal information from unauthorized access, alteration, or disclosure. All sensitive information is encrypted using secure socket layer technology (SSL).</p>\r\n<h3>Data Sharing</h3>\r\n<p>We do not sell, trade, or rent your personal information to third parties. We may share information with:</p>\r\n<ul>\r\n<li>Service providers who assist in our operations (under confidentiality agreements)</li>\r\n<li>Legal authorities when required by law</li>\r\n</ul>\r\n<h3>Cookies</h3>\r\n<p>Our website uses cookies to enhance user experience. You can choose to disable cookies through your browser settings, though this may affect website functionality.</p>\r\n<h3>Your Rights</h3>\r\n<p>You have the right to:</p>\r\n<ul>\r\n<li>Access the personal information we hold about you</li>\r\n<li>Request correction of inaccurate information</li>\r\n<li>Request deletion of your personal data</li>\r\n<li>Opt-out of marketing communications</li>\r\n</ul>\r\n<h3>Third-Party Links</h3>\r\n<p>Our website may contain links to other websites. This privacy policy applies only to our website, so when you link to other websites, you should read their own privacy policies.</p>\r\n<h3>Changes to This Policy</h3>\r\n<p>We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>\r\n<h3>Contact Us</h3>\r\n<p>If you have any questions about this Privacy Policy, please contact us:</p>\r\n<div class=\"contact-info-box\">\r\n<p><strong>Email:</strong> <a href=\"mailto:privacy@envedfoundation.org\">ngo@envedfoundation.org</a></p>\r\n<p><strong>Phone:</strong> +91 9846066620&nbsp;</p>\r\n<p><strong>Hours:</strong> Monday-Friday, 9:00 AM - 6:00 PM IST</p>\r\n</div>\r\n<div class=\"back-to-home text-center mt-5\"><a class=\"theme-btn btn-style-one\" href=\"../../\"> <span class=\"btn-title\">Back to Home</span> </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, 20, 1, 1, '2025-11-15 16:39:13', '2025-11-25 01:17:25', NULL, NULL),
(30, 'ENVED FOUNDATION', 'enved-foundation-2', '<p>1st Flr Pallikkavil Bldng,<br/>\r\nAnchumana Cochin,<br/>\r\nEdapally, Ernakulam,<br/>\r\nErnakulam- 682024,<br/>\r\nKerala</p>', NULL, 12, 1, 0, '2025-11-16 20:25:22', '2025-11-16 20:25:22', NULL, NULL),
(31, 'Facebook', 'facebook-2', '<p>https://www.facebook.com/profile.php?id=61580957253054</p>', 'posts/1764022929.png', 13, 1, 1, '2025-11-17 00:33:52', '2025-11-26 19:14:36', NULL, NULL),
(32, 'Instagram', 'instagram-2', '<p>https://www.instagram.com/envedfoundation/</p>', 'posts/1764022770.png', 13, 1, 1, '2025-11-17 00:35:56', '2025-11-24 22:19:30', NULL, NULL),
(33, 'Monday', 'monday', '9AM - 7PM', NULL, 21, 1, 0, '2025-11-17 04:00:31', '2025-11-17 04:00:31', 0, NULL),
(35, 'Tuesday', 'tuesday', '9AM - 7PM', NULL, 21, NULL, 0, NULL, NULL, NULL, NULL),
(36, 'Wednesday', 'wednesday', '9AM - 7PM', NULL, 21, NULL, 0, NULL, NULL, NULL, NULL),
(37, 'Thursday', 'thursday', '9AM - 7PM', NULL, 21, NULL, 0, NULL, NULL, NULL, NULL),
(38, 'Friday', 'friday', '9AM - 7PM', NULL, 21, NULL, 0, NULL, NULL, NULL, NULL),
(39, 'Saturday', 'Saturday', '9AM - 7PM', NULL, 21, NULL, 0, NULL, NULL, NULL, NULL),
(40, 'Sunday', 'Sunday', '9AM - 7PM', NULL, 21, NULL, 0, NULL, NULL, NULL, NULL),
(41, 'A Cleaner Earth Starts With Responsible Choices.', 'a-cleaner-earth-starts-with-responsible-choices', NULL, 'posts/1763658757.jpg', 1, 1, 0, '2025-11-20 17:12:37', '2025-11-20 17:12:37', NULL, NULL),
(44, 'img6411', 'img6411', NULL, 'posts/1763739635.jpg', 7, 1, 1, '2025-11-21 15:32:50', '2025-12-14 14:46:34', NULL, 2),
(45, 'img', 'img', NULL, 'posts/1763739976.jpg', 7, 1, 1, '2025-11-21 15:41:34', '2025-12-14 14:46:12', NULL, 2),
(46, 'img', 'img-2', NULL, 'posts/1763740052.jpg', 7, 1, 0, '2025-11-21 15:47:32', '2025-12-14 14:45:53', NULL, 2),
(47, 'img', 'img-3', NULL, 'posts/1763740263.jpg', 7, 1, 0, '2025-11-21 15:51:03', '2025-12-14 14:43:49', NULL, 2),
(48, 'img', 'img-4', NULL, 'posts/1765725713.jpg', 7, 1, 0, '2025-11-21 15:58:13', '2025-12-14 15:21:53', NULL, 2),
(49, 'img', 'img-5', NULL, 'posts/1765725952.jpg', 7, 1, 0, '2025-11-21 16:04:00', '2025-12-14 15:25:52', NULL, 2),
(50, 'img', 'img-6', NULL, 'posts/1765726127.jpg', 7, 1, 0, '2025-11-21 16:18:19', '2025-12-14 15:28:47', NULL, 3),
(52, 'img', 'img-8', NULL, 'posts/1765726364.jpg', 7, 1, 0, '2025-11-21 16:30:42', '2025-12-14 15:32:44', NULL, 3),
(53, 'img', 'img-9', NULL, 'posts/1765726558.jpg', 7, 1, 0, '2025-11-21 16:32:19', '2025-12-14 15:35:58', NULL, 3),
(54, 'img', 'img-10', NULL, 'posts/1765728741.jpg', 7, 1, 0, '2025-11-21 16:34:18', '2025-12-14 16:12:21', NULL, 3),
(55, 'image', 'image', NULL, 'posts/1765726879.jpg', 7, 1, 0, '2025-11-21 16:39:32', '2025-12-14 15:41:19', NULL, 1),
(57, 'image', 'image-3', NULL, 'posts/1765724991.jpg', 7, 1, 0, '2025-11-21 16:42:59', '2025-12-14 15:09:51', NULL, 1),
(58, 'img', 'img-11', NULL, 'posts/1765727443.jpg', 7, 1, 0, '2025-11-21 16:44:14', '2025-12-14 15:50:43', NULL, 1),
(59, 'img', 'img-12', NULL, 'posts/1765728486.jpg', 7, 1, 0, '2025-11-21 16:45:34', '2025-12-14 16:08:06', NULL, 1),
(61, 'img', 'img-14', NULL, 'posts/1765725436.jpg', 7, 1, 0, '2025-11-21 16:49:47', '2025-12-14 15:17:16', NULL, 1),
(62, 'img', 'img-15', NULL, 'posts/1765730318.jpg', 7, 1, 0, '2025-11-21 16:53:50', '2025-12-14 16:38:38', NULL, 3),
(63, 'img', 'img-16', NULL, 'posts/1765730451.jpg', 7, 1, 0, '2025-11-21 16:55:40', '2025-12-14 16:40:51', NULL, 3),
(64, 'img', 'img-17', NULL, 'posts/1763744262.jpg', 7, 1, 0, '2025-11-21 16:57:42', '2025-12-14 14:29:01', NULL, 2),
(65, 'img ff', 'img-ff', '<p>fgg</p>', 'posts/1763744337.jpg', 7, 1, 0, '2025-11-21 16:58:57', '2025-12-14 14:23:20', NULL, 2),
(66, 'ENVED Foundation | Sustainability & Environmental Education', 'enved-foundation-sustainability-environmental-education', NULL, 'posts/1764005599.png', 23, 2, 0, '2025-11-24 17:33:19', '2025-11-24 17:33:19', NULL, NULL),
(67, 'Youtube', 'youtube', '<p>https://youtube.com</p>', 'posts/1764023404.png', 13, 2, 0, '2025-11-24 22:23:08', '2025-11-24 22:30:04', NULL, NULL),
(68, 'A Community Built on Action', 'a-community-built-on-action-2', '<p>Enved Foundation is more than an NGO. It&rsquo;s a growing movement of people who believe environmental awareness should start young, grow consistently, and reshape how communities live.</p>\r\n<p>We work across schools, neighbourhoods, and local governing bodies to run awareness programmes, e-waste drives, green campaigns, and sustainability education initiatives.<br><br></p>\r\n<p>What keeps us going is the Native American proverb, <em>We do not inherit the Earth from our ancestors; we borrow it from our children.</em></p>', 'posts/1765403780.jpg', 24, 2, 0, '2025-11-24 22:49:54', '2025-12-10 21:56:20', NULL, NULL),
(71, 'The Environmental Benefits of Scrap Recycling', 'the-environmental-benefits-of-scrap-recycling', 'Scrap metal recycling offers profound environmental benefits by conserving finite natural resources, significantly reducing energy consumption—such as saving up to 95% of the energy required for producing new aluminum—and minimizing greenhouse gas emissions, pollution, and landfill waste. By reusing existing metals instead of mining virgin ore, this process protects ecosystems from habitat destruction, prevents toxic leaching into soil and water, and supports a sustainable circular economy.', 'posts/1764039699.jpg', 25, 2, 0, '2025-11-25 03:01:24', '2026-02-25 06:41:29', NULL, NULL),
(72, 'Company', 'company', NULL, 'posts/1769622283.jpeg', 26, 2, 0, '2025-11-26 20:02:42', '2026-01-28 17:44:43', NULL, NULL),
(73, 'Company', 'company-2', NULL, 'posts/1769622244.jpeg', 26, 2, 0, '2025-11-26 20:03:09', '2026-01-28 17:44:04', NULL, NULL),
(74, 'Company', 'company-3', NULL, 'posts/1769622176.jpeg', 26, 2, 0, '2025-11-26 20:03:29', '2026-01-28 17:42:56', NULL, NULL),
(75, 'Company', 'company-4', NULL, 'posts/1769622136.jpg', 26, 2, 0, '2025-11-26 20:03:47', '2026-01-28 17:42:16', NULL, NULL),
(76, 'Company', 'company-5', NULL, 'posts/1769622112.png', 26, 2, 0, '2025-11-26 20:04:10', '2026-01-28 17:41:52', NULL, NULL),
(77, 'Company', 'company-6', NULL, 'posts/1769622089.png', 26, 2, 0, '2025-11-26 20:04:33', '2026-01-28 17:41:29', NULL, NULL),
(78, 'Company', 'company-7', NULL, 'posts/1769622021.png', 26, 2, 0, '2025-11-26 20:04:50', '2026-01-28 17:40:21', NULL, NULL),
(79, 'Banner', 'banner', NULL, 'posts/1764189521.jpg', 27, 2, 0, '2025-11-26 20:38:41', '2025-11-26 20:38:41', NULL, NULL),
(80, 'img', 'img-18', NULL, 'posts/1765721445.jpeg', 7, 1, 0, '2025-12-14 14:10:45', '2025-12-14 14:10:45', NULL, 1),
(81, 'Company', 'company-8', '<p>Company</p>', 'posts/1769622329.jpeg', 26, 1, 1, '2026-01-28 17:45:29', '2026-01-28 17:45:29', NULL, NULL),
(82, 'Company', 'company-9', '<p>Company</p>', 'posts/1769622400.jpeg', 26, 1, 1, '2026-01-28 17:46:40', '2026-01-28 17:46:40', NULL, NULL),
(83, 'Company', 'company-10', '<p>Company</p>', 'posts/1769622553.jpeg', 26, 1, 1, '2026-01-28 17:49:13', '2026-01-28 17:49:13', NULL, NULL),
(84, 'Companies', 'companies', '<p>Companies</p>', 'posts/1769623064.jpg', 26, 1, 0, '2026-01-28 17:57:44', '2026-01-28 17:57:44', NULL, NULL),
(85, 'Companies', 'companies-2', '<p>Companies</p>', 'posts/1769623114.jpg', 26, 1, 0, '2026-01-28 17:58:34', '2026-01-28 17:58:34', NULL, NULL),
(86, 'Turn Your Scrap into Cash', 'turn-your-scrap-into-cash', 'Fast, Reliable, Hassle-Free\r\nScrap Buyers in UAE', 'posts/1771923759.png', 31, 1, 1, '2026-02-24 01:30:52', '2026-02-24 03:32:39', NULL, NULL),
(87, 'COMPETITIVE PRICES', 'competitive-prices', 'Best market rates with transparent pricing.', NULL, 3, 1, 1, '2026-02-25 00:40:12', '2026-02-25 00:40:12', NULL, NULL),
(88, 'TURNING SCRAP INTO VALUE', 'turning-scrap-into-value', 'Vanguard Metal Scrap Trading LLC is one of the leading metal scrap trading companies in the UAE. We transform scrap metal into value by offering competitive prices, prompt payments, and exceptional service.\r\n\r\nWith years of experience in the industry, we\'ve earned a reputation for reliability, professionalism, and top-notch customer care.', 'posts/1772005629.png', 2, 1, 1, '2026-02-25 02:17:09', '2026-02-25 02:17:09', NULL, NULL),
(89, 'PROMPT PAYMENTS', 'prompt-payments', 'Fast and immediate payments for scrap materials.', NULL, 3, 1, 1, '2026-02-25 02:19:05', '2026-02-25 02:19:05', NULL, NULL),
(90, 'ECO-FRIENDLY PRACTICES', 'eco-friendly-practices', 'Environmentally responsible recycling processes.', NULL, 3, 1, 1, '2026-02-25 02:19:30', '2026-02-25 02:19:30', NULL, NULL),
(91, 'Our Mission', 'our-mission', 'At Vanguard, our mission is to contribute to a cleaner, greener planet by recycling scrap metal sustainably.', 'posts/1772014174.png', 32, 1, 0, '2026-02-25 04:05:33', '2026-02-25 04:39:34', NULL, NULL),
(92, 'Our Vision', 'our-vision', 'To be a trusted leader in sustainable scrap recycling, creating long-term environmental and economic value.', 'posts/1772012160.png', 32, 1, 1, '2026-02-25 04:06:00', '2026-02-25 04:06:00', NULL, NULL),
(93, 'E-Waste Recycling: Why It Is Important', 'e-waste-recycling-why-it-is-important', 'Old computers, mobile phones, and electronic items contain harmful materials. Proper e-waste recycling prevents environmental damage and health risks. This blog explains why you should never throw electronic waste in regular bins and how we handle it safely.', 'posts/1772021295.jpg', 25, 1, 1, '2026-02-25 06:02:59', '2026-02-25 06:38:15', NULL, NULL),
(94, 'Turn Your Waste Into Income: Start Selling Scrap Today', 'turn-your-waste-into-income-start-selling-scrap-today', 'Transforming waste into a consistent income stream is a highly achievable goal, allowing you to turn forgotten, unused items in your home or office into immediate financial returns. You can start this process today by sorting and collecting everyday recyclable materials, particularly non-ferrous metals like copper, aluminum, and brass, which are in high demand and yield the highest profit margins. Beyond metals, valuable materials that can be monetized include old newspapers, cardboard boxes, plastic bottles, and electronic waste, often referred to as e-waste. To maximize your earnings, it is crucial to clean and categorize your materials, as sorted and clean scrap always fetches a better price than mixed, dirty trash. You can connect with local recyclers, use online, tech-enabled \"kabadiwala\" services for door-to-door pickup, or sell directly to industrial foundries.', 'posts/1772020292.jpg', 25, 1, 1, '2026-02-25 06:21:32', '2026-02-25 06:21:32', NULL, NULL),
(95, 'Types of Scrap We Buy and Their Market Value', 'types-of-scrap-we-buy-and-their-market-value', 'We purchase a wide variety of scrap materials such as iron, steel, aluminum, copper, brass, plastic, paper, and electronic waste, and the market value of each material is carefully determined based on factors like current industry demand, global metal price fluctuations, material purity and quality, quantity or weight supplied, and overall recycling potential, ensuring that our customers receive transparent, competitive, and fair pricing that reflects real-time market conditions.', 'posts/1772020845.jpg', 25, 1, 1, '2026-02-25 06:30:45', '2026-02-25 06:30:45', NULL, NULL),
(96, 'FREE SCRAP PICKUP', 'free-scrap-pickup', 'Fast, hassle-free pickup of scrap metal from your location.', 'posts/1772025508.jpg', 33, 1, 1, '2026-02-25 07:22:09', '2026-02-25 07:48:28', NULL, NULL),
(97, 'PRECISION WEIGHING', 'precision-weighing', 'Accurate weighing of your scrap with certified industrial scales.', 'posts/1772025327.jpg', 33, 1, 1, '2026-02-25 07:29:26', '2026-02-25 07:45:27', NULL, NULL),
(98, 'BEST MARKET PRICES', 'best-market-prices', 'Get the highest value for your scrap with our competitive torque titles.', 'posts/1772025189.jpg', 33, 1, 1, '2026-02-25 07:41:37', '2026-02-25 07:43:09', NULL, NULL),
(99, 'Call Us', 'call-us', '+971  52 149 1001', 'posts/1772026803.jpg', 34, 1, 1, '2026-02-25 08:07:12', '2026-02-25 08:10:03', NULL, NULL),
(100, 'Mail Us', 'mail-us', 'info@vanguarduae.com', 'posts/1772026986.jpg', 34, 1, 0, '2026-02-25 08:13:06', '2026-02-25 08:13:06', NULL, NULL),
(101, 'Chat With Us', 'chat-with-us', 'Lets Chat', 'posts/1772027033.jpg', 34, 1, 0, '2026-02-25 08:13:53', '2026-02-25 08:13:53', NULL, NULL),
(102, 'Address', 'address', 'Dubai, UAE', 'posts/1772027066.jpg', 34, 1, 1, '2026-02-25 08:14:26', '2026-02-25 08:14:26', NULL, NULL),
(112, 'Scrap Collection Services for Homes and Businesses', 'scrap-collection-services-for-homes-and-businesses', 'Scrap collection services for homes and businesses provide convenient, doorstep pickup for unwanted, recyclable materials like metals, plastics, paper, and e-waste, transforming clutter into cash while supporting environmental sustainability. These services, often booked online or via phone, facilitate the efficient removal of old electronics, appliances, office furniture, and industrial debris from residential homes, commercial offices, and industrial sites. Professional teams typically sort and process materials through eco-friendly recycling methods to reduce landfill waste. In addition to decluttering, these services offer transparent, market-based pricing, allowing customers to receive immediate payment for high-value items like copper, aluminum, and iron. They also provide specialized services such as furniture dismantling, secure data destruction for electronic waste, and large-scale industrial scrap removal to ensure compliance with environmental regulations.', 'posts/1772093256.jpg', 25, 1, 1, '2026-02-26 02:37:36', '2026-02-26 02:37:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Slider', 'slider', '2025-09-06 04:10:42', '2025-09-06 04:10:42'),
(2, 'About S', 'about-s', '2025-09-07 04:57:37', '2025-09-07 04:57:37'),
(3, 'Features', 'features', '2025-09-07 16:41:19', '2025-09-07 16:41:19'),
(4, 'Counter', 'counter', '2025-09-07 17:23:48', '2025-09-07 17:23:48'),
(5, 'Whychooseus', 'whychooseus', '2025-09-07 17:29:56', '2025-09-07 17:29:56'),
(6, 'Facilities', 'facilities', '2025-09-07 17:36:20', '2025-09-07 17:36:20'),
(7, 'Gallery', 'gallery', '2025-09-07 18:01:21', '2025-09-07 18:01:21'),
(8, 'Testimonials', 'testimonials', '2025-09-07 18:09:50', '2025-09-07 18:09:50'),
(9, 'Faq', 'faq', '2025-09-07 18:18:39', '2025-09-07 18:18:39'),
(10, 'Phone', 'phone', '2025-09-07 18:22:56', '2025-09-07 18:22:56'),
(11, 'Email', 'email', '2025-09-07 18:25:20', '2025-09-07 18:25:20'),
(12, 'Address', 'address', '2025-09-08 01:01:13', '2025-09-08 01:01:13'),
(13, 'Social Icons', 'social-icons', '2025-09-08 01:05:16', '2025-09-08 01:05:16'),
(14, 'Logo', 'logo', '2025-09-08 01:16:16', '2025-09-08 01:16:16'),
(15, 'Highlights', 'Highlights', NULL, NULL),
(16, 'commondonation', 'commondonation', NULL, NULL),
(17, 'Cancellation and  Refunds', 'cancellation-and-refunds', '2025-11-15 15:40:27', '2025-11-15 15:40:27'),
(18, 'termsandconditions', 'termsandconditions', '2025-11-15 16:25:48', '2025-11-15 16:25:48'),
(19, 'shipping', 'shipping', '2025-11-15 16:26:03', '2025-11-15 16:26:03'),
(20, 'privacy', 'privacy', '2025-11-15 16:26:16', '2025-11-15 16:26:16'),
(21, 'timing', 'timing', NULL, NULL),
(22, 'innerbanner', 'innerbanner', NULL, NULL),
(23, 'Second logo', 'second-logo', '2025-11-24 17:19:24', '2025-11-24 17:19:24'),
(24, 'About Us Home', 'about-us-home', '2025-11-24 22:43:02', '2025-11-24 22:43:02'),
(25, 'Blogs', 'blogs', '2025-11-25 01:33:27', '2025-11-25 01:33:27'),
(26, 'Companies', 'companies', '2025-11-26 19:38:14', '2025-11-26 19:38:14'),
(27, 'Common banner', 'common-banner', '2025-11-26 20:19:36', '2025-11-26 20:19:36'),
(28, 'Time', 'time', '2025-11-27 15:25:38', '2025-11-27 15:25:38'),
(29, 'Metal Scrap', 'metal-scrap', '2026-02-23 06:48:01', '2026-02-23 06:48:01'),
(30, 'Copper Scrap', 'copper-scrap', '2026-02-23 06:48:53', '2026-02-23 06:48:53'),
(31, 'banner', 'banner', '2026-02-24 01:09:28', '2026-02-24 01:09:28'),
(32, 'commitment', 'commitment', '2026-02-25 03:55:47', '2026-02-25 03:55:47'),
(33, 'diffservice', 'diffservice', '2026-02-25 07:21:27', '2026-02-25 07:21:27'),
(34, 'contact', 'contact', '2026-02-25 08:04:15', '2026-02-25 08:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_product_category_id_foreign` (`product_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `created_date`, `start_date`, `end_date`, `description`, `image`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 'Support Our Mission', '2025-11-17 01:21:00', NULL, NULL, 'Your contribution powers on-ground programmes, school outreach, recycling operations, and community initiatives. Transparent, accountable, and directed toward creating long-term environmental impact.', 'Program_images/1764027570_New Project (3) (1).jpg', NULL, '2025-11-08 14:59:08', '2025-11-24 23:39:30'),
(2, 'Recycle Your E-Waste', '2025-11-17 01:20:00', NULL, NULL, 'Give your old electronics a responsible ending. Drop off unused chargers, phones, and devices at our collection points and we’ll ensure they’re processed safely, ethically, and without harming the environment.', 'Program_images/1764027698_1764027337_sustainable-travel-concept (1).jpg', NULL, '2025-11-08 15:07:41', '2025-11-24 23:41:38'),
(3, 'Volunteer With Us', '2025-11-17 01:20:00', NULL, NULL, 'Your time can spark real change. Join our awareness drives, school programmes, and community events. Every hour you give strengthens our movement and helps more people understand how to protect the planet.', 'Program_images/1764027239_Gemini_Generated_Image_qiemkkqiemkkqiem (1).png', NULL, '2025-11-08 15:08:08', '2025-11-24 23:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `created_date`, `start_date`, `end_date`, `description`, `image`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 'Community Waste Management Program', '2025-11-16', '2025-11-16', '2025-11-17', 'ENVED partners with local municipalities and resident groups to implement efficient waste segregation and recycling systems. The program includes household training, awareness campaigns, and connecting communities with recycling partners.', 'projects/h1QYB2uXpArzMhGpwcvknAwHr6ksNfvddXegDoPj.jpg', NULL, '2025-11-15 12:30:16', '2025-11-15 12:30:16'),
(2, 'Green Schools Initiative', '2025-11-23', '2025-11-24', '2025-11-28', 'The Green Schools Initiative focuses on educating children and young adults about environmental protection. Through workshops, hands-on activities, eco-clubs, and awareness campaigns, ENVED helps schools adopt greener practices such as waste segregation, water conservation, energy saving, and tree planting.', 'projects/vGIM9Wwh3BeKNLDR0JxTWgJaCqsaXjUj25D0oT2b.jpg', NULL, '2025-11-15 13:17:39', '2025-11-15 13:17:39'),
(3, 'Urban Tree Restoration Project', '2025-11-15', '2025-11-21', '2025-11-22', 'In response to rapid urbanization, ENVED launched a city-wide afforestation mission to plant native trees in parks, roadsides, and open spaces. Each tree is geo-tagged, monitored, and maintained for 3 years to ensure survival.', 'projects/TatExD2WII1tv71PkcwqsIAIFY8SPjMuEIC3FONn.jpg', NULL, '2025-11-15 13:19:35', '2025-11-15 13:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-11-02 13:42:33', '2025-11-02 13:42:33'),
(2, 'user', '2025-11-02 13:42:33', '2025-11-02 13:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_routes`
--

DROP TABLE IF EXISTS `role_routes`;
CREATE TABLE IF NOT EXISTS `role_routes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NOT NULL,
  `route_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_routes_role_id_route_name_unique` (`role_id`,`route_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1931 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_routes`
--

INSERT INTO `role_routes` (`id`, `role_id`, `route_name`, `created_at`, `updated_at`) VALUES
(3, 2, 'user.dashboard', '2025-11-02 13:42:35', '2025-11-02 13:42:35'),
(1745, 1, 'admin.admin.roles.update_name', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1746, 1, 'admin.contacts.bulk-action', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1747, 1, 'admin.contacts.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1748, 1, 'admin.contacts.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1749, 1, 'admin.contacts.mark-read', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1750, 1, 'admin.contacts.mark-unread', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1751, 1, 'admin.contacts.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1752, 1, 'admin.dashboard', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1753, 1, 'admin.dashboard.activity', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1754, 1, 'admin.dashboard.stats', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1755, 1, 'admin.dashboard.status-distribution', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1756, 1, 'admin.donations.export', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1757, 1, 'admin.donations.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1758, 1, 'admin.donations.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1759, 1, 'admin.events.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1760, 1, 'admin.events.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1761, 1, 'admin.events.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1762, 1, 'admin.events.images.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1763, 1, 'admin.events.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1764, 1, 'admin.events.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1765, 1, 'admin.events.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1766, 1, 'admin.events.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1767, 1, 'admin.ewaste-donations.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1768, 1, 'admin.ewaste-donations.export', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1769, 1, 'admin.ewaste-donations.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1770, 1, 'admin.ewaste-donations.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1771, 1, 'admin.ewaste-donations.statistics', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1772, 1, 'admin.ewaste-donations.status', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1773, 1, 'admin.gallery-categories.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1774, 1, 'admin.gallery-categories.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1775, 1, 'admin.gallery-categories.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1776, 1, 'admin.gallery-categories.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1777, 1, 'admin.gallery-categories.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1778, 1, 'admin.gallery-categories.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1779, 1, 'admin.gallery-categories.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1780, 1, 'admin.highlights.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1781, 1, 'admin.highlights.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1782, 1, 'admin.highlights.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1783, 1, 'admin.highlights.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1784, 1, 'admin.highlights.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1785, 1, 'admin.highlights.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1786, 1, 'admin.highlights.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1787, 1, 'admin.orderitems.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1788, 1, 'admin.orderitems.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1789, 1, 'admin.orderitems.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1790, 1, 'admin.orderitems.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1791, 1, 'admin.orderitems.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1792, 1, 'admin.orderitems.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1793, 1, 'admin.orderitems.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1794, 1, 'admin.orders.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1795, 1, 'admin.orders.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1796, 1, 'admin.orders.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1797, 1, 'admin.orders.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1798, 1, 'admin.orders.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1799, 1, 'admin.orders.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1800, 1, 'admin.orders.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1801, 1, 'admin.page.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1802, 1, 'admin.page.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1803, 1, 'admin.page.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1804, 1, 'admin.page.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1805, 1, 'admin.page.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1806, 1, 'admin.page.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1807, 1, 'admin.page.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1808, 1, 'admin.post-categories.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1809, 1, 'admin.post-categories.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1810, 1, 'admin.post-categories.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1811, 1, 'admin.post-categories.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1812, 1, 'admin.post-categories.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1813, 1, 'admin.post-categories.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1814, 1, 'admin.post-categories.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1815, 1, 'admin.posts.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1816, 1, 'admin.posts.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1817, 1, 'admin.posts.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1818, 1, 'admin.posts.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1819, 1, 'admin.posts.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1820, 1, 'admin.posts.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1821, 1, 'admin.posts.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1822, 1, 'admin.product-categories.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1823, 1, 'admin.product-categories.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1824, 1, 'admin.product-categories.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1825, 1, 'admin.product-categories.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1826, 1, 'admin.product-categories.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1827, 1, 'admin.product-categories.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1828, 1, 'admin.product-categories.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1829, 1, 'admin.products.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1830, 1, 'admin.products.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1831, 1, 'admin.products.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1832, 1, 'admin.products.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1833, 1, 'admin.products.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1834, 1, 'admin.products.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1835, 1, 'admin.products.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1836, 1, 'admin.programs.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1837, 1, 'admin.programs.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1838, 1, 'admin.programs.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1839, 1, 'admin.programs.images.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1840, 1, 'admin.programs.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1841, 1, 'admin.programs.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1842, 1, 'admin.programs.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1843, 1, 'admin.programs.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1844, 1, 'admin.projects.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1845, 1, 'admin.projects.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1846, 1, 'admin.projects.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1847, 1, 'admin.projects.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1848, 1, 'admin.projects.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1849, 1, 'admin.projects.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1850, 1, 'admin.projects.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1851, 1, 'admin.roles.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1852, 1, 'admin.roles.edit_routes', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1853, 1, 'admin.roles.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1854, 1, 'admin.roles.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1855, 1, 'admin.roles.update_routes', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1856, 1, 'admin.support.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1857, 1, 'admin.support.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1858, 1, 'admin.support.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1859, 1, 'admin.support.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1860, 1, 'admin.support.stats', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1861, 1, 'admin.support.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1862, 1, 'admin.transactions.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1863, 1, 'admin.transactions.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1864, 1, 'admin.transactions.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1865, 1, 'admin.transactions.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1866, 1, 'admin.transactions.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1867, 1, 'admin.transactions.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1868, 1, 'admin.transactions.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1869, 1, 'admin.upload.image', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1870, 1, 'admin.user.change-password', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1871, 1, 'admin.user.change-password.form', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1872, 1, 'admin.users.create', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1873, 1, 'admin.users.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1874, 1, 'admin.users.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1875, 1, 'admin.users.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1876, 1, 'admin.users.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1877, 1, 'admin.users.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1878, 1, 'admin.volunteers.destroy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1879, 1, 'admin.volunteers.export', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1880, 1, 'admin.volunteers.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1881, 1, 'admin.volunteers.show', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1882, 1, 'admin.volunteers.statistics', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1883, 1, 'admin.volunteers.status', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1884, 1, 'blogs.details', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1885, 1, 'book.event', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1886, 1, 'cancellation-and-refunds', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1887, 1, 'contact.submit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1888, 1, 'donate.create-order', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1889, 1, 'donate.form', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1890, 1, 'donate.store', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1891, 1, 'donate.submit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1892, 1, 'donation.verify', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1893, 1, 'events', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1894, 1, 'events.details', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1895, 1, 'ewaste.donate', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1896, 1, 'ewaste.donate.form', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1897, 1, 'home.about', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1898, 1, 'home.blogs', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1899, 1, 'home.contact', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1900, 1, 'home.donate', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1901, 1, 'home.index', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1902, 1, 'home.portfolio', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1903, 1, 'home.programs', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1904, 1, 'home.time', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1905, 1, 'login', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1906, 1, 'logout', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1907, 1, 'password.confirm', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1908, 1, 'password.email', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1909, 1, 'password.request', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1910, 1, 'password.reset', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1911, 1, 'password.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1912, 1, 'privacy', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1913, 1, 'profile', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1914, 1, 'profile.edit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1915, 1, 'profile.reports', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1916, 1, 'profile.update', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1917, 1, 'programs.details', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1918, 1, 'projects.details', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1919, 1, 'projects.list', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1920, 1, 'register', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1921, 1, 'sanctum.csrf-cookie', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1922, 1, 'shipping', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1923, 1, 'signup', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1924, 1, 'signup.post', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1925, 1, 'storage.local', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1926, 1, 'support', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1927, 1, 'support.submit', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1928, 1, 'termsandconditions', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1929, 1, 'volunteer.register', '2025-11-27 17:25:12', '2025-11-27 17:25:12'),
(1930, 1, 'volunteer.register.form', '2025-11-27 17:25:12', '2025-11-27 17:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `text1`, `text2`, `text3`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Metal Scrap', 'We specialize in the efficient collection, segregation, and recycling of all types of metal scrap including iron, steel, aluminum, copper, brass, and other industrial metal waste. Our team ensures accurate weight measurement, transparent pricing, and prompt payments to provide maximum value for your scrap materials. With environmentally responsible recycling practices and modern handling equipment, we help reduce landfill waste while promoting sustainable resource reuse. Choosing us means reliable service, fair market rates, quick pickup scheduling, and a commitment to eco-friendly scrap management solutions.', 'Iron Scrap', 'Steel Scrap', 'Mixed Metal Scrap', '1772116790.jpg', '2026-02-26 04:47:56', '2026-02-27 01:55:08'),
(2, 'Copper Scrap', 'We offer specialized copper scrap collection and recycling services with a strong focus on fair pricing and environmental responsibility. Whether it is copper wires, pipes, sheets, motors, or industrial copper waste, we ensure accurate weight measurement and transparent rate calculation based on current market value. Our experienced team provides quick pickup, safe handling, and immediate payment for your convenience. By choosing us, you partner with a trusted scrap management service that maximizes your returns while supporting sustainable recycling practices and reducing environmental impact.', 'Bare Bright Copper Wire', 'Insulated Copper Cables', 'Copper Pipes & Tubes', '1772117138.jpg', '2026-02-26 04:49:44', '2026-02-27 01:52:15'),
(6, 'Aluminium Scrap', 'We provide reliable aluminium scrap collection and recycling services with accurate weight measurement and competitive market pricing. Whether it’s aluminium sheets, utensils, window frames, industrial scrap, or extrusion waste, our team ensures safe handling and efficient processing. We offer quick pickup scheduling, transparent transactions, and instant payment to make the process smooth and hassle-free. By choosing us, you benefit from maximum scrap value, eco-friendly recycling practices, and a trusted partner committed to responsible waste management and sustainability.', 'Aluminium Sheets & Plates', 'Aluminium Window Frames & Profiles', 'Aluminium Cans & Containers', '1772117244.jpg', '2026-02-26 09:17:24', '2026-02-27 02:00:53'),
(7, 'Construction Scrap', 'We provide efficient construction scrap collection and recycling services for building sites, renovation projects, and demolition works. Our team handles a wide variety of construction waste materials such as metal structures, steel bars, pipes, and other reusable scrap generated during construction activities. We ensure proper sorting, accurate weight measurement, and transparent pricing based on current market rates. With our reliable pickup service and prompt payment process, we make construction scrap disposal simple and profitable while promoting environmentally responsible recycling practices.', 'Steel Rods & Rebars', 'Metal Pipes & Fittings', 'Aluminium Frames & Sheets', '1772177373.jpg', '2026-02-27 01:59:33', '2026-02-27 01:59:33'),
(8, 'Industrial Scrap', 'Our industrial scrap collection services are designed to manage scrap generated from factories, workshops, and manufacturing facilities. We collect and recycle various types of industrial waste materials including metal parts, machinery scrap, and production leftovers. Our experienced team ensures safe handling, proper weighing, and fair market pricing for every transaction. With quick pickup and instant payment, we help businesses efficiently dispose of industrial scrap while supporting sustainable recycling and reducing environmental impact.', 'Machine Parts Scrap', 'Factory Metal Waste', 'Industrial Equipment Scrap', '1772177417.jpg', '2026-02-27 02:00:17', '2026-02-27 02:00:17'),
(9, 'Electronic Scrap', 'We offer professional electronic scrap collection and recycling services for homes, offices, and industrial facilities. Electronic waste contains valuable materials such as copper, aluminium, and other recyclable components that can be safely recovered through proper recycling processes. Our team ensures secure handling, accurate weight measurement, and transparent pricing based on current scrap market rates. With quick pickup services and immediate payment, we make it easy for businesses and individuals to dispose of old electronic equipment while supporting environmentally responsible recycling and reducing harmful electronic waste.', 'Old Computers & Laptops', 'Electronic Circuit Boards', 'Wires, Chargers & Power Supplies', '1772177868.jpg', '2026-02-27 02:07:48', '2026-02-27 02:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('oR2XwuDoy08I4m7IQwiZDrWJVlk1N8w2EyZGE1gR', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMzh2RTJvb0dnZ2FLaTNVczJwUURoVkNOVXo3SmQ2Z0wwVUpnYm1DbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzcyMDgzNjkxO319', 1772102425);

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

DROP TABLE IF EXISTS `support_messages`;
CREATE TABLE IF NOT EXISTS `support_messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('new','in_progress','resolved','closed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `admin_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_messages`
--

INSERT INTO `support_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `admin_notes`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed shafi MC', 'nrproperties.in@gmail.com', '7025012220', 'Technical Issue', 'kjbk   iihhii', 'in_progress', NULL, '2025-11-20 16:50:26', '2025-11-20 16:50:47'),
(2, 'Mohammed shafi MC', 'mshafimcw@gmail.com', '08078334928', 'Partnership Inquiry', 'cbb fggdf gsdgdg', 'new', NULL, '2025-11-20 16:54:21', '2025-11-20 16:54:21'),
(3, 'B', 'bhavyanandakumar@gmail.com', 'test', 'test', 'testing testing testing testing testing testing testing testing', 'new', NULL, '2025-11-24 09:53:15', '2025-11-24 09:53:15'),
(4, 'Mohammed shafi MC', 'iamshafimc@gmail.com', '7025012220', 'General Inquiry', 'uggu  jhihi hi', 'new', NULL, '2025-11-26 20:53:42', '2025-11-26 20:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

DROP TABLE IF EXISTS `timings`;
CREATE TABLE IF NOT EXISTS `timings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Monday: 9AM - 7PM', '2025-11-19 17:13:13', '2025-11-19 17:13:13'),
(2, 'Tuesday: 9AM - 7PM', '2025-11-19 17:13:13', '2025-11-19 17:13:13'),
(3, 'Wednesday: 9AM - 7PM', '2025-11-19 17:13:13', '2025-11-19 17:13:13'),
(4, 'Thursday: 9AM - 7PM', '2025-11-19 17:13:13', '2025-11-19 17:13:13'),
(5, 'Friday: 9AM - 7PM', '2025-11-19 17:13:13', '2025-11-19 17:13:13'),
(6, 'Saturday: 10AM - 5PM', '2025-11-19 17:13:13', '2025-11-19 17:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `from` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transactions_transaction_code_unique` (`transaction_code`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `from`, `to`, `transaction_code`, `amount`, `created_at`, `updated_at`) VALUES
(11, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_RkuMxjXqwpvdDt', 12.00, '2025-11-27 21:11:50', '2025-11-27 21:11:50'),
(13, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_RkuP4YSHdNFbIx', 13.00, '2025-11-27 21:13:47', '2025-11-27 21:13:47'),
(15, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_RkuRW2j53ibMau', 14.00, '2025-11-27 21:16:06', '2025-11-27 21:16:06'),
(16, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_RkuSnFqXPinoXS', 10.00, '2025-11-27 21:17:20', '2025-11-27 21:17:20'),
(17, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_RkuTwgAd5LfTv1', 10.00, '2025-11-27 21:18:24', '2025-11-27 21:18:24'),
(18, 'info2mpj@gmail.com', 'ENVED Foundation', 'pay_RozHp3KWLqpuoo', 50.00, '2025-12-08 04:36:31', '2025-12-08 04:36:31'),
(19, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_RpflAOHK6GzgE9', 10.00, '2025-12-09 22:09:43', '2025-12-09 22:09:43'),
(20, 'iamshafimc@gmail.com', 'ENVED Foundation', 'pay_Rpfn0V4JZrKCaI', 11.00, '2025-12-09 22:11:04', '2025-12-09 22:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cover_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_image`, `location`, `description`, `cover_image`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shafi MC', 'iamshafimc@gmail.com', NULL, '$2y$12$i0ogXuIXO2FTrpyNZHj4P.H2.6TM1hBK65cabPD8E2BqUw7S1IO6.', 'uploads/profiles/1763338952_profile_user.jpg', 'Trivandrum', NULL, NULL, 1, 'T8Lhmfyw9F7IqlOhT7Pvk5ZZM3Y5Wc2zyckAZV0dR5Y3O9eCF4lgBpRAdtiL', NULL, '2025-11-20 22:00:57'),
(2, 'Admin Enved', 'envedonline@gmail.com', NULL, '$2y$12$GOfEwSR1zKYh.tdp50IFMuSNh2T4/qV3o.Jd5vwEgw6JcVyZbnzW6', NULL, NULL, NULL, NULL, 1, NULL, '2025-11-21 20:50:20', '2025-11-21 20:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_causes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `additional_info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `availability` enum('weekdays','weekends','both','flexible') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gdpr_consent` tinyint(1) NOT NULL DEFAULT '0',
  `marketing_consent` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteers_email_index` (`email`),
  KEY `volunteers_status_index` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `email`, `phone`, `location`, `preferred_causes`, `additional_info`, `availability`, `gdpr_consent`, `marketing_consent`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Mohammed shafi MC', 'iamshafimcmm@gmail.com', '7025022220', 'jjj', '[\"Collection Drive\",\"E-waste Awareness\"]', NULL, 'weekdays', 1, 0, 'pending', '2025-11-27 16:30:17', '2025-11-27 16:30:17'),
(5, 'Mohammed shafi MC', 'iamshafimcf@gmail.com', '7025014220', 'kochi', '[\"Collection Drive\",\"E-waste Awareness\"]', NULL, 'weekdays', 1, 0, 'rejected', '2025-11-27 16:37:51', '2025-12-04 07:55:08'),
(6, 'B', 'bhavyanandakumar@gmail.com', '9961306222', 'Ernakulam', '[\"Collection Drive\"]', NULL, 'weekdays', 1, 0, 'approved', '2025-12-01 05:07:33', '2025-12-04 07:54:58'),
(7, 'midhun p joy', 'info2mpj@gmail.com', '09947156723', 'VYTTILA', '[\"Collection Drive\"]', NULL, 'weekdays', 1, 0, 'pending', '2025-12-08 04:35:13', '2025-12-08 04:35:13'),
(8, 'Angeleena Sajy', 'angeleenasajy@gmail.com', '94004 42773', 'Angamaly', '[\"Educational Sessions\",\"E-waste Awareness\"]', NULL, 'weekdays', 1, 0, 'pending', '2025-12-10 02:40:23', '2025-12-10 02:40:23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_routes`
--
ALTER TABLE `role_routes`
  ADD CONSTRAINT `role_routes_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
