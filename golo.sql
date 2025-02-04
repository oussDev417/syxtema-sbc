-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 06:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_senses`
--

CREATE TABLE `ad_senses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `Display` varchar(191) DEFAULT NULL,
  `Type` varchar(191) NOT NULL DEFAULT '1',
  `Active` varchar(191) NOT NULL DEFAULT '1',
  `url` longtext DEFAULT NULL,
  `code` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) DEFAULT 1,
  `Title_ar` longtext DEFAULT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_fr` longtext DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `color` varchar(191) DEFAULT NULL,
  `ImageUpload_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `Title_ar`, `Title_en`, `Title_fr`, `slug`, `color`, `ImageUpload_id`, `created_at`, `updated_at`) VALUES
(71, 1, 1, 'Office', 'Office', 'Office', 'office', 'danger', '707', '2023-02-19 18:42:18', '2023-02-19 18:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_fr` longtext DEFAULT NULL,
  `body_ar` longtext DEFAULT NULL,
  `body_en` longtext DEFAULT NULL,
  `body_fr` longtext DEFAULT NULL,
  `ImageUpload_id` longtext DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `created_at`, `updated_at`) VALUES
(29, 'Hot Desks Office', 'Hot Desks Office', 'Hot Desks Office', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', '712', 'hot-desks-office', '2023-02-19 18:48:23', '2023-02-19 18:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Post_id` int(11) NOT NULL DEFAULT 1,
  `User_id` int(11) NOT NULL DEFAULT 1,
  `Comment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Post_id`, `User_id`, `Comment`, `created_at`, `updated_at`) VALUES
(30, 125, 43, 'Passes that you can purhase once and use all throughout the year 25, 50 or 100 day \r\nHot Desk passes that you can purhase once and use all throughout the year.', '2023-02-18 11:24:36', '2023-02-18 11:24:36'),
(31, 121, 43, 'Office solutions for teams of 4 to 9 who need their private working area We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Private offices must be reserved for at least a month.', '2023-02-18 11:27:49', '2023-02-18 11:27:49'),
(32, 121, 43, 'Office solutions for teams of 4 to 9 who need their private working area We provide the fixed assets from the desks, the chairs and the lighting.', '2023-02-18 11:28:01', '2023-02-18 11:28:01'),
(33, 124, 43, 'Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', '2023-02-18 11:31:57', '2023-02-18 11:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_fr` longtext DEFAULT NULL,
  `body_ar` longtext DEFAULT NULL,
  `body_en` longtext DEFAULT NULL,
  `body_fr` longtext DEFAULT NULL,
  `ImageUpload_id` varchar(200) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_uploads`
--

INSERT INTO `image_uploads` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(327, 'images/favicon-32x32.png', '2020-03-09 13:16:49', '2020-03-09 13:16:49'),
(424, 'images/6220853a49899avatar.jpg', '2022-03-03 17:07:06', '2022-03-03 17:07:06'),
(425, 'images/622086085c166avatar.jpg', '2022-03-03 17:10:32', '2022-03-03 17:10:32'),
(610, 'images/63d54dc1a77b6logo.png', '2023-01-29 00:30:57', '2023-01-29 00:30:57'),
(611, 'images/63d54dcfbe219logo_b.png', '2023-01-29 00:31:11', '2023-01-29 00:31:11'),
(707, 'images/63f297b8798712.jpg', '2023-02-19 18:42:16', '2023-02-19 18:42:16'),
(708, 'images/63f2983a65de82.jpg', '2023-02-19 18:44:26', '2023-02-19 18:44:26'),
(709, 'images/63f2986f7a3c52.jpg', '2023-02-19 18:45:19', '2023-02-19 18:45:19'),
(710, 'images/63f2989b64c602.jpg', '2023-02-19 18:46:03', '2023-02-19 18:46:03'),
(711, 'images/63f298f94e5e42.jpg', '2023-02-19 18:47:37', '2023-02-19 18:47:37'),
(712, 'images/63f299251a9482.jpg', '2023-02-19 18:48:21', '2023-02-19 18:48:21'),
(713, 'images/63f2994ced1bc4.jpg', '2023-02-19 18:49:00', '2023-02-19 18:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `instagrams`
--

CREATE TABLE `instagrams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_fr` longtext DEFAULT NULL,
  `body_ar` longtext DEFAULT NULL,
  `body_en` longtext DEFAULT NULL,
  `body_fr` longtext DEFAULT NULL,
  `ImageUpload_id` varchar(500) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagrams`
--

INSERT INTO `instagrams` (`id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `created_at`, `updated_at`) VALUES
(30, 'Office', 'Office', 'Office', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', '711', 'office', '2023-02-19 18:47:40', '2023-02-19 18:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `Title`, `created_at`, `updated_at`) VALUES
(1, 'Main-menu', '2020-01-02 11:39:50', '2020-01-02 11:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT 0,
  `order` int(11) DEFAULT 0,
  `Title_en` varchar(191) DEFAULT NULL,
  `Title_ar` varchar(191) DEFAULT NULL,
  `Title_fr` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `target` varchar(191) NOT NULL DEFAULT '_self',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `order`, `Title_en`, `Title_ar`, `Title_fr`, `url`, `target`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Home', 'الصفحة الرئيسية', 'Accueil', '/', '_self', '2020-01-13 10:48:19', '2020-01-13 10:48:19'),
(23, 1, 1, 'ThePlace', 'الورك سبيس', 'ThePlace', 'ThePlace', '_self', '2023-02-15 21:34:30', '2023-02-15 21:34:30'),
(24, 1, 1, 'Membership', 'العضويات', 'Membership', 'Membership', '_self', '2023-02-15 21:35:27', '2023-02-15 21:35:27'),
(25, 1, 2, 'Events', 'الأحداث', 'Events', 'Events', '_self', '2023-02-15 21:36:17', '2023-02-15 21:36:17'),
(26, 1, 4, 'Blogs', 'المدونات', 'Blogs', 'Blogs', '_self', '2023-02-15 21:54:30', '2023-02-15 21:54:30'),
(27, 1, 6, 'Contact', 'اتصل بنا', 'Contact', 'Contacts', '_self', '2023-02-15 21:55:16', '2023-02-15 21:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Subject` longtext DEFAULT NULL,
  `name` longtext DEFAULT NULL,
  `mail` longtext DEFAULT NULL,
  `User_id` longtext DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_09_143619_create_permission_tables', 2),
(5, '2016_09_13_070520_add_verification_to_user_table', 3),
(6, '2014_10_12_000000_create_users_table', 4),
(7, '2019_12_29_153111_create_image_uploads_table', 5),
(8, '2019_12_30_141843_create_posts_table', 6),
(9, '2019_12_30_142016_create_categories_table', 7),
(10, '2019_12_30_142116_create_clients_table', 7),
(11, '2019_12_30_142137_create_ad_senses_table', 7),
(12, '2019_12_30_142156_create_menus_table', 7),
(13, '2019_12_30_142250_create_menu_items_table', 7),
(14, '2019_12_30_142326_create_galleries_table', 7),
(15, '2019_12_30_142339_create_instagrams_table', 7),
(16, '2019_12_30_142418_create_messages_table', 7),
(17, '2019_12_30_170524_create_comments_table', 8),
(18, '2019_12_30_171111_create_menu_items_table', 9),
(19, '2017_03_03_100000_create_options_table', 10),
(20, '2020_04_14_162242_create_audio_table', 11),
(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 12),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 12),
(23, '2021_03_07_140933_create_sessions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(31, 'App\\User', 43);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(30, 'App\\User', 43);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`) VALUES
(2, 'Home_fr', '\"Golo is a coworking space for people whose work touches the world, people who take their ideas wherever they go.\"'),
(3, 'Home_ar', '\"Golo هي مساحة عمل مشتركة للأشخاص الذين يمس عملهم العالم ، والأشخاص الذين يأخذون أفكارهم أينما ذهبوا.\"'),
(4, 'Home_en', '\"Golo is a coworking space for people whose work touches the world, people who take their ideas wherever they go. \"'),
(5, 'Favicon', '\"images/favicon-32x32.png\"'),
(8, 'youtube', '\"https:\\/\\/www.youtube.com\"'),
(9, 'GitHub', '\"https:\\/\\/github.com\"'),
(10, 'Twitter', '\"https:\\/\\/twitter.com\"'),
(11, 'Pinterest', '\"https:\\/\\/www.pinterest.com\"'),
(12, 'Tumblr', '\"https:\\/\\/www.tumblr.com\"'),
(13, 'Snapchat', '\"https:\\/\\/www.snapchat.com\"'),
(14, 'LinkedIn', '\"https:\\/\\/www.linkedin.com\"'),
(15, 'Instagram', '\"https:\\/\\/www.instagram.com\"'),
(16, 'Facebook', '\"https://www.facebook.com/\"'),
(17, 'MetaKeyWords', '\"Golo is a coworking space for people whose work touches the world, people who take their ideas wherever they go.\"'),
(18, 'MetaDescription', '\"Golo is a coworking space for people whose work touches the world, people who take their ideas wherever they go.\"'),
(19, 'video', '\"assets/video/video.mp4\"'),
(21, 'Email', '\"Golo@gmail.com\"'),
(22, 'PhoneNumber', '\"+90(5539102492)\"'),
(23, 'Address', '\"3891 Ranchview Dr. Richardson, California 62639\"'),
(24, 'SiteTitle', '\"Golo\"'),
(25, 'Language', '\"on\"'),
(28, 'Metaauthor', '\"Golo is a coworking space for people whose work touches the world, people who take their ideas wherever they go.\"'),
(29, 'Metarobots', '\"Golo is a coworking space for people whose work touches the world, people who take their ideas wherever they go.\"'),
(37, 'logo', '\"images\\/63d54dc1a77b6logo.png\"'),
(39, 'coveruser', '\"images\\/63f2994ced1bc4.jpg\"'),
(40, 'covernew', '\"images\\/63f2994ced1bc4.jpg\"'),
(41, 'covermessage', '\"images\\/63f2994ced1bc4.jpg\"'),
(42, 'coveradvertisement', '\"images\\/63f2994ced1bc4.jpg\"'),
(43, 'coverinstagram', '\"images\\/63f2994ced1bc4.jpg\"'),
(44, 'settings', '\"images\\/63f2994ced1bc4.jpg\"'),
(46, 'logo-black', '\"images\\/63d54dcfbe219logo_b.png\"'),
(47, 'Categories', '\"images\\/63f2994ced1bc4.jpg\"'),
(48, 'Home', '\"images\\/63f2994ced1bc4.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$bui5fl4azCrQhE2fjJQ6YOvAdyRJHXJVsJeAYuVLNWOGWCl9QFXM2', '2019-12-09 14:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `guard_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(31, 'edit articles', 'web', '2020-01-04 14:37:28', '2020-01-04 14:37:28'),
(35, 'User', 'web', '2020-01-04 16:05:35', '2020-01-04 16:05:35'),
(37, 'Supervisors', 'web', '2022-03-03 17:00:53', '2022-03-03 17:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_fr` longtext DEFAULT NULL,
  `body_ar` longtext DEFAULT NULL,
  `body_en` longtext DEFAULT NULL,
  `body_fr` longtext DEFAULT NULL,
  `ImageUpload_id` int(11) DEFAULT NULL,
  `slug` varchar(120) NOT NULL,
  `featured` varchar(200) DEFAULT 'out',
  `price` varchar(255) DEFAULT NULL,
  `hours` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `featured`, `price`, `hours`, `map`, `video`, `created_at`, `updated_at`) VALUES
(126, 71, 'Office', 'Office', 'Office', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', '<p>Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year. <br></p>', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 708, 'office', 'on', '$59 Per Month', '5', '$59 Per Month', 'https://www.youtube.com/embed/A_OU5TPTPEY', '2023-02-19 18:44:34', '2023-02-19 18:44:34'),
(127, 71, 'Office', 'Office', 'Virtual Office', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', '<p>Hot Desks Office solutions for teams of 4 to 9 who need their private \r\nworking area. We provide the fixed assets from the desks, the chairs and\r\n the lighting. You\'ll provide the special something to bring these \r\noffices to life Flexible Membership 25, 50 or 100 day Hot Desk passes \r\nthat you can purhase once and use all throughout the year 25, 50 or 100 \r\nday Hot Desk passes that you can purhase once and use all throughout the\r\n year. </p>', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 709, 'office-2', 'on', '$59 Per Month', '5', '$59 Per Month', 'https://www.youtube.com/embed/A_OU5TPTPEY', '2023-02-19 18:45:35', '2023-02-19 18:45:35'),
(128, 71, 'Office', 'Virtual Office', 'Office', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', '<p>Hot Desks Office solutions for teams of 4 to 9 who need their private \r\nworking area. We provide the fixed assets from the desks, the chairs and\r\n the lighting. You\'ll provide the special something to bring these \r\noffices to life Flexible Membership 25, 50 or 100 day Hot Desk passes \r\nthat you can purhase once and use all throughout the year 25, 50 or 100 \r\nday Hot Desk passes that you can purhase once and use all throughout the\r\n year. </p>', 'Hot Desks Office solutions for teams of 4 to 9 who need their private working area. We provide the fixed assets from the desks, the chairs and the lighting. You\'ll provide the special something to bring these offices to life Flexible Membership 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year 25, 50 or 100 day Hot Desk passes that you can purhase once and use all throughout the year.', 710, 'virtual-office', 'on', '$59 Per Month', '5', '$59 Per Month', 'https://www.youtube.com/embed/A_OU5TPTPEY', '2023-02-19 18:46:07', '2023-02-19 18:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `guard_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(30, 'Super-Admin', 'web', '2020-01-04 14:37:28', '2020-01-04 14:37:28'),
(34, 'User', 'web', '2020-01-04 16:05:35', '2020-01-04 16:05:35'),
(36, 'Supervisors', 'web', '2022-03-03 17:00:53', '2022-03-03 17:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('pfbwK9EpHlGhD0yhLRpsnELfgsjwm4PHCqZLQUrK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR08wUUxtek9XcmhTeUx3SVJNVkNibU5MUkdBbDJRbDlVYVJkVzV5QiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbi9yZWdpc3RlciI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1676844161),
('RG5vzIeaSbNRkC1JKo6GLNWXbaDc65D9Xo4BIwFK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVUVBU1c0dTAzQWM2UnZRTVAxZmxzc3I1Rk1WUkRFRDJaVFFmajZjUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbiI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1696089768);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `ImageUpload_id` varchar(191) DEFAULT '335',
  `Phone` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `ImageUpload_id`, `Phone`, `remember_token`, `slug`, `created_at`, `updated_at`) VALUES
(43, 'Golo', 'Dashbourd@Golo.com', NULL, '$2y$10$c8XhEzVEZDHkzGqRnEfr9uItNi.3eMw5vXU5VF63k53/R0Ivp4fvS', NULL, NULL, '425', '022-222-444', 'lRTDOXYyuQAXzvKG5J8Akxm3k3tZ6Vqkb29vuatlxwWStKVb2esM4ssTnv7q', 'MUSICO', '2020-01-25 15:16:19', '2022-03-03 17:10:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_senses`
--
ALTER TABLE `ad_senses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagrams`
--
ALTER TABLE `instagrams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `options_key_unique` (`key`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_senses`
--
ALTER TABLE `ad_senses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714;

--
-- AUTO_INCREMENT for table `instagrams`
--
ALTER TABLE `instagrams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
