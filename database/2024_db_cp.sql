-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2024 at 10:26 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2024_db_cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `3d_model_contents`
--

DROP TABLE IF EXISTS `3d_model_contents`;
CREATE TABLE IF NOT EXISTS `3d_model_contents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `3d_model_contents`
--

INSERT INTO `3d_model_contents` (`id`, `title`, `client`, `date`, `image`, `created_at`, `updated_at`) VALUES
(2, 'aep', 'aep', '2024-08-14', 'images/9eoviNmgXE1pBceXjWBQ8UqORmSmMrjMnDNdSVqY.png', '2024-08-14 02:21:32', '2024-08-14 02:21:32'),
(3, 'BPC HIPMI MEDAN', 'BPC HIPMI MEDAN', '2023-08-24', 'images/VycyLc8Xjq1vJFpgNwMq7uqv7osdfs8Gbh0NecnE.jpg', '2024-08-25 21:50:58', '2024-08-25 21:50:58'),
(4, 'Ground Breaking Underpass Gatot Subroto Medan', 'Kementrian PUPR', '2023-08-24', 'images/MeG0XMI8TTPp4FiRg9VthTOgY5zglxsWk9AJTMq7.jpg', '2024-08-25 21:53:27', '2024-08-25 21:53:27'),
(5, 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utara', 'Kementrian PUPR', '2024-03-26', 'images/mdnrUrRYbk0ApWPIhHwCRjgLfUBgcz8yU7aKDns1.jpg', '2024-08-25 21:54:17', '2024-08-25 21:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graphic_contents`
--

DROP TABLE IF EXISTS `graphic_contents`;
CREATE TABLE IF NOT EXISTS `graphic_contents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graphic_contents`
--

INSERT INTO `graphic_contents` (`id`, `title`, `client`, `date`, `image`, `created_at`, `updated_at`) VALUES
(1, 'asdga', 'asdg', '2024-07-29', 'images/KgdB2tfjAcm53MfzqcHD6GIw5UMLxXFKNZkJnKG4.jpg', '2024-07-29 08:22:34', '2024-07-29 08:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

DROP TABLE IF EXISTS `home_contents`;
CREATE TABLE IF NOT EXISTS `home_contents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `title`, `client`, `date`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Peresmian Pelaksanaan Instruksi Presiden Jalan Daerah di Sumatera Utara', 'Kementrian PUPR', '2024-03-11', 'images/NXIV7ILYxMdKQG0EfxQqzcpH7L9YiFfIBuwTXyJA.jpg', '2024-08-25 21:36:34', '2024-08-25 21:36:34'),
(5, 'AL-AMJAD 8TH ANNIVERSARY', 'AL-AMJAD Islamic School', '2024-05-23', 'images/fRyapTht5wjnFEWzumtB1waVrxla44xBfX5X4Q7S.jpg', '2024-08-25 21:40:11', '2024-08-25 21:40:11'),
(6, 'Wisuda Program Sarjana, Magister, & Doktor Periode I Tahun 2024', 'Universitas Medan Area', '2024-06-26', 'images/PjhjsyscIMIf9E7ZhLd6yyrG950XrDf68vpT3JYE.jpg', '2024-08-25 21:40:52', '2024-08-25 21:40:52'),
(7, 'Pelantikan Badan Otonom', 'BPD HIPMI Sumatera Utara', '2023-08-25', 'images/oCWF0AnImrW497gqBwa2tsOyk8QFH8EAsweyPzZk.jpg', '2024-08-25 21:42:29', '2024-08-25 21:42:29');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_07_27_053624_create_home_contents_table', 2),
(7, '2024_07_27_063020_update_home_contents_table', 2),
(8, '2024_07_27_165557_create_partner_contents_table', 3),
(9, '2024_07_27_172015_add_timestamps_to_partner_contents', 4),
(10, '2024_07_27_173004_remove_content_from_partner_contents', 5),
(11, '2024_07_27_173718_add_id_to_partner_contents', 6),
(12, '2024_07_29_132922_create_wedding_contents_table', 7),
(13, '2024_07_29_132953_create_3d_model_contents_table', 7),
(14, '2024_07_29_133030_create_graphic_contents_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `partner_contents`
--

DROP TABLE IF EXISTS `partner_contents`;
CREATE TABLE IF NOT EXISTS `partner_contents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_contents`
--

INSERT INTO `partner_contents` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(4, 'PEMPROV USU', 'images/oRlUOCDCPcbZ9UJOwt0AhXFoeUIzZSpQWcxpb2UC.png', '2024-08-25 21:56:10', '2024-08-25 21:56:10'),
(3, 'USU', 'images/qhfMYXuvxNyzjT9j8ZuXjU4iaA3Va7Zv1nIYEK2Z.png', '2024-08-25 21:55:40', '2024-08-25 21:55:40'),
(5, 'BUMN', 'images/LBhgUnFTE9CHwUt42NxGTGtLjLctCtryyGZwHS9z.png', '2024-08-25 21:56:55', '2024-08-25 21:56:55'),
(6, 'PEMKO MEDAN', 'images/qWR07RUkG2kTBAHRqWcob4Tl5ufbV9DVEv7xJAlR.png', '2024-08-25 22:02:12', '2024-08-25 22:02:12'),
(7, 'AL AMJAD', 'images/A852wz2gdfVvkHq2XtGE2KJdLaNKeIJPJcnZav3q.png', '2024-08-25 22:02:34', '2024-08-25 22:02:34'),
(8, 'BPD HIPMI SUMUT', 'images/sZO1YtIiMwrTPIlid3JsmH4rlrHvN8iBHblHve09.png', '2024-08-25 22:02:50', '2024-08-25 22:02:50'),
(9, 'PTPN 4', 'images/JUbnfewxtXI7HTZvr8n5WmCgbFcTv6bkffH989F3.png', '2024-08-25 22:03:32', '2024-08-25 22:03:32'),
(10, 'PTPN 3', 'images/6esAxxcBy1T5TEPaHCI5yxzCvmD77ShJeYjG346y.png', '2024-08-25 22:04:42', '2024-08-25 22:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$hyIlODwTbES8eSW4ZhXUR.Ee6MW7UiQcYfH5LCLhE25MbpPoJrOOG', NULL, '2024-07-26 21:40:48', '2024-07-26 21:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_contents`
--

DROP TABLE IF EXISTS `wedding_contents`;
CREATE TABLE IF NOT EXISTS `wedding_contents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_contents`
--

INSERT INTO `wedding_contents` (`id`, `title`, `client`, `date`, `image`, `created_at`, `updated_at`) VALUES
(1, 'asdasda', 'asdasd', '2024-07-29', 'images/7n6y5bKjjorp10nE17TEZkLWE8aG1HjP5Fweucqm.jpg', '2024-07-29 07:49:20', '2024-07-29 07:51:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
