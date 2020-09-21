-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 07:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcm_kamal`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_models`
--

CREATE TABLE `agent_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_models`
--

INSERT INTO `agent_models` (`id`, `user_id`, `name`, `mobile`, `pakage`, `bill`, `status`, `created_at`, `updated_at`) VALUES
(5, '7', 'Md Abubakar', '01775566111', '100', '10000', 1, '2020-08-05 09:30:47', '2020-08-05 09:33:44'),
(6, '1', 'Md Kamal', '01726122917', '8', '700', 1, '2020-08-05 10:09:41', '2020-08-05 10:09:41'),
(7, '2', 'Md Abubakar', '01775566584', '3', '500', 1, '2020-08-09 10:30:42', '2020-08-09 10:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_lists`
--

CREATE TABLE `bill_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `january` int(11) NOT NULL DEFAULT 0,
  `february` int(11) NOT NULL DEFAULT 0,
  `march` int(11) NOT NULL DEFAULT 0,
  `april` int(11) NOT NULL DEFAULT 0,
  `may` int(11) NOT NULL DEFAULT 0,
  `june` int(11) NOT NULL DEFAULT 0,
  `july` int(11) NOT NULL DEFAULT 0,
  `august` int(11) NOT NULL DEFAULT 0,
  `september` int(11) NOT NULL DEFAULT 0,
  `october` int(11) NOT NULL DEFAULT 0,
  `november` int(11) NOT NULL DEFAULT 0,
  `december` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_lists`
--

INSERT INTO `bill_lists` (`id`, `user_id`, `name`, `mobile`, `agent`, `bill`, `status`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`, `created_at`, `updated_at`) VALUES
(4, 2, 'Rahmat Ullah Bin Ahmad', '01720027486', '2', 1000, 1, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, '2020-08-31 05:13:52', '2020-08-31 16:43:59'),
(7, 5, 'Md Abubakar', '01775566584', '2', 600, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, '2020-08-31 15:53:49', '2020-08-31 16:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mbill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `username`, `type`, `package`, `mobile`, `password`, `ip`, `mbill`, `address`, `agent`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Rahmat Ullah Bin Ahmad', 'admin', '2', '100', '01720027486', '123456', '1112323', '1000', 'barguna', '2', '1', '2020-08-31 05:02:07', '2020-08-31 05:13:52'),
(5, 'Md Abubakar', 'admin', '2', '122', '01775566584', '12345', '1122', '600', 'Barguna', '2', '1', '2020-08-31 15:32:28', '2020-08-31 15:56:03'),
(6, 'Md Manik', 'Manikbd', '1', '12', '01775567652', '12345678', '12345', '700', 'Barguna', '2', '2', '2020-09-07 02:25:40', '2020-09-07 02:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `client_bills`
--

CREATE TABLE `client_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bm_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_bills`
--

INSERT INTO `client_bills` (`id`, `user_id`, `agent`, `name`, `mobile`, `bm_mobile`, `bill_date`, `bill`, `created_at`, `updated_at`) VALUES
(16, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '01-2020', '1000', '2020-08-31 15:04:35', '2020-08-31 15:04:35'),
(17, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '01-2020', '600', '2020-08-31 16:09:40', '2020-08-31 16:09:40'),
(18, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '02-2020', '600', '2020-08-31 16:13:35', '2020-08-31 16:13:35'),
(19, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '02-2020', '1000', '2020-08-31 16:13:41', '2020-08-31 16:13:41'),
(20, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '03-2020', '600', '2020-08-31 16:13:46', '2020-08-31 16:13:46'),
(21, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '04-2020', '600', '2020-08-31 16:13:50', '2020-08-31 16:13:50'),
(22, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '05-2020', '600', '2020-08-31 16:13:54', '2020-08-31 16:13:54'),
(23, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '06-2020', '600', '2020-08-31 16:13:58', '2020-08-31 16:13:58'),
(24, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '07-2020', '600', '2020-08-31 16:14:02', '2020-08-31 16:14:02'),
(25, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '08-2020', '600', '2020-08-31 16:14:06', '2020-08-31 16:14:06'),
(26, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '08-2020', '1000', '2020-08-31 16:14:10', '2020-08-31 16:14:10'),
(27, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '07-2020', '1000', '2020-08-31 16:14:14', '2020-08-31 16:14:14'),
(28, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '06-2020', '1000', '2020-08-31 16:14:18', '2020-08-31 16:14:18'),
(29, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '05-2020', '1000', '2020-08-31 16:14:22', '2020-08-31 16:14:22'),
(30, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '04-2020', '1000', '2020-08-31 16:14:25', '2020-08-31 16:14:25'),
(31, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '03-2020', '1000', '2020-08-31 16:14:29', '2020-08-31 16:14:29'),
(32, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '09-2020', '600', '2020-08-31 16:22:10', '2020-08-31 16:22:10'),
(33, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '09-2020', '1000', '2020-08-31 16:35:54', '2020-08-31 16:35:54'),
(34, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '12-2020', '600', '2020-08-31 16:40:43', '2020-08-31 16:40:43'),
(35, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '12-2020', '1000', '2020-08-31 16:40:49', '2020-08-31 16:40:49'),
(36, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '10-2020', '1000', '2020-08-31 16:43:38', '2020-08-31 16:43:38'),
(37, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '10-2020', '600', '2020-08-31 16:43:45', '2020-08-31 16:43:45'),
(38, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '11-2020', '600', '2020-08-31 16:43:51', '2020-08-31 16:43:51'),
(39, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '11-2020', '1000', '2020-08-31 16:43:59', '2020-08-31 16:43:59'),
(40, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '01-2020', '600', '2020-08-31 17:10:11', '2020-08-31 17:10:11'),
(41, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '01-2020', '1000', '2020-08-31 17:10:21', '2020-08-31 17:10:21'),
(42, '7', '2', 'Md Abubakar', '01775566584', '01775566584', '01-2020', '600', '2020-08-31 17:10:53', '2020-08-31 17:10:53'),
(43, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '01-2020', '1000', '2020-08-31 17:10:59', '2020-08-31 17:10:59'),
(44, '2', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '02-2020', '1000', '2020-08-31 17:12:01', '2020-08-31 17:12:01'),
(45, '2', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '02-2020', '1000', '2020-08-31 17:12:36', '2020-08-31 17:12:36'),
(46, '2', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '02-2020', '1000', '2020-08-31 17:13:57', '2020-08-31 17:13:57'),
(47, '4', '2', 'Rahmat Ullah Bin Ahmad', '01720027486', '01775566584', '02-2020', '1000', '2020-08-31 17:14:05', '2020-08-31 17:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `line_manes`
--

CREATE TABLE `line_manes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `status` int(11) NOT NULL DEFAULT 1,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_07_22_165102_create_roles_table', 2),
(8, '2020_07_23_123919_create_line_manes_table', 4),
(10, '2020_07_23_205053_create_yearlies_table', 5),
(14, '2020_07_31_000045_create_agent_models_table', 8),
(15, '2014_10_12_000000_create_users_table', 9),
(16, '2020_07_23_123819_create_clients_table', 10),
(20, '2020_08_09_164821_create_bill_lists_table', 11),
(22, '2020_08_16_123641_create_app_models_table', 12),
(23, '2020_07_23_131949_create_client_bills_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('asonlinebd18@gmail.com', '$2y$10$GOhMEbMatKSAjk0rjISMwO/E.q2l55bxKZFgFndl.FmISix.RsNpK', '2020-07-22 10:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `company`, `email`, `mobile`, `agent_id`, `role_id`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Kamal Hossain', 'Broadband Management', 'kamalbd@gmail.com', '01725058459', 1, 1, 1, NULL, '$2y$10$TguSNFuAvzZ6fT09XwPGNO3HcKZaJ7jT3/YAuQroaHPW0lJNsRoiC', NULL, '2020-08-09 10:03:37', '2020-08-09 10:03:37'),
(2, 'Md Abubakar', 'Barguna It', 'bargunait25@gmail.com', '01775566584', 1, 2, 1, NULL, '$2y$10$i7TuY1NIaVVsxhDjmTWdaex3XP5WlZDZafWJJ/vd.9A.tUF1E/JI2', NULL, '2020-08-09 10:05:10', '2020-08-09 10:05:10'),
(3, 'Muhammad Abdullah', 'Barguna It', 'bm@gmail.com', '01961721145', 2, 3, 1, NULL, '$2y$10$FIUY8SZlNsKSchcdn4exteHauUC7M2olTsEwFYW6zmFr./2GX4ek.', NULL, '2020-08-09 10:16:13', '2020-08-09 10:16:13'),
(4, 'Md Abubakar', 'Barguna It', 'bargunait26@gmail.com', '01775566583', 2, 3, 1, NULL, '$2y$10$0NI2nXIlHkiRKiUzIMPfWubIEXZI9aTKUOTfYwpAd86Or5fRyTg26', NULL, '2020-09-07 02:41:32', '2020-09-07 02:41:32'),
(5, 'Ali Nur', 'Barguna It', 'alinur20@gmail.com', '01772244584', 2, 3, 0, NULL, '$2y$10$eM6jjSvfYm0FncnVB0safejFou4s/PtwVr3.BFIfo81xVmSNWnmq6', NULL, '2020-09-07 02:42:01', '2020-09-07 02:42:01'),
(6, 'Al Mahfuz Siddique', 'Barguna It', 'almahfuz@gmail.com', '01775524366', 2, 3, 1, NULL, '$2y$10$xC0WQzjTJkRV93NwSiUSSO5S6KFU8H6Rls9EttNNmVtubL/a4ixH6', NULL, '2020-09-07 02:42:52', '2020-09-07 02:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `yearlies`
--

CREATE TABLE `yearlies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_models`
--
ALTER TABLE `agent_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_lists`
--
ALTER TABLE `bill_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_bills`
--
ALTER TABLE `client_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line_manes`
--
ALTER TABLE `line_manes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `line_manes_email_unique` (`email`),
  ADD UNIQUE KEY `line_manes_mobile_unique` (`mobile`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `yearlies`
--
ALTER TABLE `yearlies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_models`
--
ALTER TABLE `agent_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_lists`
--
ALTER TABLE `bill_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_bills`
--
ALTER TABLE `client_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `line_manes`
--
ALTER TABLE `line_manes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `yearlies`
--
ALTER TABLE `yearlies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
