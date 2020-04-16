-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 07:16 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gif`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `plan_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', '1KG Idly/Dhosa Batter', '1kg idly/dosa batter with sambar (1litre)', '2020-04-08 07:06:48', '2020-04-08 07:06:48'),
(2, '1', 'Filter coffee', 'Free filter coffee decoction', '2020-04-08 07:06:48', '2020-04-08 07:06:48'),
(7, '4', 'Idly/Dosa Batter', '1 KG', '2020-04-14 12:43:59', '2020-04-14 12:43:59'),
(8, '4', 'Sambhar', '1 Ltr', '2020-04-14 12:43:59', '2020-04-14 12:43:59'),
(9, '4', 'Filter Coffee Decoction', 'Free', '2020-04-14 12:43:59', '2020-04-14 12:43:59'),
(13, '6', 'Sambhar', 'For Family of 4', '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(14, '6', 'Rasam', 'For Family of 4', '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(15, '6', 'Kootu', 'For Family of 4', '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(16, '6', 'Poriyal', 'For Family of 4', '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(17, '7', '3 Variety Lunch', 'Mixed Rice', '2020-04-14 12:59:43', '2020-04-14 12:59:43');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_07_062320_create_plans_table', 1),
(5, '2020_04_07_062459_create_plan_pictures_table', 1),
(6, '2020_04_07_062917_create_menus_table', 1),
(7, '2020_04_09_060926_create_subscribes_table', 1),
(8, '2020_04_15_095320_add_new_column_to_users_table', 1);

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seven_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fifteen_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `one_price`, `seven_price`, `fifteen_price`, `month_price`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(1, 'For a family of 4 edited', '120', '1500', '2756', '3200', 'idly,dhosa,coffee,edited', 'active', '2020-04-08 07:06:48', '2020-04-14 12:59:58'),
(4, 'Breakfast Menu (For a Family of 4)', '220', '1500', '2750', '4800', 'breakfast,dosa,idly,sambhar', 'active', '2020-04-14 12:43:59', '2020-04-14 12:43:59'),
(6, 'Lunch Exclusive (Family Pack)', '250', '1500', '2750', '4800', 'sambar,rasama,kootu,poriyal,homemade,lunch', 'active', '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(7, 'Lunch Exclusive (Bachelors Pack)', '120', '840', '1650', '3000', 'variety,rice,bachelors,homemade', 'active', '2020-04-14 12:59:43', '2020-04-14 12:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `plan_pictures`
--

CREATE TABLE `plan_pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortingOrder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_pictures`
--

INSERT INTO `plan_pictures` (`id`, `plan_id`, `path`, `sortingOrder`, `created_at`, `updated_at`) VALUES
(1, '1', 'Food_Hero_Image_1586349408.jpg', NULL, '2020-04-08 07:06:49', '2020-04-08 07:06:49'),
(2, '1', 'Pancakes-2_1586349409.jpg', NULL, '2020-04-08 07:06:49', '2020-04-08 07:06:49'),
(3, '4', 'cecb013d9e66f27b2e6180b063697b59_1586868239.jpg', NULL, '2020-04-14 12:43:59', '2020-04-14 12:43:59'),
(4, '4', 'paper-dosa-idli-and-vada_1586868239.jpg', NULL, '2020-04-14 12:43:59', '2020-04-14 12:43:59'),
(5, '6', 'carrot-beans-poriyal-final_1586868876.jpg', NULL, '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(6, '6', 'rasam-recipe-2-500x375_1586868876.jpg', NULL, '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(7, '6', 'Pumpkin_sambar_1586868876.jpg', NULL, '2020-04-14 12:54:36', '2020-04-14 12:54:36'),
(8, '7', 'South-Indian-Variety-Rice-Recipe_1586869183.jpg', NULL, '2020-04-14 12:59:43', '2020-04-14 12:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` longtext COLLATE utf8mb4_unicode_ci,
  `doorno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postelcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `timeslot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `plan_id`, `user_id`, `payment_id`, `totalamount`, `duration`, `dates`, `doorno`, `street`, `city`, `postelcode`, `status`, `timeslot`, `created_at`, `updated_at`) VALUES
(1, '7', '1', 'pay_EeeVaTOZlWkawg', '840', '7', '29-04-2020,22-04-2020,20-04-2020,26-04-2020,19-04-2020,27-04-2020,28-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', NULL, '2020-04-15 00:21:17', '2020-04-15 00:21:17'),
(2, '4', '1', 'pay_EeeXk7Pcr9uCBw', '220', '1', '22-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '8.00 AM -11.00 PM', '2020-04-15 00:23:38', '2020-04-15 00:23:38'),
(3, '4', '1', 'pay_Eeh7Ji8Qn4pMk7', '220', '1', '20-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-15 02:54:22', '2020-04-15 02:54:22'),
(4, '7', '1', 'pay_Eeh8EpYB1mGiib', '120', '1', '29-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-15 02:55:14', '2020-04-15 02:55:14'),
(5, '1', '1', 'pay_Eeh9foKo7zoj1s', '120', '1', '21-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-15 02:56:35', '2020-04-15 02:56:35'),
(6, '6', '1', 'pay_EehBTIfm7AbOAW', '250', '1', '20-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-15 02:58:20', '2020-04-15 02:58:20'),
(7, '6', '1', 'pay_EehBTIfm7AbOAW', '250', '1', '20-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-15 02:58:24', '2020-04-15 02:58:24'),
(8, '6', '1', 'pay_EehBTIfm7AbOAW', '250', '1', '20-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-15 02:58:28', '2020-04-15 02:58:28'),
(9, '6', '2', 'pay_EeiBmYxMrQtrqA', '2750', '15', '16-04-2020,23-04-2020,24-04-2020,25-04-2020,29-04-2020,30-04-2020,28-04-2020,27-04-2020,26-04-2020,19-04-2020,20-04-2020,21-04-2020,22-04-2020,17-04-2020,18-04-2020', '123', 'Dubai Dubaimain Road', 'Dubai', '123456', 'active', '11.30 AM - 01.00 PM', '2020-04-15 09:27:21', '2020-04-15 23:46:01'),
(10, '6', '1', 'pay_Ef2PkwmP5YHpip', '250', '1', '21-04-2020', 'Chromepet', '600044', 'new colony', '600044', 'active', '06.30 AM - 09.00 AM', '2020-04-16 05:14:27', '2020-04-16 05:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-profile-pic.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `profile_picture`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`, `facebook_id`) VALUES
(1, 'Admin', 'admin@gif.com', '123456', 'no-profile-pic.png', NULL, '$2y$10$ZpHuvxvBTe4lYrU4XIRx2.Y4fE8jMP7WlACtelyky/qE7s8nJ3Qbq', 'admin', NULL, '2020-04-15 23:32:18', '2020-04-15 23:32:18', NULL),
(2, 'Praveenram', 'praveenrambalu@gmail.com', '8220085613', 'no-profile-pic.png', NULL, NULL, 'user', NULL, '2020-04-15 23:33:23', '2020-04-15 23:38:32', '1369150953280557');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_pictures`
--
ALTER TABLE `plan_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan_pictures`
--
ALTER TABLE `plan_pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
