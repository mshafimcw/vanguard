-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2026 at 09:07 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u181922940_enved`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-harshamdigitz@gmail.com|2401:4900:8fdf:c8d0:eda2:5e56:b2bf:7e2a', 'i:1;', 1763817658),
('laravel-cache-harshamdigitz@gmail.com|2401:4900:8fdf:c8d0:eda2:5e56:b2bf:7e2a:timer', 'i:1763817658;', 1763817658),
('laravel-cache-lqxunxxf@testform.xyz|166.1.173.199', 'i:5;', 1763788526),
('laravel-cache-lqxunxxf@testform.xyz|166.1.173.199:timer', 'i:1763788526;', 1763788526);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `subject` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `event_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_multiple_images`
--

CREATE TABLE `event_multiple_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ewaste_donations`
--

CREATE TABLE `ewaste_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `donor_type` enum('Individual/Residential','Association/Education','Institution/Corporate/Commercial','Establishment') NOT NULL,
  `pickup_location` text NOT NULL,
  `waste_type` text NOT NULL,
  `message` text DEFAULT NULL,
  `gdpr_consent` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(191) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ewaste_donations`
--

INSERT INTO `ewaste_donations` (`id`, `name`, `email`, `phone`, `donor_type`, `pickup_location`, `waste_type`, `message`, `gdpr_consent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed shafi MC', 'iamshafimch@gmail.com', '7025012220', 'Individual/Residential', 'jbjbbjbj', 'knnnk', 'knknnk', 1, 'pending', '2025-11-27 17:20:47', '2025-11-27 17:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(27, '2025_11_15_225805_add_message_to_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `multiple_images`
--

CREATE TABLE `multiple_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `razorpay_order_id` varchar(191) DEFAULT NULL,
  `razorpay_payment_id` varchar(191) DEFAULT NULL,
  `razorpay_signature` varchar(191) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email_id` varchar(191) NOT NULL,
  `donor_type` enum('Individual/Residential','Association/Education','Institution/Corporate/Commercial','Establishment') DEFAULT NULL,
  `preferred_cause` varchar(191) DEFAULT NULL,
  `gdpr_consent` tinyint(1) NOT NULL DEFAULT 0,
  `order_status` varchar(191) NOT NULL DEFAULT 'pending',
  `payment_status` varchar(191) NOT NULL DEFAULT 'pending',
  `address` varchar(191) DEFAULT NULL,
  `phonenumber` varchar(191) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `post_category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `gallery_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `image`, `post_category_id`, `user_id`, `published`, `created_at`, `updated_at`, `featured`, `gallery_category_id`) VALUES
(2, 'ngo@envedfoundation.org', 'ngo-at-envedfoundationorg', 'ngo@envedfoundation.org', NULL, 11, 1, 0, '2025-11-08 10:28:24', '2025-11-20 13:48:13', 0, NULL),
(3, '+919846066620', '919846066620', '+919846066620', NULL, 10, 1, 0, '2025-11-08 10:28:51', '2025-11-16 20:35:31', 0, NULL),
(4, 'ENVED FOUNDATION', 'enved-foundation', '<p>We believe environmental responsibility should be simple, accessible, and community-led. Enved Foundation exists to help people make choices that protect the planet.</p>', 'posts/1763742692.png', 14, 1, 0, '2025-11-08 10:31:11', '2025-11-21 16:31:32', 0, NULL),
(5, 'When Communities Act, The Earth Heals.', 'when-communities-act-the-earth-heals', 'Promoting sustainable energy solutions and environmental awareness for a cleaner, healthier planet.', 'posts/1762617951.jpg', 1, 1, 0, '2025-11-08 10:35:51', '2025-11-20 17:01:39', 0, NULL),
(6, 'Protect the Planet. Empower the Future.', 'protect-the-planet-empower-the-future', 'Join our mission to recycle, reuse, and responsibly manage electronic waste for a sustainable future.', 'posts/1762618518.jpg', 1, 1, 0, '2025-11-08 10:45:18', '2025-11-20 17:01:08', 0, NULL),
(7, 'Sustainable Living  Awareness', 'sustainable-living-awareness', '<p>We help communities understand sustainable options and adopt smarter everyday habits.</p>', 'posts/1765313459.png', 3, 1, 0, '2025-11-08 13:15:35', '2025-12-09 20:50:59', 0, NULL),
(8, 'E-Waste Reduction', 'e-waste-reduction', '<p>From collection drives to education programmes, we simplify responsible disposal for families, schools, and offices.</p>', 'posts/1765313512.png', 3, 1, 0, '2025-11-08 13:19:22', '2025-12-09 20:51:52', 0, NULL),
(9, 'Eco-Conscious Education', 'eco-conscious-education', '<p>We teach children the science, responsibility, and joy of protecting our planet.</p>', 'posts/1765313535.png', 3, 1, 0, '2025-11-08 13:22:12', '2025-12-09 20:52:15', 0, NULL),
(10, 'A Community Built on Action', 'a-community-built-on-action', '<p>Enved Foundation is a sustainability foundation in India built on a simple belief: every child deserves to inherit a cleaner, greener planet. The organisation began with a group of fathers who looked at the growing pile of e-waste, pollution, and disappearing green spaces and asked a difficult question &mdash; what kind of earth are we leaving behind for our children?</p>\r\n<p>&nbsp;Instead of waiting for change, we chose to create it.</p>\r\n<p>The name&nbsp;Enved comes from the words environment and education, the two pillars that shape every initiative we run. We believe awareness is the first step toward responsibility, and responsibility is the only path to long-term sustainability. By educating communities, schools, families, and neighbourhoods, Enved Foundation works to turn sustainable practices into everyday habits.</p>\r\n<p>&nbsp;Our motto, Empowering Sustainable Futures, reflects this mission. Whether it&rsquo;s responsible e-waste management, environmental awareness sessions, green campus programmes, or community-led initiatives, we focus on actionable, measurable impact. Every activity is designed to make sustainability accessible, practical, and rooted in the real world.</p>\r\n<p>Today,&nbsp;Enved Foundation continues to grow as a trusted sustainability foundation in India, bringing people together to protect the environment for the generations that follow. What started as a promise from a couple of fathers has evolved into a movement committed to creating a future where conscious choices become second nature and communities lead the way to a cleaner tomorrow.</p>\r\n<p>Enved Foundation exists for one purpose: to build a planet our children will be proud to inherit and inspired to protect.</p>', 'posts/1763215526.jpg', 2, 1, 1, '2025-11-08 13:31:58', '2025-11-22 14:21:40', 0, NULL),
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
(69, 'Simple Everyday Sustainability Practices', 'simple-everyday-sustainability-practices', '<p>Living sustainably doesn\'t require drastic lifestyle changes. Here are five simple practices you can start today:</p>\r\n<p><strong>1. Reduce Single-Use Plastics</strong><br>Carry reusable bags, water bottles, and containers. This small change can prevent hundreds of plastic items from entering landfills each year.</p>\r\n<p><strong>2. Conserve Water</strong><br>Fix leaky taps, take shorter showers, and collect rainwater for plants. Every drop counts in our journey toward water conservation.</p>\r\n<p><strong>3. Practice Mindful Energy Use</strong><br>Turn off lights when leaving rooms, unplug electronics when not in use, and opt for natural lighting during daytime hours.</p>\r\n<p><strong>4. Support Local and Seasonal</strong><br>Buy local produce to reduce carbon footprint from transportation and enjoy fresher, seasonal foods.</p>\r\n<p><strong>5. Start Composting</strong><br>Convert kitchen waste into nutrient-rich compost for your plants while reducing landfill waste.</p>\r\n<p>Small consistent actions create significant environmental impact over time. Start with one practice today and gradually incorporate more into your routine.</p>', 'posts/1764039608.jpg', 25, 2, 0, '2025-11-25 03:00:08', '2025-11-25 03:00:08', NULL, NULL),
(70, 'E-Waste Management Guide', 'e-waste-management-guide', '<p>Electronic waste is one of the fastest-growing waste streams. Here\'s how to manage it responsibly:</p>\r\n<p><strong>What is E-Waste?</strong><br>E-waste includes discarded electronic devices like mobile phones, computers, televisions, and household appliances.</p>\r\n<p><strong>Why Proper Disposal Matters</strong></p>\r\n<ul>\r\n<li>\r\n<p>Prevents toxic materials from contaminating soil and water</p>\r\n</li>\r\n<li>\r\n<p>Conserves valuable resources through recycling</p>\r\n</li>\r\n<li>\r\n<p>Reduces environmental pollution</p>\r\n</li>\r\n</ul>\r\n<p><strong>Simple E-Waste Management Steps:</strong></p>\r\n<ol start=\"1\">\r\n<li>\r\n<p><strong>Repair First</strong>: Consider repairing devices before replacement</p>\r\n</li>\r\n<li>\r\n<p><strong>Donate Working Electronics</strong>: Give functional devices to those in need</p>\r\n</li>\r\n<li>\r\n<p><strong>Find Certified Recyclers</strong>: Use authorized e-waste recycling centers</p>\r\n</li>\r\n<li>\r\n<p><strong>Data Security</strong>: Always wipe personal data before disposal</p>\r\n</li>\r\n</ol>\r\n<p><strong>ENVED Foundation\'s Initiative</strong><br>We organize monthly e-waste collection drives across Kochi. Contact us to schedule pickup or visit our collection centers.</p>\r\n<p>Together, we can tackle the e-waste challenge and create a cleaner environment.</p>', 'posts/1764039646.jpg', 25, 2, 0, '2025-11-25 03:00:46', '2025-11-25 03:00:46', NULL, NULL),
(71, 'Community Gardening Benefits', 'community-gardening-benefits', '<p>Community gardens are transforming urban spaces and bringing people together while promoting sustainability.</p>\r\n<p><strong>Environmental Benefits:</strong></p>\r\n<ul>\r\n<li>\r\n<p>Increases green cover in urban areas</p>\r\n</li>\r\n<li>\r\n<p>Improves air quality through plant respiration</p>\r\n</li>\r\n<li>\r\n<p>Reduces food miles by growing locally</p>\r\n</li>\r\n<li>\r\n<p>Promotes biodiversity in city environments</p>\r\n</li>\r\n</ul>\r\n<p><strong>Social Advantages:</strong></p>\r\n<ul>\r\n<li>\r\n<p>Creates community bonding opportunities</p>\r\n</li>\r\n<li>\r\n<p>Provides educational spaces for children and adults</p>\r\n</li>\r\n<li>\r\n<p>Offers stress relief through gardening activities</p>\r\n</li>\r\n<li>\r\n<p>Builds food security at local level</p>\r\n</li>\r\n</ul>\r\n<p><strong>Getting Started:</strong></p>\r\n<ol start=\"1\">\r\n<li>\r\n<p>Identify unused land in your neighborhood</p>\r\n</li>\r\n<li>\r\n<p>Gather interested community members</p>\r\n</li>\r\n<li>\r\n<p>Plan your garden layout and crops</p>\r\n</li>\r\n<li>\r\n<p>Start small with easy-to-grow vegetables</p>\r\n</li>\r\n</ol>', 'posts/1764039699.jpg', 25, 2, 0, '2025-11-25 03:01:24', '2025-11-25 03:01:39', NULL, NULL),
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
(85, 'Companies', 'companies-2', '<p>Companies</p>', 'posts/1769623114.jpg', 26, 1, 0, '2026-01-28 17:58:34', '2026-01-28 17:58:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(28, 'Time', 'time', '2025-11-27 15:25:38', '2025-11-27 15:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `video_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `created_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_id` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `role_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `route_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3TG6fDFjdeWpXo1UgJvtxiVWwcwSkwmfCTbWOfqc', NULL, '2001:4860:7:1103::8d', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkY4a0szQjlLR3J5YjczUDl6N0NzczhNZUlkVTF4SEU2UTh3MGg2QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771722799),
('9VInEmsNiBrk9CckBGSsp6EXwYuRlHHdzn7Pj9Ys', NULL, '180.153.236.132', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0pIa0VDM2VLZGxma29meHByVXdsbmpnZnp6Qmk5WEFyRDhqZzcwQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3LmVudmVkZm91bmRhdGlvbi5vcmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771764798),
('AS8eL7GRjxX663xtviejP5V2wF7T7fVhNbz5rkY7', NULL, '2600:1f18:66cd:1a50:3933:dec9:c007:4044', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3JOd0tQODU4OWFyOFlnRElXOTRQekRuUXJXalRwWHZIOHRkNlNLVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZy9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771741084),
('CnM5PPOK627PeS49ENbRiqIFGiUSb9KHJpWPr3SI', NULL, '192.36.248.249', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidU9VQTloTTVlZHlES3phaHVqcERrU1Rjdkl4YmhGQnNLTGRQcEhGSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZy9wcm9ncmFtc2RldGFpbHMvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771725745),
('fD0pmdNBh9OTkggwmBuQwJkKHmWUDgEedeg2tDkY', NULL, '134.199.69.144', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEpZMFN0bFZ1eEp6djVYQkZXVzJncXhSajdCVHVpMUFEZk03VEQwcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771770023),
('fXR0qmDfGhCekOCzOa3tDIPfuu4xzroJPOKHPk8w', NULL, '2600:1f18:66cd:1a50:8f3a:fba4:433b:c377', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmhjRXEySlU0UTJXS2NOM0tNQlM1aTdORk9lZVJsUmV2cG9KUmV5cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771724629),
('I5o1cSk7nDTYLeyyzSx2eohN2NAmQaxT9lRm9oWo', NULL, '35.175.252.51', 'SonyEricssonK800i/R1CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWxoUHE4WXVrQjVYMGM4VTRKdnU0a3BGTU9lbWdBM2x4SFFvdnZIZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771762086),
('jEdHhiFXLA4z9rRZnvAxM99XGrGOHc08kQHkU3Et', NULL, '142.44.220.216', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGFWMG1sNHRRWGtsa1dQU28zdmJOOUNvUkg4YVBQM1JJVVBTOEpCVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3LmVudmVkZm91bmRhdGlvbi5vcmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771791659),
('NlotfHKrDIxyEUC4H7kFdmliKH5BriooD2iFJ6ka', NULL, '2001:4860:7:f03::e7', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczJyVXhXOHdXN1FxZ01zcnNjemNRdjM1bmZaSDlGcWxUNGRIeTR6RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771722796),
('nzIMeGR1htWJWMyY4sExrKycS5RRBxZa4e58slfx', NULL, '66.249.75.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.7559.132 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXBjUXJ4cXJ2aUhjVHBYa2d4emx2dDRaY3VydGt0Z3kzWGJtUXV4QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771723076),
('R3VQHWiil1fDY74RPVewl3YYtHiHEwS9V0LD4xRY', NULL, '2409:40f3:8:a3fe:8000::', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmFnWHV0TUNaQVJTUlp2R0N4U3UxNVNxSmtHN2taV1FiNHJ4NDJIMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771741615),
('seyJl7kZJthO6lC3XVeMJTDFLTwqkkaFont6vNf5', NULL, '192.71.23.211', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2FhVjE3NEVFeTZOc2c3Q01VakIxeVlyam5EeGV1N3hjSGRkY0oweiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZy90ZXJtc2FuZGNvbmRpdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771725745),
('t4kttjQXPhiWD93X8GRnZWbeiiRa5d01NTEDkCVa', NULL, '192.36.70.176', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnFiWDRPWkpKZTIyVzhhVGk3ZGNTZFkzUHp0VGY5OXlFZU56T3ZaeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZy9jYW5jZWxsYXRpb24tYW5kLXJlZnVuZHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771725744),
('vJn0foXwOU6sGfKvcZSWNXImXc7TVkZTyvHS4kJe', NULL, '66.249.75.201', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHdxb1ZSV2E5NEcxT3dvbGNWUUgzNnF4SWkxYmtzZnRVNjA3REZVWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771758038),
('WiHFXFD7SuGXJz53QZoRxpXw9p87KgzlyAZKE3ep', NULL, '192.71.103.173', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUdDaUtxNG9VTlBtaVVzeDZQek9PYmVKV01RQ1M2czRoQXdqbm5MaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vZW52ZWRmb3VuZGF0aW9uLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771725743),
('xoFW5JR0x1neEC5S88tbaD9a05jtTa6GEgPNM3Pl', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiN05HeFIxU2hIbXk2MlpHNEx1ZXdqU1V0UzNVTlBWbUU5YVJWSWJ4YyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1771744413),
('yMMCBaWt2k0k1ewDA1e8TZV7GmvCTmQEylwK6h2l', NULL, '2.57.23.101', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.127 Safari/534.16', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidndnYlpKRFlEOTZjakZsWG91NE81MDc1YVdXWGxrWVJmdzJBaE5WVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1771738885);

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `subject` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `status` enum('new','in_progress','resolved','closed') NOT NULL DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `timings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(191) NOT NULL,
  `to` varchar(191) NOT NULL,
  `transaction_code` varchar(191) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cover_image` varchar(191) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_image`, `location`, `description`, `cover_image`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shafi MC', 'iamshafimc@gmail.com', NULL, '$2y$12$i0ogXuIXO2FTrpyNZHj4P.H2.6TM1hBK65cabPD8E2BqUw7S1IO6.', 'uploads/profiles/1763338952_profile_user.jpg', 'Trivandrum', NULL, NULL, 1, NULL, NULL, '2025-11-20 22:00:57'),
(2, 'Admin Enved', 'envedonline@gmail.com', NULL, '$2y$12$GOfEwSR1zKYh.tdp50IFMuSNh2T4/qV3o.Jd5vwEgw6JcVyZbnzW6', NULL, NULL, NULL, NULL, 1, NULL, '2025-11-21 20:50:20', '2025-11-21 20:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `preferred_causes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`preferred_causes`)),
  `additional_info` text DEFAULT NULL,
  `availability` enum('weekdays','weekends','both','flexible') NOT NULL,
  `gdpr_consent` tinyint(1) NOT NULL DEFAULT 0,
  `marketing_consent` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(191) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_bookings`
--
ALTER TABLE `event_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_multiple_images`
--
ALTER TABLE `event_multiple_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_multiple_images_event_id_foreign` (`event_id`);

--
-- Indexes for table `ewaste_donations`
--
ALTER TABLE `ewaste_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ewaste_donations_email_index` (`email`),
  ADD KEY `ewaste_donations_status_index` (`status`),
  ADD KEY `ewaste_donations_donor_type_index` (`donor_type`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gallery_categories_slug_unique` (`slug`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_images`
--
ALTER TABLE `multiple_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `multiple_images_program_id_foreign` (`program_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_category_id_foreign` (`post_category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_routes`
--
ALTER TABLE `role_routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_routes_role_id_route_name_unique` (`role_id`,`route_name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_transaction_code_unique` (`transaction_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volunteers_email_index` (`email`),
  ADD KEY `volunteers_status_index` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_bookings`
--
ALTER TABLE `event_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_multiple_images`
--
ALTER TABLE `event_multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ewaste_donations`
--
ALTER TABLE `ewaste_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `multiple_images`
--
ALTER TABLE `multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_routes`
--
ALTER TABLE `role_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1931;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_multiple_images`
--
ALTER TABLE `event_multiple_images`
  ADD CONSTRAINT `event_multiple_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `multiple_images`
--
ALTER TABLE `multiple_images`
  ADD CONSTRAINT `multiple_images_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

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
