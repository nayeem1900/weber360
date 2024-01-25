-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web360`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_dets`
--

CREATE TABLE `about_dets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_dets`
--

INSERT INTO `about_dets` (`id`, `desc`, `image`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ddddddddd', '202401240511sl3.png', NULL, NULL, 1, '2024-01-23 23:11:11', '2024-01-23 23:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `about_h_s`
--

CREATE TABLE `about_h_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_h_s`
--

INSERT INTO `about_h_s` (`id`, `desc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testtesttest', NULL, NULL, 1, '2024-01-23 02:49:59', '2024-01-23 02:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_download` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `t_date`, `deadline`, `title`, `t_download`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(5, '2021-06-30', '2021-07-15', 'Circular of IBH', '202106301323Circular of IBH.pdf.jpg', 1, NULL, 1, '2021-06-30 18:23:05', '2021-06-30 18:23:05'),
(6, '2021-07-12', '2021-07-31', 'Circular of IBIT', '202107120957Circular of IBIT.jpg', 1, 1, 1, '2021-07-12 14:57:27', '2021-07-12 15:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `client_p_s`
--

CREATE TABLE `client_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_p_s`
--

INSERT INTO `client_p_s` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '202401240927client-5.png', 1, NULL, '2024-01-24 03:27:11', '2024-01-24 03:27:11'),
(3, '202401240929clogo.png', 1, NULL, '2024-01-24 03:29:47', '2024-01-24 03:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `etenders`
--

CREATE TABLE `etenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_download` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etenders`
--

INSERT INTO `etenders` (`id`, `t_date`, `deadline`, `title`, `t_download`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(30, '2021-07-13', '2021-08-04', 'Corrigendum of Neuro surgical Equipment', '202107130600Image_001.pdf', 11, NULL, 1, '2021-07-13 11:00:41', '2021-07-13 11:00:41');

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '2024011411102.png', 1, 1, '2021-03-30 23:46:33', '2024-01-14 05:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 3),
(6, '2014_10_12_000000_create_users_table', 4),
(7, '2021_03_29_120002_create_logos_table', 5),
(8, '2021_03_31_055159_create_sliders_table', 6),
(9, '2021_03_31_074543_create_etenders_table', 7),
(10, '2021_04_13_085942_create_carriers_table', 8),
(13, '2024_01_21_100719_create_wdes_table', 9),
(14, '2024_01_23_071436_create_about_h_s_table', 10),
(15, '2024_01_23_094357_create_about_dets_table', 11),
(16, '2024_01_24_081449_create_client_p_s_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(32, '202401240401baner1.jpg', 1, NULL, '2024-01-23 22:01:33', '2024-01-23 22:01:33'),
(33, '202401240401baner3.jpg', 1, NULL, '2024-01-23 22:01:47', '2024-01-23 22:01:47'),
(34, '202401240402baner2.jpg', 1, NULL, '2024-01-23 22:02:06', '2024-01-23 22:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'operaor,employee,admin',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of software,operator=computer operator,user=employee',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `code`, `role`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Nayeem', 'nayeembd84@gmail.com', NULL, 'Admin', NULL, '$2y$10$h3EMrzKz9IPtPFR8BEqdHe.fB1GQBkeC/vvUZEd18F.U.dSaK4mhq', '01818811220', 's', 'Male', '202103291109unnamed.jpg', 1, NULL, NULL, '2021-05-06 09:35:51'),
(13, 'admin', 'solok', 'contact@weber360.com', '112', 'admin', NULL, '$2y$10$CkMHRxvTbCD2tpjT0B1mX.YogC5I9.gF47FsRlSTK.bzoU.uba.iC', NULL, NULL, NULL, NULL, 1, NULL, '2024-01-21 03:08:55', '2024-01-21 03:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `wdes`
--

CREATE TABLE `wdes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wdes`
--

INSERT INTO `wdes` (`id`, `desc`, `image`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(4, 'ইসলামী ব্যাংক ফাউন্ডেশনের মাননীয় চেয়ারম্যান প্রফেসর ডা. কাজী শহিদুল আলম গোপালগঞ্জে বাংলাদেশের স্থপতি, জাতিরপিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান-এর মাজার জিয়ারত করেন এবং পুষ্পস্তবক', '202401240506sl2.png', NULL, NULL, 1, '2024-01-23 23:06:06', '2024-01-23 23:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_dets`
--
ALTER TABLE `about_dets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_h_s`
--
ALTER TABLE `about_h_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_p_s`
--
ALTER TABLE `client_p_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etenders`
--
ALTER TABLE `etenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wdes`
--
ALTER TABLE `wdes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_dets`
--
ALTER TABLE `about_dets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_h_s`
--
ALTER TABLE `about_h_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client_p_s`
--
ALTER TABLE `client_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etenders`
--
ALTER TABLE `etenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wdes`
--
ALTER TABLE `wdes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
