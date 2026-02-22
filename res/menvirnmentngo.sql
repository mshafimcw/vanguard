-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 07, 2025 at 08:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menvirnmentngo`
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
(27, '2025_10_18_062509_create_projects_table', 2),
(28, '2025_10_18_064629_add_program_id_to_orders_table', 2),
(29, '2025_10_20_102306_create_roles_table', 3),
(30, '2025_10_20_123333_create_role_routes_table', 3),
(31, '2025_10_21_054823_add_featured_to_posts_table', 3);

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
  `program_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email_id` varchar(191) NOT NULL,
  `order_status` varchar(191) NOT NULL DEFAULT 'pending',
  `address` varchar(191) DEFAULT NULL,
  `phonenumber` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `image`, `post_category_id`, `user_id`, `published`, `created_at`, `updated_at`, `featured`) VALUES
(4, 'Velocera 95 – Where Gloss Meets Strength', 'velocera-95-where-gloss-meets-strength-2', 'Experience the world’s most advanced ceramic coating, engineered with an extraordinary 95% SiO₂ concentration.', 'posts/1757360933.png', 1, 1, 1, '2025-09-06 10:40:25', '2025-09-08 08:48:53', 0),
(5, 'About Us – Redefining the Standards of Car Care', 'about-us-redefining-the-standards-of-car-care', 'At Velocera, we believe your car deserves nothing but the best protection. Our products combine cutting-edge technology with real-world performance, ensuring your vehicle stays flawless for years. From ultra-concentrated ceramic coatings to next-generation paint protection films, Velocera is redefining automotive care for enthusiasts and premium car owners across India.\r\n\r\nWe don’t just protect vehicles — we preserve passion. Every product we design is backed by German innovation, world-class materials, and rigorous testing to guarantee unmatched durability, brilliance, and safety. Whether it’s shielding your car from scratches, UV rays, or daily wear, Velocera ensures a showroom finish that lasts.\r\n\r\nWith Velocera, you invest in more than protection — you invest in peace of mind, confidence on every drive, and a standard of excellence trusted by detailers and car lovers alike. Our mission is simple: to elevate car care into an art form, where performance meets perfection.', 'posts/1758143133.png', 2, 1, 1, '2025-09-07 22:04:09', '2025-09-17 10:05:33', 0),
(6, 'Low Maintenance', 'low-maintenance', 'Easy to clean and care for, eliminating the need for pH-neutral shampoos or special products.', 'posts/1757532776.png', 3, 1, 1, '2025-09-07 22:13:33', '2025-09-17 11:07:40', 0),
(7, 'Long-Lasting Performance', 'long-lasting-performance', 'Designed to endure years of use, maintaining shine and strength without frequent reapplication', 'posts/1757532752.png', 3, 1, 1, '2025-09-07 22:14:39', '2025-09-17 11:07:09', 0),
(8, 'UV & Weather Resistance', 'uv-weather-resistance', 'Shields your car from harsh sun, acid rain, and daily pollutants, keeping surfaces fresh and flawless.', 'posts/1757532544.png', 3, 1, 1, '2025-09-07 22:15:30', '2025-09-17 11:06:36', 0),
(9, 'Premium Materials', 'premium-materials', 'Made with globally recognized raw materials like Covestro TPU and Ashland adhesives for reliability you can count on.', 'posts/1757532349.png', 3, 1, 1, '2025-09-07 22:16:11', '2025-09-17 11:05:55', 0),
(10, 'German Technology', 'german-technology', 'Backed by precision engineering and advanced R&D, our products deliver world-class performance trusted worldwide.', 'posts/1757528275.png', 3, 1, 1, '2025-09-07 22:16:56', '2025-09-17 11:05:25', 0),
(11, '232', '232', 'Happy Clients', NULL, 4, 1, 1, '2025-09-07 22:55:24', '2025-09-07 22:55:24', 0),
(12, '521', '521', 'Cars', NULL, 4, 1, 1, '2025-09-07 22:55:50', '2025-09-07 22:55:50', 0),
(13, '1463', '1463', 'Hours Of Support', NULL, 4, 1, 0, '2025-09-07 22:56:17', '2025-09-07 22:56:17', 0),
(14, '15', '15', 'HardWorkers', NULL, 4, 1, 1, '2025-09-07 22:56:40', '2025-09-07 22:56:40', 0),
(15, 'The perfect fusion of hardness, gloss, and hydrophobic power — crafted for those who settle for nothing less than perfection.', 'the-perfect-fusion-of-hardness-gloss-and-hydrophobic-power-crafted-for-those-who-settle-for-nothing-less-than-perfection', 'Uncompromising protection with unmatched brilliance – Velocera 95 forms a resilient shield that preserves your vehicle’s paint, keeping it showroom-fresh for years. Its industry-leading 95% SiO₂ concentration delivers exceptional hardness, scratch resistance, and long-lasting gloss that turns heads on every road.<br/><br/>\r\n\r\nEngineered for precision and performance – Every drop of Velocera 95 is scientifically formulated to bond seamlessly with automotive surfaces, ensuring maximum protection without compromising the aesthetic appeal. Its hydrophobic properties repel water, dirt, and grime, making cleaning effortless and maintaining that perfect mirror-like finish. <br/><br/>\r\n\r\nTailored for the demands of Indian roads – From scorching summers to monsoon downpours and dusty highways, Velocera 95 stands resilient. Its robust formulation ensures longevity and consistent performance, regardless of temperature fluctuations, humidity, or exposure to harsh UV rays.<br/><br/>\r\n\r\nLuxury meets technology – Powered by cutting-edge nanotechnology, Velocera 95 penetrates microscopic surface imperfections, creating a flawless finish that enhances depth, clarity, and color vibrancy. This advanced formulation not only elevates visual appeal but also reduces surface friction, contributing to long-term paint integrity.', 'posts/Ks1KrwJMssZoQHYmLuvMIuVYn24ez95dVo5aEur2.png', 5, 1, 0, '2025-09-07 23:01:28', '2025-09-17 13:07:17', 0),
(16, 'Hardness', 'hardness', 'Stronger, longer-lasting surface protection with 9H+ strength', NULL, 6, 1, 0, '2025-09-07 23:07:29', '2025-09-07 23:07:29', 0),
(17, 'Gloss', 'gloss', 'Deep, wet-look shine measured at 96&deg; gloss level', NULL, 6, 1, 1, '2025-09-07 23:07:53', '2025-09-07 23:07:53', 0),
(18, 'Hydrophobic effect', 'hydrophobic-effect', 'Contact angle over 115&deg; ensures dirt, mud, and water slide off effortlessly', NULL, 6, 1, 0, '2025-09-07 23:08:36', '2025-09-07 23:08:36', 0),
(19, 'Balanced performance', 'balanced-performance', 'Not just hard, not just shiny &mdash; but the perfect equilibrium', NULL, 6, 1, 0, '2025-09-07 23:09:29', '2025-09-07 23:09:29', 0),
(20, 'Image 1', 'image-1', NULL, 'posts/1757534740.jpg', 7, 1, 1, '2025-09-07 23:33:23', '2025-09-10 09:05:40', 0),
(21, 'Image 2', 'image-2', NULL, 'posts/1757534701.jpg', 7, 1, 1, '2025-09-07 23:33:46', '2025-09-10 09:05:01', 0),
(22, 'Image 3', 'image-3', NULL, 'posts/1757534681.jpg', 7, 1, 1, '2025-09-07 23:34:18', '2025-09-10 09:04:41', 0),
(23, 'Image 4', 'image-4', NULL, 'posts/1757534653.jpg', 7, 1, 1, '2025-09-07 23:34:36', '2025-09-10 09:04:13', 0),
(24, 'Image 5', 'image-5', NULL, 'posts/1757534627.jpg', 7, 1, 1, '2025-09-07 23:34:54', '2025-09-10 09:03:47', 0),
(25, 'Sara Wilson', 'sara-wilson', 'Long-Lasting Protection & Gloss', 'posts/1757535136.jpg', 8, 1, 1, '2025-09-07 23:45:20', '2025-09-10 09:12:16', 0),
(26, 'John', 'john', 'Adds Depth & Hydrophobic Finish', 'posts/1757535101.jpg', 8, 1, 1, '2025-09-07 23:45:53', '2025-09-10 09:11:41', 0),
(27, 'Aravind', 'aravind', 'UV & Chemical Resistance', 'posts/1757535069.jpg', 8, 1, 0, '2025-09-07 23:46:27', '2025-09-10 09:11:09', 0),
(28, '1. How long does Velocera 95 last?', '1-how-long-does-velocera-95-last', 'Velocera 95 offers years of protection with a single application, even under harsh Indian weather.', NULL, 9, 1, 1, '2025-09-07 23:49:14', '2025-09-07 23:49:14', 0),
(29, '2.Do I need special shampoos or cleaners?', '2do-i-need-special-shampoos-or-cleaners', 'No. Unlike other coatings, Velocera 95 does not require pH-neutral shampoos. Regular car shampoos work perfectly.', NULL, 9, 1, 1, '2025-09-07 23:49:41', '2025-09-07 23:49:41', 0),
(30, '3.Will it protect against scratches?', '3will-it-protect-against-scratches', 'Yes, the 9H+ hardness resists swirl marks, light scratches, and daily wear &amp; tear.', NULL, 9, 1, 1, '2025-09-07 23:50:06', '2025-09-07 23:50:06', 0),
(31, '4.How many washes can it withstand?', '4how-many-washes-can-it-withstand', 'Velocera 95 stays strong for 75+ washes without losing its gloss or hydrophobic properties.', NULL, 9, 1, 1, '2025-09-07 23:50:32', '2025-09-07 23:50:32', 0),
(32, '5.Can it withstand Indian climate?', '5can-it-withstand-indian-climate', 'Absolutely. It is tested for Indian roads, dust, rain, and extreme sun exposure.', NULL, 9, 1, 1, '2025-09-07 23:50:53', '2025-09-07 23:50:53', 0),
(33, '7034303303', '7034303303', NULL, NULL, 10, 1, 0, '2025-09-07 23:55:50', '2025-09-07 23:55:50', 0),
(34, 'hello@velocera.com', 'hello-at-veloceracom', NULL, NULL, 11, 1, 1, '2025-09-07 23:56:07', '2025-09-07 23:56:07', 0),
(35, 'Address', 'address', 'V SREEDHARAN ROAD Near Choice House & Ramada Resort PANANGAD, Kumbalam, Kochi, Kerala 682506', NULL, 12, 1, 1, '2025-09-08 06:34:32', '2025-09-08 06:34:32', 0),
(36, 'facebook', 'facebook', 'https://facebook.com', 'posts/1757535398.png', 13, 1, 1, '2025-09-08 06:41:07', '2025-09-17 19:54:40', 0),
(37, 'instagram', 'instagram', 'https://instagram.com', 'posts/1757535378.png', 13, 1, 1, '2025-09-08 06:44:08', '2025-09-17 19:54:27', 0),
(38, 'Velocera 95', 'velocera-95', NULL, 'posts/1758093660.png', 14, 1, 1, '2025-09-08 06:46:35', '2025-09-16 20:21:00', 0),
(39, 'Veloskin PPF -  Where Clarity Meets Protection', 'veloskin-ppf-where-clarity-meets-protection', 'An Invisible layer that protects your car paint finish', 'posts/1758237542.png', 1, 1, 1, '2025-09-16 21:28:41', '2025-09-21 02:44:07', 0),
(40, 'Trusted by Experts', 'trusted-by-experts', 'The preferred choice of professional detailers and automotive enthusiasts across India.', NULL, 3, 1, 0, '2025-09-17 11:08:36', '2025-09-17 11:08:36', 0),
(41, '6.What is Veloskin PPF?', '6what-is-veloskin-ppf', 'Veloskin PPF is a premium Paint Protection Film designed to shield your vehicle’s paint from scratches, chips, stains, and environmental damage while maintaining a crystal-clear, glossy finish.', NULL, 9, 1, 0, '2025-09-17 13:10:49', '2025-09-17 13:10:49', 0),
(42, 'Lorem ipsum dolor sit amet.', 'lorem-ipsum-dolor-sit-amet', 'Lorem ipsum dolor sit amet.', NULL, 15, 1, 0, '2025-11-07 14:32:15', '2025-11-07 14:32:15', 0),
(43, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit', 'Lorem ipsum dolor sit amet, consectetur\r\nadipiscing elit', NULL, 16, 1, 0, '2025-11-07 14:35:37', '2025-11-07 14:35:37', 0);

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
(1, 'Slider', 'slider', '2025-09-06 09:40:42', '2025-09-06 09:40:42'),
(2, 'About S', 'about-s', '2025-09-07 10:27:37', '2025-09-07 10:27:37'),
(3, 'Features', 'features', '2025-09-07 22:11:19', '2025-09-07 22:11:19'),
(4, 'Counter', 'counter', '2025-09-07 22:53:48', '2025-09-07 22:53:48'),
(5, 'Whychooseus', 'whychooseus', '2025-09-07 22:59:56', '2025-09-07 22:59:56'),
(6, 'Facilities', 'facilities', '2025-09-07 23:06:20', '2025-09-07 23:06:20'),
(7, 'Gallery', 'gallery', '2025-09-07 23:31:21', '2025-09-07 23:31:21'),
(8, 'Testimonials', 'testimonials', '2025-09-07 23:39:50', '2025-09-07 23:39:50'),
(9, 'Faq', 'faq', '2025-09-07 23:48:39', '2025-09-07 23:48:39'),
(10, 'Phone', 'phone', '2025-09-07 23:52:56', '2025-09-07 23:52:56'),
(11, 'Email', 'email', '2025-09-07 23:55:20', '2025-09-07 23:55:20'),
(12, 'Address', 'address', '2025-09-08 06:31:13', '2025-09-08 06:31:13'),
(13, 'Social Icons', 'social-icons', '2025-09-08 06:35:16', '2025-09-08 06:35:16'),
(14, 'Logo', 'logo', '2025-09-08 06:46:16', '2025-09-08 06:46:16'),
(15, 'Highlights', 'highlights', '2025-11-07 14:30:44', '2025-11-07 14:30:44'),
(16, 'Commondonation', 'commondonation', '2025-11-07 14:34:37', '2025-11-07 14:34:37');

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

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Highlights', NULL, '2025-11-07 14:30:13', '2025-11-07 14:30:13');

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

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
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
(1, 'admin', '2025-10-22 12:56:54', '2025-10-22 12:56:54'),
(2, 'user', '2025-10-22 12:56:56', '2025-10-22 12:56:56');

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
(1, 1, 'admin.roles.index', '2025-10-22 12:56:59', '2025-10-22 12:56:59'),
(2, 1, 'reports.index', '2025-10-22 12:56:59', '2025-10-22 12:56:59'),
(3, 2, 'user.dashboard', '2025-10-22 12:57:00', '2025-10-22 12:57:00');

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
('RyVPpHByR0y5EFIdfT5PdX9IKROVkIoKu4iOs7eT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOUhrdVFsd1FGcG1mNjhhRHRyb2pzZ2hsdnUyT1lab1BEbXgwUkdNWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1762545989);

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
(1, 'Admin', 'admin@example.com', '2025-10-22 12:57:12', '$2y$12$2GxpT16ez6hPiT7wMDzkNu9w3I9UB74C7Ndc4L3zeQQytn5HtGIN6', NULL, NULL, NULL, NULL, 1, 'zrttpQRYJV', '2025-10-22 12:57:13', '2025-10-22 12:57:13'),
(2, 'Normal User', 'user@example.com', '2025-10-22 12:57:13', '$2y$12$QYm97zwm3GCftz/J7azZpuV9lYJwy1p4ABEzlCUm9FRQfjIXL.Ng2', NULL, NULL, NULL, NULL, 2, 'y8FfHCjtqg', '2025-10-22 12:57:13', '2025-10-22 12:57:13');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `multiple_images`
--
ALTER TABLE `multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_routes`
--
ALTER TABLE `role_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
