-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2021 at 03:11 AM
-- Server version: 8.0.26-0ubuntu0.21.04.3
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fileapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_04_214027_create_posts_table', 1),
(5, '2021_08_04_235535_update_posts_table', 2),
(6, '2021_08_05_002045_update2_posts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int UNSIGNED NOT NULL,
  `invoiceno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stockcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `invoicedate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitprice` double(8,2) NOT NULL,
  `customerid` int DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `invoiceno`, `stockcode`, `description`, `quantity`, `invoicedate`, `unitprice`, `customerid`, `country`, `created_at`, `updated_at`) VALUES
(1, '536365', '85123A', 'WHITE HANGING HEART T-LIGHT HOLDER', '6.00', '12/1/2010 8:26', 2.55, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:40:17'),
(2, '536365', '71053', 'WHITE METAL LANTERN', '6.00', '12/1/2010 8:26', 3.39, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:22:36'),
(3, '536365', '84406B', 'CREAM CUPID HEARTS COAT HANGER', '8.00', '12/1/2010 8:26', 2.75, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:22:36'),
(4, '536365', '84029G', 'KNITTED UNION FLAG HOT WATER BOTTLE', '6.00', '12/1/2010 8:26', 3.39, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:22:36'),
(5, '536365', '84029E', 'RED WOOLLY HOTTIE WHITE HEART.', '6.00', '12/1/2010 8:26', 3.39, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:22:36'),
(6, '536365', '22752', 'SET 7 BABUSHKA NESTING BOXES', '2.00', '12/1/2010 8:26', 7.65, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:22:36'),
(7, '536365', '21730', 'GLASS STAR FROSTED T-LIGHT HOLDER', '6.00', '12/1/2010 8:26', 4.25, 17850, '17850', '2021-08-04 21:22:36', '2021-08-04 21:22:36'),
(8, '536366', '22633', 'HAND WARMER UNION JACK', '6.00', '12/1/2010 8:28', 1.85, 17850, '17850', '2021-08-04 21:22:37', '2021-08-04 21:22:37'),
(9, '536366', '22632', 'HAND WARMER RED POLKA DOT', '6.00', '12/1/2010 8:28', 1.85, 17850, '17850', '2021-08-04 21:22:37', '2021-08-04 21:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
