-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 09:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wozah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auth_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `auth_id`, `cat_name`, `cat_type`, `file`, `created_at`, `updated_at`) VALUES
(1, '1', 'Salon Service', 'Hair Cutting', '20220629105214.jpg', '2022-06-29 04:52:34', '2022-06-29 04:52:34'),
(2, '5', 'Skin Care Service', 'Manicure', '202207031127brasil.jpg', '2022-07-03 05:27:26', '2022-07-03 05:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orig_filename` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filesize` bigint(20) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2014_10_12_000000_create_users_table', 1),
(43, '2014_10_12_100000_create_password_resets_table', 1),
(44, '2019_08_19_000000_create_failed_jobs_table', 1),
(45, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(46, '2022_06_19_112353_create_shop__information_table', 1),
(47, '2022_06_21_094430_create_files_table', 1),
(48, '2022_06_22_052936_create_otp__verifies_table', 1),
(49, '2022_06_27_062936_create_categories_table', 1),
(50, '2022_06_27_063001_create_sub_categories_table', 1),
(52, '2022_06_29_103720_create_services_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `otp__verifies`
--

CREATE TABLE `otp__verifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_at` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otp__verifies`
--

INSERT INTO `otp__verifies` (`id`, `mobile`, `otp`, `verified_at`, `created_at`, `updated_at`) VALUES
(1, '01720972180', '', 1, '2022-06-28 04:16:39', '2022-06-28 04:17:22'),
(2, '12', '7319', 0, '2022-07-16 23:45:19', '2022-07-16 23:45:19');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auth_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_info1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_info2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_info3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_info4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_info5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `auth_id`, `cat_id`, `subcat_id`, `add_info1`, `add_info2`, `add_info3`, `add_info4`, `add_info5`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'fb', 'fghfd', 'hgf', 'ghf', 'ghfg', '2022-06-29 05:00:21', '2022-06-29 05:00:21'),
(2, '5', '2', '2', 'dsfsdf', 'dsfsdf', 'dfsdf', 'dfsfsd', 'dfsff', '2022-07-03 05:30:57', '2022-07-03 05:30:57'),
(3, '1', '1', '3', 'dfgdfgf', 'dgdfgdf', 'dfgdf', 'gfdfgdf', 'fgddfgdf', '2022-07-05 05:06:04', '2022-07-05 05:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `shop__information`
--

CREATE TABLE `shop__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_ien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_registration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nail_salon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_insurance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_workers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_at` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop__information`
--

INSERT INTO `shop__information` (`id`, `user_id`, `b_ien`, `b_certificate`, `b_registration`, `nail_salon`, `e_certificate`, `b_insurance`, `b_workers`, `driver_license`, `verified_at`, `created_at`, `updated_at`) VALUES
(2, '1', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 'Grocery-Marchent.pdf', 1, '2022-06-28 01:05:31', '2022-06-28 01:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auth_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `auth_id`, `cat_id`, `subcat_name`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Straight Hair', '$10.00 /person', '2022-06-29 04:53:20', '2022-06-29 04:53:20'),
(2, '5', '2', 'Foot Nail', '$10.00 /person', '2022-07-03 05:30:39', '2022-07-03 05:30:39'),
(3, '1', '1', 'Wavy Hair', '$20.00 /person', '2022-07-05 05:05:21', '2022-07-05 05:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `b_legal_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_dba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_number_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apt_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_number_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apt_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_street_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_apt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `shop_name`, `shop_address`, `phone`, `email`, `email_verified_at`, `password`, `role_id`, `b_legal_name`, `b_dba`, `street_number_b`, `apt_b`, `city_b`, `state_b`, `zip_b`, `street_number_c`, `apt_c`, `city_c`, `state_c`, `zip_c`, `customer_address`, `customer_street_name`, `customer_street_number`, `customer_apt`, `customer_city`, `customer_state`, `customer_zip`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Rigal Raptor', 'USA', '01680419920', 'ma@ma.com', NULL, '$2y$10$A49tSQr/jGYfxwbR9D4DVeP/Y1eqtmqkJQJHrTZquA5kuwqxQSkTy', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-28 00:15:51', '2022-06-28 00:15:51'),
(5, NULL, NULL, 'Shawpno', 'Uttara', '01720972180', 'ma1@ma.com', NULL, '$2y$10$GAwXZigIc20BaxFuarijF.is9f.Yp/bmPuKYDmzKsvJ60dCSIGpri', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 04:25:40', '2022-07-03 04:25:40'),
(6, NULL, NULL, 'f', 'sad', '12', 'maf@ma.com', NULL, '$2y$10$TtiPFhclRqZPkB.CHlX2MeTMVA1PHjiFbEmyz0hKLRLFRWrIXoHaq', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-16 23:36:11', '2022-07-16 23:36:11'),
(7, NULL, NULL, 'ff', 'gf', '23', 'maer@ma.com', NULL, '$2y$10$IKt37D.R4S..Nwq8kO.GtuxzJKxd5Nf2fBK3CSqINY/PuU/kCQaSW', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-17 04:54:03', '2022-07-17 04:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp__verifies`
--
ALTER TABLE `otp__verifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop__information`
--
ALTER TABLE `shop__information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `otp__verifies`
--
ALTER TABLE `otp__verifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop__information`
--
ALTER TABLE `shop__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
